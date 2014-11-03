<?php
/**
 * Contact Page Template
 */

get_header(); ?>

<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

				<header class="page__header">
					<h2 class="page__title">Get In Contact</h2>
				</header><!-- .entry-header -->

				<div class="contact__content page__content">
					<form class="form" method="post" name="contact" autocomplete="off">
					  <fieldset>
					    <div class="form__name">
								<label class="form__name__label" for="name">Name</label>
					      <input class="form__name__input" name="name" for="name" type="text"/>
					    </div>

					    <div class="form__email">
								<label class="form__email__label" for="email">Email</label>
					      <input class="form__email__input" name="email" for="email" type="text"/>
					    </div>

					    <div class="form__subject">
								<label class="form__subject__label" for="name">Subject</label>
					      <input class="form__subject__input" name="subject" for="subject"  type="text"/>
					    </div>

					    <div class="form__message">
								<label class="form__message__label" for="message">Message</label>
					      <textarea class="form__message__textarea" name="message" for="message" type="text"></textarea>
					    </div>

					    <div class="form__bot">
								<label class="form__bot__label" for="name">Bot</label>
					      <input class="form__bot__input" name="bot" for="bot" placeholder="Spam filter (Leave blank)" type="text"/>
					    </div>

					    <input class="form__submit" name="submit" type="submit" value="send message"/>

					    <div class="form__success">
					      Message sent successfully!
					    </div>
					    <div class="form__error">
					      Error, try again.
					    </div>
					  </fieldset>
					</form>
				</div><!-- .entry__content -->
		<?php endwhile; // end of the loop. ?>
		<div class="sidebar sidebar--contact" role="complementary">
			<h3 class="sidebar__title">Social Media</h3>
			<div class="sidebar__social">
				<a href="https://twitter.com/Kirstennoellew"><span class="icon-twitter"></span></a>
				<a href="http://instagram.com/kirstennoellew"><span class="icon-instagram"></span></a>
				<a href="http://www.pinterest.com/kirstennoellew/"><span class="icon-pinterest"></span></a>
				<a href="http://www.bloglovin.com/en/blog/3862566"><span class="icon-bloglovin"></span></a>
			</div>
			<h3 class="sidebar__title">Photo Questions?</h3>
			<a href="http://knw.io/contact" class="btn btn--sidebar">KNW Photography</a>
		</div>

</div><!-- .container -->
<?php get_footer(); ?>
