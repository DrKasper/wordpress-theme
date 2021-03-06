<?php
/**
 * The template for displaying all single posts.
 *
 * @package OKFNWP
 */

get_header(); ?>

	<div class="main col-md-8">
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'content', 'single' );

				// Output the author bio box
				get_template_part( 'author-info' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
		?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>