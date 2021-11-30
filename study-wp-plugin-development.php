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
 
if ( file_exists( dirname( __FILE__) . '/vendor/autoload.php') ) {
        require_once dirname( __FILE__) . '/vendor/autoload.php';
}

define( 'PLUGIN_PATH', plugin_dir_path ( __FILE__ )); 

if ( class_exists( 'Inc\\Init' ) ) {
        Inc\Init::register_services();
}