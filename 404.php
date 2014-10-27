<?php
/**
 * 404 Template
 */

get_header(); ?>

<div class="container">
	<div class="main">

	<article class="post error404 not-found">
		<header class="none__header">
			<h2 class="none__title page__title"><?php _e( 'Uh oh!', 'themeTextDomain' ); ?></h2>
		</header>

		<div class="entry-content">
			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps a search would help?', 'themeTextDomain' ); ?></p>

		</div><!-- .entry-content -->
	</article>
</div>
</div><!-- .container -->
<?php get_footer(); ?>
