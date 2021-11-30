<?php
/**
 * * @package study-wp-plugin-development
 */
namespace Inc;

 class init
 {
        function __construct {
            
        }

        

 }
 


/*

use Inc\Activate; 
use Inc\Deactivate; 
use Inc\Admin\AdminPages; 

/* the plugin itself */
/*

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
                $settings_link = '<a href="admin.php?page=test_plugin">Settings</a>';
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

        function activate() {
                // require_once plugin_dir_path( __FILE__ ) . 'inc/test-plugin-activate.php';
                Activate::activate();
        }

}

        if ( class_exists( 'TestPlugin' ) ) {
                $testPlugin = new TestPlugin( '' );
                $testPlugin->register();
        
        }

                // activation
                //require_once plugin_dir_path( __FILE__ ) . 'inc/test-plugin-activate.php';
                register_activation_hook( __FILE__, array( '$TestPlugin', 'activate' ) );

                // deactivation
                //require_once plugin_dir_path( __FILE__ ) . 'inc/test-plugin-deactivate.php';
                register_activation_hook( __FILE__, array( 'Deactivate', 'deactivate' ) );
}