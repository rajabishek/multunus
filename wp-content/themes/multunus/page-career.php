<?php
  /*
   Template Name: Careers
   */
?>

<?php get_header(); ?>

<?php
the_post();

// Get 'job' posts
$job_posts = get_posts( array(
  'post_type' => 'job',
  'posts_per_page' => -1, // Unlimited posts
  'orderby' => 'title', // Order alphabetically by name
  ) );

if ( $job_posts ):
  foreach ($job_posts as $job):
    setup_postdata($job);
  endforeach;
endif;

wp_reset_postdata();
?>

<div class="video-section-container career-page">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">Build your dream. At work.</h1>
      <div id="career-text-overlay">
      </div>
      <div rel="#open-positions" class="btn-red">Open Positions<span></span></div>
    </div>
  </div>

  <video tabindex="0" autoplay loop>
    <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/1.mp4" type="video/mp4" />
    <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/2.mp4" type="video/mp4" />
  </video>
</div>

<article class="founder-quote">
  <div class="container">
    <div class="col-md-8 quote-text">
      <p>At Multunus, we do a lot of things differently. But it starts from the way we hire. We look for people who're likely to make this place more friendly, more transparent,
        more fun, more disciplined, more mindful, more bold, more customer focussed.</p>
      <p id="founder"><span id="name">Vaidyanathan</span>, <em>CEO, Founder at Multunus</em></p>
    </div>

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
        </div>
      </div><!-- end of myModal -->

    </div>
  </div>
</article>

<article class="career-values">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <h1>We at <span id="company-name">Multunus</span> strictly follow these things to ensure its a fun place to be:</h1>
      </div>

      <div class="col-md-7">
        <ul>
          <li><span>You get to spend 45 minutes everyday learning and interacting with your colleagues.</span></li>
          <li><span>We ask everyone to leave by 7PM everyday. And working weekends are strongly discouraged.</span></li>
          <li><span>We constantly invest in some of the best training material available.</span></li>
          <li><span>We invite industry leaders to visit our office and interact with the team here. We call these events "fireside chats".</span></li>
        </ul>
      </div>

    </div><!-- end of row -->
  </div><!-- end of container -->
</article>

<section class="career-images">
  <div class="container">
    <div class="row">
    <article class="col-md-3 col-xs-12"> 
      <img src="http://lorempixel.com/344/394" />
    </article>

    <article class="col-md-3 col-md-push-3 col-xs-12">
      <p id="still-thinking-heading">Still thinking about working for us?</p>
      <p id="still-thinking-text">As they say, the proof of the pudding is in the eating. But that will require you to join our team.</p>
    </article>

    <article class="col-md-3 col-md-pull-3 col-xs-12">
      <img src="http://lorempixel.com/344/394" />
    </article>

    <article class="col-md-3 col-xs-12">
      <img src="http://lorempixel.com/344/394" />
    </article>
    </div>
</div>
</section><!-- end of career-food -->

<article id="open-positions" class="career-openings">
  <div class="container">
    <h1>Open Positions</h1>
      <aside class="row career-position-container">
        <div class="career-position col-md-3 col-md-offset-3">
          <a href="#">
            <span>Programmer</span>
            <p>Web Application Development experience. More specifically, this includes the following:</p>
          </a>
        </div>

        <div class="career-position col-md-3">
          <a href="#">
            <span>Business Analyst</span>
            <p>Web Application Development experience. More specifically, this includes the following:</p>
          </a>
        </div>
      </aside>
  </div>
</article>

<?php get_footer(); ?>
