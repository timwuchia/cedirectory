<?php  
    get_template_part('layouts/flexible-start');
?>

<?php 
    $selected_field = get_sub_field("select_field");
    $text = get_sub_field("text");
    $image = get_sub_field("image");
    $video = get_sub_field("video");
    $selected_field_2 = get_sub_field("select_field_2");
    $text_2 = get_sub_field("text_2");
    $image_2 = get_sub_field("image_2");
    $video_2 = get_sub_field("video_2");
?>

<div class="two-column-flexible-layout d-flex flex-wrap">
    <div class="column-1 col-md-6 <?php if($selected_field=="Text" && $text){echo 'order-2';} ?>">
        <?php if($selected_field=="Text" && $text): ?>
            <div class="2-col-text"><?php echo $text; ?></div>
        <?php endif; ?>
        <?php if($selected_field=="Image" && $image): ?>
            <div class="2-col-image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
        <?php endif; ?>
        <?php if ($selected_field=="Video" && $video): ?>
            <?php
            preg_match('/src="(.+?)"/', $video, $matches);
            $src = $matches[1];
            $params = array(
                'controls'    => 0,
                'hd'        => 1,
                'autohide'    => 1
            );
            $new_src = add_query_arg($params, $src);
            $video = str_replace($src, $new_src, $video);
            $attributes = 'frameborder="0"';
            $video = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $video);?>
            <div class="2-col-video"><?php echo $video; ?></div>
        <?php endif ?>
    </div>
    <div class="column-2 col-md-6 <?php if($selected_field_2=="Text"){echo'order-2';} ?>">
        <?php if($selected_field_2=="Text" && $text_2): ?>
            <div class="2-col-text"><?php echo $text_2; ?></div>
        <?php endif; ?>
        <?php if($selected_field_2=="Image" && $image_2): ?>
            <div class="2-col-image"><img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>"></div>
        <?php endif; ?>
        <?php if ($selected_field_2=="Video" && $video_2): ?>
            <?php
            preg_match('/src="(.+?)"/', $video_2, $matches);
            $src = $matches[1];
            $params = array(
                'controls'    => 0,
                'hd'        => 1,
                'autohide'    => 1
            );
            $new_src = add_query_arg($params, $src);
            $video_2 = str_replace($src, $new_src, $video_2);
            $attributes = 'frameborder="0"';
            $video_2 = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $video_2);?>
            <div class="2-col-video"><?php echo $video_2; ?></div>
        <?php endif ?>
    </div>
</div>

<?php 
    get_template_part('layouts/flexible-end');
?>