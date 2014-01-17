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

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php include_once("analyticstracking.php") ?>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
          <div class="logo-container"></div>
        </a>
      </div>

      <?php
        wp_nav_menu( array(
          'menu'              => 'primary',
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'navbar-collapse',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'items_wrap'        => '<ul class="%2$s">%3$s</ul>
                                  <div class="blinker">
                                    <div class="navbar-text tagline active"><span class="text-white">Disciplined </span><span class="text-pink">Creativity</span></div>
                                    <div class="navbar-text contact-no"><a class="text-white" href="mailto:info@multunus.com">info@multunus.com</a></div>
                                  </div>',
          'walker'            => new wp_bootstrap_navwalker())
        );
      ?>


    </nav>
  </header>

  <?php if(!is_page_template("page-home.php") && function_exists('bcn_display')) {
    echo '<div class="breadcrumbs">';
    bcn_display(); }
    echo '</div>';
  ?>
