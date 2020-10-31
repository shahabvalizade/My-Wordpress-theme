<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shahab_Valizade_Theme
 */

if ( is_home() && is_front_page() ) :
    if ( ! is_active_sidebar( 'sidebar-2' ) ) :
        return;
    endif;
    ?>

    <aside id="front-page-sidebar" class="widget-area">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </aside><!-- #secondary -->
<?php
else :
    if ( ! is_active_sidebar( 'sidebar-1' ) ) :
        return;
    endif;
    ?>

    <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #secondary -->
<?php
endif;
?>

