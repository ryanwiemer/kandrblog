<?php
/**
 * FAQ Page Template
 */

get_header(); ?>

<div class="container">
				<header class="page__header">
					<h2 class="page__title">Facts And Questions</h2>
				</header><!-- .entry-header -->
					<div class="page__content faq__content">
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
					</div><!-- .page__content -->
</div><!-- .container -->
<?php get_footer(); ?>
