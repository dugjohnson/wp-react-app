<?php
//You can also rename this file to better represent your plugin name
/*
Plugin Name: My Links App
Plugin URI:
Description:  This gives a set of clickable links by logged in user
Version: 0.0.1
Author:  Doug Johnson
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
if ( !defined( 'MYLINKS_DIR' ) ) {
	define( 'MYLINKS_DIR', WP_PLUGIN_DIR . '/my-links/' );
}
if ( !defined( 'MYLINKS_URL' ) ) {
	define( 'MYLINKS_URL', WP_PLUGIN_URL . '/my-links/' );
}

require_once( MYLINKS_DIR . 'vendor/autoload.php' );

$myLinksFunc = new mylinks_functions();