<?php

namespace MediaWiki\Linker\Hook;

use MediaWiki\Context\IContextSource;
use MediaWiki\User\UserIdentity;

/**
 * This is a hook handler interface, see docs/Hooks.md.
 * Use the hook name "UserLinkRendererUserLinkPostRender" to register handlers implementing this interface.
 *
 * @stable to implement
 * @ingroup Hooks
 */
interface UserLinkRendererUserLinkPostRenderHook {

	/**
	 * This hook is called after the username link HTML has been generated, and allows for
	 * adding prefix or postfix HTML. Note that this hook may be called hundreds of times
	 * in a given request, so hook handlers implementations should consider performance
	 * of any code invoked in the handler.
	 *
	 * @since 1.45
	 *
	 * @param UserIdentity $targetUser The user associated with the rendered username link HTML.
	 * @param IContextSource $context The context for viewing the username.
	 * @param string &$html The username link HTML generated by UserLinkRenderer
	 * @param string &$prefix An HTML fragment to add as a prefix to &$html
	 * @param string &$postfix An HTML fragment to add as a postfix to &$html
	 * @return bool|void True or no return value to continue, or false to stop further processing
	 *   and return $&html, &$prefix and &$postfix
	 */
	public function onUserLinkRendererUserLinkPostRender(
		UserIdentity $targetUser,
		IContextSource $context,
		string &$html,
		string &$prefix,
		string &$postfix
	);

}
