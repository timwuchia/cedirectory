<?php
/**
 * The template for displaying the login page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cedirectory
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php while ( have_posts() ) :the_post(); ?>

            <div class='container pt-5'>
                <?php the_content(); ?>
            </div>
			
		<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
