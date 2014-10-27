<?php
/**
 * About Page Template
 */

get_header(); ?>

<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

				<header class="contact__header">
					<h2 class="contact__title page__title">Get In Contact</h2>
					<?php
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail();
						}
						?>
				</header><!-- .entry-header -->

				<div class="contact__content page__content">
					<?php the_content(); ?>
				</div><!-- .entry__content -->

		<?php endwhile; // end of the loop. ?>
</div><!-- .container -->
<?php get_footer(); ?>
