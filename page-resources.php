<?php
/**
 * The template for displaying resources page.
 *
 * @package Hip_Creations
 */

get_header();
?>

	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class='resource-page-container'>
		<?php while ( have_posts() ) :the_post(); ?>

		<div class="cstm-resource-title">
			<?php
				if(function_exists('get_field')){
					if(get_field('resources_page_title')){
						echo '<h2>';
						echo the_field('resources_page_title');
						echo '</h2>';
					}
				}
			?>
		</div>

		<?php 
			if (have_rows("resources")){
				
				echo '<div class="resource-content">';
				while(have_rows("resources")){
						
					the_row();
							$resource_link = get_sub_field('resource_link');
						echo wp_get_attachment_image( get_sub_field('resource_image'), 'full' );
						echo '<div class="resource-description">';
						echo '<h3>';
							echo get_sub_field("resource_title");
						echo '</h3>';
						echo '<p>';
							echo get_sub_field("resource_content");
						echo '</p>';
						echo '<a target="_blank" href=" ' . esc_html($resource_link) . '"> Further reading';
						echo '</a>';
						echo '</div>';
				
							}
							echo '</div>';
					}
		 ?>
		 
		</div> <!-- resource-page-container -->
    	<?php endwhile; // End of the loop.?>
			</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();