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
	<link href="https://fonts.googleapis.com/css?family=Iceberg|Montserrat:100,400" rel="stylesheet">
	<?php wp_head(); ?>
	<style>
		div.video_link {
			background-image: url(<?php echo '"'.get_template_directory_uri() . '/images/video.png"'; ?>);
		}
	</style>
</head>

<body <?php body_class(); ?>>
	<div id="content" class="content">
	<nav>
		<ul>
			<li onclick="display_menu('left');"><i class="fas fa-bars"></i></li>
			<li>Tom Curphey</li>
			<li onclick="display_menu('right');"><i class="fas fa-sort-amount-up"></i></li>
		</ul>
	</nav>
	<section id="left" class="left_menu" >
		<ul>
			<li>
				<div><img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey"></div>
				<div>
					<h4>Contact</h4>
					<p>Reach out & connect with me</p>
					<p>tom@tomcurphey.com</p>
					<p>0428 438 348</p>
				</div>
			</li>
			<li>
				<div><img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey"></div>
				<div>
					<h4>Free Lancing</h4>
					<p>List of services I provide</p>
				</div>
			</li>
			<li>
				<div><img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey"></div>
				<div>
					<h4>Case Studies</h4>
					<p>Details overview of my workflow on previous projects</p>
				</div>
			</li>
			<li>
				<div><img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey"></div>
				<div>
					<h4>Clients</h4>
					<p>My past work & projects</p>
				</div>
			</li>
			<li>
				<div><img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey"></div>
				<div>
					<h4>Brands</h4>
					<p>My own start ups & projects</p>
				</div>
			</li>
			<li>
				<div><img src="<?php echo get_template_directory_uri(); ?>/images/tom.jpg)" alt="Introducing Tom Curphey"></div>
				<div>
					<h4>Vlog</h4>
					<p>Daily experience of being Tom Curphey</p>
				</div>
			</li>
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
				<span>
					COMMUNICATION
				</span>
			</li>
			<li>
				<span>
					EMPATHY / EMOTIONAL INTELLIGENCE
				</span>
			</li>
			<li>
				<span>
					DISCIPLINE  / WORK ETHIC
				</span>
			</li>
		</ul>
	</section>