<section id="community-links">
  <div class="row">
    <div class="col-md-4 link-box" id="blog-posts" >
      <h3><a href="/blog">/Blog</a></h3>
      <?php query_posts('posts_per_page=3&paged=' . $paged); ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post-title blog">
          <a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?><br> - <?php the_date( 'F, Y' ); ?></a>
        </div>
      <?php endwhile; endif; ?>
      <a class="view-all-link" href="/blog">View all</a>
    </div>

    <div class="col-md-4 link-box" id="events" >
      <h3><a href="/events">/Events</a></h3>
      <?php echo do_shortcode('[add_eventon_el number_of_months="12" pec="ct" etop_month="no" event_count="3" ]'); ?>
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
