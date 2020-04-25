<?php

function rize_register_static() {
    wp_register_style('css_theme', get_template_directory_uri() . '/assets/css/theme.css');
    wp_register_style('css_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_script('js_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
}
add_action('init', 'rize_register_static');

function rize_load_static() {
    wp_enqueue_style('css_theme');
    wp_enqueue_style('css_bootstrap');
    wp_enqueue_script('js_bootstrap');
}
add_action('wp_enqueue_scripts', 'rize_load_static');