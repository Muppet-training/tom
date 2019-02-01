<?php
/**
 * tom_curphey functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tom_curphey
 */

if ( ! function_exists( 'tom_curphey_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tom_curphey_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tom_curphey, use a find and replace
		 * to change 'tom_curphey' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tom_curphey', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'tom_curphey' ),
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
		add_theme_support( 'custom-background', apply_filters( 'tom_curphey_custom_background_args', array(
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
add_action( 'after_setup_theme', 'tom_curphey_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tom_curphey_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'tom_curphey_content_width', 640 );
}
add_action( 'after_setup_theme', 'tom_curphey_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tom_curphey_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tom_curphey' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tom_curphey' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tom_curphey_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
// function tom_curphey_enqueue() {
// 	
	
// 	wp_enqueue_script( 'tom_curphey-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

// 	wp_enqueue_script( 'tomjs', get_template_directory_uri() . '/js/tom.js', array(), '1.0.0', true );

// 	wp_enqueue_script( 'tom_curphey-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}  
// }
// add_action( 'wp_enqueue_scripts', 'tom_curphey_enqueue' );

function tom_curphey_js() {
	wp_enqueue_style( 'default-skin', get_template_directory_uri() . '/photoswipe/default-skin/default-skin.css', array(), '', 'all' );
  wp_enqueue_style( 'photoswipe', get_template_directory_uri() . '/photoswipe/photoswipe.css', array(), '', 'all' );
	wp_enqueue_style( 'tom_curphey-style', get_stylesheet_uri() );

	
	wp_enqueue_script( 'tom_curphey-photoswipe', get_template_directory_uri() . '/photoswipe/photoswipe.js', array('jquery'), '', false );
	wp_enqueue_script( 'tom_curphey-photoswipe-ui-default.min', get_template_directory_uri() . '/photoswipe/photoswipe-ui-default.min.js', array('jquery'), '', false );
	wp_enqueue_script( 'tom_curphey-photoswipe-custom', get_template_directory_uri() . '/photoswipe/photoswipe-custom.js', array('jquery'), '', false );

	wp_enqueue_script( 'tom_curphey-custom', get_template_directory_uri() . '/js/tom.js', array(), NULL, false );
}

add_action( 'wp_enqueue_scripts', 'tom_curphey_js' );

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
















// ======================================

// START CUSTOM CODE

// ======================================
















function get_featured_case_studies(){

	// var_dump($category);

	$args = array(
		'posts_per_page'   => -1,
		// 'category'         => $category,
		'orderby'          => 'name',
		'order'            => 'ASC',
		'post_type'        => 'case'
	);
	$posts = get_posts( $args );

		// echo '<pre>';
		// print_r($posts);
		// echo '</pre>';

	if($posts){

		foreach( $posts as $post ){
			$post_array = caseQueryToArray($post);
		}
	}
}

function caseQueryToArray($post){
	$post_data = array();
	$post_meta = get_post_meta($post->ID, '', true);
	$args = array(
		'posts_per_page'   => -1,
		// 'category'         => $category,
		'orderby'          => 'ID',
		'order'            => 'ASC',
		'post_parent'			 => $post->ID,
		'post_type'        => 'attachment'
	);
	$post_images = get_posts( $args );

	if(!empty($post_meta)){
		$post_data = array(
			'case'   			  => $post->post_title,
			'id'   					=> $post->ID,
			'url'						=> get_permalink($post->ID),
			'image'					=> get_the_post_thumbnail_url($post->ID), 
			'name'					=> $post_meta['case_client_name'][0],
			'client_url'		=> $post_meta['case_client_url'][0], 
			'comments'			=> $post_meta['case_client_comments'][0],
			'info'					=> $post_meta['case_info'][0],
			'problem'				=> $post_meta['case_problem'][0],
			'solution'	    => $post_meta['case_solution'][0],
		);
		
		// echo '<pre>';
		// print_r($post_images);
		// echo '</pre>';

		if(!empty($post_images)){
			foreach($post_images as $image){
				$images[] = array(
					'image_url' => $image->guid,
					'title'		=> $image->post_title,
					'caption'		=> $image->post_excerpt,
					'content'		=> $image->post_content
				);
			}
		}
		if(!empty($images)){
			$post_data['images'] = $images;
		}
	}else{
		$post_data = 0;
	}

	// echo '<pre>';
	// print_r($post_data);
	// echo '</pre>';
}

function get_case_study($post_id){

	$post = get_post($post_id);

		// echo '<pre>';
		// print_r($posts);
		// echo '</pre>';

	if($post){
		caseQueryToArray($post);
	}
}

function convertToList($list){
	$list = explode(',', $list);
	shuffle($list);
	$html = '<ul>';
	foreach($list as $item) {
			$html .= '<li>' . $item . '</li>';
	}
	$html .= '</ul>';

	echo $html;
}
