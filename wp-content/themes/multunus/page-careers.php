<?php
  /*
   Template Name: Careers
   */
?>

<?php get_header(); ?>
<div class="video-section-container career-page">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">What Should "Work" Mean Today?</h1>
    <!-- <h2 style="color:white"> -->
      <!-- <span>Autonomous Culture | Open Source | Large Scale Architectures</span> -->
       <!-- </h2> -->
      <div data-toggle="scroll" rel="#more-info" class="btn-red">Read More<span></span></div>
    </div>
  </div>
  <video autoplay="autoplay" loop="loop" preload="auto" poster="/img/careers-page-poster.jpeg" data-video-name="careers">
  </video>
</div>
<article id="more-info" class="career-values">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <h1>What Should "Work" Mean Today?</h1>
      </div>

      <div class="col-md-7 why-work-here">
        <ul class="arrow-list-style">
          <li><span> Making a difference | Charity & Health </span></li>
          <li><span> Making a difference | Impactful Work </span></li>
          <li><span> Making a difference | <a href="http://www.multunus.com/community/" target="_blank"> Community </a></span></li>
          <li><span> Making a difference | Creating Better Teams </span></li>
        </ul>
      </div>

    </div><!-- end of row -->
  </div><!-- end of container -->
</article>
<!-- <section id="test-drive" class="career-images">
  <div class="container">
    <div class="row">
    <article class="col-md-3 col-xs-12">
    </article>

    <!-- <article class="col-md-4 col-md-push-2 col-xs-12 work-with-us">
      <h1 id="still-thinking-heading"><a href="https://github.com/multunus/Open-Playbook" target="_blank"> Just Launched Our Open Plabook </a></h1>
      <p id="still-thinking-text">We hire differently. Interview with us for your favorite position below.
      <!-- You'll get a taste of how it feels to work with us.</p> -->
    <!-- </article> -->

    <article class="col-md-2 col-md-pull-4 col-xs-12">
    </article>

    <article class="col-md-3 col-xs-12">
    </article>
    </div>
</div>
</section>
<article id="open-positions" class="career-openings">
  <div class="container">
    <h1>Open Positions</h1>
      <aside class="row career-positions-container hahah">
    <?php
    $args = array(
      'post_type' => 'page',
      'post_parent' => get_queried_object_id(),
      'post_status' => 'publish'
    );
    $open_positions = get_children($args);
    if ($open_positions):
      foreach ($open_positions as $children):
        $post = get_post($children->ID);
        $title = $post->post_title;
        $excerpt = $post->post_excerpt;
        $permalink = post_permalink($children->ID);
    ?>

    <div class="col-md-4 position-box-container">
      <div class="career-position">
         <a href="<?php echo $permalink ?>">
         <h2 class="position-name"><?php echo $title ?></h2>
         <p><?php echo $excerpt ?></p>
         </a>
       </div>
     </div>

    <?php endforeach; ?>
    <?php endif; ?>
      </aside>
  </div>
</article>

<?php get_footer(); ?>
