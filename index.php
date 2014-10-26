<?php
/**
 * Index
 */

get_header(); ?>

<div class="container">
	<?php get_sidebar(); ?>

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

</div><!-- .container -->
<div class="page-nav">
	<?php posts_nav_link(' ','Newer Posts &#8594;','&#8592; Older Posts'); ?>
</div>
<?php get_footer(); ?>
