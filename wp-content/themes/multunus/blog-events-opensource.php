<section id="community-links">
  <div class="row">
    <div class="col-md-4 link-box" id="blog-posts" >
      <h3><a href="/blog">/Blog</a></h3>
      <?php query_posts('posts_per_page=3&paged=' . $paged); ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post-title blog">
          <a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?>
            <br/>
            <span class="community-meta-data">
              <?php echo human_time_diff( get_the_time('U', true), current_time('timestamp') ) . ' ago'; ?>
            </span>

          </a>
        </div>
      <?php endwhile; endif; ?>
      <a class="view-all-link" href="/blog">View all</a>
    </div>

    <div class="col-md-4 link-box" id="events" >
      <h3><a href="/events">/Events</a></h3>

      <?php
        $today =  current_time ('timestamp');

        $args = array(
          'post_type' => 'ajde_events',
          'meta_key' => 'evcal_srow',
          'orderby'   => 'meta_value_num',
          'order' => 'ASC',
          'post_status' => 'publish',
          'posts_per_page' => 3,
          'meta_query' => array(
             array(
               'key' => 'evcal_srow',
               'value' => $today,
               'compare' => '>',
             )
          )
        );

        $my_query = new WP_Query($args);

        while ($my_query->have_posts()) : $my_query->the_post();

          $start_time = get_post_meta(get_the_ID(), 'evcal_erow', true); ?>

          <div class="post-title blog">
            <a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?>
              <br/>
              <span class="community-meta-data">
                <?php echo date('F d', $start_time); ?>
              </span>
            </a>
          </div>

       <?php endwhile;  wp_reset_query(); ?>

      <a class="view-all-link" href="/events">View all</a>

    </div>

    <div class="col-md-4 link-box" id="open-source-projects" >
      <h3><a href="/open-source">/OpenSource</a></h3>
      <?php query_posts('post_type="open_source"&posts_per_page=3&paged=' . $paged); ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post-title open-source">
          <a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a>
        </div>
      <?php endwhile; endif; ?>
      <a class="view-all-link" href="/open-source">View all</a>
    </div>
  </div>
</section>
