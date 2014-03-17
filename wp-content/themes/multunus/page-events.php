<?php
  /* Template Name: Events */
  get_header();
?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="page" id="page-events">

      <section class="container quote-header">
        <h1 class="align-left"><?php the_title(); ?></h1>
      </section>

      <section class="container">
        <?php the_content(); ?>
      </section>

    </div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>