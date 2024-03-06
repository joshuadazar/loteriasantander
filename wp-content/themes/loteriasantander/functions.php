<?php
function load_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'load_styles');
