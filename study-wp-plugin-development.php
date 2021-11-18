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

         
        function register() {
                add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );

                add_action( 'admin_menu', array( $this, 'add_admin_pages') );
        }

        public function add_admin_pages() {
                add_menu_page( 'TesTinator Plugin', 'Testinator', 'manage_options', 'test_plugin', array( $this, 'admin_index' ), 'dashicons-superhero', 110 );
        }
        public function admin_index() {
                require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
        }

        protected function create_post_type() {
                add_action( 'init', array( $this, 'custom_post_type' ) );
        }

        function uninstall() {
                // delete CPT
                // delete all the plugin data from the DB
        }

        function custom_post_type() {
                register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
        }

        function enqueue() {
                // enqueue all our scripts
                wp_enqueue_style ('mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ) );
                wp_enqueue_style ('mypluginscript', plugins_url( '/assets/myscript.js', __FILE__ ) );
        }

}

        if ( class_exists( 'TestPlugin' ) ) {
                $testPlugin = new TestPlugin( '' );
                $testPlugin->register();
        
        }

                // activation
                require_once plugin_dir_path( __FILE__ ) . 'inc/test-plugin-activate.php';
                register_activation_hook( __FILE__, array( 'TestPluginActivate', 'activate' ) );

                // deactivation
                require_once plugin_dir_path( __FILE__ ) . 'inc/test-plugin-deactivate.php';
                register_activation_hook( __FILE__, array( 'TestPluginDeactivate', 'deactivate' ) );
