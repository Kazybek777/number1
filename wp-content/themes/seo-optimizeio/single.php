<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package seo-optimizeio
 */

get_header(); ?>

<div id="primary" class="featured-content content-area">
	<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation( array(
				'prev_text'                  => __( '<div>Next Post:</div> %title','seo-optimizeio' ),
				'next_text'                  => __( '<div>Previous Post:</div> %title','seo-optimizeio' ),
				'in_same_term'               => true,
				'taxonomy' =>'post_tag', 
				'screen_reader_text' => __( 'Continue Reading','seo-optimizeio' ),
			) );

			get_the_category();
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
		endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
