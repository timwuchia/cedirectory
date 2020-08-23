<div id='footer-above' class='footer-above'>
    <div class='bg-secondary text-white py-4'>
        <div class='container'>
            <?php
                $content = get_field('footer_cta_message', 'options');
            ?>
            <div class='row justify-content-center align-items-center'>
                <div class='col-md-8 pr-3'><?php echo $content; ?></div>
                <?php if(have_rows('footer_cta_buttons', 'options')) : ?>
                    <div class='footer-above-ctas d-flex'>
                    <?php if(!is_user_logged_in()) : ?>
                        <a class="btn btn-primary" href="/register-user">Register</a>
                    <?php endif; ?>
                    <?php while(have_rows('footer_cta_buttons', 'options')) : the_row(); ?>
                        <?php 
                        $link = get_sub_field('link', 'options');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class='bg-dark-gray py-3'></div>
</div>