<?php
/**
 * The template for the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cedirectory
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <?php get_template_part('inc/top-banner')?>
            <!-- Show Featured Products -->
            <?php
                $productArgs = array(  
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'posts_per_page' => 3, 
                    'order' => 'DESC', 
                );
            
                $products = new WP_Query( $productArgs ); ?>
                <?php if($products->have_posts()) : ?>
                <div class='featured-product-container container'>
                        <h2 class='pb-4 text-center text-primary'>Featured Products</h2>
                        <div class='d-flex flex-wrap featured-products'>
                        
                        <?php while ( $products->have_posts() ) : $products->the_post(); ?>
                            <div class='featured-product col-lg-4'>
                                <div class='featured-product-image'>
                                      <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('full'); ?>
                                    </a>
                                </div>
                                <div class='featured-product-content d-flex justify-content-between align-items-center'>
                                    <div>
                                    <a href="<?php the_permalink(); ?>">
                                       <h3><?php the_title(); ?></h3>
                                    </a>
                                    </div>
                               
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php  wp_reset_postdata(); ?>

            <!-- Product Cat Slider -->
            <?php
                $post_type = ('product'); 
                $terms = get_terms( array(
                    'taxonomy' => 'directive',
                    'hide_empty' => false,
                    'parent' => 0
                ) );
            ?>
            <div class='product-categories bg-light-gray py-4'>
                <div>
                    <h2 class='pb-4 text-center text-primary'>Directives</h2>
                    <div class='product-cat-slider'> 
                        <?php foreach($terms as $key => $term) :?>
                        <?php 
                        $link = get_term_link($term);
                        $featured_image = get_field("product_category_featured_image", 'directive_' . $term->term_id);
                        $excerpt = get_field("product_category_excerpt", 'directive_' . $term->term_id);
                        print_r($featured_image);
                        ?>
                        <a class='product-cat-slide d-block' href="<?php echo $link; ?>">
                            <?php if($featured_image) : ?>
                            <span class='image d-block'>
                                <?php echo wp_get_attachment_image($featured_image['id'], 'general'); ?>
                            </span>
                            <?php endif; ?>
                            <h3 class='content'>
                                <span><?php echo $term->name; ?></span>
                            </h3>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();