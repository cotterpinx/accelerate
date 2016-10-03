<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="featured-work-section">
	<h4>Featured Work</h4>

	<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>

	<div class="featured-work">
		<?php while( have_posts() ) : the_post(); ?>
			<?php //get featured work image, set image size
				$image = get_field('image_1');
				$size = 'medium';
			?>

				<!-- <div class="featured-work-item" > -->
				<figure class="featured-work-item">	
					<a href="<?php the_permalink(); ?>">
						<?php if($image) : ?>
							<?php echo wp_get_attachment_image($image, $size); ?>
						<?php endif; ?>
						<!-- <br/> -->
						<figcaption>
							<?php the_title(); ?>
						</figcaption>
					</a>
				</figure>
				<!-- </div> -->
		<?php endwhile; ?>
	</div> <!-- end featured-work -->
</section>

<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">
			<h4 >From the Blog</h4>
			<?php query_posts('posts_per_page=1'); ?>
			<?php while( have_posts() ) : the_post(); ?>
				<h2> <?php the_title(); ?> </h2>
				<?php the_excerpt(); ?>
				<a class="read-more-link" href="<?php the_permalink(); ?>" > Read more <span>&rsaquo;</span></a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
