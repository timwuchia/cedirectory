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
<div class='faq-page-container'>
		<?php while ( have_posts() ) :the_post(); ?>

		<?php 

						if (have_rows("faq")){
							echo '<div class="faq-content">';
							while(have_rows("faq")){
							the_row();
							echo '<div class="qtn-container">';
								echo '<h4> Question';
								echo '</h4>';
							echo '<p>';
								echo get_sub_field("faq_question");
							echo '</p>';
							echo '</div>';

							echo '<div class="ans-container">';
								echo '<h4> Answer';
								echo '</h4>';
							echo '<p>';
								echo get_sub_field("faq_answer");
							echo '</p>';
							echo '</div>';
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