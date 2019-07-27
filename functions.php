<?php
/**
 * NocStudioX functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NocStudioX
 */

if ( ! function_exists( 'nocstudiox_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nocstudiox_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on NocStudioX, use a find and replace
		 * to change 'nocstudiox' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nocstudiox', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'nocstudiox' ),
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
		add_theme_support( 'custom-background', apply_filters( 'nocstudiox_custom_background_args', array(
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
add_action( 'after_setup_theme', 'nocstudiox_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nocstudiox_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'nocstudiox_content_width', 640 );
}
add_action( 'after_setup_theme', 'nocstudiox_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nocstudiox_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nocstudiox' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nocstudiox' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nocstudiox_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nocstudiox_scripts() {
	wp_enqueue_style( 'nocstudiox-style', get_stylesheet_uri() );

	wp_enqueue_script( 'nocstudiox-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'nocstudiox-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nocstudiox_scripts' );

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

//Include the parent theme's styles
add_action("wp_enqueue_scripts", "enqueue_parent_styles");

function enqueue_parent_styles() {
    wp_enqueue_style( "parent-style", get_template_directory_uri() . "/style.css");
}


//Enqueue Bootstrap from Node_Modules
	// Bootstrap JS
	add_action("wp_enqueue_scripts", "bootstrap_js_from_node_modules");
	function bootstrap_js_from_node_modules() {
		wp_register_script("bootstrapJSFromNodeModules", get_stylesheet_directory_uri()."/node_modules/bootstrap/dist/js/bootstrap.min.js", array(), "1.0", "all");
		wp_enqueue_script("bootstrapJSFromNodeModules", array(), false);
	}
	// Bootstrap CSS
	add_action("wp_enqueue_scripts", "bootstrap_css_from_node_modules");
	function bootstrap_css_from_node_modules() {
		wp_register_style("bootstrapCSSFromNodeModules", get_stylesheet_directory_uri()."/node_modules/bootstrap/dist/css/bootstrap.min.css", array(), "1.0", "all");
		wp_enqueue_style("bootstrapCSSFromNodeModules", array(), false);
	}

//Enqueue FontAwesome JS files from Node_Modules
add_action("wp_enqueue_scripts", "fontawesome_from_node_modules");
function fontawesome_from_node_modules(){
    wp_enqueue_style("FontAwesome", get_stylesheet_directory_uri() . "/node_modules/@fortawesome/fontawesome-free/css/all.min.css");
}

//Enqueue SmoothState-JS from Node Modules
add_action("wp_enqueue_scripts", "smoothStateJS_from_node_modules");
function smoothStateJS_from_node_modules(){
	wp_register_script("smoothStateJSFromNodeModules", get_stylesheet_directory_uri()."/node_modules/smoothstate/src/jquery.smoothState.js", array('jquery'), '0.7.2');
	wp_enqueue_script("smoothStateJSFromNodeModules", array(), false);
}




//Enqueue our Webpack Created Bundle.JS file
add_action("wp_enqueue_scripts", "webpack_bundle");
function webpack_bundle(){
    wp_enqueue_script("bundle", get_stylesheet_directory_uri() . "/dist/bundle.js", array('jquery'), 1, true);
}

//We employ a special hook to tack on HTML to our wp_nav_menu thing
// function add_last_nav_item($bootstrapSearchBar) {

// 		let search = `<form class="form-inline my-2 my-lg-0" role="search" method="get" action="https://localhost/nocStudio/">
// 		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
// 		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
// 	  </form>`;
// 		jQuery('nav').(search);
	

// }
// add_filter('wp_nav_menu_items', 'add_last_nav_item');



//We add a filter so that our ACF Custom Field value of 'date_posted' can take
//precedence over the value derived from the template tag 'nocstudiox_posted_on' which is
//located in template-tags.php. Basically, if there is an ACF posted date time and it is not null, then
//it will be the one that is shown on screen as the text for the anchor tag leading to the post. If it IS null
//then we will just use what the custom template tag originall derived for us.

//Yes, I will be this fucking detailed in my comments because if I walked away for a month and came back
//or gave this to someone who had no idea what the fuck was going on, it would be cruel and unusual punishment
//for that individual who probably wants to see their significant other, enjoy a walk in nature, or grab a beer
//with friends later on...y'know...why we as people ACTUALLY work.
add_filter("nocstudiox_posted_on", "get_acf_date", 10, 2);
function get_acf_date($acfDate, $originalTime) {
	if($acfDate != null) {
	return $acfDate;
	} else {
		return $originalTime;
	}
}


function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'primary' ) {
      // add the desired attributes:
      $atts['class'] = 'menu-link-class';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

