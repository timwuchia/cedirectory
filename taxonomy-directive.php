<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all directives.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class='taxonomy-container'>
            <div class='site-breadcrumb mb-4'>
            <?php
                echo do_shortcode( '[wpseo_breadcrumb]');
            ?>
            </div>
            <?php
                $term = get_queried_object();
                $image = get_field("product_category_featured_image", $term);
                $excerpt = get_field('product_category_excerpt', $term);
            ?>
            <?php get_template_part('inc/post-filter'); ?>
            <?php if(have_posts()) : ?>
            <div class='directive-container'>
            <?php while(have_posts()) : the_post(); ?>
        
            <div class='directive-content-container'>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('general'); ?></a>
                <div class='directive-description '>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                <div class="contact-button">
                    <a class='btn btn-secondary' href="mailto: <?php echo get_the_author_meta('user_email', $author_id)?>">Contact Seller</a>
                </div>
                </div>
            </div>
            <?php endwhile; ?>
            </div>
            <?php endif; ?>
            
            <?php ce_pagination(); ?>

            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
