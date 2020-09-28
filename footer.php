<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shahab_Valizade_Theme
 */

?>

	<footer id="footer" class="site-footer">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-2',
                'menu_id'        => 'social-menu',
            )
        );
        ?>
		<div class="site-info">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'تم وردپرس %1$s توسط %2$s', 'shahabtheme' ), 'ShahabV', '<a href="https://shahabvalizade.com">Shahab Valizade</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
