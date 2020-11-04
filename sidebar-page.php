<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shahab_Valizade_Theme
 */

if ( ! is_active_sidebar( 'page-1' ) ) {
	return;
}
?>

<div id="page-widget" class="widget-area">
	<?php dynamic_sidebar( 'page-1' ); ?>
</div><!-- #secondary -->
