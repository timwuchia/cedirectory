<?php
/**
 * cedirectory functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cedirectory
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'cedirectory_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cedirectory_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cedirectory, use a find and replace
		 * to change 'cedirectory' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cedirectory', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'cedirectory' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'cedirectory_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

			add_theme_support(
			'profile-banner',
			array(
				'height'      => 250,
				'width'       => 900,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);


	}
endif;
add_action( 'after_setup_theme', 'cedirectory_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cedirectory_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cedirectory_content_width', 640 );
}
add_action( 'after_setup_theme', 'cedirectory_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cedirectory_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cedirectory' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cedirectory' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cedirectory_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cedirectory_scripts() {
	wp_enqueue_style( 'cedirectory-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'cedirectory-style', 'rtl', 'replace' );

	wp_enqueue_script( 'cedirectory-slick', get_template_directory_uri() . '/src/js/slick.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'cedirectory-custom-script', get_template_directory_uri() . '/src/js/custom.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'cedirectory-bootstrapjs', get_template_directory_uri() . '/src/js/bootstrap.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cedirectory_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//register menus
function register_my_menus() {
	register_nav_menus(
		array(
			'footer-nav' => __( 'Footer Menu' ),
			'user-nav' => __( 'User Menu' ),
			'footer-nav' => __( 'Footer Menu' ),
			'company-nav' => __( 'Company Menu' ),
		)
	);
}
add_action( 'init', 'register_my_menus' );

// add options page
if( function_exists('acf_add_options_page') ) {
	
	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Company Info',
			'menu_title'	=> 'Company Info',
			'menu_slug' 	=> 'company-info',
			'position'		=> 10,
			'capability'	=> 'edit_posts',
			'icon_url'      => 'dashicons-megaphone',
		));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'About Nathan',
	// 	'menu_title'	=> 'About Nathan',
	// 	'menu_slug' 	=> 'about-nathan',
	// 	'capability'	=> 'edit_posts',
	// 	'parent_slug'	=> 'general-options',
	// 	'position'      => false
	// ));
	}
}

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// adding menu items to the account page menu
if( current_user_can( 'seller' ) || current_user_can('administrator') ) {
	add_filter( 'wpuf_account_sections', 'wpuf_account_products' );

	function wpuf_account_products( $sections ) {
		$sections = array_merge( $sections, array( array( 'slug' => 'products', 'label' => ' Products' ) ) );
		
		return $sections;
	}
		
	add_action( 'wpuf_account_content_products', 'wpuf_account_porducts_section', 1, 2 );
		
	function wpuf_account_porducts_section( $sections, $current_section ) {
	wpuf_load_template(
		'dashboard/products.php',
		array( 'sections' => $sections, 'current_section' => $current_section )
	);
	}
}

// array of filters (field key => field name)
$GLOBALS['my_query_filters'] = array( 
	'country'	=> 'country', 
);

//function to modify default WordPress query
// Hook our custom query function to the pre_get_posts 
add_action( 'pre_get_posts', 'ce_custom_query', 10, 1 );
function ce_custom_query( $query ) {
   
	if( $query->is_main_query() && ! is_admin() && $query->is_tax()) {
		if (isset($_GET['orderby'])){
			$orderby = $_GET['orderby'];
			$query->set( 'orderby', $orderby );
		}
		if (isset($_GET['sortby'])){
			$sortby = $_GET['sortby'];
			$query->set( 'sortby', $sortby );
		}
		// get meta query
	$meta_query = $query->get('meta_query');
	if(isset($_GET['country'])){
		$country = explode(',', $_GET[ 'country' ]);
		print_r($country[0]);
		$meta_query = array(
			array(
				'key'		=> 'country',
				'value'		=> $_GET['country'],
				'compare'	=> 'LIKE',
			),
		);
	}	
	
	// update meta query
	$query->set('meta_query',$meta_query);
	
	}
	return;
}
	
