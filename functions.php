<?php
/**
 * rosariojmj functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rosariojmj
 */

 /**
  * Set the content width based on the theme's design and stylesheet.
  *
  * @since rosariojmj
  */
 if ( ! isset( $content_width ) ) {
 	$content_width = 900;
 }

 if ( ! function_exists( 'rosariojmj_setup' ) ) :
 	/**
 	 * Sets up theme defaults and registers support for various WordPress features.
 	 *
 	 * Note that this function is hooked into the after_setup_theme hook, which
 	 * runs before the init hook. The init hook is too late for some features, such
 	 * as indicating support for post thumbnails.
 	 */
 	function rosariojmj_setup() {
 		/*
 		 * Make theme available for translation.
 		 * Translations can be filed in the /languages/ directory.
 		 * If you're building a theme based on rosariojmj, use a find and replace
 		 * to change 'rosariojmj' to the name of your theme in all the template files.
 		 */
 		load_theme_textdomain( 'rosariojmj');

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
    set_post_thumbnail_size( 825, 510, true );

 		// This theme uses wp_nav_menu() in one location.
 		register_nav_menus( array(
 			'menu-1' => esc_html__( 'Primary', 'rosariojmj' ),
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
 		add_theme_support( 'custom-background', apply_filters( 'rosariojmj_custom_background_args', array(
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

    // Setup the WordPress core custom background feature.

    /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, icons, and column width.
     */
    //add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', rosario_fonts_url() ) );

    // Indicate widget sidebars can use selective refresh in the Customizer.
    add_theme_support( 'customize-selective-refresh-widgets' );

 	}
 endif;
 add_action( 'after_setup_theme', 'rosariojmj_setup' );

 /**
  * Register widget area.
  *
  * @since rosariojmj
  *
  * @link https://codex.wordpress.org/Function_Reference/register_sidebar
  */
  function rosariojmj_widgets_init() {
  	register_sidebar( array(
  		'name'          => esc_html__( 'Sidebar', 'rosariojmj' ),
  		'id'            => 'sidebar-1',
  		'description'   => esc_html__( 'Add widgets here.', 'rosariojmj' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h2 class="widget-title">',
  		'after_title'   => '</h2>',
  	) );
  }
  add_action( 'widgets_init', 'rosariojmj_widgets_init' );

  /**
   * JavaScript Detection.
   *
   * Adds a `js` class to the root `<html>` element when JavaScript is detected.
   *
   * @since rosariojmj
   */
  function rosariojmj_javascript_detection() {
  	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
  }
  add_action( 'wp_head', 'rosariojmj_javascript_detection', 0 );

  /**
   * Enqueue scripts and styles.
   *
   * @since rosariojmj
   */
   function rosariojmj_scripts() {
    // Theme stylesheet.
    wp_enqueue_style( 'rosariojmj-style', get_stylesheet_uri() );

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array('rosariojmj-style'), false);

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans', array('rosariojmj-style'), false);

    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array('rosariojmj-style'), false);

    wp_enqueue_style( 'master', get_template_directory_uri() . '/css/master.css', array('rosariojmj-style'), false);

    /* ** scripts ** */
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', '1.12.4', true);

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '3.3.7', true);

    wp_enqueue_script( 'validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js', '1.17.0', true);

   	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
   		wp_enqueue_script( 'comment-reply' );
   	}
   }
   add_action( 'wp_enqueue_scripts', 'rosariojmj_scripts' );


 ?>
