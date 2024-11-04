<?php

// Check if the original WP_Travel_Cart class exists before creating the custom class.
if ( class_exists( 'WP_Travel_Cart' ) ) {
        // Define a custom class that extends WP_Travel_Cart.
        class Custom_WP_Travel_Cart extends WP_Travel_Cart {
    
            // Override the cart_empty_message method with custom functionality.
            public function cart_empty_message() {
                $url = get_post_type_archive_link( WP_TRAVEL_POST_TYPE );
                echo sprintf( __( 'Your cart is empty please <a href="%s"> click here </a> to add trips.', 'wp-travel' ), esc_url( $url ) ); // @phpcs:ignore
            }
        }
    
        // Replace the original instance with an instance of the custom class.
        add_action( 'init', 'replace_wp_travel_cart_instance', 1 );
        
    function replace_wp_travel_cart_instance() {
            global $wt_cart;
            // Set $wt_cart to an instance of the custom class to override methods. 
            $wt_cart = new Custom_WP_Travel_Cart();
        }
    }
    
    
    