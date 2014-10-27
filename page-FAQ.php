<?php
/**
 * About Page Template
 */

get_header(); ?>

<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

				<header class="page__header faq__header">
					<h2 class="page__title faq__title">Facts And Questions</h2>
					<?php
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail();
						}
						?>

				</header><!-- .entry-header -->


				<div class="page__content faq__content">
					<ul class="faq">
						<li class="faq__question">Cum sociis natoque penatibus et.</li>
						<li class="faq__answer">Ut nibh nulla, malesuada at ornare sed, facilisis ut ligula. Donec at nisi diam. Cras facilisis auctor velit vitae convallis. Nam venenatis a ex lobortis eleifend. Nam id viverra mi. Mauris ac accumsan augue. Donec ac lobortis arcu, at vestibulum turpis. In hac habitasse platea dictumst. Maecenas placerat, justo eu pulvinar volutpat, nulla dui pharetra tellus, non vestibulum ante massa ut lorem.</li>
						<li class="faq__question">Proin a sodales neque, a.</li>
						<li class="faq__answer">Duis tincidunt massa tincidunt, lobortis ligula a, mollis lectus. Aenean quis egestas neque, ac sodales enim. Praesent massa urna, sodales ac orci a, varius facilisis eros. Nam egestas semper justo, ut convallis lorem. Nam lorem erat, aliquet a diam id, pulvinar feugiat orci. Aliquam erat volutpat. Nullam in tincidunt lacus. Vestibulum rutrum eleifend nulla, non lacinia nibh vestibulum vel. Proin odio sapien, ultricies sit amet ex eu, suscipit fermentum risus. Phasellus faucibus accumsan justo at suscipit. Nunc ut eros ut sem consectetur vehicula eget nec mauris. Praesent eget lacus bibendum, gravida nunc nec, commodo elit. Aliquam eget varius metus, at tristique felis.</li>
					</ul>
				</div><!-- .page__content -->

		<?php endwhile; // end of the loop. ?>
</div><!-- .container -->
<?php get_footer(); ?>
