<?php
/**
 * Search Page Template
 */

get_header(); ?>

<div class="container">

<div class="main">
	<?php if ( have_posts() ) : ?>

		<header class="search__header">
			<h2 class="search__title page__title"><?php printf( __( 'Search Results for: %s', 'themeTextDomain' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		</header>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				get_template_part( 'content');
			?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

</div>
<?php get_sidebar(); ?>

</div><!-- .container -->

<div class="page-nav">
	<?php posts_nav_link(' ','Newer Posts &#8594;','&#8592; Older Posts'); ?>
</div>


<?php get_footer(); ?>
