<?php
/**
 * * @package study-wp-plugin-development
 */
/*
Plugin Name: study-wp-plugin-development
Plugin URI: https://peterteszary.com
Description: This is my Test Plugin for study purpose.
Version 1.0.0
Author: Peter Teszáry
Author URI: https://peterteszary.com
Lisence: GPLv2 or later
Text Domain: study-wp-plugin-development
*/


 defined( 'ABSPATH' ) or die( 'Hey, you cannot access this file!' ); 
 

/* the plugin itself */


class TestPlugin 
{
 
        function __construct() {
                add_action( 'init', array( $this, 'custom_post_type' ) );
        }

    function activate() {
            // generated a CPT
            // flush rewrite rules
            flush_rewrite_rules();
    }

    function deactivate() {
            // flush rewrite rules
    }

    function uninstall() {
            // delete CPT
            // delete all the plugin data from the DB
    }

    function custom_post_type() {
            register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
    }

}

if ( class_exists( 'TestPlugin' ) ) {
    $testPlugin = new TestPlugin( '' );
}

// activation
register_activation_hook( __FILE__, array( $TestPlugin, 'activate' ) );

// deactivation
register_activation_hook( __FILE__, array( $TestPlugin, 'deactivate' ) );

// uninstall
