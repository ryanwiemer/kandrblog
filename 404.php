<?php
/**
 * 404 Template
 */

get_header(); ?>

<div class="container">
	<?php get_sidebar(); ?>

	<article class="post error404 not-found">
		<header class="entry-header">
			<h2 class="entry-title"><?php _e( 'Uh oh!', 'themeTextDomain' ); ?></h2>
		</header>

		<div class="entry-content">
			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps a search would help?', 'themeTextDomain' ); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .entry-content -->
	</article>

</div><!-- .container -->
<?php get_footer(); ?>
