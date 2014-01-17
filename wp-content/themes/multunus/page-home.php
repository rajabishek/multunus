<?php
  /*
   Template Name: Home
   */
?>

<?php get_header(); ?>
<script src="http://192.168.0.128:8080/target/target-script-min.js#anonymous"></script>
<section class="home-page">
  <div class="video-section-container">
    <div class="overlay">
      <div class="overlay-content">
        <h1 id="quote">Expertly Crafted Apps for <br /> Lean Startups</h1>
        <div class="hidden-xs">
          <div data-toggle="scroll" rel="#main-content" class="btn-red">Explore<span></span></div>
        </div>
      </div>
    </div>

    <video tabindex="0" autoplay loop>
      <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/1.mp4" type="video/mp4" />
      <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/2.mp4" type="video/mp4" />
    </video>
  </div>

  <article id="main-content" class="why-us-image-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 hidden-xs hidden-sm big-picture-text on-desktop">
          <h1>The<br />Big Picture</h1>
        </div>

        <div class="col-sm-12 visible-sm visible-xs align-center big-picture-text on-mobile">
          <h1>The Big Picture</h1>
        </div>

        <div class="col-md-4 big-picture-img-container">
          <figure>
            <a href="/why-us" data-toggle="tab" class="golden-circle what-img"></a>
            <a href="/why-us" data-toggle="tab" class="golden-circle how-img"></a>
            <a href="/why-us" data-toggle="tab" class="golden-circle why-img"></a>
          </figure>
        </div>

        <div class="col-md-4 col-sm-12 big-picture-list">
          <ul>
            <li>What makes us different?</li>
            <li><a class="red-text" href="/why-us">Take a deep dive</a></span> to find out.</li>
          </ul>
        </div>
      </div> <!-- end row -->
    </div> <!-- end container -->
  </article>

  <article class="our-services" >
    <h1 class="align-center">Our Services</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-4 service-item">
          <img src="/img/web-apps-icon-grey.png" />
          <h2>Web Apps</h2>
          <p>Leverage HTML5, Javascript, CSS3 and Ruby on Rails to build responsive web apps</p>
          <a href="/services">Learn More</a><span class="right-arrow"></span>
        </div>

        <div class="col-md-4 service-item">
          <img src="/img/mobile-apps-icon-grey.png" />
          <h2>Mobile Apps</h2>
          <p>Craft beautiful experiences on the iOS and Android platforms.</p>
          <a href="/services">Learn More</a><span class="right-arrow"></span>
        </div>

        <div class="col-md-4 service-item">
          <img src="/img/cal-icon.png" />
          <h2>Every 2 Days</h2>
          <p> Working software every 2 days. It's the primary measure of progress.</p>
          <a href="/why-us">Learn More</a><span class="right-arrow"></span>
        </div>
      </div>
    </div>
  </article>

  <article class="recent-work">
    <div class="container">
      <p class="heading align-center">Our recent work</p>
      <div class="row">
        <div class="col-md-8">
          <img class="recent-client-img" src="/img/work-narrable-imac-frame.jpg" />
        </div>

        <div class="col-md-4 recent-client-text">
          <?php
             $posts = get_posts(array('name' => 'Narrable', 'post_type' => 'portfolio'));
              foreach ($posts as $post) {
                $permalink_narrable = get_permalink($post->ID);
                break;
              }
           ?>
          <h2 class="hidden-xs visible-sm">
            <a href="<?php echo $permalink_narrable ?>">Narrable</a>
          </h2>
          <h2 class="visible-xs">
            <a href="<?php echo $permalink_narrable ?>">Narrable</a>
            <span class="vertical-align-arrow"></span>
          </h2>
          <div class="hidden-xs">
            <p>Narrable uses storytelling through images and narrations to engage students and to draw out important higher order thinking skills.</p>
            <a class="view-work" href="<?php echo $permalink_narrable ?>">View Work</a><span class="right-arrow"></span>
          </div>
          <?php $permalink = get_permalink( get_page_by_path( 'portfolio') ); ?>
          <a class="red-btn" href="<?php echo $permalink ?>">See All</a>
        </div>
      </div>
    </div>
  </article>

  <article class="our-clients">
    <div class="container">
      <div class="row">
        <p class="heading align-center">Hear from our customers</p>
        <div class="slider" id="left-slider">
          <a class="left carousel-control" href="#our-clients-carousel" data-slide="prev">
          </a>
        </div>

        <div class="col-md-12 col-sm-12 coll-xs-12 our-customer-img">
          <div id="our-clients-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="item active">
                <img src="/img/customer-picture-round-3.png">
                <div class="carousel-caption">
                  <h3>Anil Jain</h3>
                  <h4>Brightmonk Innovation</h4>
                  <p class="client-testimonial">"Working with Multunus has been the best experience out of all the Outsourced Companies I’ve worked with." </p>
                  <div class="our-customer-btn">
                    <div class="row">
                      <a class="button-with-icon client-video" href="http://www.youtube.com/v/GuO8jRW9g5U&amp;autoplay=1"><span id="reel-icon"></span><span class="underline">Watch Video</span></a>
                    </div>
                  </div>

                </div><!-- end of item -->
              </div><!-- end of carousel-inner -->

              <div class="item">
                <img class="img-circle" src="/img/customer-picture-round-2.png" />
                <div class="carousel-caption">
                  <h3>Anuroop Iyengar</h3>
                  <h4>CogKnit</h4>
                  <p class="client-testimonial">"We are confidently speaking of going to market. You brought us here." </p>
                  <div class="our-customer-btn">
                    <div class="row">
                        <a class="button-with-icon client-video" href="http://www.youtube.com/v/NAMGHISmWH8&amp;autoplay=1"><span id="reel-icon"></span><span class="underline">Watch Video</span></a>
                        <a class="button-with-icon" href="#"><span id="eye-icon"></span><span class="underline">View Project</span></a>
                    </div>
                  </div>

                </div><!-- end of item -->
              </div><!-- end of carousel-inner -->

              <div class="item">
                <img class="img-circle" src="/img/customer-picture-round.png" />
                <div class="carousel-caption">
                  <h3>Dustin Curzon</h3>
                  <h4>Narrable</h4>
                  <p class="client-testimonial">"I’m impressed with the team aspect of working with multunus." </p>
                  <div class="our-customer-btn">
                    <div class="row">
                      <a class="button-with-icon client-video" href="http://www.youtube.com/v/z1tzfsRI_Ds&amp;autoplay=1"><span id="reel-icon"></span><span class="underline">Watch Video</span></a>
                      <a class="button-with-icon" href="#"><span id="eye-icon"></span><span class="underline">View Project</span></a>
                    </div>
                  </div>

                </div><!-- end of item -->
              </div><!-- end of carousel-inner -->

            </div> <!-- end carousel-inner -->
          </div> <!-- end our-clients-carousel -->

        </div><!-- end of our-customer-img -->

        <div class="slider" id="right-slider">
          <a class="right carousel-control" href="#our-clients-carousel" data-slide="next">
          </a>
        </div>


        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
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

      </div><!-- end of row -->
    </div><!-- end of container -->
  </article>
</section>

<?php get_footer(); ?>
