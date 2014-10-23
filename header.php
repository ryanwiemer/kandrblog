<?php
/**
 *Theme Header
 */
?><!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
  <title><?php wp_title('|', true, 'right'); ?></title>
  <script src="//use.typekit.net/fqx1jej.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
      <nav class="site-header__nav">
        <div class ="site-logo"></div>
            <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'container' => 'ul', 'menu_class' => '', 'container_class' => '') ); ?>
      </nav>
</header>
