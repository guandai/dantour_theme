<?php
include 'custom_wptravel_single_excerpt.php';


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




// require 'dantour_plugin.php';
require_once 'download_core.php';
require_once 'bookings_user.php';
require_once 'transfer_user_data.php';
require_once 'load_js.php';
require_once 'load_css.php';
require_once 'register_url.php';
require_once 'overwrite_fn.php';
// require_once 'redirect_trace.php';


// require_once 'non_functions.php';
// require_once 'non_wp_travel_functions.php';
add_filter( 'wp_travel_enable_paypal_express_js', function(){ 
    return true; 
} );
