<?php
/**
 * Header
 */
?><!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
  <title><?php wp_title('|', true, 'right'); ?></title>
  <script src="//use.typekit.net/fqx1jej.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <?php wp_head(); ?>
   <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-40059058-1', 'kandrblog.com');
    ga('send', 'pageview');
  </script>
</head>
<body <?php body_class('loading'); ?>>
<header class="site-header">
  <a class="site-logo" href="<?php echo get_site_url() ?>"><h1>K&amp;R Blog</h1></a>
  <nav class="site-header__nav">
    <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'container' => false, 'menu_class' => '', 'container_class' => '') ); ?>
    <?php get_search_form(); ?>
  </nav>
</header>
