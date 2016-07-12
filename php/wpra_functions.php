<?php

class wpra_functions {

	public function __construct() {
		add_action( 'init', array( $this, 'init' ), 1 );
	}

	public function init() {
		add_action( 'wp_enqueue_scripts', array( $this, 'addScriptsCSS' ) );

		add_shortcode( 'wpra_app', array( $this, 'showReactApp' ) );
	}

	public function addScriptsCSS() {
		//include your CSS
		wp_enqueue_style( 'wp-react-app', WPRA_URL . 'css/wp-react-app.css' );

		//enqueue jquery (already registered by WP)
		wp_enqueue_script( 'jquery' );

		//register react and react-dom
		wp_register_script( 'wp-react', 'https://fb.me/react-15.0.2.js' );
		wp_register_script( 'wp-react-dom', 'https://fb.me/react-dom-15.0.2.js' );
		//include your js with a dependency on react
		wp_enqueue_script( 'wpra', WPRA_URL . 'js/wpra.js', [ 'wp-react', 'wp-react-dom' ] );

	}

	public function showReactApp() {
		$output = '<div id="myreactapp" />';
		return $output;
	}
}
