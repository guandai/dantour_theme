<?php

if (! defined('WP_TRAVEL_POST_TYPE')) {
	define('WP_TRAVEL_POST_TYPE', '');
}

if ( defined( 'WP_TRAVEL_ITINERARY_PATH' ) ) {
	define( 'WP_TRAVEL_ITINERARY_PATH', '' );
}

if ( defined( 'WP_TRAVEL_ITINERARY_TMP_PATH' ) ) {
	define( 'WP_TRAVEL_ITINERARY_TMP_PATH', '' );
}

if (! class_exists('WP_Travel_Helpers_Pricings')) {
	class WP_Travel_Helpers_Pricings
	{
		public static function get_price() {
			return 1;
		}
	}
}

if (! class_exists('WpTravel_Helpers_Trips')) {
	class WpTravel_Helpers_Trips
	{
		public static function get_trip() {}
		public static function get_tax_rate() {}
	}
}

if (! class_exists('WP_Travel_Itinerary')) {
	class WP_Travel_Itinerary
	{
		public static function get() {}
		public function get_activities_list() {}
		public function get_trip_types_list() {}
	}
}

if (! class_exists('WP_Travel_Admin_Post_Tabs')) {
	class WP_Travel_Admin_Post_Tabs
	{
		public static function get_tabs() {
			return [];
		}
	}
}

if (! class_exists('WP_Travel_Downloads_Core')) {
	class WP_Travel_Downloads_Core
	{
		public static function render_payment_details() {}
	}
}

if (! class_exists('WpTravel_Helpers_Payment')) {
	class WpTravel_Helpers_Payment
	{
		public static function render_payment_details() {}
	}
}

if (! class_exists('WP_Travel')) {
	class WP_Travel
	{
		public static function get_sanitize_request() {}
		public static function create_nonce() {}
		public static function verify_nonce() {}
	}
}

if (! class_exists('WpTravel_Helpers_Strings')) {
	class WpTravel_Helpers_Strings
	{
		public static function get() {}
	}
}
if (! class_exists('WP_Travel_Helpers_Trips')) {
	class WP_Travel_Helpers_Trips
	{
		public static function get() {}
		public static function get_trip() {}
		public static function get_tax_rate() {}
		public static function is_sale_enabled() {}
	}
}




if ( ! function_exists( 'wptravel_get_total_booked_pax' ) ) {
	function wptravel_get_total_booked_pax() {}
}
if ( ! function_exists( 'wptravel_get_pricing_category_by_key' ) ) {
	function wptravel_get_pricing_category_by_key() {}
}
if ( ! function_exists( 'wptravel_get_faqs' ) ) {
	function wptravel_get_faqs() {}
}

if ( ! function_exists( 'wptravel_get_faqs' ) ) {
	function wptravel_get_faqs() {
		return [];
	}
}
if ( ! function_exists( 'wptravel_is_react_version_enabled' ) ) {
	function wptravel_is_react_version_enabled() {}
}



if ( ! function_exists( 'wptravel_get_countries' ) ) {
	function wptravel_get_countries() {
		return [];
	}
}

if ( ! function_exists( 'wptravel_get_template_html' ) ) {
	function wptravel_get_template_html() {}
}

if ( ! function_exists( 'wptravel_lostpassword_url' ) ) {
	function wptravel_lostpassword_url() {}
}

if ( ! function_exists( 'wptravel_sort_array_by_priority' ) ) {
	function wptravel_sort_array_by_priority() {
		return [];
	}
}



if ( ! function_exists( 'wptravel_get_fixed_departure_date' ) ) {
	function wptravel_get_fixed_departure_date() {}
}

if ( ! function_exists( 'wptravel_use_itinerary_v2_layout' ) ) {
	function wptravel_use_itinerary_v2_layout() {}
}

if ( ! function_exists( 'wptravel_get_checkout_url' ) ) {
	function wptravel_get_checkout_url() {}
}
if ( ! function_exists( 'wptravel_get_price_per_text' ) ) {
	function wptravel_get_price_per_text() {}
}
if ( ! function_exists( 'wptravel_get_trip_pricing_name' ) ) {
	function wptravel_get_trip_pricing_name() {}
}
if ( ! function_exists( 'wptravel_get_pricing_variation_price_per' ) ) {
	function wptravel_get_pricing_variation_price_per() {}
}
if ( ! function_exists( 'wptravel_get_pricing_category_by_key' ) ) {
	function wptravel_get_pricing_category_by_key() {}
}

if (! function_exists('wptravel_after_excerpt_single_trip_page')) {
	function wptravel_after_excerpt_single_trip_page() {}
}

if (! function_exists('wptravel_tab_show_in_menu')) {
	function wptravel_tab_show_in_menu() {}
}

if (! function_exists('wptravel_get_theme_wrapper_class')) {
	function wptravel_get_theme_wrapper_class() {}
}
if (! function_exists('wptravel_get_cart_icon')) {
	function wptravel_get_cart_icon() {}
}

if (! function_exists('wptravel_get_post_thumbnail_url')) {
	function wptravel_get_post_thumbnail_url() {}
}
if (! function_exists('wptravel_get_post_thumbnail')) {
	function wptravel_get_post_thumbnail() {}
}
if (! function_exists('wptravel_allowed_html')) {
	function wptravel_allowed_html() {}
}

if (! function_exists('wptravel_do_deprecated_action')) {
	function wptravel_do_deprecated_action() {}
}
if (! function_exists('wptravel_format_date')) {
	function wptravel_format_date() {}
}
if (! function_exists('wptravel_trip_price')) {
	function wptravel_trip_price() {}
}
if (! function_exists('wptravel_get_trip_duration')) {
	function wptravel_get_trip_duration() {}
}
if (! function_exists('wptravel_save_offer')) {
	function wptravel_save_offer() {}
}

if (! function_exists('wptravel_get_booking_status')) {
	function wptravel_get_booking_status() {}
}
if (! function_exists('wptravel_get_settings')) {
	function wptravel_get_settings() {}
}
if (! function_exists('wptravel_get_payment_status')) {
	function wptravel_get_payment_status() {}
}
if (! function_exists('wptravel_view_booking_details_table')) {
	function wptravel_view_booking_details_table() {}
}
if (! function_exists('wptravel_get_payment_status')) {
	function wptravel_get_payment_status() {}
}
if (! function_exists('wptravel_payment_data')) {
	function wptravel_payment_data() {}
}
if (! function_exists('wptravel_booking_data')) {
	function wptravel_booking_data()
	{
		return [];
	}
}


if ( ! function_exists( 'wptravel_get_template_part' ) ) {
	function wptravel_get_template_part() {}
}
if ( ! function_exists( 'wptravel_get_review_count' ) ) {
	function wptravel_get_review_count() {}
}
if ( ! function_exists( 'wptravel_get_currency_symbol' ) ) {
	function wptravel_get_currency_symbol() {}
}
if ( ! function_exists( 'wptravel_layout_version' ) ) {
	function wptravel_layout_version() {}
}
if (! function_exists('wptravel_get_template_html')) {
	function wp_get_theme( $stylesheet = '', $theme_root = '' ) {
		return new WP_Theme( $stylesheet, $theme_root );
	}
}
if (! function_exists('wptravel_get_enquiries_form')) {
	function wptravel_get_enquiries_form() {}
}
if (! function_exists('wptravel_print_notices')) {
	function wptravel_print_notices() {}
}
if (! function_exists('wptravel_get_archive_view_mode')) {
	function wptravel_get_archive_view_mode() {}
}
if (! function_exists('wptravel_pagination')) {
	function wptravel_pagination() {}
}
if (! function_exists('wptravel_after_excerpt_single_trip_page')) {
	function wptravel_after_excerpt_single_trip_page() {}
}
if (! function_exists('wptravel_get_group_size')) {
	function wptravel_get_group_size() {}
}
if (! function_exists('wptravel_trip_rating')) {
	function wptravel_trip_rating() {
		return 1;
	}
}
if (! function_exists('wptravel_get_average_rating')) {
	function wptravel_get_average_rating($post_id) {
		return 1;
	}
}
if (! function_exists('wptravel_get_trip')) {
	function wptravel_get_trip() {}
}

if (! function_exists('wptravel_get_post_placeholder_image_url')) {
	function wptravel_get_post_placeholder_image_url() {}
}
if (! function_exists('wptravel_get_formated_price_currency')) {
	function wptravel_get_formated_price_currency() {}
}
if (! function_exists('wptravel_get_post_thumbnail_id')) {
	function wptravel_get_post_thumbnail_id() {}
}
if (! function_exists('wptravel_get_page_permalink')) {
	function wptravel_get_page_permalink() {}
}

if (! function_exists('wp_travel_add_to_cart_system')) {
	function wp_travel_add_to_cart_system() {}
}
if (! function_exists('wp_travel_before_single_itinerary')) {
	function wp_travel_before_single_itinerary() {}
}
if (! function_exists('wp_travel_after_single_itinerary')) {
	function wp_travel_after_single_itinerary() {}
}
if (! function_exists('wp_travel_single_trip_after_title')) {
	function wp_travel_single_trip_after_title() {}
}
if (! function_exists('wp_travel_single_trip_after_header')) {
	function wp_travel_single_trip_after_header() {}
}
if (! function_exists('wp_travel_get_settings')) {
	function wp_travel_get_settings() {}
}
