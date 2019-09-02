<?php
/**
 * make_future_it functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package make_future_it
 */

if ( ! function_exists( 'make_future_it_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function make_future_it_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on make_future_it, use a find and replace
		 * to change 'make_future_it' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'make_future_it', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'make_future_it' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'make_future_it_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'make_future_it_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function make_future_it_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'make_future_it_content_width', 640 );
}
add_action( 'after_setup_theme', 'make_future_it_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function make_future_it_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'make_future_it' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'make_future_it' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'make_future_it_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function make_future_it_scripts() {
	wp_enqueue_style( 'make_future_it-style', get_stylesheet_uri() );

	wp_enqueue_style( 'make_future_it-style8', 'https://fonts.googleapis.com/css?family=Sarabun:400,500,600,700|Rubik:300,400,500' );

	wp_enqueue_style( 'make_future_it-style1', get_template_directory_uri() .'/css/bootstrap.min.css' );

	wp_enqueue_style( 'make_future_it-style2', get_template_directory_uri() .'/css/magnific-popup.css' );

	wp_enqueue_style( 'make_future_it-style3', get_template_directory_uri() .'/css/materialdesignicons.min.css' );

	wp_enqueue_style( 'make_future_it-style4', get_template_directory_uri() .'/css/pe-icon-7-stroke.css' );

	wp_enqueue_style( 'make_future_it-style5', get_template_directory_uri() .'/css/red.css' );

	wp_enqueue_style( 'make_future_it-style6', get_template_directory_uri() .'/css/style.css' );

	wp_enqueue_style( 'make_future_it-style7', get_template_directory_uri() .'/css/waves.css' );

	wp_enqueue_script( 'make_future_it-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'make_future_it-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'make_future_it-js5', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );

	wp_enqueue_script( 'make_future_it-js2', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '20151215', true );

	wp_enqueue_script( 'make_future_it-js3', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), '20151215', true );

	wp_enqueue_script( 'make_future_it-js7', get_template_directory_uri() . '/js/scrollspy.min.js', array(), '20151215', true );

	wp_enqueue_script( 'make_future_it-js6', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '20151215', true );

	wp_enqueue_script( 'make_future_it-js9', get_template_directory_uri() . '/js/waves.js', array(), '20151215', true );

	wp_enqueue_script( 'make_future_it-js4', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '20151215', true );

	wp_enqueue_script( 'make_future_it-js8', get_template_directory_uri() . '/js/switcher.js', array(), '20151215', true );

	wp_enqueue_script( 'make_future_it-js1', get_template_directory_uri() . '/js/app.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'make_future_it_scripts' );

function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function new_excerpt_more( $more ) {

    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

remove_filter('the_excerpt', 'wpautop');

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

