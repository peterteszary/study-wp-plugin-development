<?php
/**
 * * @package study-wp-plugin-development
 */

 class TestPluginDeactivate
 {
        public static function deactivate() {
            flush_rewrite_rules();
        }   

 }
  