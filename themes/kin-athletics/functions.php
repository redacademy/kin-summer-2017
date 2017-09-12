<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kin_Athletics_Theme
 */

if ( ! function_exists( 'kin_athletics_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function kin_athletics_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // kin_athletics_setup
add_action( 'after_setup_theme', 'kin_athletics_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function kin_athletics_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kin_athletics_content_width', 640 );
}
add_action( 'after_setup_theme', 'kin_athletics_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kin_athletics_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'kin_athletics_widgets_init' );

function kin_athletics_widgets_init2() {
	register_sidebar( array(
		'name'          => esc_html( 'Kin Athletics' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'kin_athletics_widgets_init2' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function kin_athletics_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'kin_athletics_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function kin_athletics_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '4.6.3');

	wp_enqueue_script('jquery');	

	wp_enqueue_script( 'Flickity PACKAGED', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.js', array(), '2.0.9');

	wp_enqueue_script( 'Flickity', get_template_directory_uri() . '/build/js/flickity.js', array(), '20130115', true );	

	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/build/js/smooth-scroll.js', array(), '20130115', true );	

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kin_athletics_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );