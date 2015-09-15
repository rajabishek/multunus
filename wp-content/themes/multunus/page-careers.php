<?php
  /*
   Template Name: Careers
   */
?>

<?php get_header(); ?>
<div class="video-section-container career-page">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">3 Reasons to Work Here</h1>
    <h2 style="color:white">
      <span>Autonomous Culture | Open Source | Large Scale Architectures</span>
       </h2>
      <div data-toggle="scroll" rel="#open-positions" class="btn-red">Open Positions<span></span></div>
    </div>
  </div>
  <video autoplay="autoplay" loop="loop" preload="auto" poster="/img/careers-page-poster.jpeg" data-video-name="careers">
  </video>
</div>
<article class="career-values">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <h1>More info here:</h1>
      </div>

      <div class="col-md-7 why-work-here">
        <ul class="arrow-list-style">
          <li><span><a href="https://github.com/multunus/Open-Playbook" target="_blank"> Our Compensation System</a></span></li>
          <li><span><a href="http://www.multunus.com/community/open-source/" target="_blank"> Open Source Contributions</a></span></li>
          <li><span><a href="http://www.multunus.com/portfolio/micro-loan-processing-platform/" target="_blank"> An Impactful Project</a></span></li>
        </ul>
      </div>

    </div><!-- end of row -->
  </div><!-- end of container -->
</article>
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
