<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shahab_Valizade_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'shahabtheme' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="site-branding" style="background-image: url('<?php header_image(); ?>');">
			<?php
			the_custom_logo();
			if ( is_front_page() || is_home() ) :
				?>
                <div class="site-title-description">
				        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				        <?php
			        else :
				        ?>
                    <div class="site-title-description">
				        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				        <?php
			        endif;
			        $shahabtheme_description = get_bloginfo( 'description', 'display' );
			        if ( $shahabtheme_description || is_customize_preview() ) :
				        ?>
				        <p class="site-description"><?php echo $shahabtheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			        <?php endif; ?>
                </div>
		</div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <div class="burger-menu-container">
                    <div class="burger-menu-button">
                        <div class="burger-bar1"></div>
                        <div class="burger-bar2"></div>
                        <div class="burger-bar3"></div>
                    </div>
                           <?php
                        wp_nav_menu(
                            array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-burger-menu',
                            )
                        );
                        ?>
                </div>
            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
