<?php
/**
 * Cheeditha-energy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cheeditha-energy
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'cheeditha_energy_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cheeditha_energy_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Cheeditha-energy, use a find and replace
		 * to change 'cheeditha-energy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cheeditha-energy', get_template_directory() . '/languages' );

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
		$menus = array(
				'menu-top' => 'Menu Top',
				'menu-middle' => 'Menu Middle',
				'menu-bottom' => 'Menu Bottom'
			);
		register_nav_menus( $menus );

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
				'cheeditha_energy_custom_background_args',
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
	}
endif;
add_action( 'after_setup_theme', 'cheeditha_energy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cheeditha_energy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cheeditha_energy_content_width', 640 );
}
add_action( 'after_setup_theme', 'cheeditha_energy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cheeditha_energy_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cheeditha-energy' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cheeditha-energy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cheeditha_energy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function cheeditha_energy_scripts() {
	
	
	wp_deregister_script('jquery');
	wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, null);
	wp_enqueue_script('jquery');
	
	wp_enqueue_style( 'cheeditha-energy-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'cheeditha-energy-style', 'rtl', 'replace' );

	wp_enqueue_script( 'cheeditha-energy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'cheeditha-energy-functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cheeditha_energy_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/** Register custom post types */
require get_template_directory() . '/cpt/cpt-team.php';
require get_template_directory() . '/cpt/cpt-projects.php';
require get_template_directory() . '/cpt/cpt-partners.php';
require get_template_directory() . '/cpt/cpt-capabilities.php';
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
/** Add ID to list items in nav */
// $menu_counter = 0;
// add_filter('nav_menu_item_id','change_nav_menu_id',10,2);

// function change_nav_menu_id($current_id,$item_details){
// global $menu_counter;
// return $item_details->post_name;
// }

add_filter( 'nav_menu_link_attributes', 'add_data_atts_to_nav', 10, 4 );
    function add_data_atts_to_nav( $atts, $item, $args ) {
    $atts['data-page'] = strtolower(str_replace("#","",$item->url));
    return $atts;
}