<?php
/**
 * The template for displaying all single posts.
 *
 * @package adp
 */

get_header(); ?>


		<?php while ( have_posts() ) : the_post(); ?>


			<?php adp_post_nav(); ?>
			

		<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
