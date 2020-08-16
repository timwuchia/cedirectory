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
 * @package test
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

<div class=' blog-container d-flex flex-wrap'> 
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

<div class = 'blog col-12 col-md-6 col-lg-4'>
	<?php
	foreach( $recent_posts as $recent ){	
			
			echo '<div class = "latest-blog-container">';
			echo get_the_post_thumbnail($recent['ID'],'featured-large');
			echo  '<a href="' . get_permalink() . '">';
			echo "<div class ='latest-blog-title'>";
			echo '<h1>';
			echo $recent['post_title'];
			echo '</h1>';
			echo "<h2>Recent Blog</h2>";
			echo "</div>";
			echo "</a>";
			echo '</div>';//end of latest-blog-container

		wp_reset_query();

		}

		?>

	
<div class="">
			<?php
			if ( have_posts() ) :

				while ( have_posts() ) :
						echo "<div class = 'blog-wrapper' >";
						echo the_post();
						echo "<div class = 'blog-images' >";
						echo '<a class="blog-img-sec" href="';
						echo the_permalink($post->ID);
						echo '">';
						echo the_post_thumbnail('work-img');
						echo '<h2>';
						echo get_the_title();
						echo '</h2>';
						echo '</a>';
						echo "</div>";// end of blog-images
						echo '<br>';
						echo '<div class = "blog-content" >';
						echo '<h4>';
						echo get_the_date();
						echo '</h4>';
						echo '<p>';
						echo the_excerpt();
						echo '</p>';
						echo '</div>';
						echo "</div>";//end of blog-wrapper
			endwhile; 
			endif;
			?>
	</div><!--end of blog container	-->
</div>



		</main> 
	</div>

<?php

get_footer();
