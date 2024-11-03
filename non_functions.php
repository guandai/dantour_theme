<?php

if (!class_exists('WP_Theme')) {
    class WP_Theme
    {
        public $template = '1';
        public function get($key)
        {
            return $this->data[$key] ?? null;
        }
    }
}

if (!class_exists('WP_Query')) {
    class WP_Query
    {
        public function __construct() {}
        public function have_posts() {}
        public function the_post() {}
        public function get_the_ID() {}
        public function get_posts() {}
        public $found_posts = '1';
    }
}

if (!$current_user) {
    $current_user = new stdClass();
    $current_user->user_email = '';
    $current_user->ID = 1;
    $user_login = true;
}

if (!defined('WP_CONTENT_DIR')) {
    define('WP_CONTENT_DIR', '');
}

if (!function_exists('wp_logout_url')) {
    function wp_logout_url() {}
}

if (!function_exists('sanitize_text_field')) {
    function sanitize_text_field() {}
}

if (!function_exists('wp_verify_nonce')) {
    function wp_verify_nonce() {}
}

if (!function_exists('wp_unslash')) {
    function wp_unslash() {}
}

if (!function_exists('get_the_ID')) {
    function get_the_ID()
    {
        return 1;
    }
}

if (!function_exists('get_user_meta')) {
    function get_user_meta($id, $name)
    {
        if ($name === 'wp_travel_user_bookings') {
            return [];
        }
    }
}

if (!function_exists('admin_url')) {
    function admin_url() {}
}

if (!function_exists('the_custom_logo')) {
    function the_custom_logo() {}
}

if (!function_exists('wp_nonce_field')) {
    function wp_nonce_field() {}
}

if (!function_exists('has_custom_logo')) {
    function has_custom_logo() {}
}

if (!function_exists('wp_editor')) {
    function wp_editor() {}
}

if (!function_exists('media_upload_form')) {
    function media_upload_form() {}
}

if (!function_exists('wp_trim_words')) {
    function wp_trim_words() {}
}

if (!function_exists('plugins_url')) {
    function plugins_url() {}
}

if (!function_exists('esc_attr__')) {
    function esc_attr__()
    {
        return '';
    }
}

if (!function_exists('get_tax_rate')) {
    function get_tax_rate() {}
}

if (!function_exists('esc_attr_e')) {
    function esc_attr_e()
    {
        return '';
    }
}

if (!function_exists('wp_reset_query')) {
    function wp_reset_query() {}
}

if (!function_exists('wp_list_pluck')) {
    function wp_list_pluck() {}
}

if (!function_exists('get_the_terms')) {
    function get_the_terms($name)
    {
        if ($name === 'itinerary_types') {
            return [];
        }
    }
}

if (!function_exists('wp_get_object_terms')) {
    function wp_get_object_terms() {}
}

if (!function_exists('get_locale')) {
    function get_locale() {}
}

if (!function_exists('block_header_area')) {
    function block_header_area() {}
}

if (!function_exists('bloginfo')) {
    function bloginfo() {}
}

if (!function_exists('get_bloginfo')) {
    function get_bloginfo() {}
}

if (!function_exists('wp_is_block_theme')) {
    function wp_is_block_theme() {}
}

if (!function_exists('get_footer')) {
    function get_footer() {}
}

if (!function_exists('get_header')) {
    function get_header() {}
}

if (!function_exists('wp_body_open')) {
    function wp_body_open() {}
}

if (!function_exists('wp_head')) {
    function wp_head() {}
}

if (!function_exists('wp_footer')) {
    function wp_footer() {}
}

if (!function_exists('body_class')) {
    function body_class() {}
}

if (!function_exists('do_blocks')) {
    function do_blocks() {}
}

if (!function_exists('block_footer_area')) {
    function block_footer_area() {}
}

if (!function_exists('the_post')) {
    function the_post() {}
}

if (!function_exists('have_posts')) {
    function have_posts() {}
}

if (!function_exists('the_content')) {
    function the_content() {}
}

if (!function_exists('comment_form')) {
    function comment_form() {}
}

if (!function_exists('get_user_by')) {
    function get_user_by()
    {
        return (object) [
            'roles' => ['administrator']
        ];
    }
}

if (!function_exists('wp_get_current_commenter')) {
    function wp_get_current_commenter() {}
}

if (!function_exists('paginate_comments_links')) {
    function paginate_comments_links() {}
}

if (!function_exists('get_comment_pages_count')) {
    function get_comment_pages_count() {}
}

if (!function_exists('wp_list_comments')) {
    function wp_list_comments() {}
}

if (!function_exists('have_comments')) {
    function have_comments() {}
}

if (!function_exists('date_i18n')) {
    function date_i18n() {}
}

if (!function_exists('um_user')) {
    function um_user() {}
}

if (!function_exists('is_user_logged_in')) {
    function is_user_logged_in() {}
}

if (!function_exists('um_fetch_user')) {
    function um_fetch_user() {}
}

if (!function_exists('wp_get_theme')) {
    function wp_get_theme()
    {
        return new WP_Theme();
    }
}

if (!function_exists('get_stylesheet')) {
    function get_stylesheet() {}
}

if (!function_exists('get_raw_theme_root')) {
    function get_raw_theme_root() {}
}

if (!function_exists('comments_open')) {
    function comments_open() {}
}

if (!function_exists('wp_login_url')) {
    function wp_login_url() {}
}

if (!function_exists('comment_text')) {
    function comment_text() {}
}

if (!function_exists('add_filter')) {
    function add_filter() {}
}

if (!function_exists('remove_action')) {
    function remove_action() {}
}

if (!function_exists('get_permalink')) {
    function get_permalink() {}
}

if (!function_exists('comment_author')) {
    function comment_author() {}
}

if (!function_exists('get_avatar')) {
    function get_avatar() {}
}

if (!function_exists('comment_ID')) {
    function comment_ID() {}
}

if (!function_exists('comment_class')) {
    function comment_class() {}
}

if (!function_exists('get_comment_meta')) {
    function get_comment_meta()
    {
        return [];
    }
}

if (!function_exists('get_comment_date')) {
    function get_comment_date() {}
}

if (!function_exists('get_the_title')) {
    function get_the_title() {}
}

if (!function_exists('get_the_content')) {
    function get_the_content() {}
}

if (!function_exists('get_the_excerpt')) {
    function get_the_excerpt() {}
}

if (!function_exists('get_query_var')) {
    function get_query_var() {}
}

if (!function_exists('current_user_can')) {
    function current_user_can() {}
}

if (!function_exists('get_sanitize_request')) {
    function get_sanitize_request() {}
}

if (!function_exists('absint')) {
    function absint() {}
}

if (!function_exists('add_action')) {
    function add_action() {}
}

if (!function_exists('the_excerpt')) {
    function the_excerpt() {}
}

if (!function_exists('get_activities_list')) {
    function get_activities_list() {}
}

if (!function_exists('get_trip_types_list')) {
    function get_trip_types_list() {}
}

if (!function_exists('get_comments_number')) {
    function get_comments_number() {}
}

if (!function_exists('get_the_date')) {
    function get_the_date() {}
}

if (!function_exists('__')) {
    function __() {}
}

if (!function_exists('_n')) {
    function _n()
    {
        return "1";
    }
}

if (!function_exists('number_format_i18n')) {
    function number_format_i18n()
    {
        return "1";
    }
}

if (!function_exists('get_post_thumbnail_id')) {
    function get_post_thumbnail_id() {}
}

if (!function_exists('get_term_link')) {
    function get_term_link() {}
}

if (!function_exists('wp_kses_allowed_html')) {
    function wp_kses_allowed_html() {}
}

if (!function_exists('the_permalink')) {
    function the_permalink() {}
}

if (!function_exists('the_title_attribute')) {
    function the_title_attribute() {}
}

if (!function_exists('esc_html__')) {
    function esc_html__() {}
}

if (!function_exists('esc_html')) {
    function esc_html()
    {
        return '';
    }
}

if (!function_exists('language_attributes')) {
    function language_attributes() {}
}

if (!function_exists('get_attached_file')) {
    function get_attached_file() {}
}

if (!function_exists('wp_get_attachment_image_src')) {
    function wp_get_attachment_image_src() {}
}

if (!function_exists('make_clickable')) {
    function make_clickable() {}
}

if (!function_exists('is_wp_error')) {
    function is_wp_error() {}
}

if (!function_exists('wp_lostpassword_url')) {
    function wp_lostpassword_url() {}
}

if (!function_exists('current_time')) {
    function current_time() {}
}

if (!function_exists('wp_create_nonce')) {
    function wp_create_nonce() {}
}

if (!function_exists('get_post_type_archive_link')) {
    function get_post_type_archive_link() {}
}

if (!function_exists('wp_reset_postdata')) {
    function wp_reset_postdata() {}
}

if (!function_exists('add_query_arg')) {
    function add_query_arg() {}
}

if (!function_exists('get_post_status')) {
    function get_post_status() {}
}

if (!function_exists('wp_get_current_user')) {
    function wp_get_current_user()
    {
        return (object) [
            'ID' => 1
        ];
    }
}

if (!function_exists('home_url')) {
    function home_url() {}
}

if (!function_exists('get_the_password_form')) {
    function get_the_password_form() {}
}

if (!function_exists('wp_kses_post')) {
    function wp_kses_post() {}
}

if (!function_exists('post_password_required')) {
    function post_password_required() {}
}

if (!function_exists('apply_filters')) {
    function apply_filters()
    {
        return [];
    }
}

if (!function_exists('do_action')) {
    function do_action() {}
}

if (!function_exists('esc_attr')) {
    function esc_attr() {}
}

if (!function_exists('the_ID')) {
    function the_ID() {}
}

if (!function_exists('post_class')) {
    function post_class() {}
}

if (!function_exists('wp_kses')) {
    function wp_kses() {}
}

if (!function_exists('the_title')) {
    function the_title() {}
}

if (!function_exists('get_stylesheet_directory_uri')) {
    function get_stylesheet_directory_uri() {}
}

if (!function_exists('trailingslashit')) {
    function trailingslashit() {}
}

if (!function_exists('wp_enqueue_style')) {
    function wp_enqueue_style() {}
}

if (!function_exists('get_template_directory_uri')) {
    function get_template_directory_uri() {}
}

if (!function_exists('get_template_directory')) {
    function get_template_directory() {}
}

if (!function_exists('wp_enqueue_script')) {
    function wp_enqueue_script() {}
}

if (!function_exists('get_option')) {
    function get_option($name)
    {
        if ($name === 'time_format') {
            return 'time_format';
        }
    }
}

if (!function_exists('wpautop')) {
    function wpautop() {}
}

if (!function_exists('wp_get_attachment_url')) {
    function wp_get_attachment_url() {}
}

if (!function_exists('esc_url')) {
    function esc_url() {}
}

if (!function_exists('get_post_meta')) {
    function get_post_meta($trip_id, $name, $status = true)
    {
        if ($name === 'wptravel_trip_price') {
            return 1;
        }

        if ($name === 'wp_travel_email_traveller') {
            return [];
        }
    }
}

if (!function_exists('wp_die')) {
    function wp_die() {}
}

if (!function_exists('is_rtl')) {
    function is_rtl() {}
}
