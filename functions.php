<?php

/**
 * Muslim_Matrimonial functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Muslim_Matrimonial
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function muslim_matrimonial_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Muslim_Matrimonial, use a find and replace
		* to change 'muslim_matrimonial' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('muslim_matrimonial', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'muslim_matrimonial'),
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
			'muslim_matrimonial_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'muslim_matrimonial_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function muslim_matrimonial_content_width()
{
	$GLOBALS['content_width'] = apply_filters('muslim_matrimonial_content_width', 640);
}
add_action('after_setup_theme', 'muslim_matrimonial_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function muslim_matrimonial_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'muslim_matrimonial'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'muslim_matrimonial'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'muslim_matrimonial_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function muslim_matrimonial_scripts()
{
	wp_enqueue_style('muslim_matrimonial-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('muslim_matrimonial-style', 'rtl', 'replace');

	wp_enqueue_script('muslim_matrimonial-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'muslim_matrimonial_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Allow Webp Upload For Ultimate Member
add_filter("um_allowed_image_types", "um_010223_default_allowed_image_types");
function um_010223_default_allowed_image_types($types)
{

	$types['webp'] = 'webp';

	return $types;
}

// Cover & Profile Photo
add_filter("um_get_field__cover_photo", "um_010223_allowed_webp_image_type", 10, 1);
add_filter("um_get_field__profile_photo", "um_010223_allowed_webp_image_type", 10, 1);
function um_010223_allowed_webp_image_type($data)
{

	$arr = explode(",", $data['allowed_types']);
	$arr[] = "webp";
	$data['allowed_types'] = implode(",", $arr);

	return $data;
}

add_filter("um_user_photos_allowed_image_types", "um_user_photos_010223_allowed_webp_image_type", 10, 1);
function um_user_photos_010223_allowed_webp_image_type($arr_types)
{
	$arr_types[] = "image/webp";
	return $arr_types;
}

add_filter("um_user_shortcode_filter__image_realtor", "um_user_shortcode_filter__image_realtor", 10, 3);
function um_user_shortcode_filter_image_realtor($meta_value,  $raw_meta_value, $user_id)
{

	return  UM()->uploader()->get_upload_user_base_url($user_id) . "/" . $meta_value;
}

















