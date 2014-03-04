<?php
/** Kabyle (Taqbaylit)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Agurzil
 * @author Agzennay
 * @author Amazigh84
 * @author Azwaw
 * @author Mmistmurt
 * @author MoubarikBelkasim
 * @author Salem333
 * @author Teak
 * @author Urhixidur
 */

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Uslig',
	NS_TALK             => 'Mmeslay',
	NS_USER             => 'Amseqdac',
	NS_USER_TALK        => 'Amyannan_umsqedac',
	NS_PROJECT_TALK     => 'Amyannan_n_$1',
	NS_FILE             => 'Tugna',
	NS_FILE_TALK        => 'Amyannan_n_tugna',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Amyannan_n_MediaWiki',
	NS_TEMPLATE         => 'Talɣa',
	NS_TEMPLATE_TALK    => 'Amyannan_n_talɣa',
	NS_HELP             => 'Tallat',
	NS_HELP_TALK        => 'Amyannan_n_tallat',
	NS_CATEGORY         => 'Taggayt',
	NS_CATEGORY_TALK    => 'Amyannan_n_taggayt',
);

$namespaceAliases = array(
	'Talγa'            => NS_TEMPLATE,
	'Amyannan_n_talγa' => NS_TEMPLATE_TALK,
);

$messages = array(
# User preference toggles
'tog-underline' => 'Derrer izdayen:',
'tog-hideminor' => 'Ffer ibeddlen ifessasen deg yibeddlen imaynuten',
'tog-hidepatrolled' => 'Ffer ibeddlen iεessan deg yibeddlen imaynuten',
'tog-newpageshidepatrolled' => 'Ffer isebtaren iɛessan gar umuɣ n isebtaren imaynuten',
'tog-extendwatchlist' => 'Ssemɣer umuɣ n uɛessi iwakken ad muqleɣ akk n wayen zemreɣ ad beddleɣ',
'tog-usenewrc' => 'Ssegrew ibeddlen s usebtar deg ibeddilen imaynuten d umuɣ n uḍfar',
'tog-numberheadings' => 'Izwal ɣur-sen imḍanen mebla ma serseɣ-iten',
'tog-showtoolbar' => 'Ssken tafeggagt n ifecka n ubeddel',
'tog-editondblclick' => 'Beddel isebtar mi wekkiɣ snat n tikwal',
'tog-editsectiononrightclick' => 'Ssermed abeddel n tigezmi s ukliki ayeffus ɣef izwal',
'tog-rememberpassword' => 'Cfu ɣef yisem n umseqdac inu di uselkim-agi (i afellay n $1 {{PLURAL:$1|ass|ussan}})',
'tog-watchcreations' => 'Rnu isebtar i xelqeɣ deg wumuɣ n uɛessi inu',
'tog-watchdefault' => 'Rnu isebtar i ttbeddileɣ deg wumuɣ n uɛessi inu',
'tog-watchmoves' => 'Rnu isebtar i smimḍeɣ deg wumuɣ n uɛessi inu',
'tog-watchdeletion' => 'Rnu isebtar i mḥiɣ deg wumuɣ n uɛessi inu',
'tog-minordefault' => 'Rcem akk ibeddlen am ibeddlen ifessasen d ameslugen',
'tog-previewontop' => 'Ssken pre-timeẓriwt uqbel tankult ubeddel',
'tog-previewonfirst' => 'Ssken pre-timeẓriwt akk d ubeddel amezwaru',
'tog-enotifwatchlistpages' => "Azen-iyi-d e-mail m'ara yettubeddel asebter i ttɛassaɣ",
'tog-enotifusertalkpages' => 'Azen-iyi-d e-mail asmi sɛiɣ izen amaynut',
'tog-enotifminoredits' => 'Azen-iyi-d e-mail ma llan ibeddlen ifessasen',
'tog-enotifrevealaddr' => 'Ssken e-mail inu asmi yettwazen email n talɣut',
'tog-shownumberswatching' => 'Ssken geddac yellan n yimseqdacen iɛessasen',
'tog-oldsig' => 'Azmul yellan :',
'tog-fancysig' => 'Eǧǧ azmul am yettili (war azday awurman)',
'tog-uselivepreview' => 'Sseqdec askan arurad (Experimental)',
'tog-forceeditsummary' => 'Ini-iyi-d mi sskecmeɣ agzul amecluc',
'tog-watchlisthideown' => 'Ffer ibeddlen inu seg wumuɣ n uɛessi inu',
'tog-watchlisthidebots' => 'Ffer ibeddlen n iboṭiyen seg wumuɣ n uɛessi inu',
'tog-watchlisthideminor' => 'Ffer ibeddlen ifessasen seg wumuɣ n uɛessi inu',
'tog-watchlisthideliu' => 'Ffer ibeddlen n iseqdacen yelan deg umuɣ n tiḍefri',
'tog-watchlisthideanons' => 'Ffer ibeddlen n iseqdacen udrigen deg umuɣ n tiḍefri',
'tog-watchlisthidepatrolled' => 'Ffer ibeddlen iɛessan deg umuɣ n tiḍefri',
'tog-ccmeonemails' => 'Azen-iyi-d email n wayen uzneɣ i imseqdacen wiyaḍ',
'tog-diffonly' => 'Ur temliḍ-iyi-d ara ayen yellan seddaw imgerraden',
'tog-showhiddencats' => 'Beqqeḍ taggayin yeffren',
'tog-norollbackdiff' => 'Ur beqqeḍ ara "diff" ma yella usemmet',
'tog-useeditwarning' => 'Σeggen iyid mi ara fγaγ seg usebter mebla ma skeslaγ ibeddilen.',
'tog-prefershttps' => 'Sseqdec yalass tuqqna yettwaḥerzen mi teqqneḍ',

'underline-always' => 'Daymen',
'underline-never' => 'Abaden',
'underline-default' => 'Azal s lexṣas n iminig neɣ n usentel',

# Font style option in Special:Preferences
'editfont-style' => 'Aɣanib n tasefsit n taɣzut ubeqqeḍ :',
'editfont-default' => 'Tasefsit n iminig s lexṣas',
'editfont-monospace' => 'Tasefsit s lqedd usbiḍ',
'editfont-sansserif' => 'Tasefsit "Sans-serif"',
'editfont-serif' => 'Tasefsit "Serif"',

# Dates
'sunday' => 'Ačer',
'monday' => 'Arim',
'tuesday' => 'Aram',
'wednesday' => 'Ahad',
'thursday' => 'Amhad',
'friday' => 'Sem',
'saturday' => 'Sed',
'sun' => 'Ače',
'mon' => 'Ari',
'tue' => 'Ara',
'wed' => 'Aha',
'thu' => 'Amh',
'fri' => 'Sem',
'sat' => 'Sed',
'january' => 'yennayer',
'february' => 'furar',
'march' => 'meɣres',
'april' => 'yebrir',
'may_long' => 'Mayyu',
'june' => 'yunyu',
'july' => 'yulyu',
'august' => 'ɣuct',
'september' => 'ctamber',
'october' => 'tuber',
'november' => 'wamber',
'december' => 'dujamber',
'january-gen' => 'yennayer',
'february-gen' => 'furar',
'march-gen' => 'meɣres',
'april-gen' => 'yebrir',
'may-gen' => 'mayyu',
'june-gen' => 'yunyu',
'july-gen' => 'yulyu',
'august-gen' => 'ɣuct',
'september-gen' => 'ctamber',
'october-gen' => 'tuber',
'november-gen' => 'wamber',
'december-gen' => 'dujamber',
'jan' => 'yen',
'feb' => 'fur',
'mar' => 'meɣ',
'apr' => 'yeb',
'may' => 'may',
'jun' => 'yun',
'jul' => 'yul',
'aug' => 'ɣuc',
'sep' => 'cta',
'oct' => 'tub',
'nov' => 'wam',
'dec' => 'duj',
'january-date' => '$1 yennayer',
'february-date' => '$1 fuṛaṛ',
'march-date' => '$1 meɣres',
'april-date' => '$1 yebrir',
'may-date' => '$1 mayyu',
'june-date' => '$1 yunyu',
'july-date' => '$1 yulyu',
'august-date' => '$1 ɣuct',
'september-date' => '$1 ctamber',
'october-date' => '$1 tuber',
'november-date' => '$1 wamber',
'december-date' => '$1 dujamber',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Taggayt|Taggayin}}',
'category_header' => 'Isebtar deg taggayt "$1"',
'subcategories' => 'Adutaggayin',
'category-media-header' => 'Media deg taggayt "$1"',
'category-empty' => "''Taggayt-agi d tilemt.''",
'hidden-categories' => '{{PLURAL:$1|Taggayt yeffren|Taggayin yeffren}}',
'hidden-category-category' => 'Taggayin yeffren',
'category-subcat-count' => 'Taggayt agi tesɛa {{PLURAL:$2|adu-taggayt|$2 adu-taggayin, ɣef ayed {{PLURAL:$1|t-agi|t-igi $1}}}} ddaw agi.',
'category-subcat-count-limited' => 'Taggayt agi tesɛa {{PLURAL:$1|adu-taggayt agi|tid $1 adu-taggayin agi}} ddaw-agi.',
'category-article-count' => 'Taggayt agi tesɛa {{PLURAL:$2|asebter agi|$2 isebtaren, ɣef ayed {{PLURAL:$1|t-agi|t-igi $1}} ddaw-agi}}.',
'category-article-count-limited' => '{{PLURAL:$1|Asebter agi yella|$1 isebtar agi llan}} deg taggayt agi.',
'category-file-count' => 'Taggayt agi tesɛa {{PLURAL:$2|afaylu agi|$2 ifuyla, ɣef ayed {{PLURAL:$1|t-agi|t-igi $1}} ddaw-agi}}.',
'category-file-count-limited' => '{{PLURAL:$1|Afaylu agi yella|$1 ifuyla agi llan}} deg taggayt agi.',
'listingcontinuesabbrev' => 'asartu',
'index-category' => 'Isebtar s umatar',
'noindex-category' => 'Asebter agi ur d-yerna ara deg umatar',
'broken-file-category' => 'Isebtar s iseɣwan n ifuyla iṛzan',

'about' => 'Awal ɣef...',
'article' => 'Ayen yella deg usebter',
'newwindow' => '(teldi deg ttaq amaynut)',
'cancel' => 'Eǧǧ-it am yella',
'moredotdotdot' => 'Ugar...',
'morenotlisted' => 'Umuɣ agi ur yella ara d ummid.',
'mypage' => 'Asebtar',
'mytalk' => 'Amyannan',
'anontalk' => 'Amyannan n IP-yagi',
'navigation' => 'Assilel',
'and' => '&#32;u',

# Cologne Blue skin
'qbfind' => 'Af',
'qbbrowse' => 'Ẓer isebtar',
'qbedit' => 'Beddel',
'qbpageoptions' => 'Asebter-agi',
'qbmyoptions' => 'isebtar inu',
'faq' => 'Isteqsiyen',
'faqpage' => 'Project:Isteqsiyen',

# Vector skin
'vector-action-addsection' => 'Rnud ameggay',
'vector-action-delete' => 'Mḥu',
'vector-action-move' => 'Smimeḍ',
'vector-action-protect' => 'Mmesten',
'vector-action-undelete' => 'Uɣaled',
'vector-action-unprotect' => 'Beddel amesten',
'vector-view-create' => 'Snulfu',
'vector-view-edit' => 'Ẓẓiẓreg',
'vector-view-history' => 'Ẓeṛ amazray',
'vector-view-view' => 'Ɣer',
'vector-view-viewsource' => 'Ẓer aɣbalu',
'actions' => 'Tigawtin',
'namespaces' => 'Talluntin n isemawen',
'variants' => 'Tineḍwa',

'navigation-heading' => 'Umuɣ n tunigin',
'errorpagetitle' => 'Agul',
'returnto' => 'Uɣal ar $1.',
'tagline' => 'Seg {{SITENAME}}',
'help' => 'Tallat',
'search' => 'Nadi',
'searchbutton' => 'Nadi',
'go' => 'Ẓer',
'searcharticle' => 'Ẓer',
'history' => 'Amezruy n usebter',
'history_short' => 'Amezruy',
'updatedmarker' => 'yettubeddel segmi tarzeft taneggarut inu',
'printableversion' => 'Tasiwelt iwakken ad timprimiḍ',
'permalink' => 'Azday ur yettbeddil ara',
'print' => 'Siggez',
'view' => 'Ẓeṛ',
'edit' => 'Beddel',
'create' => 'Snulfu',
'editthispage' => 'Beddel asebter-agi',
'create-this-page' => 'Snulfu asebter-agi',
'delete' => 'Mḥu',
'deletethispage' => 'Mḥu asebter-agi',
'undeletethispage' => 'Erred asebter agi',
'undelete_short' => 'Fakk amḥay n {{PLURAL:$1|yiwen ubeddel|$1 yibeddlen}}',
'viewdeleted_short' => 'Ẓeṛ {{PLURAL:$1|yiwen abeddel yettumḥan|$1 Ibeddlen yettumḥan}}',
'protect' => 'Ḥrez',
'protect_change' => 'beddel tiḥḥerzi',
'protectthispage' => 'Ḥrez asebter-agi',
'unprotect' => 'Beddel amesten',
'unprotectthispage' => 'Beddel amesten n usebter-agi',
'newpage' => 'Asebter amaynut',
'talkpage' => 'Mmeslay ɣef usebter-agi',
'talkpagelinktext' => 'Mmeslay',
'specialpage' => 'Asebter uslig',
'personaltools' => 'Dduzan inu',
'postcomment' => 'Azen awennit',
'articlepage' => 'Ẓer ayen yellan deg usebter',
'talk' => 'Amyannan',
'views' => 'Tuẓrin',
'toolbox' => 'Ifecka',
'userpage' => 'Ẓer asebter n wemseqdac',
'projectpage' => 'Ẓer asebter n usenfar',
'imagepage' => 'Ẓer asebter n tugna',
'mediawikipage' => 'Ẓer asebter n izen',
'templatepage' => 'Ẓer asebter n talɣa',
'viewhelppage' => 'Ẓer asebter n tallat',
'categorypage' => 'Ẓer asebter n taggayin',
'viewtalkpage' => 'Ẓer amyannan',
'otherlanguages' => 'S tutlayin tiyaḍ',
'redirectedfrom' => '(Yettusmimeḍ seg $1)',
'redirectpagesub' => 'Asebter usemmimeḍ',
'lastmodifiedat' => 'Tikkelt taneggarut i yettubeddel asebter-agi $2, $1.',
'viewcount' => 'Asebter-agi yettwakcem {{PLURAL:$1|yiwet tikelt|$1 tikwal}}.',
'protectedpage' => 'Asebter yettwaḥerzen',
'jumpto' => 'Neggez ar:',
'jumptonavigation' => 'ẓer isebtar',
'jumptosearch' => 'anadi',
'view-pool-error' => 'Suref-aɣ, iqeddacen iwziren tura.
Aṭas iseqdacen tnadin ad ẓṛen asebter agi.
Ilaq ad arǧuḍ imir uqbel ad εreḍeḍ tikkelt nniḍen .

$1',
'pool-timeout' => 'Amenḍar iɛedda deg taganit n uzekṛun',
'pool-queuefull' => 'Adras n umahil yečuṛ',
'pool-errorunknown' => 'Anezri warisem',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => 'Awal ɣef {{SITENAME}}',
'aboutpage' => 'Project:Awal ɣef...',
'copyright' => 'Agbur yella ddaw $1 ḥaca ma abdar anemgal.',
'copyrightpage' => '{{ns:project}}:Izerfanɣel',
'currentevents' => 'Isallen',
'currentevents-url' => 'Project:Isallen',
'disclaimers' => 'Iɣtalen',
'disclaimerpage' => 'Project:Iɣtalen',
'edithelp' => 'Tallat deg ubeddel',
'helppage' => 'Help:Agbur',
'mainpage' => 'Asebter amenzawi',
'mainpage-description' => 'Asebter amenzawi',
'policy-url' => 'Project:Ilugan',
'portal' => 'Awwur n timetti',
'portal-url' => 'Project:Awwur n timetti',
'privacy' => 'Tudert tusligt',
'privacypage' => 'Project:Tudert tusligt',

'badaccess' => 'Agul n turagt',
'badaccess-group0' => 'Ur tettalaseḍ ara ad texedmeḍ tigawt i tseqsiḍ.',
'badaccess-groups' => 'Tigawt id steqsiḍ t-uffar kan i iseqdacen n {{PLURAL:$2|ugraw|igrawen}} : $1.',

'versionrequired' => 'Yessefk ad tesɛiḍ tasiwelt $1 n MediaWiki',
'versionrequiredtext' => 'Yessefk ad tesɛiḍ tasiwelt $1 n MediaWiki iwakken ad tesseqdceḍ asebter-agi. Ẓer [[Special:Version|tasiwelt n usebter]].',

'ok' => 'Seɣbel',
'retrievedfrom' => 'Yettwaddem seg "$1"',
'youhavenewmessages' => 'Ɣur-k $1 ($2).',
'youhavenewmessagesfromusers' => 'Tesɛiḍ $1 n {{PLURAL:$3|useqdac nniḍen|$3 iseqdacen nniḍen}} ( $2 ).',
'youhavenewmessagesmanyusers' => 'Tesɛiḍ $1 n aṭas n iseqdacen ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|izen amaynut|999=inzan imaynuten}}',
'newmessagesdifflinkplural' => '{{PLURAL:$1|abeddel aneggaru|999=ibeddilen ineggura}}',
'youhavenewmessagesmulti' => 'Tesɛiḍ iznan imaynuten deg $1',
'editsection' => 'beddel',
'editold' => 'beddel',
'viewsourceold' => 'ẓeṛ aɣbalu',
'editlink' => 'beddel',
'viewsourcelink' => 'ẓeṛ aɣbalu',
'editsectionhint' => 'Beddel amur: $1',
'toc' => 'Agbur',
'showtoc' => 'Ssken',
'hidetoc' => 'Ffer',
'collapsible-collapse' => 'Seggelmes',
'collapsible-expand' => 'Beqqeḍ',
'thisisdeleted' => 'Ẓer neɣ err $1 am yella?',
'viewdeleted' => 'Ẓer $1?',
'restorelink' => '{{PLURAL:$1|Yiwen abeddel yettumḥan|$1 Ibeddlen yettumḥan}}',
'feedlinks' => 'Asuddem:',
'feed-invalid' => 'Anaw n usuddem mačči ṣaḥiḥ.',
'feed-unavailable' => 'Isuddman RSS ur yestufan ara',
'site-rss-feed' => 'Asuddem RSS n $1',
'site-atom-feed' => 'Taneflit Atom n $1',
'page-rss-feed' => 'Asuddem RSS n « $1 »',
'page-atom-feed' => 'Taneflit Atom n "$1"',
'red-link-title' => '$1 (ulac asebter)',
'sort-descending' => 'Afran akaray',
'sort-ascending' => 'Afran aseffes',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Amagrad',
'nstab-user' => 'Asebter n wemseqdac',
'nstab-media' => 'Asebter n media',
'nstab-special' => 'Asebter uslig',
'nstab-project' => 'Awal ɣef...',
'nstab-image' => 'Afaylu',
'nstab-mediawiki' => 'Izen',
'nstab-template' => 'Talɣa',
'nstab-help' => 'Tallat',
'nstab-category' => 'Taggayt',

# Main script and global functions
'nosuchaction' => 'Tigawt ulac-itt',
'nosuchactiontext' => 'Wiki ur teɛqil ara tigawt-nni n URL',
'nosuchspecialpage' => 'Asebter uslig am wagi ulac-it.',
'nospecialpagetext' => 'Tseqsiḍ ɣef usebter uslig ulac-it, tzemreḍ ad tafeḍ isebtar usligen n ṣṣeḥ deg [[Special:SpecialPages|wumuɣ n isebtar usligen]].',

# General errors
'error' => 'Agul',
'databaseerror' => 'Agul n database',
'databaseerror-text' => 'Tuccḍa n tuttra deg taffa n isefka teḍra-d. Ahat yella afuqes deg useɣẓan.',
'databaseerror-textcl' => 'Tuccḍa n tuttra deg taffa n isefka teḍra-d.',
'databaseerror-query' => 'Tuttra : $1',
'databaseerror-function' => 'Tawuri: $1',
'databaseerror-error' => 'Tuccḍa: $1',
'laggedslavemode' => 'Aɣtal: Ahat asebter ur yesɛi ara akk ibeddlen imaynuten.',
'readonly' => 'Database d tamsekkert',
'enterlockreason' => 'Ini ayɣer tsekkreḍ database, ini daɣen melmi ara ad ifukk asekker',
'readonlytext' => 'Database d tamsekkert, ahat tettuseggem, qrib ad tuɣal-d.

Win (anedbal) isekker-itt yenna-d: $1',
'missing-article' => 'Taffa n isefka ur t-ufa ara aḍris n yiwen usebter ilaq at af, s-isem « $1 » $2.

Umata, wagi yeḍra mi neḍfeṛ azday ɣer yiwen diff aqbur naɣ ɣer amazray n usebter yemḥan.

Ma mačči d-tajṛut agi, ihi d-taniwit deg uhil.
Ilaq ad εeggenem yiwen [[Special:ListUsers/sysop|anedbal]] war ad ttum asefkem URL n uzday.',
'missingarticle-rev' => '(uṭṭun n lqem : $1)',
'missingarticle-diff' => '(Diff: $1, $2)',
'readonly_lag' => 'Database d tamsekkert (weḥdes) axaṭer kra n serveur ɛeṭṭlen',
'internalerror' => 'Agul zdaxel',
'internalerror_info' => 'Anezri agensan : $1',
'fileappenderrorread' => 'Ulamek an ɣeṛ « $1 »  mi taguri',
'fileappenderror' => 'Ulamek an seffes « $1 » ar « $2 ».',
'filecopyerror' => 'Ur yezmir ara ad yexdem alsaru n ufaylu "$1" ar "$2".',
'filerenameerror' => 'Ur yezmir ara ad ibeddel isem ufaylu "$1" ar "$2".',
'filedeleteerror' => 'Ulamek an mḥu afaylu "$1".',
'directorycreateerror' => 'Ulamek an snulfu akaram « $1 ».',
'filenotfound' => 'Ur yezmir ara ad yaf afaylu "$1".',
'fileexistserror' => 'Ulamek an aru afaylu « $1 » : afaylu agi yesnulfad yakan.',
'unexpected' => 'Agul: "$1"="$2".',
'formerror' => 'Agul: ur yezmir ara ad yazen talɣa',
'badarticleerror' => 'Ur yezmir ara ad yexdem tigawt-agi deg usebter-agi.',
'cannotdelete' => 'Ulamek ad yemḥu asebter naɣ afaylu « $1 ».
Ahat amdan wayeḍ yemḥa-t.',
'cannotdelete-title' => 'Ulamek an kkes  asebter « $1 »',
'delete-hook-aborted' => 'Tukkesa tesemmet s usiɣzef.
Ulac asefru ɣef wagi.',
'no-null-revision' => 'Ur nezmer ara ad n-snulfu tacaggart tilemnt tamaynut i usebtar « $1 »',
'badtitle' => 'Azwel ur yelhi',
'badtitletext' => 'Asebter i testeqsiḍ fell-as mačči ṣaḥiḥ, d ilem, neɣ yella ugul deg wezday seg wikipedia s tutlayt tayeḍ neɣ deg wezday n wiki nniḍen. Ahat tesɛa asekkil ur yezmir ara ad yettuseqdac deg wezwel.',
'perfcached' => 'Talɣut deg ukessar seg lkac u waqila mačči d tasiwelt taneggarut. A maximum of {{PLURAL:$1|one result is|$1 results are}} available in the cache.',
'perfcachedts' => 'Talɣut deg ukessar seg lkac, tasiwelt taneggarut n wass $1. A maximum of {{PLURAL:$4|one result is|$4 results are}} available in the cache.',
'querypage-no-updates' => 'Ibeddlen n usebter-agi ur ttbanen ara tura. Tilɣa ines qrib a d-banen.',
'viewsource' => 'Ẓer aɣbalu',
'viewsource-title' => 'Ẓeṛ aɣbalu n $1',
'actionthrottled' => 'Tigawt tesɛa talast',
'actionthrottledtext' => 'Iwakken an ewwet mgal tira yerkan (SPAM), tigawt agi tesɛa talast n amḍan n tikwalt deg akud awezzlan. talast agi t-ɛedda.
Ɛred tikkelt nniḍen deg kra n dqiqa.',
'protectedpagetext' => 'Asebter-agi yetwaḥrez i uqareɛ n ubeddel neɣ tigawin nniḍen.',
'viewsourcetext' => 'Tzemreḍ ad twaliḍ u txedmeḍ alsaru n uɣbalu n usebter-agi:',
'viewyourtext' => 'Tzemṛeḍ ad ẓṛeḍ dɣa ad nɣeleḍ agbur n "ibeddlen inek/inem" deg usebter agi :',
'protectedinterface' => 'Asebter-agi d amsekker axaṭer yettuseqdac i weḍris n software.',
'editinginterface' => "'''Aɣtal:''' Aqla-k tettbeddileḍ asebter i yettuseqdac i weḍris n software. Tagmett n software i tt-ẓren yimseqdacen wiyaḍ ad tbeddel akk d ibeddlen inek.",
'cascadeprotected' => 'Asebter-agi yegdel axaṭer yettusekcem deg {{PLURAL:$1|asebter yegdelen agi|isebtar yegdelen agi}} s Taxtiṛit « amesten s uceṛcuṛ » isermeden :
$2',
'namespaceprotected' => "Ur tesɛiḍ ara turagt iwakken ad beddeleḍ isebtar n tallunt n isemawen \"'''\$1'''\".",
'customcssprotected' => 'Ur tesɛiḍ ara turagt iwakken ad beddeleḍ asebter agi n CSS, acku tesɛa iɣewwaren n yiwen useqdac nniḍen.',
'customjsprotected' => 'Ur tesɛiḍ ara turagt iwakken ad beddeleḍ asebter agi n Javascript, acku tesɛa iɣewwaren n yiwen useqdac nniḍen.',
'mycustomcssprotected' => 'Ur tesɛiḍ ara turagt i ubeddel n usebtar agi CSS.',
'mycustomjsprotected' => 'Ur tesɛiḍ ara turagt i ubeddel n usebtar agi JavaScript.',
'myprivateinfoprotected' => 'Ur tesɛiḍ ara turagt ad beddeleḍ tilɣa inek(em) tusligtin.',
'mypreferencesprotected' => 'Ur tesɛiḍ ara turagt ad beddeleḍ iɣewwaren inek(em).',
'ns-specialprotected' => 'Ur t-zemred ara ad beddeleḍ isebtar usligen',
'titleprotected' => "Azwel agi yegdel deg usnulfu ɣef [[User:$1|$1]].
Taɣẓint id yenna : ''$2''",
'filereadonlyerror' => 'Ulamek an beddel afaylu « $1 » acku akaram n ifuyla « $2 » yella deg taɣuri kan.

Anedbal i tid sekkweṛen yefkad taɣẓint agi : « $3 ».',
'invalidtitle-knownnamespace' => 'Azwel ur i ɣbel ara s tallunt n isemawen « $2 » dɣa d-uglam « $3 »',
'invalidtitle-unknownnamespace' => 'Azwel ur i ɣbel ara s uṭṭun n tallunt n isemawen $1 dɣa d-uglam « $2 » warisem',
'exception-nologin' => 'Ur tekcimeḍ ara',
'exception-nologin-text' => 'Ilaq ad [[Special:Userlogin|qqeneḍ]] iwakken ad kecmeḍ ar usebtar neɣ tawuri agi.',
'exception-nologin-text-manual' => '$1 iwakken ad kecmeḍ ar asebtar neɣ tigawt agi.',

# Virus scanner
'virus-badscanner' => "Yir tawila : anafraḍ n infafaden warisem : ''$1''",
'virus-scanfailed' => 'Abrir n unadi (tangalt $1)',
'virus-unknownscanner' => 'amgelanfafad warisem :',

# Login and logout pages
'logouttext' => "'''Tura tesensereḍ.'''

Kra n isebtar zemren ad sskanen belli mazal-ik s yisem n wemseqdac inek armi temḥuḍ tazarkatut.",
'welcomeuser' => 'Anṣuf, $1 !',
'welcomecreation-msg' => 'Amian inek(em) yesnulfad.
Tzemreḍ ad beddeleḍ {{SITENAME}} [[Special:Preferences|ismenyifen]] inek(em) ma tebɣiḍ.',
'yourname' => 'Isem n wemseqdac',
'userlogin-yourname' => 'Isem n useqdac',
'userlogin-yourname-ph' => 'Sekcem isem-ik(im) n useqdac',
'createacct-another-username-ph' => 'Sekcem isem n useqdac',
'yourpassword' => 'Awal n tbaḍnit',
'userlogin-yourpassword' => 'Awal n uɛeddi',
'userlogin-yourpassword-ph' => 'Sekcem awal-ik(im) n uɛeddi',
'createacct-yourpassword-ph' => 'Sekcem awal n uɛeddi',
'yourpasswordagain' => 'Ɛiwed ssekcem awal n tbaḍnit',
'createacct-yourpasswordagain' => 'Sergeg awal n uɛeddi',
'createacct-yourpasswordagain-ph' => 'Sekcem awal n uɛeddi tikelt nniḍen',
'remembermypassword' => 'Cfu ɣef wawal n tbaḍnit inu di uselkim-agi (i afellay n $1 {{PLURAL:$1|ass|ussan}})',
'userlogin-remembermypassword' => 'Eǧǧ taɣimit inu turmidt',
'userlogin-signwithsecure' => 'Seqdec tuqqna yettwaḥerzen',
'yourdomainname' => 'Taɣult inek',
'password-change-forbidden' => 'Ur zemreḍ ara ad beddeleḍ awalen n uɛaddi ɣef uwiki agi.',
'externaldberror' => 'Yella ugul aberrani n database neɣ ur tettalaseḍ ara ad tbeddleḍ isem an wemseqdac aberrani inek.',
'login' => 'Kcem',
'nav-login-createaccount' => 'Kcem / Xleq isem n wemseqdac',
'loginprompt' => 'Yessefk ad teǧǧiḍ ikukiyen (cookies) iwakken ad tkecmeḍ ar {{SITENAME}}.',
'userlogin' => 'Kcem / Xleq isem n wemseqdac',
'userloginnocreate' => 'Qqen',
'logout' => 'Ffeɣ',
'userlogout' => 'Ffeɣ',
'notloggedin' => 'Ur tekcimeḍ ara',
'userlogin-noaccount' => 'Ur tesɛiḍ ara amiḍan ?',
'userlogin-joinproject' => 'Ddukkel ar {{SITENAME}}',
'nologin' => "Ur tesɛiḍ ara isem n umseqdac? '''$1'''.",
'nologinlink' => 'Xleq isem n wemseqdac',
'createaccount' => 'Xleq isem n wemseqdac',
'gotaccount' => "Tesɛiḍ yagi isem n wemseqdac? '''$1'''.",
'gotaccountlink' => 'Kcem',
'userlogin-resetlink' => 'Ettuḍ tilɣa n tuqqna ?',
'userlogin-resetpassword-link' => 'Ettuḍ awal n uɛaddi ?',
'helplogin-url' => 'Help:Tuqqna',
'userlogin-helplink' => '[[{{MediaWiki:helplogin-url}}|Tallalt i tuqqna]]',
'userlogin-loggedin' => 'Teqqneḍ yakan am {{GENDER:$1|$1}}. Seqdec tiferkit ddaw-agi iwakken ad teqqneḍ s umiḍan nniḍen.',
'userlogin-createanother' => 'Snulfud amiḍan nniḍen',
'createacct-join' => 'Sekcem tilɣa inek(m) ddaw-agi.',
'createacct-another-join' => 'Sekcem tilɣa n umiḍan amaynut ddaw-agi.',
'createacct-emailrequired' => 'Tansa email',
'createacct-emailoptional' => 'Tansa email (axetṛan)',
'createacct-email-ph' => 'Sekcem tansa email inek(m)',
'createacct-another-email-ph' => 'Sekcem tansa email',
'createaccountmail' => 'Seqdec awal n uɛaddi agacuran akudan dɣa ceggeε-it ar tansa email yemlen',
'createacct-realname' => 'Isem n tidets (axetṛan)',
'createaccountreason' => 'Ayɣer',
'createacct-reason' => 'Taɣẓint',
'createacct-reason-ph' => 'Ayɣer ad snulfuḍ amiḍan nniḍen',
'createacct-captcha' => 'Asenqed n taɣellist',
'createacct-imgcaptcha-ph' => 'Sekcem aḍris i tezṛiḍ ddaw-agi',
'createacct-submit' => 'Snulfud amiḍan inek(m)',
'createacct-another-submit' => 'Snulfud amiḍan nniḍen',
'createacct-benefit-heading' => '{{SITENAME}} yetwexdem sɣur medden am kečč/kem.',
'createacct-benefit-body1' => '{{PLURAL:$1|abeddel|ibeddilen}}',
'createacct-benefit-body2' => '{{PLURAL:$1|asebter|isebtar}}',
'createacct-benefit-body3' => '{{PLURAL:$1|atekki amaynut|ittekkiyen imaynuten}}',
'badretype' => 'Awal n tbaḍnit amezwaru d wis sin mačči d kif-kif.',
'userexists' => 'Isem n wemseqdac yeddem-as amdan wayeḍ. Fren yiwen nniḍen.',
'loginerror' => 'Agul n ukcam',
'createacct-error' => 'Tuccda deg usnulfu n umiḍan',
'createaccounterror' => 'Ulamek ad nesnulfu amiḍan : $1',
'nocookiesnew' => 'Isem n wemseqdac-agi yettwaxleq, meɛna ur tekcimeḍ ara. {{SITENAME}} yesseqdac ikukiyen (cookies) iwakken ad tkecmeḍ. Tekseḍ ikukiyen-nni. Eǧǧ-aten, umbeɛd kecm s yisem n wemseqdac akk d wawal n tbaḍnit inek.',
'nocookieslogin' => '{{SITENAME}} yesseqdac ikukiyen (cookies) iwakken ad tkecmeḍ. Tekseḍ ikukiyen-nni. Eǧǧ-aten iwakken ad tkecmeḍ.',
'nocookiesfornew' => 'Amiḍan n useqdac ur d-isnulfu ara, acku ur nezmer ara an sulu azar-is.
Selken ma sermedeḍ "cookies", sismeḍ asebter dɣa εreḍ tikkelt nniḍen.',
'noname' => 'Ur tefkiḍ ara isem n wemseqdac ṣaḥiḥ.',
'loginsuccesstitle' => 'Tkecmeḍ !',
'loginsuccess' => "'''Tkecmeḍ ar {{SITENAME}} s yisem n wemseqdac \"\$1\".'''",
'nosuchuser' => 'Aseqdac « $1 » ulac-it d-agi.
Ssenqed tira n yisem-nni, naɣ [[Special:UserLogin/signup|snulfu-d amiḍan amaynut]].',
'nosuchusershort' => 'Ulac isem n wemseqdac s yisem "$1". Ssenqed tira n yisem-nni.',
'nouserspecified' => 'Yessefk ad tefkeḍ isem n wemseqdac.',
'login-userblocked' => 'Aseqdac agi i sewḥel. Tuqqna t-ugwi.',
'wrongpassword' => 'Awal n tbaḍnit ɣaleṭ. Ɛreḍ daɣen.',
'wrongpasswordempty' => 'Awal n tbaḍnit ulac-it. Ɛreḍ daɣen.',
'passwordtooshort' => 'Awal-ik (im) n uɛaddi ilaq ad i sɛu adday {{PLURAL:$1|1 asekkil|$1 isekkilen}}.',
'password-name-match' => 'Ilaq awal n uɛaddi ad yili imeẓli s-isem n useqdac.',
'password-login-forbidden' => 'aseqdac agi d awal n uɛaddi agi d-izenbigen.',
'mailmypassword' => 'Awennez tikkelt nniḍen n awal uɛaddi',
'passwordremindertitle' => 'Asmekti n wawal n tbaḍnit seg {{SITENAME}}',
'passwordremindertext' => 'Amdan (waqila d kečč/kem, seg tansa IP $1) yesteqsa iwakken a nazen
Awal n uɛaddi amaynut i {{SITENAME}} ($4). Awal n uɛaddi i wemseqdac "$2" yuɣal-d tura "$3".
Mliḥ lukan tkecmeḍ u tbeddleḍ Awal n uɛaddi tura.
Tasewti n awal agi n uɛaddi amaynut ad yaweḍ deg {{PLURAL:$5|yiwen ass|$5 ussan}}

Lukan mačči d kečč i yesteqsan naɣ tecfiḍ ɣef awal n uɛaddi, tzemreḍ ad tkemmleḍ mebla ma tbeddleḍ awal n uɛaddi.',
'noemail' => '"$1" ur yesɛi ara email.',
'noemailcreate' => 'Ilaq ad efkeḍ tansa e-mail i sɛan aseɣbel.',
'passwordsent' => 'Awal n tbaḍnit amaynut yettwazen i emal inek, aylaw n "$1".
G leɛnaya-k, kcem tikelt nniḍen yis-s.',
'blocked-mailpassword' => 'Tansa n IP inek tɛekkel, ur tezmireḍ ara ad txedmeḍ abeddel,
ur tezmireḍ ara ad tesɛuḍ awal n tbaḍnit i tettuḍ.',
'eauthentsent' => 'Yiwen email yetweceggeε ar tansa id efkeḍ.
Uqbel ad n-ceggeε email nniḍen, ilaq ad ḍfereḍ ayen yellan deg email dɣa ad sergegeḍ amiḍan agi d win inek(m).',
'throttled-mailpassword' => 'Neceggɛed yakan tirawt n uwennez i awal-ik/im n uɛaddi deg {{PLURAL:$1|asrag agi aneggaru|$1 isragen agi ineggura}}. Awennez n uwal n uɛaddi yettwaceggaɛ tikelt kan deg {{PLURAL:$1|asrag|$1 isragen}}.',
'mailerror' => 'Agul asmi yettwazen e-mail: $1',
'acct_creation_throttle_hit' => 'Amdan i seqdacen tansa IP inek/inem yesnulfud {{PLURAL:$1|yiwen amiḍan|$1 imiḍanen}} deg 24 izragen agi ineggura, negweḍ ar talast n turagt deg azilal agi n wakud.',
'emailauthenticated' => 'Tansa e-mail inek/inem tesergeg ass n $2 af $3.',
'emailnotauthenticated' => 'Tansa email inek mazal ur tettuɛqel. Ur d netceggaɛ ara email i yal tiseɣnin agi.',
'noemailprefs' => 'Efk tansa e-mail iwakken ad leḥḥun iḍaɣaren-nni.',
'emailconfirmlink' => 'Sentem tansa e-mail inek',
'invalidemailaddress' => 'Tansa e-mail-agi ur telhi, ur tesɛi ara taseddast n lɛali. Ssekcem tansa e-mail s taseddast n lɛali neɣ ur tefkiḍ acemma.',
'cannotchangeemail' => 'Ur t-zemreḍ ara ad beddeleḍ tansa e-mail deg uwiki agi.',
'emaildisabled' => 'Asmel agi ur yezmer ara ad i cegaɛ e-mail.',
'accountcreated' => 'Isem n wemseqdac yettwaxleq',
'accountcreatedtext' => 'Amiḍan n umseqdac i [[{{ns:User}}:$1|$1]] ([[{{ns:User talk}}:$1|amyannan]]) yexelqed.',
'createaccount-title' => 'Asnulfu n umiḍan i {{SITENAME}}',
'createaccount-text' => 'Albeɛḍ yesnulfu-d amiḍan i tansa e-amil inek/inem ɣef {{SITENAME}} ($4) s-isem n-useqdac « $2 », s awal n uɛaddi « $3 ».
Ilaq tura ad lldiḍ taɣimit dɣa ad beddeleḍ awal ik/im n uɛaddi.',
'usernamehasherror' => 'Isem n useqdac ur yezmer ara ad i sɛu  isekkilen n ugeddeḥ',
'login-throttled' => 'Tɛerdeḍ ad qqeneḍ aṭas tiqwal deg dqiqat agi iɛddan.
Ilaq ad rǧuḍ $1 uqbel ad ɛerdeḍ tikkelt nniḍen.',
'login-abort-generic' => 'Taremt ik/im n tuqqna tebrir',
'loginlanguagelabel' => 'Tutlayt: $1',
'suspicious-userlogout' => 'Asuter n usenser yugwi acku yella ugur s iminig naɣ s tazarkatut n uqeddac proxy.',
'createacct-another-realname-tip' => '* Isem n ṣṣeḥ d-axeṭran.
Ma teɛzemeḍ a t-tefkeḍ, ad yettuseqdac iwakken ad snen medden anwa yuran tikkin inek.',

# Email sending
'php-mail-error-unknown' => 'anezri warisem deg tawuri mail() n PHP',
'user-mail-no-addy' => 'Ɛred ad icegaɛ e-mail war tansa e-mail',
'user-mail-no-body' => 'Arram n uceggaɛ email s tafekka tilemt neɣ d-awezlan aṭas.',

# Change password dialog
'changepassword' => 'Beddel awal n tbaḍnit',
'resetpass_announce' => 'Tkecmeḍ s ungal yettwazen-ak s e-mail (ungal-nni qrib yemmut). Iwekken tkemmleḍ, yessefk ad textareḍ awal n tbaḍnit amaynut dagi:',
'resetpass_text' => '<!-- Rnu aḍris dagi -->',
'resetpass_header' => 'Beddel awal n uɛassi n umiḍan',
'oldpassword' => 'Awal n tbaḍnit aqdim:',
'newpassword' => 'Awal n tbaḍnit amaynut:',
'retypenew' => 'Ɛiwed ssekcem n tbaḍnit amaynut:',
'resetpass_submit' => 'Eg awal n tbaḍnit u kcem',
'changepassword-success' => 'Awal n uɛaddi yettubeddel s lerbaḥ !',
'changepassword-throttled' => 'Tɛerdeḍ ad qqeneḍ aṭas tiqwal deg dqiqat agi iɛddan.
Ilaq ad rǧuḍ $1 uqbel ad ɛerdeḍ tikkelt nniḍen.',
'resetpass_forbidden' => 'Ur zemreḍ ara ad beddeleḍ awalen n uɛaddi',
'resetpass-no-info' => 'Ilaq ad qqeneḍ iwakken ad ẓṛeḍ asebter agi.',
'resetpass-submit-loggedin' => 'Beddel awal n uɛaddi',
'resetpass-submit-cancel' => 'Semmewet',
'resetpass-wrong-oldpass' => 'Awal n uɛaddi ur i seɣbel ara.
Ahat ilaq ad beddeleḍ awal ik/im n uɛaddi naɣ ad ssutereḍ awal n uɛaddi amaynut.',
'resetpass-temp-password' => 'Awal n uɛaddi amakud',
'resetpass-abort-generic' => 'Asiɣzef yesemmewet abeddel n uwal n uɛaddi.',

# Special:PasswordReset
'passwordreset' => 'Awennez tikkelt nniḍen n awal uɛaddi',
'passwordreset-text-one' => 'Ččur tiferkit agi iwakken ad wennezeḍ awal-ik/im n uɛaddi.',
'passwordreset-text-many' => '{{PLURAL:$1|Čcur yiwet n tiɣwezza iwakken ad rmeseḍ awal n uɛaddi uɛḍil deg tirawt.}}',
'passwordreset-legend' => 'Awennez tikkelt nniḍen n awal uɛaddi',
'passwordreset-disabled' => 'Awennez n awal uɛaddi yensa deg uwiki agi.',
'passwordreset-emaildisabled' => 'Tiseɣnin email nsant ɣef wiki agi.',
'passwordreset-username' => 'Isem n useqdac',
'passwordreset-domain' => 'Talɣut :',
'passwordreset-capture' => 'Ẓeṛ tirawt ?',
'passwordreset-capture-help' => 'Lukan ad tekkiḍ ɣef texxamt agi, tirawt (deg-es awal n uɛaddi akudan) att beqqeḍ dɣa ad tetwetceggaɛ i useqdac.',
'passwordreset-email' => 'Tansa e-mail :',
'passwordreset-emailtitle' => 'Tilɣa n umiḍan ɣef {{SITENAME}}',
'passwordreset-emailtext-ip' => 'Yiwen (Ahat kečč/kem, seg tansa IP $1) yessutered awennez n awal n uɛaddi i {{SITENAME}} ($4). {{PLURAL:$3|Amiḍan n useqdac agi yeqqen|imiḍanen n iseqdacen agi qqenen}} s tansa e-mail agi :

$2

{{PLURAL:$3|Awal n uɛaddi uɛḍil agi ad i aff tasewti-s|Awalen n uɛaddi uɛḍilen agi ad affen taseweti nsen}} deg {{PLURAL:$5|yiwen ass|$5 ussan}}. Ilaq tura ad qqeneḍ dɣa ad freneḍ awal n uɛaddi amaynut. Lukan mačči d kečč/kem i xedmen asuter agi, naɣ tecfiḍ tura i awal n uɛaddi inek/inem, tzemreḍ ad eǧǧeḍ izen agi.',
'passwordreset-emailtext-user' => 'Aseqdac $1 ɣef {{SITENAME}} yessutered awennez n awal n uɛaddi i {{SITENAME}} ($4). {{PLURAL:$3|Amiḍan n useqdac agi yeqqen|imiḍanen n iseqdacen agi qqenen}} s tansa e-mail agi :

$2

{{PLURAL:$3|Awal n uɛaddi uɛḍil agi ad i aff tasewti-s|Awalen n uɛaddi uɛḍilen agi ad affen taseweti nsen}} deg {{PLURAL:$5|yiwen ass|$5 ussan}}. Ilaq tura ad qqeneḍ dɣa ad freneḍ awal n uɛaddi amaynut. Lukan mačči d kečč/kem i xedmen asuter agi, naɣ tecfiḍ tura i awal n uɛaddi inek/inem, tzemreḍ ad eǧǧeḍ izen agi.',
'passwordreset-emailelement' => 'Isem n useqdac : $1
Awal n uɛddi akudan : $2',
'passwordreset-emailsent' => 'Tirawt n uwennez n awal n uɛaddi tetwaceggaɛ.',
'passwordreset-emailsent-capture' => 'Tirawt n uwennez n awal n uɛaddi tetwaceggaɛ, ẓeṛ-itt ddaw agi.',
'passwordreset-emailerror-capture' => 'Tirawt n uwennez n awal n uɛaddi t-arewed, ẓeṛ-itt ddaw agi, lamaɛna aceggaɛ i {{GENDER:$2|umseqdac}} yefkad anezri : $1',

# Special:ChangeEmail
'changeemail' => 'Beddel tansa n e-mail',
'changeemail-header' => 'Beddel tansa n e-mail n umiḍan',
'changeemail-text' => 'Ččur tiferkit agi iwakken ad beddeleḍ tansa e-mail inek/inem. Ilaq ad sekcemeḍ awal ik/im n uɛaddi iwakken ad sergegeḍ abeddel agi.',
'changeemail-no-info' => 'Ilaq ad qqeneḍ iwakken ad ẓṛeḍ asebter agi.',
'changeemail-oldemail' => 'Tansa e-mail n tura :',
'changeemail-newemail' => 'Tansa e-mail tamaynut :',
'changeemail-none' => '(ulac)',
'changeemail-password' => 'Awal-ik/im n uɛaddi ɣef {{SITENAME}} :',
'changeemail-submit' => 'Beddel tansa e-mail',
'changeemail-cancel' => 'Semmewet',
'changeemail-throttled' => 'Tɛerdeḍ ad qqeneḍ aṭas tiqwal.
Ilaq ad rǧuḍ $1 uqbel ad ɛerdeḍ tikkelt nniḍen.',

# Special:ResetTokens
'resettokens' => 'Wennez tiddas',
'resettokens-text' => 'D-agi tzemreḍ ad twennezeḍ tiddas i ɛemmeden ad kecmeḍ ar isefka usligen i qqenen ar amiḍan inek/inem.

Ilaq ad twennezeḍ tiddas ma tferqeḍ-ten s tuccḍa s umseqdac nniḍen neɣ ma amiḍan inek/inem yexṣer.',
'resettokens-no-tokens' => 'Ulac tiddas an wennez.',
'resettokens-legend' => 'Wennez tiddas',
'resettokens-tokens' => 'Tiddas :',
'resettokens-token-label' => '$1 (azal amiran : $2)',
'resettokens-watchlist-token' => 'Tiddest i usuddem (Atom/RSS) web n [[Special:Watchlist|ibeddilen n isebtar n umuɣ inek/inem n uḍfar]]',
'resettokens-done' => 'Tiddas i wennezen.',
'resettokens-resetbutton' => 'Wennez tiddas i fernen',

# Edit page toolbar
'bold_sample' => 'Aḍris aberbuz',
'bold_tip' => 'Aḍris aberbuz',
'italic_sample' => 'Aḍris aṭalyani',
'italic_tip' => 'Aḍris aṭalyani',
'link_sample' => 'Azwel n uzday',
'link_tip' => 'Azday zdaxel',
'extlink_sample' => 'http://www.example.com azwel n uzday',
'extlink_tip' => 'Azday aberrani (cfu belli yessefk at tebduḍ s http://)',
'headline_sample' => 'Aḍris n uzwel azellum',
'headline_tip' => 'Aswir 2 n uzwel azellum',
'nowiki_sample' => 'Sideff da tirra bla taseddast(formatting) n wiki',
'nowiki_tip' => 'Ttu taseddast n wiki',
'image_sample' => 'Amedya.jpg',
'image_tip' => 'Tugna yettussekcmen',
'media_sample' => 'Amedya.ogg',
'media_tip' => 'Azday n ufaylu media',
'sig_tip' => 'Azmul inek s uzemz',
'hr_tip' => 'Ajerriḍ aglawan (ur teččerɛiḍ ara)',

# Edit pages
'summary' => 'Agzul:',
'subject' => 'Asentel/Azwel azellum:',
'minoredit' => 'Wagi d abeddel afessas',
'watchthis' => 'Ɛass asebter-agi',
'savearticle' => 'Beddel asebter',
'preview' => 'Pre-Ẓer',
'showpreview' => 'Ssken pre-timeẓriwt',
'showlivepreview' => 'Pre-timeẓriwt taǧiḥbuṭ',
'showdiff' => 'Ssken ibeddlen',
'anoneditwarning' => "'''Aɣtal:''' Ur tkecmiḍ ara. Tansa IP inek ad tettusmekti deg umezruy n usebter-agi.",
'anonpreviewwarning' => "''Ur tesuluḍ ara. Aḥraz ad yekles tansa IP inek/inem deg umezruy n ibeddilen n usebter.''",
'missingsummary' => "'''Ur tettuḍ ara:''' Ur tefkiḍ ara azwel i ubeddel inek. Lukan twekkiḍ ''Smekti'' tikelt nniḍen, abeddel inek ad yettusmekti mebla azwel.",
'missingcommenttext' => 'Ssekcem awennit deg ukessar.',
'missingcommentheader' => "'''Ur tettuḍ ara:''' Ur tefkiḍ ara azwel-azellum i ubeddel inek. Lukan twekkiḍ ''Smekti'' tikelt nniḍen, abeddel inek ad yettusmekti mebla azwel-azellum.",
'summary-preview' => 'Pre-timeẓriwt n ugzul:',
'subject-preview' => 'Pre-timeẓriwt asentel/azwel azellum:',
'blockedtitle' => 'Amseqdac iɛekkel',
'blockedtext' => "'''Amiḍan ik n useqdac neɣ tansa n IP sewḥlen.'''

Asewḥel yetwexdem af $1
Taɣẓint id yenna : ''$2''.

* Tazzwara n usewḥel : $8
* Taggara n usewḥel : $6
* Amiḍan i sewḥlen : $7.


Tzemreḍ ad tmeslayeḍ s $1 neɣ [[{{MediaWiki:Grouppage-sysop}}|anedbal]] nniḍen iwakken ad tsmelayem ɣef uɛekkil-nni.
Lukan ur tefkiḍ ara email saḥih deg [[Special:Preferences|isemyifiyen n wemseqdac]], ur tezmireḍ ara ad tazneḍ email.
Tansa n IP inek n tura d $3, ID n uɛekkil d #$5.
Smekti-ten u fka-ten i unedbal-nni.",
'autoblockedtext' => "Tansa IP inek/inem tesewḥel s-uwurman acku d-aseqdac nniḍen i ttisexdmen. Ladɣa ula d-aseqdac agi, isewḥel-it $1.

Taɣẓint id yenna : ''$2''.

* Tazzwara n usewḥel : $8
* Taggara n usewḥel : $6
* Amiḍan i sewḥlen : $7.


Tzemreḍ ad tmeslayeḍ s $1 neɣ [[{{MediaWiki:Grouppage-sysop}}|anedbal]] nniḍen iwakken ad tsmelayem ɣef uɛekkil-nni.
Lukan ur tefkiḍ ara email saḥih deg [[Special:Preferences|isemyifiyen n wemseqdac]], ur tezmireḍ ara ad tazneḍ email.
Tansa n IP inek n tura d $3, ID n uɛekkil d #$5.
Smekti-ten u fka-ten i unedbal-nni.",
'blockednoreason' => 'Ulac taɣẓint',
'whitelistedittext' => 'Yessefk ad $1 iwakken ad tbeddleḍ isebtar.',
'confirmedittext' => 'Yessefk ad tsentmeḍ tansa e-mail inek uqbel abeddel. Xtar tansa e-mail di [[Special:Preferences|isemyifiyen n wemseqdac]].',
'nosuchsectiontitle' => 'Ulamek an af tigezmi',
'nosuchsectiontext' => 'Tɛerḍeḍ ad tbeddleḍ tigezmi ur llan ara.',
'loginreqtitle' => 'Yessefk ad tkecmeḍ',
'loginreqlink' => 'Kcem',
'loginreqpagetext' => 'Yessefk $1 iwakken ad teẓriḍ isebtar wiyaḍ.',
'accmailtitle' => 'Awal n tbaḍnit yettwazen.',
'accmailtext' => 'Awal n uɛaddi id yuran s ugacur i [[User talk:$1|$1]] yetweceggaɛ i $2.
Yezmer ad yetbeddel ɣef usebtar [[Special:ChangePassword|Abeddel n awal uɛddi]] sakin tuqqna.',
'newarticle' => '(Amaynut)',
'newarticletext' => 'Tḍefreḍ azday ɣer usebter mazal ur yettwaxleq ara.
Akken ad txelqeḍ asebter-nni, aru deg tenkult i tella deg ukessar
(ẓer [[{{MediaWiki:Helppage}}|asebter n tallat]] akken ad tessneḍ kter).
Ma tɣelṭeḍ, wekki kan ɣef tqeffalt "Back/Précédent" n browser/explorateur inek.',
'anontalkpagetext' => "---- ''Wagi d asebter n umyennan n useqdac adrig, mazal ur d-yesnufa ara amiḍan. I taɣẓint agi, ilaq an seqdec tansa IP ines iwakken at-id n sulu. Yiwet tansa IP tezmer at tettuseqdac sɣur aṭṭas n iseqdacen. Lukan ula d kečč aqla-k amseqdac adrig dɣa ur tebɣiḍ ara ad tettwabcreḍ izen am wigini, ihi [[Special:UserLogin/signup|snulfud amiḍan]] naɣ [[Special:UserLogin|qqened]] iwakken sya d asawen ur t-illint ara uguren n usulu.''",
'noarticletext' => 'Ulac aḍris deg usebter-agi, tzemreḍ ad [[Special:Search/{{PAGENAME}}|tnadiḍ ɣef wezwel n usebter-agi]] deg isebtar wiyaḍ neɣ [{{fullurl:{{FULLPAGENAME}}|action=edit}} tettbeddileḍ asebter-agi].',
'noarticletext-nopermission' => 'Imira ulac aḍris deg usebter agi.
Tzemreḍ [[Special:Search/{{PAGENAME}}|ad nadiḍ ɣef azwel agi]] deg isebtaren nniḍen,
naɣ <span class="plainlinks">[{{fullurl:{{#Special:Log}}|asebter={{FULLPAGENAMEE}}}} ad nadiḍ deg iɣmisen iqqenen]</span>.',
'missing-revision' => 'Tacaggart #$1 n usebter s isem « {{PAGENAME}} » ulac-itt.

Acku azday n umezruy, ɣef wayen tsennedeḍ, d-aqbur. Asebter yemḥa.
Tzemreḍ ad affeḍ tilɣa deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n isebtar yemḥan].',
'userpage-userdoesnotexist' => 'Amiḍan n useqdac « <nowiki>$1</nowiki> » ur yekles ara. Ilaq ad selkeneḍ ma tebɣiḍ ad snulfuḍ asebter agi.',
'userpage-userdoesnotexist-view' => 'Amiḍan n useqdac « $1 » ur yekles ara.',
'blocked-notice-logextract' => 'Aseqdac agi yekyef.
Asekcem aneggaru n useklas n ikyafen yella ddaw agi :',
'clearyourcache' => "'''Tamawt:''' Beɛd asmekti, ahat yessefk ad temḥuḍ lkac n browser/explorateur inek akken teẓriḍ ibeddlen. '''Mozilla / Firefox / Safari:''' qqim twekkiḍ ''Shift'' u wekki ɣef ''Reload/Recharger'', neɣ wekki ɣef ''Ctrl-Shift-R'' (''Cmd-Shift-R'' deg Apple Mac); '''IE:''' qqim twekkiḍ ɣef ''Ctrl'' u wekki ɣef ''Refresh/Actualiser'', neɣ wekki ɣef ''Ctrl-F5''; '''Konqueror:''': wekki kan ɣef taqeffalt ''Reload'', neɣ wekki ɣef ''F5''; '''Opera''' yessefk ad tesseqdceḍ ''Tools→Preferences/Outils→Préférences'' akken ad temḥud akk lkac.",
'usercssyoucanpreview' => "'''taxbalut :''' Sseqdec taqeffalt « {{int:showpreview}} » iwakken ad tɛerḍeḍ asebter CSS inek/inem amaynut  uqbel ad aklasteḍ.",
'userjsyoucanpreview' => "'''taxbalut :''' Sseqdec taqeffalt « {{int:showpreview}} » iwakken ad tɛerḍeḍ asebter JavaScript inek/inem amaynut  uqbel ad aklasteḍ.",
'usercsspreview' => "'''Cfu-d, wagi d-azaraskan n usebter ik/im n CSS.'''
'''Mmazal ur yettusmekti ara!'''",
'userjspreview' => "'''Smekti belli aql-ak tɛerḍeḍ JavaScript inek kan, mazal ur yettusmekti ara!'''",
'sitecsspreview' => "'''Smekti belli aql-ak tɛerḍeḍ asebter CSS agi inek kan.'''
'''Mazal ur yettusmekti ara!'''",
'sitejspreview' => "'''Smekti belli aql-ak tɛerḍeḍ angal agi JavaScript inek kan.'''
'''Mazal ur yettusmekti ara!'''",
'userinvalidcssjstitle' => '\'\'\'Aɣtal:\'\'\' Aglim "$1" ulac-it. Ur tettuḍ ara belli isebtar ".css" d ".js" i txedmeḍ sseqdacen azwel i yesɛan isekkilen imecṭuḥen, s umedya: {{ns:user}}:Foo/vector.css akk d {{ns:user}}:Foo/Vector.css.',
'updated' => '(Yettubeddel)',
'note' => "'''Tamawt:'''",
'previewnote' => "'''Ttagi d azar-timeẓriwt kan, ibeddlen mazal ur ttusmektin ara!'''

'''Cfut, ttagi d azar-timeẓriwt kan.'''
Ibeddlen mazal ur ttusmektin ara!",
'continue-editing' => 'Ṛuḥ ar taɣzut n ubeddel',
'previewconflict' => 'Pre-timeẓriwt-agi tesskan aḍris i yellan deg usawen lemmer tebɣiḍ a tt-tesmektiḍ.',
'session_fail_preview' => "'''Suref-aɣ! ur nezmir ara a nesmekti abeddil inek axaṭer yella ugur.
G leɛnayek ɛreḍ tikelt nniḍen. Lukan mazal yella ugur, ffeɣ umbeɛd kcem.'''",
'session_fail_preview_html' => "'''Ur nezmer ara an aklas ibeddilen inek/inem acku yella asṛuḥu n tilɣa deg taɣimit inek/inem.'''

''Acku {{SITENAME}} i sermed azar n HTML, azaraskan yeseggelmes iwakken ur t-illint ara tinṭagin s Javascript.''

''' Lukan abeddel agi d-aḥeqqani, ɛered tikkelt nniḍen.'''
Lukan yella ugur, [[Special:UserLogout|Senser]] dɣa qqen.",
'token_suffix_mismatch' => "'''Abeddel inek/inem ur yeɣbel ara acku iminig inek/inem ur yesettengel ara s umellil isekkilen n uqqa deg asulay n ubeddel.'''
Tiririt agi telaq i usḍiqqef n usgufsu n uḍris deg usebter.
Ugur agi, yetilli tikwal mi seqdeceḍ aqeddac Proxy warisem yellan ɣef Web.",
'edit_form_incomplete' => "'''Kra n iḥricen n tiferkit n ubeddel ur gweḍen ara ar uqeddac, ilaq ad selkeneḍ ma ibeddilen ur erẓen ara dɣa ɛreḍ tikkelt nniḍen.'''",
'editing' => 'Abeddel n $1',
'creating' => 'Asnulfu n $1',
'editingsection' => 'Abeddel n $1 (amur)',
'editingcomment' => 'Abeddel n $1 (tigezmi tamaynut)',
'editconflict' => 'Amennuɣ deg ubeddel: $1',
'explainconflict' => "Amdan nniḍen ibeddel asebter-agi asmi telliḍ tettbeddileḍ.
Aḍris deg usawen yesɛa asebter am yella tura.
Ibeddlen inek ahaten deg ukessar.
Yesfek ad txelṭeḍ ibeddlen inek akk d usebter i yellan.
'''Ala''' aḍris deg usawen i yettusmekta asmi twekkiḍ \"{{int:savearticle}}\".",
'yourtext' => 'Aḍris inek',
'storedversion' => 'Tasiwelt yettusmketen',
'nonunicodebrowser' => "'''AƔTAL: Browser/Explorateur inek ur yebil ara unicode. Nexdem akken ad tzemreḍ ad tbeddleḍ mebla amihi: isekkilin i mačči ASCII ttbanen deg tankult ubeddel s ungilen hexadecimal.'''",
'editingold' => "'''AƔTAL: Aqlak tettbeddileḍ tasiwelt taqdimt n usebter-agi.
Ma ara t-tesmektiḍ, akk ibeddlen i yexdmen seg tasiwelt-agi ruḥen.'''",
'yourdiff' => 'Imgerraden',
'copyrightwarning' => "Ssen belli akk tikkin deg {{SITENAME}} hatent ttwaznen seddaw $2 (Ẓer $1 akken ad tessneḍ kter). Lukan ur tebɣiḍ ara aru inek yettubeddel neɣ yettwazen u yettwaru deg imkanen nniḍen, ihi ur t-tazneḍ ara dagi.<br />
Aqlak teggaleḍ belli tureḍ wagi d kečč, neɣ teddmiḍ-t seg taɣult azayez neɣ iɣbula tilelliyin.
'''UR TEFKIḌ ARA AXDAM S COPYRIGHT MEBLA TURAGT!'''",
'copyrightwarning2' => "Ssen belli akk tikkin deg {{SITENAME}} zemren ad ttubeddlen neɣ ttumḥan sɣur imdanen wiyaḍ. Lukan ur tebɣiḍ ara aru inek yettubeddel neɣ yettwazen u yettwaru deg imkanen nniḍen, ihi ur t-tazneḍ ara dagi.<br />
Aqlak teggaleḍ belli tureḍ wagi d kečč, neɣ teddmiḍ-t seg taɣult azayez neɣ iɣbula tilelliyin (ẓer $1 akken ad tessneḍ kter).
'''UR TEFKIḌ ARA AXDAM S COPYRIGHT MEBLA TURAGT!'''",
'longpageerror' => "'''Anezri : Aḍris i sekcemeḍ yeɛbeṛ {{PLURAL:$1|yiwen kilobyte|$1 kilobytes}}, tiddi-yagi kter n talast yellan af {{PLURAL:$2|yiwen kilobyte|$1 kilobytes}}.'''
Ur yezmer ara ad yetwaḥrez.",
'readonlywarning' => "'''ƔUR-WET : taffa n isefka t-sekkweṛ i timhelin n ibeddi. Ur tzemreḍ ara ad ḥrezeḍ  ibeddilen tura.'''
Tzemreḍ ad nɣeleḍ aḍris ik/im deg ufaylu iwakken ad tesqedceḍ sakin.

Anedbal i sekkweṛen taffa n isefka agi, yefka-d taɣẓint agi : $1",
'protectedpagewarning' => "'''ƔUR-WET : Asebter-agi yettwaḥrez, inedbalen kan i zemren a t-beddlen.'''
Asekcem aneggaru n uɣmis yella ddaw-agi :",
'semiprotectedpagewarning' => "'''Tamawt :''' Asebter-agi yettwaḥrez, iseqdacen yesɛan amiḍan kan i zemren a t-beddlen.
Asekcem aneggaru n uɣmis yella ddaw-agi :",
'cascadeprotectedwarning' => "'''ƔUR-WET :''' Asebter-agi yettwaḥrez, inedbalen kan i zemren a t-beddlen. Yettwaḥrez acku yettwassekcem  deg {{PLURAL:$1|asebter i ḥerzen agi yesɛan|isebtar i ḥerzen agi yesɛan}} « amesten s uceṛcuṛ » i sermeden :",
'titleprotectedwarning' => "'''ƔUR-WET : Asebter agi yemesten, dɣa ilaq ad sɛuḍ [[Special:ListGroupRights|izerfan usligen]] iwakken at id snulfuḍ.''' Asekcem aneggaru n uɣmis yebeqqeḍ ddaw agi :",
'templatesused' => '{{PLURAL:$1|Talɣa i seqdacen|Tilɣatin i seqdacen}} deg usebter agi :',
'templatesusedpreview' => '{{PLURAL:$1|Talɣa i seqdacen|Tilɣatin i seqdacen}} deg azaraskan agi :',
'templatesusedsection' => '{{PLURAL:$1|Talɣa i seqdacen|Tilɣatin i seqdacen}} deg tigezmi agi :',
'template-protected' => '(yettwaḥrez)',
'template-semiprotected' => '(nnefṣ-yettwaḥrez)',
'hiddencategories' => 'Asebter agi yella deg {{PLURAL:$1|Taggayt i ffren|Tiggayin i ffren}} agi :',
'edittools' => '<!-- Aḍris yettbanen-d seddaw talɣa n ubeddil d uzen. -->',
'nocreatetext' => '{{SITENAME}} yekref iẓubaẓ n usnulfu n isebtar imaynuten.
Tzemreḍ ad uɣaleḍ ar deffir dɣa ad beddeleḍ asebter yellan yakan, naɣ [[Special:UserLogin|ad qqeneḍ naɣ ad snulfuḍ amiḍan]].',
'nocreate-loggedin' => 'Ur tesɛiḍ ara turagt i usnulfu n isebtar imaynuten.',
'sectioneditnotsupported-title' => 'Abeddel n tigezmi agi ur yezmer ara',
'sectioneditnotsupported-text' => 'Abeddel n tigezmi ur yezmer ara deg usebtar agi n ubeddel.',
'permissionserrors' => 'Agul n turagt',
'permissionserrorstext' => 'Ur tesɛiḍ ara turagt iwakken ad xedmeḍ wayagi i {{PLURAL:$1|taɣẓint|tiɣẓinin}} agi :',
'permissionserrorstext-withaction' => 'Ur sɛiḍ ara ttesriḥ af $2, i {{PLURAL:$1|taɣẓint|tiɣẓinin}} agi :',
'recreate-moveddeleted-warn' => "'''Ɣur-wet : asebter agi i tebɣam ad snulfum, yetwekkes uqbel.'''

Ilaq ad snulfum asebter agi haca ma i xater. Aɣmis n isebtaren i twekkesen yella ddaw-agi :",
'moveddeleted-notice' => 'Asebter agi yetwekkes. Aɣmis n isebtaren i twekkesen yella ddaw agi.',
'log-fulllog' => 'Ẓeṛ aɣmis ummid',
'edit-hook-aborted' => 'Abrir n ubeddel s usiɣzef.
Tamentilt warisem',
'edit-gone-missing' => 'Ur yezmer ara ad yemucceḍ asebter agi.
Ahat yetwemḥa.',
'edit-conflict' => 'Amgirred n ubeddel.',
'edit-no-change' => 'Abeddel inek/inem ur yetwexdam ara acku ur di ban ara abeddel deg uḍris.',
'postedit-confirmation' => 'Abeddel inek/inem yetwakles.',
'edit-already-exists' => 'Asebter amaynut ur d yesnufu ara.
Yella yakan.',
'defaultmessagetext' => 'Izen s lexṣas',
'content-failed-to-parse' => 'Tasleṭ n ugbur n $2 i talɣa $1 texseṛ : $3',
'invalid-content-data' => 'Isefka n ugbur ur ɣbelen ara',
'content-not-allowed-here' => 'Agbur "$1" ur yesɛa ara turagt ɣef usebter [[$2]]',
'editwarning-warning' => 'Ma ad teffeɣeḍ deg usebtar agi, akkw ibeddilen id xeddemeḍ ad sṛuḥen.

Ma teqqeneḍ, tzemreḍ ad senseḍ alɣu agi deg tigezmi « Abeddel » n ismenyifen inek/inem.',
'editpage-notsupportedcontentformat-title' => 'Amasal n ugbur ur d-yetwarfed ara',
'editpage-notsupportedcontentformat-text' => 'Amasal n ugbur $1 ur d-yetwarfed ara sɣur talɣa n ugbur $2.',

# Content models
'content-model-wikitext' => 'wikiaḍris',
'content-model-text' => 'aḍris afraray',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => "'''Ɣur-wet :''' Asebter agi yesɛa aṭas n tiɣriwin ar tiseɣnin ɣlayen n umsisleḍ taseddast.
Ilaq ad i sɛu ddaw n  $2 {{PLURAL:$2|tiɣri|tiɣriwin }}, wannag tura {{PLURAL:$1|tella $1 tiɣri|llant $1 tiɣriwin}}.",
'expensive-parserfunction-category' => 'Isebtar yesɛan aṭas tiɣriwin ɣlayen n tiseeɣnin n umsisleḍ taseddast',
'post-expand-template-inclusion-warning' => 'Ɣur-wet : Asebter agi yesɛa aṭas tilɣatin. Kra n tilɣatin ur zemrent ara ad seqdacent.',
'post-expand-template-inclusion-category' => 'Isebtaren i sɛan aṭas tilɣatin',
'post-expand-template-argument-warning' => "'''Ɣur-wet''' : Asebter agi yesɛa tuccḍa deg aɣewwar n yiwet talɣa.",
'post-expand-template-argument-category' => 'Isebtaren i sɛan iɣewwaren n talɣa ur skazelen ara',
'parser-template-loop-warning' => 'N-ufad talɣa s tineddict : [[$1]]',
'parser-template-recursion-depth-warning' => 'Talast n lqay n tiɣriwin n tilɣatin tefel ($1)',
'language-converter-depth-warning' => 'Talast n lqay n uselkat n tutlayt tefel ($1)',
'node-count-exceeded-category' => 'Isebtar anda amḍa n tikerwas yefel',
'node-count-exceeded-warning' => 'Asebter yefelen amḍan n tikerwas',
'expansion-depth-exceeded-category' => 'Isebtar anda lqay n uderrec yefel',
'expansion-depth-exceeded-warning' => 'Isebtar yefelen lqay n uderrec',
'parser-unstrip-loop-warning' => 'Tifin n tineddict ur nezmer ara an sentuter',
'parser-unstrip-recursion-limit' => 'Talast n usniles ur nezmer ara an sentuter tefel ($1)',
'converter-manual-rule-error' => 'Tifin n unezri deg alugen awfus n uselket n tutlayt',

# "Undo" feature
'undo-success' => 'Tzemreḍ ad tessefsuḍ abeddil. Ssenqed asidmer akken ad tessneḍ ayen tebɣiḍ ad txdmeḍ d ṣṣeḥ, umbeɛd smekti ibeddlen u tkemmleḍ ad tessefsuḍ abeddil.',
'undo-failure' => 'Ur yezmir ara ad issefu abeddel axaṭer yella amennuɣ abusari deg ubeddel.',
'undo-norev' => 'Abeddel ur yezmer ara ad yetwekkes acku ulac-itt naɣ tetwekkes yakan',
'undo-summary' => 'Ssefsu tasiwelt $1 sɣur [[Special:Contributions/$2|$2]] ([[User talk:$2|Meslay]])',
'undo-summary-username-hidden' => 'Semmewet tacaggart $1 sɣur amseqdac yeffren',

# Account creation failure
'cantcreateaccounttitle' => 'Ur yezmir ara ad yexleq isem n wemseqdac',
'cantcreateaccount-text' => "Asnulfu n umiḍan seg tansa IP (<b>$1</b>) tekyef sɣur [[User:$3|$3]].

Taɣẓint n $3 : ''$2''",
'cantcreateaccount-range-text' => "Asnulfu n umiḍan seg tansiwin IP deg tagrumma '''$1''', i sseddan tansa inek/inem IP ('''$4'''), twawḥelen sɣur [[User:$3|$3]].

Taɣẓint i-d yefka/tefka $3 : ''$2''",

# History pages
'viewpagelogs' => 'Ẓer aɣmis n usebter-agi',
'nohistory' => 'Ulac amezruy n yibeddlen i usebter-agi.',
'currentrev' => 'Tasiwelt n tura',
'currentrev-asof' => 'Azmez n lqem taneggarut d  $1',
'revisionasof' => 'Tasiwelt n wass $1',
'revision-info' => 'Tasiwelt n wass $1 sɣur $2',
'previousrevision' => '←Tasiwelt taqdimt',
'nextrevision' => 'Tasiwelt tamaynut→',
'currentrevisionlink' => 'Tasiwelt n tura',
'cur' => 'tura',
'next' => 'ameḍfir',
'last' => 'amgirred',
'page_first' => 'amezwaru',
'page_last' => 'aneggaru',
'histlegend' => 'Axtiri n umgerrad: rcem tankulin akken ad teẓreḍ imgerraden ger tisiwal u wekki ɣef enter/entrée neɣ ɣef taqeffalt deg ukessar.<br />
Tabadut: (tura) = amgirred akk d tasiwelt n tura,
(amgirred) = amgirred akk d tasiwelt ssabeq, M = abeddel afessas.',
'history-fieldset-title' => 'Inig deg umazray',
'history-show-deleted' => 'Ekkes kan',
'histfirst' => 'tiqdimin',
'histlast' => 'timaynutin',
'historysize' => '({{PLURAL:$1|1 atamḍan|$1 itamḍanen}})',
'historyempty' => '(amecluc)',

# Revision feed
'history-feed-title' => 'Amezruy n tsiwelt',
'history-feed-description' => 'Amezruy n tsiwelt n usebter-agi deg wiki',
'history-feed-item-nocomment' => '$1 deg $2',
'history-feed-empty' => 'Asebter i tebɣiḍ ulac-it.
Ahat yettumḥa neɣ yettbeddel isem-is.
Ɛreḍ [[Special:Search|ad tnadiḍ deg wiki]] ɣef isebtar imaynuten.',

# Revision deletion
'rev-deleted-comment' => '(agzul n taẓrigt yettwakes)',
'rev-deleted-user' => '(isem n wemseqdac yettwakes)',
'rev-deleted-event' => '(asekcem yettwakkes)',
'rev-deleted-user-contribs' => '[isem n useqdac naɣ tansa IP yetwemḥa - abeddel yeffer deg tiwsitin]',
'rev-deleted-text-permission' => "Lqem n usebter agi '''tetwesfeḍ'''.
Tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n usfeḍ].",
'rev-deleted-text-unhide' => "Lqem n usebter agi '''tetwesfeḍ'''.
Tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n usfeḍ].
Tzemreḍ meqqar [$1 ad ẓṛeḍ lqem agi]  ma tebɣiḍ",
'rev-suppressed-text-unhide' => "Lqem n usebter agi '''tetwekkes'''.
Tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n umḥu].
Tzemreḍ meqqar [$1 ad ẓṛeḍ lqem agi]  ma tebɣiḍ",
'rev-deleted-text-view' => "Lqem n usebter agi '''tetwesfeḍ'''.
Tzemreḍ att ẓṛeḍ ; tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n usfeḍ].",
'rev-suppressed-text-view' => "Lqem n usebter agi '''tetwekkes'''.
Tzemreḍ att ẓṛeḍ ; tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n umḥu].",
'rev-deleted-no-diff' => "Ur tzemreḍ ara ad ẓṛeḍ \"diff\" agi acku yiwet n lqem-is '''tetwesfeḍ'''.
Tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n usfeḍ].",
'rev-suppressed-no-diff' => "Ur tzemreḍ ara ad ẓṛeḍ \"diff\" agi acku yiwet n lqem-is '''tetwekkes'''.",
'rev-deleted-unhide-diff' => "Yiwen lqem n tameẓla agi '''yetwesfeḍ'''.
Tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n usfeḍ].
Tzemreḍ meqqar [$1 ad ẓṛeḍ tameẓla agi] ma tebɣiḍ",
'rev-suppressed-unhide-diff' => "Yiwen lqem n tameẓla agi '''yetwekkes'''.
Tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n umḥu].
Tzemreḍ meqqar [$1 ad ẓṛeḍ tameẓla agi] ma tebɣiḍ",
'rev-deleted-diff-view' => "Yiwen lqem n \"diff\" agi '''yetwekkes'''.
Tzemreḍ att ẓṛeḍ ; tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n umḥu].",
'rev-suppressed-diff-view' => "Yiwen lqem n \"diff\" agi '''yetwesfeḍ'''.
Tzemreḍ att ẓṛeḍ ; tilɣa llant deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n usfeḍ].",
'rev-delundel' => 'ssken/ffer',
'rev-showdeleted' => 'Ssken',
'revisiondelete' => 'Mḥu/kkes amḥay tisiwal',
'revdelete-nooldid-title' => 'Lqem asaḍas ur i ɣbel ara',
'revdelete-nooldid-text' => 'Ur textareḍ ara lqem nnican akken ad txedmeḍ tawuri fell-as.',
'revdelete-no-file' => 'Afaylu id ssefruḍ ur yella ara.',
'revdelete-show-file-confirm' => 'Tebɣriḍ ad mḥuḍ tacaggart n ufaylu « <nowiki>$1</nowiki> » n $2 af $3 ?',
'revdelete-show-file-submit' => 'Ih',
'revdelete-selected' => "'''{{PLURAL:$2|Tasiwelt tettwafren|Tisiwal ttwafernen}} n [[:$1]]'''",
'logdelete-selected' => "'''{{PLURAL:$1|Tamirt n uɣmis tettwafren|Isallen n uɣmis ttwafernen}}:'''",
'revdelete-text' => 'Ileqman d tidyanin yettumḥan ad qqimen deg umezruy n usebter dɣa deg iɣmisen, maca agbur nsen ur i sɛu ara tuffart i uzayez."
Inedbalen wiyaḍ deg {{SITENAME}} zemren ad ẓṛen imuren i yettwafren u zemren a ten-mḥan, ḥaca ma llan icekkilen.',
'revdelete-confirm' => 'Sergeg ma tebɣiḍ ad xedmeḍ tigawt agi, fehmeḍ inalkamen, dɣa temtawiḍ s [[{{MediaWiki:Policy-url}}|ilugan]].',
'revdelete-suppress-text' => "Ilaq tukksa att illi \"kan\" deg tijṛa agi :
* Tilɣa ahat tinergamin
* Tilɣa ur sɛant ara amkan d-agi
*: ''tansa, uḍḍun n tilifun, uḍḍun n taɣellist tamettit, …''",
'revdelete-legend' => 'Sbebd akref n tamuɣli',
'revdelete-hide-text' => 'Aḍris n tacaggart',
'revdelete-hide-image' => 'Ffer ayen yellan deg ufaylu',
'revdelete-hide-name' => 'Ffer tigawt d nnican',
'revdelete-hide-comment' => 'Beddel agzul',
'revdelete-hide-user' => 'Isem n umseqdac/Tansa IP n umaẓrag',
'revdelete-hide-restricted' => 'Mḥu isefka agi i inedbalen d yimdanen wiyaḍ',
'revdelete-radio-same' => '(ur beddel ara)',
'revdelete-radio-set' => 'Udrig',
'revdelete-radio-unset' => 'Yeban',
'revdelete-suppress' => 'Kkes talɣut seg inedbalen d yimdanen wiyaḍ',
'revdelete-unsuppress' => 'Kkes icekkilen ɣef tisiwal i yuɣalen-d',
'revdelete-log' => 'Ayɣer',
'revdelete-submit' => 'Snes {{PLURAL:$1|i tacaggart i tettwafren|i ticggarin i tettwafren}}',
'revdelete-success' => "''Asekkud n ileqman yemucce war uguren.'''",
'revdelete-failure' => "'''Iẓṛi n lqem ur yemucceḍ ara :'''
$1",
'logdelete-success' => "'''Asekkud n tamirt yettuxdem.'''",
'logdelete-failure' => "'''Iẓṛi n uɣmis ur yezmer ara ad yesbadu :'''
$1",
'revdel-restore' => 'beddel timezrit',
'pagehist' => 'Amezruy n usebter',
'deletedhist' => 'Amezruy yemḥa',
'revdelete-hide-current' => 'Yella anezri imi nemḥa aferdis yezemzen ass n $1 af $2 : d lqem aneggaru.
Ur yezmer ara ad yemḥu.',
'revdelete-show-no-access' => 'Yella anezri imi n beqqeḍ aferdis yezemzen ass n $1 af $2 : yecreḍ am "ukrif".
Ur tesɛiḍ ara izerfan n wadduf.',
'revdelete-modify-no-access' => 'Yella anezri imi nebeddel aferdis yezemzen ass n $1 af $2 : yecreḍ am "ukrif".
Ur tesɛiḍ ara izerfan n wadduf.',
'revdelete-modify-missing' => 'Yella anezri imi nebeddel aferdis yesɛan ID $1 : Ulac-it deg taffa n isefka !',
'revdelete-no-change' => "'''Ɣur-wet :''' Aferdis yezemzen ass n $1 af $2 yesɛa yakan iɣewwaren n iẓṛi i tebɣiḍ.",
'revdelete-concurrent-change' => 'Yella anezri imi nebeddel aferdis yezemzen ass n $1 af $2 : aẓayeris yetwebeddel sɣur amḍan nniḍen mi tbeddeleḍ
Ẓeṛ iɣmisen.',
'revdelete-only-restricted' => 'Yella anezri imi nemḥa asekcem yezemzen ass n $1 af $2 : ur tzemreḍ ara ad mḥuḍ iferdisen agi i inedbalen war ad fruḍ tixtiṛiyin nniḍen n umḥu.',
'revdelete-reason-dropdown' => 'Tiɣẓinin timiranin n umḥu :
** Akukel n izerfan umeskar (copyright) ;
** Iwenniten naɣ tilɣa n yiwen ur yezgan ara ;
** Tilɣa i zemren ad rgemen.',
'revdelete-otherreason' => 'Taɣẓint nniḍen / taɣzint tamarnant :',
'revdelete-reasonotherlist' => 'Taɣẓint nniḍen',
'revdelete-edit-reasonlist' => 'Beddel tiɣẓinin n umḥu i-d-yettuɣalen',
'revdelete-offender' => 'Ameskar n tacaggart :',

# Suppression log
'suppressionlog' => 'Aɣmis n isfaḍen',
'suppressionlogtext' => 'Ddaw-agi, umuɣ n tukksiwin d ikyafen yellan ɣef ugbur yeffren i inedbalen.
Ẓeṛ [[Special:BlockList|umuɣ ikyafen]] i umuɣ n tiririyin d ikyafen yellan d imahlanen.',

# History merging
'mergehistory' => 'Zdi amezruy n isebtar',
'mergehistory-header' => 'Asebtar agi aken yeǧǧ ad tesduklem ileqman n umezruy n usebtar unṣib γer usebtar amaynut.
Senked d akken tamhelt agi ad eǧǧ amezruy n usebtar ad ikemmel.',
'mergehistory-box' => 'Zdi lqem n sin isebtar',
'mergehistory-from' => 'Azar n usebter :',
'mergehistory-into' => 'Aserken n usebter :',
'mergehistory-list' => 'Amezruy n ibeddilen i nezmer an zdi',
'mergehistory-merge' => 'Ileqman id iteddun n [[:$1]] zemren ad twasduklen d [[:$2]]. Seqdec tigejdit n tqeffalt ṛadyu iwakken ad tesdukleḍ ala ileqman yettwasnulfan seg tazwara armi d azmez yettwamlan. Ẓeṛ d akken aseqdec n iseγwan n tunigin ad iwennez tigejdit agi.',
'mergehistory-go' => 'Ẓeṛ ibeddilen i nezmer an zdi',
'mergehistory-submit' => 'Azday n ileqman',
'mergehistory-empty' => 'Ulac lqem i nezmer an zdi.',
'mergehistory-success' => '$3 {{PLURAL:$3|lqem|ileqman}} n [[:$1]] {{PLURAL:$3|yezdukel|zdukelen}} deg [[:$2]].',
'mergehistory-fail' => 'Ulamek an zdukel imezruyen. Fru tikkelt nniḍen asebter d iɣewwaren is n uzmez.',
'mergehistory-no-source' => 'Azar n usebter $1 ulac-it.',
'mergehistory-no-destination' => 'Aserken n usebter $1 ulac-it',
'mergehistory-invalid-source' => 'Azar n usebter ilaq ad i sɛu azwel i ɣbelen.',
'mergehistory-invalid-destination' => 'Aserken n usebter ilaq ad i sɛu azwel i ɣbelen.',
'mergehistory-autocomment' => '[[:$1]] yezdukel s [[:$2]]',
'mergehistory-comment' => '[[:$1]] yezdukel s [[:$2]] : $3',
'mergehistory-same-destination' => 'Asebter n azar d usebter n userken ur zemren ara ad illin d yiwen',
'mergehistory-reason' => 'Ayɣer',

# Merge log
'mergelog' => 'Aɣmis n izdayen',
'pagemerge-logentry' => '[[$1]] yezdukel s [[$2]] (lqem alama d $3)',
'revertmerge' => 'Fru',
'mergelogpagetext' => 'Attan tebdart n wesdukel umezruy usebtar deg win n usebtar nniḍen amaynut.',

# Diffs
'history-title' => 'Tiẓṛi tiss sint umezruy n "$1"',
'difference-title' => '$1 : Tameẓla gar ileqman',
'difference-title-multipage' => 'Timeẓliwin gar isebtar « $1 » d « $2 »',
'difference-multipage' => '(Tameẓla gar isebtar)',
'lineno' => 'Ajerriḍ $1:',
'compareselectedversions' => 'Ẓer imgerraden ger tisiwal i textareḍ',
'showhideselectedversions' => 'Ssken/Ffer ileqman i xtiṛen',
'editundo' => 'ssefsu',
'diff-empty' => '(Ulac amgerrad)',
'diff-multi-manyusers' => '({{PLURAL:$1|Yiwen lqem agrawan|$1 ileqman igrawanen}} af {{PLURAL:$2|aseqdac|$2 iseqdacen}} {{PLURAL:$1|yeffer|ffren}})',
'difference-missing-revision' => '{{PLURAL:$1|Yiwet tacaggart|$1 ticaggartin}} n tameẓla agi ($1) {{PLURAL:$2|ur tella ara (ulac)|ur llant ara (ulac)}}.

Acku azday n tameẓla, ɣef wayen tsennedeḍ, d-aqbur. Asebter yemḥa.
Tzemreḍ ad affeḍ tilɣa deg [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} uɣmis n isebtar yekksen].',

# Search results
'searchresults' => 'Igmad n unadi',
'searchresults-title' => 'Igmad n unadi i "$1"',
'toomanymatches' => 'Teceggeɛeḍ amḍan ameqqṛan n igemmaḍ, ilaq ad ceggeɛeḍ tuttra nniḍen.',
'titlematches' => 'Ayen yecban azwel n umegrad',
'textmatches' => 'Ayen yecban azwel n usebter',
'notextmatches' => 'ulac ayen yecban azwel n usebter',
'prevn' => '{{PLURAL:$1|$1}} ssabeq',
'nextn' => '{{PLURAL:$1|$1}} ameḍfir',
'prevn-title' => '$1 {{PLURAL:$1|agmud n uqbel|igmad n uqbel}}',
'nextn-title' => '$1 {{PLURAL:$1|agmud n sakin|igmad n sakin}}',
'shown-title' => 'Beqqeḍ $1 {{PLURAL:$1|agmud|igmad}} s usebter',
'viewprevnext' => 'Ẓer ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-exists' => "'''Yella asebter s isem \"[[:\$1]]\" deg wiki agi.'''",
'searchmenu-new' => "'''Snulfud asebter « [[:$1|$1]] » deg wiki agi !'''",
'searchprofile-articles' => 'Isebtar n ugbur',
'searchprofile-project' => 'Isebtaren n tallat dɣa n usenfa',
'searchprofile-images' => 'Agetmedia',
'searchprofile-everything' => 'Akk',
'searchprofile-advanced' => 'Anadi anemhal',
'searchprofile-articles-tooltip' => 'Nadi deg $1',
'searchprofile-project-tooltip' => 'Nadi deg $1',
'searchprofile-images-tooltip' => 'Nadi  ifuyla agetmedia',
'searchprofile-everything-tooltip' => 'Nadi deg akk usmel (ula deg isebtaren n umyannan)',
'searchprofile-advanced-tooltip' => 'Fren ideggen n isemawen i unadi',
'search-result-size' => '$1 ({{PLURAL:$2|1 awal|$2 awalen}})',
'search-result-category-size' => '$1 {{PLURAL:$1|amseqdac|imseqdacen}} $2 ({{PLURAL:$2|adu-taggayt|adu-tiggayin}}, $3 {{PLURAL:$3|afaylu|ifuyla}})',
'search-result-score' => 'Taflest : $1%',
'search-redirect' => '(asemmimeḍ $1)',
'search-section' => '(tigezmi $1)',
'search-file-match' => '(yzega i ugbur n ufaylu)',
'search-suggest' => 'D awal $1 i tnadiḍ ?',
'search-interwiki-caption' => 'Isenfaren atmaten',
'search-interwiki-default' => 'Igemmaḍ ɣef $1 :',
'search-interwiki-more' => '(ugar)',
'search-relatedarticle' => 'Amassaɣ',
'searcheverything-enable' => 'Nadi deg akkw tallunin n isemawen',
'searchrelated' => 'ineqqes',
'searchall' => 'akk',
'showingresults' => "Tamuli n {{PLURAL:$1|'''Yiwen''' wegmud|'''$1''' n yigmad}} seg  #'''$2'''.",
'showingresultsnum' => "Tamuli n {{PLURAL:$3|'''Yiwen''' wegmud|'''$3''' n yigmad}} seg  #'''$2'''.",
'showingresultsheader' => "{{PLURAL:$5|Agmud '''$1'''|Igmad '''$1–$2'''}} n '''$3''' i '''$4'''",
'search-nonefound' => 'Ulac igmad i usuter agi.',
'powersearch-legend' => 'Anadi amahlan',
'powersearch-ns' => 'Nadi deg tallunin n isemawen',
'powersearch-redir' => 'Beqqeḍ isemmimḍen',
'powersearch-togglelabel' => 'Ɛellem :',
'powersearch-toggleall' => 'Akkw',
'powersearch-togglenone' => 'Ulac',
'search-external' => 'Anadi yeffɣen',
'searchdisabled' => 'Anadi deg {{SITENAME}} yettwakkes. Tzemreḍ ad tnadiḍ s Google. Meɛna ur tettuḍ ara, tasmult n google taqdimt.',
'search-error' => 'Tella tuccḍa deg unadi n : $1',

# Preferences page
'preferences' => 'Isemyifiyen',
'mypreferences' => 'Isemyifiyen',
'prefs-edits' => 'Amḍan n ibeddlilen :',
'prefsnologintext2' => 'Ilaq ad $1 iwakken ad sbaduḍ ismenyifen inek/inem.',
'prefs-skin' => 'Aglim',
'skin-preview' => 'Pre-timeẓriwt',
'datedefault' => 'Ur sɛiɣ ara asemyifi',
'prefs-beta' => 'Tiseɣnin bêta',
'prefs-datetime' => 'Azemz d ukud',
'prefs-labs' => 'Tiseɣnin « labs »',
'prefs-user-pages' => 'Isebtar n useqdac',
'prefs-personal' => 'Profile n wemseqdac',
'prefs-rc' => 'Ibeddilen imaynuten',
'prefs-watchlist' => 'Umuɣ n uɛessi',
'prefs-watchlist-days' => 'Amḍan n ussan i ubeqqeḍ deg umuɣ n uɛassi :',
'prefs-watchlist-days-max' => 'Afellay $1 {{PLURAL:$1|ass|ussan}}',
'prefs-watchlist-edits' => 'Geddac n yibeddlen yessefk ad banen deg wumuɣ n uɛessi ameqqran:',
'prefs-watchlist-edits-max' => 'Amḍan afellay : 1000',
'prefs-watchlist-token' => 'Tiddest  umuɣ n uɛassi :',
'prefs-misc' => 'Isemyifiyen wiyaḍ',
'prefs-resetpass' => 'Beddel awal n uɛaddi',
'prefs-changeemail' => 'Beddel tansa n e-mail',
'prefs-setemail' => 'Sbadu yiwet tansa e-mail',
'prefs-email' => 'Tixtiṛiyin n tira',
'prefs-rendering' => 'Tummant',
'saveprefs' => 'Smekti',
'restoreprefs' => 'Err akkw iɣewwaren s lexṣas (deg akkw tigezmiwin)',
'prefs-editing' => 'Abedddil',
'rows' => 'Ijerriḍen:',
'columns' => 'Tigejda:',
'searchresultshead' => 'Anadi',
'stub-threshold' => 'Talast timinegt i <a href="#" class="stub">izdayen ɣer ibegzan</a> (itamḍanen) :',
'stub-threshold-disabled' => 'Yensa',
'recentchangesdays' => 'Amḍan n ussan an beqqeḍ deg ibeddilen ineggura.',
'recentchangesdays-max' => 'Afellay $1 {{PLURAL:$1|ass|ussan}}',
'recentchangescount' => 'Amḍan n ibeddilen i ubeqqeḍ s lexṣas :',
'prefs-help-recentchangescount' => 'Wagi yesɛa deg-es ibeddilen ineggura, isebtar n umezruy d iɣmisen.',
'prefs-help-watchlist-token2' => 'Hattan tasarut tufurt n usuddem Web n umuɣ inek/inem n uḍfar.
Akkw amḍan yesɛan tasarut agi, ad yezmer ad i ɣer umuɣ inek/inem n uḍfar, ur d-sselɣu ara tasarut agi ihi.
[[Special:ResetTokens|Nqer d-agi ma tebɣiḍ ad wennezeḍ tasarut agi]].',
'savedprefs' => 'Isemyifiyen inek yettusmektan.',
'timezonelegend' => 'Iẓḍi n ukud :',
'localtime' => 'Asrag adigan :',
'timezoneuseserverdefault' => 'Seqdec azal s lexṣas n wiki ($1)',
'timezoneuseoffset' => 'Nniḍen (ssefru asekḥer)',
'servertime' => 'Asrag n uqeddac :',
'guesstimezone' => 'Sseqdec azal n browser/explorateur',
'timezoneregion-africa' => 'Tafriqt',
'timezoneregion-america' => 'Tamrikt',
'timezoneregion-antarctica' => 'Antarktik',
'timezoneregion-arctic' => 'Arktik',
'timezoneregion-asia' => 'Asya',
'timezoneregion-atlantic' => "Agaraw At'lasi",
'timezoneregion-australia' => 'Usṭralya',
'timezoneregion-europe' => 'Turuft',
'timezoneregion-indian' => 'Agaraw Ahendi',
'timezoneregion-pacific' => 'Agaraw Amelwi',
'allowemail' => 'Eǧǧ imseqdacen wiyaḍ a k-aznen email',
'prefs-searchoptions' => 'Nadi',
'prefs-namespaces' => 'Talluntin n isemawen',
'defaultns' => 'Nadi s lexṣas deg tallunin agi n isemawen :',
'default' => 'ameslugen',
'prefs-files' => 'Ifayluwen',
'prefs-custom-css' => 'CSS asagen',
'prefs-custom-js' => 'JavaScript asagen',
'prefs-common-css-js' => 'JavaScript  d CSS azduklan i akkw lebsa :',
'prefs-reset-intro' => 'Tzemreḍ ad seqdeceḍ asebter agi iwakken ad erreḍ iɣewwaren inek/inem ar azalen n lexṣas n usmel.
Wagi ur yezmer ara ad yetwekkes.',
'prefs-emailconfirm-label' => 'Aragag n tirawt :',
'youremail' => 'E-mail *:',
'username' => '{{GENDER:$1|Isem n umseqdac|Isem n tamseqdact}} :',
'uid' => 'Uḍḍun n {{GENDER:$1|umseqdac|tamseqdact}}:',
'prefs-memberingroups' => '{{GENDER:$2|Aεeggal|Taɛggalt}} n {{PLURAL:$1|ugraw|igrawen}} :',
'prefs-registration' => 'Azmez n tiggezt :',
'yourrealname' => 'Isem n ṣṣeḥ *:',
'yourlanguage' => 'Tutlayt:',
'yourvariant' => 'Lqem nniḍen n tutlayt n ugbur :',
'prefs-help-variant' => 'Lqem naɣ inun inek/inem iwakken an beqqeḍ agbur n wiki agi.',
'yournick' => 'Azmul amaynut :',
'prefs-help-signature' => 'Iwenniten ɣef isebtar n umeslay ilaq ad illin zmelen s « <nowiki>~~~~</nowiki> », sakin ad i sɛu aselkat ɣer azmul inek/inem dɣa azmez d usrag.',
'badsig' => 'Azmul mačči d ṣaḥiḥ; Ssenqed tags n HTML.',
'badsiglength' => 'Azmul inek/inem, teɣwzi-s tameqqṛant aṭas.
Ur ilaq ara ad i sɛu ugar n $1 {{PLURAL:$1|asekkil|isekkilen}}.',
'yourgender' => 'Amek i tebɣiḍ ad n-ini fellak(m) ?',
'gender-unknown' => 'Ur bɣiɣ ara ad iniɣ',
'gender-male' => 'Yebeddel isebtar n wiki',
'gender-female' => 'Tebeddel isebtar n wiki',
'prefs-help-gender' => 'Sbadu asmenyif agi d-afrayan.
Aseɣẓan agi yetseqdac azal-is iwakken ad yemeslay s kečč/kem dɣa ad yefk isem-ik/im i wiyaḍ nniḍen s useqdac n tawsit tajeṛṛumant.
Talɣut agi attili d-tazayezt.',
'email' => 'E-mail',
'prefs-help-realname' => '* Isem n ṣṣeḥ (am tebɣiḍ): ma textareḍ a t-tefkeḍ, ad yettuseqdac iwakken ad snen medden anwa yura tikkin inek.',
'prefs-help-email' => '* E-mail (am tebɣiḍ): Teǧǧi imseqdacen wiyaḍ a k-aznen email mebla ma ẓren tansa email inek.',
'prefs-help-email-others' => 'Zemreḍ ad eǧǧeḍ wiyeḍ nniḍen ak(akem) cceqɛen izen deg usebter-ik (im) n umyannan war ad effekeḍ tamagit-ik (im).',
'prefs-help-email-required' => 'Tansa e-mail tesḍulli.',
'prefs-info' => 'Tilɣa n udasil',
'prefs-i18n' => 'Asagraɣlan',
'prefs-signature' => 'Azmul',
'prefs-dateformat' => 'Amasal n izemzan',
'prefs-timeoffset' => 'Asekḥer n usrag',
'prefs-advancedediting' => 'Tixtiṛiyin timuta',
'prefs-editor' => 'Amaẓrag',
'prefs-preview' => 'Azarskan',
'prefs-advancedrc' => 'Tixtiṛiyin timahlanin',
'prefs-advancedrendering' => 'Tixtiṛiyin timahlanin',
'prefs-advancedsearchoptions' => 'Tixtiṛiyin timahlanin',
'prefs-advancedwatchlist' => 'Tixtiṛiyin timahlanin',
'prefs-displayrc' => 'Tixtiṛiyin n ubeqqeḍ',
'prefs-displaysearchoptions' => 'Tixtiṛiyin n ubeqqeḍ',
'prefs-displaywatchlist' => 'Tixtiṛiyin n ubeqqeḍ',
'prefs-tokenwatchlist' => 'Tiddest',
'prefs-diffs' => 'Timeẓliwin',
'prefs-help-prefershttps' => 'Asmenyif agi, ad yelḥu ar tuqqna ay d-yetteddun.',
'prefs-tabs-navigation-hint' => 'Taxbalut : Tzemreḍ ad seqdeceḍ tineccabin n uzelmaḍ d uyeffus iwakken ad ssileleḍ gar iccaren.',

# User preference: email validation using jQuery
'email-address-validity-valid' => 'E-mail agi teɣbel',
'email-address-validity-invalid' => 'Telaq tansa e-mail i ɣbelen !',

# User rights
'userrights' => 'Laɛej iserfan n wemseqdac',
'userrights-lookup-user' => 'Laɛej iderman n yimseqdacen',
'userrights-user-editname' => 'Ssekcem isem n wemseqdac:',
'editusergroup' => 'Beddel iderman n yimseqdacen',
'editinguser' => "Abeddel n izerfan n {{GENDER:$1|useqdac|taseqdact}} '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Beddel iderman n wemseqdac',
'saveusergroups' => 'Smekti iderman n yimseqdacen',
'userrights-groupsmember' => 'Amaslad deg:',
'userrights-groupsmember-auto' => 'Aεeggal udrig n :',
'userrights-groups-help' => 'Tzemreḍ ad beddeleḍ igrawen anda yella aseqdac agi :
* Taxxamt i tekkin : aseqdac yella deg ugraw agi.
* Taxxamt ur tekkin ara : aseqdac ur yella ara deg ugraw agi
* Titrit (*) : ur tzemreḍ ara ad ekkeseḍ agraw agi sakin i tid ernuḍ, naɣ bis-bersa.',
'userrights-reason' => 'Ayɣer',
'userrights-no-interwiki' => 'Ur tesɛiḍ ara turagt iwakken ad beddeleḍ izerfan n iseqdacen ɣef wiki nniḍen.',
'userrights-nodatabase' => 'Taffa n isefka « $1 » ulac itt naɣ mačči d tadigant.',
'userrights-nologin' => 'Ilaq ad [[Special:UserLogin|qqeneḍ]] s yiwen umiḍan anedbal iwakken ad beddeleḍ izerfan n useqdac.',
'userrights-notallowed' => 'Ur tesɛiḍ ara turagt ad rnuḍ neɣ ad ekkeseḍ izerfan n umseqdac.',
'userrights-changeable-col' => 'Igrawen i tzemreḍ ad beddeleḍ',
'userrights-unchangeable-col' => 'Igrawen ur tzemreḍ ara ad beddeleḍ',
'userrights-conflict' => 'Ccwal n ubeddel n izerfan n umseqdac ! Ilaq ad ɛzemeḍ tikelt nniḍen dɣa ad sergegeḍ ibeddilen.',
'userrights-removed-self' => 'Tekkeseḍ s lerbaḥ izerfan inek/inem. Tura ur tzemreḍ ara ad kecmeḍ ar usebtar agi.',

# Groups
'group' => 'Adrum:',
'group-user' => 'Iseqdacen',
'group-autoconfirmed' => 'Iseqdacen i rgegen',
'group-bot' => 'Iṛubuten',
'group-sysop' => 'Inedbalen',
'group-bureaucrat' => 'Imsifellura',
'group-suppress' => 'Inemdayen',
'group-all' => '(akk)',

'group-user-member' => '{{GENDER:$1|aseqdac|taseqdact}}',
'group-autoconfirmed-member' => '{{GENDER:$1|manrgeg aseqdac|manrgeg taseqdact}}',
'group-bot-member' => '{{GENDER:$1|aṛubut}}',
'group-sysop-member' => '{{GENDER:$1|anedbal|tanedbalt}}',
'group-bureaucrat-member' => '{{GENDER:$1|amsfellaru}}',
'group-suppress-member' => '{{GENDER:$1|anemday|tanemdayt}}',

'grouppage-user' => '{{ns:project}}:Iseqdacen',
'grouppage-autoconfirmed' => '{{ns:project}}:Iseqdacen i rgegen',
'grouppage-bot' => '{{ns:project}}:Iṛubuten',
'grouppage-sysop' => '{{ns:project}}:Inedbalen',
'grouppage-bureaucrat' => '{{ns:project}}:Imsfelluran',
'grouppage-suppress' => '{{ns:project}}:Inemdayen',

# Rights
'right-read' => 'Ɣeṛ isebtar',
'right-edit' => 'Beddel isebtar',
'right-createpage' => 'Snulfud isebtar (mačči d-isebtar n umeslay)',
'right-createtalk' => 'Snulfud isebtar n umeslay',
'right-createaccount' => 'Snulfud imiḍanen n iseqdacen',
'right-minoredit' => 'Ffer ibeddilen yellan d-imectuḥen',
'right-move' => 'Beddel isem n isebtar',
'right-move-subpages' => 'Beddel isem n isebtar d adu-isebtar nsen',
'right-move-rootuserpages' => 'Beddel isem n usebtar amenzawi n useqdac',
'right-movefile' => 'Beddel isem n ifuyla',
'right-suppressredirect' => 'Ur snulfu ara asemmimeḍ seg azwel amezwaru s ubeddel n isem usebter',
'right-upload' => 'Azen ifuyla',
'right-reupload' => 'Sefxes afaylu yellan',
'right-reupload-own' => 'Sefxes afaylu id n-azen.',
'right-reupload-shared' => 'Ɛefes deg udigan afaylu yellan ɣef azadur azduklan',
'right-upload_by_url' => 'Kter afaylu seg tansa URL',
'right-purge' => 'Senger tazarkatut n isebtar war asuter n uragag',
'right-autoconfirmed' => 'Ur i tilli ara yeswaɣ sɣur tilisa n uktum yeqqenen ar tansiwin IP',
'right-bot' => 'Ad yilli yesniret am ukala yeswurmen',
'right-nominornewtalk' => 'Ur ndeḥ ara tazmilt n inzan imaynuten ma neseqdac abeddel amectuḥ ɣef usebtar n umeslay n yiwen useqdac',
'right-apihighlimits' => 'Seqdec tilisa tid ɛlayen deg tuttriwin API',
'right-writeapi' => 'Seqdec API n ubeddel',
'right-delete' => 'Mḥu isebtar',
'right-bigdelete' => 'Mḥu isebtar yesɛan amezruy affuyan',
'right-deletelogentry' => 'Ekkes ḍɣa erred yiwen asekcem n uɣmis',
'right-deleterevision' => 'Ekkes dɣa erred yiwen lqem n usebter',
'right-deletedhistory' => 'Ẓeṛ isekcam n imezruyen yekksen, maca war aḍris nsen',
'right-deletedtext' => 'Ẓeṛ aḍris yemḥan d timeẓliwin gar ileqman yemḥan',
'right-browsearchive' => 'Nadi ɣef isebtar yettumḥan',
'right-undelete' => 'Erred asebter yemḥan',
'right-suppressrevision' => 'Ssekyed dɣa erred ileqman yefren i inedbalen',
'right-suppressionlog' => 'Ẓeṛ iɣmisen usligen',
'right-block' => 'Kyef deg tira iseqdacen nniḍen',
'right-blockemail' => 'Sḍiqqef aceggaɛ n tira (e-mail) i yiwen useqdac',
'right-hideuser' => 'Kyef aseqdac s tuffra n isem-is ar udem n uzayez',
'right-ipblock-exempt' => 'Zizdew tansiwin IP yekyefen, ikyafen iwurmanen d ikyafen n tagrummiwin IP',
'right-proxyunbannable' => 'Zizdew ikyafen iwurmanen n iqeddacen proxy',
'right-unblockself' => 'Ad yekkes akyaf iman-is',
'right-protect' => 'Beddel iswiren n umesten dɣa beddel isebtar i gdelen s uceṛcuṛ',
'right-editprotected' => 'Beddel isebtar i gdelen s « {{int:protect-level-sysop}} »',
'right-editsemiprotected' => 'Beddel isebtar i gdelen s « {{int:protect-level-autoconfirmed}} »',
'right-editinterface' => 'Beddel agrudem n useqdac',
'right-editusercssjs' => 'Beddel ifuyla CSS d JavaScript n iseqdacen nniḍen',
'right-editusercss' => 'Beddel ifuyla CSS n iseqdacen nniḍen',
'right-edituserjs' => 'Beddel ifuyla JavaScript n iseqdacen nniḍen',
'right-editmyusercss' => 'Beddel ifuyla CSS n umseqdac inek/inem',
'right-editmyuserjs' => 'Beddel ifuyla Javascript n umseqdac inek/inem',
'right-viewmywatchlist' => 'Zeṛ umuɣ inek/inem n uḍfar',
'right-editmywatchlist' => 'Beddel umuɣ inek/inem n uḍfar. Ger tamawt af kra n tigawin ad rnunt isebtar nniḍen war azref agi.',
'right-viewmyprivateinfo' => 'Zeṛ isefka udmawanen inek/inem (amedya : tansa email, isem n tiddet)',
'right-editmyprivateinfo' => 'Beddel isefka udmawanen inek/inem (amedya : tansa email, isem n tiddet)',
'right-editmyoptions' => 'Beddel ismenyifen inek/inem',
'right-rollback' => 'Ekkes s urured ibeddilen n umedraw aneggaru deg yiwen asebter',
'right-markbotedits' => 'Creḍ ibeddilen yetwekkesen am aken d aṛubut i tni beddelen.',
'right-noratelimit' => 'Ur i tilli ara yeswaɣ sɣur tilisa n utug',
'right-import' => 'Kter ifuyla seg iWikiyen nniḍen',
'right-importupload' => 'Azen isebtar seg ufaylu',
'right-patrol' => 'Creḍ ibeddilen n wiyaḍ nniḍen am aken selkenen',
'right-autopatrol' => 'Ad i sɛu ibeddilen is creḍen s uwurman am aken ɛessan',
'right-patrolmarks' => 'Ẓeṛ ticraḍ n uɛassi deg ibeddilen imaynuten',
'right-unwatchedpages' => 'Ẓeṛ umuɣ n isebtar ur sɛan ara iɛssasen',
'right-mergehistory' => 'Sdukel amezruy n isebtar',
'right-userrights' => 'Beddel akkw izerfan n yiwen aseqdac',
'right-userrights-interwiki' => 'Beddel izerfan n iseqdacen yellan deg awiki nniḍen',
'right-siteadmin' => 'Sekkweṛ naɣ kkes aseḍru i taffa n isefka',
'right-override-export-depth' => 'Sifeḍ isebtar akkw d isebtar iqqenen alama tadrut n 5 iswiren',
'right-sendemail' => 'Ceggaɛ tirawt i iseqdacen nniḍen',
'right-passwordreset' => 'Ẓeṛ tira n uwennez n awalen uɛaddi',

# Special:Log/newusers
'newuserlogpage' => 'Aɣmis n isnulfan n  imiḍanen n imseqdacen',
'newuserlogpagetext' => 'Asebter agi yebeqqeḍ amezruy n usnulfu n imiḍanen n iseqdacen.',

# User rights log
'rightslog' => 'Aɣmis n yizerfan n wemseqdac',
'rightslogtext' => 'Wagi d aɣmis n yibeddlen n yizerfan n wemseqdac',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'ɣaṛ asebter agi',
'action-edit' => 'beddel asebter agi',
'action-createpage' => 'Snulfud isebtar',
'action-createtalk' => 'snulfud isebtar n umeslay',
'action-createaccount' => 'snulfud amiḍan agi n useqdac',
'action-minoredit' => 'cṛeḍ abeddel agi am umectuḥ',
'action-move' => 'beddel isem n usebter agi',
'action-move-subpages' => 'beddel isem n usebter agi d adu-isebtar is',
'action-move-rootuserpages' => 'beddel isem n usebtar amenzawi n useqdac',
'action-movefile' => 'beddel isem n ufaylu agi',
'action-upload' => 'Azen afaylu agi',
'action-reupload' => 'Sefxes afaylu yellan',
'action-reupload-shared' => 'fel deg udigan afaylu agi yellan ɣef azadur azduklan',
'action-upload_by_url' => 'Azen afaylu agi seg tansa URL',
'action-writeapi' => 'seqdec API n tira',
'action-delete' => 'mḥu asebter-agi',
'action-deleterevision' => 'mḥu lqem agi',
'action-deletedhistory' => 'ẓeṛ amezruy yemḥan n usebter agi',
'action-browsearchive' => 'nadi ɣef isebtar yettumḥan',
'action-undelete' => 'erred asebter agi',
'action-suppressrevision' => 'sekyed dɣa uɣaled ar lqem agi yetwekkesen',
'action-suppressionlog' => 'ẓeṛ aɣmis agi uslig',
'action-block' => 'Kyef deg tira aseqdac agi',
'action-protect' => 'beddel iswiren n umesten i usebter agi',
'action-rollback' => 'ekkes s urured ibeddilen n umedraw aneggaru yebeddelen yiwen usebter',
'action-import' => 'kter isebtar agi seg wiki nniḍen',
'action-importupload' => 'kter isebtar agi seg ufaylu n wezdam',
'action-patrol' => 'Creḍ abeddel n wiyaḍ nniḍen am aken tesɛa tacaggart',
'action-autopatrol' => 'ad sɛuḍ tacaggart i ubeddil ik',
'action-unwatchedpages' => 'Sken-d tabdart n isebtaren ur yettwalan ara.',
'action-mergehistory' => 'Sdukel amezruy n usebtar agi',
'action-userrights' => 'Ẓreg izerfan n imseqdacen yark',
'action-userrights-interwiki' => 'Ẓreg izerfan n umseqdac deg wikis wiyaḍ',
'action-siteadmin' => 'sekkweṛ naɣ kkes aseḍru i taffa n isefka',
'action-sendemail' => 'Ceggaɛ tira',
'action-editmywatchlist' => 'beddel umuɣ inek uḍfar',
'action-viewmywatchlist' => 'zeṛ umuɣ inek/inem n uḍfar',
'action-viewmyprivateinfo' => 'zeṛ tilɣa inek tusligin',
'action-editmyprivateinfo' => 'beddel tilɣa inek tusligin',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|Abeddel|Ibeddlen}}',
'enhancedrc-since-last-visit' => '$1 {{PLURAL:$1|seg tarzaft taneggarut}}',
'enhancedrc-history' => 'amezruy',
'recentchanges' => 'Ibeddilen imaynuten',
'recentchanges-legend' => 'Tifranin n ibeddilen imaynuten',
'recentchanges-summary' => 'Ḍfer ibeddilen imaynuten n {{SITENAME}}.',
'recentchanges-noresult' => 'Ulac abeddel yecban ayen i ttnadiḍ ɣef tallit id efkeḍ.',
'recentchanges-feed-description' => 'Ḍfer ibeddilen imaynuten n wiki-yagi deg usuddem-agi.',
'recentchanges-label-newpage' => 'Abeddel agi ad yesnulfu asebter amaynut',
'recentchanges-label-minor' => 'Wagi d-abeddel amectuḥ',
'recentchanges-label-bot' => 'D-arubut id yeseqdacen abeddel agi',
'recentchanges-label-unpatrolled' => 'Abeddel agi mazal yesɛa aselken.',
'recentchanges-label-plusminus' => 'Tiddi n usebtar tetwebeddel s umḍan agi n itamḍanen.',
'recentchanges-legend-heading' => "'''Aglam :'''",
'recentchanges-legend-newpage' => '(zeṛ daɣen [[Special:NewPages|umuɣ n isebtar imaynuten]]).',
'recentchanges-legend-plusminus' => "(''± 123'')",
'rcnotefrom' => "Deg ukessar llan ibeddlen seg wasmi '''$2''' (ar '''$1''').",
'rclistfrom' => 'Ssken ibeddlen imaynuten seg $1',
'rcshowhideminor' => '$1 ibeddlen ifessasen',
'rcshowhidebots' => '$1 irubuten',
'rcshowhideliu' => '$1 imseqdacen imseklesen',
'rcshowhideanons' => '$1 n yimseqdacen udrigen',
'rcshowhidepatr' => '$1 n yibeddlen yettwassenqden',
'rcshowhidemine' => '$1 ibeddlen inu',
'rclinks' => 'Ssken $1 n yibeddlen ineggura di $2 n wussan ineggura<br />$3',
'diff' => 'amgirred',
'hist' => 'Amezruy',
'hide' => 'Ffer',
'show' => 'Ssken',
'minoreditletter' => 'm',
'newpageletter' => 'N',
'boteditletter' => 'b',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|aɛessas|iɛessasen}}]',
'rc_categories' => 'Ḥedded i taggayin (ferreq s "|")',
'rc_categories_any' => 'Ulayɣer',
'rc-change-size-new' => '$1 {{PLURAL:$1|atamḍan|itamḍanen}} sakin abeddel',
'newsectionsummary' => '/* $1 */ tigezmi tamaynut',
'rc-enhanced-expand' => 'Ẓeṛ ttfaṣil',
'rc-enhanced-hide' => 'Ffer tilɣa',
'rc-old-title' => 'yesnulfad s uzwel « $1 »',

# Recent changes linked
'recentchangeslinked' => 'Ibeddlen imaynuten n isebtar myezdin',
'recentchangeslinked-feed' => 'Ibeddlen imaynuten n isebtar myezdin',
'recentchangeslinked-toolbox' => 'Ibeddlen imaynuten n isebtar myezdin',
'recentchangeslinked-title' => 'Tiḍefri n isebtaren iqqenen ar « $1 »',
'recentchangeslinked-summary' => "Asebter uslig agi i sekned ibeddlen imaynuten ɣef isebtaren iqqenen. Isebtaren n [[Special:Watchlist|umuɣ n uḍfar]] llan s '''ufuyan'''.",
'recentchangeslinked-page' => 'Isen n usebter :',
'recentchangeslinked-to' => 'Beqqeḍ ibeddilen n isebtareb i sɛan azday ɣer asebter nni wala anemgal',

# Upload
'upload' => 'Azen afaylu',
'uploadbtn' => 'Azen afaylu',
'reuploaddesc' => 'Semmewet dɣa uɣaled ar tiferkit n tuznin.',
'upload-tryagain' => 'Ceggaɛ aglam n ufaylu ibeddelen',
'uploadnologin' => 'Ur tekcimeḍ ara',
'uploadnologintext' => 'Ilaq ad $1 iwakken ad ketreḍ ifuyla.',
'upload_directory_missing' => 'Akaram n taktert n ufaylu ($1) ulac-it dɣa ur d-yesnulfa ara sɣur aqeddac web.',
'upload_directory_read_only' => 'Akaram n taktert n ifuyla ($1) ur yezmer ara ad yetbeddel seg aqeddac web.',
'uploaderror' => 'Agul deg usekcam',
'upload-recreate-warning' => "'''Ɣur-wet : Afaylu s isem agi yetwekkes naɣ yetembiwel.'''
Aɣmis n tukksiwin d win n ittembiwilen n usebter agi beqqeḍen d-agi i tilɣa :",
'uploadtext' => "Sseqdec tiferkit agi iwakken ad ktereḍ ifuyla ɣef uqeddac.
Iwakken ad ẓṛeḍ naɣ ad nadiḍ tugniwin i ktren uqbel, ẓeṛ [[Special:FileList|umuɣ n tugniwin]]. Taktert tella daɣen deg [[Special:Log/upload|aɣmis n taktert n ifuyla]], dɣa inuzal deg [[Special:Log/delete|aɣmis n inuzal]].

Akken ad tessekcmeḍ afaylu deg usebter, seqdec azay am wagi
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:afaylu.jpg]]</nowiki></code>''', iwakken ad beqqeḍeḍ afaylu deg tabadut tačurant (lukan d-tugna) ;
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:afaylu.png|200px|thumb|left|aḍris n uglam]]</nowiki></code>''' i useqdac n uqmamaḍ n 200px s tehri deg tanaka af uzelmeḍ s « aḍris n uglam » am aglam ;
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:afaylu.ogg]]</nowiki></code>''' iwakken ad qqeneḍ ɣer ufaylu war ubeqqeḍ.",
'upload-permitted' => 'Amasal n ifuyla i siregen : $1.',
'upload-preferred' => 'Amasal n ifuyla i smenyifen : $1.',
'upload-prohibited' => 'Amasal n ifuyla igdelen : $1.',
'uploadlog' => 'amezruy n usekcam',
'uploadlogpage' => 'Amezruy n usekcam',
'uploadlogpagetext' => 'Hat-an umuɣ n ifuyla ineggura i kteren ɣef uqeddac.
Ẓeṛ [[Special:NewFiles|tihawt n tugniwin timaynutin]].',
'filename' => 'Isem n ufaylu',
'filedesc' => 'Agzul',
'fileuploadsummary' => 'Agzul:',
'filereuploadsummary' => 'Ibeddilen n ufaylu :',
'filestatus' => 'Aẓayer n uzref n umeskar :',
'filesource' => 'Aɣbalu :',
'uploadedfiles' => 'Ifuyla yettwaznen',
'ignorewarning' => 'Ttu aɣtal u smekti afaylu',
'ignorewarnings' => 'Ttu iɣtalen',
'minlength1' => 'Isem ufaylu ilaq ad yesεu ma drus yiwen usekkil',
'illegalfilename' => 'Isem n ufaylu "$1" yesɛa isekkilen ur tettalaseḍ ara a ten-tesseqdceḍ deg yizwal n isebtar. G leɛnayek beddel isem n ufaylu u azen-it tikkelt nniḍen.',
'filename-toolong' => 'Isem ufaylu ilaq ad yesεu m-ay aṭas 240 iṭamḍanen (bytes).',
'badfilename' => 'Isem ufaylu yettubeddel ar "$1".',
'filetype-mime-mismatch' => 'Asiɣzef n ufaylu « .$1 » ur yesɛa ara tuqqna s tawsit MIME id n-ufa deg ufaylu ($2).',
'filetype-badmime' => 'Ur tettalaseḍ ara ad tazneḍ ufayluwen n anaw n MIME "$1".',
'filetype-bad-ie-mime' => 'Afaylu ur yezmer ara ad yetwekter acku yetwaf am « $1 » sɣur Internet Explorer. Tawsit agi d tazanbagt acku d tamihawt.',
'filetype-unwanted-type' => "'''« .$1 »''' d amasal n ufaylu azanbag.
Ilaq ad seqdeceḍ {{PLURAL:$3|amasal|imusal}} $2.",
'filetype-banned-type' => "''' « .$1 » '''mačči d {{PLURAL:$4|amasal yesɛan turagt|imusal yesɛan turagt}}. 
{{PLURAL:$3|Amasal yesɛan turagt d-wagi :|Imusal yesɛan turagt d-wigi :}} $2.",
'filetype-missing' => 'Afaylu ur yesɛi ara taseggiwit (am ".jpg").',
'empty-file' => 'Afaylu id cegɛeḍ d-ilem.',
'file-too-large' => 'Afaylu id cegɛed d-ameqqṛan aṭas.',
'filename-tooshort' => 'Isem n ufaylu d-awezzlan aṭas.',
'filetype-banned' => 'Tawsit agi n ufaylu d-tazanbagt.',
'verification-error' => 'Afaylu agi ur i ɛedda ara aselken n ifuyla.',
'hookaborted' => 'Abeddel i ɛerdeḍ ad xedmeḍ yetweḥbes s tamdeyt n usiɣzef.',
'illegal-filename' => 'Isem n ufaylu agi ur yeɣbel ara.',
'overwrite' => 'Asefxes n ufaylu yellan ur yeɣbel ara.',
'unknown-error' => 'Yefkad anezri warisem.',
'tmp-create-error' => 'Ulamek ad nesnulfu afaylu agi akudan.',
'tmp-write-error' => 'Anezri deg tira n ufaylu agi akudan.',
'large-file' => 'Ilaq tiddi n ufayluwen ur tettili kter n $1; tiddi n ufaylu-agi $2.',
'largefileserver' => 'Afaylu meqqer aṭṭas, server ur t-yeqbil ara.',
'emptyfile' => 'Afaylu i tazneḍ d ilem. Waqila tɣelṭeḍ deg isem-is. G leɛnayek ssenqed-it.',
'windows-nonascii-filename' => 'Wiki agi ur yebra ara isemawen n ifuyla s isekkilen usligen.',
'fileexists' => 'Afaylu s yisem-agi yewǧed yagi, ssenqed <strong>[[:$1]]</strong> ma telliḍ mačči meḍmun akken a t-tbeddleḍ.
[[$1|thumb]]',
'filepageexists' => 'Asebter n uglam i ufaylu agi yesnulfad yakan d-agi <strong>[[:$1]]</strong>, maca ulac asebter s isem agi.
Agzul ad efkeḍ tura ur d yettban ara ɣef asebter n uglam.
Ma tebɣiḍ ad yeban, ilaq ad beddeleḍ s awfus asebter. [[$1|thumb]]',
'fileexists-extension' => 'Afaylu s yisem yecban wagi yella : [[$2|thumb]]
* Isem n ufaylu i tezneḍ: <strong>[[:$1]]</strong>
* Isem n ufaylu i yellan: <strong>[[:$2]]</strong>
Ilaq ad xtiṛeḍ isem nniḍen.',
'fileexists-thumbnail-yes' => "Iban-d belli tugna-nni d tugna tamecṭuht n tugna nniḍen ''(thumbnail)''. [[$1|thumb]]
G leɛnayek ssenqed tugna-agi <strong>[[:$1]]</strong>.
Ma llant kif-kif ur tt-taznepd ara.",
'file-thumbnail-no' => "Isem n ufaylu yezwer s <strong>$1</strong>.
Ahat d lqem tamectuḥt ''(aqmamaḍ)''.
Lukan tesɛiḍ afaylu s tabadut taɛlayant, azen-it, m-ulac beddel isem-is.",
'fileexists-forbidden' => 'Afaylu s isem agi yella yakan, dɣa ur yezmer ara ad yetsefxes.
Ma tebɣiḍ ad azeneḍ afaylu inek/inem, ilaq ad uɣaleḍ ar deffir dɣa ad as efkeḍ isem amaynut.
[[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Afaylu s isem agi yella yakan deg uzadur n ifuyla azduklan.
Ma tebɣiḍ ad azeneḍ afaylu inek/inem, ilaq ad uɣaleḍ ar deffir dɣa ad as efkeḍ isem amaynut.
[[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Afaylu agi d-asleg n {{PLURAL:$1|ufaylu agi|ifuyla agi}} :',
'file-deleted-duplicate' => 'Afaylu am wagi ([[:$1]]) yetwekkes yakan. Ilaq ad selkeneḍ aɣmis n tukksiwin n ufaylu agi uqbel atid ktereḍ tikkelt nniḍen.',
'file-deleted-duplicate-notitle' => 'Afaylu yesɛan isem am wagi yetwumḥa, ula d-azwel ines.
Ilaq ad ssutereḍ i yiwen aterras ma yezmer ad yessenqed aɣmis n ufaylu agi yetwumḥan iwakken ad yessekyed addad uqbel at-id ktereḍ tikelt nniḍen.',
'uploadwarning' => 'Aɣtal deg wazan n ufayluwen',
'uploadwarning-text' => 'Beddel aglam n ufaylu dɣa ɛreḍ tikkelt nniḍen',
'savefile' => 'Smekti afaylu',
'uploadedimage' => '"[[$1]]" yettwazen',
'overwroteimage' => 'yekter lqem amaynut n « [[$1]] »',
'uploaddisabled' => 'Suref-aɣ, azen n ufayluwen yettwakkes',
'copyuploaddisabled' => 'Taktert n ufaylu s URL yensan.',
'uploadfromurl-queued' => 'Afaylu inek/inem yekcem deg udras n ugani.',
'uploaddisabledtext' => 'Azen n ifuyla yettwakkes deg wiki agi.',
'php-uploaddisabledtext' => 'Taktert n ifuyla tensa deg PHP. Selken taxtiṛit n tawila  file_uploads.',
'uploadscripted' => 'Afaylu-yagi yesɛa angal n HTML/script i yexdem agula deg browser/explorateur.',
'uploadinvalidxml' => 'XML deg ufaylu yekteren ur d-yetwesleḍ ara.',
'uploadvirus' => 'Afaylu-nni yesɛa anfafad asenselkim (virus)! Ẓer kter: $1',
'uploadjava' => 'Wagi d afaylu ZIP yesɛan afaylu Java .class.
Azdam n ifuyla Java ur yesɛa ara turagt, acku zemren ad zizdewen ikyafen n taɣellist.',
'upload-source' => 'Afaylu aɣbalu',
'sourcefilename' => 'Isem n ufaylu aɣbalu :',
'sourceurl' => 'URL aγbalu',
'destfilename' => 'Isem n ufaylu deg aserken',
'upload-maxfilesize' => 'Tiddi tafellayt n ufaylu : $1',
'upload-description' => 'Aglam n ufaylu',
'upload-options' => 'Tixtiṛiyin n taktert ifuyla',
'watchthisupload' => 'Ɛass asebter agi',
'filewasdeleted' => 'Afaylu s yisem-agi yettwazen umbeɛd yettumḥa. Ssenqed $1 qbel ad tazniḍ tikelt nniḍen.',
'filename-bad-prefix' => "Isem n ufaylu yezwer s '''« $1 »''', wagi d isem i sedgeren s uwurman sɣur timsakenwin tumḍinin.
Xteṛ isem n ufaylu agelmaw.",
'upload-success-subj' => 'Azen yekfa',
'upload-success-msg' => 'Taktert inek/inem seg [$2] yesmures. Af-it d-agi : [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Ugur n taktert',
'upload-failure-msg' => 'Yella ugur s taktert inek/inem seg [$2] :

$1',
'upload-warning-subj' => 'Alɣu deg taktert',
'upload-warning-msg' => 'Yella ugur s taktert seg [$2]. Tzemreḍ ad uɣaleḍ ar [[Special:Upload/stash/$1|tiferkit n taktert]] iwakken ad fruḍ ugur agi.',

'upload-proto-error' => 'Agul deg protokol',
'upload-proto-error-text' => 'Assekcam yenṭerr URL i yebdan s <code>http://</code> neɣ <code>ftp://</code>.',
'upload-file-error' => 'Agul zdaxel',
'upload-file-error-text' => 'Anezri agensan yeḍran asmi yeɛreḍ ad yesnulfu afaylu akudan ɣef uqeddac. Ilaq ad meslayeḍ s [[Special:ListUsers/sysop|unedbal]].',
'upload-misc-error' => 'Agul mačči mechur asmi yettwazen ufaylu',
'upload-misc-error-text' => 'Anezri warisem yegweḍeḍ asmi yettwazen afaylu.
Ilaq ad selkeneḍ ma URL nni teɣbel, dɣa ɛreḍ tikkelt nniḍen.
Ma yella daɣen anezri, ilaq ad meslaye ḍ s  [[Special:ListUsers/sysop|unedbal]].',
'upload-too-many-redirects' => 'URL agi yesɛa aṭas illusen n wesnili.',
'upload-unknown-size' => 'Tiddi warisem',
'upload-http-error' => 'Anezri HTTP : $1',
'upload-copy-upload-invalid-domain' => 'Anɣel n izdamen ur yezmer ara seg taɣult agi.',

# File backend
'backend-fail-stream' => 'Ulamek an ɣeṛ afaylu $1.',
'backend-fail-backup' => 'Ulamek an ḥrez afaylu $1.',
'backend-fail-notexists' => 'Afaylu $1 ulac it.',
'backend-fail-hashes' => 'Ulamek an sɛu idwayen n ufaylu i usnemhel.',
'backend-fail-notsame' => 'Afaylu imeẓli yella yakan i $1.',
'backend-fail-invalidpath' => '$1 mačči d abrid n uḥraz iɣbelen.',
'backend-fail-delete' => 'Ulamek an mḥu afaylu "$1".',
'backend-fail-describe' => 'Ulamek an beddel adferisefka n ufaylu "$1".',
'backend-fail-alreadyexists' => 'Afaylu $1 yella yakan.',
'backend-fail-store' => 'Ulamek an ḥrez afaylu $1 deg $2.',
'backend-fail-copy' => 'Ulamek an nɣel afaylu $1 deg $2.',
'backend-fail-move' => 'Ulamek an sekḥer afaylu $1 deg $2.',
'backend-fail-opentemp' => 'Ulamek an ldi afaylu akudan.',
'backend-fail-writetemp' => 'Ulamek an aru deg ufaylu akudan.',
'backend-fail-closetemp' => 'Ulamek an mdel afaylu akudan.',
'backend-fail-read' => 'Ulamek an ɣeṛ afaylu "$1".',
'backend-fail-create' => 'Ulamek an aru afaylu "$1".',
'backend-fail-maxsize' => 'Ulamek an aru afaylu "$1" acku yugar {{PLURAL:$2|yiwen atamḍan|$2 itamḍanen}}.',
'backend-fail-readonly' => 'Tannalt n uḥraz "$1" yella deg taɣuri kan. Taɣzint id yefka : "$2"',
'backend-fail-synced' => 'Afaylu "$1" yesɛa addad azanbag deg tannalin n uḥraz tigensanin',
'backend-fail-connect' => 'Ulamek an qqen ar tannalt n uḥraz "$1".',
'backend-fail-internal' => 'Yella anezri warisem deg tannalt n uraz "$1".',
'backend-fail-contenttype' => 'Ulamek ad n efk tawsit n ugbur n ufaylu an ḥrez deg "$1".',
'backend-fail-batchsize' => 'Tannalt n uḥraz yefkad akemmus n $1 {{PLURAL:$1|tamhelt|timehlin}} n ufaylu ; talast tella ar $2 {{PLURAL:$2|tamhelt|timehlin}}.',
'backend-fail-usable' => 'Ulamek an ɣeṛ naɣ an aru afaylu « $1 » acku drus izerfan naɣ ikaramen xusen.',

# File journal errors
'filejournal-fail-dbconnect' => 'Ulamek an qqen ar taffa n isefka n uɣmis i ixf n uḥraz "$1".',
'filejournal-fail-dbquery' => 'Ulamek an mucceḍ taffa n isefka n uɣmis i ixf n uḥraz "$1".',

# Lock manager
'lockmanager-notlocked' => 'Ulamek an kkes aseḍru « $1 » ; ur yesɛa ara asekkweṛ.',
'lockmanager-fail-closelock' => 'Ulamek an mdel afaylu n uzekṛun i « $1 ».',
'lockmanager-fail-deletelock' => 'Ulamek an mḥu afaylu n uzekṛun i « $1 ».',
'lockmanager-fail-acquirelock' => 'Ulamek an krez azekṛun i « $1 ».',
'lockmanager-fail-openlock' => 'Ulamek an ldi afaylu n uzekṛun i « $1 ».',
'lockmanager-fail-releaselock' => 'Ulamek an bru azekṛun i « $1 ».',
'lockmanager-fail-db-bucket' => 'Ulamek an siwel ddeqs taffa n isefka n usekkweṛ deg uqbuc $1.',
'lockmanager-fail-db-release' => 'Ulamek an bru izekṛunen ɣef taffa n isefka $1.',
'lockmanager-fail-svr-acquire' => 'Ulamek an krez izekṛunen ɣef uqeddac $1.',
'lockmanager-fail-svr-release' => 'Ulamek an bru izekṛunen ɣef uqeddac $1.',

# ZipDirectoryReader
'zip-file-open-error' => 'Yella agul mi d neldi afaylu i senqeden ifuyla zip.',
'zip-wrong-format' => 'Afaylu agi mačči d afaylu n weɣbaṛ ZIP.',
'zip-bad' => 'Afaylu agi d afaylu n weɣbaṛ ameggafsu naɣ ur nezmer ara an ɣaṛ deg-es.
Ur nezmer ara aten selken i taɣellist.',
'zip-unsupported' => 'Afaylu agi d afaylu n weɣbaṛ i seqdacen tiɣariwin ur yeḥemmel ara MediaWiki.
Taɣellist ines ur tezmer ara at illi teseklen.',

# Special:UploadStash
'uploadstash' => 'Tazarkatut n taktert',
'uploadstash-summary' => 'Asebter agi yetefk addaf i ifuyla yekteren (naɣ yesɛan taktert tanazzalt), maca mazal i beqqeḍen deg wiki. Ifuyla agi mazal id banen, ḥaca i useqdac i tni kteren.',
'uploadstash-clear' => 'Sfeḍ ifuyla deg tazarkatut',
'uploadstash-nofiles' => 'Ur tesɛiḍ ara ifuyla deg tazarkatut n taktert',
'uploadstash-badtoken' => 'Aselkem n tigawt agi yexseṛ, ahat acku tilɣa inek/inem n usulu gweḍent ar tasewti nsent. Ɛreḍ tikkelt nniḍen.',
'uploadstash-errclear' => 'Asfeḍ n ifuyla yefkad taruẓi',
'uploadstash-refresh' => 'Mucceḍ umuɣ n ifuyla',
'invalid-chunk-offset' => 'Tiggit n iɣil ur teɣbel ara',

# img_auth script messages
'img-auth-accessdenied' => 'Addaf yugwi',
'img-auth-nopathinfo' => 'Yexus BATH_INFU.
Aqeddac inek/inem ur yeseɣwer ara iwakken ad i ɛeddi talɣut agi.
Ahat i lḥu  s CGI dɣa ur s-yezmer ara i img_auth.
Ẓeṛ https://www.mediawiki.org/wiki/Manual:Image_Authorization.',
'img-auth-notindir' => 'Abrid yesuteren mačči d akaram n taktert yellan deg tawila.',
'img-auth-badtitle' => 'Ulamek an ssali azwel i ɣbelen seg « $1 ».',
'img-auth-nologinnWL' => 'Ur teqqneḍ ara dɣa « $1 » ur yella ara deg umuɣ amellal.',
'img-auth-nofile' => 'Afaylu « $1 » ulac it.',
'img-auth-isdir' => 'Tɛerdeḍ ad ldiḍ akaram « $1 ».
Tzemreḍ kan ad ldiḍ ifuyla.',
'img-auth-streaming' => 'Taɣuri tamaɣlalt n « $1 ».',
'img-auth-public' => 'Tasɣent n img_auth.php tella i ubeqqeḍ n ifuyla n yiwen wiki uslig.
Wiki agi yesɣwer am wiki azayez.
I taɣellist tameqqṛant, img_auth.php yensa.',
'img-auth-noread' => 'Aseqdac ur yesɛa ara azref deg taɣuri ɣef « $1 ».',
'img-auth-bad-query-string' => 'URL tesɛa azrar n tuttra ur i ɣbelen ara.',

# HTTP errors
'http-invalid-url' => 'URL ur teɣbel ara : $1',
'http-invalid-scheme' => 'URL s uzenziɣ « $1 » ur ɣbelen ara d-agi.',
'http-request-error' => 'Anezri warisem deg uceggaɛ n tuttra.',
'http-read-error' => 'Anezri n taɣuri HTTP.',
'http-timed-out' => 'Tuttra HTTP teneffeṛ.',
'http-curl-error' => 'Anezri deg tiririt n URL : $1',
'http-bad-status' => 'Yella ugur deg tuttra HTTP : $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'Ur yezmir ara ad yessglu URL',
'upload-curl-error6-text' => 'Ur yezmir ara ad yessglu URL.  Ssenqed URL-nni.',
'upload-curl-error28' => 'Yekfa wakud n wazen n ufaylu',
'upload-curl-error28-text' => 'Adeg n internet-agi iɛetṭel aṭas. G leɛnayek ssenqed adeg-nni, ggun cwiṭ umbeɛd ɛreḍ tikelt nniḍen.',

'license' => 'Turagt',
'license-header' => 'Turagt',
'nolicense' => 'Ur textareḍ acemma',
'license-nopreview' => '(Azarskan ur yestufa ara)',
'upload_source_url' => ' (URL saḥiḥ)',
'upload_source_file' => ' (afaylu deg uselkim inek)',

# Special:ListFiles
'listfiles-summary' => 'Asebter agi uslig i εemmed ad yefk umu n akkw ifuyla i kteren.',
'listfiles_search_for' => 'Nadi ɣef yisem n tugna:',
'imgfile' => 'afaylu',
'listfiles' => 'Umuɣ n tugniwin',
'listfiles_thumb' => 'Aqmamaḍ',
'listfiles_date' => 'Azemz',
'listfiles_name' => 'Isem',
'listfiles_user' => 'Amseqdac',
'listfiles_size' => 'Tiddi (bytes/octets)',
'listfiles_description' => 'Aglam',
'listfiles_count' => 'Ileqman',
'listfiles-show-all' => 'Sseddu ileqman iqdimen n tugniwin',
'listfiles-latestversion' => 'Lqem amiran',
'listfiles-latestversion-yes' => 'Ih',
'listfiles-latestversion-no' => 'Ala',

# File description page
'file-anchor-link' => 'Afaylu',
'filehist' => 'Amazray n tugna',
'filehist-help' => 'Senned ɣef yiwen azmez d usrag iwakken ad ẓṛeḍ afaylu aken yella deg imir nni.',
'filehist-deleteall' => 'ekkes akkw',
'filehist-deleteone' => 'ekkes',
'filehist-revert' => 'Uɣal ar tasiwelt ssabeq',
'filehist-current' => 'Lux a',
'filehist-datetime' => 'Azmez/Asrag',
'filehist-thumb' => 'Aqmamaḍ',
'filehist-thumbtext' => 'Tugna tamectuḥt i lqem n $1',
'filehist-nothumb' => 'Ulac aqmamaḍ',
'filehist-user' => 'Amseqdac',
'filehist-dimensions' => 'Iseggiwen',
'filehist-filesize' => 'Tiddi n ufaylu',
'filehist-comment' => 'Awennit',
'filehist-missing' => 'Afaylu ulac-it',
'imagelinks' => 'Izdayen',
'linkstoimage' => '{{PLURAL:$1|Asebter agi teseqdac|$1 isebtaren agi teseqdacen}} afaylu agi :',
'linkstoimage-more' => 'Ugar n {{PLURAL:$1|yiwen asebter|$1 isebtar}} tseqdacen afaylu agi.
Umuɣ agi yebeqqeḍ ala {{PLURAL:$1|asebter amezwaru|$1 isebtar imezwura}} i seqdacen afaylu agi.
Yella [[Special:WhatLinksHere/$2|umuɣ ummid]].',
'nolinkstoimage' => 'Ulaḥedd seg isebtar sɛan azday ar afaylu-agi.',
'morelinkstoimage' => 'Ẓeṛ [[Special:WhatLinksHere/$1|izdayen nniḍen]] ɣer afaylu agi.',
'linkstoimage-redirect' => '$1 (allus n wesnili n ufaylu) $2',
'duplicatesoffile' => '{{PLURAL:$1|Afaylu agi d anɣel|Ifuyla agi d ineɣlan}} n ufaylu agi ([[Special:FileDuplicateSearch/$2|tilɣa timarnanin]]) :',
'sharedupload' => 'Afaylu agi yettuseqdac seg : $1. Yezmer ad yettuseqdac deg isenfaṛen nniḍen',
'sharedupload-desc-there' => 'Afaylu agi yussad seg : $1. Yezmer ad yetseqdac sɣur isenfaren nniḍen.
Ẓeṛ [$2 asebter is n uglam] ma tebɣiḍ tilɣa nniḍen.',
'sharedupload-desc-here' => 'Afaylu agi yusad seg : $1. Ahat yeseqdec deg isenfaṛen nniḍen.
Aglam-is ɣef [$2 asebter n aglam] ye beqqeḍ ddaw-agi.',
'sharedupload-desc-edit' => 'Afaylu agi yussad seg : $1. Yezmer ad yetseqdac sɣur isenfaren nniḍen.
Ahat tebɣiḍ ad beddeleḍ aglam is ɣef [$2 asebter is n uglam].',
'sharedupload-desc-create' => 'Afaylu agi yussad seg : $1. Yezmer ad yetseqdac sɣur isenfaren nniḍen.
Ẓeṛ [$2 asebter is n uglam] ma tebɣiḍ tilɣa nniḍen.',
'filepage-nofile' => 'Ulac afaylu s isem agi.',
'filepage-nofile-link' => 'Ulac afaylu s isem agi, maca tzemreḍ ad [$1 ktereḍ yiwen].',
'uploadnewversion-linktext' => 'tazneḍ tasiwelt tamaynut n ufaylu-yagi',
'shared-repo-from' => 'seg : $1',
'shared-repo' => 'azadur azduklan',
'upload-disallowed-here' => 'Ur tzemreḍ ara ad semselsiḍ afaylu agi.',

# File reversion
'filerevert' => 'Erred $1',
'filerevert-legend' => 'Erred afaylu',
'filerevert-intro' => "Ha-ta-n ad uɣaleḍ ar ufaylu  '''[[Media:$1|$1]]''' ar [$4 lqem n $2 af $3].",
'filerevert-comment' => 'Taɣẓint :',
'filerevert-defaultcomment' => 'Uɣaleḍ ar lqem n $1 af $2',
'filerevert-submit' => 'Erred',
'filerevert-success' => "'''[[Media:$1|$1]]''' yuɣaled ar  [$4 lqem n $2 af $3].",
'filerevert-badversion' => 'Ulac, deg udigan, lqem aqbur n ufaylu yesɛan azmez agi.',

# File deletion
'filedelete' => 'Kkes $1',
'filedelete-legend' => 'Kkes asebter',
'filedelete-intro' => "Ha-ta-n ad ekkeseḍ '''[[Media:$1|$1]]'' akkw d umezruy is.",
'filedelete-intro-old' => "Ha-ta-n ad mḥuḍ lqem n '''[[Media:$1|$1]]''' n [$4 $2 af $3].",
'filedelete-comment' => 'Taɣẓint :',
'filedelete-submit' => 'Ekkes',
'filedelete-success' => "'''$1''' yetwekkes.",
'filedelete-success-old' => "Lqem n '''[[Media:$1|$1]]''' n $2 af $3 yetwekkes.",
'filedelete-nofile' => "'''$1''' ulac-it.",
'filedelete-nofile-old' => "Ulac lqem i ɣbeṛen n '''$1''' s ayla agi.",
'filedelete-otherreason' => 'Taɣẓint nniḍen / taɣzint tamarnant :',
'filedelete-reason-otherlist' => 'Taɣẓint nniḍen',
'filedelete-reason-dropdown' => '* Tiɣzinin tillusanin n tukksa n ifuyla
** Akukel n uzref n umeskar
** Afaylu yesɛan anɣel',
'filedelete-edit-reasonlist' => 'Beddel tiɣẓinin n umḥu i-d-yettuɣalen',
'filedelete-maintenance' => 'Tukksa d tiririt n ifuyla yensa (akudan) deg ugani n ibeddi.',
'filedelete-maintenance-title' => 'Ulamek an kkes afaylu',

# MIME search
'mimesearch' => 'Anadi n MIME',
'mimesearch-summary' => 'Asebter-agi yeǧǧa astay n ifayluwen n unaw n MIME ines. Asekcem: ayen yella/anaw azellum, e.g. <code>tugna/jpeg</code>.',
'mimetype' => 'Anaw n MIME:',
'download' => 'Ddem-it ɣer uselkim inek',

# Unwatched pages
'unwatchedpages' => 'Isebtar mebla iɛessasen',

# List redirects
'listredirects' => 'Umuɣ isemmimḍen',

# Unused templates
'unusedtemplates' => 'Talɣiwin mebla aseqdac',
'unusedtemplatestext' => 'Asebter-agi yesɛa umuɣ n akkw isebtar n tallunt isemawen « {{ns:template}} » ur llan ara deg asebter nniḍen.
Ur tettuḍ ara ad selkeneḍ ma ur llan ara izdayen nniḍen ɣer tilɣatin uqbel ad temḥuḍ.',
'unusedtemplateswlh' => 'izdayen wiyaḍ',

# Random page
'randompage' => 'Asebter menwala',
'randompage-nopages' => 'Ulac isebtar deg {{PLURAL:$2|tallunt n isemawen|tallunin n isemawen}} : $1.',

# Random page in category
'randomincategory' => 'Asebtar s ugacur deg taggayt',
'randomincategory-invalidcategory' => '« $1 » mačči d-isem n taggayt yeɣblen.',
'randomincategory-nopages' => 'Ulac asebtar deg [[:Category:$1]].',
'randomincategory-selectcategory' => 'Ddem asebtar s ugacur deg taggayt : $1 $2.',
'randomincategory-selectcategory-submit' => 'Ruḥ',

# Random redirect
'randomredirect' => 'Asemmimeḍ menwala',
'randomredirect-nopages' => 'Ulac asebter n alsanamad deg tallunt n isemawen « $1 ».',

# Statistics
'statistics' => 'Tisnaddanin',
'statistics-header-pages' => 'Tisnaddanin n isebtar',
'statistics-header-edits' => 'Tisnaddanin n ibeddilen',
'statistics-header-views' => 'Tisnaddanin n iskanen',
'statistics-header-users' => 'Tisnaddanin n wemseqdac',
'statistics-header-hooks' => 'Tisnaddanin nniḍen',
'statistics-articles' => 'Isebtar n ugbur',
'statistics-pages' => 'Isebtar',
'statistics-pages-desc' => 'Akkw isebtar n wiki agi, ula d isebtar n umeslay, etc...',
'statistics-files' => 'Ifuyla yettwaznen',
'statistics-edits' => 'Ibeddilen n isebtar seg aserkeb n {{SITENAME}}',
'statistics-edits-average' => 'Amḍan allal n ibeddilen sɣur asebter',
'statistics-views-total' => 'Iskanen',
'statistics-views-total-desc' => 'Timuɣliwin n isebtar ur llan ara dɣa d isebtar usligen ur sseddant ara',
'statistics-views-peredit' => 'Tizra s ubeddel',
'statistics-users' => '[[Special:ListUsers|Iseqdacen]] i siggezen',
'statistics-users-active' => 'Iseqdacen urmiden',
'statistics-users-active-desc' => 'Iseqdacen yesɛan xersum yiwet tigawt seg {{PLURAL:$1|ass agi aneggaru|$1 ussan agi ineggura}}',
'statistics-mostpopular' => 'isebtar mmeẓren aṭṭas',

'pageswithprop' => 'Isebtar s ayla n usebtar',
'pageswithprop-legend' => 'Isebtar s ayla n usebtar',
'pageswithprop-text' => 'Asebtar agi, yefked umuɣ n isebtar yeseqdacen ayla n usebtar amaẓlay',
'pageswithprop-prop' => 'Isem n ayla :',
'pageswithprop-submit' => 'Ruḥ',
'pageswithprop-prophidden-long' => 'azal n ayla n uḍris aɣezfan yeffren ($1)',
'pageswithprop-prophidden-binary' => 'azal n ayla imisin yeffren ($1)',

'doubleredirects' => 'Asemmimeḍ yeḍra snat tikwal',
'doubleredirectstext' => 'Mkull ajerriḍ yesɛa azday ɣer asmimeḍ amezwaru akk d wis sin, ajerriḍ amezwaru n uḍris n usebter wis sin daɣen, iwumi yefkan asmimeḍ ṣaḥiḥ i yessefk ad sɛan isebtar azday ɣur-s.',
'double-redirect-fixed-move' => 'Alsanamud agi, ɣef ayed asaḍas [[$1]] yetwebeddel isem, yetawi tura ɣer [[$2]].',
'double-redirect-fixed-maintenance' => 'Yetseɣtu alsanamud aslag seg [[$1]] ɣer [[$2]].',
'double-redirect-fixer' => 'Aseɣtay n aslanamud',

'brokenredirects' => 'Isemmimḍen imerẓa',
'brokenredirectstext' => 'Isemmimḍen-agi sɛan izdayen ar isebtar ulac-iten :',
'brokenredirects-edit' => 'beddel',
'brokenredirects-delete' => 'mḥu',

'withoutinterwiki' => 'Isebtar war izdayen ager-tutlayin',
'withoutinterwiki-summary' => 'Isebtar agi ur sɛan ara izdayen ɣer tutlayin nniḍen :',
'withoutinterwiki-legend' => 'Adat',
'withoutinterwiki-submit' => 'Ssken',

'fewestrevisions' => 'Isebtar yesɛan cwiṭ ibeddilen',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|byte/octet|bytes/octets}}',
'ncategories' => '$1 {{PLURAL:$1|Taggayt|Taggayin}}',
'ninterwikis' => '$1 {{PLURAL:$1|interwiki|interwikis}}',
'nlinks' => '$1 {{PLURAL:$1|azday|izdayen}}',
'nmembers' => '$1 {{PLURAL:$1|amaslad|imasladen}}',
'nmemberschanged' => '$1 → $2 {{PLURAL:$2|amaslad|imasladen}}',
'nrevisions' => '$1 {{PLURAL:$1|tasiwelt|tisiwal}}',
'nviews' => '$1 {{PLURAL:$1|timeẓriwt|tuẓrin}}',
'nimagelinks' => 'Yetseqdec ɣef $1 {{PLURAL:$1|asebter|isebtar}}',
'ntransclusions' => 'yetseqdec ɣef $1 {{PLURAL:$1|asebter|isebtar}}',
'specialpage-empty' => 'Asebter-agi d ilem.',
'lonelypages' => 'isebtar igujilen',
'lonelypagestext' => 'Isebtar agi ur sweṛen, ur llan deg isebtar nniḍen n {{SITENAME}}.',
'uncategorizedpages' => 'isebtar mebla taggayt',
'uncategorizedcategories' => 'Taggayin mebla taggayt',
'uncategorizedimages' => 'Ifuyla war taggayin',
'uncategorizedtemplates' => 'Talɣiwin mebla taggayt',
'unusedcategories' => 'Taggayin ur nettwaseqdac ara',
'unusedimages' => 'Ifayluwin ur nettwaseqdac ara',
'popularpages' => 'Isebtar iɣerfanen',
'wantedcategories' => 'Taggayin mmebɣant',
'wantedpages' => 'Isebtar mmebɣan',
'wantedpages-badtitle' => 'Azwel ur yeɣbel ara deg igmad : $1',
'wantedfiles' => 'Ifuyla yettwasutren s waṭas.',
'wantedfiletext-cat' => 'Ifuyla agi tseqdacen, maca ulac iten. Ifuyla n izudar agwemmad zemren ad illin deg umuɣ xas llan. Akkw ufrir imkerku ad <del>yetjerreḍ</del>. Isebtar yesɛan ifuyla ur llan ara, ur d-tebanen ara deg [[:$1]].',
'wantedfiletext-nocat' => 'Ifuyla agi tseqdacen, maca ulac iten. Ifuyla n izudar agwemmad zemren ad illin deg umuɣ xas llan. Akkw ufrir imkerku ad <del>yetjerreḍ</del>.',
'wantedtemplates' => 'Talɣiwin yetsuteren',
'mostlinked' => 'Isebtar myezdin aṭas',
'mostlinkedcategories' => 'Taggayin myezdint aṭas',
'mostlinkedtemplates' => 'Talɣiwin yetseqdacen aṭas.',
'mostcategories' => 'Isebtar i yesɛan aṭṭas taggayin',
'mostimages' => 'Ifuyla i seqdacen aṭas',
'mostinterwikis' => 'Isebtar yesɛan aṭas interwikis',
'mostrevisions' => 'Isebtar i yettubedlen aṭas',
'prefixindex' => 'Akk isebtaren s yisekkilen imezwura',
'prefixindex-namespace' => 'Akkw isebtar s adat (tallunt n isemawe $1)',
'prefixindex-strip' => 'Ekkes azwir deg umuɣ',
'shortpages' => 'isebtar imecṭuḥen',
'longpages' => 'Isebtar imeqqranen',
'deadendpages' => 'isebtar mebla izdayen',
'deadendpagestext' => 'Isebtar agi ur sɛan ara izdayen ɣer isebtar nniḍen n {{SITENAME}}.',
'protectedpages' => 'isebtar yettwaḥerzen',
'protectedpages-indef' => 'Imestenen imeɣlalen kan',
'protectedpages-cascade' => 'Imestenen s uceṛcuṛ kan',
'protectedpages-noredirect' => 'Ffer isemmimḍen',
'protectedpagesempty' => 'isebtar-agi ttwaḥerzen s imsektayen -agi.',
'protectedtitles' => 'Izwal ugdilen',
'protectedtitlesempty' => 'Ulac azwel yesɛan asegdel s iɣewwaren agi.',
'listusers' => 'Umuɣ n yimseqdacen',
'listusers-editsonly' => 'Sekned kan iseqdacen yesɛan asekcem naɣ ugar',
'listusers-creationsort' => 'Fren s azmez n usnulfu',
'listusers-desc' => 'Fren deg amizzwer amadar',
'usereditcount' => '$1 {{PLURAL:$1|abeddel|ibeddilen}}',
'usercreated' => '{{GENDER:$3|Yesnulfu-d}} ass n $1 ar $2',
'newpages' => 'isebtar imaynuten',
'newpages-username' => 'Isem n wemseqdac:',
'ancientpages' => 'isebtar iqdimen',
'move' => 'Smimeḍ',
'movethispage' => 'Smimeḍ asebter-agi',
'unusedimagestext' => 'Ifuyla agi llan, maca ulac asebter anda llan.
Ahat llan ismal nniḍen yesɛan azday ɣer afaylu, ihi yezmer ad yiqqim afaylu d agi dɣa ad yetseqdac deg ismal nni.',
'unusedcategoriestext' => 'Taggayin-agi weǧden meɛna ulac isebtar neɣ taggayin i sseqdacen-iten.',
'notargettitle' => 'Ulac nnican',
'notargettext' => 'Ur textareḍ ara asebter d nnican neɣ asebter n wemseqdac d nnican.',
'nopagetitle' => 'Ulac asebter asaḍas am wagi',
'nopagetext' => 'Asebter asaḍas agi ulac-it.',
'pager-newer-n' => '{{PLURAL:$1|amaynut|$1 imaynuten}}',
'pager-older-n' => '{{PLURAL:$1|aqbur|$1 iqburen}}',
'suppress' => 'Mdi',
'querypage-disabled' => 'Asebter uslig agi yensa , taɣzint : timellal is.',

# Book sources
'booksources' => 'Iɣbula n yidlisen',
'booksources-search-legend' => 'Nadi ɣef iɣbula n yidlisen',
'booksources-go' => 'Ruḥ',
'booksources-text' => 'Deg ukessar, yella wumuɣ n yizdayen iberraniyen izzenzen idlisen (imaynuten akk d weqdimen), yernu ahat sɛan kter talɣut ɣef idlisen i tettnadiḍ fell-asen:',
'booksources-invalid-isbn' => 'ISBN agi ur yeɣbel ara ; selken ma ulac anezri deg-es.',

# Special:Log
'specialloguserlabel' => 'Ameskar :',
'speciallogtitlelabel' => 'Asaḍas (azwel naɣ aseqdac) :',
'log' => 'Aɣmis',
'all-logs-page' => 'Akk iɣmisen izayezen',
'alllogstext' => 'Abeqqeḍ n akkw iɣmisen yestufan ɣef {{SITENAME}}.<br />
Tzemreḍ ad sageneḍ abeqqeḍ s tixtiṛit n tawsit n uɣmis, isem n useqdac naɣ asebter nni.',
'logempty' => 'Ur yufi ara deg uɣmis.',
'log-title-wildcard' => 'Nadi ɣef izwal i yebdan s uḍris-agi',
'showhideselectedlogentries' => 'Beqqeḍ/ffer isekcam n uɣmis agi',

# Special:AllPages
'allpages' => 'Akk isebtar',
'alphaindexline' => '$1 ar $2',
'nextpage' => 'Asebter ameḍfir ($1)',
'prevpage' => 'Asebter ssabeq ($1)',
'allpagesfrom' => 'Ssken isebtar seg:',
'allpagesto' => 'Beqqeḍ isebtar alama :',
'allarticles' => 'Akk imagraden',
'allinnamespace' => 'Akk isebtar ($1 isem n taɣult)',
'allpagessubmit' => 'Ruḥ',
'allpagesprefix' => 'Ssken isebtar s uzwir:',
'allpagesbadtitle' => 'Azwel n usebter mačči ṣaḥiḥ neɣ yesɛa azwir inter-wiki. Waqila yesɛa isekkilen ur ttuseqdacen ara deg izwal.',
'allpages-bad-ns' => '{{SITENAME}} ur yesɛi ara isem n taɣult "$1".',
'allpages-hide-redirects' => 'Ffer isemmimḍen',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Tetwaliḍ lqem n usebter agi yellan deg tazarkatut, lqem agi yezmer ad i sɛu alama d $1.',
'cachedspecial-viewing-cached-ts' => 'Tetwaliḍ lqem n usebter agi yellan deg tazarkatut, ahat ur yemucceḍ ara.',
'cachedspecial-refresh-now' => 'Ẓeṛ aneggaru.',

# Special:Categories
'categories' => 'Taggayin',
'categoriespagetext' => '{{PLURAL:$1|Taggayt agi teseqdec|Taggayin agi teseqdecet}} sɣur isebtar naɣ ifuyla.
[[Special:UnusedCategories|Taggayin ur sɛan ara aqeddic]]
Ẓeṛ daɣen [[Special:WantedCategories|taggayin yetwesuteren]].',
'categoriesfrom' => 'Ssken taggayin seg :',
'special-categories-sort-count' => 'Afran s amḍan n iferdisen',
'special-categories-sort-abc' => 'afran s ugemmay',

# Special:DeletedContributions
'deletedcontributions' => 'Isekcam yemḥan',
'deletedcontributions-title' => 'Isekcam yemḥan',
'sp-deletedcontributions-contribs' => 'Isekcam',

# Special:LinkSearch
'linksearch' => 'Anadi n izdayen yeffɣen',
'linksearch-pat' => 'Anadi n tanfalit :',
'linksearch-ns' => 'Talluntin n isemawen :',
'linksearch-ok' => 'Nadi',
'linksearch-text' => 'Isekkilen imeẓliyen am « *.wikipedia.org » zemren ad wetseqdecen.
Ilaq-asen deg udday taɣult n uswir imineg, am amedya « *.org ».<br />
{{PLURAL:$2|Aneggaf yettwaɛqelen|Ineggafen yettwaɛqelen}}: <code>$1</code> (http:// s lexṣas ma ulac aneggaf).',
'linksearch-line' => '$1 yeqqen seg $2',
'linksearch-error' => 'Tzemreḍ ad seqdeceḍ isekkilen usligen ala deg tazzwara n taɣult uselkim.',

# Special:ListUsers
'listusersfrom' => 'Ssken imseqdacen seg:',
'listusers-submit' => 'Ssken',
'listusers-noresult' => 'Ur yufi ḥedd (amseqdac).',
'listusers-blocked' => '(yekyef)',

# Special:ActiveUsers
'activeusers' => 'Umuɣ n iseqdacen urmiden',
'activeusers-intro' => 'Wagi d umuɣ n iseqdacen yexedmen armud deg {{PLURAL:$1|ass agi aneggaru|$1 ussan agi ineggura}}.',
'activeusers-count' => '$1 {{PLURAL:$1|tigawt|tigawin}} deg {{PLURAL:$3|ass aneggaru|$3 ussan ineggura}}',
'activeusers-from' => 'Ssken iseqdacen seg :',
'activeusers-hidebots' => 'Ffer iṛubuten',
'activeusers-hidesysops' => 'Ffer inedbalen',
'activeusers-noresult' => 'Ur yufi aseqdac.',

# Special:ListGroupRights
'listgrouprights' => 'Izerfan n igrawen n iseqdacen',
'listgrouprights-summary' => 'Asebter agi yesɛa yiwen umuɣ n igrawen i sengelen deg wiki agi dɣa izerfan n wadduf i qqenen.
Zemrent ad ilint [[{{MediaWiki:Listgrouprights-helppage}}|tilɣa nniḍen]] ɣef izerfan n yiwen.',
'listgrouprights-key' => 'Aglam :
*<span class="listgrouprights-granted">Izerfan sefkan</span>
*<span class="listgrouprights-revoked">Izerfan ekkesen</span>',
'listgrouprights-group' => 'Agraw',
'listgrouprights-rights' => 'Izerfan',
'listgrouprights-helppage' => 'Help:Izerfan n igrawen',
'listgrouprights-members' => '(umuɣ n imseqdacen)',
'listgrouprights-addgroup' => 'Rnu iεeggalen i {{PLURAL:$2|ugraw|igrawen}} : $1',
'listgrouprights-removegroup' => 'Ekkes iεeggalen i {{PLURAL:$2|ugraw|igrawen}} : $1',
'listgrouprights-addgroup-all' => 'Rnu iεeggalen i akkw igrawen',
'listgrouprights-removegroup-all' => 'Ekkes iεeggalen i akkw igrawen',
'listgrouprights-addgroup-self' => 'Yezmer ad yernu {{PLURAL:$2|agraw|igrawen}} ar umiḍan-is : $1',
'listgrouprights-removegroup-self' => 'Yezmer ad yekkes {{PLURAL:$2|agraw|igrawen}} ar umiḍan-is : $1',
'listgrouprights-addgroup-self-all' => 'Yezmer ad yernu akkw igrawen ar umiḍan-is',
'listgrouprights-removegroup-self-all' => 'Yezmer ad yekkes akkw igrawen ar umiḍan-is',

# Email user
'mailnologin' => 'Ur yufi ḥedd (tansa)',
'mailnologintext' => 'Yessefk ad [[Special:UserLogin|tkecmeḍ]] u tesɛiḍ tansa e-mail ṭaṣhiḥt deg [[Special:Preferences|isemyifiyen]] inek
iwakken ad tazneḍ email i imseqdacen wiyaḍ.',
'emailuser' => 'Azen e-mail i wemseqdac-agi',
'emailuser-title-target' => 'Ceggaɛ tirawt i {{GENDER:$1|aseqdac agi|taseqdact agi}}',
'emailuser-title-notarget' => 'Ceggaɛ tirawt i useqdac',
'emailpage' => 'Ceggaɛ tirawt i useqdac',
'emailpagetext' => 'Tzemreḍ ad seqdeceḍ tiferkit ddaw agi iwakken ad ceggɛeḍ tirawt i {{GENDER:$1|umseqdac|tamseqdact}} agi.
Tansa e-mail id ekfeḍ deg [[Special:Preferences|iɣewwaren inek/inem]] ad tban deg urti "Amceggaɛ" n izen ; akka, anermas ad yezmer ak/akem yefk tiririt.',
'usermailererror' => 'Yella ugul deg uzwel n email:',
'defemailsubject' => '{{SITENAME}} tirawt n useqdac « $1 »',
'usermaildisabled' => 'Aceggaɛ n tira gar iseqdacen yensa',
'usermaildisabledtext' => 'Ur tzermeḍ ara ad ceggeɛeḍ tira i iseqdacen nniḍen ɣef wiki agi',
'noemailtitle' => 'E-mail ulac-it',
'noemailtext' => 'Aseqdac-agi ur d-yefka ara tansa e-mail iɣbelen.',
'nowikiemailtitle' => 'Ulac turagt i e-mail',
'nowikiemailtext' => 'Aseqdac agi ur yebɣa ara ad yeṭṭef tirawt sɣur iseqdacen nniḍen.',
'emailnotarget' => 'Isem useqdac n unermas ur yella ara naɣ ur yeɣbel ara.',
'emailtarget' => 'Sekcem isem useqdac n unermas',
'emailusername' => 'Isem n useqdac',
'emailusernamesubmit' => 'Sumer',
'email-legend' => 'Ceggaɛ tirawt i yiwen useqdac nniḍen n {{SITENAME}}',
'emailfrom' => 'Seg :',
'emailto' => 'I :',
'emailsubject' => 'Asentel :',
'emailmessage' => 'Izen :',
'emailsend' => 'Azen',
'emailccme' => 'Azen-iyi-d e-mail n ulsaru n izen inu.',
'emailccsubject' => 'Alsaru n izen inek i $1: $2',
'emailsent' => 'E-mail yettwazen',
'emailsenttext' => 'Izen n e-mail inek yettwazen.',
'emailuserfooter' => 'Tirawt agi tetweceggaɛ sɣur « $1 » i « $2 » s tasɣent "Ceggaɛ tirawt i useqdac" n {{SITENAME}}.',

# User Messenger
'usermessage-summary' => 'Yeǧǧa-d izen anagraw',
'usermessage-editor' => 'Ameskar n unagraw',

# Watchlist
'watchlist' => 'Umuɣ n uɛessi',
'mywatchlist' => 'Umuɣ n uɛessi',
'watchlistfor2' => 'I $1 $2',
'nowatchlist' => 'Umuɣ n uɛessi inek d ilem.',
'watchlistanontext' => 'G leɛnaya-k $1 iwakken ad twalaḍ neɣ tbeddleḍ iferdas deg wumuɣ n uɛessi inek.',
'watchnologin' => 'Ur tekcimeḍ ara',
'watchnologintext' => 'Yessefk ad [[Special:UserLogin|tkecmeḍ]] iwakken ad tbeddleḍ umuɣ n uɛessi inek.',
'addwatch' => 'Rnu i umuɣ n uɛassi',
'addedwatchtext' => 'Asebter "[[:$1]]" yettwarnu deg [[Special:Watchlist|wumuɣ n uḍfar]] inek/inem.
Ibeddlen id-yetteddun deg usebter-agi neɣ deg usbtar umyennan ines, ad banen dagi.',
'removewatch' => 'Ekkes seg umuɣ n uɛassi',
'removedwatchtext' => '!!Asebter "[[:$1]]" yettwakkes seg [[Special:Watchlist|umuɣ n uɛessi]] inek.',
'watch' => 'Ɛass',
'watchthispage' => 'Ɛass asebter-agi',
'unwatch' => 'Fakk aɛassi',
'unwatchthispage' => 'Fakk aɛassi',
'notanarticle' => 'Mačči d amagrad',
'notvisiblerev' => 'Lqem tetwemḥa',
'watchlist-details' => 'ttɛassaɣ {{PLURAL:$1|$1 usebter|$1 n isebtaren}} mebla isebtaren "amyannan".',
'wlheader-enotif' => 'Talɣut s email yessermed.',
'wlheader-showupdated' => "Isebtar ttubeddlen segwasmi tkecmeḍ tikelt taneggarut ttbanen-d s uḍris '''aberbuz'''.",
'watchmethod-recent' => 'yessenqed ibeddlen imaynuten n isebtar i ttɛasseɣ',
'watchmethod-list' => 'yessenqed isebtar i ttɛassaɣ i ibeddlen imaynuten',
'watchlistcontains' => 'Umuɣ n uɛessi inek ɣur-s $1 n {{PLURAL:$1|usebter|isebtar}}.',
'iteminvalidname' => "Agnu akk d uferdis '$1', isem mačči ṣaḥiḥ...",
'wlnote2' => 'Ddaw agi ibeddilen deg {{PLURAL:$1|asrag aneggaru|<strong>$1</strong> isragen ineggura}}, seg $2, $3.',
'wlshowlast' => 'Ssken $1 n swayeɛ $2 n wussan neɣ $3 ineggura',
'watchlist-options' => 'Tifranin n umuɣ n uɛessi',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Ad iɛass...',
'unwatching' => 'Ad ifukk aɛessi...',
'watcherrortext' => 'Yella anezri imi tebeddeleḍ iɣewwaren n umuɣ inek/inem n uɛassi i « $1 ».',

'enotif_mailer' => 'Email n talɣut n {{SITENAME}}',
'enotif_reset' => 'Rcem akk isebtar mmeẓren',
'enotif_impersonal_salutation' => 'Amseqdac n {{SITENAME}}',
'enotif_subject_deleted' => 'Asebtar $1 ɣef {{SITENAME}} yetwakkes sɣur {{GENDER:$2|$2}}',
'enotif_subject_created' => 'Asebtar $1 ɣef {{SITENAME}} yetwaxleq sɣur {{GENDER:$2|$2}}',
'enotif_subject_moved' => 'Asebtar $1 ɣef {{SITENAME}} yetwabeddel isem sɣur {{GENDER:$2|$2}}',
'enotif_subject_restored' => 'Asebtar $1 ɣef {{SITENAME}} yetwerr sɣur {{GENDER:$2|$2}}',
'enotif_subject_changed' => 'Asebtar $1 ɣef {{SITENAME}} yetwabeddel sɣur {{GENDER:$2|$2}}',
'enotif_body_intro_deleted' => 'Asebtar $1 ɣef {{SITENAME}} yetwasfeḍ ass n $PAGEEDITDATE sɣur {{GENDER:$2|$2}}, zeṛ $3 i lqem amiran',
'enotif_body_intro_created' => 'Asebtar $1 ɣef {{SITENAME}} yetwaxleq ass n $PAGEEDITDATE sɣur {{GENDER:$2|$2}}, zeṛ $3 i lqem amiran.',
'enotif_body_intro_moved' => 'Asebtar $1 ɣef {{SITENAME}} yetwabeddel isem ass n $PAGEEDITDATE sɣur {{GENDER:$2|$2}}, zeṛ $3 i lqem amiran.',
'enotif_body_intro_restored' => 'Asebtar $1 ɣef {{SITENAME}} yetwerr ass n $PAGEEDITDATE sɣur {{GENDER:$2|$2}}, zeṛ $3 i lqem amiran.',
'enotif_body_intro_changed' => 'Asebtar $1 ɣef {{SITENAME}} yetwabeddel ass n $PAGEEDITDATE sɣur {{GENDER:$2|$2}}, zeṛ $3 i lqem amiran.',
'enotif_lastvisited' => 'Ẓer $1 i akk ibeddlen segwasmi tkecmeḍ tikelt taneggarut.',
'enotif_lastdiff' => 'Ẓer $1 akken ad tmuqleḍ abeddel.',
'enotif_anon_editor' => 'aseqdac ur i siggezen ara $1',
'enotif_body' => 'Ay $WATCHINGUSERNAME,

$PAGEINTRO $NEWPAGE

Agzul n umttekki  : $PAGESUMMARY $PAGEMINOREDIT

Meslay s umttekki :
e-mail : $PAGEEDITOR_EMAIL
wiki : $PAGEEDITOR_WIKI

Ur yelli ara email n talɣut asmi ad illin ibeddlen deg usebter ala lukan tekcmeḍ deg usebtar-agi sakin teqqneḍ. Tzemreḍ ad wennezeḍ tikbabin n talɣut i akkw isebtar yellan deg umuɣ inek/inem n uḍfar.

Anagraw inek/inem n talɣut n {{SITENAME}}

--
Iwakken ad beddeleḍ iɣewwaren n talɣut deg tirawt, ẓeṛ
{{canonicalurl:{{#special:Preferences}}}}

Iwakken ad beddeleḍ iɣewwaren n umuɣ inek/inem n uḍfar, ẓeṛ
{{canonicalurl:{{#special:EditWatchlist}}}}

Iwakken ad mḥuḍ asebtar deg umuɣ inek/inem n uḍfar, ẓeṛ
$UNWATCHURL

Tuɣalin d tadhelt :
{{canonicalurl:{{MediaWiki:Helppage}}}}',
'created' => 'yettwaxleq',
'changed' => 'yettubeddel',

# Delete
'deletepage' => 'Mḥu asebter',
'confirm' => 'Sentem',
'excontent' => "Ayen yella: '$1'",
'excontentauthor' => "Ayen yella: '$1' ('[[Special:Contributions/$2|$2]]' kan i yekken deg-s)",
'exbeforeblank' => "Ayen yella uqbal ma yettumḥa: '$1'",
'exblank' => 'asebter yella d ilem',
'delete-confirm' => 'Kkes "$1"',
'delete-legend' => 'Ekkes',
'historywarning' => 'Ɣur-wet : Asebter i ara temḥuḍ yesɛa amezruy s azal alemmas n $1 {{PLURAL:$1|lqem|ileqman}} :',
'confirmdeletetext' => 'Aqlak ad mḥuḍ asebter naɣ afaylu, dɣa akkw ileqman-is iqdimen. Ilaq ad segegeḍ tigawt agi dɣa tfehemeḍ [[{{MediaWiki:Policy-url}}|ilugan n wiki]].',
'actioncomplete' => 'Axdam yekfa',
'actionfailed' => 'Tigawt agi texser',
'deletedtext' => '"$1" yettumḥa.
Ẓer $2 i aɣmis n yimḥayin imaynuten.',
'dellogpage' => 'Aɣmis n umḥay',
'dellogpagetext' => 'Deg ukessar, yella wumuɣ n yimḥayin imaynuten.',
'deletionlog' => 'Aɣmis n umḥay',
'reverted' => 'Asuɣal i tasiwel taqdimt',
'deletecomment' => 'Ayɣer',
'deleteotherreason' => 'Taɣẓint nniḍen / taɣzint tamarnant :',
'deletereasonotherlist' => 'Taɣẓint nniḍen',
'deletereason-dropdown' => '* Tiɣẓinin n umḥu id t-uɣalen aṭas tikkwal
** Spam
** Ixṣaren
** Akukel n Copyright
** Asuter n useqdac
** Azday yerẓan',
'delete-edit-reasonlist' => 'Beddel tiɣẓinin n umḥu n usebter',
'delete-toobig' => 'Asebter agi yesɛa amezruy ameqqṛan aṭas n ibeddilen, yugar $1 {{PLURAL:$1|lqem|ileqman}}.
Amḥu n isebtar am wagi yesɛa akref iwakken {{SITENAME}} ur yesɛu ara arway.',
'delete-warning-toobig' => 'Asebtar agi yesɛa amezruy axatar n ibeddilen, ugaren $1 {{PLURAL:$1|lqem|ileqman}}.
Tukksa-s tezmer ad terwi tiddit n taffa n isefka n {{SITENAME}} ;
ilaq ad seqdeceḍ s-leɛqel.',
'deleting-backlinks-warning' => "'''Ɣur-wet :''' Isebtar nniḍen sɛan azday ɣer asebtar i tebɣiḍ ad ekkeseḍ.",

# Rollback
'rollback' => 'Semmet ibeddilen',
'rollback_short' => 'Semmet',
'rollbacklink' => 'semmet',
'rollbacklinkcount' => 'semmet $1 {{PLURAL:$1|abeddel|ibeddilen}}',
'rollbacklinkcount-morethan' => 'semmet ugar n $1 {{PLURAL:$1|abeddel|ibeddilen}}',
'rollbackfailed' => 'Asemmet yexseṛ',
'cantrollback' => 'Ur yezmir ara ad yessuɣal; yella yiwen kan amseqdac iwumi ibeddel/yexleq asebter-agi.',
'alreadyrolled' => 'Ulamek an semmet abeddel aneggaru n usebtar « [[:$1]] » yetwaxeddemen sɣur [[User:$2|$2]] ([[User talk:$2|Mmeslay]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]) ;
wayeḍ nniḍen yebeddel yakan neɣ yesemmet asebtar nni.

Abeddel aneggaru n usebtar yetwaxeddemen sɣur [[User:$3|$3]] ([[User talk:$3|Discuter]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "Agzul n ubeddel yella: \"''\$1''\".",
'revertpage' => 'Yessuɣal ibeddlen n [[Special:Contributions/$2|$2]] ([[User talk:$2|Meslay]]); yettubeddel ɣer tasiwelt taneggarut n [[User:$1|$1]]',
'revertpage-nouser' => 'Tiririt n ibeddilen sur amseqdac yeffren ar lqem aneggaru sɣur {{GENDER:$1|[[User:$1|$1]]}}',
'rollback-success' => 'Asemmet n ibeddilen yetwaxeddemen sɣur $1 ;
tuqqla ar lqem aneggaru sɣur $2.',

# Edit tokens
'sessionfailure-title' => 'Anezri n tɣimit',
'sessionfailure' => 'Yella ugul akk d takmect inek;
Axdam-agi yebṭel axaṭer waqila yella wemdan nniḍen i yeddem isem n wemseqdac inek.
G leɛnayek wekki ɣef taqeffalt "Back/Précédent" n browser/explorateur inek, umbeɛd wekki ɣef "Actualiser/reload" akk ad tɛerḍeḍ tikelt nniḍen.',

# Protect
'protectlogpage' => 'Aɣmis n wemḥay',
'protectlogtext' => 'Atan umuɣ n ibeddilen n immestan n isebtar.
Zeṛ [[Special:ProtectedPages|umuɣ n isebtar yettwaḥerzen]] i umuɣ n immestan timiranin.',
'protectedarticle' => '"[[$1]]" yettwaḥrez',
'modifiedarticleprotection' => 'yebeddel aswir n usegdel n « [[$1]] »',
'unprotectedarticle' => 'yekkes asegdel n « [[$1]] »',
'movedarticleprotection' => 'yesiweḍ iɣewwaren n usegdel seg « [[$2]] » ɣer « [[$1]] »',
'protect-title' => 'Beddel aswir n usegdel i "$1"',
'protect-title-notallowed' => 'Ẓeṛ aswir n usegdel n « $1 »',
'prot_1movedto2' => '[[$1]] yettusmimeḍ ar [[$2]]',
'protect-badnamespace-title' => 'Tallunt n isemawen ur nezmer ara an segdel',
'protect-badnamespace-text' => 'Isebtar deg tallunt agi n isemawen ur zemren ara ad sɛun asegdel.',
'protect-norestrictiontypes-text' => 'Asebtar agi ur yezmer ara ad yettwaḥerzen acku ulac tawsit n usewḥel yestufan.',
'protect-norestrictiontypes-title' => 'Asebtar ur yettwaḥerzen ara',
'protect-legend' => 'Sentem tiḥḥerzi',
'protectcomment' => 'Taɣẓint :',
'protectexpiry' => 'Azmez n tasewti :',
'protect_expiry_invalid' => 'Azmez n tasewti ur yeɣbel ara.',
'protect_expiry_old' => 'Azmez n tasewti i ɛedda.',
'protect-unchain-permissions' => 'Kkes aseḍru i aṭas n tixtiṛiyin n usegdel',
'protect-text' => "Tzemreḍ ad zṛeḍ dɣa ad beddeleḍ aswir n ummesten n usebtar '''$1'''.",
'protect-locked-blocked' => "Ur tzemreḍ ara ad beddeleḍ iswiren n ummesten skud tewḥeleḍ.
Zeṛ iɣewwaren imiranen n usebtar '''$1''' :",
'protect-locked-dblock' => "Aswir n ummesten ur yezmer ara ad yetbeddel acku taffa n isefka tesekkweṛ.
Zeṛ iɣewwaren imiranen n usebtar '''$1''' :",
'protect-locked-access' => "Ur tesɛiḍ ara izerfan iḍulliyen iwakken ad beddeleḍ iswiren n ummesten n isebtar.
Zeṛ iɣewwaren imiranen n usebtar '''$1''' :",
'protect-cascadeon' => 'Asebtar agi yettwaḥerz acku yessedda-d deg {{PLURAL:$1|usebtar uḍfiṛ, yettwaḥerzen|isebtar uḍfiṛ, yettwaḥerzen}} s taxtiṛit « ammesten s uceṛcuṛ » yessermeden. Tzemreḍ ad beddeleḍ aswir n ummesten n usebtar agi war ad yebeddel ammesten s uceṛcuṛ.',
'protect-default' => '(ameslugen)',
'protect-fallback' => 'Ssireg kan imseqdacen s uzref « $1 »',
'protect-level-autoconfirmed' => 'Ssireg kan imseqdacen i sergegen iman-nsen',
'protect-level-sysop' => 'Ssireg inedbalen kan',
'protect-summary-cascade' => 'acercur',
'protect-expiring' => 'yemmut deg $1 (UTC)',
'protect-expiring-local' => 'ad i neffeṛ ass n $1',
'protect-expiry-indefinite' => 'ifeḍ',
'protect-cascade' => 'Mmesten isebtar i sseddan deg ttagi (ammesten s uceṛcuṛ)',
'protect-cantedit' => 'Ur tzemreḍ ara ad beddeleḍ iswiren n ummesten n usebtar agi acku ur tesɛiḍ ara turagt att beddeleḍ.',
'protect-othertime' => 'Azmez nniḍen n tasewti :',
'protect-othertime-op' => 'azmez nniḍen n tasewti',
'protect-existing-expiry' => 'Yella azmez n tasewti : $2 af $3',
'protect-otherreason' => 'Taɣẓint nniḍen / taɣzint tamarnant :',
'protect-otherreason-op' => 'Taɣẓint nniḍen',
'protect-dropdown' => '* Tiɣẓinin n ummesten tunnimin
** Axṣar s uzerray
** Emails yerkan
** Ccwal n ibeddilen yellan mgal-tiffursa
** Asebtar s uɛeddi ameqran',
'protect-edit-reasonlist' => 'Beddel tiɣẓinin n usegdel',
'protect-expiry-options' => '1 asrag:1 hour,1 ass:1 day,1 imalas:1 week,2 imalasen:2 weeks,1 aggur:1 month,3 agguren:3 months,6 agguren:6 months,1 assegwas:1 year,adfi:infinite',
'restriction-type' => 'Turagt',
'restriction-level' => 'Aswir n ukrif :',
'minimum-size' => 'Tiddi minimum',
'maximum-size' => 'Tiddi tafellayt',
'pagesize' => '(atamḍan)',

# Restrictions (nouns)
'restriction-edit' => 'Beddel',
'restriction-move' => 'Smimeḍ',
'restriction-create' => 'Snulfu',
'restriction-upload' => 'Taktert n ifuyla',

# Restriction levels
'restriction-level-sysop' => 'asegdel ummid',
'restriction-level-autoconfirmed' => 'adu-asegdel',
'restriction-level-all' => 'akkw aswir',

# Undelete
'undelete' => 'Ẓer isebtar yettumḥan',
'undeletepage' => 'Ẓeṛ dɣa erred isebtar yetwekkesen',
'undeletepagetitle' => "'''Umuɣ agi yesɛa ileqman yetwekkesen n [[:$1|$1]]'''.",
'viewdeletedpage' => 'Ẓer isebtar yettumḥan',
'undeletepagetext' => '{{PLURAL:$1|Asebtar agi uḍfiṛ yetwekkes, tura atan|Isebtar agi uḍfiṛen tetwekkesen, tura aten-id}} deg taffa n isefka n
weɣbaṛ, anda {{PLURAL:$1|yezmer ad yesɛu tiririt|zemren ad sɛun tiririt}}.
Aɣbaṛ yezmer ad yetssizedig s tallit.',
'undelete-fieldset-title' => 'Erred ileqman',
'undeleteextrahelp' => "Iwakken ad erreḍ amezruy ummid n usebtar agi, ilaq ad eǧǧeḍ akkw tinkulin war amidag dɣa senned ɣef '''''Tiririt'''''.
Iwakken ad xeddemeḍ tiririt i yiwen aḥric kan, rnud amidag deg tinkulin n ileqman i tebɣiḍ ad erreḍ, dɣa senned ɣef '''''Tiririt'''''.",
'undeleterevisions' => '$1 {{PLURAL:$1|lqem i ɣbeṛen|ileqman i ɣbeṛen}}',
'undeletehistory' => 'Ma tebɣiḍ ad erreḍ asebtar, akkw ileqman ad erren deg umezruy.
Ma asebtar amaynut yexelqed s isem am winna seg tukksa, ileqman yetwerran ad illin beqqeḍen deg umezruy uzwir dɣa lqem amiran ur d yetbeddel ara s uwurman.',
'undeleterevdel' => 'Tiririt ur tezmer ara att illi ma, Deg tagara, lqem aneggaru n usebtar neɣ n ufaylu ad yeqqim yetwakkes s uzgen.
Deg tajṛut am ttagi, ilaq ad ekkseḍ amidag deg tankult neɣ ad ekkseḍ tagelmust ileqman ineggura yetumḥan (deg uqerru n umuɣ).',
'undeletehistorynoadmin' => 'Asebtar agi yetwekkes.
Taɣzint n tukksa att affeḍ deg ugzul ddaw-agi, s ttfaṣil n imseqdacen i tbeddelen uqbel ad yetwekkes.
Agbur n ileqman yetwekksen ad wettwadaf kan i inedbalen.',
'undelete-revision' => 'Lqem yetwekksen n $1 (lqem n $4 af $5) sɣur $3 :',
'undeleterevision-missing' => 'Lqem arameɣtu neɣ ulac-it.
Ahat tesɛiḍ azday arameɣtu, neɣ lqem yetwerr neɣ yetwekkes seg aɣbaṛ.',
'undelete-nodiff' => 'Ur d-n-uffa ara lqem aneggaru.',
'undeletebtn' => 'Err-it',
'undeletelink' => 'ẓeṛ/uɣaled',
'undeleteviewlink' => 'ẓeṛ',
'undeleteinvert' => 'Snegdam ayen textareḍ',
'undeletecomment' => 'Taɣẓint :',
'undeletedrevisions' => '$1 {{PLURAL:$1|lqem yetwerren|ileqman yetwerren}}',
'undeletedrevisions-files' => '$1 {{PLURAL:$1|lqem|ileqman}} d $2 {{PLURAL:$2|afaylu|ifuyla}} {{PLURAL:$2|yetwerr|twerren}}',
'undeletedfiles' => '$1 {{PLURAL:$1|afaylu yetwerr|ifuyla twerren}}',
'cannotundelete' => 'Abrir n tiririt :
$1',
'undeletedpage' => "'''Asebtar $1 yetwerr.'''

Zeṛ [[Special:Log/delete|aɣmis n tukksiwin]] iwakken ad zṛeḍ umuɣ n tukksiwin d tiririyin timaynutin.",
'undelete-header' => 'Ẓer [[Special:Log/delete|aɣmis n umḥay]] i isebtar ttumḥan tura.',
'undelete-search-title' => 'Nadi ɣef isebtar yettumḥan',
'undelete-search-box' => 'Nadi ɣef isebtar yettumḥan',
'undelete-search-prefix' => 'Ssken isebtar i yebdan s:',
'undelete-search-submit' => 'Nadi',
'undelete-no-results' => 'Ur yufi ara ulaḥedd n wawalen i tnadiḍ ɣef isebtar deg iɣbaren.',
'undelete-filename-mismatch' => 'Ulamek an err lqem n ufaylu n wass n $1 : isem n ufaylu ur yezga ara.',
'undelete-bad-store-key' => 'Ulamek an err lqem n ufaylu n wass n $1 : afaylu ulac-it uqbel tukksa.',
'undelete-cleanup-error' => 'Tuccḍa deg tukksa n ufaylu n weɣbaṛ ur yetseqdacen ara « $1 ».',
'undelete-missing-filearchive' => 'Ulamek an err afaylu n weɣbaṛ s tamagit $1 acku ulac it deg taffa n isefka.
Ahat yetwerr yakan.',
'undelete-error' => 'Asebtar n tuccḍa n usemmet',
'undelete-error-short' => 'Tuccḍa deg tiririt n ufaylu : $1',
'undelete-error-long' => 'LLant tuccḍiwin deg tiririt n ufaylu:

$1',
'undelete-show-file-confirm' => 'Tebɣriḍ ad ẓṛeḍ lqem yemḥan n ufaylu « <nowiki>$1</nowiki> » n $2 af $3 ?',
'undelete-show-file-submit' => 'Ih',

# Namespace form on various pages
'namespace' => 'Talluntin n isemawen :',
'invert' => 'Snegdam ayen textareḍ',
'tooltip-invert' => 'Sekcem amidag deg tankult agi iwakken ad ffereḍ ibeddilen n isebtar deg tallunt n isemawen yettwafren (dɣa tallunt n isemawen yeqqnen ma yella amidag deg tankult)',
'namespace_association' => 'Tallunt n isemawen yeqqenen',
'tooltip-namespace_association' => 'Sekcem amidag deg tankult agi iwakken ad rnuḍ daɣen tallunt n isemawen n umyannan yeqqnen ar tallunt n  isemawen yettwafren',
'blanknamespace' => '(Amenzawi)',

# Contributions
'contributions' => 'Ittekkiyen n {{GENDER:$1|umseqdac|tamseqdact}}',
'contributions-title' => 'Umuɣ n tikkin n umseqdac $1',
'mycontris' => 'Ittekkiyen',
'contribsub2' => 'I {{GENDER:$3|$1}} ($2)',
'nocontribs' => 'Ur yufi ara abddel i tebɣiḍ.',
'uctop' => '(amiran)',
'month' => 'Seg uggur (d wid uqbel) :',
'year' => 'Seg useggwas (d wid uqbel) :',

'sp-contributions-newbies' => 'Ssken tikkin n yimseqdacen imaynuten kan',
'sp-contributions-newbies-sub' => 'I yisem yimseqdacen imaynuten',
'sp-contributions-newbies-title' => 'Ittekkiyen n imseqdacen gar imiḍanen imaynuten',
'sp-contributions-blocklog' => 'Aɣmis n uɛeṭṭil',
'sp-contributions-deleted' => 'isekcam yemḥan',
'sp-contributions-uploads' => 'izdamen',
'sp-contributions-logs' => 'iɣmisen',
'sp-contributions-talk' => 'Mmeslay',
'sp-contributions-userrights' => 'Laɛej iserfan n umseqdac',
'sp-contributions-blocked-notice' => 'Aseqdac agi yekyef.
Asekcem aneggaru n useklas n ikyafen yella ddaw agi :',
'sp-contributions-blocked-notice-anon' => 'Tansa IP agi tekyef.
Asekcem aneggaru n useklas n ikyafen yella ddaw agi :',
'sp-contributions-search' => 'Nadi i tikkin',
'sp-contributions-username' => 'Tansa IP neɣ isem n wemseqdac:',
'sp-contributions-toponly' => 'Sekned kan imagraden i beddeleɣ nekk d-aneggaru',
'sp-contributions-submit' => 'Nadi',

# What links here
'whatlinkshere' => 'Ayen i d-yettawi ɣer da',
'whatlinkshere-title' => 'Isebtaren i sɛan azday ɣer « $1 »',
'whatlinkshere-page' => 'Asebter :',
'linkshere' => "Isebtar-agi sɛan azday ɣer '''[[:$1]]''':",
'nolinkshere' => "Ulac asebter i yesɛan azday ɣer '''[[:$1]]'''.",
'nolinkshere-ns' => "Ulac asebter i yesɛan azday ɣer '''[[:$1]]''' deg yisem n taɣult i textareḍ.",
'isredirect' => 'Asebter n usemmimeḍ',
'istemplate' => 'asekcam',
'isimage' => 'azday ɣer afaylu',
'whatlinkshere-prev' => '{{PLURAL:$1|ssabeq|$1 ssabeq}}',
'whatlinkshere-next' => '{{PLURAL:$1|ameḍfir|$1 imeḍfiren}}',
'whatlinkshere-links' => '← izdayen',
'whatlinkshere-hideredirs' => '$1 aceggeε ɣer',
'whatlinkshere-hidetrans' => '$1 aseddu',
'whatlinkshere-hidelinks' => '$1 izdayen',
'whatlinkshere-hideimages' => '$1 ifuyla iqqenen',
'whatlinkshere-filters' => 'Tistaytin',

# Block/unblock
'autoblockid' => 'Asewḥel awurman #$1',
'block' => 'Ɛekkel aseqdac',
'unblock' => 'Aksasewḥel n umseqdac',
'blockip' => 'Ɛekkel aseqdac',
'blockip-legend' => 'Ɛekkel aseqdac',
'blockiptext' => 'Seqdec tiferkit ddaw-agi iwakken ad  sewḥeleḍ ineɛruḍen n ubeddel seg yiwet tansa IP tulmist neɣ n yiwen isem umseqdac.
Asket am wagi, ur ilaq ad yetwexddem kan iwakken ad yeεeggen axeṣṣar dɣa ilaq ad yemtawi s [[{{MediaWiki:Policy-url}}|ilugan igensanen]].
Efked ddaw-agi taɣẓint tusdidt (amedya : efked isebtar yetwaxeṣṣren).',
'ipadressorusername' => 'Tansa IP neɣ isem n wemseqdac',
'ipbexpiry' => 'Tanzagt uqbel aneffeṛ :',
'ipbreason' => 'Ayɣer',
'ipbreason-dropdown' => '* Tiɣẓinin n ukyaf id ttuɣalen aṭas tikwal
** Taguri n tilɣa n ukellax
** Tukksa war assefhem n ugbur n isebtar
** Taguri s uɛiwed n izdayen uffiɣen ɣer idellilen (abluleɣ)
** Taguri n ugbur war anamek d tursaḍ deg isebtar
** Aneɛruḍ n umsiged neɣ ubbezbax
** Tafuli n useqdac n aṭas imiḍanen
** Isem n umseqdac ur nezmer ara an qbel, d-anergam neɣ d-abucemmat',
'ipb-hardblock' => 'Qareɛ imseqdacen yeqqnen ad beddelen s tansa IP agi',
'ipbcreateaccount' => 'Qareɛ asnulfu n umiḍan',
'ipbemailban' => 'Qareɛ amseqdac ad yecggaɛ e-mails',
'ipbenableautoblock' => 'Sewḥel s-uwurman tansa IP taneggarut yetseqdacen sɣur amseqdac d akk IP ines nniḍen ay d-yetteddun',
'ipbsubmit' => 'Ɛekkel amseqdac-agi',
'ipbother' => 'Tanzagt  nniḍen :',
'ipboptions' => '2 isragen:2 hours,1 ass:1 day,3 ussan:3 days,1 imalas:1 week,2  imalasen:2 weeks,1 aggur:1 month,3 agguren:3 months,6 agguren:6 months,1 aseggwas:1 year,afdi:infinite',
'ipbhidename' => 'Ffer isem n useqdac deg ibeddilen d umuγen',
'ipbwatchuser' => 'Ḍfer isebtar n iseqdacen d idiwenniyen n useqdac agi',
'ipb-disableusertalk' => 'Qareɛ amseqdac ad yebeddel asebtar-is n umyannan mi yella asewḥel',
'ipb-change-block' => 'Sewḥel tikkelt nniḍen amseqdac agi s iɣewwaren agi',
'ipb-confirm' => 'Sergeg asewḥel',
'badipaddress' => 'Tansa IP mačči d ṣaḥiḥ',
'blockipsuccesssub' => 'Asewḥel yetwexddem',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] {{GENDER:$1|yetsewḥel|tetsewḥel|}}.<br />
Zeṛ [[Special:BlockList|umuɣ n isewḥal]] iwakken ad zṛeḍ isewḥal.',
'ipb-blockingself' => '{{GENDER:|Aqlak|Aqlakem}}-id ad sewḥeleḍ iman-{{GENDER:|ik|im}}',
'ipb-confirmhideuser' => '{{GENDER:|Aqlak|Aqlakem}}-id ad sewḥeleḍ amseqdac s « ffer amseqdac » yessermed. Waya ad yekkes isem n umseqdac deg akkw umuɣen d isekcam n uɣmis. Tebɣiḍ ad xeddemeḍ aya ?',
'ipb-confirmaction' => 'Ma teḥsiḍ tebɣiḍ at xeddemeḍ, ilaq ad rnuḍ amidag deg tankult « {{int:ipb-confirm}} » ddaw-agi.',
'ipb-edit-dropdown' => 'Beddel tiɣẓinin n usewḥel s lexṣas',
'ipb-unblock-addr' => 'Aksasewḥel $1',
'ipb-unblock' => 'Aksasewḥel amiḍan n umseqdac neɣ tansa IP',
'ipb-blocklist' => 'Zeṛ isewḥelen yellan',
'ipb-blocklist-contribs' => 'Ittekkiyen i $1',
'unblockip' => 'Ekkes asewḥel n umseqdac',
'unblockiptext' => 'Seqdec tiferkit ddaw-agi iwakken ad erreḍ addaf i ibeddilen seg yiwet tansa IP neɣ yiwen isem n umseqdac.',
'ipusubmit' => 'Ekkes akyaf agi',
'unblocked' => 'Yetwekkes akyaf n [[User:$1|$1]]',
'unblocked-range' => 'Yetwekkes akyaf n $1',
'unblocked-id' => 'Akyaf $1 yetwekkes',
'blocklist' => 'Iseqdacen id yetkyefen',
'ipblocklist' => 'imseqdacen isewḥelen',
'ipblocklist-legend' => 'Nadi aseqdac id yetkyefen',
'blocklist-userblocks' => 'Ffer ikyafen n imiḍanen',
'blocklist-tempblocks' => 'Ffer ikyafen ikudanen',
'blocklist-addressblocks' => 'Ffer ikyafen n tansa IP tisuftin',
'blocklist-rangeblocks' => 'Ffer iḥedran n azrag',
'blocklist-timestamp' => 'Azmez d usrag',
'blocklist-target' => 'Asaḍas',
'blocklist-expiry' => 'Azmez n tasewti',
'blocklist-by' => 'Anedbal i sexdemen akyaf',
'blocklist-params' => 'Iɣewwaren n ukyaf',
'blocklist-reason' => 'Taɣẓint',
'ipblocklist-submit' => 'Nadi',
'ipblocklist-localblock' => 'Akyaf adigan',
'ipblocklist-otherblocks' => '{{PLURAL:$1|Akyaf nniḍen|Ikyafen nniḍen}}',
'infiniteblock' => 'ameɣlal',
'expiringblock' => 'tasewti ass n $1 af $2',
'anononlyblock' => 'iseqdacen ur sɛan ara amiḍan kan',
'noautoblockblock' => 'akyaf awurman yensa',
'createaccountblock' => 'asnulfu n umiḍan yekyef',
'emailblock' => 'e-mail yekyef',
'blocklist-nousertalk' => 'ur yezmer ara ad yebeddel asebter-is n umeslay',
'ipblocklist-empty' => 'Umuɣ n tansiwin IP i kyefen d-ilem.',
'ipblocklist-no-results' => 'Tansa IP naɣ aseqdac i sutereḍ ur yekyef ara.',
'blocklink' => 'ɛekkel',
'unblocklink' => 'ekkes asewḥel',
'change-blocklink' => 'beddel asewḥel',
'contribslink' => 'tikkin',
'emaillink' => 'Ceggaɛ e-mail',
'autoblocker' => 'Tetsewḥeleḍ s uwurman acku tansa IP inek/inem yeseqdac-itt « [[User:$1|$1]] ». Taɣzint id efkan i usewḥel agi d : « $2 ».',
'blocklogpage' => 'Aɣmis n isewḥelen',
'blocklog-showlog' => 'Amseqdac agi, yetseweḥel uqbel. Ad affeḍ aɣmis n isewḥal ddaw-agi :',
'blocklog-showsuppresslog' => 'Amseqdac agi, yetseweḥel dɣa yeweffer uqbel. Ad affeḍ aɣmis n tukksiwin ddaw-agi :',
'blocklogentry' => 'yesewḥel [[$1]] ; alama : $2 $3',
'reblock-logentry' => 'yebeddel iɣewwaren n usewḥel n [[$1]] s tasewtit ar $2 $3',
'blocklogtext' => 'Wagi d-aɣmis n tigawin n usewḥel d aksusewḥel n imseqdacen.
Tansiwin IP yestsuwḥelen s-uwurman ulac-itent deg umuɣ agi.
Ẓer [[Special:BlockList|umuɣ n isewḥal]] iwakken ad ẓṛeḍ iḍeggiren d isewḥal yellan tura.',
'unblocklogentry' => 'yekkes asewḥel n $1',
'block-log-flags-anononly' => 'Imseqdacen udrigen kan',
'block-log-flags-nocreate' => 'asnulfu n umiḍan yessegdel',
'block-log-flags-noautoblock' => 'akyaf awurman yensa',
'block-log-flags-noemail' => 'e-mail yekyef',
'block-log-flags-nousertalk' => 'ur yezmer ara ad yebeddel asebter-is n umeslay',
'block-log-flags-angry-autoblock' => 'manasewḥel yesselhan yesermed',
'block-log-flags-hiddenname' => 'isem n umseqdac yeffer',
'range_block_disabled' => 'Azref n unedbal i usnulfu n isewḥal n tagrummiwin IP yensa.',
'ipb_expiry_invalid' => 'Tanzagt n tasewti ur teɣbel ara.',
'ipb_expiry_temp' => 'Isewḥal n isemawen n imseqdacen yeffren ilaq ad illin d-imeɣlalen.',
'ipb_hide_invalid' => 'Ulamek an ekkes amiḍan agi ; yesɛa ugar n {{PLURAL:$1|yiwen abeddel|$1 ibeddilen}}.',
'ipb_already_blocked' => '« $1 » yesewḥel yakan',
'ipb-needreblock' => '« $1 » yesewḥel yakan. Tebɣiḍ ad beddeleḍ iɣewwaren ?',
'ipb-otherblocks-header' => '{{PLURAL:$1|Asewḥel nniḍen|Isewḥelen nniḍen}}',
'unblock-hideuser' => 'Ur tzemreḍ ara ad sewḥeleḍ amseqdac agi, acku isem-is n umseqdac yetweffer.',
'ipb_cant_unblock' => 'Tuccḍa : ID n usewḥel $1 ulac-it.
Ahat asewḥel yetwekkes yakan.',
'ipb_blocked_as_range' => 'Tuccḍa : tansa IP $1 ur t-uwḥel ara srid dɣa ulamek an ekkes asewḥel.
Lamaɛna tezga deg tagrumma $2 i nezmer an ekkes asewḥel.',
'ip_range_invalid' => 'Tagrumma IP artameɣtut',
'ip_range_toolarge' => 'Isewḥal n tagrummiwin i ugaren /$1 ur sɛan ara assireg.',
'proxyblocker' => 'Amsewḥel n proxy',
'proxyblockreason' => 'Tansa n IP inek teɛkel axaṭer nettat "open proxy". G leɛnayek, meslay akk d provider inek.',
'sorbsreason' => 'Tansa IP inek/inem tella deg yiwen umuɣ am "open proxy" deg DNSBL yettuseqdac deg {{SITENAME}}.',
'sorbs_create_account_reason' => 'Tansa IP inek/inem tella deg yiwen umuɣ am "open proxy" deg DNSBL yettuseqdac deg {{SITENAME}}.
Ur tezmireḍ ara ad snulfuḍ amiḍan.',
'xffblockreason' => 'Yiwet tansa IP deg tasenṭit X-Forwarded-For header, tin inek/inem neɣ tin n uqeddac proxy i tseqeddeceḍ ,tesewḥel. Taɣzint n usewḥel amezrwaru : $1',
'cant-see-hidden-user' => "Amseqdac i tebɣiḍ ad sewḥeleḍ yetsewḥel yakan dɣa yetweffer. Imi ur tesɛiḍ ara azref ''hideuser'', ur tzemreḍ ara ad ẓṛeḍ neɣ ad beddeleḍ asewḥel n umseqdac agi.",
'ipbblocked' => 'Ur tzemreḍ ada ad sewḥeleḍ neɣ ad aksewḥeleḍ imseqdacen nniḍen, acku ula d-kečč/kem tsewḥeleḍ.',
'ipbnounblockself' => 'Ur tesɛiḍ ara assireg ad aksewḥeleḍ iman-ik/im.',

# Developer tools
'lockdb' => 'Sekker database',
'unlockdb' => 'Kkes aseḍru n taffa n isefka',
'lockdbtext' => 'Askaṛ n taffa n isefka ad yeqareɛ akkw imseqdacen ad beddelen isebtar, ad ḥerzen ismenyifen nsen, ad beddelen umuɣ nsen n uḍfar dɣa ad xeddmen akkw tigawin nniḍen yeḥwaǧen ibeddilen deg taffa n isefka.
Ilaq ad sergegeḍ d-ayen yebɣiḍ ad xeddemeḍ dɣa ad ekkseḍ azekṛun deg taffa sakin tigawt inek/inem n ibeddi att fak.',
'unlockdbtext' => 'Aksaskaṛ n taffa n isefka ad yeɛemmed i akkw imseqdacen ad beddelen isebtar, ad beddelen ismenyifen nsen, ad beddelen umuɣ nsen n uḍfar dɣa ad xeddmen akkw tigawin nniḍen yeḥwaǧen ibeddilen deg taffa n isefka.

Ilaq ad sergegeḍ d-ayen yebɣiḍ ad xeddemeḍ.',
'lockconfirm' => 'Ih, bɣiɣ ad sekṛeɣ taffa n isefka.',
'unlockconfirm' => 'Ih, bɣiɣ ad ekkeseɣ aksskeṛeɣ taffa n isefka.',
'lockbtn' => 'Sekker taffa n isefka',
'unlockbtn' => 'Kkes aseḍru n taffa n isefka',
'locknoconfirm' => 'Ur d-sekcemeḍ ara amidag deg tanaka n aragag.',
'lockdbsuccesssub' => 'Askaṛ n taffa n isefka yetwexddem',
'unlockdbsuccesssub' => 'Asewḥel n taffa n isefka yetwekkes',
'lockdbsuccesstext' => 'Taffa n isefka teskeṛ.<br />
Ur tettu ara ad ekkeseḍ [[Special:UnlockDB|askaṛ]] ma tfukeḍ tamhelt inek/inem n ibeddi.',
'unlockdbsuccesstext' => 'Askaṛ n taffa n isefka yetwekkes.',
'lockfilenotwritable' => 'Ur tzemreḍ ara ad aruḍ deg ufaylu n uskaṛ n taffa n isefka.
Ma tebɣiḍ ad sewḥeleḍ neɣ ad ekkseḍ asewḥel ɣef taffa n isefka, ilaq aqeddac web ad yezmer ad yaru deg ufaylu agi.',
'databasenotlocked' => 'Taffa n isefka ur tesɛa ara askar.',
'lockedbyandtime' => '(sɣur $1 ass n $2 af $3)',

# Move page
'move-page' => 'Beddel isem n $1',
'move-page-legend' => 'Smimeḍ asebter',
'movepagetext' => "Seqdec tiferkit ddaw agi iwakken ad beddeleḍ isem n usebter, s usiweḍ n akkw umezruy-is ɣer isem amaynut. Azwel aqbur ad yuɣal d asebter n usemmime ɣer azwel amaynut. Tzemreḍ ad mucceḍeḍ s uwurman isemmimen imiranen i sweṛen ɣer azwel amezwaru. Ma ur tebɣiḍ ara at sexdemeḍ wagi, ilaq ad selkeneḍ akkw [[Special:DoubleRedirects|Asemmimeḍ yeḍran snat tikwal]] neɣ [[Special:BrokenRedirects|asmmimeḍ yerẓan]]. Ilaq ad sɛuḍ talkint belli izdayen tsweṛen ɣer aserken is.

Abeddel n isem <strong>ur</strong> yezmer <strong>ara</strong> ad yilli ma yella yakan asebter s isem agi, ḥaca ma ulac amezruy deg-es. Waya yetɛemmed an beddel isem n usebtar ɣer addud ines amezwaru ma tiggit d tuccḍit, dɣa ulamek an mzey yiwen asebtar yellan.

'''Ɣur-wet !'''
Wagi yezmer ad yexdem abeddel ameqqṛan i asebter s aṭas timerziwin ; ilaq ad fehmeḍ uqbel ad beddeleḍ asebter.",
'movepagetext-noredirectfixer' => "Seqdec tiferkit ddaw agi iwakken ad beddeleḍ isem n usebter, s usiweḍ n akkw amezruy is ɣer isem amaynut. Azwel aqbur ad yuɣal d asebter n usemmime ɣer azwel amaynut.
Ilaq ad selkeneḍ akkw [[Special:DoubleRedirects|Asemmimeḍ yeḍran snat tikwal]] naɣ [[Special:BrokenRedirects|asmmimeḍ yerẓan]].
Ilaq ad sɛuḍ talkint belli izdayen tsweṛen ɣer aserken is.

Abeddel n isem ur yezmer ara ad yilli ma yella yakan asebter s isem agi, ḥaca ma ulac amezruy deg-es dɣa yuɣal d-asebtar n usemmim. Waya yetɛemmed an beddel isem n usebtar ɣer addud ines amezwaru ma tiggit d tuccḍit, dɣa ulamek an mzey yiwen asebtar yellan.

'''Ɣur-wet !'''
Wagi yezmer ad yexdem abeddel ameqqṛan i asebter s aṭas timerziwin ; ilaq ad fehmeḍ uqbel ad beddeleḍ asebter.",
'movepagetalktext' => "Asebter \"Amyannan\" yettusmimeḍ ula d netta '''ma ulac:'''
*Yella asebter \"Amyannan\" deg isem amaynut, neɣ
*Trecmeḍ tankult deg ukessar.

Lukan akka, yessefk a t-tedmeḍ weḥdek.",
'movearticle' => 'Smimeḍ asebter',
'moveuserpage-warning' => "'''Ɣur-wet !''' Atan ad beddeleḍ isem n usebtar n umseqdac. Ilaq ad fehmeḍ, isem n usebtar ad yetbeddel, maca isem n umseqdac '''ur''' d-yetbeddel '''ara'''.",
'movenologintext' => 'Yessefk ad tesɛuḍ isem n wemseqdac u [[Special:UserLogin|tkecmeḍ]]
iwakken ad tesmimḍeḍ asebter.',
'movenotallowed' => 'Ur tesɛiḍ ara turagt ad beddeleḍ isem n isebtar.',
'movenotallowedfile' => 'Ur tesɛiḍ ara turagt ad beddeleḍ isem n ifuyla.',
'cant-move-user-page' => 'Ur tesɛiḍ ara turagt ad beddeleḍ isem n isebtar igejdanen n imseqdacen',
'cant-move-to-user-page' => 'Ur tesɛid ara assireg iwakken ad beddeleḍ isem n usebtar ɣer asebtar n umseqdac (haca ma d-adu-asebtar).',
'newtitle' => 'Ar azwel amaynut',
'move-watch' => 'Ɛass asebter-agi',
'movepagebtn' => 'Smimeḍ asebter',
'pagemovedsub' => 'Asemmimeḍ yekfa',
'movepage-moved' => "'''« $1 » yetwabeddel isem ar « $2 »'''",
'movepage-moved-redirect' => 'Abeddel n isem seg isem aqbur yetxelqed.',
'movepage-moved-noredirect' => 'Asnulfu n ubeddel n isem seg isem aqbur yetsemmet.',
'articleexists' => 'Yella yagi yisem am wagi, neɣ
isem ayen textareḍ mačči d ṣaḥiḥ.
Xtar yiwen nniḍen.',
'cantmove-titleprotected' => 'Ur tzemreḍ ara ad ssiweḍeḍ asebtar ɣer amkan agi acku asnulfu n usebtar s uzwel agi amaynut yetweḥrez',
'movetalk' => 'Smimeḍ asebter n umyannan (n umagrad-nni)',
'move-subpages' => 'Beddel isem n adu-isebtar (alma d $1 {{PLURAL:$1|asebtar|isebtar}})',
'move-talk-subpages' => 'Beddel adu-isebtar n usebtar n amyannan (alma d $1 isebtar)',
'movepage-page-exists' => 'Asebtar $1 yella yakan dɣa ur nezmer ara at n-mzey s uwurman.',
'movepage-page-moved' => 'Asebtar $1 yetwabeddel isem-is ar $2.',
'movepage-page-unmoved' => 'Asebtar $1 ur nezmer ara an beddel isem-is ar $2.',
'movepage-max-pages' => 'Afellay n $1 {{PLURAL:$1|asebtar|isebtar}} s isem ibeddelen yetwuɛa dɣa tura ur d-yetilli ara abeddel n isem s-uwurman.',
'movelogpage' => 'Aɣmis n usemmimeḍ',
'movelogpagetext' => 'Akessar yella wumuɣ n isebtar yettusmimeḍen.',
'movesubpage' => '{{PLURAL:$1|Adu-asebtar|Adu-isebtar}}',
'movesubpagetext' => 'Asebtar agi yesɛa $1 {{PLURAL:$1|adu-asebtar yebeqqeḍen|adu-isebtar yebeqqeḍen}} ddaw-agi.',
'movenosubpage' => 'Asebtar agi ur yesɛ ara adu-asebtar',
'movereason' => 'Ayɣer',
'revertmove' => 'Uɣal ar tasiwelt ssabeq',
'delete_and_move' => 'Mḥu u smimeḍ',
'delete_and_move_text' => '==Amḥay i tebɣiḍ==

Anda tebɣiḍ tesmimeḍ "[[:$1]]" yella yagi. tebɣiḍ ad temḥuḍ iwakken yeqqim-d wemkan i usmimeḍ?',
'delete_and_move_confirm' => 'Ih, mḥu asebter',
'delete_and_move_reason' => 'Asebter yemḥa iwakken yeqqim-d wemkan i usmimeḍ seg "[[$1]]"',
'selfmove' => 'Izwal amezwaru d uneggaru kif-kif; ur yezmir ara ad yesmimeḍ asebter ɣur iman-is.',
'immobile-source-namespace' => 'Ur tzemreḍ ara ad beddeleḍ isem n isebtar deg tallunt n isemawen « $1 »',
'immobile-target-namespace' => 'Ur tzemreḍ ara ad beddeleḍ isem n isebtar ɣer tallunt n isemawen « $1 »',
'immobile-target-namespace-iw' => 'Izdayen interwiki mačči d iswi ameɣtu i imussa.',
'immobile-source-page' => 'Ulamek ad beddeleḍ isem n usebtar agi.',
'immobile-target-page' => 'Ur tzemreḍ ara ad beddeleḍ isem n usebtar ɣer azwel agi.',
'bad-target-model' => 'Aserken i tebɣiḍ yetseqdac talɣa nniḍen n ugbur. Ulamek an beddel seg $1 ɣer $2.',
'imagenocrossnamespace' => 'Ulamek an beddeleḍ isem n ufaylu ɣer tallunt n isemawen nniḍen wala afaylu',
'nonfile-cannot-move-to-file' => 'Ulamek an beddeleḍ ayen nniḍen wala afaylu ɣer tallunt n isemawen n ufaylu',
'imagetypemismatch' => 'Asiɣzef amaynut n ufaylu agi ur yaɛdil ara s tawsit ines.',
'imageinvalidfilename' => 'Isem n ufaylu iswi ur yaɛdil ara',
'fix-double-redirects' => 'Mucceḍ inegzumen yetruḥun ɣer azwel amezwaru',
'move-leave-redirect' => 'Eǧǧ anegzum ɣer azwel amaynut',
'protectedpagemovewarning' => "'''ƔUR-WET :''' Asebter-agi yettwaḥrez iwakken imseqdacen kan yesɛan izerfan n unedbal ad zemren ad beddlen isem-is.
Asekcem aneggaru n uɣmis yella ddaw-agi :",
'semiprotectedpagemovewarning' => "'''Tamawt :''' Asebter-agi yettwaḥrez iwakken imseqdacen kan yesɛan amiḍan kan i zemren ad beddlen isem-is.
Asekcem aneggaru n uɣmis yella ddaw-agi :",
'move-over-sharedrepo' => '== Afaylu yella yakan ==
[[:$1]] yella yakan ɣef azadur anmili. Abeddel n isem n ufaylu agi ad yarreẓ azday ɣer ufaylu seg azadur anmili.',
'file-exists-sharedrepo' => 'Isem agi yetseqdac yakan sɣur afaylu ɣef azadur anmili.
Xtir isem nniḍen.',

# Export
'export' => 'Ssufeɣ isebtar',
'exporttext' => 'Tzemreḍ ad ssifeḍeḍ s XML aḍris d umezruy n yiwen usebtar neɣ tagrumma n isebtar ;
agemmuḍ yezmer ihi ad yetkter deg wiki nniḍen yetseqdacen aseɣẓan MediaWiki s [[Special:Import|usebtar n taktert]].

Iwakken ad ssifeḍeḍ isebtar, sekcem izwal nsen deg tanaka n uḍris ddaw agi, yiwen azwel s yiwen azagg. Fren, ma tebɣiḍ neɣ ala, lqem amiran s akkw ileqman iqdimen, s izaggen n umezruy n usebtar, neɣ asebtar amiran kan s tilɣa ɣef abeddil aneggaru.

Deg tajṛut agi taneggarut tzemreḍ daɣen ad seqdeceḍ azday, am [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] i usebtar [[{{MediaWiki:Mainpage}}]].',
'exportall' => 'Ssufeɣ akkw isebtar',
'exportcuronly' => 'Ssekcem tasiwelt n tura kan, mačči akk amezruy-is',
'exportnohistory' => "----
'''Tamawt :''' assifeḍ n umezruy ummid n isebtar s tallalt n tiferkit yetwensa i ṣṣwabat n tamellit.",
'exportlistauthors' => 'Sseddu umuɣ ummid n ittekkiyen i yal asebtar',
'export-submit' => 'Ssufeɣ',
'export-addcattext' => 'Rnu isebtar seg taggayt:',
'export-addcat' => 'Rnu',
'export-addnstext' => 'Rnu isebtar deg tallunt n isemawen :',
'export-addns' => 'Rnu',
'export-download' => 'Ḥrez deg ufaylu',
'export-templates' => 'Sekcem tiɣlatin',
'export-pagelinks' => 'Sseddu isebtar i qqenen s talqayt n :',

# Namespace 8 related
'allmessages' => 'Izen n system',
'allmessagesname' => 'Isem',
'allmessagesdefault' => 'Aḍris ameslugen',
'allmessagescurrent' => 'Aḍris n tura',
'allmessagestext' => 'Wagi d-umuɣ n inzan yestufan deg tallunt MediaWiki.
Ẓeṛ [https://www.mediawiki.org/wiki/Localisation MediaWiki Localisation] dɣa [//translatewiki.net translatewiki.net] ma tebɣiḍ ad ɛiweneḍ i usideg imcettel n MediaWiki.',
'allmessagesnotsupportedDB' => "'''{{ns:special}}:Allmessages''' ut yezmir ara ad yettuseqdac axaṭer '''\$wgUseDatabaseMessages''' yettwakkes.",
'allmessages-filter-legend' => 'Tastayt',
'allmessages-filter' => 'Ṣeffi s addad n ubeddil :',
'allmessages-filter-unmodified' => 'Ur yebeqqeḍ ara',
'allmessages-filter-all' => 'Akkw',
'allmessages-filter-modified' => 'Yebeddel',
'allmessages-prefix' => 'Tastayt s adat :',
'allmessages-language' => 'Tutlayt :',
'allmessages-filter-submit' => 'Ruḥ',
'allmessages-filter-translate' => 'Ssuqqel',

# Thumbnails
'thumbnail-more' => 'Ssemɣer',
'filemissing' => 'Afaylu ulac-it',
'thumbnail_error' => 'Agul asmi yexleq tugna tamecṭuḥt: $1',
'thumbnail_error_remote' => 'Izen n tuccḍa n $1 :
$2',
'djvu_page_error' => 'Asebter DjVu yeffeɣ seg tilisa',
'djvu_no_xml' => 'Ulamek an err XML i ufaylu DjVu',
'thumbnail-temp-create' => 'Ulamek ad nesnulfu afaylu n tignit akudan',
'thumbnail-dest-create' => 'Ulamek an kles tignit ɣef aserken',
'thumbnail_invalid_params' => 'Iɣewwaren n tignit ur ɣeblen ara',
'thumbnail_dest_directory' => 'Ulamek ad nesnulfu akaram n userken',
'thumbnail_image-type' => 'Tawsit n tugna ur teɣbel ara',
'thumbnail_gd-library' => 'Tawila tagermazt n tamkarḍit GD : ulac tasɣent $1',
'thumbnail_image-missing' => 'Afaylu agi ulac-it : $1',

# Special:Import
'import' => 'Ssekcem isebtar',
'importinterwiki' => 'Assekcem n transwiki',
'import-interwiki-text' => 'Fren yiwen wiki d yiwen azwel n usebtar ad ketreḍ.
Izemzen n ileqman d isemawen n ittekkiyen ad qqimen.
Akkw tigawin n taktert ager-wiki ad illint deg [[Special:Log/import|umezruy n tiketrin]].',
'import-interwiki-source' => 'Wiki d usebtar n taɣbalut',
'import-interwiki-history' => 'Xdem alsaru n akk tisiwal umezruy n usebter-agi',
'import-interwiki-templates' => 'Sekcem akkw talɣiwin',
'import-interwiki-submit' => 'Ssekcem',
'import-interwiki-namespace' => 'Azen isebtar ar isem n taɣult:',
'import-interwiki-rootpage' => 'Asebtar azaṛ n userken (axetṛan) :',
'import-upload-filename' => 'Isem n ufaylu :',
'import-comment' => 'Awennit :',
'importtext' => 'Ilaq ad ssifeḍeḍ afaylu seg wiki aneṣli s useqdac n  [[Special:Export|ufecku ines n ussifeḍ]].',
'importstart' => 'Asekcem n isebtar...',
'import-revision-count' => '$1 {{PLURAL:$1|tasiwelt|tisiwal}}',
'importnopages' => 'Ulac isebtar iwakken ad ttussekcmen.',
'imported-log-entries' => '$1 {{PLURAL:$1|anekcum|inekcumen}} n uɣmis yekteren.',
'importfailed' => 'Asekcem yexser: $1',
'importunknownsource' => 'Anaw n uɣbalu n usekcem mačči d mechur',
'importcantopen' => 'Ur yezmir ara ad yexdem asekcem n ufaylu',
'importbadinterwiki' => 'Azday n interwiki ur yelhi',
'importnotext' => 'D ilem neɣ ulac aḍris',
'importsuccess' => 'Asekcem yekfa !',
'importhistoryconflict' => 'Amennuɣ ger tisiwal n umezruy (ahat asebter-agi yettwazen yagi)',
'importnosources' => 'Asekcam n transwiki ur yexdim ara u amezruy n usekcam yettwakkes.',
'importnofile' => 'ulaḥedd afaylu usekcam ur yettwazen.',
'importuploaderrorsize' => 'Taktert n ufaylu texṣer.
Tiddi ines t-ugar afellay i ssiregen i taktert n ufaylu.',
'importuploaderrorpartial' => 'Taktert n ufaylu texṣer.
Agbur ines yetweccegaɛ s-umur kan.',
'importuploaderrortemp' => 'Taktert n ufaylu texṣer.
Ulac yiwen akaram akudan.',
'import-parse-failure' => 'Axṣar deg tasleṭ n XML an kter',
'import-noarticle' => 'Ulac isebtar ad nekter.',
'import-nonewrevisions' => 'Ulac iceggiṛen yetwaketren (akkw tetwaketren yakan, neɣ tetwassinfen acku llant tuccḍiwin).',
'xml-error-string' => '$1 ar azagg $2, ajgu $3 (atamḍan $4) : $5',
'import-upload' => 'Taktert n isefka XML',
'import-token-mismatch' => 'Azella n isefka n tɣimit. Ɛreḍ tikkelt nniḍen.',
'import-invalid-interwiki' => 'Ulamek an kter seg wiki i efkeḍ.',
'import-error-edit' => 'Asebtar « $1 » ur d-yekter ara acku ur tesɛiḍ ara turagt iwakken at beddeleḍ.',
'import-error-create' => 'Asebtar « $1 » ur d-yekter ara acku ur tesɛiḍ ara turagt iwakken at snulfuḍ.',
'import-error-interwiki' => 'Asebtar « $1 » ur d-yekter ara acku isem-is yettwaṭṭef i uzday yeffɣen (interwiki).',
'import-error-special' => 'Asebtar « $1 » ur d-yekter ara acku yeqqen s tallunt n isemawen uslig ur yebɣan ara isebtar.',
'import-error-invalid' => 'Asebtar « $1 » ur d-yekter ara acku isem-is ur yeɣbel ara.',
'import-error-unserialize' => 'Aceggeṛ $2 n usebtar « $1 » ur nezmer ara as n-ekkes amazrar ines. Aceggeṛ yetwamel am aken yetseqdac talɣa n ugbur $3 yesɛan amazrar s $4.',
'import-error-bad-location' => 'Tacaggart $2 yetseqdacen talɣa n ugbur $3 teṣer deg ukalas ɣef « $1 » ɣef wiki agi, acku talɣa agi ur tezmer ara att illi deg usebtar agi.',
'import-options-wrong' => 'Yir {{PLURAL:$2|afran|ifranen}} : <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'Asebtar aẓar id efkeḍ d-azwel ur ɣblen ara.',
'import-rootpage-nosubpage' => 'Tallunt n isemawen « $1 » n usebtar aẓar ur yeqbel ara adu-isebtar.',

# Import log
'importlogpage' => 'Aɣmis n usekcam',
'importlogpagetext' => 'Adeblan n usekcam n isebtar i yesɛan amezruy ubeddel seg wiki tiyaḍ.',
'import-logentry-upload' => 'Yessekcem [[$1]] s usekcam n ufaylu',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|lqem|ileqman}}',
'import-logentry-interwiki' => '$1 s transwiki',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|lqem|ileqman}} seg $2',

# JavaScriptTest
'javascripttest' => 'Tarmit n JavaScript',
'javascripttest-title' => 'Asselkem n tirmitin $1',
'javascripttest-pagetext-noframework' => 'Asebtar agi yeḥeṛṛ i usselkem n tirmitin JavaScript.',
'javascripttest-pagetext-unknownframework' => 'Tamṣuka « $1 » warisem.',
'javascripttest-pagetext-frameworks' => 'Ilaq ad xetreḍ yiwet n timṣukyin n tarmit agi : $1',
'javascripttest-pagetext-skins' => 'Xter agwlim s anwa ad xeddemeḍ tarmit :',
'javascripttest-qunit-intro' => 'Zeṛ [$1 tumlin n tarmit] ɣef mediawiki.org.',
'javascripttest-qunit-heading' => 'Azrar n tarmit QUnit n JavaScript ɣef MediaWiki',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Asebter n umseqdac inu',
'tooltip-pt-anonuserpage' => 'Asebter n wemseqdac n IP wukud tekkiḍ',
'tooltip-pt-mytalk' => 'Asebter n umyannan inu',
'tooltip-pt-anontalk' => 'Amyannan ɣef yibeddlen n tansa ip-yagi',
'tooltip-pt-preferences' => 'Isemyifiyen inu',
'tooltip-pt-watchlist' => 'Umuɣ n uɛessi n isebtar i ttɛessaɣ',
'tooltip-pt-mycontris' => 'Umuɣ n tikkin inu',
'tooltip-pt-login' => 'Lukan tkecmeḍ xir, meɛna am tebɣiḍ.',
'tooltip-pt-logout' => 'Ffeɣ',
'tooltip-ca-talk' => 'Amyannan ɣef wayen yella deg usebter',
'tooltip-ca-edit' => 'Tzemreḍ ad tbeddleḍ asebter-agi. Sseqdec pre-timeẓriwt qbel.',
'tooltip-ca-addsection' => 'Rnu awennit i amyannan-agi.',
'tooltip-ca-viewsource' => 'Asebter-agi yettwaḥrez. Tzemreḍ ad twaliḍ aɣbalu-ines.',
'tooltip-ca-history' => 'Tisiwal ssabeq n usebter-agi.',
'tooltip-ca-protect' => 'Ḥrez asebter-agi',
'tooltip-ca-unprotect' => 'Beddel amesten n usebtar-agi',
'tooltip-ca-delete' => 'Mḥu asebter-agi',
'tooltip-ca-undelete' => 'Err akk ibeddlen n usebter-agi i yellan uqbel ad yettwamḥu usebter',
'tooltip-ca-move' => 'Smimeḍ asebter-agi',
'tooltip-ca-watch' => 'Rnu asebter-agi i wumuɣ n uɛessi inek',
'tooltip-ca-unwatch' => 'Kkes asebter-agi seg wumuɣ n uɛessi inek',
'tooltip-search' => 'Nadi {{SITENAME}}',
'tooltip-search-go' => 'Ṛuḥ ɣer usebter i sɛan isem agi ma yella.',
'tooltip-search-fulltext' => 'Nadi isebtar i sɛan aḍris agi',
'tooltip-p-logo' => 'Asebter amenzawi',
'tooltip-n-mainpage' => 'Ẓer asebter amenzawi',
'tooltip-n-mainpage-description' => 'Rzu asebter amenzawi',
'tooltip-n-portal' => 'Ɣef usenfar, ayen tzemrḍ ad txedmeḍ, anda tafeḍ tiɣawsiwin',
'tooltip-n-currentevents' => 'Af ayen yeḍran tura',
'tooltip-n-recentchanges' => 'Umuɣ n yibeddlen imaynuten deg wiki.',
'tooltip-n-randompage' => 'Ẓer asebter menwala',
'tooltip-n-help' => 'Amkan ideg tafeḍ.',
'tooltip-t-whatlinkshere' => 'Umuɣ n akk isebtar i yesɛan azday ar dagi',
'tooltip-t-recentchangeslinked' => 'Ibeddlen imaynuten deg isebtar myezdin seg usebter-agi',
'tooltip-feed-rss' => 'RSS feed n usebter-agi',
'tooltip-feed-atom' => 'Atom feed n usebter-agi',
'tooltip-t-contributions' => 'Ẓer umuɣ n tikkin n wemseqdac-agi',
'tooltip-t-emailuser' => 'Azen e-mail i wemseqdac-agi',
'tooltip-t-upload' => 'Azen ifuyla',
'tooltip-t-specialpages' => 'Umuɣ n akk isebtar usligen',
'tooltip-t-print' => 'Lqem tasiggezt n usebter agi',
'tooltip-t-permalink' => 'Azday ameɣlal ɣer lqem agi n usebter',
'tooltip-ca-nstab-main' => 'Ẓer ayen yellan deg usebter',
'tooltip-ca-nstab-user' => 'Ẓer asebter n wemseqdac',
'tooltip-ca-nstab-media' => 'Ẓer asebter n media',
'tooltip-ca-nstab-special' => 'Wagi d asebter uslig, ur tezmireḍ ara a t-tbeddleḍ',
'tooltip-ca-nstab-project' => 'Ẓer asebter n usenfar',
'tooltip-ca-nstab-image' => 'Ẓer asebter n tugna',
'tooltip-ca-nstab-mediawiki' => 'Ẓer izen n system',
'tooltip-ca-nstab-template' => 'Ẓer talɣa',
'tooltip-ca-nstab-help' => 'Ẓer asebter n tallat',
'tooltip-ca-nstab-category' => 'Ẓer asebter n taggayt',
'tooltip-minoredit' => 'Wagi d abeddel afessas',
'tooltip-save' => 'Smekti ibeddlen inek',
'tooltip-preview' => 'G leɛnaya-k, pre-ẓer ibeddlen inek uqbel ad tesmektiḍ!',
'tooltip-diff' => 'Ssken ayen tbeddleḍ deg uḍris.',
'tooltip-compareselectedversions' => 'Ẓer amgirred ger snat tisiwlini (i textareḍ) n usebter-agi.',
'tooltip-watch' => 'Rnu asebter-agi i wumuɣ n uɛessi inu',
'tooltip-watchlistedit-normal-submit' => 'Kkes izwal',
'tooltip-watchlistedit-raw-submit' => 'Amucceḍ n umuɣ n uḍfar',
'tooltip-recreate' => 'Ɛiwed xleq asebter ɣas akken yettumḥu',
'tooltip-upload' => 'Beddu taktert',
'tooltip-rollback' => '« Semmet » yesemmet s-yiwen asenned akk d-acu amseqdac aneggaru yebeddel deg usebter',
'tooltip-undo' => '« Ssefsu » yesemmet abeddel agi dɣa i ldi asfaylu n ubeddel deg uskar n azaraskan. I ɛemmed an uɣal ar lqem n uqbel dɣa an rnu taɣẓint deg tanaka n ugzul.',
'tooltip-preferences-save' => 'Ḥrez isemyifiyen',
'tooltip-summary' => 'Sekcem agzul awezzlan',
'interlanguage-link-title' => '$1 — $2',

# Metadata
'notacceptable' => 'Aqeddac wiki agi ur yezmer ara ad yefk isefka deg amasal ur yezmer ara ad yeɣar amsaɣ inek/inem.',

# Attribution
'anonymous' => '{{PLURAL:$1|Aseqdac udrig|Iseqdacen udrigen}} ɣef {{SITENAME}}',
'siteuser' => '{{SITENAME}} amseqdac $1',
'anonuser' => 'amseqdac abnabak $1 n {{SITENAME}}',
'lastmodifiedatby' => 'Tikkelt taneggarut asmi yettubeddel asebter-agi $2, $1 sɣur $3.',
'othercontribs' => 'Tikkin ɣef umahil n $1.',
'others' => 'wiyaḍ',
'siteusers' => '{{PLURAL:$2|aseqdac|iseqdacen}} $1 n {{SITENAME}}',
'anonusers' => '{{PLURAL:$2|amseqdac abnabak|imseqdacen amseqdac abnabak}} $1 n {{SITENAME}}',
'creditspage' => 'Win ixedmen asebter',
'nocredits' => 'Ulac talɣut ɣef wayen ixedmen asebter-agi.',

# Spam protection
'spamprotectiontitle' => 'Aḥraz amgel "Spam"',
'spamprotectiontext' => "Asebter i tebɣiḍ ad tesmektiḍ iɛekkel-it ''aḥraz mgel \"Spam\"''. Ahat yella wezday aberrani.",
'spamprotectionmatch' => 'Aḍris-agi ur t-iɛeǧ \'\'"aḥraz mgel "Spam"\'\': $1',
'spambot_username' => 'Assizdeg n spam sɣur MediaWiki',
'spam_reverting' => 'Asuɣal i tasiwel taneggarut i ur tesɛi ara izdayen ɣer $1',
'spam_blanking' => 'Akk tisiwal sɛan izdayen ɣer $1, ad yemḥu',
'spam_deleting' => 'Akkw ileqman yesɛan izdayen ɣer $1, tukksa',
'simpleantispam-label' => "Assefqed mgal e-mail yerkan.
Ur-d t-aru '''ACEMMA''' d-agi !",

# Info page
'pageinfo-title' => 'Tilɣa i « $1 »',
'pageinfo-not-current' => 'Ssurfet-aɣ, ulamek ad n-efk talɣut i ileqman iqdimen.',
'pageinfo-header-basic' => 'Tilɣa n udasil',
'pageinfo-header-edits' => 'Amezruy n ibeddilen',
'pageinfo-header-restrictions' => 'Amesten n usebter',
'pageinfo-header-properties' => 'Ayla n usebter',
'pageinfo-display-title' => 'Azwel yebeqqeḍen',
'pageinfo-default-sort' => 'Tasarut n ufran s lexṣas',
'pageinfo-length' => 'Tiddi n usebter (s itamḍanen)',
'pageinfo-article-id' => 'Uṭṭun n usebter',
'pageinfo-language' => 'Tutlayt n ugbur n usebtar',
'pageinfo-content-model' => 'Talɣa n ugbur n usebtar',
'pageinfo-robot-policy' => 'Asbeddi sɣur iṛubuten',
'pageinfo-robot-index' => 'Tessireg',
'pageinfo-robot-noindex' => 'Tegdel',
'pageinfo-views' => 'Amḍan n timuɣliwin',
'pageinfo-watchers' => 'Amḍan n imttekkiyen yesɛan asebter agi deg umuɣ nsen n uɛassi',
'pageinfo-few-watchers' => 'Kkes-as $1 {{PLURAL:$1|amanay|imanayen}}',
'pageinfo-redirects-name' => 'Amḍan n izdayen ɣer asebtar agi',
'pageinfo-subpages-name' => 'Adu-isebtar n usebter agi',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|anegzum|inegzumen}}; $3 {{PLURAL:$3|ur-anegzum|ur-inegzumen}})',
'pageinfo-firstuser' => 'Ameslal n usebtar',
'pageinfo-firsttime' => 'Azmez n usnulfu n usebtar',
'pageinfo-lastuser' => 'Atekki aneggaru',
'pageinfo-lasttime' => 'Azmez n ubeddel aneggaru',
'pageinfo-edits' => 'Amḍan aɣrud n ibeddilen',
'pageinfo-authors' => 'Amḍan aɣrud n imeskaren iwḥiden',
'pageinfo-recent-edits' => 'Amḍan n ibeddilen imaynuten (deg $1 ineggura)',
'pageinfo-recent-authors' => 'Amḍan n imeskaren iwḥiden imaynuten',
'pageinfo-magic-words' => '{{PLURAL:$1|Awal n tiḥḥerga|Awalen n tiḥḥerga}} ($1)',
'pageinfo-hidden-categories' => '{{PLURAL:$1|Taggayt yeffren|Taggayin yeffren}} ($1)',
'pageinfo-templates' => '{{PLURAL:$1|Talɣa i seddan|Talɣiwin i seddan}} ($1)',
'pageinfo-transclusions' => '{{PLURAL:$1|Asebtar|Isebtar}} ayyes tesekcem ($1)',
'pageinfo-toolboxlink' => 'Tilɣa ɣef usebtar',
'pageinfo-redirectsto' => 'Ceggaɛ ɣer',
'pageinfo-redirectsto-info' => 'tiɣa',
'pageinfo-contentpage' => 'Yetweḥseb am asebtar n ugbur',
'pageinfo-contentpage-yes' => 'Ih',
'pageinfo-protect-cascading' => 'Imestan tetwakksen seg d-agi',
'pageinfo-protect-cascading-yes' => 'Ih',
'pageinfo-protect-cascading-from' => 'Imestan tetwakksen seg',
'pageinfo-category-info' => 'Tilɣa ɣef taggayt',
'pageinfo-category-pages' => 'Amḍan n isebtar',
'pageinfo-category-subcats' => 'Amḍan n adutaggayin',
'pageinfo-category-files' => 'Amḍan n ifuyla',

# Patrolling
'markaspatrolleddiff' => 'Rcem "yettwassenqden"',
'markaspatrolledtext' => 'Rcem amagrad-agi "yettwassenqden"',
'markedaspatrolled' => 'Rcem belli yettwasenqed',
'markedaspatrolledtext' => 'Lqem i textareḍ n [[:$1]] tettwassenqed.',
'rcpatroldisabled' => 'Yettwakkes asenqad n ibeddlen imaynuten',
'rcpatroldisabledtext' => 'Yettwakkes asenqad n ibeddlen imaynuten',
'markedaspatrollederror' => 'Ur yezmir ara ad yercem "yettwassenqden"',
'markedaspatrollederrortext' => 'Yessefk ad textareḍ tasiwelt akken a tt-trecmeḍ "yettwassenqden".',
'markedaspatrollederror-noautopatrol' => 'Ur tezmireḍ ara ad trecmeḍ ibeddilen inek "yettwassenqden".',
'markedaspatrollednotify' => 'Abeddel agi n $1 yetwacṛeḍ am aken yetwalsɣer.',
'markedaspatrollederrornotify' => 'Axṣar n ucṛaḍ am aken yetsenqed.',

# Patrol log
'patrol-log-page' => 'Aɣmis n usenqad',
'patrol-log-header' => 'Atan amezruy n ileqman yetwalsɣren.',
'log-show-hide-patrol' => '$1 amezruy n alstiɣuryin',

# Image deletion
'deletedrevision' => 'Tasiwelt taqdimt $1 tettumḥa.',
'filedeleteerror-short' => 'Tuccḍ deg tukksa n ufaylu : $1',
'filedeleteerror-long' => 'Llant tuccḍiwin deg tukksa n ufaylu :

$1',
'filedelete-missing' => 'Afaylu « $1 » ur yezmer ara ad yetwekkes acku ulac-it.',
'filedelete-old-unregistered' => 'Lqem n ufaylu « $1 » ulac-it deg taffa n isefka.',
'filedelete-current-unregistered' => 'Afaylu « $1 » ulac-it deg taffa n isefka.',
'filedelete-archive-read-only' => 'Akaram n aɣbaṛ « $1 » ur yezmer ara ad yetbeddel sɣur aqeddac.',

# Browsing diffs
'previousdiff' => '← Amgirred ssabeq',
'nextdiff' => 'Amgirred ameḍfir →',

# Media information
'mediawarning' => "'''Ɣuṛ-wet''': tawsit agi n ufaylu tezmer at sɛu angal aḥraymi.
Lukan a t-tesseqdceḍ yezmer ad yexsser aselkim inek/inem.",
'imagemaxsize' => "Tiddi tafellayt n tugniwin :<br />''(i isebtar n weglam ufaylu)''",
'thumbsize' => 'Tiddi n tugna tamecṭuḥt:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|asebtar|isebtar}}',
'file-info' => 'tiddi n ufaylu: $1, anaw n MIME: $2',
'file-info-size' => '$1 × $2 pixel, tiddi n ufaylu: $3, anaw n MIME: $4',
'file-info-size-pages' => '$1 × $2 iferdisen, tiddi n ufaylu : $3, tawsit MIME : $4, $5 {{PLURAL:$5|asebtar|isebtar}}',
'file-nohires' => 'Ulac resolution i tameqqrant fell-as.',
'svg-long-desc' => 'Afaylu SVG, tabadut n $1 × $2 pixel, lqedd : $3',
'svg-long-desc-animated' => 'Afaylu SVG yettewliwilen , tiddi $1 x $2 iferdisen, tiddi n ufaylu : $3',
'svg-long-error' => 'Afaylu SVG ur yeɣbel ara : $1',
'show-big-image' => 'Afaylu aneṣli',
'show-big-image-preview' => 'Tiddi n azaraskan agi : $1.',
'show-big-image-other' => '{{PLURAL:$2|Tabadut|Tibuda}} nniḍen : $1.',
'show-big-image-size' => '$1 × $2 iferdisen',
'file-info-gif-looped' => 'deg taglult',
'file-info-gif-frames' => '$1 {{PLURAL:$1|tugna|tugniwin}}',
'file-info-png-looped' => 'deg taglult',
'file-info-png-repeat' => 'yetwurar {{PLURAL:$1|tikelt|tikwal}}',
'file-info-png-frames' => '$1 {{PLURAL:$1|tugna|tugniwin}}',
'file-no-thumb-animation' => "'''Tamawt : Ɣef ljal n tilisa titiknitin, tugniwin n ufaylu agi ur sɛunt ara amray.'''",
'file-no-thumb-animation-gif' => "'''Tamawt : Ɣef ljal n tilisa titiknitin, tugniwin n ifuyla GIF deg tabadut tameqṛant am ttagi ur sɛunt ara amray.'''",

# Special:NewFiles
'newimages' => 'Umuɣ n ifayluwen imaynuten',
'imagelisttext' => "Deg ukessar yella wumuɣ n '''$1''' {{PLURAL:$1|ufaylu|yifayluwen}} $2.",
'newimages-summary' => 'Asebtar agi uslig yebeqqeḍ ifuyla ineggura i kteren.',
'newimages-legend' => 'Tastayt',
'newimages-label' => 'Isem n ufaylu (naɣ aḥric ines) :',
'showhidebots' => '($1 iṛubuten)',
'noimages' => 'Tugna ulac-itt.',
'ilsubmit' => 'Nadi',
'bydate' => 's uzemz',
'sp-newimages-showfrom' => 'Beqqeḍ ifuyla imaynuten seg $1 ar $2',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|$1 tasint|$1 tasinin}}',
'minutes' => '{{PLURAL:$1|$1 tamrect|$1 timercin}}',
'hours' => '{{PLURAL:$1|$1 asrag|$1 isragen}}',
'days' => '{{PLURAL:$1|$1 ass|$1 ussan}}',
'weeks' => '{{PLURAL:$1|$1 imalas|$1 imalasen}}',
'months' => '{{PLURAL:$1|$1 aggur|$1 agguren}}',
'years' => '{{PLURAL:$1|$1 aseggwas|$1 iseggwasen}}',
'ago' => '$1 aya',
'just-now' => 'Tura kan',

# Human-readable timestamps
'hours-ago' => '$1 {{PLURAL:$1|asrag|isragen}} aya',
'minutes-ago' => '$1 {{PLURAL:$1|tamrect|timercin}} aya',
'seconds-ago' => '$1 {{PLURAL:$1|tasint|tisinin}} aya',
'monday-at' => 'Arim af $1',
'tuesday-at' => 'Aram af $1',
'wednesday-at' => 'Ahad af $1',
'thursday-at' => 'Amhad af $1',
'friday-at' => 'Sem af $1',
'saturday-at' => 'Sed af $1',
'sunday-at' => 'Acer af $1',
'yesterday-at' => 'Iḍelli af $1',

# Bad image list
'bad_image_list' => 'Amasal d-wagi :

Ala umuɣen n ismiwar (i bdun s *) ddemen s amiḍan. Azday amezwaru n ujerriḍ ilaq ad yilli win n tugna icmeten.
Izdayen nniḍen ɣef yiwen ajerriḍ llan d tisuraf, am isebtar ɣef anta tugna tezmer at illi.',

# Metadata
'metadata' => 'Adferisefka',
'metadata-help' => 'Afaylu agi, yesɛa tilɣa tisutay, ahat d-tamsaknewt id ernan tilɣa agi. Ma afaylu yebeddel seg addad-is amezwaru, ahat kra n tilɣa ur zemrent ara ad illint d-timekdant s-ufaylu amiran.',
'metadata-expand' => 'Beqqeḍ tilɣa tummidin',
'metadata-collapse' => 'Ffer tilɣa tummidin',
'metadata-fields' => 'Urtan n adferisefka n tugniwin yellan deg umuɣ n izen agi, ad seddun deg usebter n aglam n tugna mi ṭabla n adferisefka at illi tesemẓi. Urtan nniḍen ad illin ffren m-ulac.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# Exif tags
'exif-imagewidth' => 'Tehri',
'exif-imagelength' => 'Taɣwzi',
'exif-bitspersample' => 'Ibitten s isger',
'exif-compression' => 'Tawsit n asekkusem',
'exif-photometricinterpretation' => 'Talɣa n uferdis n tugna',
'exif-orientation' => 'Taɣda',
'exif-samplesperpixel' => 'Tisegranin s uferdis n tugna',
'exif-planarconfiguration' => 'Aheggi n isefka',
'exif-ycbcrsubsampling' => 'Atug n adu-isefka n ulemmec n Y ar C',
'exif-ycbcrpositioning' => 'Aselfu n Y d C',
'exif-xresolution' => 'Tabadut taglawit',
'exif-yresolution' => 'Tabadut taratakt',
'exif-stripoffsets' => 'Asun n isefka n tugna',
'exif-rowsperstrip' => 'Amḍan n ijerriden s tasfift',
'exif-stripbytecounts' => 'Tiddi n itamḍanen s tasfift',
'exif-jpeginterchangeformat' => 'Ideg n SOI JPEG',
'exif-jpeginterchangeformatlength' => 'Tiddi s itamḍanen n isefka JPEG',
'exif-whitepoint' => 'Tiniskit n uqqa amellal',
'exif-primarychromaticities' => 'Tiniskit n tizwaranin',
'exif-ycbcrcoefficients' => 'Imuskiren YCbCr',
'exif-referenceblackwhite' => 'Azalen n tamselɣut aberkan d umellal',
'exif-datetime' => 'Azmez n ubeddel',
'exif-imagedescription' => 'Aglam n tugna',
'exif-make' => 'Amakras n taweṣṣaft',
'exif-model' => 'Talɣa n taweṣṣaft',
'exif-software' => 'Aseɣẓan yetseqdecen',
'exif-artist' => 'Ameskar',
'exif-copyright' => 'Amli n uzref n umeskar',
'exif-exifversion' => 'Lqem EXIF',
'exif-flashpixversion' => 'Lqem FlashPix',
'exif-colorspace' => 'Tallunt n tiniskit',
'exif-componentsconfiguration' => 'Anamek n yal isger',
'exif-compressedbitsperpixel' => 'Askar n usekkusem n tugna',
'exif-pixelydimension' => 'Tehri n tugna',
'exif-pixelxdimension' => 'Taɣwzi n tugna',
'exif-usercomment' => 'Iwenniten n useqdac',
'exif-relatedsoundfile' => 'Afaylu n eslu yeqqnen',
'exif-datetimeoriginal' => 'Azmez n tuddma tamezwarut',
'exif-datetimedigitized' => 'Azmez n usemḍen',
'exif-subsectime' => 'Azmez n ubeddel',
'exif-subsectimeoriginal' => 'Azmez n tuddma tamezwarut',
'exif-subsectimedigitized' => 'Azmez n usemḍen',
'exif-exposuretime' => 'Akud n timzikent',
'exif-exposuretime-format' => '$1 tas ($2 tas)',
'exif-fnumber' => 'Alday',
'exif-exposureprogram' => 'Ahil n timzikent',
'exif-spectralsensitivity' => 'Aḥalfu n uylal',
'exif-isospeedratings' => 'Aḥalfu ISO',
'exif-shutterspeedvalue' => 'Azzal n urjal n APEX',
'exif-aperturevalue' => 'Alday n APEX',
'exif-brightnessvalue' => 'Asaddi APEX',
'exif-exposurebiasvalue' => 'Aseɣti n timzikent',
'exif-maxaperturevalue' => 'Alday afellay',
'exif-subjectdistance' => 'Ameccaq n usentel',
'exif-meteringmode' => 'Askar n usket',
'exif-lightsource' => 'Aɣbalu n tafat',
'exif-flash' => 'Lebṛaq',
'exif-focallength' => 'Taɣwzi n usaḍas',
'exif-subjectarea' => 'Asun n usentel',
'exif-flashenergy' => 'Tanezmart n lebṛaq',
'exif-focalplanexresolution' => 'Tabadut taglawit n uɣawas asaḍas',
'exif-focalplaneyresolution' => 'Tabadut taratakt n uɣawas asaḍas',
'exif-focalplaneresolutionunit' => 'Aferdis n tabadut n uɣawas asaḍas',
'exif-subjectlocation' => 'Asideg n usentel',
'exif-exposureindex' => 'Amatar n timzikent',
'exif-sensingmethod' => 'Tawsit n umaṭṭaf',
'exif-filesource' => 'Aɣbal n ufaylu',
'exif-scenetype' => 'Tawsit n usayes',
'exif-customrendered' => 'Agmuḍ asagan',
'exif-exposuremode' => 'askar n timzikent',
'exif-whitebalance' => 'Tisistelt n imellalen',
'exif-digitalzoomratio' => 'Afmiḍi n zoom umḍin',
'exif-focallengthin35mmfilm' => 'Teɣzef n usaḍas i usaru 35 mm',
'exif-scenecapturetype' => 'Tawsit n tuddma n usayes',
'exif-gaincontrol' => 'Aḥkam n urrbeḥ',
'exif-contrast' => 'Amyeẓli',
'exif-saturation' => 'Aserhwu',
'exif-sharpness' => 'Tezdeg',
'exif-devicesettingdescription' => 'Aglam n tawila n allal',
'exif-subjectdistancerange' => 'Ameccaq n tamsalt',
'exif-imageuniqueid' => 'Asulay asuf n tugna',
'exif-gpsversionid' => 'Lqem n ticṛeṭ GPS',
'exif-gpslatituderef' => 'Tamselɣut i tafeltirit',
'exif-gpslatitude' => 'Tafeltirit',
'exif-gpslongituderef' => 'Tamselɣut i tazegrart',
'exif-gpslongitude' => 'Tazegrart',
'exif-gpsaltituderef' => 'Tamselɣut n usawen (0=asawen, 1=talqayt)',
'exif-gpsaltitude' => 'Talqayt',
'exif-gpstimestamp' => 'Asrag GPS (tamasragt tabelkamit)',
'exif-gpssatellites' => 'Igensaten yetseqdacen i akat',
'exif-gpsstatus' => 'Addad n unermas',
'exif-gpsmeasuremode' => 'askar n akat',
'exif-gpsdop' => 'Tiseddi n akat',
'exif-gpsspeedref' => 'Aferdis n tazzla n unermas GPS',
'exif-gpsspeed' => 'Tazzla n unermas GPS',
'exif-gpstrackref' => 'Tamesɣult i tanila n uwliwel',
'exif-gpstrack' => 'Tanila n uwliwel',
'exif-gpsimgdirectionref' => 'Tamesɣult i tanila n tugna',
'exif-gpsimgdirection' => 'Tanila n tugna',
'exif-gpsmapdatum' => 'Anagraw akalɣa yetseqdacen',
'exif-gpsdestlatituderef' => 'Tamesɣult i turrut n userken',
'exif-gpsdestlatitude' => 'Turrut n userken',
'exif-gpsdestlongituderef' => 'Tamesɣult i tazegrart n userken',
'exif-gpsdestlongitude' => 'Tazegrart n userken',
'exif-gpsdestbearingref' => 'Tamesɣult i anker n userken',
'exif-gpsdestbearing' => 'Anker n userken',
'exif-gpsdestdistanceref' => 'Tamesɣult i umeccaq ar userken',
'exif-gpsdestdistance' => 'Ameccaq ar userken',
'exif-gpsprocessingmethod' => 'Isem n tarrayt n usekker n GPS',
'exif-gpsareainformation' => 'Isem n taɣzut GPS',
'exif-gpsdatestamp' => 'Azmez GPS',
'exif-gpsdifferential' => 'Aseɣti aneẓlay GPS',
'exif-jpegfilecomment' => 'Awennit n ufaylu JPEG',
'exif-keywords' => 'Awalen yufraren',
'exif-worldregioncreated' => 'Aẓi n Umaḍal deg anwa tawlaft agi tetwadem',
'exif-countrycreated' => 'Tamurt deg anta tawlaft agi tetwadem',
'exif-countrycodecreated' => 'Angal n tamurt deg anta tawlaft agi tetwadem',
'exif-provinceorstatecreated' => 'Tamnaḍt neɣ Awanak deg anwa tawlaft agi tetwadem',
'exif-citycreated' => 'Tamdint deg anta tawlaft agi tetwadem',
'exif-sublocationcreated' => 'Amur n temdint deg anwa tawlaft agi tetwadem',
'exif-worldregiondest' => 'Timnaḍin n umaḍal yebeqqeḍen',
'exif-countrydest' => 'Timura yebeqqeḍen',
'exif-countrycodedest' => 'Tangalt n tamurt yebeqqeḍen',
'exif-provinceorstatedest' => 'Tamnaṭ naɣ Tamurt yebeqqeḍen',
'exif-citydest' => 'Tamdint yebeqqeḍen',
'exif-sublocationdest' => 'Aḥric n temdint yebeqqeḍen',
'exif-objectname' => 'Azwel amectuḥ',
'exif-specialinstructions' => 'Tinaḍi tusligin',
'exif-headline' => 'Azwel',
'exif-credit' => 'Asmad / imefki',
'exif-source' => 'Aɣbalu',
'exif-editstatus' => 'Aẓayer amaẓrag n tugna',
'exif-urgency' => 'Lḥir',
'exif-fixtureidentifier' => 'Isem n uferdis aslagan',
'exif-locationdest' => 'Amḍiq yebeqqeḍen',
'exif-locationdestcode' => 'Tangalt n umḍiq yebeqqeḍen',
'exif-objectcycle' => 'Taswiɛt n wass i amedia agi yessefra-d',
'exif-contact' => 'Tilɣa n unermis',
'exif-writer' => 'Ameskar',
'exif-languagecode' => 'Tutlayt',
'exif-iimversion' => 'Lqem n IIM',
'exif-iimcategory' => 'Taggayt',
'exif-iimsupplementalcategory' => 'Taggayin timarnanin',
'exif-datetimeexpires' => 'Ur tseqdac ara sakin',
'exif-datetimereleased' => 'Tuffɣa ass n',
'exif-originaltransmissionref' => 'Tangalt n usideg n tuzzna tamezwarut',
'exif-identifier' => 'Asulay',
'exif-lens' => 'Tilintit yetseqdacen',
'exif-serialnumber' => 'Uṭṭun n umazrar n timseknewt',
'exif-cameraownername' => 'Amli n timseknewt',
'exif-label' => 'Aglam',
'exif-datetimemetadata' => 'Azmez n abeddil aneggaru n adferisefka',
'exif-nickname' => 'Isem aralɣawi n tugna',
'exif-rating' => 'Tazmilt (ɣef 5)',
'exif-rightscertificate' => 'Aselkin n usefrek n izerfan',
'exif-copyrighted' => 'Aẓayer n uzref n umeskar',
'exif-copyrightowner' => 'Amaway n uzref n umeskar',
'exif-usageterms' => 'Tawtilt n usseqdec',
'exif-webstatement' => 'Taseɣrut n copyright askar uqqin',
'exif-originaldocumentid' => 'ID awḥid n taftart taneṣlit',
'exif-licenseurl' => 'URL n turagt',
'exif-morepermissionsurl' => 'Tilɣa ɣef turagin timlellayin',
'exif-attributionurl' => 'Deg alsasseqdec n tawuri agi, ilaq ad qqeneḍ ar',
'exif-preferredattributionname' => 'Deg alsasseqdec n tawuri agi, ilaq ad snemmer',
'exif-pngfilecomment' => 'Awennit n ufaylu PNG',
'exif-disclaimer' => 'Ur-tamasit',
'exif-contentwarning' => 'Alɣu ɣef ugbur',
'exif-giffilecomment' => 'Awennit n ufaylu GIF',
'exif-intellectualgenre' => 'Tawsit n uferdis',
'exif-subjectnewscode' => 'Angal n usentel',
'exif-scenecode' => 'Angal n usayes IPTC',
'exif-event' => 'Tadyant yetsnazelen',
'exif-organisationinimage' => 'Tuddsa yetsnazelen',
'exif-personinimage' => 'Aterras yetsnazelen',
'exif-originalimageheight' => 'Tafelleyt n tugna uqbel att ili tetwalssurret',
'exif-originalimagewidth' => 'Tehri n tugna uqbel att ili tetwalssurret',

# Exif attributes
'exif-compression-1' => 'War asekkusem',
'exif-compression-2' => 'CCITT Agraw 3 Teɣzef n usettengel Huffman yetbeddlen n tasekta 1',
'exif-compression-3' => 'CCITT Agraw 3 asettengel n fax',
'exif-compression-4' => 'CCITT Agraw 4 asettengel n fax',

'exif-copyrighted-true' => 'Ddaw azref n umeskar',
'exif-copyrighted-false' => 'Addad n izerfan n umeskar ur yesbadu ara',

'exif-unknowndate' => 'Azmez warisem',

'exif-orientation-1' => 'Amagnu',
'exif-orientation-2' => 'Tetti s udem aglawan',
'exif-orientation-3' => 'Tezzi s 180°',
'exif-orientation-4' => 'Tetti s udem aratak',
'exif-orientation-5' => 'Tezzi s 90° deg unamek imitti n usrag dɣa tetti s udem aratak',
'exif-orientation-6' => 'Tezzi s 90° deg unamek imitti n usrag',
'exif-orientation-7' => 'Tezzi s 90° deg unamek n usrag dɣa tetti s udem aratak',
'exif-orientation-8' => 'Tezzi s 90° deg unamek n usrag',

'exif-planarconfiguration-1' => 'Isefka iqriben',
'exif-planarconfiguration-2' => 'Isefka ibrarazen',

'exif-colorspace-65535' => 'Ur yezize ara',

'exif-componentsconfiguration-0' => 'Ulac it',

'exif-exposureprogram-0' => 'Ur yersen ara',
'exif-exposureprogram-1' => 'Awfus',
'exif-exposureprogram-2' => 'Ahil alugan',
'exif-exposureprogram-3' => 'Tazwart i ulday',
'exif-exposureprogram-4' => 'Tazwart i uqfel',
'exif-exposureprogram-5' => 'Ahil n usnulfu (azullen i tadrut n urti)',
'exif-exposureprogram-6' => 'Ahil n tigawt (azullen i urured n yqfel)',
'exif-exposureprogram-7' => 'Askar tafrist (i tugniwin s tama dɣa s ugilal iluɣen)',
'exif-exposureprogram-8' => 'Askar agama (i tugniwin n igmaten i llulcen)',

'exif-subjectdistance-value' => '$1 lmitra',

'exif-meteringmode-0' => 'Warisem',
'exif-meteringmode-1' => 'Alemmas',
'exif-meteringmode-2' => 'Allal amnekna deg agwans',
'exif-meteringmode-3' => 'Asfaw',
'exif-meteringmode-4' => 'Aget-asfaw',
'exif-meteringmode-5' => 'Talɣa',
'exif-meteringmode-6' => 'Aḥric',
'exif-meteringmode-255' => 'Nniḍen',

'exif-lightsource-0' => 'Warisem',
'exif-lightsource-1' => 'Tafukt n ass',
'exif-lightsource-2' => 'Arafaw afliyuṛi',
'exif-lightsource-3' => 'Tungsten (tafat tanesfawt)',
'exif-lightsource-4' => 'Lebṛaq',
'exif-lightsource-9' => 'Akud aceεlal',
'exif-lightsource-10' => 'Akud isignew',
'exif-lightsource-11' => 'Tili',
'exif-lightsource-12' => 'Asfaw afliyuṛi  « tafukt n ass » (D 5700 – 7100 K)',
'exif-lightsource-13' => 'Asfaw afliyuṛi amellal « ass » (N 4600 – 5400 K)',
'exif-lightsource-14' => 'Asfaw afliyuṛi amellal « asemmaḍ » (W 3900 – 4500 K)',
'exif-lightsource-15' => 'Asfaw afliyuṛi amellal (WW 3200 – 3700 K)',
'exif-lightsource-17' => 'Tafat talugent A',
'exif-lightsource-18' => 'Tafat talugent B',
'exif-lightsource-19' => 'Tafat talugent C',
'exif-lightsource-24' => 'Tungsten ISU n usakwen',
'exif-lightsource-255' => 'Aɣbalu nniḍen n tafat',

# Flash modes
'exif-flash-fired-0' => 'Lebṛaq ur yendeḥ ara',
'exif-flash-fired-1' => 'Lebṛaq yendeḥ',
'exif-flash-return-0' => 'ula d yiwen n strub ur d-yerra ara tasɣent n tifin',
'exif-flash-return-2' => 'strub ur-d i t-aff ara tafat id yuɣalen',
'exif-flash-return-3' => 'strub yuffad tuqqla n tafat',
'exif-flash-mode-1' => 'Tafat n lebaq yuwren',
'exif-flash-mode-2' => 'Tukksa n lebaq yuwren',
'exif-flash-mode-3' => 'askar awurman',
'exif-flash-function-1' => 'Ulac tasɣent n lebṛaq',
'exif-flash-redeye-1' => 'Tasɣent mgel-allen izeggwaɣen',

'exif-focalplaneresolutionunit-2' => 'Idebbuzen',

'exif-sensingmethod-1' => 'Aranbadu',
'exif-sensingmethod-2' => 'Amaṭṭaf n ini s yiwen aceṛṛun',
'exif-sensingmethod-3' => 'Amaṭṭaf n ini s sin iceṛṛunen',
'exif-sensingmethod-4' => 'Amaṭṭaf n ini s kṛaḍ iceṛṛunen',
'exif-sensingmethod-5' => 'Amaṭṭaf n ini ulkim',
'exif-sensingmethod-7' => 'Amaṭṭaf kṛaḍimzireg',
'exif-sensingmethod-8' => 'Amaṭṭaf n ini imzireg ulkim',

'exif-filesource-3' => 'Taweṣṣaft tumḍint',

'exif-scenetype-1' => 'Tugna n tafarut tusridt',

'exif-customrendered-0' => 'Akala alugen',
'exif-customrendered-1' => 'Akala yesagen',

'exif-exposuremode-0' => 'Awurman',
'exif-exposuremode-1' => 'Awfus',
'exif-exposuremode-2' => 'Tazercet tawurmant',

'exif-whitebalance-0' => 'Awurman',
'exif-whitebalance-1' => 'Awfus',

'exif-scenecapturetype-0' => 'Alugen',
'exif-scenecapturetype-1' => 'Agama',
'exif-scenecapturetype-2' => 'Tafrist',
'exif-scenecapturetype-3' => 'Asayes n iḍ',

'exif-gaincontrol-0' => 'Ulac',
'exif-gaincontrol-1' => 'Rrbeḥ ufrir s ubedlez',
'exif-gaincontrol-2' => 'Rrbeḥ ufrir s aṭas',
'exif-gaincontrol-3' => 'Rrbeḥ uzdir s ubedlez',
'exif-gaincontrol-4' => 'Rrbeḥ uzdir s aṭas',

'exif-contrast-0' => 'Amagnu',
'exif-contrast-1' => 'Abadlaz',
'exif-contrast-2' => 'Aẓayan',

'exif-saturation-0' => 'Amagnu',
'exif-saturation-1' => 'Abadlaz',
'exif-saturation-2' => 'Tameqqṛant',

'exif-sharpness-0' => 'Amagnu',
'exif-sharpness-1' => 'Alegɣan',
'exif-sharpness-2' => 'Aẓayan',

'exif-subjectdistancerange-0' => 'Warisem',
'exif-subjectdistancerange-1' => 'Amɣer',
'exif-subjectdistancerange-2' => 'Imeẓri iqerrben',
'exif-subjectdistancerange-3' => 'Imeẓri ibɛeden',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Agafa',
'exif-gpslatitude-s' => 'Anẓul',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Agmuḍ',
'exif-gpslongitude-w' => 'Amalu',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|lmitra}} nnig aswir n ilel',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|lmitra}} ddaw aswir n ilel',

'exif-gpsstatus-a' => 'Akat imir',
'exif-gpsstatus-v' => 'Agertiddit n akat',

'exif-gpsmeasuremode-2' => 'Akat s 2 tisektiwin',
'exif-gpsmeasuremode-3' => 'Akat s 3 tisektiwin',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Kilometr deg ssaɛa',
'exif-gpsspeed-m' => 'Miles deg usrag',
'exif-gpsspeed-n' => 'Tikerrist',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Ikilumetren',
'exif-gpsdestdistance-m' => 'igimen',
'exif-gpsdestdistance-n' => 'Miles iwlalen',

'exif-gpsdop-excellent' => 'Yufrar ($1)',
'exif-gpsdop-good' => 'Tamellayt ($1)',
'exif-gpsdop-moderate' => 'Tallalt ($1)',
'exif-gpsdop-fair' => 'Attwadag ($1)',
'exif-gpsdop-poor' => 'Yecmet ($1)',

'exif-objectcycle-a' => 'Tanzayt kan',
'exif-objectcycle-p' => 'Tameddit kan',
'exif-objectcycle-b' => 'Tanzayt d tameddit',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Anamud n tidett',
'exif-gpsdirection-m' => 'Anamud adkiran',

'exif-ycbcrpositioning-1' => 'Agwans',
'exif-ycbcrpositioning-2' => 'Azdi-sideg',

'exif-dc-contributor' => 'Imttekkiyen',
'exif-dc-coverage' => 'Azrag allunan naɣ akudan n umedia',
'exif-dc-date' => 'Azmez',
'exif-dc-publisher' => 'Amaẓrag',
'exif-dc-relation' => 'Imediaten iqqenen',
'exif-dc-rights' => 'Izerfan',
'exif-dc-source' => 'Aɣbalu umedia',
'exif-dc-type' => 'Tawsit n umedia',

'exif-rating-rejected' => 'Yerrad',

'exif-isospeedratings-overflow' => 'Ameqqṛan ugar 65535',

'exif-iimcategory-ace' => 'Tiẓuṛiyin, idles d amzel',
'exif-iimcategory-clj' => 'Anɣa d uṣaḍuf',
'exif-iimcategory-dis' => 'Tiwaɣin d timedriyin',
'exif-iimcategory-fin' => 'Tadamsa d tidyanin',
'exif-iimcategory-edu' => 'Asileɣ',
'exif-iimcategory-evn' => 'Tawennaṭ',
'exif-iimcategory-hth' => 'Tadawsa',
'exif-iimcategory-hum' => 'Aramsu alsi',
'exif-iimcategory-lab' => 'Amahil',
'exif-iimcategory-lif' => 'Askar n tudert dɣa n imezlan',
'exif-iimcategory-pol' => 'Tasertit',
'exif-iimcategory-rel' => 'Ddin d tifelsin',
'exif-iimcategory-sci' => 'Tussna d tatiknulujit',
'exif-iimcategory-soi' => 'Tuttriwin timettiyin',
'exif-iimcategory-spo' => 'Addalen',
'exif-iimcategory-war' => 'Ṭrad, taẓit d tasmessit',
'exif-iimcategory-wea' => 'Tasnignewt',

'exif-urgency-normal' => 'Alugen ($1)',
'exif-urgency-low' => 'Anammum ($1)',
'exif-urgency-high' => 'Afella ($1)',
'exif-urgency-other' => 'Lḥir id yefka amseqdac ($1)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'akk',
'namespacesall' => 'akk',
'monthsall' => 'akk',

# Email address confirmation
'confirmemail' => 'Sentem tansa n e-mail',
'confirmemail_noemail' => 'Ur tesɛiḍ ara tansa n email ṣaḥiḥ deg [[Special:Preferences|isemyifiyen n wemseqdac]] inek.',
'confirmemail_text' => '{{SITENAME}} yeḥweǧ aseɣbel n tansa e-mail inek/inem uqbel ad sexdemeḍ tanfa n tirawt.
Seqdec taqeffalt ddaw-agi iwakken ad cegɛeḍ e-mail n uragag ar tansa e-mail inek/inem.
Tirawt at sɛu azday deg-es tangalt. Tzemreḍ at seqdeceḍ tikkelt kan deg talast n ukud ;
llid azday agi deg iminig iwakken ad sergegeḍ tansa e-mail inek/inem.',
'confirmemail_pending' => 'Yettwazen-ak yagi ungal n usentem; lukan txelqeḍ isem wemseqdac tura kan,
ahat yessefk ad tegguniḍ cwiṭ qbel ad tɛreḍeḍ ad testeqsiḍ ɣef ungal amaynut.',
'confirmemail_send' => 'Azen-iyi-d angal n usentem s e-mail iwakken ad snetmeɣ.',
'confirmemail_sent' => 'E-mail yettwazen iwakken ad tsentmeḍ.',
'confirmemail_oncreate' => 'Angal n usentem yettwazen ar tansa n e-mail inek.
Yessefk ad tesseqdceḍ angal-agi iwakken ad tkecmeḍ, meɛna yessefk a t-tefkeḍ
iwakken ad xedmen yiḍaɣaren n email deg wiki-yagi.',
'confirmemail_sendfailed' => '{{SITENAME}} ur yezmir ara ad yazen asentem n email.
Ssenqed tansa n email inek.

Ahil n uzzun n e-mail yuɣal-d s-izen agi : $1',
'confirmemail_invalid' => 'Angal n usentem mačči ṣaḥiḥ. Waqila yemmut.',
'confirmemail_needlogin' => 'Yessefk $1 iwakken tesnetmeḍ tansa n email inek.',
'confirmemail_success' => 'Tansa e-mail inek/inem tergeg.
Tura tzemreḍ ad [[Special:UserLogin|qqeneḍ]].',
'confirmemail_loggedin' => 'Asentem n tansa n email inek yekfa tura.',
'confirmemail_subject' => 'Asentem n tansa n email seg {{SITENAME}}',
'confirmemail_body' => 'Amdan, ahat d kečč/kem, seg tansa IP $1,
yexleq amiḍan "$2" s tansa n e-mail deg {{SITENAME}}.

Iwakken ad sergegeḍ amiḍan agi d-win-inek/inem dɣa iwakken
an sermed tiwura n tirawt deg {{SITENAME}},
ilaq ad lkemeḍ aseɣwen agi deg iminig :

$3

Ma mačči d *kečč/kem*, ilaq ad lkemeḍ aseɣwen agi deg iminig :

$5

Angal n usentem-agi ad yemmut ass $4.',
'confirmemail_body_changed' => 'Amdan, ahat d kečč/kem, seg tansa IP $1,
yebeddel tansa email yeqqenen ar umiḍan "$2" n {{SITENAME}}.

Iwakken ad sergegeḍ amiḍan agi d-win-inek/inem dɣa iwakken
an sermed tiwura n tirawt deg {{SITENAME}},
ilaq ad lkemeḍ aseɣwen agi deg iminig :

$3

Ma mačči d *kečč/kem*, ilaq ad lkemeḍ aseɣwen agi deg iminig :

$5

Angal n usentem-agi ad yemmut ass $4.',
'confirmemail_body_set' => 'Amdan, ahat d kečč/kem, seg tansa IP $1,
yebeddel tansa email n umiḍan "$2" s ttagi ɣef {{SITENAME}}.

Iwakken ad sergegeḍ amiḍan agi d-win-inek/inem dɣa iwakken
an sermed tiwura n tirawt deg {{SITENAME}},
ilaq ad lkemeḍ aseɣwen agi deg iminig :

$3

Ma amiḍan agi mačči d * aylak/aylam*, ilaq ad lkemeḍ aseɣwen agi deg iminig :

$5

Angal n usentem-agi ad yemmut ass $4.',
'confirmemail_invalidated' => 'Aragag n tansa email yettusemmet',
'invalidateemail' => 'Semmet aragag n tansa email',

# Scary transclusion
'scarytranscludedisabled' => '[Yettwakkes assekcam n isebtar seg wiki tiyaḍ]',
'scarytranscludefailed' => '[Ur yezmir ara a d-yawi talɣa n $1]',
'scarytranscludefailed-httpstatus' => '[Abrir n tiririt n talɣa i $1 : HTTP $2]',
'scarytranscludetoolong' => '[URL agi uffay aṭas]',

# Delete conflict
'deletedwhileediting' => 'Aɣtal: Asebter-agi yettumḥa qbel ad tebdiḍ a t-tbeddleḍ!',
'confirmrecreate' => "Amseqdac [[User:$1|$1]] ([[User talk:$1|Meslay]]) yemḥu asebter-agi beɛd ad tebdiḍ abeddel axaṭer:
: ''$2''
G leɛnaya-k sentem belli ṣaḥḥ tebɣiḍ ad tɛiwedeḍ axlaq n usebter-agi.",
'confirmrecreate-noreason' => 'Amseqdac [[User:$1|$1]] ([[User talk:$1|Meslay]]) yemḥu asebter-agi wannag tebedduḍ att beddeleḍ. Ilaq ad sergegeḍ tebɣiḍ ad snulfuḍ tikkelt nniḍen asebtar agi.',
'recreate' => 'Ɛiwed xleq',

# action=purge
'confirm_purge_button' => 'Seɣbel',
'confirm-purge-top' => 'Mḥu lkac n usebter-agi?',
'confirm-purge-bottom' => 'Asenger n usebtar yetwekkes-it seg tazarkatut n ubeqqeḍ dɣa yetḥettem lqem ines aneggaru ad yetbeqqeḍ.',

# action=watch/unwatch
'confirm-watch-button' => 'Seɣbel',
'confirm-watch-top' => 'Rnu asebter-agi i wumuɣ n uɛessi inek ?',
'confirm-unwatch-button' => 'Seɣbel',
'confirm-unwatch-top' => 'Ekkes asebter-agi seg wumuɣ n uɛessi inek ?',

# Multipage image navigation
'imgmultipageprev' => '← asebter ssabeq',
'imgmultipagenext' => 'asebter ameḍfir →',
'imgmultigo' => 'Ruḥ!',
'imgmultigoto' => 'Ruḥ ar usebtar $1',

# Language selector for translatable SVGs
'img-lang-default' => '(tutlayt s lexṣas)',
'img-lang-info' => 'Beqqeḍ tugna agi s $1 $2.',
'img-lang-go' => 'Ruḥ',

# Table pager
'ascending_abbrev' => 'asawen',
'descending_abbrev' => 'akessar',
'table_pager_next' => 'Asebtar ameḍfir',
'table_pager_prev' => 'Asebtar ssabeq',
'table_pager_first' => 'Asebtar amezwaru',
'table_pager_last' => 'Asebtar aneggaru',
'table_pager_limit' => 'Ssken $1 n yiferdas di mkul asebtar',
'table_pager_limit_label' => 'Agemmuḍ deg usebtar :',
'table_pager_limit_submit' => 'Ruḥ',
'table_pager_empty' => 'Ulac igmad',

# Auto-summaries
'autosumm-blank' => 'Yekkes akk aḍris seg usebter',
'autosumm-replace' => "Ibeddel asebtar s '$1'",
'autoredircomment' => 'Asemmimeḍ ar [[$1]]',
'autosumm-new' => 'Asebtar amaynut: $1',

# Size units
'size-bytes' => '$1 B/O',
'size-kilobytes' => '$1 KB/KO',
'size-megabytes' => '$1 MB/MO',
'size-gigabytes' => '$1 GB/GO',

# Live preview
'livepreview-loading' => 'Assisi…',
'livepreview-ready' => 'Assisi… D ayen!',
'livepreview-failed' => 'Pre-timeẓriwt taǧiḥbuṭ texser!
Ɛreḍ pre-timeẓriwt tamagnut.',
'livepreview-error' => 'Pre-timeẓriwt taǧiḥbuṭ texser: $1 "$2"
Ɛreḍ pre-timeẓriwt tamagnut.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Ibeddelen n ddaw n $1 {{PLURAL:$1|tasint|tisinin}} ur ttbanen ara deg umuɣ-agi.',
'lag-warn-high' => 'Acku af talalut taxatart n uqeddac n taffa n isefka, ibeddelen n ddaw n $1 {{PLURAL:$1|tasint|tisinin}} ur ttbanen ara deg umuɣ-agi.',

# Watchlist editor
'watchlistedit-numitems' => 'Mebla isebtar "Amyannan", umuɣ n uɛessi inek ɣur-s {{PLURAL:$1|1 wezwel|$1 yizwalen}}.',
'watchlistedit-noitems' => 'Umuɣ n uɛessi inek ur yesɛi ḥedd izwal.',
'watchlistedit-normal-title' => 'Beddel umuɣ n uɛessi',
'watchlistedit-normal-legend' => 'Kkes izwal seg wumuɣ n uɛessi',
'watchlistedit-normal-explain' => 'Izwal deg wumuɣ n uɛessi ttbanen-d deg ukessar. Akken ad tekkseḍ yiwen wezwel, wekki ɣef tenkult i zdat-s, umbeɛd wekki ɛef "Kkes izwal". Tzemreḍ daɣen [[Special:EditWatchlist/raw|ad tbeddleḍ umuɣ n uɛessi (raw)]].',
'watchlistedit-normal-submit' => 'Kkes izwal',
'watchlistedit-normal-done' => '{{PLURAL:$1|1 wezwel yettwakkes|$1 yizwal ttwakksen}} seg wumuɣ n uɛessi inek:',
'watchlistedit-raw-title' => 'Beddel umuɣ n uɛessi (raw)',
'watchlistedit-raw-legend' => 'Beddel umuɣ n uɛessi (raw)',
'watchlistedit-raw-explain' => 'Izwal n umuɣ inek/inem n uɛassi llan beqqeḍen ddaw agi dɣa tzemreḍ ad ten beddeleḍ s timerniwt neɣ tukksa seg umuɣ (yiwen azwel s azagg).
Ma tfukeḍ, senned ɣef taqeffalt « {{int:Watchlistedit-raw-submit}} » ddaw agi.
Tzemreḍ daɣen [[Special:EditWatchlist|ad seqdeceḍ amaẓrag amagnu]].',
'watchlistedit-raw-titles' => 'Izwal:',
'watchlistedit-raw-submit' => 'Amucceḍ n umuɣ n uɛassi',
'watchlistedit-raw-done' => 'Umuɣ n uɛessi inek yettubeddel.',
'watchlistedit-raw-added' => '{{PLURAL:$1|1 wezwel |$1 yizwal}} nnernan:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|1 wezwel yettwakkes|$1 yizwal ttwakksen}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Umuɣ n uɛessi',
'watchlisttools-edit' => 'Ẓer u beddel umuɣ n uɛessi',
'watchlisttools-raw' => 'Beddel umuɣ n uɛessi (raw)',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|amyannan]])',

# Core parser functions
'unknown_extension_tag' => 'Ticṛeṭ n usiɣzef « $1 » warisem',
'duplicate-defaultsort' => 'Ɣur-wet : tasarut n ufran m-ulac « $2 » atsefεej tasarut n uqbel « $1 ».',

# Special:Version
'version' => 'Lqem',
'version-extensions' => 'Isiɣzaf i serkeben',
'version-specialpages' => 'isebtar usligen',
'version-parserhooks' => 'Imguden n umsisleḍ n taseddast',
'version-variables' => 'Imuttiyen',
'version-antispam' => 'Aḥezzeb n spam',
'version-skins' => 'Igelman',
'version-other' => 'Nniḍen',
'version-mediahandlers' => 'Amsqerdec n imediaten',
'version-hooks' => 'Imguden',
'version-parser-extensiontags' => 'Ticraḍ yeẓẓlen n umsisleḍ n taseddast',
'version-parser-function-hooks' => 'Tiseɣnin yeẓẓlen n umsisleḍ n taseddast',
'version-hook-name' => 'Isem n umgud',
'version-hook-subscribedby' => 'Imeltaɣen :',
'version-version' => '(lqem $1)',
'version-license' => 'Turagt MediaWiki',
'version-ext-license' => 'Turagt',
'version-ext-colheader-name' => 'Asiɣzef',
'version-ext-colheader-version' => 'Lqem',
'version-ext-colheader-license' => 'Turagt',
'version-ext-colheader-description' => 'Aglam',
'version-ext-colheader-credits' => 'Imeskaren',
'version-license-title' => 'Turagt i $1',
'version-license-not-found' => 'Ur d-n-uffa ara talɣut tummidt n turagt i usiɣzef agi.',
'version-credits-title' => 'Isnemmiren i $1',
'version-credits-not-found' => 'Ur d-n-uffa ara talɣut tummidt n isnemmiren i usiɣzef agi.',
'version-poweredby-credits' => "Wiki agi yetelḥu s '''[https://www.mediawiki.org/ MediaWiki]''', copyright © 2001-$1 $2.",
'version-poweredby-others' => 'nniḍen',
'version-poweredby-translators' => 'imsuqqlen n translatewiki.net',
'version-credits-summary' => 'Nebɣa an snemmer imdanen agi i uttekki nsen ar [[Special:Version|MediaWiki]].',
'version-license-info' => 'MediaWiki d aseɣẓan ilelli, Tzemreḍ at alsferqeḍ neɣ at beddeleḍ ɣef leḥsab n irmawen n Turagt Tazayezt Tamatut GNU aken i ttid suffeɣ Free Software Foundation ; ihi lqem 2 n turagt, neɣ (aken i tebɣiḍ) akkw lqem taqdimt.

MediaWiki yetwafreq iwakken  ad yenfeɛ, maca ULAC AḌMAN, war aḍman n TANEZZUT neɣ ASSEZGI I ASSEQDEC AMAẒLAY. Zeṛ Turagt Tazayezt Tamatut GNU i tilɣa tummidin.

Ahat teḍḍfeḍ [{{SERVER}}{{SCRIPTPATH}}/COPYING anɣel n Turagt Tazayezt Tamatut GNU] s ahil agi, mulac, aru i Free Software Foundation, Inc., 51, aɣlad Franklin, annag wis 5, Boston, MA 02110-1301, Iwunak Yeddukklen n Temrikt neɣ [//www.gnu.org/licenses/old-licenses/gpl-2.0.html ɣer-itt uqqin].',
'version-software' => 'Iseɣẓanen i serkeben',
'version-software-product' => 'Afaris',
'version-software-version' => 'Lqem',
'version-entrypoints' => 'Tansa URL n irden n wekcam',
'version-entrypoints-header-entrypoint' => 'Ired n wekcam',
'version-entrypoints-header-url' => 'Tansa URL',

# Special:Redirect
'redirect' => 'Alssniled s ufaylu, amseqdac, asebtar neɣ ID n tacaggart',
'redirect-legend' => 'Alsnil ɣer asebtar neɣ afaylu',
'redirect-summary' => 'Asebtar agi uslig yetalssnil ɣeṛ ufaylu (isem n ufaylu yetwefked), asebtar (ID n tacaggart neɣ n usebtar id yetwafken) neɣ asebtar n umseqdac (ID umḍin n umseqdac yetwefked). Asseqdec : [[{{#Special:Redirect}}/file/Example.jpg]], [[{{#Special:Redirect}}/page/64308]], [[{{#Special:Redirect}}/revision/328429]], neɣ [[{{#Special:Redirect}}/user/101]].',
'redirect-submit' => 'Ruḥ',
'redirect-lookup' => 'Anadi :',
'redirect-value' => 'Azal :',
'redirect-user' => 'ID n umseqdac',
'redirect-page' => 'Uṭṭun n usebter',
'redirect-revision' => 'Tacaggart n usebtar',
'redirect-file' => 'Isem n ufaylu',
'redirect-not-exists' => 'Azal ulac-it',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Anadi n allusen',
'fileduplicatesearch-summary' => 'Anadi n ineɣlan n ifuyla kifkif ɣef leḥsab n udsil nsen n udway.',
'fileduplicatesearch-legend' => 'Nadi allus',
'fileduplicatesearch-filename' => 'Isem n ufaylu :',
'fileduplicatesearch-submit' => 'Nadi',
'fileduplicatesearch-info' => '$1 × $2 pixel<br />Tiddi n ufaylu : $3<br />Anaw MIME : $4',
'fileduplicatesearch-result-1' => 'Afaylu « $1 » ur yesɛa ara allus.',
'fileduplicatesearch-result-n' => 'Afaylu « $1 » yesɛa {{PLURAL:$2|1 allus|$2 allusen}}.',
'fileduplicatesearch-noresults' => 'Ulac afaylu s isem « $1 ».',

# Special:SpecialPages
'specialpages' => 'isebtar usligen',
'specialpages-note-top' => 'Aglam',
'specialpages-note' => '* Isebtar usligen imugna.
* <span class="mw-specialpagerestricted">Isebtar usligen ukrifen.</span>',
'specialpages-group-maintenance' => 'Iṛabulen n ibeddi',
'specialpages-group-other' => 'Isebtar usligen nniḍen',
'specialpages-group-login' => 'Asulu / assiggez',
'specialpages-group-changes' => 'Ibeddilen imaynuten d iɣmisen',
'specialpages-group-media' => 'Iṛabulen d taktert n ifuyla media',
'specialpages-group-users' => 'Imseqdacen d izerfan yeqqnen',
'specialpages-group-highuse' => 'Isebtar n usseqdec n waṭas',
'specialpages-group-pages' => 'Umuɣen n isebtar',
'specialpages-group-pagetools' => 'Ifecka i isebtar',
'specialpages-group-wiki' => 'Isefka d ifecka',
'specialpages-group-redirects' => 'Isebtar usligen yetsiwzelen',
'specialpages-group-spam' => 'Ifecka mgal e-mail yerkan',

# Special:BlankPage
'blankpage' => 'Asebtar ilem',
'intentionallyblankpage' => 'Asebtar agi, yetweǧǧ (qrib) d-ilem s lebɣi.',

# External image whitelist
'external_image_whitelist' => ' #Eǧǧ ajeṛṛiḍ agi aken yella.<pre>
#Inid tifersa n tinfaliyin timeɣẓanin (ala tama yellan gar //) ddaw-agi.
#Ad qqenen s URL n tugniwin timniriyin.
#Tid i qqenen ad beqqeḍent am tugniwin, m-ulac ad i beqqeḍ kan azday ɣer tugna.
#Ijeṛṛiḍen i bdun s yiwen # ad ilin εqelen am iwenniten.
#Umuɣ agi ur yeseqdac ara aselken n isekkilen.

#Ger akk tifersa n tinfaliyin timeɣẓanin nnig ajeṛṛiḍ  agi. Eǧǧ ajeṛṛiḍ agi aken yella.</pre>',

# Special:Tags
'tags' => 'Ticṛaḍ n ibeddilen sɣeblent',
'tag-filter' => 'Astay n [[Special:Tags|ticraḍ]] :',
'tag-filter-submit' => 'Sti',
'tag-list-wrapper' => '([[Special:Tags|{{PLURAL:$1|Ticṛeṭ|Ticraḍ}}]] : $2)',
'tags-title' => 'Ticraḍ',
'tags-intro' => 'Asebtar agi yettaked umuɣ n ticraḍ ay aseɣẓan yezmer ad yeseqdec iwakken ad yecreḍ abeddel d anamek i yal abeddel.',
'tags-tag' => 'Isem n ticṛeṭ',
'tags-display-header' => 'Tummant deg umuɣen n ibeddilen',
'tags-description-header' => 'Aglam ummid n ticṛeṭ',
'tags-active-header' => 'Urmid ?',
'tags-hitcount-header' => 'Ibeddilen yesɛan ticraḍ',
'tags-active-yes' => 'Ih',
'tags-active-no' => 'Ala',
'tags-edit' => 'beddel',
'tags-hitcount' => '$1 {{PLURAL:$1|abeddel|ibeddlen}}',

# Special:ComparePages
'comparepages' => 'Qaren isebtar',
'compare-page1' => 'Asebtar 1',
'compare-page2' => 'Asebtar 2',
'compare-rev1' => 'Lqem 1',
'compare-rev2' => 'Lqem 2',
'compare-submit' => 'Qaren',
'compare-invalid-title' => 'Azwel id efkiḍ ur yeɣbel ara.',
'compare-title-not-exists' => 'Azwel id efkiḍ ulac-it.',
'compare-revision-not-exists' => 'Lqem id efkiḍ ulac-it.',

# Database error messages
'dberr-header' => 'Wiki agi yesɛa ugur',
'dberr-problems' => 'Ssurfet-aɣ ! Asmel agi yemliled ilɣiten itikniten.',
'dberr-again' => 'Ɛreḍ ad arǧuḍ kra n tisdidin dɣa sismeḍ.',
'dberr-info' => '(Ulamek an qqen ar uqeddac n taffa n isefka : $1)',
'dberr-info-hidden' => '(Ulamek an qqen ar uqeddac n taffa n isefka)',
'dberr-usegoogle' => 'Tzemreḍ ad ɛreḍeḍ anadi s Google deg ukud agi.',
'dberr-outofdate' => 'Ani i imataren nsen n ugbur nneɣ zemren ad yetwagaren',
'dberr-cachederror' => 'Wagi d anɣel yeffren n usebtar i tebɣiḍ, yezmer ad yetwagar.',

# HTML forms
'htmlform-invalid-input' => 'Igna nnulfan-d s kra n azalen',
'htmlform-select-badoption' => 'Azal id efkeḍ mačči d taxtiṛit i ɣeblen.',
'htmlform-int-invalid' => 'Azal id efkeḍ mačči d amḍan ummid.',
'htmlform-float-invalid' => 'Azal id efkeḍ mačči d amḍan.',
'htmlform-int-toolow' => 'Azal id efkeḍ d-amectuḥ ugar adday n $1',
'htmlform-int-toohigh' => 'Azal id efkiḍ yugar afellay n $1',
'htmlform-required' => 'Ilaq azal agi',
'htmlform-submit' => 'Ssumer',
'htmlform-reset' => 'Ekkes ibeddilen',
'htmlform-selectorother-other' => 'Nniḍen',
'htmlform-no' => 'Ala',
'htmlform-yes' => 'Ih',
'htmlform-chosen-placeholder' => 'Fren taxtiṛit',

# SQLite database support
'sqlite-has-fts' => '$1 s anadi deg uḍris ummid yezmer',
'sqlite-no-fts' => '$1 war anadi deg uḍris ummid yezmer',

# New logging system
'logentry-delete-delete' => '$1 {{GENDER:$2|yemḥa}} asebtar $3',
'logentry-delete-restore' => '$1 {{GENDER:$2|yerred|terred}} asebtar $3',
'logentry-delete-event' => '$1 {{GENDER:$2|yebeddel|tebeddel}} tabanit {{PLURAL:$5|n tadyant n uɣmis|n $5 tidyanin n uɣmis}} ɣef $3: $4',
'logentry-delete-revision' => '$1 {{GENDER:$2|yebeddel|tebeddel}} tabani {{PLURAL:$5|n lqem|n $5 ileqman}} ɣef usebtar $3: $4',
'logentry-delete-event-legacy' => '$1 {{GENDER:$2|yebeddel|tebeddel}} tabanit n tidyanin n uɣmis ɣef $3',
'logentry-delete-revision-legacy' => '$1 {{GENDER:$2|yebeddel|tebeddel}} tabanit n ileqman ɣef usebtar $3',
'logentry-suppress-delete' => '$1 {{GENDER:$2|yemḥa|temḥa}} asebtar $3',
'logentry-suppress-event' => '$1 {{GENDER:$2|yebeddel s lbaḍna|tebeddel s lbaḍna}} tabanit {{PLURAL:$5|n tadyant n uɣmis|n $5 tidyanin n uɣmis}} ɣef $3: $4',
'logentry-suppress-revision' => '$1 {{GENDER:$2|yebeddel s lbaḍna|tebeddel s lbaḍna}} tabani {{PLURAL:$5|n lqem|n $5 ileqman}} ɣef usebtar $3: $4',
'logentry-suppress-event-legacy' => '$1 {{GENDER:$2|yebeddel s lbaḍna|tebeddel s lbaḍna}} tabanit n tidyanin n uɣmis ɣef $3',
'logentry-suppress-revision-legacy' => '$1 {{GENDER:$2|yebeddel s lbaḍna|tebeddel s lbaḍna}} tabanit n ileqman ɣef usebtar $3',
'revdelete-content-hid' => 'agbur yeffren',
'revdelete-summary-hid' => 'agzul n ubeddil yeffren',
'revdelete-uname-hid' => 'isem n umseqdac yeffren',
'revdelete-content-unhid' => 'agbur yebeqqeḍen',
'revdelete-summary-unhid' => 'agzul n ubeddil yebeqqeḍen',
'revdelete-uname-unhid' => 'isem n umseqdac yebeqqeḍen',
'revdelete-restricted' => 'ikrafen snesen i inedbalen',
'revdelete-unrestricted' => 'ikrafen tetwakksen i inedbalen',
'logentry-move-move' => '$1 {{GENDER:$2|yebeddel isem|tebeddel isem}} n usebtar seg $3 ar $4',
'logentry-move-move-noredirect' => '$1 {{GENDER:$2|yebeddel isem|tebeddel isem}} n usebtar seg $3 ar $4 war anegzum',
'logentry-move-move_redir' => '$1 {{GENDER:$2|yesiweḍ|tesiweḍ}} asebtar seg $3 ar $4 nnig anegzum',
'logentry-move-move_redir-noredirect' => '$1 {{GENDER:$2|yesiweḍ|tesiweḍ}} asebtar $3 ar $4 nnig anegzum war tuǧǧin n unegzum',
'logentry-patrol-patrol' => '$1 {{GENDER:$2|yecṛeḍ|tecṛeḍ}} tacaggart $4 n usebtar $3 am aken tetwalsɣer',
'logentry-patrol-patrol-auto' => '$1 {{GENDER:$2|yecṛeḍ|tecṛeḍ}} s uwurman tacaggart $4 n usebtar $3 am aken tetwalsɣer',
'logentry-newusers-newusers' => 'Amiḍan n umseqdac $1 {{GENDER:$2|yetwaxleq}}',
'logentry-newusers-create' => 'Amiḍan n umseqdac $1 {{GENDER:$2|yetwaxleq}}',
'logentry-newusers-create2' => 'Amiḍan n umseqdac $3 {{GENDER:$2|yetwaxleq}} sɣur $1',
'logentry-newusers-byemail' => 'Amiḍan n umseqdac $3 {{GENDER:$2|yetwaxleq}} sɣur $1 dɣa awal n uɛaddi yetwaceggaɛ deg email',
'logentry-newusers-autocreate' => 'Amiḍan n umseqdac $1 {{GENDER:$2|yetwaxleq}} s uwurman',
'logentry-rights-rights' => '$1 {{GENDER:$2|yebeddel|tebeddel}} amyili ar ugraw i $3 n $4 ar $5',
'logentry-rights-rights-legacy' => '$1 {{GENDER:$2|yebeddel|tebeddel}} amyili ar ugraw i $3',
'logentry-rights-autopromote' => '$1 {{GENDER:$2|yettwasmel|tettwasmel}} s uwurman seg $4 ar $5',
'rightsnone' => '(ulaḥedd)',

# Feedback
'feedback-bugornote' => 'Ma teḥgiḍ iman-ik/im ad gelmeḍ agnu atekni i tilɣa tummidtin, [$1 ɛeyyen ɣef anezri].
Mulac, tzemreḍ ad seqdeceḍ tiferkit ddaw agi. Awennit inek/inem ad yetwernu ar usebtar « [$3 $2] », s isem-ik/im n umseqdac d iminig i tseqdeceḍ.',
'feedback-subject' => 'Asentel :',
'feedback-message' => 'Izen :',
'feedback-cancel' => 'Semmewet',
'feedback-submit' => 'Ceggaɛ iwenniten',
'feedback-adding' => 'Rnud iwenniten inek/inem ar usebter...',
'feedback-error1' => 'Tuccḍa : Agmuḍ n API ur yetwaɛqel ara',
'feedback-error2' => 'Tuccḍa  : abeddel yexṣer',
'feedback-error3' => 'Tuccḍa : Ulac tamrarut n API',
'feedback-thanks' => 'Tanemmirt ! Awennit inek/inem yeffeɣ-d ɣef usebtar "[$2 $1]".',
'feedback-close' => 'D ayen',
'feedback-bugcheck' => 'D ayen igerrzen ! Senqed kan ma mačči d yiwen n [$1 inezriyen i n-sen yakan].',
'feedback-bugnew' => 'Senqedeɣ. Ɛeyyen anezri amaynut',

# Search suggestions
'searchsuggest-search' => 'Nadi',
'searchsuggest-containing' => 'yesɛan...',

# API errors
'api-error-badaccess-groups' => 'Ur tesɛiḍ ara turagt ad smireḍ ifuyla ɣef wiki agi.',
'api-error-badtoken' => 'Tuccḍa tagensit : yir « tiddest ».',
'api-error-copyuploaddisabled' => 'Issenɣal seg URL nsan ɣef aqeddac agi.',
'api-error-duplicate' => '{{PLURAL:$1|[Yella yakan $2 afaylu nniḍen]|[Llan yakan $2 ifuyla nniḍen]}} ɣef asmel agi s ugbur am winna.',
'api-error-duplicate-archive' => '{{PLURAL:$1|[Yella yakan $2 afaylu nniḍen]|[Llan yakan $2 ifuyla nniḍen]}} ɣef asmel agi s ugbur am winna, maca {{PLURAL:$1|yetwekkes|tetwekksen}}.',
'api-error-duplicate-archive-popup-title' => 'Sleg {{PLURAL:$1|afaylu|ifuyla}} yetwekksen yakan.',
'api-error-duplicate-popup-title' => '{{PLURAL:$1|Afaylu|Ifuyla}} islagen.',
'api-error-empty-file' => 'Afaylu id ceggɛeḍ d-ilem.',
'api-error-emptypage' => 'Asnulfu n isebtar ilemawen ur yareg ara.',
'api-error-fetchfileerror' => 'Tuccḍa tagensit : Yella kra ur yaɛeddan ara s luwqem deg tiririt n ufaylu.',
'api-error-fileexists-forbidden' => 'Afaylu s isem "$1" yella yakan, dɣa ur nezmer ara at n-mzey.',
'api-error-fileexists-shared-forbidden' => 'Afaylu s isem "$1" yella yakan deg ukaram n ifuyla yettwacerken, dɣa ur nezmer ara at n-mzey.',
'api-error-file-too-large' => 'Afaylu id cegɛed d-ameqqṛan aṭas.',
'api-error-filename-tooshort' => 'Isem n ufaylu d-awezzlan aṭas.',
'api-error-filetype-banned' => 'Tawsit agi n ufaylu d-tazanbagt.',
'api-error-filetype-banned-type' => "''' « .$1 » '''mačči d {{PLURAL:$4|tawit n ufaylu yesɛan turagt|tiwsatin n ufaylu yesɛan turagt}}. 
{{PLURAL:$3|Tawit n ufaylu yesɛan turagt d-wagi :|Tiwsatin n ufaylu yesɛan turagt d-wigi :}} $2.",
'api-error-filetype-missing' => 'Asiɣzef n ufaylu agi ulac-it.',
'api-error-hookaborted' => 'Abeddel i ɛerdeḍ ad xedmeḍ yetweḥbes s tamdeyt n usiɣzef.',
'api-error-http' => 'Tuccḍa tagensit : ur yezmer ara ad yeqqen ar uqeddac.',
'api-error-illegal-filename' => 'Isem n ufaylu agi ur yeɣbel ara.',
'api-error-internal-error' => 'Tuccḍa tagensit : Yella kra ur yelḥa ara s luwqem deg usekker n taktert inek/inem ɣef wiki agi.',
'api-error-invalid-file-key' => 'Tuccḍa tagensit : ulac afaylu deg uḥraz akudan.',
'api-error-missingparam' => 'Tuccḍa tagensit : Xuṣṣen iɣewwaren deg tuttra inek/inem.',
'api-error-missingresult' => 'Tuccḍa tagensit : Ur nezmer ara ad n-ini ma anɣel yetwaxeddem.',
'api-error-mustbeloggedin' => 'Ilaq ad qqeneḍ iwakken ad zdemeḍ ifuyla.',
'api-error-mustbeposted' => 'Tuccḍa tagensit : Tuttra agi teḥwaǧ tarrayt HTTP POST.',
'api-error-noimageinfo' => 'Azdam yetwaxdam, maca aqeddac ur d-yefka ara tilɣa ɣef ufaylu.',
'api-error-nomodule' => 'Tuccḍa tagensit : Ulac azegrir n ussenɣel.',
'api-error-ok-but-empty' => 'Tuccḍa tagensit : Ulac tamrarut seg uqeddac.',
'api-error-overwrite' => 'Asefxes n ufaylu yellan ur yeɣbel ara.',
'api-error-stashfailed' => 'Tuccḍa tagensit : aqeddac ur yezmer ara ad yekles afaylu uɛḍil.',
'api-error-publishfailed' => 'Tuccḍa tagensit : Aqeddac yexṣer imi yebɣa ad yessuffeɣ afaylu akudan.',
'api-error-stasherror' => 'Tella tuccḍa imi d-zdemeḍ afaylu iwakken ad yetweffer.',
'api-error-timeout' => 'Aqeddac ur d-yerra ara awal deg ukud yeḥeṛṛen.',
'api-error-unclassified' => 'Yefkad anezri warisem.',
'api-error-unknown-code' => 'Tuccḍa warisem : « $1 »',
'api-error-unknown-error' => 'Tuccḍa tagensit : Yella kra yexṣren deg ussenɣel n ufaylu inek.',
'api-error-unknown-warning' => 'Alɣu warisem : "$1".',
'api-error-unknownerror' => 'Tuccḍa warisem : « $1 »',
'api-error-uploaddisabled' => 'Azdam yensa ɣef wiki agi.',
'api-error-verification-error' => 'Ahat afaylu agi yefsed, neɣ asiɣzef ines ur yeɣbel ara.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|tasint|tisinin}}',
'duration-minutes' => '$1 {{PLURAL:$1|tamrect|timercin}}',
'duration-hours' => '$1 {{PLURAL:$1|asrag|isragen}}',
'duration-days' => '$1 {{PLURAL:$1|ass|ussan}}',
'duration-weeks' => '$1 {{PLURAL:$1|imalas|imulas}}',
'duration-years' => '$1 {{PLURAL:$1|aseggwas|iseggwasen}}',
'duration-decades' => '$1 {{PLURAL:$1|amrawass|amrawussan}}',
'duration-centuries' => '$1 {{PLURAL:$1|timiḍi|timiḍa}}',
'duration-millennia' => '$1 {{PLURAL:$1|agimseggwas|agimseggwasen}}',

# Image rotation
'rotate-comment' => 'Tugna tesseblelli s $1 {{PLURAL:$1|tafesna|tifesniwin}} deg tanila n tisegnatin n tamrint',

# Limit report
'limitreport-title' => 'Isefka n asekkey n umsisleḍ :',
'limitreport-cputime' => 'Akud CPU n usseqdac',
'limitreport-cputime-value' => '$1 {{PLURAL:$1|tasint|tisinin}}',
'limitreport-walltime' => 'Akud ilaw n usseqdac',
'limitreport-walltime-value' => '$1 {{PLURAL:$1|tasint|tisinin}}',
'limitreport-ppvisitednodes' => 'Amḍan n tikerwas n azarsekkar i rezzan',
'limitreport-ppgeneratednodes' => 'Amḍan n tikerwas n azarsekkar yettarewen',
'limitreport-postexpandincludesize' => 'Tiddi n isekcam sakin aderrec',
'limitreport-postexpandincludesize-value' => '$1/$2 {{PLURAL:$2|atamḍan|itamḍanen}}',
'limitreport-templateargumentsize' => 'Tiddi n tiɣiret n talɣa',
'limitreport-templateargumentsize-value' => '$1/$2 {{PLURAL:$2|atamḍan|itamḍanen}}',
'limitreport-expansiondepth' => 'Talqayt n aderrec tameqrant ugaren tiyaḍ',
'limitreport-expensivefunctioncount' => 'Amḍan n tiwura n tasleṭ ɣlayen',

# Special:ExpandTemplates
'expandtemplates' => 'Aderrec n talɣiwin',
'expand_templates_intro' => "Asebtar agi uslig yeqbel aḍris wiki dɣa i tɛemmed ad xeddemeḍ aderrec n talɣiwin yellan deg-es.
Yetexddem daɣen aderrec n tiseɣnin n parser am
<code><nowiki>{{</nowiki>#language:...}}</code> dɣa imuttiyen am
<code><nowiki>{{</nowiki>CURRENTDAY}}</code>.
Yetexddem aderrec n akkw ayen yella yesegrer s <nowiki>'''{{ }}'''</nowiki>.",
'expand_templates_title' => 'Azwel n usebtar, ma angal yetseqdac {{FULLPAGENAME}}, etc. :',
'expand_templates_input' => 'Aḍris wiki source :',
'expand_templates_output' => 'Aḍris wiki id yefka sakin aderrec',
'expand_templates_xml_output' => 'Agemmuḍ agrawan n tasleṭ, deg umasal XML',
'expand_templates_html_output' => 'Asuffeɣ s HTML aneṣli',
'expand_templates_ok' => 'Seɣbel',
'expand_templates_remove_comments' => 'Ekkes iwenniten',
'expand_templates_remove_nowiki' => 'Yetkkes ticraḍ <nowiki> deg ugemmuḍ',
'expand_templates_generate_xml' => 'Zeṛ talɣa n useklu n tasleṭ XML',
'expand_templates_generate_rawhtml' => 'Beqqeḍ HTML aneṣli',
'expand_templates_preview' => 'Azaraskan',

);
