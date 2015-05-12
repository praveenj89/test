<style>
.gray-space {
width: 100%;
height: 16px;
background: #f3f3f5;
}
.container.item h2 {
font-weight: 100;
font-size: 20px;
margin-top: 0;
}
.container.item>.left {
width: 400px;
}
.container.item>div {
float: left;
}
.container.item>.right {
width: 400px;
margin-left: 20px;
}
.container.item .links {
padding-top: 15px;
}
.container.item .links a:first-child {
border-top: 0;
}
.container.item .links a {
text-decoration: none;
color: #20a7e2;
cursor: pointer;
font-weight: 100;
display: block;
padding-top: 5px;
padding-bottom: 5px;
border-top: 1px solid #eee;
}
.container.item>.right h3 {
margin-top: 0;
padding-top: 0;
padding-bottom: 40px;
color: #8c8c8c;
font-weight: 100;
text-transform: none;
}

 .container.item>div.icon {
width: 65px;
margin-right: 10px;
}
.container.item {
font-family: "proxima-nova",sans-serif;
font-style: normal;
font-weight: 100;
font-size: 18px;
line-height: 26px;
color: #555;
padding-top: 60px;
padding-bottom: 60px;
}
.blue-space {
background: #236592;
color: #fff;
padding-top: 2px;
padding-bottom: 2px;
}
.blue-space h2 {
margin: 20px auto 20px auto;
color: #fff;
width: 850px;
text-align: center;
font-weight: 100;
font-size: 30px;
line-height: 42px;
}

.introslider a {
 
text-align:center;
text-transform: uppercase;
background: #20a7e2;
color: #fff;
font-weight: 400;
padding: 10px 25px 8px 25px;
border-radius: 5px;
font-size: 22px;
text-decoration: none;
 
}
</style>
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
	<!--
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
      </div> 
	<?php endif;?>  
	 -->

<img src="<?php print base_path() . drupal_get_path('theme', 'business') . '/images/slide-image-1.jpg'; ?>">
  <?php print $messages; ?>

  <div class="blue-space"> <h2>Our highly personalized, interactive tools and calculators can help make big financial decisions easier. </h2> </div>
   
 <div class="container item clearfix"> 
 <div class="icon"> 
	<img src="//d1l53avkert0hz.cloudfront.net/files/4475/images/landing/ret.png"> 
 </div>
 <div class="left"> <h2>Convertion</h2> We help take the mystery out of retirement planning by answering some of the most commonly asked questions in a simple, personalized way. 

 
 </div> 
 <div class="right"> 
 <h2>Design and Development</h2>We help take the mystery out of retirement planning by answering some of the most commonly asked questions in a simple, personalized way. 
 </div>

 </div>
  <div class="gray-space"></div>
  <bR>
  <center>
  <div class="introslider">
		<a href="#">Find more</a>
  </div>
  </center>
  
  
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
