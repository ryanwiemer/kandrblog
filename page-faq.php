<?php
/**
 * FAQ Page Template
 */

get_header(); ?>

<div class="container">
				<header class="page__header">
					<h2 class="page__title">Facts And Questions</h2>
				</header>
					<div class="main">
						<ul class="faq">
							<?php if( get_field('faqs')): ?>
								<?php while(has_sub_field('faqs')): ?>
						      <li class="faq__question">
										<p>
											<?php the_sub_field('question') ?>
										</p>
									</li>
									<li class="faq__answer">
										<?php the_sub_field('answer');?>
									</li>
								<?php endwhile; endif; ?>
						</ul>
					</div>
					<div class="sidebar sidebar--faq" role="complementary">
						<h3 class="sidebar__title">FAQ suggestions?</h3>
						<a href="<?php echo get_site_url() ?>/contact" class="btn btn--sidebar">Email us</a>
					</div>
</div>
<?php get_footer(); ?>
