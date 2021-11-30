<?php
/**
 * * @package study-wp-plugin-development
 */

namespace Inc\Base;

class Enqueue
{  
    public function register() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );

    }

    function enqueue() {
        // enqueue all our scripts
        wp_enqueue_style ('mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ) );
        wp_enqueue_style ('mypluginscript', plugins_url( '/assets/myscript.js', __FILE__ ) );
}
}