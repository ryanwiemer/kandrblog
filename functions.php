<?php
/**
 * K&R Blog Theme Functions
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



////////////////////////
//Edits to Image Output/
////////////////////////

//Featured Images
add_theme_support( 'post-thumbnails');



//Set default to no link on images
function wpb_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );
    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);



//Remove <p> tags from images
function filter_ptags_on_images($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

//Remove Image Dimensions
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

// Removes attached image sizes as well
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );
function remove_thumbnail_dimensions( $html ) {
  		$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  		return $html;
}

//Remove Attachement Dimensions
add_shortcode( 'wp_caption', 'fixed_img_caption_shortcode' );
add_shortcode( 'caption', 'fixed_img_caption_shortcode' );
function fixed_img_caption_shortcode($attr, $content = null) {
  if ( ! isset( $attr['caption'] ) ) {
     if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
     $content = $matches[1];
     $attr['caption'] = trim( $matches[2] );
     }
  }
  $output = apply_filters( 'img_caption_shortcode', '', $attr, $content );
     if ( $output != '' )
     return $output;
  extract( shortcode_atts(array(
  'id'      => '',
  'align'   => 'alignnone',
  'width'   => '',
  'caption' => ''
  ), $attr));
  if ( 1 > (int) $width || empty($caption) )
  return $content;
  if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
  return '<p ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'
  . do_shortcode( $content ) . '<span class="wp-caption-text">' . $caption . '</span></p>';
}

//Featured Image Support and removing some file sizes
add_theme_support( 'post-thumbnails');
function trickspanda_remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    //unset( $sizes['medium']);
    unset( $sizes['large']);
    unset( $sizes['full']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'trickspanda_remove_default_image_sizes');



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
  wp_enqueue_script( 'kandrblog-scripts',  get_template_directory_uri() . '/assets/js/scripts.min.js', '', '', true);
  wp_enqueue_script( 'kandrblog-modernizr',  get_template_directory_uri() . '/assets/js/vendor/modernizr.min.js');
}

function contact_scripts() {
  if( is_page('Contact')) {
  wp_enqueue_script( 'kandrblog-jquery-contact',  get_template_directory_uri() . '/assets/js/contact.min.js', '', '', true);
}}

add_action( 'wp_enqueue_scripts', 'kandrblog_scripts');
add_action( 'wp_enqueue_scripts', 'contact_scripts');
