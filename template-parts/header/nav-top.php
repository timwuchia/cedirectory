<div class='nav-top bg-secondary px-3 py-2 px-lg-0 py-lg-0 pt-lg-3 d-flex justify-content-end'>
        <div class='nav-top-wrapper d-flex justify-content-end'>
            <?php 
                $phone = get_field('ce_phone', 'options');
                if($phone) :
            ?>
            
            <a class='header-phone' href="tel:<?php echo $phone; ?>"><span class='d-none d-md-inline-block'>Call Us: </span><?php echo $phone; ?></a>
            <?php endif;?>
            <?php if(have_rows('ce_social_media', 'options')) : ?>
            
            <div class='header-social-media'>
                <span class='d-none d-md-inline-block'>Follow Us: </span>
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