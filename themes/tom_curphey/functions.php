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

	wp_localize_script('tom_curphey-custom', 'voteData', array(
		 'nonce' => wp_create_nonce('wp_rest'),
		 'siteURL' => get_site_url() 
	)); 
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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'tom-menu' => esc_html__( 'Tom Menu', 'tom_curphey' ),
		'service-menu' => esc_html__( 'Services Menu', 'tom_curphey' ),
		'case-menu' => esc_html__( 'Case Menu', 'tom_curphey' ), 
	) );














// ======================================

// START CUSTOM CODE

// ======================================


// wp-json/wp/v2/posts
// Register API route
add_action( 'rest_api_init', function () {
  // register_rest_route( 'votes/v1', '/update/(?P<id>\d+)', array(
  //   'methods' => 'PUT',
  //   'callback' => 'handle_update_vote',
  // ) );
  register_rest_route( 'votes/v1', '/all', array(
    'methods' => 'GET',
    'callback' => 'handle_get_all',
  ) );
} );

function handle_get_all( $data ) {
    global $wpdb;
    $query = "SELECT vote_type, vote_count FROM `wp_votes`";
		$list = $wpdb->get_results($query);
		echo '<pre>';
		echo $list;
		echo '</pre>';
    return $list;
}

function handle_update_vote( $data ) {
	echo print_r($data);
	global $wpdb;
	$query = "UPDATE `wp_votes` SET `vote_count = 5` WHERE `id = 1`";
	// $list = $wpdb->get_results($query);
	// return $list;
}





// // Register the new route
// add_action( 'rest_api_init', function () {

//   register_rest_route( 'example/v2', '/likes/(?P<id>\d+)', array(
//         'methods' => array('GET','POST'),
//         'callback' => 'example__like',
//     ) ); 

// });

// // This is how you setup a callback function to work with your new endpoint
// function example__like( WP_REST_Request $request ) {
    
//         $likes = 20;
    
//         return $likes;
//     }










function getClientLogos(){
	$args = array (
		'posts_per_page'  => '6',
		'post_type' 			=> 'case',
		'orderby'					=> 'date',
		'order'						=> 'DESC'
	);
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		$x = 0;
		foreach($query->posts as $post){
			$post_data[] = ClientLogosQueryToArray($post);
			$post_data[$x]['link'] = $post->post_name;
			$x++;
		}	

		if($post_data){
			$c = 1;
			foreach($post_data as $logo){
				switch($c){
					case 1:
						$logo_1 = '<li><a href="case-study/'.$logo['link'].'"><img src="'.$logo['url'].'" alt="Introducing Tom Curphey"></a></li>';
					break;
					case 2:
						$logo_2 = '<li><a href="case-study/'.$logo['link'].'"><img src="'.$logo['url'].'" alt="Introducing Tom Curphey"></a></li>';
					break;
					case 3:
						$logo_3 = '<li><a href="case-study/'.$logo['link'].'"><img src="'.$logo['url'].'" alt="Introducing Tom Curphey"></a></li>';
					break;
					case 4:
						$logo_4 = '<li><a href="case-study/'.$logo['link'].'"><img src="'.$logo['url'].'" alt="Introducing Tom Curphey"></a></li>';
					break;
					case 5:
						$logo_5 = '<li><a href="case-study/'.$logo['link'].'"><img src="'.$logo['url'].'" alt="Introducing Tom Curphey"></a></li>';
					break;
					case 6:
						$logo_6 = '<li><a href="case-study/'.$logo['link'].'"><img src="'.$logo['url'].'" alt="Introducing Tom Curphey"></a></li>';
					break;
				}
				$c++;
			}

			$logo_count = count($post_data);
			switch($logo_count){
				case 1:
					?>
						<ul class="list_wrapper">
						<li>
							<ul id="slideshow1">
								<?php echo $logo_1 ?>
							</ul>
						</li>
						</ul>
					<?php
					break;
				case 2:
					?>
						<ul class="list_wrapper">
						<li>
							<ul id="slideshow1">
								<?php echo $logo_1; echo $logo_2; ?>
							</ul>
						</li>
						</ul>
					<?php
					break;
				case 3:
					?>
						<ul class="list_wrapper">
						<li>
							<ul id="slideshow1">
								<?php echo $logo_1; echo $logo_2; ?>
							</ul>
							<ul id="slideshow2">
								<?php echo $logo_3; ?>
							</ul>
						</li>
						</ul>
					<?php
					break;
				case 4:
					?>
						<ul class="list_wrapper">
						<li>
							<ul id="slideshow1">
								<?php echo $logo_1; echo $logo_2; ?>
							</ul>
							<ul id="slideshow2">
								<?php echo $logo_3; echo $logo_4;?>
							</ul>
						</li>
						</ul>
					<?php
					break;
				case 5:
					?>
						<ul class="list_wrapper">
						<li>
							<ul id="slideshow1">
								<?php echo $logo_1; echo $logo_2; ?>
							</ul>
							<ul id="slideshow2">
								<?php echo $logo_3; echo $logo_4; ?>
							</ul>
							<ul id="slideshow3">
								<?php echo $logo_5; ?>
							</ul>
						</li>
						</ul>
					<?php
					break;
				case 5:
					?>
						<ul class="list_wrapper">
						<li>
							<ul id="slideshow1">
								<?php echo $logo_1; echo $logo_2; ?>
							</ul>
							<ul id="slideshow2">
								<?php echo $logo_3; echo $logo_4; ?>
							</ul>
							<ul id="slideshow3">
								<?php echo $logo_5; echo $logo_6;?>
							</ul>
						</li>
						</ul>
					<?php
					break;
			}
		}
		
	}
}

function ClientLogosQueryToArray($post){
	$args = array(
		'posts_per_page'   => -1,
		// 'category'         => $category,
		'orderby'          => 'ID',
		'order'            => 'ASC',
		'post_parent'			 => $post->ID,
		'post_type'        => 'attachment'
	);
	$post_images = get_posts( $args );

	if(!empty($post_images)){

		foreach($post_images as $image){
			if($image->post_title == 'logo'){
				$post_data = array(
					'url' => $img_src_url,
				);
			}
		}	

		return $post_data;
	}
}

function get_featured_case_studies(){
		$post_data = FeaturedCaseQueryToArray();
		echo '<ul>';
		foreach($post_data as $post){
		?>
			<li>
				<a href="<?php echo $post['url'] ?>">
					<div class="case_image" style="background-image: url(<?php echo $post['feature_image'] ?>)">

					</div>
					<div class="case_title">
						<h3><?php echo $post['case'] ?></h3>
					</div>
				</a>
			</li>	
		<?php
		}
		echo '</ul>';
}

function get_related_case_studies(){
		$post_data = RelatedCaseQueryToArray();
		echo '<ul>';
		foreach($post_data as $post){
		?>
			<li>
				<a href="<?php echo $post['url'] ?>">
					<div class="case_image" style="background-image: url(<?php echo $post['feature_image'] ?>)">

					</div>
					<div class="case_title">
						<h3><?php echo $post['case'] ?></h3>
					</div>
				</a>
			</li>	
		<?php
		}
		echo '</ul>';
}

function FeaturedCaseQueryToArray(){
	$post_data = array();

	$args = array(
		'posts_per_page'   => 6,
		// 'category'         => $category,
		'orderby'          => 'ID',
		'order'            => 'DESC',
		'post_type'        => 'case'
	);

	$posts = get_posts( $args );

	if(!empty($posts)){
		foreach($posts as $post){ 
			$post_data[] = array(
				'case'   			  => $post->post_title,
				'id'   					=> $post->ID,
				'url'						=> get_permalink($post->ID),
				'feature_image'	=> get_the_post_thumbnail_url( $post->ID, 'large' )
			);
		}
	}else{
		$post_data = 0;
	}
	return $post_data;
}

function RelatedCaseQueryToArray(){

	$post_data = array();

	$args = array(
		'posts_per_page'   => 6,
		// 'category'         => $category,
		'orderby'					 => 'rand',
    'order'    				 => 'ASC',
		'post_type'        => 'case'
	);

	$posts = get_posts( $args );

	if(!empty($posts)){
		foreach($posts as $post){ 
			$post_data[] = array(
				'case'   			  => $post->post_title,
				'id'   					=> $post->ID,
				'url'						=> get_permalink($post->ID),
				'feature_image'	=> get_the_post_thumbnail_url( $post->ID, 'large' )
			);
		}
	}else{
		$post_data = 0;
	}
	return $post_data;
}

function caseQueryToArray($post){
	$post_data = array();
	$post_meta = get_post_meta($post->ID, '', true);
	$post_categories = wp_get_post_categories( $post->ID );

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
			'name'					=> $post_meta['case_client_name'][0],
			'client_url'		=> $post_meta['case_client_url'][0], 
			'comments'			=> $post_meta['case_client_comments'][0],

			'engagement'		=> $post_meta['case_engagement'][0],
			'sales'					=> $post_meta['case_sales_growth'][0],
			'leads'					=> $post_meta['case_leads'][0],
			'traffic'				=> $post_meta['case_traffic'][0],

			'challenge'			=> $post_meta['case_challenge'][0],
			'solution'	    => $post_meta['case_solution'][0],
			'hindsight'	    => $post_meta['case_hindsight'][0],
		);
		
		if(!empty($post_images)){
			// echo '<pre>';
			// print_r($post_images);
			// echo '</pre>';
			$x = 1;
			foreach($post_images as $image){

			

				$img_src = wp_get_attachment_image_src($image->ID, 'featured' );
				$img_src_url = $img_src[0];
				
				// echo '<pre>';
				// print_r($img_src_url);
				// echo '</pre>';

				$image_alt = get_post_meta( $image->ID, '_wp_attachment_image_alt', true);
				// echo '<pre> Kalinidi';
				// echo print_r($image_alt);
				// echo '</pre>';
				if($image->post_title == 'header' || $image_alt == 'header'){
					$header_image = array(
						'image_url' => $img_src_url,
						'title'		=> $image->post_title,
						'caption'		=> $image->post_excerpt,
						'content'		=> $image->post_content,
					);
				}elseif($image->post_title == 'logo' || $image_alt == 'logo'){
					$logo_image = array(
						'image_url' => $img_src_url,
						'title'		=> $image->post_title,
						'caption'		=> $image->post_excerpt,
						'content'		=> $image->post_content,
					);
				}else{
					$images[] = array(
						'step' => 'Step ' . $x,
						'image_url' => $img_src_url,
						'title'		=> $image->post_title,
						'caption'		=> $image->post_excerpt,
						'content'		=> $image->post_content,
					);
					$x++;
				}
			}
		}
		if(!empty($header_image)){
			$post_data['header_image'] = $header_image;
		}
		if(!empty($logo_image)){
			$post_data['logo_image'] = $logo_image;
		}
		if(!empty($images)){
			$post_data['step_images'] = $images;
		}

		// echo '<pre> header ';
		// echo print_r($post_data);
		// echo '</pre>';


		if(!empty($post_categories)){
			foreach($post_categories as $c){
				$cat = get_category( $c );
				$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
			}
			$post_data['categories'] = $cats;
		}
	}else{
		$post_data = 0;
	}
	return $post_data;
}

function get_case_study($post_id){
	$post = get_post($post_id);
	if($post){
		$post_data =	caseQueryToArray($post);
		?>
    <section class="case_header" style="background-image: url(<?php echo $post_data['header_image']['image_url'] ?>);">
      <?php // get_case_study(get_the_ID()) ?>
      <div class="title_wrapper">
        <div class="title_box">
          <h1><?php echo $post_data['case'] ?></h1>
        </div>
      </div>
		</section>
		<div class="to_make_the_sticky_menu_work_sad_face">
      <section class="case_content">
        <section class="stats"> 
          <ul>
					<li>
              <div class="case_links">
                <h4><?php if(!empty($post_data['case'])){ echo  $post_data['case']; } ?></h4>
                <a href="<?php if(!empty($post_data['client_url'])){ echo  $post_data['client_url']; } ?>" target="_blank"><i class="fas fa-link"></i></a>
              </div>
              <div class="case_logo" style="background-image: url(<?php echo $post_data['logo_image']['image_url'] ?>);"></div>
            </li>
            <li><h4>Engagement</h4><span><?php if(!empty($post_data['engagement'])){ echo  $post_data['engagement']; }?></span></li>
            <li><h4>Sales Growth</h4><span><?php if(!empty($post_data['sales'])){ echo  $post_data['sales']; }?>%</span></li>
            <li><h4>Lead Conversion</h4><span><?php if(!empty($post_data['leads'])){ echo  $post_data['leads']; }?>%</span></li>
            <li><h4>Website Traffic</h4><span><?php if(!empty($post_data['traffic'])){ echo  $post_data['traffic']; }?>%</span></li>
            <li class="quote"><span>"</span><p><?php if(!empty($post_data['comments'])){ echo  $post_data['comments']; }?></p><span>"</span></li>
            <li class="topic">
							<?php
								if(!empty($post_data['categories'])){
									foreach($post_data['categories'] as $cat){
										$slug = $cat['slug'];
										echo '<a href="' . $slug . '">' . $cat['name'] . '</a>';
									}
								}
							?>
						</li> 
          </ul>
        </section>
        <div class="content_wrapper">
          <section class="challenge">
            <h2>The Challenge</h2>
						<?php
							if(!empty($post_data['challenge'])){ echo  $post_data['challenge']; }
						?>
          </section>
          <section class="solution">
            <h2>Solution</h2>
            <?php
							if(!empty($post_data['solution'])){ echo  $post_data['solution']; }
						?>
					</section>
					<!-- This gave me the confidence that I knew he would build the project to the highest standard and that we would were going to work well together! -->
          <section class="step">
            <h2>Step By Step</h2>
						<div class="my-gallery step" itemscope itemtype="http://schema.org/ImageGallery">
						
							<?php
								if(!empty($post_data['step_images'])){
									$step_count = count($post_data['step_images']);
									$c = 1;
									foreach($post_data['step_images'] as $step){
										?>
										<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
											<a href="<?php if(!empty($step['image_url'])){ echo  $step['image_url']; } ?>" itemprop="contentUrl" data-size="1024x1024" class="step">
											<img src="<?php if(!empty($step['image_url'])){ echo  $step['image_url']; } ?>"  alt="<?php if(!empty($step['step'])){ echo  $step['step']; } ?>">
											<p class="step"><?php if(!empty($step['caption'])){ echo  $step['caption']; } ?></p>
											<?php 
												if($step_count === $c){
													echo '<p class="next_time">Completion</p>';
												}
											?>
											</a>
											<figcaption itemprop="caption description" class="details">
												<div class="details">
													<div class="step_title">
														<span><?php if(!empty($step['step'])){ echo  $step['step']; } ?></span>
														<h3><?php if(!empty($step['title'])){ echo  $step['title']; } ?></h3></div>
													<?php if(!empty($step['content'])){ convertToList($step['content']); }  ?>
												</div>
											</figcaption>                           
										</figure>
										<?php
										$c++;
									}
								}
							?>
            </div>
          </section>
        </div>
      </section>
		</div>
		<section class="hindsight">
      <h2>Hindsight</h2>
      <p>What I learned & How I would approach this sistuation differently next time</p>
			<?php if(!empty($post_data['hindsight'])){ echo  $post_data['hindsight']; } ?>
		</section>
		<section class="related_cases">
			<section class="case">
					<div class="case_list">
						<?php 
						echo get_related_case_studies();
						?>
					</div>
			</section>
			<section class="case_wrapper">
				<h2>More Case Studies</h2> 
				<div></div>
			</section>
		</section>

		<?php
	}else{
		echo '<h1>Took a look and couldn\'t find your requests..</h1>';
	}
}

function convertToList($list){
	$list = explode('/', $list);
	shuffle($list);
	$html = '<ul>';
	foreach($list as $item) {
			$html .= '<li>' . $item . '</li>';
	}
	$html .= '</ul>';

	echo $html;
}


