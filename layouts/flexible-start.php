<?php 
    $general_settings = get_sub_field("general_settings");
    $container = $general_settings["container"];
    $background_color = $general_settings["background_color"];
    $padding_top = $general_settings["padding_top"];
    $padding_bottom = $general_settings["padding_bottom"];
    $margin_top = $general_settings["margin_top"];
    $margin_bottom = $general_settings["margin_bottom"];
    $custom_id = $general_settings["custom_id"];
    $custom_classes =  $general_settings["custom_classes"];

    if($padding_top){
        $pt_val = $padding_top['value'];
    } 
    if($padding_bottom){
        $pb_val = $padding_bottom['value'];
    } 
    if($margin_top){
        $mt_val = $margin_top['value'];
    }
    if($margin_bottom){
        $mb_val = $margin_bottom['value'];
    }
    print_r($padding_top);
?>
<section 
<?php  if($custom_id) : ?>id="<?php echo $custom_id?>"<?php endif; ?>
       class="hc-section flexible-content-start <?php if($background_color) : ?>bg-<?php echo $background_color['value']; ?> <?php endif; ?><?php echo $custom_classes . " " . $pt_val . " " .  $pb_val ?> <?php echo $mt_val . " " . $mb_val; ?>"> <!-- end of section -->
       <div class="<?php echo $container['value']; ?>">