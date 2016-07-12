<?php

class mylinks_ajax {
	public function getMyLinksData() {
		$links = [ ];
		$links[] = (object)[ 'description' => 'Google.com', 'link' => 'http://google.com' ];
		$links[] = (object)[ 'description' => 'Asknice is not good', 'link' => 'http://asknice.com' ];
		$links[] = (object)[ 'description' => 'Egghead Training', 'link' => 'https://egghead.io' ];
		$links[] = (object)[ 'description' => 'WordPress Codex', 'link' => 'https://codex.wordpress.org/' ];
		$links[] = (object)[ 'description' => 'Material-UI for React', 'link' => 'http://www.material-ui.com/#/' ];
		echo json_encode( $links );
		wp_die();
	}

}