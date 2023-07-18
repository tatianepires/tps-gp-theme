<?php
require_once get_stylesheet_directory() . '/inc/tps/login-customize.php';

require_once get_stylesheet_directory() . '/inc/wp/comment-url-unset.php';
require_once get_stylesheet_directory() . '/inc/wp/frontend-scripts.php';

add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'generate-child' );
}, 50 );