<?php 
    $general_settings = get_sub_field("general_settings");
    $container = $general_settings["container"];
    $background_image = $general_settings["background_image"];
    $background_color = $general_settings["background_color"];
    $padding_top = $general_settings["padding_top"];
    $padding_bottom = $general_settings["padding_bottom"];
    $padding_left = $general_settings["padding_left"];
    $padding_right = $general_settings["padding_right"];
    $margin_top = $general_settings["margin_top"];
    $margin_bottom = $general_settings["margin_bottom"];
    $margin_left = $general_settings["margin_left"];
    $margin_right = $general_settings["margin_right"];
    $custom_id = $general_settings["custom_id"];
    $custom_classes =  $general_settings["custom_classes"];

    if($padding_top){
        $pt_val = $padding_top['value'];
    } 
    if($padding_bottom){
        $pb_val = $padding_bottom['value'];
    } 
    if($padding_left){
        $pl_val = $padding_left['value'];
    } 
    if($padding_right){
        $pr_val = $padding_right['value'];
    } 
    if($margin_top){
        $mt_val = $margin_top['value'];
    }
    if($margin_bottom){
        $mb_val = $margin_bottom['value'];
    }
    if($margin_left){
        $ml_val = $margin_left['value'];
    }
    if($margin_right){
        $mr_val = $margin_right['value'];
    }
?>
<section 
<?php  if($custom_id) : ?>id="<?php echo $custom_id?>"<?php endif; ?>
       <?php if($background_image) :?> style="background-image:url('<?php echo $background_image["url"]; ?>')"<?php endif;?>
       class="hc-section flexible-content-start <?php if($background_color) : ?>bg-<?php echo $background_color['value']; ?> <?php endif; ?><?php echo $custom_classes . " " . $pt_val . " " . $pb_val . " " . $pl_val . " " .  $pr_val ?> <?php echo $mt_val . " " . $mb_val . " " . $ml_val . " " . $mr_val; ?>"> <!-- end of section -->
       <div class="<?php echo $container['value']; ?>">