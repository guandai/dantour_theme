<?php
// Enqueue parent theme styles
function my_child_theme_enqueue_styles() {
    // Define the parent style handle
    $parent_style = 'twentytwentyfour-style'; // Use the correct handle from the parent theme

    // Enqueue the parent styles
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');

    // Enqueue the child theme styles
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
}

// Hook into the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');
