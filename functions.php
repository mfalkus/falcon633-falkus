<?php
/**
 * Falkus blog specific functions
 * Check out falcon633 theme functions.php for the main event
 *
 * @package Falcon633
 */

add_action( 'wp_enqueue_scripts', 'falkus_blog_enqueue_styles' );
function falkus_blog_enqueue_styles() {
    wp_enqueue_style( 'falcon633-parent-styley', get_template_directory_uri() . '/style.css' );
}
?>
