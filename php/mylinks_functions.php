<?php
require_once MYLINKS_DIR . 'vendor/autoload.php';

class mylinks_functions {

	public function __construct() {
		add_action( 'init', array( $this, 'init' ), 1 );
	}

	public function init() {
		add_action( 'wp_enqueue_scripts', array( $this, 'addScriptsCSS' ) );

		add_shortcode( 'mylinks_app', array( $this, 'showMyLinksApp' ) );
		
		$myReactAjax = new mylinks_ajax();
		add_action( 'wp_ajax_getMyLinks',array($myReactAjax,'getMyLinksData'));
	}

	public function addScriptsCSS() {
		//include your CSS
		wp_enqueue_style( 'my-links', MYLINKS_URL . 'css/my-links.css' );

		//enqueue jquery (already registered by WP)
		wp_enqueue_script( 'jquery' );

		//register react and react-dom
		wp_register_script( 'wp-react', 'https://fb.me/react-15.0.2.js' );
		wp_register_script( 'wp-react-dom', 'https://fb.me/react-dom-15.0.2.js' );
		//include your js with a dependency on react
		wp_enqueue_script( 'wpra', MYLINKS_URL . 'js/mylinks.js', [ 'wp-react', 'wp-react-dom' ] );

	}

	public function showMyLinksApp() {
		$output = '<div id="mylinksapp" />';
		return $output;
	}
}
