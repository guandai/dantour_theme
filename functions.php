<?php
include 'custom_wptravel_single_excerpt.php';
// require 'dantour_plugin.php';
require_once 'download_core.php';
require_once 'bookings_user.php';
require_once 'transfer_user_data.php';
// require_once 'redirect_trace.php';


// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION


add_action ('init', 'overwrite_wptravel_single_excerpt', 15);
function overwrite_wptravel_single_excerpt(){
    remove_action( 'wp_travel_single_trip_after_title', 'wptravel_single_excerpt', 1 );
    add_action( 'wp_travel_single_trip_after_title', 'custom_wptravel_single_excerpt', 10 );
}



function insert_js_by_url_name($file_name, $path_contains) {
    // Define an anonymous function with a unique key in the add_action hook
    add_action('wp_enqueue_scripts', function() use ($file_name, $path_contains) {
        if (strpos($_SERVER['REQUEST_URI'], $path_contains) !== false) {
            wp_enqueue_script(
                $file_name . '_script',
                get_stylesheet_directory_uri() . '/js/' . $file_name . '.js',
                array('jquery'), '1.0', true
            );
        }
    });
}

insert_js_by_url_name('form_change_upload_file', '/book_');
insert_js_by_url_name('form_load_wpuserdata', '/book_');
insert_js_by_url_name('form_add_repeater', '/book_');
insert_js_by_url_name('form_vehicel_active', '/book_');

insert_js_by_url_name('form_show_sent_modal', '/book_');
insert_js_by_url_name('global_navigation', '/');
insert_js_by_url_name('account_order_data', '/account');
