<?php
/**
 * Template Name: Continuous Delivery
 */
get_header();
?>

<div id="continuous-delivery" class="container">
  <div class="dotted-arrow hidden-xs">
    <img src="/img/continuous-delivery/dotted-arrow.png" />
  </div>
  <section id="title" class="align-center">
    <h1 class="theme-pink-color">
      WE SHIP
      <div class="separator">
        <img src="/img/continuous-delivery/working.png" id="working"/>
        <img src="/img/continuous-delivery/caret.png" id="caret" />
      </div>
      <span class="visible-xs">WORKING</span>
      SOFTWARE
    </h1>
    <h1>EVERY <span class="bold">TWO</span> DAYS</h1>
  </section>
  <section id="video" class="align-center">
    <iframe src="//www.youtube.com/embed/5CCZUlhk8Jc?list=PLzwGsAhPUVNJbmmxL-QiHTSqgiy8mB2RP&controls=2" frameborder="0" allowfullscreen></iframe>
  </section>
  <section id="community-love" class="align-center">
    <h2>We also <img src="/img/continuous-delivery/heart.png" class="heart" /> our community.</h2>
  </section>

  <?php get_template_part('blog-events-opensource'); ?>

  <section id="platforms" class="align-center">
    <h5><a href="mailto:info@continuousdelivery.in">info@continuousdelivery.in</a></h5>
    <img src="/img/continuous-delivery/platforms.png" />
  </section>

</div>

<?php get_footer(); ?>
