<?php
/**
 * The template for displaying an archive page of case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>

        <?php //get custom field values
          $services = get_field('services');
          $client = get_field('client');
          $site_link = get_field('site_link');
          $size = 'full';
          $image1 = get_field('image_1');
          $image2 = get_field('image_2');
          $image3 = get_field('image_3');
        ?>

        <aside class="case-study-sidebar">
          <h2><?php the_title(); ?></h2>
          <div class="case-study-services">
            <?php echo $services; ?>
          </div>
          <?php the_excerpt(); ?>
          <a href="<?php echo the_permalink(); ?>">View Project <span>&rsaquo;</span></a>
        </aside>

        <div class="case-study-images">
          <a href="<?php echo the_permalink(); ?>">
            <?php if($image1) : ?>
              <?php echo wp_get_attachment_image($image1, $size); ?>
            <?php endif; ?>
        </a>
        </div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
