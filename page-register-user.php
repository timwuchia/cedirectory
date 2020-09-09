<?php
/**
 * The template for displaying register user page
 *
 * @package cedirectory
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div id='primary' class='py-5 container registration-page'>
            <?php if(function_exists('get_field')) : ?>
            <?php 
                $registration_form_page_title = get_field('registration_form_page_title');
                $seller_content = get_field('seller_content');
                $buyer_content = get_field('buyer_content');
                $buyer_link = get_field('buyer_link');
                $seller_link = get_field('seller_link');
            ?>
                <?php
                if($registration_form_page_title){
                    echo '<h2 style=" width:
                    40%; text-align: center; border-bottom: 1px solid #9a9a9a; padding-bottom: 1em;  margin: auto; class="text-center mb-4 ">';
                    the_field('registration_form_page_title');
                    echo '</h2>';
                }
                ?>
            <div style="margin-top: 2em;" class='p-5 bg-light-gray '>
            
                <div class='row'>
                    <div class='col-md-6'>
                    <?php
                    if($seller_link) :
                        $seller_link_url = $seller_link['url'];
                        $seller_link_title = $seller_link['title'];
                        $seller_link_target = $seller_link['target'] ? $seller_link['target'] : '_self'; 
                    ?>
                    <p class='text-center reg-seller-btn'><a class="btn btn-primary text-center d-inline-block m-auto" href="<?php echo esc_url( $seller_link_url ); ?>" target="<?php echo esc_attr( $seller_link_target ); ?>"><?php echo esc_html( $seller_link_title ); ?></a></p>
                    <?php endif; ?>
                    <?php 
                    if($seller_content){
                        the_field('seller_content');
                    }
                    ?>
                    </div>
                    <div class='col-md-6'>
                    <?php
                    if($buyer_link) :
                        $buyer_link_url = $buyer_link['url'];
                        $buyer_link_title = $buyer_link['title'];
                        $buyer_link_target = $buyer_link['target'] ? $buyer_link['target'] : '_self'; 
                    ?>
                    <p class='text-center reg-buyer-btn'><a class="btn btn-secondary text-center" href="<?php echo esc_url( $buyer_link_url ); ?>" target="<?php echo esc_attr( $buyer_link_target ); ?>"><?php echo esc_html( $buyer_link_title ); ?></a></p>
                    <?php endif; ?>
                    <?php 
                    if($buyer_content){
                        the_field('buyer_content');
                    }
                    ?>
                    </div>
                    <p class='text-center'>Read our <a href="/privacy-policy">Privacy Policy</a></p>
                </div>
            </div>
            <?php endif; ?>
        </div>

<?php endwhile; endif; ?>

<?php
get_footer();