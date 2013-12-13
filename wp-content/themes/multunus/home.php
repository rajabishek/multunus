<?php get_header(); ?>

<div class="video-section-container">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">We help entrepreneurs<br /> succeed</h1>
      <div class="hidden-xs">
        <a rel="#main-content" class="btn-red">explore<span></span></a>
      </div>
    </div>
  </div>

  <video tabindex="0" autoplay loop>
    <source src="/vids/1.mp4" type="video/mp4" />
    <source src="/vids/2.mp4" type="video/mp4" />
  </video>
</div>

<article id="main-content" class="align-center big-picture-header">
  <ul class="list-inline">
    <li class="active"><a href="#big-picture" data-toggle="tab">Big Picture</a></li>
    <li><a href="#our-services" data-toggle="tab">Our Services</a></li>
  </ul>
</article>

<div class="tab-content">
  <article class="big-picture-text tab-pane fade in active" id="big-picture">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-md-offset-1 hidden-xs hidden-sm vertical-center">
          <h1>The<br /><span class="red-text">Big Picture</span></h1>
        </div>

        <div class="col-md-4 big-picture-img-container">
          <a href="#"><div class="what-img">
            <div class="how-img"> <div class="why-img"></div></div>
            </div>
          </a>
        </div>

        <div class="col-md-3 col-xs-12 big-picture-list">
        <div class="col-md-3 col-sm-offset-1 visible-sm visible-xs align-center">
          <h1>The <span class="red-text">Big Picture</span></h1>
        </div>
          <ul>
            <li><a class="red-text" href="#">Why</a></span> we exist?</li>
            <li><a class="red-text" href="#">How</a></span> we achieve<br /> our mission?</li>
            <li><a class="red-text" href="#">What</a></span> we do on a<br /> daily basis?</li>
          </ul>
        </div>
      </div> <!-- end row -->
    </div> <!-- end container -->
  </article>

  <article class="our-services tab-pane fade" id="our-services">
    <div class="container">
      <div class="row">
        <div class="col-md-4 service-item">
          <img src="/img/web-apps-icon-grey.png" />
          <h2>Web Apps</h2>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
           ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
          <a href="#">Learn More</a><span></span>
        </div>

        <div class="col-md-4 service-item">
          <img src="/img/mobile-apps-icon-grey.png" />
          <h2>Mobile Apps</h2>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
           ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
          <a href="#">Learn More</a><span></span>
        </div>

        <div class="col-md-4 service-item">
          <img src="/img/opensource-apps-icon-grey.png" />
          <h2>Open Source</h2>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
           ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
          <a href="#">Learn More</a><span></span>
        </div>
      </div>
    </div>
  </article>
</div> <!-- end tab-content -->

<article class="recent-work">
  <div class="container">

    <p class="heading align-center">Our recent work which makes us proud</p>
    <div class="row">
      <div class="col-md-8">
        <img class="recent-client-img" src="/img/work-narrable.png" />
      </div>

      <div class="col-md-4 recent-client-text">
        <h2 class="hidden-xs visible-sm">Narrable</h2> 
        <h2 class="visible-xs"><a href="#">Narrable</a><span class="vertical-align-arrow"></span></h2> 
        <p>Web App</h2>
        <div class="hidden-xs">
          <p>Narrable is a storytelling app, which engages students to draw out important higher order thinking skills.</p>
          <a class="view-work" href="#">View Work</a><span></span> 
        </div>
        <a class="red-btn" href="#">see all</a>
      </div>
    </div>
  </div>
</article>

<?php get_footer(); ?>
