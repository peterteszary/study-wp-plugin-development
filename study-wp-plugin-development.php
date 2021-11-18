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


/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
Copyright 2005-2015 Automattic, Inc.
*/


 defined( 'ABSPATH' ) or die( 'Hey, you cannot access this file!' ); 
 

/* the plugin itself */
if ( !class_exists( 'TestPlugin' ) ) {

class TestPlugin 
{

        public $plugin;

        function __construct() {
                $this->plugin = plugin_basename( __FILE__ );
        }

        function register() {
                add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );

                add_action( 'admin_menu', array( $this, 'add_admin_pages') );
                
                add_filter( 'plugin_action_links_NAME-OF-MY-PLUGIN', array( $this, 'settings_link') );
        }

        public function settings_link( $links) {
                $settings_link = '<a href="options-general.php?page=test_plugin">Settings</a>';
                array_push( $links, $settings_link);
                return $links;
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
}