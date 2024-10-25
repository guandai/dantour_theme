<?php
function custom_wptravel_single_excerpt( $trip_id ) {
	if ( ! $trip_id ) {
		return;
	}
	$strings = WpTravel_Helpers_Strings::get();
	// Get Settings.
	$settings = wptravel_get_settings();
	$enable_one_page = isset( $settings['enable_one_page_booking'] ) &&  ( $settings['enable_one_page_booking'] == true || $settings['enable_one_page_booking'] == 1 ) ? true : false;
	$hook_for_double_enable = apply_filters( 'wp_travel_enable_double_booking_button', true );
	$enquery_global_setting = isset( $settings['enable_trip_enquiry_option'] ) ? $settings['enable_trip_enquiry_option'] : 'yes';

	$global_enquiry_option = get_post_meta( $trip_id, 'wp_travel_use_global_trip_enquiry_option', true );

	if ( '' === $global_enquiry_option ) {
		$global_enquiry_option = 'yes';
	}
	if ( 'yes' === $global_enquiry_option ) {

		$enable_enquiry = $enquery_global_setting;

	} else {
		$enable_enquiry = get_post_meta( $trip_id, 'wp_travel_enable_trip_enquiry_option', true );
	}

	// Strings.
	$trip_type_text  = isset( $strings['trip_type'] ) ? $strings['trip_type'] : __( 'Trip Type', 'wp-travel' );
	$activities_text = isset( $strings['activities'] ) ? $strings['activities'] : __( 'Activities', 'wp-travel' );
	$group_size_text = isset( $strings['group_size'] ) ? $strings['group_size'] : __( 'Group size', 'wp-travel' );
	$min_pax_text        = isset( $strings['bookings']['min_pax'] ) ? $strings['bookings']['min_pax'] : __( ' Min', 'wp-travel' );
	$max_pax_text        = isset( $strings['bookings']['max_pax'] ) ? $strings['bookings']['max_pax'] : __( ' Max', 'wp-travel' );
	$pax_text        = isset( $strings['bookings']['pax'] ) ? $strings['bookings']['pax'] : __( 'Pax', 'wp-travel' );
	$reviews_text    = isset( $strings['reviews'] ) ? $strings['reviews'] : __( 'Reviews', 'wp-travel' );

	$empty_trip_type_text  = isset( $strings['empty_results']['trip_type'] ) ? $strings['empty_results']['trip_type'] : __( 'No Trip Type', 'wp-travel' );
	$empty_activities_text = isset( $strings['empty_results']['activities'] ) ? $strings['empty_results']['activities'] : __( 'No Activities', 'wp-travel' );
	$empty_group_size_text = isset( $strings['empty_results']['group_size'] ) ? $strings['empty_results']['group_size'] : __( 'No Size Limit', 'wp-travel' );

	$wp_travel_itinerary = new WP_Travel_Itinerary();

	// Additoinal trip data.
	$pricing_type    = 'multiple-price'; // default.
	$booking_type    = get_post_meta( $trip_id, 'wp_travel_custom_booking_type', true );
	$custom_link     = get_post_meta( $trip_id, 'wp_travel_custom_booking_link', true );
	$open_in_new_tab = get_post_meta( $trip_id, 'wp_travel_custom_booking_link_open_in_new_tab', true );
	if ( class_exists( 'WP_Travel_Utilities_Core' ) ) {
		$pricing_type = get_post_meta( $trip_id, 'wp_travel_pricing_option_type', true );
	}
	?>
	<div class="trip-short-desc">
		<?php the_excerpt(); ?>
	</div>
	<div class="wp-travel-trip-meta-info">
		<ul>
			<?php
				wptravel_do_deprecated_action( 'wp_travel_single_itinerary_before_trip_meta_list', array( $trip_id ), '2.0.4', 'wp_travel_single_trip_meta_list' );  // @since 1.0.4 and deprecated in 2.0.4
				/**
				 * Variable declear for Hooks parameter
				 */
				$trip_types_list                 = $wp_travel_itinerary->get_trip_types_list();
				$activity_list                   = $wp_travel_itinerary->get_activities_list();
				$wptravel_enable_group_size_text = apply_filters( 'wptravel_show_group_size_text_single_itinerary', true );
				$min_group_size                      = wptravel_get_group_size( $trip_id, 'min_pax' );
				$max_group_size                      = wptravel_get_group_size( $trip_id, 'max_pax' );
				$count                           = (int) get_comments_number();

				/**
				 * Hooks parameter array varible declear
				 */
				$wptravel_after_excerpt_single_trip_page = array(
					'trip_type'  => apply_filters( 'wp_travel_single_archive_trip_types', '<li>
										<div class="travel-info">
											<strong class="title">' . esc_html( $trip_type_text ) . '</strong>
										</div>
										<div class="travel-info">
											<span class="value">' . ( ( $trip_types_list ) ? wp_kses( $trip_types_list, wptravel_allowed_html( array( 'a' ) ) ) : ( esc_html( apply_filters( 'wp_travel_default_no_trip_type_text', $empty_trip_type_text ) ) ) ) .
											'</span>
										</div>
									</li>', $trip_id ),
					'activity'   => apply_filters( 'wp_travel_single_archive_activities', '<li>
										<div class="travel-info">
											<strong class="title">' . esc_html( $activities_text ) . '</strong>
										</div>
										<div class="travel-info">
											<span class="value">' . ( ( $activity_list ) ? wp_kses( $activity_list, wptravel_allowed_html( array( 'a' ) ) ) : ( esc_html( apply_filters( 'wp_travel_default_no_trip_type_text', $empty_activities_text ) ) ) ) .
											'</span>
										</div>
									</li>', $trip_id ),
					'group_size' => ( ( $wptravel_enable_group_size_text ) ? (
									apply_filters( 'wp_travel_single_archive_group_size', '<li>
										<div class="travel-info">
											<strong class="title">' . esc_html( $group_size_text ) . '</strong>
										</div>
										<div class="travel-info">
											<span class="value minpax">' . apply_filters( 'wp_travel_frontend_group_sized_show_min_max', ( ( (int) $min_group_size && $min_group_size < 999 ) ? apply_filters( 'wp_travel_template_group_size_text', esc_html( $min_group_size ). ' ' .esc_html( $min_pax_text ) ) : ( esc_html( apply_filters( 'wp_travel_default_no_trip_type_text', $empty_group_size_text ) ) ) ), $trip_id ) .
											'</span> <span class="separator"> - </span> 
											<span class="value maxpax">' . apply_filters( 'wp_travel_frontend_group_sized_show_min_max', ( ( (int) $max_group_size && $max_group_size < 999 ) ?  apply_filters( 'wp_travel_template_group_size_text', esc_html( $max_group_size ). ' ' .esc_html( $max_pax_text  ) )  : ( esc_html( apply_filters( 'wp_travel_default_no_trip_type_text', $empty_group_size_text ) ) ) ), $trip_id ) .
											'</span>
										</div>
									</li>', $trip_id ) ) : '' ),
					'reviews'    => apply_filters( 'wp_travel_single_archive_review', '<li>
									<div class="travel-info">
										<strong class="title">' . esc_html( $reviews_text ) . '</strong>
									</div>
									<div class="travel-info">
										<span class="value"> <a href="#review" class="wp-travel-count-info">' . esc_html( $count ) . __( ' Reviews', 'wp-travel' ) .
										'</a></span>
									</div>
								</li>', $trip_id ),
				);

				$wptravel_after_excerpt_single_trip_page = apply_filters( 'wptravel_after_excerpt_single_trip_page', $wptravel_after_excerpt_single_trip_page, $trip_id );

				foreach ( $wptravel_after_excerpt_single_trip_page as $key => $value ) {
					echo wp_kses_post( $value );
				}

				wptravel_do_deprecated_action( 'wp_travel_single_itinerary_after_trip_meta_list', array( $trip_id ), '2.0.4', 'wp_travel_single_trip_meta_list' );  // @since 1.0.4 and deprecated in 2.0.4
				do_action( 'wp_travel_single_trip_meta_list', $trip_id ); // @phpcs:ignore
			?>
		</ul>
	</div>

	<div class="booking-form">
		<div class="wp-travel-booking-wrapper">
			<?php
			$trip_enquiry_text = isset( $strings['trip_enquiry'] ) ? $strings['trip_enquiry'] : __( 'Trip Enquiry', 'wp-travel' );
			$book_now_text     = isset( $strings['featured_book_now'] ) ? $strings['featured_book_now'] : __( 'Book Now', 'wp-travel' );
			if ( wp_travel_add_to_cart_system() ) {
				$book_now_text = isset( $strings['set_add_to_cart'] ) ? $strings['set_add_to_cart'] : __( 'Add to Cart', 'wp-travel' );
			}
			$book_now_text = 'AAAAA';
			if ( 'custom-booking' === $pricing_type && 'custom-link' === $booking_type && $custom_link ) :
				?>
				<a href="<?php echo esc_url( $custom_link ); ?>" target="<?php echo $open_in_new_tab ? esc_attr( 'new' ) : ''; ?>" class="wptravel-book-your-trip"><?php echo esc_html( apply_filters( 'wp_travel_template_book_now_text', $book_now_text ) ); // @phpcs:ignore ?></a>
				<?php
			elseif ( wptravel_tab_show_in_menu( 'booking' ) || $enable_one_page ) :
				if ( $enable_one_page == true && $hook_for_double_enable == true ) {
				?>
				<div id='wp-travel-one-page-checkout-enables'><?php __('Book Now', 'wp-travel' ); ?></div>
				<?php } else { ?>
				<button class="wptravel-book-your-trip wp-travel-booknow-btn"><?php echo esc_html( apply_filters( 'wp_travel_template_book_now_text', $book_now_text ) ); // @phpcs:ignore ?></button>
			<?php } endif;
			if ( 'yes' === $enable_enquiry ) : ?>
				<a id="wp-travel-send-enquiries" class="wp-travel-send-enquiries" data-effect="mfp-move-from-top" href="#wp-travel-enquiries">
					<span class="wp-travel-booking-enquiry">
						<span class="dashicons dashicons-editor-help"></span>
						<span>
							<?php echo esc_attr( apply_filters( 'wp_travel_trip_enquiry_popup_link_text', $trip_enquiry_text ) ); // @phpcs:ignore ?>
						</span>
					</span>
				</a>
				<?php
			endif;
			?>
		</div>
	</div>
		<?php
		if ( 'yes' === $enable_enquiry ) :
			wptravel_get_enquiries_form();
		endif;
		
		wptravel_do_deprecated_action( 'wp_travel_single_after_booknow', array( $trip_id ), '2.0.4', 'wp_travel_single_trip_after_booknow' );  // @since 1.0.4 and deprecated in 2.0.4
		/**
		 * Content after Top Right Booknow button.
		 *
		 * @since 2.0.4
		 */
		do_action( 'wp_travel_single_trip_after_booknow', $trip_id ); // @phpcs:ignore

}
