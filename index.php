<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cedirectory
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
			$args = array(
				'numberposts' => 1,
				'offset' => 0,
				'category' => 0,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' =>'',
				'post_type' => 'post',
				'post_status' => 'draft, publish, future, pending, private',
				'suppress_filters' => true
			);
		$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
	?>
<div class="blog-page-container">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					echo "<div class = 'blog-container' >";
							echo the_post();
						echo '<a href="';
							echo the_permalink($post->ID);
							echo '">';
							echo the_post_thumbnail('general');
						echo '<div class = "blog-content" >';
							echo '<h3>';
								echo get_the_title();
							echo '</h3>';
						echo '</a>';
							echo '<p>';
								echo get_the_date();
							echo '</p>';
						echo '</div>';
					echo "</div>";//end of blog-container
				endwhile; 
			endif;
			?>
</div>

		</main> 
	</div>

<?php

get_footer();
