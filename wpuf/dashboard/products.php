<?php 
if ( is_user_logged_in() ):

    global $current_user;
    wp_get_current_user(); ?>
    <?php
    $author_query = array(
        'post_type' => 'product',
        'posts_per_page' => '-1',
        'author' => $current_user->ID
    );
    $author_products = new WP_Query($author_query);?>
    <div class='current-user-products d-flex flex-wrap'>
    
        
    </div>
    <?php echo do_shortcode( '[wpuf_dashboard post_type="product"]' ); ?>
    <?php
    $add_product_link = get_field('add_product_link');
    if( $add_product_link ): 
        $add_product_link_url = $add_product_link['url'];
        $add_product_link_title = $add_product_link['title'];
        $add_product_link_target = $add_product_link['target'] ? $add_product_link['target'] : '_self';
        ?>
        <p><a class="btn btn-primary" href="<?php echo esc_url( $add_product_link_url ); ?>" target="<?php echo esc_attr( $add_product_link_target ); ?>"><?php echo esc_html( $add_product_link_title ); ?></a>
    <?php endif; ?></p>
    
<?php endif; ?>