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
				<div class='single-blog-nav'>
				<?php  
					$prev_post = get_previous_post();
					$next_post = get_next_post(); 
				?>
				<div class='d-flex justify-content-between'>
				<?php if (!empty($prev_post)): ?>
					<a class="py-1" href="<?php echo $prev_post->guid ?>"><i class="fas fa-chevron-left"></i>&nbsp; <?php echo $prev_post->post_title; ?></a>
				<?php endif ?>	
				<?php if (!empty($next_post)): ?>
					<a class="py-1" href="<?php echo $next_post->guid ?>"><?php echo $next_post->post_title; ?> &nbsp;<i class="fas fa-chevron-right"></i></a>
				<?php endif ?>
				</div>
			</div>
			<div class='container pb-5'>
			<?php
			
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
			</div>
			
		<?php endwhile; // End of the loop. ?>
		

	</main><!-- #main -->

<?php
get_footer();
