<?php
/**
 * The template for displaying about page.
 *
 * @package cedirectory
 */

get_header();
?>

	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<div class='about-container'>
		<?php while ( have_posts() ) :the_post(); ?>

    <?php 
			if(function_exists("get_field")){


					if(get_field("about_us_banner_image", "option") || get_field("about_us_content_description", "option") || get_field("about_us_first_content_title", "option") || get_field("about_us_second_content_title", "option") || get_field("about_us_layer_one_image", "option") ) {


			echo '<div class="about-image-banner-container">';
					echo wp_get_attachment_image( get_field('about_us_banner_image', "option"), 'banner' );
			echo '</div>';

	echo'<div class="about-content-container">';
		
		echo'<div class="about-content-one">';

			echo '<div class="about-layer-one layer ">';
				echo '<div class="description">';
					echo '<h2>';
						echo the_field("about_us_first_content_title", "option");
					echo '</h2>';
					echo '<p>';
						echo the_field("about_us_content_description_one", "option");
					echo '</p>';
				echo '</div>';
					
						echo wp_get_attachment_image( get_field('about_us_layer_one_image', "option"), 'general-large' );
			echo '</div>';

			echo '<div class="about-layer-two layer">';
							
						echo wp_get_attachment_image( get_field('about_us_layer_two_image', "option"), 'general-large' );
					echo '<div class="description">';
						echo '<h2>';
						echo the_field("about_us_second_content_title", "option");
						echo '</h2>';
						echo '<p>';
						echo the_field("about_us_content_description_two", "option");
						echo '</p>';
					echo '</div>';
			echo '</div>';
		echo '</div>';

			echo '<div class="about-layer-three layer">';
					echo '<div class="layer-three-images">';
						echo wp_get_attachment_image( get_field('image_one', "option"), 'general' );
						echo wp_get_attachment_image( get_field('image_two', "option"), 'general' );
						echo wp_get_attachment_image( get_field('image_three', "option"), 'general' );
					echo '</div>';

					echo '<div class="btm-description description layer">';
					echo '<span>';
							echo '<p>';
								echo the_field("layer_three_description_one", "option");
							echo '</p>';
					echo '</span>';
					echo '<span>';
							echo '<p>';
								echo the_field("layer_three_description_two", "option");
							echo '</p>';
					echo '</span>';
						echo '<span>';
							echo '<p>';
								echo the_field("layer_three_description_three", "option");
							echo '</p>';
					echo '</span>';
					echo '</div>';
			echo '</div>';

echo '</div>';
// end of about-content-container
				}
				}
     ?>
</div>
<!-- about-container -->
    	<?php endwhile; // End of the loop.?>
			</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();