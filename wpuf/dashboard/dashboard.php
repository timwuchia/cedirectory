<div class='account-info'>
<?php 
    global $current_user;
    wp_get_current_user();
?>
<div class='user-overview'>
    <p><span class='font-weight-bold'>Username:</span> <?php echo $current_user->user_login; ?></p>
    <p><span class='font-weight-bold'>Display Name:</span> <?php echo $current_user->display_name; ?></p>
    <p><span class='font-weight-bold'>Email:</span> <?php echo $current_user->user_email; ?></p>
    <p><span class='font-weight-bold'>Website:</span> <?php echo $current_user->user_url; ?></p>
</div>
</div>

