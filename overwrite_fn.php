<?php
// functions.php

// Check if the original class exists before extending it
if ( class_exists( 'WP_Travel_Cart' ) ) {

    // Define a custom class that extends the original WP_Travel_Cart
    class Custom_WP_Travel_Cart extends WP_Travel_Cart {

        // Override the cart_empty_message method with custom functionality
        public function cart_empty_message() {
            $url = get_post_type_archive_link( WP_TRAVEL_POST_TYPE );
            echo sprintf(
                __( 'Your cart is empty please <a href="%s"> click here </a> to add trips.', 'wp-travel' ),
                esc_url( $url )
            );
        }
    }

    // Replace the original instance of WP_Travel_Cart with the custom instance
    add_action( 'plugins_loaded', 'replace_WP_Travel_Cart_instance', 10 );
    function replace_WP_Travel_Cart_instance() {
        global $wp_travel_cart;
        $wp_travel_cart = new Custom_WP_Travel_Cart(); // Instantiate the custom class
    }
}
