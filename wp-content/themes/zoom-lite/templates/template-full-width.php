<?php
/**
 * Template Name: Full Width
 *
 * This template displays the content full-width, with no sidebar.
 *
 * @package Zoom
 * @since 1.0
 */

get_header(); ?>

		<div id="primary" class="site-content nosidebar">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'contents/content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_footer(); ?>