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


class PtPlugin 
{
    // methods

   function __construct(string $string) {
       echo $string
   }

    }

if ( class_exists( 'PtPlugin' ) ) {
    $PtPlugin = new PtPlugin( array(1, 2, 3) );
}



?>

