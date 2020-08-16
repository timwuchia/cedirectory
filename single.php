<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cedirectory
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class='container py-5'>
				<div class='single-blog row'>
					<div class='col-md-6'>
					<?php
					echo the_post_thumbnail('general-large');
					?>
					</div>
					<div class='col-md-6'>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					</div>
				</div>
			</div>

			
		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();
