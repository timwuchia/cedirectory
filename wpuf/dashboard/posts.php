<?php 
if ( is_user_logged_in() ):

    global $current_user;
    wp_get_current_user(); ?>
    <?php
    $author_query = array('posts_per_page' => '-1','author' => $current_user->ID);
    $author_posts = new WP_Query($author_query);?>
    <div class='current-user-posts'>
        <?php while($author_posts->have_posts()) : $author_posts->the_post(); ?>
        <div class='post'>
            <?php the_post_thumbnail('medium');?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </div>
        <?php 
            endwhile; 
            wp_reset_query();
        ?>
    </div>
    <?php echo do_shortcode( '[wpuf_dashboard]' ); ?>
<?php endif; ?>