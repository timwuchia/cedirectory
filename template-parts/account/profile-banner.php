<?php

// global $current_user;
$current_user_id = get_current_user_id();
$current_user_acf_params = 'user_' . $current_user_id;

if(function_exists('get_field')){
    $profile_banner = get_field('profile_banner', $current_user_acf_params);
    $profile_image = get_field('profile_image', $current_user_acf_params);
    if($profile_banner){
        echo wp_get_attachment_image($profile_banner, 'profile-banner');
    };
     
	if($profile_image){
        echo wp_get_attachment_image($profile_image, 'custom-logo');
    };
       echo '<div class="profile-welcome">';
       echo '<h2> Welcome </h2>';
       echo '</div>';
}   
