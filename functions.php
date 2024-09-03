<?php 
function sbr_enqueue_styles() {
    error_log('sbr_enqueue_styles function is called');
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/tailwind/style.css');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'sbr_enqueue_styles');