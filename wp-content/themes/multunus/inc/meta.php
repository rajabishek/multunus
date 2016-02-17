<?php if (!is_singular('open_source')) { ?>
  <div class="authors">By
    <?php
    if(function_exists(coauthors_posts_links)) {
        coauthors_posts_links();
    } ?>
  </div>

<ul class="meta">
  <li>
    <?php
      if(function_exists(estimated_reading_time)) {
        estimated_reading_time();
      }
    ?>
  </li>

    <li><?php the_time('M j, Y') ?></li>
    <?php //comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
</ul>
<?php } ?>

<ul class="social-share hidden-xs">
  <?php get_template_part('/shared_partials/social-links'); ?>
</ul>
