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
		/*$this->settings = new SettingsApi();*/

		$this->pages = array(
			array(
				'page_title' => 'Testinator', 
				'menu_title' => 'Testinator', 
				'capability' => 'manage_options', 
				'menu_slug' => 'testinator_plugin', 
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