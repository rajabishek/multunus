<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="author" content="Multunus">

  <?php if (is_search()) { ?>
    <meta name="robots" content="noindex, nofollow" />
  <?php } ?>

  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php if (!is_front_page()): ?>
    <header>
      <div class="navbar navbar-default">
          <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar b1"></span> <span class="icon-bar b2"></span> <span class="icon-bar b3"></span> </button> 
                  <a href="/"><img src="/img/header-logo.png"></a>
              </div>
              <div class="navbar-collapse collapse">
                  <ul id="main-nav" class="nav navbar-nav navbar-right">
                      <?php
                        wp_nav_menu( array(
                          'menu'              => 'primary',
                          'theme_location'    => 'primary',
                          'depth'             => 2,
                          'container'         => 'div',
                          'menu_class'        => 'nav navbar-nav',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                        );
                      ?>
                </ul>
              </div>
          </div>
      </div>
    </header>
  <?php else: ?>
    <div id="main-header">
      <div class="navbar navbar-default navbar-fat navbar-clean">
          <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar b1"></span> <span class="icon-bar b2"></span> <span class="icon-bar b3"></span> </button> 
                  <a href="/"><img src="/img/header-logo.png"></a>
              </div>
              <div class="navbar-collapse collapse">
                  <ul id="main-nav" class="nav navbar-nav navbar-right">
                      <li><a href="/portfolio">Portfolio</a></li>
                      <li><a href="/process">Process</a></li>
                      <li><a href="/services">Services</a></li>
                      <li><a href="/team">Team</a></li>
                      <li><a href="/community">Community</a></li>
                      <li><a href="/careers">Careers</a></li>
                      <li><a href="/contact">Contact Us</a></li>
                </ul>
              </div>
          </div>
      </div>
    </div>
  <? endif; ?>
