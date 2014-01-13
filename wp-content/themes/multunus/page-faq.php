<?php
  /*
   Template Name: FAQ
   */
?>

<?php get_header(); the_post(); ?>

<section class="career-faq">
  <div class="container">
    <div class="row">

      <div class="col-md-9">
        <?php the_content(); ?>
      </div>

    </div><!-- end of row -->
  </div><!-- end of container -->
</section>

<?php get_footer(); ?>
