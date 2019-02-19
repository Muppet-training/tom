<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tom_curphey
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Iceberg|Montserrat:100,200,400" rel="stylesheet">
 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/default-skin/default-skin.css">
	<?php wp_head(); ?>
	<style>
		div.video_link {
			background-image: url(<?php echo '"'.get_template_directory_uri() . '/images/listen.png"'; ?>);
		}
	</style>
</head>

<body <?php body_class(); ?>>
	<div class="hidden" hidden>
		<?php get_template_part( '/images/sprite.svg' ); ?>
	</div>
	<div id="content" class="content">
	<nav>
		<ul>
			<li onclick="display_menu('left');"><i class="fas fa-bars"></i></li>
			<li><a href="<?php echo home_url('/');?>">Tom Curphey</a></li>
			<li></li>
			<li><a href="<?php echo home_url('/#services');?>">Services</a></li>
			<li onclick="display_menu('right');"><i class="fas fa-sort-amount-up"></i></li>
		</ul>
	</nav>
	<section id="left" class="left_menu" >
		<ul>
			<li>
				<a href="<?php echo home_url('/#contact');?>">
					<div><img src="<?php echo get_template_directory_uri(); ?>/images/footer80.png)" alt="Introducing Tom Curphey"></div>
					<div>
						<h4>Contact</h4>
						<p>Reach out & connect with me</p>
						<p>tom@tomcurphey.com</p>
						<p>0428 438 348</p>
					</div>
				</a>
			</li>
			<li>
				<a href="<?php echo home_url('/#services');?>">
					<div><img src="<?php echo get_template_directory_uri(); ?>/images/devdev.png)" alt="Introducing Tom Curphey"></div>
					<div>
						<h4>Free Lancing</h4>
						<p>List of services I provide</p>
					</div>
				</a>
			</li>
			<li>
				<a href="<?php echo home_url('/#casestudies');?>">
					<div><img src="<?php echo get_template_directory_uri(); ?>/images/case1.jpeg)" alt="Introducing Tom Curphey"></div>
					<div>
						<h4>Case Studies</h4>
						<p>Detailed overview of my workflow</p>
					</div>
				</a>
			</li>
			<li>
				<a href="<?php echo home_url('/about');?>">
					<div><img src="<?php echo get_template_directory_uri(); ?>/images/ship80.jpeg)" alt="Introducing Tom Curphey"></div>
					<div>
						<h4>About Tom</h4>
						<p>See my past experiences</p>
					</div>
				</a>
			</li>
			<!-- <li>
				<div><img src="<?php //echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey"></div>
				<div>
					<h4>Brands</h4>
					<p>My own start ups & projects</p>
				</div>
			</li> -->
			<!-- <li>
				<div><img src="<?php //echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey"></div>
				<div>
					<h4>Vlog</h4>
					<p>Daily experience of being Tom Curphey</p>
				</div>
			</li> -->
		</ul>
	</section>
	<section class="right_menu">
		<div class="right_menu_header">
			<h3>PROFILE<br/>STATS</h3>
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey">
			</div>
		</div>
		<ul>
			<li>
				TEAM PLAYER
			</li>
			<li>
				<span style="width:95%">
					COMMUNICATION / ARTICULATION
				</span>
			</li>
			<li>
				<span style="width:90%">
					EMPATHY / EMOTIONAL INTELLIGENCE
				</span>
			</li>
			<li>
				<span style="width:95%">
					DISCIPLINE  / PERSISTENCE / WORK ETHIC
				</span>
			</li>
			<li>
				<span style="width:93%">
					DESION MAKING / RESULTS FOCUSED
				</span>
			</li>
			<li>
				<span style="width:90%">
					COLLABORATION / TEAMWORK
				</span>
			</li>
			<li>
				<span style="width:96%">
					LISTENING
				</span>
			</li>
		</ul>
		<ul>
			<li>
				FRONTEND DEV
			</li>
			<li>
				<span style="width:78%">
					REACT / REDUX / JS
				</span>
			</li>
			<li>
				<span style="width:92%">
					CSS GRID / FLEX BOX / SASS / CSS
				</span>
			</li>
			<li>
				<span style="width:90%">
					BOOTSTRAP / FOUNDATION
				</span>
			</li>
			<li>
				<span style="width:95%">
					HTML5 / WIREFRAMES
				</span>
			</li>
		</ul>
		<ul>
			<li>
				MARKETING
			</li>
			<li>
				<span style="width:82%">
					GOOGLE ADS / SEM  / MERCHANT
				</span>
			</li>
			<li>
				<span style="width:93%">
					RESEARCH / MARKET ANALYSIS
				</span>
			</li>
			<li>
				<span style="width:95%">
					LONG TERM & SHORT STRATEGY
				</span>
			</li>
			<li>
				<span style="width:88%">
					FACEBOOK ADS / SOCIAL MEDIA ADS
				</span>
			</li>
			<li>
				<span style="width:96%">
					SALES FUNNEL CX DESIGN
				</span>
			</li>
			<li>
				<span style="width:85%">
					MEASURE BY SALES
				</span>
			</li>
		</ul>
		<ul>
			<li>
				DESIGN
			</li>
			<li>
				<span style="width:93%">
					WEBSITE STRUCTURE / LAYOUT
				</span>
			</li>
			<li>
				<span style="width:91%">
					UX DESIGN / CX DESIGN
				</span>
			</li>
			<li>
				<span style="width:88%">
					PRINT MEDIA
				</span>
			</li>
			<li>
				<span style="width:90%">
					PHYCHOLOGICAL DESIGN PRINCIPLES
				</span>
			</li>
			<li>
				<span style="width:95%">
					SALES FUNNEL / BUSINESS MODEL
				</span>
			</li>
		</ul>
		<ul>
			<li>
				BACKEND DEV
			</li>
			<li>
				<span style="width:68%">
					API INTERGRATION
				</span>
			</li>
			<li>
				<span style="width:85%">
					GOOGLE ANALYTICS / TAG MANAGER
				</span>
			</li>
			<li>
				<span style="width:90%">
					SQL
				</span>
			</li>
			<li>
				<span style="width:75%">
					FIREBASE / MONGODB / NOSQL
				</span>
			</li>
		</ul>
		<ul>
			<li>
				CONTENT / CREATIVE
			</li>
			<li>
				<span style="width:88%">
					PHOTOGRAPHY
				</span>
			</li>
			<li>
				<span style="width:90%">
					VIDEOGRAPHY
				</span>
			</li>
			<li>
				<span style="width:85%">
					VIDEO EDITING
				</span>
			</li>
			<li>
				<span style="width:82%">
					PHOTO EDITING
				</span>
			</li>
			<li>
				<span style="width:90%">
					COPY WRITING
				</span>
			</li>
			<li>
				<span style="width:95%">
					IPHONE ONLY CREATIVE
				</span>
			</li>
		</ul>
	</section>