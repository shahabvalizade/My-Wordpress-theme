<?php
/**
 * Template part for displaying post single page.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div id="post-cover">
        <header class="entry-header">
            <?php
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            ?>
            <div class="entry-meta">
                <?php
                shahabtheme_posted_on();
                shahabtheme_posted_by();
                ?>
            </div><!-- .entry-meta -->
            <div class="post-entry-meta"><?php shahabtheme_post_meta();
            ?>
            </div>
        </header><!-- .entry-header -->
        <?php shahabtheme_post_thumbnail(); ?>
    </div>
    <section class="single-content-all">
        <section class="single-content">
	        <div class="entry-content">
	        	<?php
	        	the_content(
	        		sprintf(
	        			wp_kses(
	        				/* translators: %s: Name of current post. Only visible to screen readers */
	        				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'shahabtheme' ),
	        				array(
	        					'span' => array(
	        						'class' => array(),
	        					),
	        				)
	        			),
	        			wp_kses_post( get_the_title() )
	        		)
	        	);

	        	wp_link_pages(
	        		array(
	        			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shahabtheme' ),
	        			'after'  => '</div>',
	        		)
	        	);
	        	?>
	        </div><!-- .entry-content -->

	        <footer class="entry-footer">
	        	<?php shahabtheme_entry_footer(); ?>
	        </footer><!-- .entry-footer -->
	    </section>

        <?php
        get_sidebar();
        ?>
    </section>


</article><!-- #post-<?php the_ID(); ?> -->
