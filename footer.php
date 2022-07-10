<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>

<footer>
	<div class="footer-container">
		<div class="container">	
				<?php if(dynamic_sidebar('footer-1')) : else : endif; ?>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
<script>
	var elem = document.getElementById("menu-item-17");
    elem.classList.remove("current_page_item");
</script>
</body>
</html>