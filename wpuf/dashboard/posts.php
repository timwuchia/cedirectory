   
<?php 
if ( is_user_logged_in() ):

    global $current_user;
    wp_get_current_user(); ?>
    <?php
    $author_query = array('posts_per_page' => '-1','author' => $current_user->ID);
    $author_posts = new WP_Query($author_query);?>
    <div class='current-user-posts'>
        <?php while($author_posts->have_posts()) : $author_posts->the_post(); ?>
        <div class='blog-container'>
            <div class='blog-image'>
            <?php the_post_thumbnail('medium');?>
            </div>
            <div class='the-blog-post'>
            <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </h2>
            </div>
        </div>
        
        <?php 
            endwhile; 
            wp_reset_query();
        ?>
    
<?php endif; ?>