<?php
/**
 * The template for displaying account page
 *
 * @package cedirectory
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div id='primary'>
            <?php the_content(); ?>
        </div>

<?php endwhile; endif; ?>

<?php
get_footer();