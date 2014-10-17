<?php
/**
 * Single post template
 *
 * @package themeHandle
 */

get_header(); ?>

<div class="container">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php comments_template( '', true ); ?>

	<?php endwhile; // end of the loop. ?>

</div><!-- .container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
