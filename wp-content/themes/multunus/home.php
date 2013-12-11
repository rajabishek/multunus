<?php get_header(); ?>

<div class="video-section-container">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">We help entrepreneurs succeed</h1>
      <div class="hidden-xs">
        <a href="#main-content" class="btn-red">explore<span></span></a>
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
    <li>Big Picture</li>
    <li>Our Services</li>
  </ul>
</article>

<article class="big-picture-text">
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

      <div class="col-md-4 col-xs-12 big-picture-list">
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
</article> <!-- end main-content -->

<?php get_footer(); ?>
