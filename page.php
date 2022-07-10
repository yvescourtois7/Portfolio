<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */

get_header();
?>
<main>
	<div class="site-title">
		<div class="container">
			<?php if(is_page( 'Privacy' )) { ?>
				<h1 class="site-title"><?php wp_title(); ?></h1>
			<?php } ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
					the_content();
				endwhile;
			else : ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>
</main>
<?php
get_footer();
