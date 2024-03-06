<?php
function load_dependencies() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/index.js');
}

add_action('wp_enqueue_scripts', 'load_dependencies');
