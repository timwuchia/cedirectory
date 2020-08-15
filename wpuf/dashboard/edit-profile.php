<?php if( current_user_can('seller') || current_user_can('administrator') ) {  ?>
    <?php echo do_shortcode('[wpuf_profile type="profile" id="19"]'); ?>
<?php } ?>
<?php if( current_user_can('buyer')) {  ?>
    <?php echo do_shortcode('[wpuf_profile type="profile" id="170"]'); ?>
<?php } ?>

<p><?php
    global $current_user;

    printf(
        wp_kses_post( __( 'Hello %1$s, (not %1$s? <a href="%2$s">Sign out</a>)', 'wp-user-frontend' ) ),
        '<strong>' . esc_html( $current_user->display_name ) . '</strong>',
        esc_url( wp_logout_url( get_permalink() ) )
     );
?></p>