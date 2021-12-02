<?php
/**
 * * @package study-wp-plugin-development
 */

namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

/**
* 
*/
class Admin extends BaseController
{
	public $settings;

	public $pages = array();

	public function __construct()
	{
		$this->settings = new SettingsApi();

		$this->pages = array(
			array(
				'page_title' => 'Testinator Plugin', 
				'menu_title' => 'Testinator', 
				'capability' => 'manage_options', 
				'menu_slug' => 'test_plugin', 
				'callback' => function() { echo '<h1>Testinator Plugin</h1>'; }, 
				'icon_url' => 'dashicons-superhero', 
				'position' => 110
                )
            );
        }
    
        public function register() 
        {
            $this->settings->addPages( $this->pages )->register();
        }
    }
/*
    public function register() {
        add_action( 'admin_menu', array( $this, 'add_admin_pages') );
    }

    public function add_admin_pages() {
        add_menu_page( 'TesTinator Plugin', 'Testinator', 'manage_options', 'test_plugin', array( $this, 'admin_index' ), 'dashicons-superhero', 110 );
    }
    
    public function admin_index() {
		require_once $this->plugin_path . 'templates/admin.php';
    }


}