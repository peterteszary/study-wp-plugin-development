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

/*

if( ! defined(  'ABSPATH' ) ){
    die;

}
*/


/*
if ( ! function_exists( 'add_action' ) ){
    echo 'Hey, you cannot access this file!';
    exit;
}
*/


defined( 'ABSPATH' ) od die( 'Hey, you cannot access this file!' );
 


/* the plugin itself */


class TestPlugin 
{
 

    function activate() {
            echo "The Plugin was activated";
    }

    function deactivate() {
            echo "The Plugin was activated";
    }

    function uninstall() {

    }

}

if ( class_exists( 'TestPlugin' ) ) {
    $PtPlugin = new TestPlugin( '' );
}

// activation
register_activation_hook( __FILE__, array( $TestPlugin, 'activate' ) );

// deactivation
register_activation_hook( __FILE__, array( $TestPlugin, 'deactivate' ) );



// uninstall

