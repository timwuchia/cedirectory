<?php
/**
 * The taxonomy template for all industries
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cedirectory
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
                $author_id = get_the_author_id();
                
            ?>
        <div class='taxonomy-filter'>
            <?php get_template_part('inc/post-filter'); ?>
        </div>
         <div class='list-title'>
            <div>
                <h3>Product</h3>
                <div class='list-title-line'></div>
            </div>
            <div>
                <h3>Country</h3>
                <div class='list-title-line'></div>
            </div>
            <div>
                <h3>Date</h3>
                <div class='list-title-line'></div>
            </div>
            </div>
     
            <?php if(have_posts()) : ?>
            <div class='taxonomy-container'>
            <?php while(have_posts()) : the_post(); ?>
            <div class='industry-content pb-4'>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php
                    $selected_country = get_field('country');
                    $countries =  acf_get_field('country')['choices'];
                    if( $selected_country ): ?>
                    <p><?php echo esc_html($countries[$selected_country]); ?></p>
                    <?php endif; ?>
                 <p><?php echo get_the_date(); ?></p>
          
            </div>
            <?php endwhile; ?>
            </div>
            <?php endif; ?>

            <?php ce_pagination(); ?>

           
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
