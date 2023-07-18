<?php
/*
 * Frontend scripts
 */

function tps_frontend_scripts() {
    $third_party_styles = array(
        'google-fonts' => array(
            'src' => 'https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap',
        ),
    );

    // Enqueue third party styles
    foreach($third_party_styles as $style_name => $style_data) {
        wp_enqueue_style($style_name, $style_data['src'], array(), null);
    }
    // Theme's CSS
    wp_enqueue_style('tps-theme', get_stylesheet_directory_uri() . '/css/tps-theme.min.css');
}
add_action( 'wp_enqueue_scripts', 'tps_frontend_scripts' );