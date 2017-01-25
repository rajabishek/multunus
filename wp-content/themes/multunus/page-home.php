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
        <div class="container">
          <div class="row">
            <div class="col-sm-12 main-heading centered">
              <h1>Solutions by design.</h1>
              <h4>We translate complex ideas into simple and elegant products</h4>
              <button class="button button-red-filled">Read More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="banner-img-container">
    </div>
  </div>

  <article id="main-content" class="why-us-image-section">
    <div class="container big-picture">
        <h1 class="text-center">The big picture</h1>
        <div class="row">
          <div class="col-md-7 media">
            <img src="/img/big-picture.svg" />
          </div>
          <div class="col-md-5 meta">
            <h2>We take an inside out approach.</h2>
            <p>What makes us different. Take a <a>deep dive</a> to find out.</p>
          </div>
        </div>
      </div>
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
          <img src="/img/design.png" />
          <h2>Design</h2>
          <p>Go beyond how it looks and how it works. Design for outcomes.</p>
          <a href="/services">Learn More</a><span class="right-arrow"></span>
        </div>
      </div>
            <div class="col-md-12 every_2_days">
                <p>"We ship working software every 2 days. It's our primary measure of progress."</p>
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
    <div class="container hidden-xs">
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
        <div role="tabpanel" class="tab-pane fade <?php echo($index == 0 ? 'in active' : '') ?>" id="<?php echo $post->ID; ?>">
          <div class="container story-snippet-container">
            <figure class="logo-container visible-xs">
              <img src="<?php echo the_field('logo') ?>">
            </figure>
            <div class="col-md-4">
              <figure>
                <img src="<?php the_field('thumbnail'); ?>">
              </figure>
            </div>
            <div class="col-md-8">
              <h3 class="title"><?php the_title(); ?></h3>
              <p class="story-snippet">
                <?php the_field('story_snippet'); ?>
              </p>
              <p>
                <a class="read-more-link red-text" href="<?php echo $permalink ?>">Read More</a>
              </p>
            </div>
          </div>
          <div class="quote-banner hidden-xs">
            <div class="container">
              <div class="row">
                <figure class="author-image-container">
                  <img class="img-circle" src="<?php the_field('customer_image') ?>">
                </figure>

                <div class="right-section">
                  <div class="quote">
                    &#8220;<?php the_field('customer_quote'); ?>&#8221;
                  </div>
                  <div class="author">
                    -- <?php the_field('customer_name'); ?>, <?php the_field('customer_organization'); ?>
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
