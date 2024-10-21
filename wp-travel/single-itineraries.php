<?php
echo 1;



do_action( 'wp_travel_before_main_content' );

do_action( 'wp_travel_before_single_itinerary', get_the_ID());


do_action('wp_travel_before_content_start');

do_action( 'wp_travel_before_single_title', get_the_ID() );

apply_filters('wp_travel_show_single_page_title', true );

do_action( 'wp_travel_single_before_trip_price',);
do_action('wp_travel_single_trip_after_price',);

do_action( 'wp_travel_before_trip_details',); 

do_action ( 'wp_travel_trip_details',); 

do_action( 'wp_travel_after_trip_details',);

do_action('wp_travel_single_trip_meta_list', );

do_action( 'wp_travel_single_trip_after_booknow',);

do_action ('wp_travel_single_trip_after_title',);

do_action( 'wp_travel_single_trip_after_header', get_the_ID());


do_action( 'wp_travel_before_trip_details');

do_action( 'wp_travel_trip_details',);

do_action( 'wp_travel_after_trip_details',);
