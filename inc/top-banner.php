<?php if(have_rows('top_banner')) : ?>
    <div class='top-banner'>
        <?php while(have_rows('top_banner')) : the_row(); ?>
        <?php 
            $image = get_sub_field('image');
            $content = get_sub_field('content');
        ?>
            <div class='top-banner__inner'>
                <div class='image'>
                    <?php echo wp_get_attachment_image($image['id'], 'banner'); ?>
                </div>
                <div class='content'>
                    <div class='container'>
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>