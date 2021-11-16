<?php
/**
 * * @package study-wp-plugin-development
 */
/*
Plugin Name: study-wp-plugin-development
Plugin URI: https://github.com/peterteszary/study-wp-plugin-development.git
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

        function register() {
                add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
        }

        function activate() {
                // generated a CPT
                $this->custom_post_type();
                // flush rewrite rules
                flush_rewrite_rules();
        }

        function deactivate() {
                // flush rewrite rules
                flush_rewrite_rules();
        }

        function uninstall() {
                // delete CPT
                // delete all the plugin data from the DB
        }

        function custom_post_type() {
                register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
        }

        function enqueue() {
                // enqueue all you scripts
                wp_enqueue_style ('mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ) , array(''), false, 'all' );
        }

}

if ( class_exists( 'TestPlugin' ) ) {
    $testPlugin = new TestPlugin( '' );
    $testPlugin->register();
}

// activation
register_activation_hook( __FILE__, array( $testPlugin, 'activate' ) );

// deactivation
register_activation_hook( __FILE__, array( $testPlugin, 'deactivate' ) );
