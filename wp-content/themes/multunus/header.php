<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="Multunus">

  <?php if (is_search()) { ?>
    <meta name="robots" content="noindex, nofollow" /> 
  <?php } ?>

  <title>
    <?php
    if (function_exists('is_tag') && is_tag()) {
      single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
    elseif (is_archive()) {
      wp_title(''); echo ' Archive - '; }
    elseif (is_search()) {
      echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
    elseif (!(is_404()) && (is_single()) || (is_page())) {
      wp_title(''); echo ' - '; }
    elseif (is_404()) {
      echo 'Not Found - '; }

    if (is_home()) {
      bloginfo('name'); echo ' | '; bloginfo('description'); }
    else {
      bloginfo('name'); }
    if ($paged>1) {
      echo ' - page '. $paged; }
    ?>
	</title>
	
	<link rel="shortcut icon" href="/img/favicon.ico">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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
                                    <div class="navbar-text contact-no"><span class="text-white">Let\'s talk: </span><a class="text-pink" href="tel:+91 80 26590594">+91 80 26590594</a></div>
                                  </div>',
          'walker'            => new wp_bootstrap_navwalker())
        );
      ?>


    </nav>
  </header>
