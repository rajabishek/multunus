<?php
  /* Template Name: Events */
  get_header();
?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="page" id="page-events">

      <section class="container">
        <h1 class="align-left"><?php the_title(); ?></h1>
        <div class="upcoming-events">
          <?php echo do_shortcode('[add_eventon_list cal_id="1" number_of_months="5" hide_empty_months="yes" show_year="yes" jumper="yes" hide_past="yes"]'); ?>
        </div>
        <div class="past-events">
          <h1 class="align-left">Past Events</h1>
          <?php echo do_shortcode('[add_eventon_el cal_id="2" el_type="pe" pec="ct" number_of_months="12" event_count="20" etop_month="no" ]'); ?>
        </div>
      </section>

    </div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>
