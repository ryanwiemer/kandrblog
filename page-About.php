<?php
/**
 * About Page Template
 */

get_header(); ?>

<div class="container">
	<header class="page__header">
		<h2 class="page__title">About Kirsten &amp; Ryan</h2>
	</header><!-- .entry-header -->
		<?php while ( have_posts() ) : the_post(); ?>
				<div class="hero">
					<?php if ( has_post_thumbnail() ) {  the_post_thumbnail(); } ?>
				</div>
				<div class="main">
					<div class="page__content">
						<?php the_content(); ?>
					</div><!-- .page__content -->
				</div><!-- .main -->
		<?php endwhile; ?>

		<div class="sidebar sidebar--about" role="complementary">
			<img src="http://placehold.it/200x200"  class="about-img" />
			<img src="http://placehold.it/200x200"  class="about-img" />
		</div>

</div><!-- .container -->

<?php get_footer(); ?>
