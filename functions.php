<?php

// Add supports to theme
function kironews_add_supports() {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
}

add_action('after_setup_theme', 'kironews_add_supports');


// Enqueue styles
function kironews_enqueue_styles() {
    wp_enqueue_style('kironews_custom_styles', get_template_directory_uri() . '/style.css', array(), rand(111, 9999));
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap', array(), false);
}

add_action('wp_enqueue_scripts', 'kironews_enqueue_styles');