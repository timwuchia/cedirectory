<?php
/**
 * The template for displaying archive product page pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cedirectory
 */

get_header();
?>

	<main id="primary" class="site-main">
	<?php
	$directive    = 'directive';
	$orderby      = 'name';  
	$show_count   = 0;      // 1 for yes, 0 for no
	$pad_counts   = 0;      // 1 for yes, 0 for no
	$hierarchical = 1;      // 1 for yes, 0 for no  
	$title        = '';  
	$empty        = 0;

	$directive_args = array(
		'taxonomy'     => $directive,
		'orderby'      => $orderby,
		'show_count'   => $show_count,
		'pad_counts'   => $pad_counts,
		'hierarchical' => $hierarchical,
		'title_li'     => $title,
		'hide_empty'   => $empty
	);
	$directories = get_categories( $directive_args );
	?>

		<!-- Directories -->
            <div class='categories-title'>
            <h2> Directives </h2>
            </div>
            <div class='product-categories d-flex flex-wrap'>
                <?php foreach ($directories as $cat) : ?>
                    <div class='product-category col-12 col-md-6 col-lg-4'>
                        <?php
                            $category_id = $cat->term_id;
                            $thumbnail_id = get_term_meta( $category_id, 'thumbnail_id', true );
                            $image = get_field("product_category_featured_image", 'directive_' . $category_id);
                            $excerpt = get_field('product_category_excerpt', 'directive_' . $category_id); 
                        ?>
                        <?php if($image) : ?>
                            <a href="<?php echo get_term_link($cat->slug, 'directive'); ?>" class='product-category-image mb-3'>
                                <?php
                                    echo wp_get_attachment_image( $image['id'], 'medium' );
                                ?>
                            </a>
                        <?php endif; //end of if image?>
                        <div class="product-category-name">
                        <h3><a href="<?php echo get_term_link($cat->slug, 'directive'); ?>"><?php echo $cat->name; ?></a></h3>
                        </div>
                        <div class='product-description'><?php echo $excerpt; ?></div>
                    </div>
                <?php endforeach;  //end of foreach($all_categories as $cat)?>
            </div>
	</main><!-- #main -->

<?php
get_footer();
