<?php
/**
 * Amar functions and definitions
 *
 * @package Amar
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'amar_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function amar_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Amar, use a find and replace
	 * to change 'amar' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'amar', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'amar-featured', 750, 410, true );
	add_image_size( 'tab-small', 60, 60 , true); // Small Thumbnail
	set_post_thumbnail_size( 150, 150 ); // 150 pixels wide by 150 pixels tall

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'amar' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'gallery', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'amar_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // amar_setup
add_action( 'after_setup_theme', 'amar_setup' );

/**
 * Register widget areas.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
if (!function_exists(amar_widgets_init)) {
	function amar_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Sidebar', 'amar' ),
			'description'	=> __('This is the regular, widgetized sidebar', 'amar'),
			'id'            => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
		register_sidebar( array(
			'name'          => __( 'Left Footer Box', 'amar' ),
			'description'	=> __('This is the left, widgetized footer box', 'amar'),
			'id'            => 'left-footer-box',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
		register_sidebar( array(
			'name'          => __( 'Center Footer Box', 'amar' ),
			'description'	=> __('This is the center, widgetized footer box', 'amar'),
			'id'            => 'center-footer-box',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
		register_sidebar( array(
			'name'          => __( 'Right Footer Box', 'amar' ),
			'description'	=> __('This is the right, widgetized footer box', 'amar'),
			'id'            => 'right-footer-box',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
	}

	add_action( 'widgets_init', 'amar_widgets_init' );
};

/**
 * Enqueue scripts and styles.
 */
function amar_scripts() {
	// Load jQuery
	wp_enqueue_script('jquery');

	// Load Boostrap CSS-JS
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.1', true);
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '3.3.1');

	// Load font awesome fonts
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', false, '4.2.0');

	// Load style.css
	wp_enqueue_style( 'amar-style', get_stylesheet_uri() );

	wp_enqueue_script( 'amar-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'amar-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	// Load Event Page CSS-JS
	//wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.min.js', array('jquery-easing'), '1.3', true);
	wp_enqueue_script('stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.js', array(), '1.0', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
	wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array(), '1.0.0', true);
	wp_enqueue_style('event-css', get_template_directory_uri() . '/assets/css/event-style.css', false);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'amar_scripts' );

// Hide Admin bar
add_filter('show_admin_bar', '__return_false');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Register Custom Navigation Walker
require get_template_directory() . '/inc/navwalker.php';
