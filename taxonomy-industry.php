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
 * @package test
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            
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
            <div class='taxonomy-container'>
            <?php while(have_posts()) : the_post(); ?>
            <div class='industry-content-container'>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('general'); ?></a>
                <div class='industry-description'>
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

           
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
