<?php
/**
 * The template for displaying FAQ page.
 *
 * @package cedirectory
 */

get_header();
?>

	
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<div class='faq-page-container'>
					<h2 style="width: 12em; padding-bottom: .5em; 
					margin: auto; text-align: center; border-bottom: 1px solid #222222;" > Frequently Asked Questions </h2>
		<?php while ( have_posts() ) :the_post(); ?>

		<?php 
						if (have_rows("faq")){
							while(have_rows("faq")){
								echo '<div class="faq-content ">';
							the_row();
							echo '<div class="qtn-container">';
								echo '<p>';
									echo get_sub_field("faq_question");
								echo '</p>';
							echo '</div>';
								echo '<div class="accordion"><i class="fas fa-plus"></i></div>';

							echo '<div class="ans-container panel">';
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