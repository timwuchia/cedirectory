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
                    $size = 'general'; // (thumbnail, medium, large, full or custom size)
                    if( $product_gallery ): ?>
                        <ul id="single-product-slider">
                            <?php foreach( $product_gallery as $image_id ): ?>
                                <li>
                                    <?php echo wp_get_attachment_image( $image_id['ID'], $size ); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <ul id="thumbnail-slider">
                            <?php foreach( $product_gallery as $image_id ): ?>
                                <li>
                                    <?php echo wp_get_attachment_image( $image_id['ID'], $size ); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class='
                single-product-description-container bg-dark-gray col-lg-4 p-4'>
                <div class='single-product-description'>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <?php
                    $countries = get_field('country');
                    if( $countries ): ?>
                    <p>Countries: </p>
                    <ul>
                        <?php foreach( $countries as $country ): ?>
                            <li><span class="color-<?php echo $country['value']; ?>"><?php echo $country['label']; ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <?php
                    if(get_field('hs_code')){
                        echo '<p>';
                        the_field('hs_code');
                        echo '</p>';
                    }
                    ?>

                    <a class='btn btn-secondary' href="mailto:<?php echo get_the_author_meta('user_email', $author_id);  ?>">Contact Seller</a>
                    </div>
                </div>
            </div>
            <?php //echo do_shortcode('[wpuf_dashboard post_type="product"]')?>
            <?php //echo do_shortcode('[wpuf_edit]')?>
            <?php
            echo 'test';
            edit_post_link('edit');
            ?>
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
