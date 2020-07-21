<?php 
	$image = get_sub_field("image");
	$video = get_sub_field("video");
?>
<?php if (get_sub_field("image")): ?>
	<img src="<?php echo $image['url']; ?>">
<?php endif ?>
<?php if (get_sub_field("video")): ?>
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

$video = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $video);

echo $video;

?>
<?php endif ?>
<?php if(have_rows("single_image_slider")): ?>
    <div class="single-image-slider-wrapper">
        <?php while(have_rows("single_image_slider")): the_row(); ?>
        <?php 
            $image = get_sub_field("image");
            $link = get_sub_field("link");
            $link_url = $link['url'];
	        $link_title = $link['title'];
	        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <?php if($link): ?>
        <a class="slide-image" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </a>
        <?php else: ?>
        <div class="slide-image">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <?php endif; ?>
        <?php endwhile;?>
    </div>
<?php endif;?>