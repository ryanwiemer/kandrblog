<?php
/**
 * Content-Single Template
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry__header">
			<h2 class="entry__title">
				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themeTextDomain' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			<span class="entry__date"><?php echo get_the_date(); ?></span>
	</header><!-- .entry__header -->

	<div class="entry__content">
		<?php the_content(); ?>
	</div><!-- .entry__content -->

	<footer class="entry__meta">
		<ul class="entry__categories">
			<?php wp_list_categories('title_li='); ?>
		</ul>	</footer><!-- .entry__meta -->
</article><!-- article -->
