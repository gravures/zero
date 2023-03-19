<?php
/**
 * Plugin Squelette Zero
 * (c) 2023 Gilles Coissac
 * Licence GNU/GPL
 */
 
if (!defined('_ECRIRE_INC_VERSION')) return;

function zero_affichage_final($flux) {
	if (
		$GLOBALS['html']
		and isset($GLOBALS['visiteur_session']['statut'])
		and $GLOBALS['visiteur_session']['statut'] == '0minirezo'
		and $GLOBALS['visiteur_session']['webmestre'] == 'oui'
		and strpos($flux, '<!-- insert_head -->') !== false
		and $p = stripos($flux, '</body>')
	) {
		if ($f = find_in_path('js/grid-viewer.js')) {
			$flux = substr_replace($flux, '<script type="text/javascript" src="' . $f . '"></script>', $p, 0);
		}
		if (
			(_VAR_MODE === 'debug' || _request('var_profile'))
			and $p = stripos($flux, '</head>')
		) {
			$file_css = direction_css(scss_select_css('css/spip.admin.css'));
			$css = file_get_contents($file_css);
			$css = "<style type='text/css'>$css</style>";
			$flux = substr_replace($flux, $css, $p, 0);
		}
	}
	return $flux;
}