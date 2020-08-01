<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hip_Creations
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php get_template_part('inc/top-banner')?>
			<?php if(have_rows("flexible_layout")) : ?>
				<?php while(have_rows("flexible_layout")) : the_row(); ?>
					<?php get_template_part("layouts/flexible-layout"); ?>
				<?php endwhile ?>
			<?php endif?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();