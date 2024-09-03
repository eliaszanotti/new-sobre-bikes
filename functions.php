<?php 
function sbr_enqueue_styles() {
    error_log('sbr_enqueue_styles function is called');
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/tailwind/output.css');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
}

function sbr_setup_theme() {
    add_theme_support('custom-logo');
}

function sbr_register_menus() {
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu'),
        'footer' => esc_html__('Footer Menu'),
    ));
}

add_action('wp_enqueue_scripts', 'sbr_enqueue_styles');
add_action('after_setup_theme', 'sbr_setup_theme');
add_action('after_setup_theme', 'sbr_register_menus');