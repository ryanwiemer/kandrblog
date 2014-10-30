<?php
/**
 * About Page Template
 */

get_header(); ?>

<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
				<header class="about__header page__header">
					<h2 class="about__title page__title">About Kirsten &amp; Ryan</h2>
					<?php if ( has_post_thumbnail() ) {  the_post_thumbnail(); } ?>
				</header><!-- .entry-header -->
				<div class="about__content page__content">
					<?php the_content(); ?>
				</div><!-- .entry__content -->
		<?php endwhile; ?>
</div><!-- .container -->

<?php get_footer(); ?>
