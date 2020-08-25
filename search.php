<?php
/**
 * Main template file
 *
 * This page shows the search result.
 *
 * @package cedirectory
 */

get_header();

?>

<?php if ( have_posts() ) : ?>
	<div class="container py-3 mt-5">
	<div class="page-header pb-4">
		<h2 class="page-title">
			<?php
			/* translators: %s: search query. */
			printf( esc_html__( 'Search Results for: %s', 'cedirectory' ), '<span>' . get_search_query() . '</span>' );
			?>
		</h2>
	</div><!-- .page-header -->
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<div class="pb-3">

			<h2 class='mb-3'><a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class='font-italic'><?php the_author(); ?></p>
			<div class="article-content">
				<p><?php the_excerpt(); ?></p>
			</div>
			<a class="d-inline-block mt-4 text-start text-secondary" href="<?php the_permalink(); ?>">Learn More</a>
        </div>
        <?php if (($wp_query->current_post +1) != ($wp_query->post_count)): ?>
			<hr class="lg d-none d-md-block">
		<?php endif; ?>

	<?php endwhile; ?>
	<?php
	echo ce_pagination();
	?>
	</div>
<?php else: ?>
        <div class='container py-5 text-center'>
			<h2 class='mb-3'>Sorry, no search result for "<?php echo get_search_query(); ?>"</h2>
            <div class='d-flex justify-content-center'>
                <a class='btn btn-primary' href="/">Back to Home</a>
            </div>
		</div>
<?php endif; ?>

<?php get_footer(); ?>
