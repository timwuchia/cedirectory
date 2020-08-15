<?php
/**
 * The template for registration page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hip Creations
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
        
            <div class='container pb-5'>
            <div class='site-breadcrumb py-4'>
            <?php
                echo do_shortcode( '[wpseo_breadcrumb]');
            ?>
            </div>
			<?php
            $directory_image = get_field('directory_image', 'options');
            $directory_link = get_field('directory_link', 'options');
            if($directory_link){
                $directory_link_url = $directory_link['url'];
                $directory_link_title = $directory_link['title'];
                $directory_link_target = $directory_link['target'] ? $directory_link['target'] : '_self';
            }
            $industry_image = get_field('industry_image', 'options');
            $industry_link = get_field('industry_link', 'options');
            if($industry_link){
                $industry_link_url = $industry_link['url'];
                $industry_link_title = $industry_link['title'];
                $industry_link_target = $industry_link['target'] ? $industry_link['target'] : '_self';
            }
            ?>
                <div class='row'>
                    <?php if($directory_link) : ?>
                        <a class="d-block col-md-6" href="<?php echo esc_url( $directory_link_url ); ?>" target="<?php echo esc_attr( $directory_link_target ); ?>">
                        <?php echo wp_get_attachment_image($directory_image['ID'], 'general-large'); ?>
                        <h3 class='mt-3 text-center'><?php echo esc_html( $directory_link_title ); ?></h3>
                        </a>
                    <?php endif; ?>
                    <?php if($industry_link) : ?>
                        <a class="d-block col-md-6" href="<?php echo esc_url( $industry_link_url ); ?>" target="<?php echo esc_attr( $industry_link_target ); ?>">
                        <?php echo wp_get_attachment_image($industry_image['ID'], 'general-large'); ?>
                        <h3 class='mt-3 text-center'><?php echo esc_html( $industry_link_title ); ?></h3>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
