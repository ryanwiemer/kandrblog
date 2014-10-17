<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 *
 * @package themeHandle
 */

get_header(); ?>

<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

</div><!-- .container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
