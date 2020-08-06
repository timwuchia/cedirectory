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
    <div class='current-user-products'>
        <?php while($author_products->have_posts()) : $author_products->the_post(); ?>
        <div class='product'>
            <?php the_post_thumbnail('medium');?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </div>
        <?php 
            endwhile; 
            wp_reset_query();
        ?>
    </div>
<?php endif; ?>