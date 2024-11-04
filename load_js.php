
<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

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
insert_js_by_url_name('itinerary_booking_btn', '/itinerary');
insert_js_by_url_name('itinerary_booking_btn', '/?post_type=itineraries');
