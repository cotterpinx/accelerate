<?php
/**
 * The template for displaying a single case study
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
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
          Client: <?php echo $client; ?>
          <?php the_content(); ?>
          <a href="<?php echo $site_link; ?>"><strong>View Live Site</strong></a>
        </aside>

        <div class="case-study-images">
          <?php //begin php code for images
            if($image1) :
              echo wp_get_attachment_image($image1, $size);
            endif;

            if($image2) :
              echo wp_get_attachment_image($image2, $size);
            endif;

            if($image3) :
              echo wp_get_attachment_image($image3, $size);
            endif;
          ?> <!-- end php code for images -->
        </div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
