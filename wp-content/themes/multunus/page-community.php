<?php
/**
 * Template Name: Community
 */
get_header();
?>

<div id="community" class="container">
  <section id="community-love" class="align-center">
    <h1>We <img src="/img/continuous-delivery/heart.png" class="heart" /> our community.</h1>
  </section>

  <?php get_template_part('blog-events-opensource'); ?>

</div><!-- end of #community -->

<?php get_footer(); ?>
