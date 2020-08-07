<?php
/**
 * The template for displaying contact page.
 *
 * @package Hip_Creations
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class='py-5 container'>
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
                <div class='contact-box-right col-md-4 bg-dark-gray p-4'>

                </div>
            </div>
        </div>

<?php endwhile; endif; ?>

<?php
get_footer();