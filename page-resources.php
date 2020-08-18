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

		<?php 
			$resource_link = get_field('resource_link');
			if (have_rows("resources")){
				echo '<div class="resource-content">';
				while(have_rows("resources")){
					the_row();
						echo wp_get_attachment_image( get_sub_field('resource_image'), 'full' );
						echo '<h2>';
							echo get_sub_field("resource_title");
						echo '</h2>';
						echo '<p>';
							echo get_sub_field("resource_content");
						echo '</p>';
						echo '<a href="esc_url( $resource_link )"> Read More ';
						echo '</a>';
				echo '</div>';
							}
					}
     ?>
</div>
<!-- resource-page-container -->
    	<?php endwhile; // End of the loop.?>
			</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();