<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cedirectory
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cedirectory' ); ?></a>

	<header id="masthead" class="site-header">

		<div class='main-nav-wrapper bg-primary px-3'>
			<nav id="site-navigation" class="navbar navbar-expand-lg px-0">

				<?php if(get_field('ce_logo', 'options')) :?>
					<a class='navbar-brand' href="/"><? echo wp_get_attachment_image(get_field('ce_logo', 'options')['id'], 'full')?></a>
				<?php endif;?>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars"></i>
				</button>
				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'menu-1',
							'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav mr-auto',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						)
					);
				?>
				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'user-nav',
							'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav mr-auto ml-lg-auto mr-lg-0',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						)
					);
				?>
			</nav><!-- #site-navigation -->
		</div>
		<div class='nav-bar-bottom d-none d-lg-block bg-secondary py-4'>

		</div>
	</header><!-- #masthead -->
