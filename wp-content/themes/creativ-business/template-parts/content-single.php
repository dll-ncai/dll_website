<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Creativ Business
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="featured-image">
		<?php
		  /**
		   * Hook - creativ_business_single_image.
		   *
		   * @hooked creativ_business_add_image_in_single_display -  10
		   */
		  do_action( 'creativ_business_single_image' );
		?>
	</div><!-- .blog-featured-image -->

	<div class="entry-container">
		<?php if ( is_singular( 'post' ) ) : ?>
	        <p class="entry-meta">
        	<?php creativ_business_posted_on_custom(); ?>
	        </p><!-- .entry-meta -->
        <?php endif ?>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'creativ-business' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div><!-- .entry-container -->
	
	<footer class="entry-footer">
		<?php creativ_business_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php
		/**
		 * Hook - creativ_business_author_bio.
		 *
		 * @hooked creativ_business_add_author_bio_in_single -  10
		 */
		do_action( 'creativ_business_author_bio' );
	?>

</article><!-- #post-## -->

