<?php
/**
 * * @package study-wp-plugin-development
 */

 class TestPluginActivate
 {
        public static function activate() {
            flush_rewrite_rules();
        }   

 }
 