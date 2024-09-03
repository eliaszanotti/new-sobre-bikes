<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="navbar bg-base-200 px-12">
    <div class="navbar-start">
        <button class="btn btn-ghost">
            <?php $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            if ($logo) {
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . '" class="object-cover object-center h-3/4">';
            } ?>
        </button>
    </div>
    <ul class="navbar-center menu menu-horizontal">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => '',
            'items_wrap' => '%3$s',
            'before' => '<span class="btn btn-ghost">',
            'after' => '</span>',
        ));
        ?>
    </ul>
    <div class="navbar-end">
        <h1>ok</h1>
    </div>
</header>