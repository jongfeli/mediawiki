<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

namespace MediaWiki\Page;

use LogicException;
use MediaWiki\Block\DatabaseBlock;
use MediaWiki\Block\DatabaseBlockStore;
use MediaWiki\Cache\HTMLFileCache;
use MediaWiki\CommentFormatter\CommentFormatter;
use MediaWiki\Context\IContextSource;
use MediaWiki\Context\RequestContext;
use MediaWiki\EditPage\EditPage;
use MediaWiki\Exception\PermissionsError;
use MediaWiki\HookContainer\HookRunner;
use MediaWiki\HookContainer\ProtectedHookAccessorTrait;
use MediaWiki\Html\Html;
use MediaWiki\JobQueue\JobQueueGroup;
use MediaWiki\JobQueue\Jobs\ParsoidCachePrewarmJob;
use MediaWiki\Language\Language;
use MediaWiki\Linker\Linker;
use MediaWiki\Linker\LinkRenderer;
use MediaWiki\Logging\LogEventsList;
use MediaWiki\MainConfigNames;
use MediaWiki\MediaWikiServices;
use MediaWiki\Message\Message;
use MediaWiki\Output\OutputPage;
use MediaWiki\Parser\Parser;
use MediaWiki\Parser\ParserOptions;
use MediaWiki\Parser\ParserOutput;
use MediaWiki\Permissions\Authority;
use MediaWiki\Permissions\PermissionStatus;
use MediaWiki\Permissions\RestrictionStore;
use MediaWiki\RecentChanges\RecentChange;
use MediaWiki\Revision\ArchivedRevisionLookup;
use MediaWiki\Revision\BadRevisionException;
use MediaWiki\Revision\RevisionRecord;
use MediaWiki\Revision\RevisionStore;
use MediaWiki\Revision\SlotRecord;
use MediaWiki\Status\Status;
use MediaWiki\Title\Title;
use MediaWiki\User\Options\UserOptionsLookup;
use MediaWiki\User\UserIdentity;
use MediaWiki\User\UserNameUtils;
use Wikimedia\HtmlArmor\HtmlArmor;
use Wikimedia\IPUtils;
use Wikimedia\NonSerializable\NonSerializableTrait;
use Wikimedia\Rdbms\IConnectionProvider;

/**
 * Legacy class representing an editable page and handling UI for some page actions.
 *
 * This has largely been superseded by WikiPage, with Action subclasses for the
 * user interface of page actions, and service classes for their backend logic.
 *
 * @todo Move and refactor remaining code
 * @todo Deprecate
 */
class Article implements Page {
	use ProtectedHookAccessorTrait;
	use NonSerializableTrait;

	/**
	 * @var IContextSource|null The context this Article is executed in.
	 * If null, RequestContext::getMain() is used.
	 * @deprecated since 1.35, must be private, use {@link getContext}
	 */
	protected $mContext;

	/** @var WikiPage The WikiPage object of this instance */
	protected $mPage;

	/**
	 * @var int|null The oldid of the article that was requested to be shown,
	 * 0 for the current revision.
	 */
	public $mOldId;

	/** @var Title|null Title from which we were redirected here, if any. */
	public $mRedirectedFrom = null;

	/** @var string|false URL to redirect to or false if none */
	public $mRedirectUrl = false;

	/**
	 * @var Status|null represents the outcome of fetchRevisionRecord().
	 * $fetchResult->value is the RevisionRecord object, if the operation was successful.
	 */
	private $fetchResult = null;

	/**
	 * @var ParserOutput|null|false The ParserOutput generated for viewing the page,
	 * initialized by view(). If no ParserOutput could be generated, this is set to false.
	 * @deprecated since 1.32
	 */
	public $mParserOutput = null;

	/**
	 * @var bool Whether render() was called. With the way subclasses work
	 * here, there doesn't seem to be any other way to stop calling
	 * OutputPage::enableSectionEditLinks() and still have it work as it did before.
	 */
	protected $viewIsRenderAction = false;

	protected LinkRenderer $linkRenderer;
	private RevisionStore $revisionStore;
	private UserNameUtils $userNameUtils;
	private UserOptionsLookup $userOptionsLookup;
	private CommentFormatter $commentFormatter;
	private WikiPageFactory $wikiPageFactory;
	private JobQueueGroup $jobQueueGroup;
	private ArchivedRevisionLookup $archivedRevisionLookup;
	protected IConnectionProvider $dbProvider;
	protected DatabaseBlockStore $blockStore;

	protected RestrictionStore $restrictionStore;

	/**
	 * @var RevisionRecord|null Revision to be shown
	 *
	 * Initialized by getOldIDFromRequest() or fetchRevisionRecord(). While the output of
	 * Article::view is typically based on this revision, it may be replaced by extensions.
	 */
	private $mRevisionRecord = null;

	/**
	 * @param Title $title
	 * @param int|null $oldId Revision ID, null to fetch from request, zero for current
	 */
	public function __construct( Title $title, $oldId = null ) {
		$this->mOldId = $oldId;
		$this->mPage = $this->newPage( $title );

		$services = MediaWikiServices::getInstance();
		$this->linkRenderer = $services->getLinkRenderer();
		$this->revisionStore = $services->getRevisionStore();
		$this->userNameUtils = $services->getUserNameUtils();
		$this->userOptionsLookup = $services->getUserOptionsLookup();
		$this->commentFormatter = $services->getCommentFormatter();
		$this->wikiPageFactory = $services->getWikiPageFactory();
		$this->jobQueueGroup = $services->getJobQueueGroup();
		$this->archivedRevisionLookup = $services->getArchivedRevisionLookup();
		$this->dbProvider = $services->getConnectionProvider();
		$this->blockStore = $services->getDatabaseBlockStore();
		$this->restrictionStore = $services->getRestrictionStore();
	}

	/**
	 * @param Title $title
	 * @return WikiPage
	 */
	protected function newPage( Title $title ) {
		return new WikiPage( $title );
	}

	/**
	 * Constructor from a page id
	 * @param int $id Article ID to load
	 * @return Article|null
	 */
	public static function newFromID( $id ) {
		$t = Title::newFromID( $id );
		return $t === null ? null : new static( $t );
	}

	/**
	 * Create an Article object of the appropriate class for the given page.
	 *
	 * @param Title $title
	 * @param IContextSource $context
	 * @return Article
	 */
	public static function newFromTitle( $title, IContextSource $context ): self {
		if ( $title->getNamespace() === NS_MEDIA ) {
			// XXX: This should not be here, but where should it go?
			$title = Title::makeTitle( NS_FILE, $title->getDBkey() );
		}

		$page = null;
		( new HookRunner( MediaWikiServices::getInstance()->getHookContainer() ) )
			// @phan-suppress-next-line PhanTypeMismatchArgument Type mismatch on pass-by-ref args
			->onArticleFromTitle( $title, $page, $context );
		if ( !$page ) {
			switch ( $title->getNamespace() ) {
				case NS_FILE:
					$page = new ImagePage( $title );
					break;
				case NS_CATEGORY:
					$page = new CategoryPage( $title );
					break;
				default:
					$page = new Article( $title );
			}
		}
		$page->setContext( $context );

		return $page;
	}

	/**
	 * Create an Article object of the appropriate class for the given page.
	 *
	 * @param WikiPage $page
	 * @param IContextSource $context
	 * @return Article
	 */
	public static function newFromWikiPage( WikiPage $page, IContextSource $context ) {
		$article = self::newFromTitle( $page->getTitle(), $context );
		$article->mPage = $page; // override to keep process cached vars
		return $article;
	}

	/**
	 * Get the page this view was redirected from
	 * @return Title|null
	 * @since 1.28
	 */
	public function getRedirectedFrom() {
		return $this->mRedirectedFrom;
	}

	/**
	 * Tell the page view functions that this view was redirected
	 * from another page on the wiki.
	 */
	public function setRedirectedFrom( Title $from ) {
		$this->mRedirectedFrom = $from;
	}

	/**
	 * Get the title object of the article
	 *
	 * @return Title Title object of this page
	 */
	public function getTitle() {
		return $this->mPage->getTitle();
	}

	/**
	 * Get the WikiPage object of this instance
	 *
	 * @since 1.19
	 * @return WikiPage
	 */
	public function getPage() {
		return $this->mPage;
	}

	public function clear() {
		$this->mRedirectedFrom = null; # Title object if set
		$this->mRedirectUrl = false;
		$this->mRevisionRecord = null;
		$this->fetchResult = null;

		// TODO hard-deprecate direct access to public fields

		$this->mPage->clear();
	}

	/**
	 * @see getOldIDFromRequest()
	 * @see getRevIdFetched()
	 *
	 * @return int The oldid of the article that is was requested in the constructor or via the
	 *         context's WebRequest.
	 */
	public function getOldID() {
		if ( $this->mOldId === null ) {
			$this->mOldId = $this->getOldIDFromRequest();
		}

		return $this->mOldId;
	}

	/**
	 * Sets $this->mRedirectUrl to a correct URL if the query parameters are incorrect
	 *
	 * @return int The old id for the request
	 */
	public function getOldIDFromRequest() {
		$this->mRedirectUrl = false;

		$request = $this->getContext()->getRequest();
		$oldid = $request->getIntOrNull( 'oldid' );

		if ( $oldid === null ) {
			return 0;
		}

		if ( $oldid !== 0 ) {
			# Load the given revision and check whether the page is another one.
			# In that case, update this instance to reflect the change.
			if ( $oldid === $this->mPage->getLatest() ) {
				$this->mRevisionRecord = $this->mPage->getRevisionRecord();
			} else {
				$this->mRevisionRecord = $this->revisionStore->getRevisionById( $oldid );
				if ( $this->mRevisionRecord !== null ) {
					$revPageId = $this->mRevisionRecord->getPageId();
					// Revision title doesn't match the page title given?
					if ( $this->mPage->getId() !== $revPageId ) {
						$this->mPage = $this->wikiPageFactory->newFromID( $revPageId );
					}
				}
			}
		}

		$oldRev = $this->mRevisionRecord;
		if ( $request->getRawVal( 'direction' ) === 'next' ) {
			$nextid = 0;
			if ( $oldRev ) {
				$nextRev = $this->revisionStore->getNextRevision( $oldRev );
				if ( $nextRev ) {
					$nextid = $nextRev->getId();
				}
			}
			if ( $nextid ) {
				$oldid = $nextid;
				$this->mRevisionRecord = null;
			} else {
				$this->mRedirectUrl = $this->getTitle()->getFullURL( 'redirect=no' );
			}
		} elseif ( $request->getRawVal( 'direction' ) === 'prev' ) {
			$previd = 0;
			if ( $oldRev ) {
				$prevRev = $this->revisionStore->getPreviousRevision( $oldRev );
				if ( $prevRev ) {
					$previd = $prevRev->getId();
				}
			}
			if ( $previd ) {
				$oldid = $previd;
				$this->mRevisionRecord = null;
			}
		}

		return $oldid;
	}

	/**
	 * Fetches the revision to work on.
	 * The revision is loaded from the database. Refer to $this->fetchResult for the revision
	 * or any errors encountered while loading it.
	 *
	 * Public since 1.35
	 *
	 * @return RevisionRecord|null
	 */
	public function fetchRevisionRecord() {
		if ( $this->fetchResult ) {
			return $this->mRevisionRecord;
		}

		$oldid = $this->getOldID();

		// $this->mRevisionRecord might already be fetched by getOldIDFromRequest()
		if ( !$this->mRevisionRecord ) {
			if ( !$oldid ) {
				$this->mRevisionRecord = $this->mPage->getRevisionRecord();

				if ( !$this->mRevisionRecord ) {
					wfDebug( __METHOD__ . " failed to find page data for title " .
						$this->getTitle()->getPrefixedText() );

					// Output for this case is done by showMissingArticle().
					$this->fetchResult = Status::newFatal( 'noarticletext' );
					return null;
				}
			} else {
				$this->mRevisionRecord = $this->revisionStore->getRevisionById( $oldid );

				if ( !$this->mRevisionRecord ) {
					wfDebug( __METHOD__ . " failed to load revision, rev_id $oldid" );

					$this->fetchResult = Status::newFatal( $this->getMissingRevisionMsg( $oldid ) );
					return null;
				}
			}
		}

		if ( !$this->mRevisionRecord->userCan( RevisionRecord::DELETED_TEXT, $this->getContext()->getAuthority() ) ) {
			wfDebug( __METHOD__ . " failed to retrieve content of revision " . $this->mRevisionRecord->getId() );

			// Output for this case is done by showDeletedRevisionHeader().
			// title used in wikilinks, should not contain whitespaces
			$this->fetchResult = new Status;
			$title = $this->getTitle()->getPrefixedDBkey();

			if ( $this->mRevisionRecord->isDeleted( RevisionRecord::DELETED_RESTRICTED ) ) {
				$this->fetchResult->fatal( 'rev-suppressed-text' );
			} else {
				$this->fetchResult->fatal( 'rev-deleted-text-permission', $title );
			}

			return null;
		}

		$this->fetchResult = Status::newGood( $this->mRevisionRecord );
		return $this->mRevisionRecord;
	}

	/**
	 * Returns true if the currently-referenced revision is the current edit
	 * to this page (and it exists).
	 * @return bool
	 */
	public function isCurrent() {
		# If no oldid, this is the current version.
		if ( $this->getOldID() == 0 ) {
			return true;
		}

		return $this->mPage->exists() &&
			$this->mRevisionRecord &&
			$this->mRevisionRecord->isCurrent();
	}

	/**
	 * Use this to fetch the rev ID used on page views
	 *
	 * Before fetchRevisionRecord was called, this returns the page's latest revision,
	 * regardless of what getOldID() returns.
	 *
	 * @return int Revision ID of last article revision
	 */
	public function getRevIdFetched() {
		if ( $this->fetchResult && $this->fetchResult->isOK() ) {
			/** @var RevisionRecord $rev */
			$rev = $this->fetchResult->getValue();
			return $rev->getId();
		} else {
			return $this->mPage->getLatest();
		}
	}

	/**
	 * This is the default action of the index.php entry point: just view the
	 * page of the given title.
	 */
	public function view() {
		$context = $this->getContext();
		$useFileCache = $context->getConfig()->get( MainConfigNames::UseFileCache );

		# Get variables from query string
		# As side effect this will load the revision and update the title
		# in a revision ID is passed in the request, so this should remain
		# the first call of this method even if $oldid is used way below.
		$oldid = $this->getOldID();

		$authority = $context->getAuthority();
		# Another check in case getOldID() is altering the title
		$permissionStatus = PermissionStatus::newEmpty();
		if ( !$authority
			->authorizeRead( 'read', $this->getTitle(), $permissionStatus )
		) {
			wfDebug( __METHOD__ . ": denied on secondary read check" );
			throw new PermissionsError( 'read', $permissionStatus );
		}

		$outputPage = $context->getOutput();
		# getOldID() may as well want us to redirect somewhere else
		if ( $this->mRedirectUrl ) {
			$outputPage->redirect( $this->mRedirectUrl );
			wfDebug( __METHOD__ . ": redirecting due to oldid" );

			return;
		}

		# If we got diff in the query, we want to see a diff page instead of the article.
		if ( $context->getRequest()->getCheck( 'diff' ) ) {
			wfDebug( __METHOD__ . ": showing diff page" );
			$this->showDiffPage();

			return;
		}

		$this->showProtectionIndicator();

		# Set page title (may be overridden from ParserOutput if title conversion is enabled or DISPLAYTITLE is used)
		$outputPage->setPageTitle( Parser::formatPageTitle(
			str_replace( '_', ' ', $this->getTitle()->getNsText() ),
			':',
			$this->getTitle()->getText()
		) );

		$outputPage->setArticleFlag( true );
		# Allow frames by default
		$outputPage->getMetadata()->setPreventClickjacking( false );

		$parserOptions = $this->getParserOptions();

		$poOptions = [];
		# Allow extensions to vary parser options used for article rendering
		( new HookRunner( MediaWikiServices::getInstance()->getHookContainer() ) )
			->onArticleParserOptions( $this, $parserOptions );
		# Render printable version, use printable version cache
		if ( $outputPage->isPrintable() ) {
			$parserOptions->setIsPrintable( true );
			$poOptions['enableSectionEditLinks'] = false;
			$this->addMessageBoxStyles( $outputPage );
			$outputPage->prependHTML(
				Html::warningBox(
					$outputPage->msg( 'printableversion-deprecated-warning' )->escaped()
				)
			);
		} elseif ( $this->viewIsRenderAction || !$this->isCurrent() ||
			!$authority->probablyCan( 'edit', $this->getTitle() )
		) {
			$poOptions['enableSectionEditLinks'] = false;
		}

		# Try client and file cache
		if ( $oldid === 0 && $this->mPage->checkTouched() ) {
			# Try to stream the output from file cache
			if ( $useFileCache && $this->tryFileCache() ) {
				wfDebug( __METHOD__ . ": done file cache" );
				# tell wgOut that output is taken care of
				$outputPage->disable();
				$this->mPage->doViewUpdates( $authority, $oldid );

				return;
			}
		}

		$this->showRedirectedFromHeader();
		$this->showNamespaceHeader();

		if ( $this->viewIsRenderAction ) {
			$poOptions += [ 'absoluteURLs' => true ];
		}
		$poOptions += [ 'includeDebugInfo' => true ];

		try {
			$continue =
				$this->generateContentOutput( $authority, $parserOptions, $oldid, $outputPage, $poOptions );
		} catch ( BadRevisionException ) {
			$continue = false;
			$this->showViewError( wfMessage( 'badrevision' )->text() );
		}

		if ( !$continue ) {
			return;
		}

		# For the main page, overwrite the <title> element with the con-
		# tents of 'pagetitle-view-mainpage' instead of the default (if
		# that's not empty).
		# This message always exists because it is in the i18n files
		if ( $this->getTitle()->isMainPage() ) {
			$msg = $context->msg( 'pagetitle-view-mainpage' )->inContentLanguage();
			if ( !$msg->isDisabled() ) {
				$outputPage->setHTMLTitle( $msg->text() );
			}
		}

		// Enable 1-day CDN cache on this response
		//
		// To reduce impact of lost or delayed HTTP purges, the adaptive TTL will
		// raise the TTL for pages not recently edited, upto $wgCdnMaxAge.
		// This could use getTouched(), but that could be scary for major template edits.
		$outputPage->adaptCdnTTL( $this->mPage->getTimestamp(), 86_400 );

		$this->showViewFooter();
		$this->mPage->doViewUpdates( $authority, $oldid, $this->fetchRevisionRecord() );

		# Load the postEdit module if the user just saved this revision
		# See also EditPage::setPostEditCookie
		$request = $context->getRequest();
		$cookieKey = EditPage::POST_EDIT_COOKIE_KEY_PREFIX . $this->getRevIdFetched();
		$postEdit = $request->getCookie( $cookieKey );
		if ( $postEdit ) {
			# Clear the cookie. This also prevents caching of the response.
			$request->response()->clearCookie( $cookieKey );
			$outputPage->addJsConfigVars( 'wgPostEdit', $postEdit );
			$outputPage->addModules( 'mediawiki.action.view.postEdit' ); // FIXME: test this
			if ( $this->getContext()->getConfig()->get( MainConfigNames::EnableEditRecovery )
				&& $this->userOptionsLookup->getOption( $this->getContext()->getUser(), 'editrecovery' )
			) {
				$outputPage->addModules( 'mediawiki.editRecovery.postEdit' );
			}
		}
	}

	/**
	 * Show a lock icon above the article body if the page is protected.
	 */
	public function showProtectionIndicator(): void {
		$title = $this->getTitle();
		$context = $this->getContext();
		$outputPage = $context->getOutput();

		$protectionIndicatorsAreEnabled = $context->getConfig()
			->get( MainConfigNames::EnableProtectionIndicators );

		if ( !$protectionIndicatorsAreEnabled || $title->isMainPage() ) {
			return;
		}

		$protection = $this->restrictionStore->getRestrictions( $title, 'edit' );

		$cascadeProtection = $this->restrictionStore->getCascadeProtectionSources( $title )[1];

		$isCascadeProtected = array_key_exists( 'edit', $cascadeProtection );

		if ( !$protection && !$isCascadeProtected ) {
			return;
		}

		if ( $isCascadeProtected ) {
			// Cascade-protected pages are protected at the sysop level. So it
			// should not matter if we take the protection level of the first
			// or last page that is being cascaded to the current page.
			$protectionLevel = $cascadeProtection['edit'][0];
		} else {
			$protectionLevel = $protection[0];
		}

		// Protection levels are stored in the database as plain text, but
		// they are expected to be valid protection levels. So we should be able to
		// safely use them. However phan thinks this could be a XSS problem so we
		// are being paranoid and escaping them once more.
		$protectionLevel = htmlspecialchars( $protectionLevel );

		$protectionExpiry = $this->restrictionStore->getRestrictionExpiry( $title, 'edit' );
		$formattedProtectionExpiry = $context->getLanguage()
			->formatExpiry( $protectionExpiry ?? '' );

		$protectionMsg = 'protection-indicator-title';
		if ( $protectionExpiry === 'infinity' || !$protectionExpiry ) {
			$protectionMsg .= '-infinity';
		}

		// Potential values: 'protection-sysop', 'protection-autoconfirmed',
		// 'protection-sysop-cascade' etc.
		// If the wiki has more protection levels, the additional ids that get
		// added take the form 'protection-<protectionLevel>' and
		// 'protection-<protectionLevel>-cascade'.
		$protectionIndicatorId = 'protection-' . $protectionLevel;
		$protectionIndicatorId .= ( $isCascadeProtected ? '-cascade' : '' );

		// Messages 'protection-indicator-title', 'protection-indicator-title-infinity'
		$protectionMsg = $outputPage->msg( $protectionMsg, $protectionLevel, $formattedProtectionExpiry )->text();

		// Use a trick similar to the one used in Action::addHelpLink() to allow wikis
		// to customize where the help link points to.
		$protectionHelpLink = $outputPage->msg( $protectionIndicatorId . '-helppage' );
		if ( $protectionHelpLink->isDisabled() ) {
			$protectionHelpLink = 'https://mediawiki.org/wiki/Special:MyLanguage/Help:Protection';
		} else {
			$protectionHelpLink = $protectionHelpLink->text();
		}

		$outputPage->setIndicators( [
			$protectionIndicatorId => Html::rawElement( 'a', [
				'class' => 'mw-protection-indicator-icon--lock',
				'title' => $protectionMsg,
				'href' => $protectionHelpLink
			],
			// Screen reader-only text describing the same thing as
			// was mentioned in the title attribute.
			Html::element( 'span', [], $protectionMsg ) )
		] );

		$outputPage->addModuleStyles( 'mediawiki.protectionIndicators.styles' );
	}

	/**
	 * Determines the desired ParserOutput and passes it to $outputPage.
	 *
	 * @param Authority $performer
	 * @param ParserOptions $parserOptions
	 * @param int $oldid
	 * @param OutputPage $outputPage
	 * @param array $textOptions
	 *
	 * @return bool True if further processing like footer generation should be applied,
	 *              false to skip further processing.
	 */
	private function generateContentOutput(
		Authority $performer,
		ParserOptions $parserOptions,
		int $oldid,
		OutputPage $outputPage,
		array $textOptions
	): bool {
		# Should the parser cache be used?
		$useParserCache = true;
		$pOutput = null;
		$parserOutputAccess = MediaWikiServices::getInstance()->getParserOutputAccess();

		// NOTE: $outputDone and $useParserCache may be changed by the hook
		$this->getHookRunner()->onArticleViewHeader( $this, $outputDone, $useParserCache );
		if ( $outputDone ) {
			if ( $outputDone instanceof ParserOutput ) {
				$pOutput = $outputDone;
			}

			if ( $pOutput ) {
				$this->doOutputMetaData( $pOutput, $outputPage );
			}
			return true;
		}

		// Early abort if the page doesn't exist
		if ( !$this->mPage->exists() ) {
			wfDebug( __METHOD__ . ": showing missing article" );
			$this->showMissingArticle();
			$this->mPage->doViewUpdates( $performer );
			return false; // skip all further output to OutputPage
		}

		// Try the latest parser cache
		// NOTE: try latest-revision cache first to avoid loading revision.
		if ( $useParserCache && !$oldid ) {
			$pOutput = $parserOutputAccess->getCachedParserOutput(
				$this->getPage(),
				$parserOptions,
				null,
				ParserOutputAccess::OPT_NO_AUDIENCE_CHECK // we already checked
			);

			if ( $pOutput ) {
				$this->doOutputFromParserCache( $pOutput, $parserOptions, $outputPage, $textOptions );
				$this->doOutputMetaData( $pOutput, $outputPage );
				return true;
			}
		}

		$rev = $this->fetchRevisionRecord();
		if ( !$this->fetchResult->isOK() ) {
			$this->showViewError( $this->fetchResult->getWikiText(
				false, false, $this->getContext()->getLanguage()
			) );
			return true;
		}

		# Are we looking at an old revision
		if ( $oldid ) {
			$this->setOldSubtitle( $oldid );

			if ( !$this->showDeletedRevisionHeader() ) {
				wfDebug( __METHOD__ . ": cannot view deleted revision" );
				return false; // skip all further output to OutputPage
			}

			// Try the old revision parser cache
			// NOTE: Repeating cache check for old revision to avoid fetching $rev
			// before it's absolutely necessary.
			if ( $useParserCache ) {
				$pOutput = $parserOutputAccess->getCachedParserOutput(
					$this->getPage(),
					$parserOptions,
					$rev,
					ParserOutputAccess::OPT_NO_AUDIENCE_CHECK // we already checked in fetchRevisionRecord
				);

				if ( $pOutput ) {
					$this->doOutputFromParserCache( $pOutput, $parserOptions, $outputPage, $textOptions );
					$this->doOutputMetaData( $pOutput, $outputPage );
					return true;
				}
			}
		}

		# Ensure that UI elements requiring revision ID have
		# the correct version information. (This may be overwritten after creation of ParserOutput)
		$outputPage->setRevisionId( $this->getRevIdFetched() );
		$outputPage->setRevisionIsCurrent( $rev->isCurrent() );
		# Preload timestamp to avoid a DB hit
		$outputPage->getMetadata()->setRevisionTimestamp( $rev->getTimestamp() );

		# Pages containing custom CSS or JavaScript get special treatment
		if ( $this->getTitle()->isSiteConfigPage() || $this->getTitle()->isUserConfigPage() ) {
			$dir = $this->getContext()->getLanguage()->getDir();
			$lang = $this->getContext()->getLanguage()->getHtmlCode();

			$outputPage->wrapWikiMsg(
				"<div id='mw-clearyourcache' lang='$lang' dir='$dir' class='mw-content-$dir'>\n$1\n</div>",
				'clearyourcache'
			);
			$outputPage->addModuleStyles( 'mediawiki.action.styles' );
		} elseif ( !$this->getHookRunner()->onArticleRevisionViewCustom(
			$rev,
			$this->getTitle(),
			$oldid,
			$outputPage )
		) {
			// NOTE: sync with hooks called in DifferenceEngine::renderNewRevision()
			// Allow extensions do their own custom view for certain pages
			$this->doOutputMetaData( $pOutput, $outputPage );
			return true;
		}

		# Run the parse, protected by a pool counter
		wfDebug( __METHOD__ . ": doing uncached parse" );

		$opt = [];

		// we already checked the cache in case 2, don't check again.
		$opt[ ParserOutputAccess::OPT_NO_CHECK_CACHE ] = true;

		// we already checked in fetchRevisionRecord()
		$opt[ ParserOutputAccess::OPT_NO_AUDIENCE_CHECK ] = true;

		// enable stampede protection and allow stale content
		$opt[ ParserOutputAccess::OPT_POOL_COUNTER ]
			= ParserOutputAccess::POOL_COUNTER_ARTICLE_VIEW;

		// Attempt to trigger WikiPage::triggerOpportunisticLinksUpdate
		// Ideally this should not be the responsibility of the ParserCache to control this.
		// See https://phabricator.wikimedia.org/T329842#8816557 for more context.
		$opt[ ParserOutputAccess::OPT_LINKS_UPDATE ] = true;

		if ( !$rev->getId() || !$useParserCache ) {
			// fake revision or uncacheable options
			$opt[ ParserOutputAccess::OPT_NO_CACHE ] = true;
		}

		$renderStatus = $parserOutputAccess->getParserOutput(
			$this->getPage(),
			$parserOptions,
			$rev,
			$opt
		);

		// T327164: If parsoid cache warming is enabled, we want to ensure that the page
		// the user is currently looking at has a cached parsoid rendering, in case they
		// open visual editor. The cache entry would typically be missing if it has expired
		// from the cache or it was invalidated by RefreshLinksJob. When "traditional"
		// parser output has been invalidated by RefreshLinksJob, we will render it on
		// the fly when a user requests the page, and thereby populate the cache again,
		// per the code above.
		// The code below is intended to do the same for parsoid output, but asynchronously
		// in a job, so the user does not have to wait.
		// Note that we get here if the traditional parser output was missing from the cache.
		// We do not check if the parsoid output is present in the cache, because that check
		// takes time. The assumption is that if we have traditional parser output
		// cached, we probably also have parsoid output cached.
		// So we leave it to ParsoidCachePrewarmJob to determine whether or not parsing is
		// needed.
		if ( $oldid === 0 || $oldid === $this->getPage()->getLatest() ) {
			$parsoidCacheWarmingEnabled = $this->getContext()->getConfig()
				->get( MainConfigNames::ParsoidCacheConfig )['WarmParsoidParserCache'];

			if ( $parsoidCacheWarmingEnabled ) {
				$parsoidJobSpec = ParsoidCachePrewarmJob::newSpec(
					$rev->getId(),
					$this->getPage()->toPageRecord(),
					[ 'causeAction' => 'view' ]
				);
				$this->jobQueueGroup->lazyPush( $parsoidJobSpec );
			}
		}

		$this->doOutputFromRenderStatus(
			$rev,
			$renderStatus,
			$outputPage,
			$parserOptions,
			$textOptions
		);

		if ( !$renderStatus->isOK() ) {
			return true;
		}

		$pOutput = $renderStatus->getValue();
		$this->doOutputMetaData( $pOutput, $outputPage );
		return true;
	}

	private function doOutputMetaData( ?ParserOutput $pOutput, OutputPage $outputPage ) {
		# Adjust title for main page & pages with displaytitle
		if ( $pOutput ) {
			$this->adjustDisplayTitle( $pOutput );

			// It would be nice to automatically set this during the first call
			// to OutputPage::addParserOutputMetadata, but we can't because doing
			// so would break non-pageview actions where OutputPage::getContLangForJS
			// has different requirements.
			$pageLang = $pOutput->getLanguage();
			if ( $pageLang ) {
				$outputPage->setContentLangForJS( $pageLang );
			}
		}

		# Check for any __NOINDEX__ tags on the page using $pOutput
		$policy = $this->getRobotPolicy( 'view', $pOutput ?: null );
		$outputPage->getMetadata()->setIndexPolicy( $policy['index'] );
		$outputPage->setFollowPolicy( $policy['follow'] ); // FIXME: test this

		$this->mParserOutput = $pOutput;
	}

	/**
	 * @param ParserOutput $pOutput
	 * @param ParserOptions $pOptions
	 * @param OutputPage $outputPage
	 * @param array $textOptions
	 */
	private function doOutputFromParserCache(
		ParserOutput $pOutput,
		ParserOptions $pOptions,
		OutputPage $outputPage,
		array $textOptions
	) {
		# Ensure that UI elements requiring revision ID have
		# the correct version information.
		$oldid = $pOutput->getCacheRevisionId() ?? $this->getRevIdFetched();
		$outputPage->setRevisionId( $oldid );
		$outputPage->setRevisionIsCurrent( $oldid === $this->mPage->getLatest() );
		$outputPage->addParserOutput( $pOutput, $pOptions, $textOptions );
		# Preload timestamp to avoid a DB hit
		$cachedTimestamp = $pOutput->getRevisionTimestamp();
		if ( $cachedTimestamp !== null ) {
			$outputPage->getMetadata()->setRevisionTimestamp( $cachedTimestamp );
			$this->mPage->setTimestamp( $cachedTimestamp );
		}
	}

	/**
	 * @param RevisionRecord $rev
	 * @param Status $renderStatus
	 * @param OutputPage $outputPage
	 * @param ParserOptions $parserOptions
	 * @param array $textOptions
	 */
	private function doOutputFromRenderStatus(
		RevisionRecord $rev,
		Status $renderStatus,
		OutputPage $outputPage,
		ParserOptions $parserOptions,
		array $textOptions
	) {
		$context = $this->getContext();
		if ( !$renderStatus->isOK() ) {
			$this->showViewError( $renderStatus->getWikiText(
				false, 'view-pool-error', $context->getLanguage()
			) );
			return;
		}

		$pOutput = $renderStatus->getValue();

		// Cache stale ParserOutput object with a short expiry
		if ( $renderStatus->hasMessage( 'view-pool-dirty-output' ) ) {
			$outputPage->lowerCdnMaxage( $context->getConfig()->get( MainConfigNames::CdnMaxageStale ) );
			$outputPage->setLastModified( $pOutput->getCacheTime() );
			$staleReason = $renderStatus->hasMessage( 'view-pool-contention' )
				? $context->msg( 'view-pool-contention' )->escaped()
				: $context->msg( 'view-pool-timeout' )->escaped();
			$outputPage->addHTML( "<!-- parser cache is expired, " .
				"sending anyway due to $staleReason-->\n" );

			// Ensure OutputPage knowns the id from the dirty cache, but keep the current flag (T341013)
			$cachedId = $pOutput->getCacheRevisionId();
			if ( $cachedId !== null ) {
				$outputPage->setRevisionId( $cachedId );
				$outputPage->getMetadata()->setRevisionTimestamp( $pOutput->getTimestamp() );
			}
		}

		$outputPage->addParserOutput( $pOutput, $parserOptions, $textOptions );

		if ( $this->getRevisionRedirectTarget( $rev ) ) {
			$outputPage->addSubtitle( "<span id=\"redirectsub\">" .
				$context->msg( 'redirectpagesub' )->parse() . "</span>" );
		}
	}

	/**
	 * @param RevisionRecord $revision
	 * @return null|Title
	 */
	private function getRevisionRedirectTarget( RevisionRecord $revision ) {
		// TODO: find a *good* place for the code that determines the redirect target for
		// a given revision!
		// NOTE: Use main slot content. Compare code in DerivedPageDataUpdater::revisionIsRedirect.
		$content = $revision->getContent( SlotRecord::MAIN );
		return $content ? $content->getRedirectTarget() : null;
	}

	/**
	 * Adjust title for pages with displaytitle, -{T|}- or language conversion
	 */
	public function adjustDisplayTitle( ParserOutput $pOutput ) {
		$out = $this->getContext()->getOutput();

		# Adjust the title if it was set by displaytitle, -{T|}- or language conversion
		$titleText = $pOutput->getTitleText();
		if ( strval( $titleText ) !== '' ) {
			$out->setPageTitle( $titleText );
			$out->setDisplayTitle( $titleText );
		}
	}

	/**
	 * Show a diff page according to current request variables. For use within
	 * Article::view() only, other callers should use the DifferenceEngine class.
	 */
	protected function showDiffPage() {
		$context = $this->getContext();
		$outputPage = $context->getOutput();
		$outputPage->addBodyClasses( 'mw-article-diff' );
		$request = $context->getRequest();
		$diff = $request->getVal( 'diff' );
		$rcid = $request->getInt( 'rcid' );
		$purge = $request->getRawVal( 'action' ) === 'purge';
		$unhide = $request->getInt( 'unhide' ) === 1;
		$oldid = $this->getOldID();

		$rev = $this->fetchRevisionRecord();

		if ( !$rev ) {
			// T213621: $rev maybe null due to either lack of permission to view the
			// revision or actually not existing. So let's try loading it from the id
			$rev = $this->revisionStore->getRevisionById( $oldid );
			if ( $rev ) {
				// Revision exists but $user lacks permission to diff it.
				// Do nothing here.
				// The $rev will later be used to create standard diff elements however.
			} else {
				$outputPage->setPageTitleMsg( $context->msg( 'errorpagetitle' ) );
				$msg = $context->msg( 'difference-missing-revision' )
					->params( $oldid )
					->numParams( 1 )
					->parseAsBlock();
				$outputPage->addHTML( $msg );
				return;
			}
		}

		$services = MediaWikiServices::getInstance();

		$contentHandler = $services
			->getContentHandlerFactory()
			->getContentHandler(
				$rev->getMainContentModel()
			);
		$de = $contentHandler->createDifferenceEngine(
			$context,
			$oldid,
			$diff,
			$rcid,
			$purge,
			$unhide
		);

		$diffType = $request->getVal( 'diff-type' );

		if ( $diffType === null ) {
			$diffType = $this->userOptionsLookup
				->getOption( $context->getUser(), 'diff-type' );
		} else {
			$de->setExtraQueryParams( [ 'diff-type' => $diffType ] );
		}

		$de->setSlotDiffOptions( [
			'diff-type' => $diffType,
			'expand-url' => $this->viewIsRenderAction,
			'inline-toggle' => true,
		] );
		$de->showDiffPage( $this->isDiffOnlyView() );

		// Run view updates for the newer revision being diffed (and shown
		// below the diff if not diffOnly).
		[ , $new ] = $de->mapDiffPrevNext( $oldid, $diff );
		// New can be false, convert it to 0 - this conveniently means the latest revision
		$this->mPage->doViewUpdates( $context->getAuthority(), (int)$new );

		// Add link to help page; see T321569
		$context->getOutput()->addHelpLink( 'Help:Diff' );
	}

	protected function isDiffOnlyView(): bool {
		return $this->getContext()->getRequest()->getBool(
			'diffonly',
			$this->userOptionsLookup->getBoolOption( $this->getContext()->getUser(), 'diffonly' )
		);
	}

	/**
	 * Get the robot policy to be used for the current view
	 * @param string $action The action= GET parameter
	 * @param ParserOutput|null $pOutput
	 * @return string[] The policy that should be set
	 * @todo actions other than 'view'
	 */
	public function getRobotPolicy( $action, ?ParserOutput $pOutput = null ) {
		$context = $this->getContext();
		$mainConfig = $context->getConfig();
		$articleRobotPolicies = $mainConfig->get( MainConfigNames::ArticleRobotPolicies );
		$namespaceRobotPolicies = $mainConfig->get( MainConfigNames::NamespaceRobotPolicies );
		$defaultRobotPolicy = $mainConfig->get( MainConfigNames::DefaultRobotPolicy );
		$title = $this->getTitle();
		$ns = $title->getNamespace();

		# Don't index user and user talk pages for blocked users (T13443)
		if ( $ns === NS_USER || $ns === NS_USER_TALK ) {
			$specificTarget = null;
			$vagueTarget = null;
			$titleText = $title->getText();
			if ( IPUtils::isValid( $titleText ) ) {
				$vagueTarget = $titleText;
			} else {
				$specificTarget = $title->getRootText();
			}
			$block = $this->blockStore->newFromTarget(
				$specificTarget, $vagueTarget, false, DatabaseBlockStore::AUTO_NONE );
			if ( $block instanceof DatabaseBlock ) {
				return [
					'index' => 'noindex',
					'follow' => 'nofollow'
				];
			}
		}

		if ( $this->mPage->getId() === 0 || $this->getOldID() ) {
			# Non-articles (special pages etc), and old revisions
			return [
				'index' => 'noindex',
				'follow' => 'nofollow'
			];
		} elseif ( $context->getOutput()->isPrintable() ) {
			# Discourage indexing of printable versions, but encourage following
			return [
				'index' => 'noindex',
				'follow' => 'follow'
			];
		} elseif ( $context->getRequest()->getInt( 'curid' ) ) {
			# For ?curid=x urls, disallow indexing
			return [
				'index' => 'noindex',
				'follow' => 'follow'
			];
		}

		# Otherwise, construct the policy based on the various config variables.
		$policy = self::formatRobotPolicy( $defaultRobotPolicy );

		if ( isset( $namespaceRobotPolicies[$ns] ) ) {
			# Honour customised robot policies for this namespace
			$policy = array_merge(
				$policy,
				self::formatRobotPolicy( $namespaceRobotPolicies[$ns] )
			);
		}
		if ( $title->canUseNoindex() && $pOutput && $pOutput->getIndexPolicy() ) {
			# __INDEX__ and __NOINDEX__ magic words, if allowed. Incorporates
			# a final check that we have really got the parser output.
			$policy = array_merge(
				$policy,
				[ 'index' => $pOutput->getIndexPolicy() ]
			);
		}

		if ( isset( $articleRobotPolicies[$title->getPrefixedText()] ) ) {
			# (T16900) site config can override user-defined __INDEX__ or __NOINDEX__
			$policy = array_merge(
				$policy,
				self::formatRobotPolicy( $articleRobotPolicies[$title->getPrefixedText()] )
			);
		}

		return $policy;
	}

	/**
	 * Converts a String robot policy into an associative array, to allow
	 * merging of several policies using array_merge().
	 * @param array|string $policy Returns empty array on null/false/'', transparent
	 *   to already-converted arrays, converts string.
	 * @return array 'index' => \<indexpolicy\>, 'follow' => \<followpolicy\>
	 */
	public static function formatRobotPolicy( $policy ) {
		if ( is_array( $policy ) ) {
			return $policy;
		} elseif ( !$policy ) {
			return [];
		}

		$arr = [];
		foreach ( explode( ',', $policy ) as $var ) {
			$var = trim( $var );
			if ( $var === 'index' || $var === 'noindex' ) {
				$arr['index'] = $var;
			} elseif ( $var === 'follow' || $var === 'nofollow' ) {
				$arr['follow'] = $var;
			}
		}

		return $arr;
	}

	/**
	 * If this request is a redirect view, send "redirected from" subtitle to
	 * the output. Returns true if the header was needed, false if this is not
	 * a redirect view. Handles both local and remote redirects.
	 *
	 * @return bool
	 */
	public function showRedirectedFromHeader() {
		$context = $this->getContext();
		$redirectSources = $context->getConfig()->get( MainConfigNames::RedirectSources );
		$outputPage = $context->getOutput();
		$request = $context->getRequest();
		$rdfrom = $request->getVal( 'rdfrom' );

		// Construct a URL for the current page view, but with the target title
		$query = $request->getQueryValues();
		unset( $query['rdfrom'] );
		unset( $query['title'] );
		if ( $this->getTitle()->isRedirect() ) {
			// Prevent double redirects
			$query['redirect'] = 'no';
		}
		$redirectTargetUrl = $this->getTitle()->getLinkURL( $query );

		if ( $this->mRedirectedFrom ) {
			// This is an internally redirected page view.
			// We'll need a backlink to the source page for navigation.
			if ( $this->getHookRunner()->onArticleViewRedirect( $this ) ) {
				$redir = $this->linkRenderer->makeKnownLink(
					$this->mRedirectedFrom,
					null,
					[],
					[ 'redirect' => 'no' ]
				);

				$outputPage->addSubtitle( "<span class=\"mw-redirectedfrom\">" .
					$context->msg( 'redirectedfrom' )->rawParams( $redir )->parse()
				. "</span>" );

				// Add the script to update the displayed URL and
				// set the fragment if one was specified in the redirect
				$outputPage->addJsConfigVars( [
					'wgInternalRedirectTargetUrl' => $redirectTargetUrl,
				] );
				$outputPage->addModules( 'mediawiki.action.view.redirect' );

				// Add a <link rel="canonical"> tag
				$outputPage->setCanonicalUrl( $this->getTitle()->getCanonicalURL() );

				// Tell the output object that the user arrived at this article through a redirect
				$outputPage->setRedirectedFrom( $this->mRedirectedFrom );

				return true;
			}
		} elseif ( $rdfrom ) {
			// This is an externally redirected view, from some other wiki.
			// If it was reported from a trusted site, supply a backlink.
			if ( $redirectSources && preg_match( $redirectSources, $rdfrom ) ) {
				$redir = $this->linkRenderer->makeExternalLink( $rdfrom, $rdfrom, $this->getTitle() );
				$outputPage->addSubtitle( "<span class=\"mw-redirectedfrom\">" .
					$context->msg( 'redirectedfrom' )->rawParams( $redir )->parse()
				. "</span>" );

				// Add the script to update the displayed URL
				$outputPage->addJsConfigVars( [
					'wgInternalRedirectTargetUrl' => $redirectTargetUrl,
				] );
				$outputPage->addModules( 'mediawiki.action.view.redirect' );

				return true;
			}
		}

		return false;
	}

	/**
	 * Show a header specific to the namespace currently being viewed, like
	 * [[MediaWiki:Talkpagetext]]. For Article::view().
	 */
	public function showNamespaceHeader() {
		if ( $this->getTitle()->isTalkPage() && !$this->getContext()->msg( 'talkpageheader' )->isDisabled() ) {
			$this->getContext()->getOutput()->wrapWikiMsg(
				"<div class=\"mw-talkpageheader\">\n$1\n</div>",
				[ 'talkpageheader' ]
			);
		}
	}

	/**
	 * Show the footer section of an ordinary page view
	 */
	public function showViewFooter() {
		# check if we're displaying a [[User talk:x.x.x.x]] anonymous talk page
		if ( $this->getTitle()->getNamespace() === NS_USER_TALK
			&& IPUtils::isValid( $this->getTitle()->getText() )
		) {
			$this->getContext()->getOutput()->addWikiMsg( 'anontalkpagetext' );
		}

		// Show a footer allowing the user to patrol the shown revision or page if possible
		$patrolFooterShown = $this->showPatrolFooter();

		$this->getHookRunner()->onArticleViewFooter( $this, $patrolFooterShown );
	}

	/**
	 * If patrol is possible, output a patrol UI box. This is called from the
	 * footer section of ordinary page views. If patrol is not possible or not
	 * desired, does nothing.
	 *
	 * Side effect: When the patrol link is build, this method will call
	 * OutputPage::setPreventClickjacking(true) and load a JS module.
	 *
	 * @return bool
	 */
	public function showPatrolFooter() {
		$context = $this->getContext();
		$mainConfig = $context->getConfig();
		$useNPPatrol = $mainConfig->get( MainConfigNames::UseNPPatrol );
		$useRCPatrol = $mainConfig->get( MainConfigNames::UseRCPatrol );
		$useFilePatrol = $mainConfig->get( MainConfigNames::UseFilePatrol );
		$fileMigrationStage = $mainConfig->get( MainConfigNames::FileSchemaMigrationStage );
		// Allow hooks to decide whether to not output this at all
		if ( !$this->getHookRunner()->onArticleShowPatrolFooter( $this ) ) {
			return false;
		}

		$outputPage = $context->getOutput();
		$user = $context->getUser();
		$title = $this->getTitle();
		$rc = false;

		if ( !$context->getAuthority()->probablyCan( 'patrol', $title )
			|| !( $useRCPatrol || $useNPPatrol
				|| ( $useFilePatrol && $title->inNamespace( NS_FILE ) ) )
		) {
			// Patrolling is disabled or the user isn't allowed to
			return false;
		}

		if ( $this->mRevisionRecord
			&& !RecentChange::isInRCLifespan( $this->mRevisionRecord->getTimestamp(), 21600 )
		) {
			// The current revision is already older than what could be in the RC table
			// 6h tolerance because the RC might not be cleaned out regularly
			return false;
		}

		// Check for cached results
		$cache = MediaWikiServices::getInstance()->getMainWANObjectCache();
		$key = $cache->makeKey( 'unpatrollable-page', $title->getArticleID() );
		if ( $cache->get( $key ) ) {
			return false;
		}

		$dbr = $this->dbProvider->getReplicaDatabase();
		$oldestRevisionRow = $dbr->newSelectQueryBuilder()
			->select( [ 'rev_id', 'rev_timestamp' ] )
			->from( 'revision' )
			->where( [ 'rev_page' => $title->getArticleID() ] )
			->orderBy( [ 'rev_timestamp', 'rev_id' ] )
			->caller( __METHOD__ )->fetchRow();
		$oldestRevisionTimestamp = $oldestRevisionRow ? $oldestRevisionRow->rev_timestamp : false;

		// New page patrol: Get the timestamp of the oldest revision which
		// the revision table holds for the given page. Then we look
		// whether it's within the RC lifespan and if it is, we try
		// to get the recentchanges row belonging to that entry.
		$recentPageCreation = false;
		if ( $oldestRevisionTimestamp
			&& RecentChange::isInRCLifespan( $oldestRevisionTimestamp, 21600 )
		) {
			// 6h tolerance because the RC might not be cleaned out regularly
			$recentPageCreation = true;
			$rc = RecentChange::newFromConds(
				[
					'rc_this_oldid' => intval( $oldestRevisionRow->rev_id ),
					// Avoid selecting a categorization entry
					'rc_type' => RC_NEW,
				],
				__METHOD__
			);
			if ( $rc ) {
				// Use generic patrol message for new pages
				$markPatrolledMsg = $context->msg( 'markaspatrolledtext' );
			}
		}

		// File patrol: Get the timestamp of the latest upload for this page,
		// check whether it is within the RC lifespan and if it is, we try
		// to get the recentchanges row belonging to that entry
		// (with rc_type = RC_LOG, rc_log_type = upload).
		$recentFileUpload = false;
		if ( ( !$rc || $rc->getAttribute( 'rc_patrolled' ) ) && $useFilePatrol
			&& $title->getNamespace() === NS_FILE ) {
			// Retrieve timestamp from the current file (latest upload)
			if ( $fileMigrationStage & SCHEMA_COMPAT_READ_OLD ) {
				$newestUploadTimestamp = $dbr->newSelectQueryBuilder()
					->select( 'img_timestamp' )
					->from( 'image' )
					->where( [ 'img_name' => $title->getDBkey() ] )
					->caller( __METHOD__ )->fetchField();
			} else {
				$newestUploadTimestamp = $dbr->newSelectQueryBuilder()
					->select( 'fr_timestamp' )
					->from( 'file' )
					->join( 'filerevision', null, 'file_latest = fr_id' )
					->where( [ 'file_name' => $title->getDBkey() ] )
					->caller( __METHOD__ )->fetchField();
			}

			if ( $newestUploadTimestamp
				&& RecentChange::isInRCLifespan( $newestUploadTimestamp, 21600 )
			) {
				// 6h tolerance because the RC might not be cleaned out regularly
				$recentFileUpload = true;
				$rc = RecentChange::newFromConds(
					[
						'rc_type' => RC_LOG,
						'rc_log_type' => 'upload',
						'rc_timestamp' => $newestUploadTimestamp,
						'rc_namespace' => NS_FILE,
						'rc_cur_id' => $title->getArticleID()
					],
					__METHOD__
				);
				if ( $rc ) {
					// Use patrol message specific to files
					$markPatrolledMsg = $context->msg( 'markaspatrolledtext-file' );
				}
			}
		}

		if ( !$recentPageCreation && !$recentFileUpload ) {
			// Page creation and latest upload (for files) is too old to be in RC

			// We definitely can't patrol so cache the information
			// When a new file version is uploaded, the cache is cleared
			$cache->set( $key, '1' );

			return false;
		}

		if ( !$rc ) {
			// Don't cache: This can be hit if the page gets accessed very fast after
			// its creation / latest upload or in case we have high replica DB lag. In case
			// the revision is too old, we will already return above.
			return false;
		}

		if ( $rc->getAttribute( 'rc_patrolled' ) ) {
			// Patrolled RC entry around

			// Cache the information we gathered above in case we can't patrol
			// Don't cache in case we can patrol as this could change
			$cache->set( $key, '1' );

			return false;
		}

		if ( $rc->getPerformerIdentity()->equals( $user ) ) {
			// Don't show a patrol link for own creations/uploads. If the user could
			// patrol them, they already would be patrolled
			return false;
		}

		$outputPage->getMetadata()->setPreventClickjacking( true );
		$outputPage->addModules( 'mediawiki.misc-authed-curate' );

		$link = $this->linkRenderer->makeKnownLink(
			$title,
			new HtmlArmor( '<button class="cdx-button cdx-button--action-progressive">'
				// @phan-suppress-next-line PhanPossiblyUndeclaredVariable $markPatrolledMsg is always set
				. $markPatrolledMsg->escaped() . '</button>' ),
			[],
			[
				'action' => 'markpatrolled',
				'rcid' => $rc->getAttribute( 'rc_id' ),
			]
		);

		$outputPage->addModuleStyles( 'mediawiki.action.styles' );
		$outputPage->addHTML( "<div class='patrollink' data-mw='interface'>$link</div>" );

		return true;
	}

	/**
	 * Purge the cache used to check if it is worth showing the patrol footer
	 * For example, it is done during re-uploads when file patrol is used.
	 * @param int $articleID ID of the article to purge
	 * @since 1.27
	 */
	public static function purgePatrolFooterCache( $articleID ) {
		$cache = MediaWikiServices::getInstance()->getMainWANObjectCache();
		$cache->delete( $cache->makeKey( 'unpatrollable-page', $articleID ) );
	}

	/**
	 * Show the error text for a missing article. For articles in the MediaWiki
	 * namespace, show the default message text. To be called from Article::view().
	 */
	public function showMissingArticle() {
		$context = $this->getContext();
		$send404Code = $context->getConfig()->get( MainConfigNames::Send404Code );

		$outputPage = $context->getOutput();
		// Whether the page is a root user page of an existing user (but not a subpage)
		$validUserPage = false;

		$title = $this->getTitle();

		$services = MediaWikiServices::getInstance();

		$contextUser = $context->getUser();

		# Show info in user (talk) namespace. Does the user exist? Are they blocked?
		if ( $title->getNamespace() === NS_USER
			|| $title->getNamespace() === NS_USER_TALK
		) {
			$rootPart = $title->getRootText();
			$userFactory = $services->getUserFactory();
			$user = $userFactory->newFromNameOrIp( $rootPart );

			if ( $user && $user->isRegistered() && $user->isHidden() &&
				!$context->getAuthority()->isAllowed( 'hideuser' )
			) {
				// T120883 if the user is hidden and the viewer cannot see hidden
				// users, pretend like it does not exist at all.
				$user = false;
			}

			if ( !( $user && $user->isRegistered() ) && !$this->userNameUtils->isIP( $rootPart ) ) {
				$this->addMessageBoxStyles( $outputPage );
				// User does not exist
				$outputPage->addHTML( Html::warningBox(
					$context->msg( 'userpage-userdoesnotexist-view', wfEscapeWikiText( $rootPart ) )->parse(),
					'mw-userpage-userdoesnotexist'
				) );

				// Show renameuser log extract
				LogEventsList::showLogExtract(
					$outputPage,
					'renameuser',
					Title::makeTitleSafe( NS_USER, $rootPart ),
					'',
					[
						'lim' => 10,
						'showIfEmpty' => false,
						'msgKey' => [ 'renameuser-renamed-notice', $title->getBaseText() ]
					]
				);
			} else {
				$validUserPage = !$title->isSubpage();

				$blockLogBox = LogEventsList::getBlockLogWarningBox(
					$this->blockStore,
					$services->getNamespaceInfo(),
					$this->getContext(),
					$this->linkRenderer,
					$user,
					$title
				);
				if ( $blockLogBox !== null ) {
					$outputPage->addHTML( $blockLogBox );
				}
			}
		}

		$this->getHookRunner()->onShowMissingArticle( $this );

		# Show delete and move logs if there were any such events.
		# The logging query can DOS the site when bots/crawlers cause 404 floods,
		# so be careful showing this. 404 pages must be cheap as they are hard to cache.
		$dbCache = MediaWikiServices::getInstance()->getMainObjectStash();
		$key = $dbCache->makeKey( 'page-recent-delete', md5( $title->getPrefixedText() ) );
		$isRegistered = $contextUser->isRegistered();
		$sessionExists = $context->getRequest()->getSession()->isPersistent();

		if ( $isRegistered || $dbCache->get( $key ) || $sessionExists ) {
			$logTypes = [ 'delete', 'move', 'protect', 'merge' ];

			$dbr = $this->dbProvider->getReplicaDatabase();

			$conds = [ $dbr->expr( 'log_action', '!=', 'revision' ) ];
			// Give extensions a chance to hide their (unrelated) log entries
			$this->getHookRunner()->onArticle__MissingArticleConditions( $conds, $logTypes );
			LogEventsList::showLogExtract(
				$outputPage,
				$logTypes,
				$title,
				'',
				[
					'lim' => 10,
					'conds' => $conds,
					'showIfEmpty' => false,
					'msgKey' => [ $isRegistered || $sessionExists
						? 'moveddeleted-notice'
						: 'moveddeleted-notice-recent'
					]
				]
			);
		}

		if ( !$this->mPage->hasViewableContent() && $send404Code && !$validUserPage ) {
			// If there's no backing content, send a 404 Not Found
			// for better machine handling of broken links.
			$context->getRequest()->response()->statusHeader( 404 );
		}

		// Also apply the robot policy for nonexisting pages (even if a 404 was used)
		$policy = $this->getRobotPolicy( 'view' );
		$outputPage->getMetadata()->setIndexPolicy( $policy['index'] );
		$outputPage->setFollowPolicy( $policy['follow'] );

		$hookResult = $this->getHookRunner()->onBeforeDisplayNoArticleText( $this );

		if ( !$hookResult ) {
			return;
		}

		# Show error message
		$oldid = $this->getOldID();
		if ( !$oldid && $title->getNamespace() === NS_MEDIAWIKI && $title->hasSourceText() ) {
			$text = $this->getTitle()->getDefaultMessageText() ?? '';
			$outputPage->addWikiTextAsContent( $text );
		} else {
			if ( $oldid ) {
				$text = $this->getMissingRevisionMsg( $oldid )->plain();
			} elseif ( $context->getAuthority()->probablyCan( 'edit', $title ) ) {
				$message = $isRegistered ? 'noarticletext' : 'noarticletextanon';
				$text = $context->msg( $message )->plain();
			} else {
				$text = $context->msg( 'noarticletext-nopermission' )->plain();
			}

			$dir = $context->getLanguage()->getDir();
			$lang = $context->getLanguage()->getHtmlCode();
			$outputPage->addWikiTextAsInterface( Html::openElement( 'div', [
				'class' => "noarticletext mw-content-$dir",
				'dir' => $dir,
				'lang' => $lang,
			] ) . "\n$text\n</div>" );
		}
	}

	/**
	 * Show error text for errors generated in Article::view().
	 * @param string $errortext localized wikitext error message
	 */
	private function showViewError( string $errortext ) {
		$outputPage = $this->getContext()->getOutput();
		$outputPage->setPageTitleMsg( $this->getContext()->msg( 'errorpagetitle' ) );
		$outputPage->disableClientCache();
		$outputPage->setRobotPolicy( 'noindex,nofollow' );
		$outputPage->clearHTML();
		$this->addMessageBoxStyles( $outputPage );
		$outputPage->addHTML( Html::errorBox( $outputPage->parseAsContent( $errortext ) ) );
	}

	/**
	 * If the revision requested for view is deleted, check permissions.
	 * Send either an error message or a warning header to the output.
	 *
	 * @return bool True if the view is allowed, false if not.
	 */
	public function showDeletedRevisionHeader() {
		if ( !$this->mRevisionRecord->isDeleted( RevisionRecord::DELETED_TEXT ) ) {
			// Not deleted
			return true;
		}
		$outputPage = $this->getContext()->getOutput();
		// Used in wikilinks, should not contain whitespaces
		$titleText = $this->getTitle()->getPrefixedDBkey();
		$this->addMessageBoxStyles( $outputPage );
		// If the user is not allowed to see it...
		if ( !$this->mRevisionRecord->userCan(
			RevisionRecord::DELETED_TEXT,
			$this->getContext()->getAuthority()
		) ) {
			$outputPage->addHTML(
				Html::warningBox(
					$outputPage->msg( 'rev-deleted-text-permission', $titleText )->parse(),
					'plainlinks'
				)
			);

			return false;
		// If the user needs to confirm that they want to see it...
		} elseif ( $this->getContext()->getRequest()->getInt( 'unhide' ) !== 1 ) {
			# Give explanation and add a link to view the revision...
			$oldid = intval( $this->getOldID() );
			$link = $this->getTitle()->getFullURL( "oldid={$oldid}&unhide=1" );
			$msg = $this->mRevisionRecord->isDeleted( RevisionRecord::DELETED_RESTRICTED ) ?
				'rev-suppressed-text-unhide' : 'rev-deleted-text-unhide';
			$outputPage->addHTML(
				Html::warningBox(
					$outputPage->msg( $msg, $link )->parse(),
					'plainlinks'
				)
			);

			return false;
		// We are allowed to see...
		} else {
			$msg = $this->mRevisionRecord->isDeleted( RevisionRecord::DELETED_RESTRICTED )
				? [ 'rev-suppressed-text-view', $titleText ]
				: [ 'rev-deleted-text-view', $titleText ];
			$outputPage->addHTML(
				Html::warningBox(
					$outputPage->msg( $msg[0], $msg[1] )->parse(),
					'plainlinks'
				)
			);

			return true;
		}
	}

	private function addMessageBoxStyles( OutputPage $outputPage ) {
		$outputPage->addModuleStyles( [
			'mediawiki.codex.messagebox.styles',
		] );
	}

	/**
	 * Generate the navigation links when browsing through an article revisions
	 * It shows the information as:
	 *   Revision as of \<date\>; view current revision
	 *   \<- Previous version | Next Version -\>
	 *
	 * @param int $oldid Revision ID of this article revision
	 */
	public function setOldSubtitle( $oldid = 0 ) {
		if ( !$this->getHookRunner()->onDisplayOldSubtitle( $this, $oldid ) ) {
			return;
		}

		$context = $this->getContext();
		$unhide = $context->getRequest()->getInt( 'unhide' ) === 1;

		# Cascade unhide param in links for easy deletion browsing
		$extraParams = [];
		if ( $unhide ) {
			$extraParams['unhide'] = 1;
		}

		if ( $this->mRevisionRecord && $this->mRevisionRecord->getId() === $oldid ) {
			$revisionRecord = $this->mRevisionRecord;
		} else {
			$revisionRecord = $this->revisionStore->getRevisionById( $oldid );
		}
		if ( !$revisionRecord ) {
			throw new LogicException( 'There should be a revision record at this point.' );
		}

		$timestamp = $revisionRecord->getTimestamp();

		$current = ( $oldid == $this->mPage->getLatest() );
		$language = $context->getLanguage();
		$user = $context->getUser();

		$td = $language->userTimeAndDate( $timestamp, $user );
		$tddate = $language->userDate( $timestamp, $user );
		$tdtime = $language->userTime( $timestamp, $user );

		# Show user links if allowed to see them. If hidden, then show them only if requested...
		$userlinks = Linker::revUserTools( $revisionRecord, !$unhide );

		$infomsg = $current && !$context->msg( 'revision-info-current' )->isDisabled()
			? 'revision-info-current'
			: 'revision-info';

		$outputPage = $context->getOutput();
		$outputPage->addModuleStyles( [
			'mediawiki.action.styles',
			'mediawiki.interface.helpers.styles'
		] );

		$revisionUser = $revisionRecord->getUser();
		$revisionInfo = "<div id=\"mw-{$infomsg}\">" .
			$context->msg( $infomsg, $td )
				->rawParams( $userlinks )
				->params(
					$revisionRecord->getId(),
					$tddate,
					$tdtime,
					$revisionUser ? $revisionUser->getName() : ''
				)
				->rawParams( $this->commentFormatter->formatRevision(
					$revisionRecord,
					$user,
					true,
					!$unhide
				) )
				->parse() .
			"</div>";

		$lnk = $current
			? $context->msg( 'currentrevisionlink' )->escaped()
			: $this->linkRenderer->makeKnownLink(
				$this->getTitle(),
				$context->msg( 'currentrevisionlink' )->text(),
				[],
				$extraParams
			);
		$curdiff = $current
			? $context->msg( 'diff' )->escaped()
			: $this->linkRenderer->makeKnownLink(
				$this->getTitle(),
				$context->msg( 'diff' )->text(),
				[],
				[
					'diff' => 'cur',
					'oldid' => $oldid
				] + $extraParams
			);
		$prevExist = (bool)$this->revisionStore->getPreviousRevision( $revisionRecord );
		$prevlink = $prevExist
			? $this->linkRenderer->makeKnownLink(
				$this->getTitle(),
				$context->msg( 'previousrevision' )->text(),
				[],
				[
					'direction' => 'prev',
					'oldid' => $oldid
				] + $extraParams
			)
			: $context->msg( 'previousrevision' )->escaped();
		$prevdiff = $prevExist
			? $this->linkRenderer->makeKnownLink(
				$this->getTitle(),
				$context->msg( 'diff' )->text(),
				[],
				[
					'diff' => 'prev',
					'oldid' => $oldid
				] + $extraParams
			)
			: $context->msg( 'diff' )->escaped();
		$nextlink = $current
			? $context->msg( 'nextrevision' )->escaped()
			: $this->linkRenderer->makeKnownLink(
				$this->getTitle(),
				$context->msg( 'nextrevision' )->text(),
				[],
				[
					'direction' => 'next',
					'oldid' => $oldid
				] + $extraParams
			);
		$nextdiff = $current
			? $context->msg( 'diff' )->escaped()
			: $this->linkRenderer->makeKnownLink(
				$this->getTitle(),
				$context->msg( 'diff' )->text(),
				[],
				[
					'diff' => 'next',
					'oldid' => $oldid
				] + $extraParams
			);

		$cdel = Linker::getRevDeleteLink(
			$context->getAuthority(),
			$revisionRecord,
			$this->getTitle()
		);
		if ( $cdel !== '' ) {
			$cdel .= ' ';
		}

		// the outer div is need for styling the revision info and nav in MobileFrontend
		$this->addMessageBoxStyles( $outputPage );
		$outputPage->addSubtitle(
			Html::warningBox(
				$revisionInfo .
				"<div id=\"mw-revision-nav\">" . $cdel .
				$context->msg( 'revision-nav' )->rawParams(
					$prevdiff, $prevlink, $lnk, $curdiff, $nextlink, $nextdiff
				)->escaped() . "</div>",
				'mw-revision'
			)
		);
	}

	/**
	 * Return the HTML for the top of a redirect page
	 *
	 * Chances are you should just be using the ParserOutput from
	 * WikitextContent::getParserOutput instead of calling this for redirects.
	 *
	 * @since 1.23
	 * @param Language $lang
	 * @param Title $target Destination to redirect
	 * @param bool $forceKnown Should the image be shown as a bluelink regardless of existence?
	 * @return string Containing HTML with redirect link
	 * @deprecated since 1.41, use LinkRenderer::makeRedirectHeader() instead
	 */
	public static function getRedirectHeaderHtml( Language $lang, Title $target, $forceKnown = false ) {
		wfDeprecated( __METHOD__, '1.41' );
		$linkRenderer = MediaWikiServices::getInstance()->getLinkRenderer();
		return $linkRenderer->makeRedirectHeader( $lang, $target, $forceKnown );
	}

	/**
	 * Adds help link with an icon via page indicators.
	 * Link target can be overridden by a local message containing a wikilink:
	 * the message key is: 'namespace-' + namespace number + '-helppage'.
	 * @param string $to Target MediaWiki.org page title or encoded URL.
	 * @param bool $overrideBaseUrl Whether $url is a full URL, to avoid MW.o.
	 * @since 1.25
	 */
	public function addHelpLink( $to, $overrideBaseUrl = false ) {
		$out = $this->getContext()->getOutput();
		$msg = $out->msg( 'namespace-' . $this->getTitle()->getNamespace() . '-helppage' );

		if ( !$msg->isDisabled() ) {
			$title = Title::newFromText( $msg->plain() );
			if ( $title instanceof Title ) {
				$out->addHelpLink( $title->getLocalURL(), true );
			}
		} else {
			$out->addHelpLink( $to, $overrideBaseUrl );
		}
	}

	/**
	 * Handle action=render
	 */
	public function render() {
		$this->getContext()->getRequest()->response()->header( 'X-Robots-Tag: noindex' );
		$this->getContext()->getOutput()->setArticleBodyOnly( true );
		// We later set 'enableSectionEditLinks=false' based on this; also used by ImagePage
		$this->viewIsRenderAction = true;
		$this->view();
	}

	/**
	 * action=protect handler
	 */
	public function protect() {
		$form = new ProtectionForm( $this );
		$form->execute();
	}

	/**
	 * action=unprotect handler (alias)
	 */
	public function unprotect() {
		$this->protect();
	}

	/* Caching functions */

	/**
	 * checkLastModified returns true if it has taken care of all
	 * output to the client that is necessary for this request.
	 * (that is, it has sent a cached version of the page)
	 *
	 * @return bool True if cached version send, false otherwise
	 */
	protected function tryFileCache() {
		static $called = false;

		if ( $called ) {
			wfDebug( "Article::tryFileCache(): called twice!?" );
			return false;
		}

		$called = true;
		if ( $this->isFileCacheable() ) {
			$cache = new HTMLFileCache( $this->getTitle(), 'view' );
			if ( $cache->isCacheGood( $this->mPage->getTouched() ) ) {
				wfDebug( "Article::tryFileCache(): about to load file" );
				$cache->loadFromFileCache( $this->getContext() );
				return true;
			} else {
				wfDebug( "Article::tryFileCache(): starting buffer" );
				ob_start( [ $cache, 'saveToFileCache' ] );
			}
		} else {
			wfDebug( "Article::tryFileCache(): not cacheable" );
		}

		return false;
	}

	/**
	 * Check if the page can be cached
	 * @param int $mode One of the HTMLFileCache::MODE_* constants (since 1.28)
	 * @return bool
	 */
	public function isFileCacheable( $mode = HTMLFileCache::MODE_NORMAL ) {
		$cacheable = false;

		if ( HTMLFileCache::useFileCache( $this->getContext(), $mode ) ) {
			$cacheable = $this->mPage->getId()
				&& !$this->mRedirectedFrom && !$this->getTitle()->isRedirect();
			// Extension may have reason to disable file caching on some pages.
			if ( $cacheable ) {
				$cacheable = $this->getHookRunner()->onIsFileCacheable( $this ) ?? false;
			}
		}

		return $cacheable;
	}

	/**
	 * Lightweight method to get the parser output for a page, checking the parser cache
	 * and so on. Doesn't consider most of the stuff that Article::view() is forced to
	 * consider, so it's not appropriate to use there.
	 *
	 * @since 1.16 (r52326) for LiquidThreads
	 *
	 * @param int|null $oldid Revision ID or null
	 * @param UserIdentity|null $user The relevant user
	 * @return ParserOutput|false ParserOutput or false if the given revision ID is not found
	 */
	public function getParserOutput( $oldid = null, ?UserIdentity $user = null ) {
		if ( $user === null ) {
			$parserOptions = $this->getParserOptions();
		} else {
			$parserOptions = $this->mPage->makeParserOptions( $user );
			$parserOptions->setRenderReason( 'page-view' );
		}

		return $this->mPage->getParserOutput( $parserOptions, $oldid );
	}

	/**
	 * Get parser options suitable for rendering the primary article wikitext
	 * @return ParserOptions
	 */
	public function getParserOptions() {
		$parserOptions = $this->mPage->makeParserOptions( $this->getContext() );
		$parserOptions->setRenderReason( 'page-view' );
		return $parserOptions;
	}

	/**
	 * Sets the context this Article is executed in
	 *
	 * @param IContextSource $context
	 * @since 1.18
	 */
	public function setContext( $context ) {
		$this->mContext = $context;
	}

	/**
	 * Gets the context this Article is executed in
	 *
	 * @return IContextSource
	 * @since 1.18
	 */
	public function getContext(): IContextSource {
		if ( $this->mContext instanceof IContextSource ) {
			return $this->mContext;
		} else {
			wfDebug( __METHOD__ . " called and \$mContext is null. " .
				"Return RequestContext::getMain()" );
			return RequestContext::getMain();
		}
	}

	/**
	 * Call to WikiPage function for backwards compatibility.
	 * @see ContentHandler::getActionOverrides
	 * @return array
	 */
	public function getActionOverrides() {
		return $this->mPage->getActionOverrides();
	}

	private function getMissingRevisionMsg( int $oldid ): Message {
		// T251066: Try loading the revision from the archive table.
		// Show link to view it if it exists and the user has permission to view it.
		// (Ignore the given title, if any; look it up from the revision instead.)
		$context = $this->getContext();
		$revRecord = $this->archivedRevisionLookup->getArchivedRevisionRecord( null, $oldid );
		if (
			$revRecord &&
			$revRecord->userCan(
				RevisionRecord::DELETED_TEXT,
				$context->getAuthority()
			) &&
			$context->getAuthority()->isAllowedAny( 'deletedtext', 'undelete' )
		) {
			return $context->msg(
				'missing-revision-permission',
				$oldid,
				$revRecord->getTimestamp(),
				Title::newFromPageIdentity( $revRecord->getPage() )->getPrefixedDBkey()
			);
		}
		return $context->msg( 'missing-revision', $oldid );
	}
}

/** @deprecated class alias since 1.44 */
class_alias( Article::class, 'Article' );
