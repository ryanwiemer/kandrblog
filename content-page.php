<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package themeHandle
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post__header">
		<h2 class="post__title"><?php the_title(); ?></h2>
	</header><!-- .post-header -->

	<div class="post__content">
		<?php the_content(); ?>
	</div><!-- .post__content -->
</article><!-- article -->
