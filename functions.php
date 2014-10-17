<?php
/**
 * K&R Blog theme functions
 *
 */

////////////////////////
//Clean up Wordpress////
////////////////////////

//Remove WP junk in the head
function remove_wp_version() {
return '';
}
add_filter ('the_generator', 'remove_wp_version');
remove_action ('wp_head', 'wp_generator');
remove_action ('wp_head', 'rsd_link');
remove_action ('wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'wp_shortlink_wp_head');
remove_action ('wp_head', 'rel_canonical');
remove_action ('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//Clean up Wordpress Menus
 function custom_wp_nav_menu($var) {
  return is_array($var) ? array_intersect($var, array(
		'current_page_item' // active
		)
	) : '';
}
add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');

//Replaces "current-menu-item" with "active"
function current_to_active($text){
	$replace = array(
		'current_page_item' => 'active'
	);
	$text = str_replace(array_keys($replace), $replace, $text);
		return $text;
	}
add_filter ('wp_nav_menu','current_to_active');
function strip_empty_classes($menu) {
    $menu = preg_replace('/ class=""| class="sub-menu"/','',$menu);
    return $menu;
}
add_filter ('wp_nav_menu','strip_empty_classes');

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

//Add class to pagination buttons
add_filter('next_posts_link_attributes', 'posts_link_attributes_next');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_prev');
function posts_link_attributes_next() {
  return 'class="btn-pagination btn-pagination--next"';
}
function posts_link_attributes_prev() {
  return 'class="btn-pagination btn-pagination--prev"';
}






///////////////////////////
//Theme Specific Functions/
///////////////////////////

//Register Menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );








////////////////////////
//CSS & JS Scripts//////
////////////////////////

//Enqueue scripts and styles.
function kandrblog_scripts() {
  wp_enqueue_style( 'kandrblog-style',  get_stylesheet_directory_uri() . '/assets/css/style.min.css');
  wp_enqueue_script( 'kandrblog-jquery',  get_template_directory_uri() . '/assets/js/jquery.min.js', '', '', true);
  wp_enqueue_script( 'kandrblog-foundation',  get_template_directory_uri() . '/bower_components/foundation/js/foundation.min.js', '', '', true);
  //wp_enqueue_script( 'kandrblog-modernizr',  get_template_directory_uri() . '/assets/js/modernizr.min.js');
  //wp_enqueue_script( 'kandrblog-global-script',  get_template_directory_uri() . '/assets/js/global.min.js', '', '', true);
}

add_action( 'wp_enqueue_scripts', 'kandrblog_scripts');
