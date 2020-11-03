<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Shahab_Valizade_Theme
 */

get_header();
?>

    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'shahabtheme' ); ?></h1>
    </header><!-- .page-header -->

	<main id="primary" class="site-main">

			<div class="page-content">
				<p class="text-404"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'shahabtheme' ); ?></p>

					<?php
					get_search_form();
					?>

			</div><!-- .page-content -->
            <?php get_sidebar('no-content'); ?>

	</main><!-- #main -->

<?php
get_footer();
