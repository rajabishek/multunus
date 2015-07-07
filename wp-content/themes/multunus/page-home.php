<?php
  /*
   Template Name: Home
   */
?>
<?php get_header(); ?>
<section class="home-page">
  <div class="banner-section-container">
    <div class="overlay">
      <div class="overlay-content">
        <a href="/portfolio/t-shirts-googlers/">
          <h1 id="quote">
            T-Shirts for Googlers?
          </h1>
        </a>
        <h4 id="explanation">
          See how bidPress is disrupting the printing industry
        </h4>
        <div>
          <a href="/portfolio/t-shirts-googlers/">
            <div class="btn-green">Read More<span>&#8594;</span></div>
          </a>
        </div>
        
      </div>
    </div>
    <div id="banner-img-container">
    </div>
  </div>

  <article id="main-content" class="why-us-image-section">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
          <h2 id="title-line">
            We build Web and Mobile Apps
          </h2>
        </div>
        <div class="col-md-4 hidden-xs hidden-sm big-picture-text on-desktop">
          <h1>The<br />Big Picture</h1>
        </div>

        <div class="col-sm-12 visible-sm visible-xs align-center big-picture-text on-mobile">
          <h1>The Big Picture</h1>
        </div>

        <div class="col-md-4 big-picture-img-container">
          <figure>
            <a href="/process" class="golden-circle what-img"></a>
            <a href="/process" class="golden-circle how-img"></a>
            <a href="/process" class="golden-circle why-img"></a>
          </figure>
        </div>

        <div class="col-md-4 col-sm-12 big-picture-list">
          <ul>
            <li>What makes us different?</li>
            <li><a class="red-text" href="/process">Take a deep dive</a></span> to find out.</li>
          </ul>
        </div>
      </div> <!-- end row -->
    </div> <!-- end container -->
  </article>

  <article class="our-services" >
    <h1 class="align-center section-heading">Our Services</h1>
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
          <a href="/process">Learn More</a><span class="right-arrow"></span>
        </div>
      </div>
    </div>
  </article>

  <article class="customer-stories">
    <div class="container">
      <h1 class="section-heading align-center">Customer Stories</h1>
      <div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab1" aria-controls="home" role="tab" data-toggle="tab"><img src="http://placehold.it/200x60"></a></li>
          <li role="presentation"><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab"><img src="http://placehold.it/200x60"></a></li>
          <li role="presentation"><a href="#tab3" aria-controls="messages" role="tab" data-toggle="tab"><img src="http://placehold.it/200x60"></a></li>
          <li role="presentation"><a href="#tab4" aria-controls="settings" role="tab" data-toggle="tab"><img src="http://placehold.it/200x60"></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="tab1">
            <div class="col-md-4">
              <figure class="">
                <img src="http://placehold.it/350x250">
              </figure>
            </div>
            <div class="col-md-8">
              <h3>Tab 1 How Intersect became the largest micro lender in New Jersey</h3>
              <p>
                Rohan Mathew started the Intersect Fund as a non profit institution to serve the less privileged and to help make their dreams a reality
              </p>
              <p>
                <a class="red-text" href="#">Read More</a>
              </p>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="tab2">
            <div class="col-md-4">
              <figure class="">
                <img src="http://placehold.it/350x250">
              </figure>
            </div>
            <div class="col-md-8">
              <h3>Tab 2 How Intersect became the largest micro lender in New Jersey</h3>
              <p>
                Rohan Mathew started the Intersect Fund as a non profit institution to serve the less privileged and to help make their dreams a reality
              </p>
              <p>
                <a class="red-text" href="#">Read More</a>
              </p>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="tab3">
            <div class="col-md-4">
              <figure class="">
                <img src="http://placehold.it/350x250">
              </figure>
            </div>
            <div class="col-md-8">
              <h3>Tab 3 How Intersect became the largest micro lender in New Jersey</h3>
              <p>
                Rohan Mathew started the Intersect Fund as a non profit institution to serve the less privileged and to help make their dreams a reality
              </p>
              <p>
                <a class="red-text" href="#">Read More</a>
              </p>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="tab4">
            <div class="col-md-4">
              <figure class="">
                <img src="http://placehold.it/350x250">
              </figure>
            </div>
            <div class="col-md-8">
              <h3>Tab 4 How Intersect became the largest micro lender in New Jersey</h3>
              <p>
                Rohan Mathew started the Intersect Fund as a non profit institution to serve the less privileged and to help make their dreams a reality
              </p>
              <p>
                <a class="red-text" href="#">Read More</a>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </article>
</section>

<?php get_footer(); ?>
