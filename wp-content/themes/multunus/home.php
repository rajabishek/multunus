<?php get_header(); ?>

<div class="video-section-container">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">Expertly Crafted Apps for <br /> Lean Startups</h1>
      <div class="hidden-xs">
        <a rel="#main-content" class="btn-red">Explore<span></span></a>
      </div>
    </div>
  </div>

  <video tabindex="0" autoplay loop>
    <source src="/vids/1.mp4" type="video/mp4" />
    <source src="/vids/2.mp4" type="video/mp4" />
  </video>
</div>
<div class="tab-content" id="main-content">
  <article class="big-picture-text" style="background-color: #fff;">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-md-offset-1 hidden-xs hidden-sm vertical-center">
          <h1>The<br />Big Picture</h1>
        </div>

        <div class="col-md-4 big-picture-img-container">
          <a href="#"><div class="what-img">
            <div class="how-img"> <div class="why-img"></div></div>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-xs-12 big-picture-list">
        <div class="col-md-3 col-sm-offset-1 visible-sm visible-xs align-center">
          <h1>The Big Picture</h1>
        </div>
          <ul>
            <li>What makes us different?</li>
            <li><a class="red-text" href="#">Take a deep dive</a></span> to find out.</li>
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
          <p>Leverage HTML5, Javascript, CSS3 and Ruby on Rails to build web apps. On desktops, tablets and phones.</p>
          <a href="#">Learn More</a><span></span>
        </div>

        <div class="col-md-4 service-item">
          <img src="/img/mobile-apps-icon-grey.png" />
          <h2>Mobile Apps</h2>
          <p>Craft beautiful experiences on the iOS and Android platforms.</p>
          <a href="#">Learn More</a><span></span>
        </div>

        <div class="col-md-4 service-item">
          <img src="/img/cal-icon.png" />
          <h2>Every 2 Days</h2>
          <p> Working software every 2 days. It's the primary measure of progress.</p>
          <a href="#">Learn More</a><span></span>
        </div>
      </div>
    </div>
  </article>
</div><!-- end tab-content -->

<article class="recent-work">
  <div class="container">
    <p class="heading align-center">Our recent work</p>
    <div class="row">
      <div class="col-md-8">
        <img class="recent-client-img" src="/img/work-narrable-imac-frame.jpg" />
      </div>

      <div class="col-md-4 recent-client-text">
        <h2 class="hidden-xs visible-sm">Narrable</h2>
        <h2 class="visible-xs"><a href="#">Narrable</a><span class="vertical-align-arrow"></span></h2>
        <div class="hidden-xs">
          <p>Narrable uses storytelling through images and narrations to engage students and to draw out important higher order thinking skills.</p>
          <a class="view-work" href="#">View Work</a><span></span>
        </div>
        <a class="red-btn" href="#">See All</a>
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
              </div>
            </div>

            <div class="item">
              <img class="img-circle" src="/img/customer-picture-round-2.png" />
              <div class="carousel-caption">
                <h3>Anuroop Iyengar</h3>
                <h4>CogKnit</h4>
                <p class="client-testimonial">"We are confidently speaking of going to market. You brought us here." </p>
              </div>
            </div>

            <div class="item">
              <img class="img-circle" src="/img/customer-picture-round.png" />
              <div class="carousel-caption">
                <h3>Dustin Curzon</h3>
                <h4>Narrable</h4>
                <p class="client-testimonial">"I’m impressed with the team aspect of working with multunus." </p>
              </div>
            </div>

          </div> <!-- end carousel-inner -->
        </div> <!-- end our-clients-carousel -->
      </div>

      <div class="slider" id="right-slider">
        <a class="right carousel-control" href="#our-clients-carousel" data-slide="next">
        </a>
      </div>

      <div class="our-customer-btn">
        <a class="client-btn" id="client-video" href="http://www.youtube.com/v/GuO8jRW9g5U&amp;autoplay=1"><span id="reel-icon"></span><span class="underline">Watch Video</span></a>
        <a class="client-btn" href="#"><span id="eye-icon"></span><span class="underline">View Project</span></a>
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
      </div>
    </div><!-- end of row -->

  </div><!-- end of container -->
</article>

<?php get_footer(); ?>
