<?php
// Add custom rewrite rule
add_action('init', 'redirect_account_booking');

function redirect_account_booking() {
    // Get the current URL path
    $current_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    // Check if the current path matches 'account/booking'
    if ($current_path === 'account/booking') {
        // Get the query string
        $query_string = $_SERVER['QUERY_STRING'];

        // Build the redirect URL
        $redirect_url = '/account/';
        if ($query_string) {
            $redirect_url .= '?booking=1&' . $query_string;
        }

        // Perform the redirect
        header("Location: $redirect_url", true, 301);
        exit();
    }
}
