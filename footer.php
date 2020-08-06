<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cedirectory
 */

?>

	<footer id="colophon" class="site-footer">
		<div class='footer-main bg-primary pt-4'>
			<div class='container'>
				<div class='row'>
					<div class='footer-column mb-3 col-md-4 col-xl-2'>
						<h3 class='text-secondary'>Navigate</h3>
						<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'footer-nav',
								)
							);
						?>
					</div>
					<div class='footer-column mb-3 col-md-4 col-xl-2'>
						<h3 class='text-secondary'>Company</h3>
						<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'company-nav',
								)
							);
						?>
					</div>
					<div class='footer-column mb-3 col-md-4 col-xl-2'>
						<h3 class='text-secondary'>Support</h3>
						<div class='d-flex'>
							<?php if(get_field('ce_phone', 'options')) :?>
								<a class='mr-2' href="tel: <?php echo get_field('ce_phone', 'options'); ?>"><i class="fas fa-phone-square"></i></a>
							<?php endif; ?>
							<?php if(get_field('ce_email', 'options')) :?>
								<a href="mailto: <?php echo get_field('ce_email', 'options'); ?>"><i class="fas fa-envelope-square"></i></i></a>
							<?php endif; ?>
						</div>
					</div>
					<div class='footer-column mb-3 col-md-4 col-xl-2'>
						<h3 class='text-secondary'>Follow Us</h3>
						<?php if(have_rows('ce_social_media', 'options')) : ?>
							<div class='footer-social-media'>
								<?php while(have_rows('ce_social_media', 'options')) : the_row(); ?>
								<?php
									$link = get_sub_field('link','options');
									$icon = get_sub_field('icon','options');
								?>
								<a href='<?php echo $link; ?>' target='_blank'><?php echo $icon; ?></a>
								<?php endwhile;?>
							</div>
						<?php endif;?>
					</div>
					<div class='footer-column col-md-4 col-xl-4'>
						<h3 class='text-secondary'>Newsletter</h3>
					</div>
				</div>
			</div>
		</div>
		<div class='footer-creds bg-primary px-3 p-2'>
			<p class='text-white' style= 'font-size: 8px; right: 0; display: flex; flex-direction: row-reverse; ' >Web Design By Nessie and Tim</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
