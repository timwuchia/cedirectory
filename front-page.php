<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays the home page.
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
            <?php
            $post_type = ('product'); 
            $terms = get_terms( array(
                'taxonomy' => 'product-category',
                'hide_empty' => false,
                'parent' => 0
            ) );
            ?>  
            <?php foreach($terms as $key => $term) :?>
            <?php echo '<p>' . $term->name . '</p>'; ?>
            <?php endforeach; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();