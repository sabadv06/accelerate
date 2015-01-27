<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

<div id="primary" class="site-content">
    <div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
                   $services= get_field('services');
                   $client= get_field('client');
                   $link= get_field('site_link');
                   $image1= get_field('image_1');
                   $image2= get_field('image_2');
                   $image3= get_field('image_3');
                   $size ="full";
            ?>
             
            <article class="case_studies">
                 <aside class="case-study-sidebar">
               
                    <h2><?php the_title(); ?></h2>
                    <h5><?php echo $services; ?></h5>
                    <h6><?php echo $client; ?></h6>

                      <?php the_content(); ?>
                    
                      <p><strong><a href="<?php echo $link; ?>">Site Link</a></strong></p>
                    </aside>

                    <div class="case-study-images">
                      <?php if ($image1) {
                    echo wp_get_attachment_image( $image1, $size );
                       } ?>

                    <?php if ($image2) {
                    echo wp_get_attachment_image( $image2, $size );
                    } ?>
                     
                    <?php if ($image3) {
                    echo wp_get_attachment_image( $image3, $size );
                    } ?>
                    </div>
             </article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>