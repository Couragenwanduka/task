<?php
// Enqueue the main stylesheet (style.css, compiled by Tailwind)
function my_custom_theme_enqueue_styles() {
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/assets/css/style.css', array(), null);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');
