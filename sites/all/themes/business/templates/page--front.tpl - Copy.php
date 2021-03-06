<div id="wrap">

  <header id="header" class="clearfix" role="banner">

    <div>
      <?php if ($logo): ?>
       <div id="logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        </div>
      <?php endif; ?>
      <hgroup id="sitename">
        <h2><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h2>
        <p><?php if ($site_slogan): ?><?php print $site_slogan; ?><?php endif; ?></p><!--site slogan-->
      </hgroup>
    </div>
	
    <nav id="navigation" class="clearfix" role="navigation">
      <div id="main-menu">
        <?php 
          if (module_exists('i18n_menu')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
          } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
          }
          print drupal_render($main_menu_tree);
        ?>
      </div>
    </nav><!-- end main-menu -->
  </header>
  
  <?php print render($page['header']); ?>
  
    <?php if (theme_get_setting('slideshow_display','business')): ?>
    <?php 
    $url1 = check_plain(theme_get_setting('slide1_url','business'));
    $url2 = check_plain(theme_get_setting('slide2_url','business'));
    $url3 = check_plain(theme_get_setting('slide3_url','business'));
    ?>
      <div id="slider">
        <div class="main_view">
            <div class="window">
                <div class="image_reel">
                    <a href="<?php print url($url1); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'business') . '/images/slide-image-1.jpg'; ?>"></a>
                    <a href="<?php print url($url2); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'business') . '/images/slide-image-2.jpg'; ?>"></a>
                    <a href="<?php print url($url3); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'business') . '/images/slide-image-3.jpg'; ?>"></a>
                </div>
                <div class="descriptions">
                    <div class="desc" style="display: none;"><?php print check_markup(theme_get_setting('slide1_desc','business')); ?></div>
                    <div class="desc" style="display: none;"><?php print check_markup(theme_get_setting('slide2_desc','business')); ?></div>
                    <div class="desc" style="display: none;"><?php print check_markup(theme_get_setting('slide3_desc','business')); ?></div>
                </div>
            </div>
        
            <div class="paging">
                <a rel="1" href="#">1</a>
                <a rel="2" href="#">2</a>
                <a rel="3" href="#">3</a>
            </div>
        </div>
      </div><!-- EOF: #banner -->
	<?php endif; ?>  


  <?php //print $messages; ?>

  <?php if ($page['homequotes']): ?>
  <div id="home-quote"> <?php print render($page['homequotes']); ?></div>
  <?php endif; ?>
  
  <?php if ($page['home_high1'] || $page['home_high2'] || $page['home_high3']): ?>
    <div id="home-highlights" class="clearfix">
     <?php if ($page['home_high1']): ?>
     <div class="home-highlight-box"><?php print render($page['home_high1']); ?></div>
     <?php endif; ?>
     <?php if ($page['home_high2']): ?>
     <div class="home-highlight-box"><?php print render($page['home_high2']); ?></div>
     <?php endif; ?>
     <?php if ($page['home_high3']): ?>
     <div class="home-highlight-box remove-margin"><?php print render($page['home_high3']); ?></div>
     <?php endif; ?>
    </div>
  <?php endif; ?>
  
  <?php if (theme_get_setting('show_front_content') == 1): ?>
    <div id="main" class="clearfix">
      <section id="post-content" role="main">
        <?php if ($page['content_top']): ?><div id="content_top"><?php //print render($page['content_top']); ?></div><?php endif; ?>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php //print render($page['content']); ?>
      </section> <!-- /#main -->

      <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar" role="complementary" class="sidebar clearfix">
         <?php print render($page['sidebar_first']); ?>
        </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>
    </div>
    <div class="clear"></div>
  <?php endif; ?>
  
  <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']): ?>
    <div id="footer-saran" class="clearfix">
     <div id="footer-wrap">
      <?php if ($page['footer_first']): ?>
      <div class="footer-box"><?php print render($page['footer_first']); ?></div>
      <?php endif; ?>
      <?php if ($page['footer_second']): ?>
      <div class="footer-box"><?php print render($page['footer_second']); ?></div>
      <?php endif; ?>
      <?php if ($page['footer_third']): ?>
      <div class="footer-box"><?php print render($page['footer_third']); ?></div>
      <?php endif; ?>
      <?php if ($page['footer_fourth']): ?>
      <div class="footer-box remove-margin"><?php print render($page['footer_fourth']); ?></div>
      <?php endif; ?>
     </div>
    </div>
    <div class="clear"></div>
  <?php endif; ?>
  
  <!--END footer -->
  <?php print render($page['footer']) ?>
  
  <?php if (theme_get_setting('footer_copyright') || theme_get_setting('footer_credits')): ?>
  <div class="clear"></div>
  <div id="copyright">
    <?php if ($footer_copyright): ?>
      <?php print $footer_copyright; ?>
    <?php endif; ?>
    <?php if (theme_get_setting('footer_credits')): ?>
      <span class="credits"><?php print t('Designed by'); ?>  <a href="http://www.chopmydesign.com">chopmydesign</a>.</span>
    <?php endif; ?>
  </div>
  <?php endif; ?>
</div>
