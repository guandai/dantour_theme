<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Function to enqueue CSS files conditionally based on the URL.
 *
 * @param string $file_name The name of the CSS file (without the .css extension).
 * @param string $path_contains The substring to look for in the URL.
 */
function insert_css_by_url_name($file_name, $path_contains) {
    add_action('wp_enqueue_scripts', function() use ($file_name, $path_contains) {
        if (strpos($_SERVER['REQUEST_URI'], $path_contains) !== false) {
            wp_enqueue_style(
                $file_name . '_style',
                get_stylesheet_directory_uri() . '/css/' . $file_name . '.css',
                array(), // Dependencies
                '1.0',    // Version
                'all'     // Media
            );
        }
    });
}

// Example usage:
insert_css_by_url_name('wp-travel-dashboard', '/wp-travel-dashboard');
insert_css_by_url_name('itinerary', '/itinerary');
insert_css_by_url_name('itinerary', '/?post_type=itineraries');
insert_css_by_url_name('privacy_sso', '/privacy_sso');
insert_css_by_url_name('book_', '/book_');
insert_css_by_url_name('wp-travel-checkout', '/wp-travel-checkout');
insert_css_by_url_name('home', '/');
insert_css_by_url_name('shop', '/product');




function admin_insert_css_by_url_name($file_name, $path_contains) {
    add_action('admin_enqueue_scripts', function() use ($file_name, $path_contains) {
        if (strpos($_SERVER['REQUEST_URI'], $path_contains) !== false) {
            wp_enqueue_style(
                $file_name . '_style',
                get_stylesheet_directory_uri() . '/css/' . $file_name . '.css',
                array(), // Dependencies
                '1.0',    // Version
                'all'     // Media
            );
        }
    });
}

admin_insert_css_by_url_name('wp-admin-wp-travel', '/wp-admin/post.php');
