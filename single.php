<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

		endwhile; // End of the loop.
		?>

        <?php
        the_post_navigation(
            array( 'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'shahabtheme' ) . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'shahabtheme' ) . '</span> <span class="nav-title">%title</span>',
            )
        );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>

	</main><!-- #main -->

<?php
get_footer();
