<?php
  /* Template Name: Events */
  get_header();
?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="page" id="page-events">

      <section class="container">
        <h1 class="align-left col-md-12"><?php the_title(); ?></h1>
        <div class="col-md-7 upcoming-events">
          <?php echo do_shortcode('[add_eventon_list cal_id="1" number_of_months="5" hide_empty_months="yes" show_year="yes" jumper="yes" hide_past="yes"]'); ?>
        </div>
        <div class="col-md-4 col-md-offset-1 past-events">
          <h4 class="align-left">Past Events</h4>
          <?php echo do_shortcode('[add_eventon_el cal_id="2" el_type="pe" pec="cd" event_count="5" etop_month="no" ]'); ?>
        </div>
      </section>

    </div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>