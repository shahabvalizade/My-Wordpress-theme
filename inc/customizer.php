<?php
/**
 * Shahab Valizade Theme Theme Customizer
 *
 * @package Shahab_Valizade_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function shahabtheme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'shahabtheme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'shahabtheme_customize_partial_blogdescription',
			)
		);
	}

	//add new section for theme settings
    $wp_customize->add_section( 'theme_options',
        array(
            'title'			=> __( 'Theme Options', 'shahabtheme' ),
            'priority'		=> 95,
            'capability'	=> 'edit_theme_options',
            'description'	=> __( 'Change Theme Settings', 'shahabtheme' )
        )
    );

    // Create excerpt or full content settings
    $wp_customize->add_setting(	'length_setting',
        array(
            'default'			=> 'excerpt',
            'type'				=> 'theme_mod',
            'sanitize_callback' => 'shahabtheme_sanitize_length', // Sanitization function appears further down
            'transport'			=> 'postMessage'
        )
    );

    // Add the controls
    $wp_customize->add_control(	'shahabtheme_length_control',
        array(
            'type'		=> 'radio',
            'label'		=> __( 'Index/archive displays', 'shahabtheme' ),
            'section'	=> 'theme_options',
            'choices'	=> array(
                'excerpt'		=> __( 'Excerpt (default)', 'shahabtheme' ),
                'full-content'	=> __( 'Full content', 'shahabtheme' )
            ),
            'settings'	=> 'length_setting' // Matches setting ID from above
        )
    );

    // Setting for header and footer background color
    $wp_customize->add_setting( 'theme_background_color', array(
        'default' => '#072237',
        'transport' => 'postMessage',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    // Control for header and footer background color.
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'theme_background_color', array(
                'label' => __( 'Header and footer background color', 'shahabtheme'),
                'section' => 'colors',
                'settings' => 'theme_background_color'
            )
        )
    );



}
add_action( 'customize_register', 'shahabtheme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function shahabtheme_customize_partial_blogname() {
	bloginfo( 'name' );
}

function shahabtheme_sanitize_length( $value ) {
    if ( ! in_array( $value, array( 'excerpt', 'full-content' ) ) ) {
        $value = 'excerpt';
    }
    return $value;
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function shahabtheme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function shahabtheme_customize_preview_js() {
	wp_enqueue_script( 'shahabtheme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'shahabtheme_customize_preview_js' );




if ( ! function_exists( 'shahabtheme_header_style' ) ) :
    /**
     * Styles the header image and text displayed on the blog.
     *
     * @see shahabtheme_custom_header_setup().
     */
    function shahabtheme_header_style() {
        $header_text_color = get_header_textcolor();
        $theme_bg_color = get_theme_mod('theme_background_color');

        /*
         * If no custom options for text are set, let's bail.
         * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
         */
        if ( get_theme_support( 'custom-header', 'default-text-color' ) != $header_text_color ) {

            // If we get this far, we have custom styles. Let's do this.
            ?>
            <style type="text/css">
                <?php
                // Has the text been hidden?
                if ( ! display_header_text() ) :
                    ?>
                .site-title,
                .site-description {
                    position: absolute;
                    clip: rect(1px, 1px, 1px, 1px);
                }
                <?php
                // If the user has set a custom color for the text use that.
            else :
                ?>
                .site-title a,
                .site-description {
                    color: #<?php echo esc_attr( $header_text_color ); ?>;
                }
                <?php endif; ?>
            </style>
        <?php
        }

        if ( '#072237' != $theme_bg_color ) {
            ?>
            <style type="text/css">
                #footer,
                .site-branding,
                article #post-cover {
                    background-color: <?php echo esc_attr($theme_bg_color); ?>;
                }
            </style>
            <?php
        }
    }
    endif;