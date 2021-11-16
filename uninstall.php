<?php

/* 
* Trigger File on plugin uninstall 
*
* @ package TestPlugin
*/

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
        die;
}

// Clear Database stored data
$books = get_posts( array( 'post_type' => 'book', 'numberposts' => -1 ) );

foreach( $books as $book) {
    wp_delete_posts( $book->ID, true );
}