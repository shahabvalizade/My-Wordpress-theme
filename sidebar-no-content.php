<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shahab_Valizade_Theme
 */

if ( ! is_active_sidebar( 'no-content' ) ) {
	return;
}
?>

<div id="no-content-widget" class="widget-area">
	<?php dynamic_sidebar( 'no-content' ); ?>
</div><!-- #secondary -->
