<?php
  /*
   Template Name: Careers
   */
?>

<?php get_header(); ?>
<div class="video-section-container career-page">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">Freedom.</h1>
    <!-- <h2 style="color:white"> -->
      <!-- <span>Autonomous Culture | Open Source | Large Scale Architectures</span> -->
       <!-- </h2> -->
      <div data-toggle="scroll" rel="#more-info" class="btn-red">Start with a 4 day workweek<span></span></div>
    </div>
  </div>
  <video autoplay="autoplay" loop="loop" preload="auto" poster="/img/careers-page-poster.jpeg" data-video-name="careers">
  </video>
</div>
<article id="more-info" class="career-values">
  <div class="container">
    <div class="row">
      <div class="row design-container">
      <div class="col-md-6 design-caption">
          <ul class="design-list-style">
        <li><span class="design-heading"><h2>Choose a 4 day workweek
</h2></span>
          <div class="design-description">
            <p>
              Choose your favorite project. Work on it every Monday. Read more about our 20% investment time.</a>
          </p>
          </div></li>
      </div>
      <div class="design-list-container col-md-6" >
        <ul class="design-list-style">
        <li><span class="design-heading"><h2>Choose our future.
        </h2></span>
        <div class="design-description">
          <p>
            Yep. Get elected into our council and make CEO level decisions. Like..what our revenues should be. No kidding.</a>
        </p>
        </div></li>
        </div>
        <div class="col-md-6 design-caption">
          <ul class="design-list-style">
          <li><span class="design-heading"><h2>Choose your Salary.
          </h2></span>
          <div class="design-description">
            <p>
              Its 2016. It’s time to break the rules. Have fun using <a href="http://www.multunus.com/blog/2015/09/our-autonomous-salary-system-the-background-story-part-1/" target="_blank">our autonomous salary system.</a>
          </p>
          </div></li>
          </div>
      <div class="design-list-container col-md-6" >
        <ul class="design-list-style">
          <li><span class="design-heading"><h2>Choose your Future.
</h2></span>
            <div class="design-description">
              <p>
                Want to stay a programmer all your life? No problem. Want to try out product management? Excellent. Want to get your hands dirty with Marketing? Fantastic. Think you’re a designer at heart? Sure, try our design studio.
            </p>
            </div></li>
        </ul>
      </div>
    </div>

    </div><!-- end of row -->
  </div><!-- end of container -->
</article>

<!-- <section id="test-drive" class="career-images">
  <div class="container">
    <div class="row">
    <article class="col-md-3 col-xs-12">
    </article> -->

    <!-- <article class="col-md-4 col-md-push-2 col-xs-12 work-with-us"> -->
      <!-- <h1><a href="https://github.com/multunus/Open-Playbook" target="_blank"> Just Launched Our Open Plabook </a></h1> -->
      <!-- <p id="still-thinking-text">We hire differently. Interview with us for your favorite position below.
     You'll get a taste of how it feels to work with us.</p> -->
    <!-- </article> -->

    <!-- <article class="col-md-2 col-md-pull-4 col-xs-12">
    </article> -->

    <!-- <article class="col-md-3 col-xs-12">
    </article>
    </div> -->
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
