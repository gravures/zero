<?php
/**
 * Plugin Squelette Zero
 * (c) 2023 Gilles Coissac
 * Licence GNU/GPL
 */
 
if (!defined('_ECRIRE_INC_VERSION')) return;


function zero_insert_head($flux) {
	if (
		$GLOBALS['html']
		and isset($GLOBALS['visiteur_session']['statut'])
		and $GLOBALS['visiteur_session']['statut'] == '0minirezo'
		and $GLOBALS['visiteur_session']['webmestre'] == 'oui'
	) {
		if (
			($cgv = find_in_path('js/cssGridViewer/css-grid-viewer.js'))
			and ($gv = find_in_path('js/grid-viewer.js'))
		) {
			$flux .= '<script type="text/javascript" src="' . $cgv . '"></script>'
			         . '<script type="text/javascript" src="' . $gv . '"></script>';
		}
	}
	return $flux;
}

