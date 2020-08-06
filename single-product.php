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
            <div class='row'>
                <div class='bg-light-gray col-lg-8 p-4'>
                    <?php 
                    $product_gallery = get_field('product_gallery');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $product_gallery ): ?>
                        <ul id="single-product-slider">
                            <?php foreach( $product_gallery as $image_id ): ?>
                                <li>
                                    <?php echo wp_get_attachment_image( $image_id['id'], $size ); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <ul id="thumbnail-slider">
                            <?php foreach( $product_gallery as $image_id ): ?>
                                <li>
                                    <?php echo wp_get_attachment_image( $image_id['id'], $size ); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class='bg-dark-gray col-lg-4 p-4'>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                    <a class='btn btn-secondary' href="mailto:<?php echo get_the_author_meta('user_email', $author_id);  ?>">Contact Seller</a>
                </div>
            </div>
        </div>

        <?php   // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            endwhile; // End of the loop.
		?>

    </main><!-- #main -->
    

<?php
get_footer();
