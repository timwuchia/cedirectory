<div class='nav-top bg-secondary px-3 py-2'>
    <div class='nav-top-content'>
        <div class='nav-top-wrapper d-flex  justify-content-end'>
            <?php 
                $phone = get_field('ce_phone', 'options');
                if($phone) :
            ?>
            
            <a class='mr-3' href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
            <?php endif;?>
            <?php if(have_rows('ce_social_media', 'options')) : ?>
            <div class='header-social-media'>
                <?php while(have_rows('ce_social_media', 'options')) : the_row(); ?>
                <?php
                    $link = get_sub_field('link','options');
                    $icon = get_sub_field('icon','options');
                ?>
                <a href='<?php echo $link; ?>' target='_blank'><?php echo $icon; ?></a>
                <?php endwhile;?>
            </div>
                
            <?php endif;?>
        </div>
    </div>
</div>