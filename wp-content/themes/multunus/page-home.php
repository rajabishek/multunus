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
    <?php
      $portfolio_items = get_posts( array(
          'post_type' => 'portfolio',
          'meta_key'		=> 'show_customer_story_in_home_page',
	        'meta_value'	=> true,
          'posts_per_page' => -1 // Unlimited posts
      ) );
    ?>
    <h1 class="section-heading align-center">Customer Stories</h1>
    <div class="container">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs container" role="tablist">
        <?php
        foreach ( $portfolio_items as $index => $post ):
          setup_postdata($post);
          $permalink = post_permalink($post->ID);
        ?>
        <li role="presentation" class="col-md-3 <?php echo($index == 0 ? 'active' : '') ?>">
          <a href="#<?php echo $post->ID; ?>" aria-controls="home" role="tab" data-toggle="tab">
            <img src="<?php echo the_field('logo') ?>">
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <!-- Tab panes -->
    <div class="tab-content">
      <?php
      foreach ( $portfolio_items as $index => $post ):
        setup_postdata($post);
        $permalink = post_permalink($post->ID);
        ?>
        <div role="tabpanel" class="tab-pane <?php echo($index == 0 ? 'active' : '') ?>" id="<?php echo $post->ID; ?>">
          <div class="container">
            <div class="col-md-4">
              <figure class="">
                <img src="https://trello-attachments.s3.amazonaws.com/55923c9cd0de3d350769c3c6/600x448/0d80d58c8c02125d329fa50929d5a943/Intersect_thumb.png">
              </figure>
            </div>
            <div class="col-md-8">
              <h3 class="title">How Intersect became the largest micro lender in New Jersey</h3>
              <p class="story-snippet">
                Rohan Mathew started the Intersect Fund as a non profit institution to serve the less privileged and to help make their dreams a reality
              </p>
              <p>
                <a class="read-more-link red-text" href="<?php echo $permalink ?>">Read More</a>
              </p>
            </div>
          </div>
          <div class="quote-banner">
            <div class="container">
              <div class="row">
                <figure class="author-image-container">
                  <img class="img-circle" src="<?php the_field('customer_image') ?>">
                </figure>

                <div class="right-section">
                  <div class="quote">
                    Multunus is extremely transparent and honest about issues that arise after a contract is signed. They care not just about money, but also fairness and preserving the customer realtionship.
                  </div>
                  <div class="author">
                    -- Rohan Mathew, CEO of The IntersectFund
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </article>
</section>

<?php get_footer(); ?>
