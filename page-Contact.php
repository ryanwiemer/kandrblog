<?php
/**
 * Contact Page Template
 */

get_header(); ?>

<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

				<header class="contact__header">
					<h2 class="contact__title page__title">Get In Contact</h2>
				</header><!-- .entry-header -->

				<div class="contact__content page__content">
					<?php the_content(); ?>
				</div><!-- .entry__content -->

		<?php endwhile; // end of the loop. ?>

</div><!-- .container -->
<?php get_footer(); ?>
