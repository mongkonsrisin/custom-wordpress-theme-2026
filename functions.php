<?php
function poke_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'poke_theme_setup');

function poke_theme_enqueue_styles() {
    wp_enqueue_style('poke-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'poke_theme_enqueue_styles');
?>