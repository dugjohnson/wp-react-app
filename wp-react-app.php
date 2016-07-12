<?php
//You can also rename this file to better represent your plugin name
/*
Plugin Name: FILL_IN_THIS_NAME
Plugin URI:
Description:  YOUR_DESCRIPTION
Version: 0.0.1
Author: YOUR_NAME
Author URI:
*/

if ( !defined( 'WP_CONTENT_URL' ) ) {
	define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
}
if ( !defined( 'WP_CONTENT_DIR' ) ) {
	define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
}
if ( !defined( 'WP_PLUGIN_URL' ) ) {
	define( 'WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins' );
}
if ( !defined( 'WP_PLUGIN_DIR' ) ) {
	define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
}
if ( !defined( 'WPRA_DIR' ) ) {
	define( 'WPRA_DIR', WP_PLUGIN_DIR . '/wp-react-app/' );
}
if ( !defined( 'WPRA_URL' ) ) {
	define( 'WPRA_URL', WP_PLUGIN_URL . '/wp-react-app/' );
}

require_once( WPRA_DIR . 'vendor/autoload.php' );

$wpraFunc = new wpra_functions(); 