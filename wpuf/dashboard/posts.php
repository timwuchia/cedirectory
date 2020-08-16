<?php 
if ( is_user_logged_in() ):

    global $current_user;
    wp_get_current_user(); ?>
    <?php
    $author_query = array('posts_per_page' => '-1','author' => $current_user->ID);
    $author_posts = new WP_Query($author_query);?>
    <div class='current-user-posts d-flex flex-wrap'>
        <?php while($author_posts->have_posts()) : $author_posts->the_post(); ?>
        <div class='post post-container col-12 col-md-6 col-lg-4'>
            <?php the_post_thumbnail('medium');?>
            <div class='post-title'>
            <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </h2>
            </div>
        </div>
        <?php 
            endwhile; 
            wp_reset_query();
        ?>
    </div>
    <?php 
    $add_blog_link = get_field('add_blog_link');
    if( $add_blog_link ): 
        $add_blog_link_url = $add_blog_link['url'];
        $add_blog_link_title = $add_blog_link['title'];
        $add_blog_link_target = $add_blog_link['target'] ? $add_blog_link['target'] : '_self';
        ?>
        <p><a class="btn btn-primary" href="<?php echo esc_url( $add_blog_link_url ); ?>" target="<?php echo esc_attr( $add_blog_link_target ); ?>"><?php echo esc_html( $add_blog_link_title ); ?></a>
    <?php endif; ?></p>
<?php endif; ?>