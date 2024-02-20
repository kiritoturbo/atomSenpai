<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
 // Đăng ký CSS & JS
function custom_theme_styles() {
    wp_enqueue_style('custom-style-1', get_template_directory_uri() . '/assets/css/asset.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-style-2', get_template_directory_uri() . '/assets/css/asset-sm.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-style-3', get_template_directory_uri() . '/assets/css/animation.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-style-4', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-style-5', get_template_directory_uri() . '/assets/css/style-sm.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-style-6', get_template_directory_uri() . '/assets/css/cms.css', array(), '1.0', 'all');
	//js
	wp_enqueue_script('custom-script-1', get_template_directory_uri() . '/js/loadelement.js', array('jquery'), '1.0', true);
	wp_enqueue_script('custom-script-2', get_template_directory_uri() . '/js/animation.js', array('jquery'), '1.0', true);
	wp_enqueue_script('custom-script-3', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);

}
add_action('wp_enqueue_scripts', 'custom_theme_styles');
//import js admin 
function enqueue_custom_admin_scripts() {
    wp_enqueue_script('custom-admin', get_template_directory_uri() . '/js/custom-admin.js', array('jquery'), '1.0', true);
}
add_action('admin_enqueue_scripts', 'enqueue_custom_admin_scripts');

//menu
// Thêm filter hook để tùy chỉnh class cho thẻ li trong menu
function custom_nav_menu_css_class($classes, $item, $args, $depth) {
    if ($args->theme_location === 'menu-1') {
        $classes[] = 'nav-item';
        $classes[] = 'nav-home-sm';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 4);
//end menu 

// Hàm tùy chỉnh trả về một mã màu ngẫu nhiên
function get_random_color() {
    $colors = array('1e73be', 'ec636f', 'dd8282', '4ec2e5', '91d660', 'ea6c35', '64dbd1', '29a6dd', 'dd9933', '984de2');
    return $colors[array_rand($colors)];
}

//thêm class cho thẻ body 
function custom_body_class($classes) {
    // Kiểm tra nếu đang ở trang nào đó và thêm class tương ứng
    if (is_page('hakuju')) {
        $classes[] = 'page-hakuju';
    } elseif (is_page('izumi')) {
        $classes[] = 'page-izumi';
    } elseif (is_page('matsuyama')) {
        $classes[] = 'page-matsu';
    }
    elseif (is_page('junpuu')) {
        $classes[] = 'page-junpuu';
    }
    return $classes;
}
add_filter('body_class', 'custom_body_class');

//tạo term
$term = term_exists('in-progress', 'category');

// Nếu term chưa tồn tại, thì tạo mới
if ($term === 0 || $term === null) {
    $term_data = array(
        'slug' => 'in-progress', 
        'description' => 'Term for in-progress category', 
    );
    $term_result = wp_insert_term('in-progress', 'category', $term_data);
} 

//include add meta box images
require_once get_template_directory() . '/includes/add-meta-boxes-image.php';
//include breadcrumbs
require_once get_template_directory() . '/includes/breadcrumbs.php';
//include create page template
require_once get_template_directory() . '/includes/create-pages.php';
//include create custom post types 
require_once get_template_directory() . '/includes/create-posttypes.php';
//include create taxonomy 
require_once get_template_directory() . '/includes/create-taxonomys.php';
//include import select color in taxonomy
require_once get_template_directory() . '/includes/display-color-terms.php';
//include filter taxonomy
require_once get_template_directory() . '/includes/filter-taxonomys.php';
//include import select image category 
require_once get_template_directory() . '/includes/image-category.php';
//include pagination
require_once get_template_directory() . '/includes/pagination.php';




/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fimetech_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on FIMETECH, use a find and replace
		* to change 'fimetech' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'fimetech', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'fimetech' ),
		)
	);

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

	add_theme_support(
		'custom-background',
		apply_filters(
			'fimetech_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'fimetech_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fimetech_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fimetech_content_width', 640 );
}
add_action( 'after_setup_theme', 'fimetech_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fimetech_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fimetech' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fimetech' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fimetech_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fimetech_scripts() {
	wp_enqueue_style( 'fimetech-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'fimetech-style', 'rtl', 'replace' );

	wp_enqueue_script( 'fimetech-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fimetech_scripts' );

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

