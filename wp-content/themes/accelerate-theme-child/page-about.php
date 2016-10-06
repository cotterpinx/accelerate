<?php
/**
 * The template for displaying the Accelerate About page.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2 class="page-content"><?php the_title(); ?></h2>
				<p class="page-content">
					<?php the_content(); ?>
				</p>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
