<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shahab_Valizade_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div id="post-cover">
        <header class="entry-header">
	    	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	    </header><!-- .entry-header -->
        <?php shahabtheme_post_thumbnail(); ?>
    </div>

    <section class="page-content-all">
        <section class="page-content">
	        <div class="entry-content">
	        	<?php
	        	the_content();

	        	wp_link_pages(
	        		array(
	        			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shahabtheme' ),
	        			'after'  => '</div>',
	        		)
	        	);
	        	?>
	        </div><!-- .entry-content -->

	        <?php if ( get_edit_post_link() ) : ?>
	        	<footer class="entry-footer">
	        		<?php
	        		edit_post_link(
	        			sprintf(
	        				wp_kses(
	        					/* translators: %s: Name of current post. Only visible to screen readers */
	        					__( 'Edit <span class="screen-reader-text">%s</span>', 'shahabtheme' ),
	        					array(
	        						'span' => array(
	        							'class' => array(),
	        						),
	        					)
	        				),
	        				wp_kses_post( get_the_title() )
	        			),
	        			'<span class="edit-link">',
	        			'</span>'
	        		);
	        		?>
	        	</footer><!-- .entry-footer -->
            <?php endif; ?>

        </section>
        <?php
        get_sidebar('page');
        ?>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->
