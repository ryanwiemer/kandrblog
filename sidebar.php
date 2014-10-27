<?php
/**
 * Sidebar Template
 */

?>
<div class="sidebar" role="complementary">
  <div class="sidebar__img__container">
  <div class="sidebar__img"></div>
</div>
  <h3 class="sidebar__title">Follow K&amp;R Blog</h3>
    <div class="sidebar__social">
      <a href="https://twitter.com/Kirstennoellew"><span class="icon-twitter"></span></a>
      <a href="http://instagram.com/kirstennoellew"><span class="icon-instagram"></span></a>
      <a href="http://www.pinterest.com/kirstennoellew/"><span class="icon-pinterest"></span></a>
      <a href="http://www.bloglovin.com/en/blog/3862566"><span class="icon-bloglovin"></span></a>
    </div>

    <div class="sidebar__archives">
      <h3 class="sidebar__title">View Archives</h3>
        <div class="sidebar__archives__trigger">Select a month<span>&#x25BC;</span></div>
    <ul class="sidebar__archives__dropdown">
      <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'html', 'show_post_count' => 0 ) ); ?>
    </ul>
    </div>

</div><!-- .sidebar -->
