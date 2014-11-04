<?php
/**
 * About Page Template
 */

get_header(); ?>

<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
				<header class="page__header">
					<h2 class="page__title">About Kirsten &amp; Ryan</h2>
				</header><!-- .entry-header -->
				<div class="hero">
					<?php if ( has_post_thumbnail() ) {  the_post_thumbnail(); } ?>
				</div>

				<div class="main">
					<?php the_content(); ?>
				</div><!-- .entry__content -->
		<?php endwhile; ?>
</div><!-- .container -->

<?php get_footer(); ?>
