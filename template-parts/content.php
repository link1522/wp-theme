<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tailwind_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (is_singular()) : ?>

		<header class="entry-header">
			<div class="mb-6">
				<?php the_post_thumbnail(null, ['class' => 'w-full h-full object-cover']); ?>
			</div>

			<?php
			the_title('<h1 class="entry-title">', '</h1>');

			if ('post' === get_post_type()) :
			?>
				<div class="entry-meta mb-4">
					<?php
					tailwindtheme_posted_on();
					tailwindtheme_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header>

		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', '_s'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', '_s'),
					'after'  => '</div>',
				)
			);
			?>
		</div>

	<?php else : ?>

		<div class="md:grid-cols-[40%_auto] grid gap-8 items-center">
			<?php // tailwindtheme_post_thumbnail();
			?>

			<a href="<?php echo esc_url(get_permalink()) ?>" class="h-full">
				<?php the_post_thumbnail(null, ['class' => 'w-full h-full object-cover']); ?>
			</a>

			<div>
				<?php
				the_title('<h2 class="entry-title mb-1"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');

				if ('post' === get_post_type()) :
				?>
					<div class="entry-meta mb-4">
						<?php
						tailwindtheme_posted_on();
						tailwindtheme_posted_by();
						?>
					</div>
				<?php endif ?>

				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div>

				<footer class="entry-footer mt-4 mb-6">
					<?php tailwindtheme_entry_footer(); ?>
				</footer>
			</div>
		</div>

	<?php endif ?>

</article><!-- #post-<?php the_ID(); ?> -->