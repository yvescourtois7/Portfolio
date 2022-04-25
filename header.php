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
					<nav class="nav">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
						<a class="nav-link" href="#">Privacy</a>
						<a class="nav-link" href="#">Contact</a>
					</nav>
				</div>
				<div class="header-center">
					<div class="logo">
						<a href="#">Yves Courtois</a>
					</div>
				</div>
				<div class="header-right">
					<div class="social-bar">
						<a href="#">Twitter</a>
						<a href="#">Instagram</a>
					</div>
				</div>
			</div>
		</header>