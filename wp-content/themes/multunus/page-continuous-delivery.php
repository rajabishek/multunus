<?php
/**
 * Template Name: Continuous Delivery
 */
get_header();
?>

<div id="continuous-delivery" class="container">
  <div class="dotted-arrow hidden-xs">
    <img src="/img/continuous-delivery/dotted-arrow.png"/>
  </div>
  <section id="title" class="align-center">
    <h1 class="theme-pink-color">
      WE SHIP
      <div class="separator">
        <img src="/img/continuous-delivery/working.png" id="working"/>
        <img src="/img/continuous-delivery/caret.png" id="caret" />
      </div>
      <span class="visible-xs">WORKING</span>
      SOFTWARE
    </h1>
    <h1>EVERY <span class="bold">TWO</span> DAYS</h1>
  </section>

  <section id="links">
    <div class="row">
      <div class="col-md-4 link-box">
        <h3><a href="/blog/category/continuous-delivery/">/blog</a></h3>
        <p>Read about our continuous delivery experience in Android, iOS and Rails.</p>
      </div>
      <div class="col-md-4 link-box">
        <h3><a href="/events">/speaking</a></h3>
        <ul class="events">
          <li id="android">
            <div class="name">DroidSync 2014</div>
            <div class="place">Mumbai</div>
          </li>
          <li id="rails">
            <div class="name">RailsConf 2014</div>
            <div class="place">Chicago</div>
          </li>
        </ul>
      </div>
      <div class="col-md-4 link-box">
        <h3><a href="/open-source">/open-source</a></h3>
        <p>Check out RubyMation! (iOS Animation Libraries in RubyMotion)</p>
      </div>
    </div>
  </section>

  <section id="platforms" class="align-center">
    <h5><a href="mailto:info@continuousdelivery.in">info@continuousdelivery.in</a></h5>
    <img src="/img/continuous-delivery/platforms.png" />
  </section>

</div>

<?php get_footer(); ?>