<?php
/**
 * @package wp-travel-downloads-custom
 */

if (! defined('ABSPATH')) {
	exit;
}

add_action( 'init', 'my_custom_plugin_remove_wp_travel_action2', 15 );
function my_custom_plugin_remove_wp_travel_action2() {
	  if ( ! class_exists( 'WP_Travel_Downloads_Core' ) ) {
			return;
		}
    remove_action( 'init', array( 'WP_Travel_Downloads_Core', 'wp_travel_itinerary_downloads_callback' ), 20 );
		define_download_class();
		Custom_WP_Travel_Downloads::wp_travel_itinerary_downloads_callback(0);
}

function define_download_class() {
	if ( ! class_exists( 'WP_Travel_Downloads_Core' ) ) {
		return;
	}
	class Custom_WP_Travel_Downloads extends WP_Travel_Downloads_Core {
		public static function wp_travel_itinerary_downloads_callback($trip_id)
		{
			if ( ! WP_Travel::verify_nonce( true ) ) {
				return;
			}
			if ( ! isset( $_REQUEST['trip_id'] ) ) {
				return;
			}

			if ( isset( $_REQUEST['download_itinerary'] ) && isset( $_REQUEST['trip_id'] ) ) {
        self::generate_pdf( $_REQUEST['trip_id'] );
        exit;
			} elseif ( isset( $_REQUEST['html_itinerary'] ) && isset( $_REQUEST['trip_id'] ) ) {
				self::output_html( $_REQUEST['trip_id'] );
				exit;
			}
		}

		public static function wp_travel_itinerary_download_template($trip_id, $template = 'default')
		{
			include __DIR__ . '/pdf_template.php';
		}
	
		public static function output_html( $trip_id ) {
			ob_start();
			self::wp_travel_itinerary_download_template( $trip_id );
			$html = ob_get_clean();

			// Output the HTML content
			echo $html;
			exit; // Stop further execution
		}

		// Override the generate_pdf method here as before
		public static function generate_pdf($trip_id, $download_pdf = true)
		{
			// $trip_id = $_REQUEST['trip_id'];
			$defaultConfig = (new Mpdf\Config\FontVariables())->getDefaults();
			$font_dirs     = [];
	
			$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
			$fontData          = $defaultFontConfig['fontdata'];
			error_log(print_r($defaultConfig, true));
			error_log(print_r($font_dirs, true));
			error_log(print_r(__DIR__, true));
			$mpdf = new \Mpdf\Mpdf(
				array(
					'margin_top'    => 0,
					'margin_left'   => 0,
					'margin_bottom' => 0,
					'margin_right'  => 0,
					'tempDir'       => WP_TRAVEL_ITINERARY_TMP_PATH,
					'fontdata'      => array(
						'open-sans' => array(
							'R' => 'Poppins-Regular.ttf',
							'B' => 'Poppins-Bold.ttf',
							// 'I'  => 'OpenSans-Italic.ttf',
							// 'BI' => 'OpenSans-BoldItalic.ttf',
						),
					),
					'fontDir'       => array_merge(
						$font_dirs,
						array(
							__DIR__ . '/fonts',
						)
					),
				)
			);
			ob_start();
			self::wp_travel_itinerary_download_template($trip_id);
			$html = ob_get_contents();
	
			ob_end_clean();
			$mpdf->AddPage();
			/**
			 * @since 5.5
			 * fixed download using chinies lan
			 */
			$site_languages = get_locale();
			if ($site_languages == 'zh_CN' || $site_languages == 'zh_TW' || $site_languages == 'ja' || $site_languages == 'zh_HK') {
				$mpdf->useAdobeCJK      = true;
				$mpdf->autoLangToFont   = true;
				$mpdf->autoScriptToLang = true;
			}
			$mpdf->WriteHTML($html);
			$dir = trailingslashit(WP_TRAVEL_ITINERARY_PATH);
	
			$trips_name            = get_the_title($trip_id);
			$downloadable_filename = $trips_name . '.pdf';
			if (! $download_pdf) {
				$mpdf->Output($dir . $downloadable_filename, 'F'); // Store it in file.
			} else {
				$mpdf->Output($trips_name . '.pdf', 'D'); // download pdf.
			}
		}
	}
}


