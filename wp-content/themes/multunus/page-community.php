<?php
/**
 * Template Name: Community
 */
get_header();
?>

<div class="community">
  <div class="jumbotron red-jumbo">
    <div class="jumbo-content">
      <h1>We Do Things Differently.</h1>
    </div>
  </div>

  <div class="content-section">
    <article class="content-tabs">
      <ul class="container">
        <li class="col-sm-3 col-xs-6 tab active"><a href="#blog" data-toggle="tab">Blog</a></li>
        <li class="col-sm-3 col-xs-6 tab"><a href="#events" data-toggle="tab">Events</a></li>
        <li class="col-sm-3 col-xs-6 tab"><a href="#open_source" data-toggle="tab">Open Source</a></li>
      </ul>
    </article>
  </div><!-- end of content-section -->

  <div class="tab-content post">
    <section class="tab-pane fade in active" id="blog">
      <?php get_template_part('community-blog'); ?>
    </section>

    <section class="tab-pane fade in" id="events">
    </section>

    <section class="tab-pane fade in" id="open_source">
      <?php get_template_part('community-open-source'); ?>
    </section>
  </div>

</div><!-- end of community -->

<?php get_footer(); ?>
