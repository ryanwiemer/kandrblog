<?php
/**
 * The default template for displaying content
 *
 * @package themeHandle
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
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'themeTextDomain' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry__content -->

	<footer class="entry__meta">

		<?php the_tags( '<div class="post-tags">' . __( 'Tagged: ', 'themeTextDomain' ) , ', ', '</div>' ); ?>

		<div class="comments-link">
			<?php comments_popup_link(
				 __( 'Leave a comment', 'themeTextDomain' ),
				 __( '1 comment', 'themeTextDomain' ),
				 __( '% comments', 'themeTextDomain' ) );
			?>
		</div>
	</footer><!-- #entry__meta -->
</article><!-- #post-<?php the_ID(); ?> -->
