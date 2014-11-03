<?php
/**
 * Archvie Page Template
 */

get_header(); ?>

<div class="container">
	<header class="page__header">
		<h2 class="page__title archive__title">Archives</h2>
	</header><!-- .entry-header -->
	<div class="page__content archive__content">

	<ul class="archive">
	<?php
	$all_posts = get_posts(array(
	  'posts_per_page' => -1 // to show all posts
	));

	// this variable will contain all the posts in a associative array
	// with three levels, for every year, month and posts.

	$ordered_posts = array();

	foreach ($all_posts as $single) {

	  $year  = mysql2date('Y', $single->post_date);
	  $month = mysql2date('F', $single->post_date);

	  // specifies the position of the current post
	  $ordered_posts[$year][$month][] = $single;
	}
	// iterates the years
	foreach ($ordered_posts as $year => $months) { ?>

	<li class="archive__year">
	    <h3><?php echo $year ?></h3>
	    <?php foreach ($months as $month => $posts ) { // iterates the moths ?>
	      <li class="archive__month">
	        <h4><?php printf("%s", $month, count($months[$month])) ?></h4>
	          <?php foreach ($posts as $single ) { // iterates the posts ?>
	            <li class="archive__link">
	              <a href="<?php echo get_permalink($single->ID); ?>"><?php echo get_the_title($single->ID); ?></a> </li>
	            </li>
						</li>
	        <?php } ?>
	      </li>
	    <?php } ?>
	 <?php } ?>
	</ul><!-- .archives -->
	</div><!-- .page__content -->
	<div class="sidebar sidebar--faq" role="complementary">
		<h3 class="sidebar__title">Post suggestions?</h3>
		<a href="<?php echo get_site_url() ?>/contact" class="btn btn--sidebar">Email us</a>
	</div>




</div><!-- .container -->
<?php get_footer(); ?>
