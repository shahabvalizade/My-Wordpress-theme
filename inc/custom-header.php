<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Shahab_Valizade_Theme
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses shahabtheme_header_style()
 */
function shahabtheme_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'shahabtheme_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '000000',
				'width'              => 2000,
				'height'             => 850,
				'flex-height'        => true,
				'wp-head-callback'   => 'shahabtheme_header_style',
			)
		)
	);
}
add_action( 'after_setup_theme', 'shahabtheme_custom_header_setup' );
