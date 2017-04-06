<?php
/**
 * EX17 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EX17
 */

if ( ! function_exists( 'ex17_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ex17_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on EX17, use a find and replace
	 * to change 'ex17' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ex17', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'ex17' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	/**
	 * Avoid WordPress' JPEG quality reduction
	 */

	function gpp_jpeg_quality_callback()
	{
	return (int)100;
	}
	add_filter('jpeg_quality', 'gpp_jpeg_quality_callback');

	/**
	 * Remove emojis
	 */

	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	/**
	 * Remove comment support (+ "post" link in admin menu)
	 */

	 // Removes from admin menu
	 add_action( 'admin_menu', 'my_remove_admin_menus' );
	 function my_remove_admin_menus() {
	     remove_menu_page( 'edit-comments.php' );
			  remove_menu_page( 'edit.php' );
	 }
	 // Removes from post and pages
	 add_action('init', 'remove_comment_support', 100);

	 function remove_comment_support() {
	     remove_post_type_support( 'post', 'comments' );
	     remove_post_type_support( 'page', 'comments' );
	 }
	 // Removes from admin bar
	 function mytheme_admin_bar_render() {
	     global $wp_admin_bar;
	     $wp_admin_bar->remove_menu('comments');
	 }
	 add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );


	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ex17_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'ex17_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ex17_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ex17_content_width', 640 );
}
add_action( 'after_setup_theme', 'ex17_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ex17_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ex17' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ex17' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ex17_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ex17_scripts() {
	wp_enqueue_style( 'ex17-style', get_stylesheet_uri() );
	wp_enqueue_style( 'google-fonts', '', array() );

	wp_enqueue_script( 'ex17-jquery', get_template_directory_uri() . '/js/jquery-3.2.0.min.js', array(), '20170208' );
	wp_enqueue_script( 'ex17-buttons', get_template_directory_uri() . '/js/button.js', array(), '20170208' );
	wp_enqueue_script( 'ex17-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215' );
	wp_enqueue_script( 'ex17-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215' );


	if ( is_page( 'Examensklassen' ) ) {
		wp_enqueue_script( 'ex17-modernizr-custom', get_template_directory_uri() . '/js/graduates/modernizr.custom.js', array(), '20160226' );
		wp_enqueue_script( 'ex17-expanding', get_template_directory_uri() . '/js/graduates/expanding.js', array(), '20160226' );
	 }

	/* Jquery */
	/*if( !is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"), false, '2.1.4', false);
		wp_enqueue_script('jquery');
	}*/


}
add_action( 'wp_enqueue_scripts', 'ex17_scripts' );

/**
*CUSTOM TYPE POSTS
**/

function custom_post_type() {
	register_post_type( 'sponsorer', array(
		'labels'        => array('name' => __( 'Sponsorer', 'ex17' ), 'singular_name' => __( 'Sponsor', 'ex17' ) ),
		'description'   => 'Holds the information about EX17s sponors.',
		'public'        => true,
		'menu_position' => 6,
		'supports'      => array( 'title', 'thumbnail' ),
		'has_archive'   => false
	)
	);

	register_post_type( 'examensklassen', array(
		'labels'        => array('name' => __( 'Examensklassen', 'ex17'  ), 'singular_name' => __( 'Examensperson', 'ex17'  ) ),
		'description'   => 'Holds the information about EX17s graduate students.',
		'public'        => true,
		'menu_position' => 4,
		'supports'      => array( 'title', 'editor' ),
		'has_archive'   => false,
		'taxonomies' 		=> array('category')
	)
	);
	register_post_type( 'projektgruppen', array(
		'labels'        => array('name' => __( 'Projektgruppen', 'ex17'  ), 'singular_name' => __( 'Projektgrupp', 'ex17'  ) ),
		'description'   => 'Holds the information about EX17s project groups.',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor' ),
		'has_archive'   => false,
		'taxonomies' 		=> array('group_category')
	)
	);

	register_post_type( 'forelasare', array(
		'labels'        => array('name' => __( 'Föreläsare', 'ex17'  ), 'singular_name' => __( 'Föreläsare', 'ex17'  ) ),
		'description'   => 'Holds the information about EX17 lectures.',
		'public'        => true,
		'menu_position' => 7,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'has_archive'   => false
	)
	);
	register_post_type( 'utstallning', array(
		'labels'        => array(
										'name' 					=> __( 'Utställning', 'ex17'  ),
										'singular_name' => __( 'Utställningsalster', 'ex17'  ),
										'add_new' => __( 'Nytt alster', 'ex16'  ),
										'add_new_item' => __( 'Lägg till nytt utställningsalster', 'ex17'  )
									),
		'description'   => 'Holds the information about EX17 digital works.',
		'public'        => true,
		'menu_position' => 8,
		'supports'      => array( 'title', 'editor',  'custom-fields' ),
		'has_archive'   => true,
		'taxonomies' 		=> array('utstallning_category')
	)
	);
}
add_action( 'init', 'custom_post_type');

function taxonomies_utstallning() {
  $labels = array(
    'name'              => _x( 'Kategorier', 'taxonomy general name' ),
    'singular_name'     => _x( 'Kategori', 'taxonomy singular name' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'utstallning_category', 'exhibition', $args );
}
add_action( 'init', 'taxonomies_utstallning', 0 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
