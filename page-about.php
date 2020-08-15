<?php
/**
 * The template for displaying about page.
 *
 * @package Hip_Creations
 */

get_header();
?>

	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php while ( have_posts() ) :the_post(); ?>

    <?php 
			if(function_exists("get_field")){


					if(get_field("about_us_banner_image", "option") || get_field("about_us_content_description", "option") || get_field("about_us_layer_one_image", "option") ) {
			echo '<div class="about-image-banner custom-container">';
					echo wp_get_attachment_image( get_field('about_us_banner_image', "option"), 'full' );
			echo '</div>';
			
			echo '<div class="about-layer-one ">';
					echo the_field("about_us_content_description_one", "option");
						echo wp_get_attachment_image( get_field('about_us_layer_one_image', "option"), 'full' );
			echo '</div>';

			echo '<div class="about-layer-two">';
							echo the_field("about_us_content_description_two", "option");
						echo wp_get_attachment_image( get_field('about_us_layer_two_image', "option"), 'full' );
			echo '</div>';

			echo '<div class="about-layer-three">';
						echo '<div class="layer-three-images">';
						echo wp_get_attachment_image( get_field('image_one', "option"), 'full' );
						echo wp_get_attachment_image( get_field('image_two', "option"), 'full' );
						echo wp_get_attachment_image( get_field('image_three', "option"), 'full' );
						echo '</div>';

						echo '<div class="descriptions">';
						echo the_field("layer_three_description_one", "option");
						echo the_field("layer_three_description_two", "option");
						echo the_field("layer_three_description_three", "option");
						echo '</div>';
			echo '</div>';


				}
				}
     ?>
   
    	<?php endwhile; // End of the loop.?>
			</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();