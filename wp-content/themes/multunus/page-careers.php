<?php
  /*
   Template Name: Careers
   */
?>

<?php get_header(); ?>
<div class="video-section-container career-page">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">Build your dream. At work.</h1>
      <div data-toggle="scroll" rel="#test-drive" class="btn-red">Take A Test Drive<span></span></div>
    </div>
  </div>
  <video autoplay="autoplay" loop="loop" preload="auto" poster="/img/careers-page-poster.jpeg" data-video-name="careers">
  </video>
</div>

<article class="founder-quote">
  <div class="container">
    <div class="col-md-4 quote-video">
      <a id="founder-video" href="http://www.youtube.com/v/-K0U9ppL7N0&autoplay=1">
        <img src="/img/founder.jpg" />
        <span></span>
      </a>

      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <iframe width="400" height="300" frameborder="0" allowfullscreen=""></iframe>
          </div>
        </div>
      </div><!-- end of myModal -->

    </div><!-- end of quote-video -->

    <div class="col-md-8 quote-text">
      <p>At Multunus, we do a lot of things differently. But it starts from the way we hire. We look for people who're likely to make this place more friendly, more transparent,
        more fun, more disciplined, more mindful, more bold, more customer focused.</p>
      <p id="founder"><span id="name">Vaidy</span>, <em>Founder & CEO</em></p>
    </div>

  </div><!-- end of container -->
</article>

<article class="career-values">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <h1>5 reasons to work here:</h1>
      </div>

      <div class="col-md-7 why-work-here" >
        <ul class="arrow-list-style">
          <li><span>You'll love our hacknights.</span></li>
          <li><span>Get high by shipping working software every 2 days.</span></li>
          <li><span>Create more than just software. Help entrepreneurs succeed.</span></li>
          <li><span>Work with honest and nice people. Who care about both work <em>and</em> life.</span></li>
          <li><span>Dive into the new and exciting world of Lean Startups.</span></li>
        </ul>
      </div>

    </div><!-- end of row -->
  </div><!-- end of container -->
</article>

<section id="test-drive" class="career-images">
  <div class="container">
    <div class="row">
    <article class="col-md-3 col-xs-12">
    </article>

    <article class="col-md-4 col-md-push-2 col-xs-12 work-with-us">
      <h1 id="still-thinking-heading">Take a test drive.</h1>
      <p id="still-thinking-text">We hire differently. Interview with us for your favorite position below.
      You'll get a taste of how it feels to work with us.</p>
    </article>

    <article class="col-md-2 col-md-pull-4 col-xs-12">
    </article>

    <article class="col-md-3 col-xs-12">
    </article>
    </div>
</div>
</section><!-- end of career-food -->

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
