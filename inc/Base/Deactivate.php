<?php
/**
 * * @package study-wp-plugin-development
 */
namespace Inc\Base;

 class Deactivate
 {
        public static function deactivate() {
            flush_rewrite_rules();
        }   

 }
  