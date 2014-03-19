<?php
  /* Template Name: Events */
  get_header();
?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="page" id="page-events">

      <section class="container">
        <div class="col-md-7">
          <h1 class="align-left"><?php the_title(); ?></h1>
          <?php echo do_shortcode('[add_eventon_list cal_id="1" number_of_months="5" hide_empty_months="yes" show_year="yes" jumper="yes" hide_past="yes"]'); ?>
        </div>
        <div class="col-md-4 col-md-offset-1">
          <h3 class="align-left">Past Events</h3>
          <?php echo do_shortcode('[add_eventon_el cal_id="2" el_type="pe" pec="cd" event_count="5" etop_month="no" ]'); ?>
        </div>
      </section>

    </div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>