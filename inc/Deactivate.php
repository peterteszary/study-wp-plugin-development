<?php
/**
 * * @package study-wp-plugin-development
 */
namespace Inc;

 class Deactivate
 {
        public static function deactivate() {
            flush_rewrite_rules();
        }   

 }
  