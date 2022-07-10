<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/favicon.png" sizes="96x96">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="wrapper">
		<?php wp_body_open(); ?>
		<header>
			<div class="header-container">
				<div class="header-left">
					<?php
					$defaults = array(
						'menu'                 => '',
						'container'            => 'nav',
						'container_class'      => '',
						'container_id'         => '',
						'container_aria_label' => '',
						'menu_class'           => 'menu',
						'menu_id'              => '',
						'echo'                 => true,
						'fallback_cb'          => 'wp_page_menu',
						'before'               => '',
						'after'                => '',
						'link_before'          => '',
						'link_after'           => '',
						'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'item_spacing'         => 'preserve',
						'depth'                => 0,
						'walker'               => '',
						'theme_location'       => '',
					);
					wp_nav_menu($args);
					?>
					<!--<nav class="nav">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
						<a class="nav-link" href="#">Privacy</a>
						<a class="nav-link" href="#contact">Contact</a>
					</nav> -->
				</div>
				<div class="header-center">
					<div class="logo">
						<a href="#">Yves Courtois</a>
					</div>
				</div>
				<div class="header-right">
					<div class="social-bar">
						<a href="https://twitter.com/YvesCourtois9" target="_blank"><i class="twitter"></i></a>
						<a href="https://instagram.com/yvescourtois11" target="_blank"><i class="instagram"></i></a>
						<a href="https://github.com/yvescourtois7" target="_blank"><i class="github"></i></a>
					</div>
				</div>
			</div>
		</header>