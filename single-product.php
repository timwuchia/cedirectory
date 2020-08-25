<?php
/**
 * The template for displaying all single products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cedirectory
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>
        <div class='single-product-container container py-5'>
            <div class='site-breadcrumb mb-4'>
            <?php
                echo do_shortcode( '[wpseo_breadcrumb]');
            ?>
            </div>
            <div class='row'>
                <div class='bg-light-gray col-lg-8 p-4'>
                    <?php 
                    $product_gallery = get_field('product_gallery');
                    $size = 'product'; // (thumbnail, medium, large, full or custom size)
                    if( $product_gallery ): ?>
                        <ul id="single-product-slider">
                            <?php foreach( $product_gallery as $image_id ): ?>
                                <li>
                                    <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <ul id="thumbnail-slider">
                            <?php foreach( $product_gallery as $image_id ): ?>
                                <li>
                                    <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class='
                single-product-description-container bg-dark-gray col-lg-4 p-4'>
                <div class='single-product-description'>
                    <h2><?php the_title(); ?></h2>
                       <?php
                    if(get_field('hs_code')){
                        echo '<p style="color: #9a9a9a; font-size: .8em; " >HS Code:';
                        echo '<span style="padding-left: .8em;">';
                        echo the_field('hs_code');
                        echo '</p>';
                    }
                    ?>
                    <?php the_content(); ?>
                    <?php
                    $country = get_field('country');
                    if( $country ): ?>
                    <p>Country: <span><?php echo esc_html($country); ?></span></p>
                    <?php endif; ?>
                 
                    <a class='btn btn-secondary' href="mailto:<?php echo get_the_author_meta('user_email');  ?>">Contact Seller</a>
                    </div>
                </div>
            </div>
            <?php //echo do_shortcode('[wpuf_dashboard post_type="product"]')?>
            <?php //echo do_shortcode('[wpuf_edit]')?>
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

        <?php  
            endwhile; // End of the loop.
		?>
        
    </main><!-- #main -->
    

<?php
get_footer();
