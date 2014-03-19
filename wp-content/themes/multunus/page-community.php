<?php
/**
 * Template Name: Community
 */
get_header();
?>

<div id="community" class="container">
  <section id="community-love" class="align-center">
    <h1>We <img src="/img/continuous-delivery/heart.png" class="heart" /> our community.</h1>
  </section>

  <section id="links">
    <div class="row">
      <div class="col-md-4 link-box">
        <h3><a href="/blog/category/continuous-delivery/">/Blog</a></h3>
        <p>Read about our continuous delivery experience in iOS, Android and Rails.</p>
      </div>
      <div class="col-md-4 link-box">
        <h3><a href="/events">/Events</a></h3>
        <ul class="events">
          <li id="android">
            <div class="name">Speaking @ DroidSync 2014</div>
            <div class="place">Mumbai</div>
          </li>
          <li id="rails">
            <div class="name">Speaking @ RailsConf 2014</div>
            <div class="place">Chicago</div>
          </li>
        </ul>
      </div>
      <div class="col-md-4 link-box">
        <h3><a href="/open-source">/OpenSource</a></h3>
        <p>Check out RubyMation! (iOS Animation Libraries in RubyMotion)</p>
      </div>
    </div>
  </section>

</div><!-- end of #community -->

<?php get_footer(); ?>
