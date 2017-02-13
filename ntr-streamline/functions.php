<?php


function streamline_setup() {
  /*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'streamline' );

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
	add_image_size( 'streamline-featured-image', 2000, 1200, true );
	add_image_size( 'streamline-thumbnail-avatar', 100, 100, true );

  // Set the default content width.
	//$GLOBALS['content_width'] = 525;

  // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'streamline' ),
		'social' => __( 'Social Links Menu', 'streamline' ),
	) );

  /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

  /*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

  // Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

  // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

  /*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	//add_editor_style( array( 'assets/css/editor-style.css', twentyseventeen_fonts_url() ) );



}
add_action( 'after_setup_theme', 'streamline-setup')

/**
 * Actions hooks
 */
// add code before the main content and after the header (hook found in header.php)
function sl_before_content_setup(){
  // start of the main content container
?>
  <section class="site-content">
<?php
}
add_action('sl_before_content', 'sl_before_content_setup');

// add code after the main content and before the footer (hook found in footer.php)
function sl_after_content_setup(){
  // end of the main content container
?>
  </section> <!-- .site-content -->
<?php
}
add_action('sl_after_content', 'sl_after_content_setup');

/**
 *      Enqueue scripts and styles.
 */
function streamline_enqueue() {
  // Theme Stylesheet (currently points to stylesheet in the sass folder)
  wp_enqueue_style( 'streamline-style' , get_stylesheet_uri('stylesheets/style.css') );
}
add_action( 'wp_enqueue_scripts' , 'streamline_enqueue' );
