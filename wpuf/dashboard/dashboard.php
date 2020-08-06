<?php if( current_user_can('seller') || current_user_can('administrator') ) {  ?>
    <?php echo do_shortcode('[wpuf_profile type="profile" id="19"]'); ?>
<?php } ?>
<?php if( current_user_can('buyer')) {  ?>
    <?php echo do_shortcode('[wpuf_profile type="profile" id="170"]'); ?>
<?php } ?>
