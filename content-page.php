<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package themeHandle
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry__header">
		<h2 class="entry__title"><?php the_title(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry__content">
		<?php the_content(); ?>
	</div><!-- .entry__content -->
</article><!-- article -->
