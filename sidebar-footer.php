<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shahab_Valizade_Theme
 */

if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>

<div id="footer-widget" class="widget-area">
	<?php dynamic_sidebar( 'footer-1' ); ?>
</div><!-- #secondary -->
