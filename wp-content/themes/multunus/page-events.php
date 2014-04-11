<?php
  /* Template Name: Events */
  get_header();
?>

<?php
  $my_query = new WP_Query('post_type=ajde_events&posts_per_page=-1');
  while ($my_query->have_posts()) : $my_query->the_post();

    $upcomint_events_count = 0;
    $curr_time =  current_time ('timestamp');
    $end_time = get_post_meta(get_the_ID(), 'evcal_erow', true);

    if (eventon_is_future_event($curr_time, $end_time, 'yes'))
      $upcoming_events_count++;

  endwhile;  wp_reset_query();

  $total_events_count = wp_count_posts('ajde_events')->publish;
  $past_events_count = $total_events_count - $upcoming_events_count;
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="page" id="page-events">

    <section class="container">
      <h1 class="align-left">Upcoming Events (<?php echo $upcoming_events_count; ?>)</h1>
      <div class="upcoming-events">
        <?php echo do_shortcode('[add_eventon_list cal_id="1" number_of_months="5" hide_empty_months="yes" show_year="yes" jumper="yes" hide_past="yes"]'); ?>
      </div>
      <div class="past-events">
        <h1 class="align-left">Past Events (<?php echo $past_events_count; ?>)</h1>
        <?php echo do_shortcode('[add_eventon_el cal_id="2" el_type="pe" pec="ct" number_of_months="12" event_count="20" etop_month="no" ]'); ?>
      </div>
    </section>

  </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
