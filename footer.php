<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tailwind_Theme
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info py-2 text-center text-white bg-blue-400">
		copyright 2023
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<?php if (WP_DEBUG) : ?>
	<script type="module" src="http://127.0.0.1:5173/@vite/client"></script>
	<script type="module" src="http://127.0.0.1:5173/main.js"></script>
<?php endif ?>
</body>

</html>