<?php
/**
 * Page Template
 */

get_header(); ?>

<div class="container">
	<?php get_sidebar(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

</div><!-- .container -->
<?php get_footer(); ?>
