<?php

$GLOBALS['z_blocs'] = array('content', 'aside', 'extra', 'head', 'head_js', 'header', 'footer', 'breadcrumb', 'cartouche');


define('_ALBUMS_INSERT_HEAD_CSS', false);

// if (
// 	defined('_ZERO_AUTH_DEMO')
// 	? _ZERO_AUTH_DEMO
// 	: (
// 		isset($GLOBALS['visiteur_session']['statut'])
// 		and $GLOBALS['visiteur_session']['statut'] === '0minirezo'
// 		and $GLOBALS['visiteur_session']['webmestre'] === 'oui'
// 	)
// ) {
// 	_chemin(_DIR_PLUGIN_ZERO_DIST . "demo/");
// }