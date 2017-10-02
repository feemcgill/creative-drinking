<?php
/**
 * The template for displaying search results pages.
 *
 * @package adp
 */

get_header(); ?>



		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'adp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>



			<?php endwhile; ?>

			<?php adp_paging_nav(); ?>


		<?php endif; ?>



<?php get_footer(); ?>
