<?php
/**
 * The template for registration page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

            <div class='container py-5 registration-page'>
				<div class='register-box row'>
					<div class='register-box-left col-md-4 p-4 text-white bg-primary'>
					<?php
					if(get_field('account_type_description')) {
						the_field('account_type_description');
					}
					?>
					</div>
					<div class='register-box-right col-md-8 p-4 bg-light-gray'>
						<?php the_content(); ?>
						<p>By clicking register I agree that I have read and accepted the <a href='/terms-and-policy'>Terms Policy</a></p>
					</div>
				</div>
                
            </div>
			
		<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
