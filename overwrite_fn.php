<?php
// functions.php

// Step 1: Unhook the existing function if it is hooked.
add_action( 'wp', 'custom_override_cart_empty_message' );
function custom_override_cart_empty_message() {
    // Check if the method is hooked on a specific action (replace with actual hook if different)
    remove_action( 'woocommerce_cart_is_empty', [ 'ClassName', 'cart_empty_message' ] );
}

// Step 2: Define your new function to replace it.
function custom_cart_empty_message() {
    $url = get_post_type_archive_link( WP_TRAVEL_POST_TYPE );
		echo sprintf( __( 'Your cart is empty please <a href="%s"> click here </a> to add trips.', 'wp-travel' ), esc_url( $url ) ); // @phpcs:ignore
}

// Step 3: Hook your custom function to the same action.
add_action( 'woocommerce_cart_is_empty', 'custom_cart_empty_message' );
