<?php
/**
 * The template for displaying contact page.
 *
 * @package Hip_Creations
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class='py-5 container contact-container'>
            <h1>Inquire</h1>
            <div class='contact-box row'>
                
                <div class='contact-box-left col-md-8 bg-light-gray p-4'>
                <?php if(function_exists('get_field')) : ?>
                <?php 
                if(get_field('contact_form')){
                    echo do_shortcode(get_field('contact_form'));
                }    
                ?>
                <?php endif; ?>
                </div>
                <div class='contact-box-right contact-information-wrapper col-md-4 bg-dark-gray p-4'>
                    <div class='the-contact-info'>
                    <h1 class='text-primary'>CE Directory</h1>
                    <?php 
                    if(get_field('ce_address', 'options')){
                        echo '<p>';
                        the_field('ce_address', 'options');
                        echo '</p>';
                    }
                    if(get_field('ce_phone', 'options')){
                        echo '<p><a href="tel:';
                        the_field('ce_phone', 'options');
                        echo '">';
                        the_field('ce_phone', 'options');
                        echo '</a></p>';
                    }
                    if(get_field('ce_email', 'options')){
                        echo '<p><a href="mailto:';
                        the_field('ce_email', 'options');
                        echo '">';
                        the_field('ce_email', 'options');
                        echo '</a></p>';
                    }
                    ?>
                    <?php if(have_rows('ce_social_media', 'options')) : ?>
            
                    <div class='social-media'>
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
        </div>

<?php endwhile; endif; ?>

<?php
get_footer();