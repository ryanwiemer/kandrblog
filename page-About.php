<?php
/**
 * About Page Template
 */

get_header(); ?>

<div class="container">
	<header class="page__header">
		<h2 class="page__title">About Kirsten &amp; Ryan</h2>
	</header>
		<?php while ( have_posts() ) : the_post(); ?>
				<div class="hero">
					<?php if ( has_post_thumbnail() ) {  the_post_thumbnail(); } ?>
				</div>
				<div class="main">
					<div class="page__content">
						<?php the_content(); ?>
					</div>
				</div>
		<?php endwhile; ?>

		<div class="sidebar sidebar--about" role="complementary">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kirsten_likes.jpg" alt="Things Kirsten likes" class="about-img" />
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ryan_likes.jpg" alt="Things Ryan likes" class="about-img" />
		</div>
</div>

<?php get_footer(); ?>
