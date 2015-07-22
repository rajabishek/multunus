<?php
/*
 * Template Name: Services
 */
?>

<?php get_header(); ?>

<div class="video-section-container services-page">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">Idea to Reality in 8 Weeks</h1>
      <div class="hidden-xs">
        <div data-toggle="scroll" rel="#main-content" class="btn-red">Get Started<span></span></div>
      </div>
    </div>
  </div>

  <video autoplay="autoplay" loop="loop" poster="/img/services-page-poster.jpeg" data-video-name="services">
  </video>
</div>

<div class="services-section">
  <article id="main-content" class="content-tabs services-tabs">
    <ul class="container">
      <li class="col-sm-offset-1 col-sm-2 col-xs-6 tab active"><a href="#what_we_do" data-toggle="tab">What we do</a></li>
      <li class="col-sm-2 col-xs-6 tab"><a href="#design" data-toggle="tab">Design</a></li>
      <li class="col-sm-2 col-xs-6 tab"><a href="#mobile_web" data-toggle="tab">Web</a></li>
      <li class="col-sm-2 col-xs-6 tab"><a href="#ios_android" data-toggle="tab">iOS & Android</a></li>
      <li class="col-sm-2 col-xs-6 tab"><a href="#every_2_days" data-toggle="tab">Every 2 Days</a></li>
    </ul>
  </article>

  <div class="tab-content">
    <?php
    $services_posts = get_posts( array(
      'post_type' => 'services',
      'posts_per_page' => -1 // Unlimited posts
      ) );

    if ( $services_posts ):
    $categories = array_unique(wp_list_pluck($services_posts, 'category'));
    $default_category = 'what_we_do';

    foreach ( $categories as $key => $category ):
      ?>

    <section class="<?php echo $category ?> tab-pane fade <?php if($category === $default_category) {echo 'in active';} ?>" id="<?php echo $category ?>">
      <div class="container">

        <?php
        $current_category_posts = get_posts( array(
          'post_type' => 'services',
          'meta_key' => 'category',
          'meta_value' => $category,
          'posts_per_page' => -1 // Unlimited posts
        ) );

        foreach ( $current_category_posts as $post ):
          setup_postdata($post);
        ?>

        <?php if ($category === 'what_we_do') { ?>
          <div class="row what-we-do">
            <div class="col-md-4">
              <h1>The whole nine yards!</h1>
            </div>

            <div class="list-container col-md-7" >
              <ul class="arrow-list-style">
                <li><span>Startup Idea to Version 1</span></li>
                <li><span>Enterprise Software Development [especially High Risk & Large Scale]</span></li>
                <li><span>Product Analysis, Feature Breakdown & Release Planning</span></li>
                <li><span>UX and UI Design (with our <a target="_blank" href="http://www.lollypop.biz/">awesome partner)</a></span></li>
                <li><span>Production Deployment and Monitoring</span></li>
                <li><span>Maintenance</span></li>
              </ul>
            </div>
          </div>
          <?php } else if ($category === 'design'){ ?>
            <div class="row design-container">
            <div class="col-md-6 design-caption">
              <h1>We follow<br><a href="http://www.gv.com/sprint/"> Google Venture's Design Sprint</a><br> to take an idea<br> into a<br> validated solution</h1>
            </div>

            <div class="design-list-container col-md-6" >
              <ul class="design-list-style">
                <li><span class="design-heading"><figure><img src="/img/think-icon@2x.png" alt="Understand" /></figure><h2>Understand</h2></span>
                  <div class="design-description">
                    <p>
                    What are the user needs, business need and technology capacities?
                  </p>
                  </div></li>
                <li><span class="design-heading"><figure><img src="/img/diverge-icon@2x.png" alt="Diverge" /></figure><h2>Diverge</h2></span>
                  <div class="design-description">
                    <p>
                    What is the key strategy and focus?
                  </p>
                  </div></li>
                <li><span class="design-heading"><figure><img src="/img/converge-icon@2x.png" alt="Converge" /></figure><h2>Converge</h2></span>
                  <div class="design-description">
                    <p>
                    How might we explore as many ideas as possible?
                  </p>
                  </div></li>
                <li><span class="design-heading"><figure><img src="/img/gear-icon@2x.png" alt="Prototype" /></figure><h2>Prototype</h2></span>
                  <div class="design-description">
                    <p>
                    Create an artifact that allows to test the ideas with users.
                  </p>
                  </div></li>
                <li><span class="design-heading"><figure><img src="/img/tick-icon@2x.png" alt="" /></figure><h2>Validate</h2></span>
                  <div class="design-description">
                    <p>
                    Test the ideas with users, business stakeholders and technical experts.
                  </p>
                  </div></li>
              </ul>
            </div>
          </div>
          <?php }
          else if ($category === 'every_2_days') { ?>
        <div class="row every-2-days">
          <div class="col-md-4">
            <h1>Working software every 2 days. There's more to it than meets the eye.</h1>
          </div>

          <div class="list-container col-md-7" >
            <ul class="arrow-list-style">
              <li><span>Remotely "See" what the dev team is upto. Play with new features every 2 days.</span></li>
              <li><span>Provide feedback on the thing that matters the most: "Working Software"</span></li>
              <li><span>Continous Integration, Continuous Delivery, Continuous Deployment - that's our bread and butter</span></li>
              <li><span>A few of our engineering practices: Test Driven Development, Automated Testing, One Click Deployment, Low Technical Debt</span></li>
              <li><span>A few more non-technical practices: Exploratory Testing , A No Bugs Philosophy, Kanban board</span></li>
            </ul>
          </div>
        </div>
        <?php } else { ?>

          <div class="row post">
            <div class="col-md-4 tech-image">
              <?php if ( has_post_thumbnail()  ) { the_post_thumbnail();  } ?>
            </div>

            <div class="col-md-8 tech-text">
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
            </div>
          </div><!-- end of row -->
        <?php } ?>

      <?php wp_reset_postdata(); endforeach; ?>

    </div><!-- end of container -->

    <hr />

    <article class="container portfolio-section">
      <div class="work-samples">
        <h1 class="align-center">Work Samples</h1>
        <?php $permalink = get_permalink( get_page_by_path( 'portfolio' ) ); ?>
        <h4><a class="see-all-portfolio" href="<?php echo $permalink ?>">See All</a><span class="right-arrow"></span></h4>
      </div>
      <div class="row portfolio-list">
        <?php
          $portfolio_filter = array('mobile_web' => array('web', 'mobile web'),
                                     'ios_android' => array('ios', 'android'));

          $portfolio_item = get_posts( array(
            'post_type' => 'portfolio',
            'posts_per_page' => 3,
            'meta_query' => array(
              'relation' => 'OR',
              array(
                'key' => 'category',
                'value' => $portfolio_filter[$category][0],
                'compare' => 'LIKE'
                ),
              array(
                'key' => 'category',
                'value' => $portfolio_filter[$category][1],
                'compare' => 'LIKE'
                )
              ),
            'order' => 'ASC'
            ) );

        if ( $portfolio_item ):
          foreach ( $portfolio_item as $post ):
            setup_postdata($post);
          ?>

          <figure class="col-sm-4 col-xs-12" data-category="<?php the_field('category'); ?>">
            <?php $permalink = post_permalink($post->ID); ?>
            <a href="<?php echo $permalink ?>">
              <img src="<?php the_field('thumbnail'); ?>" alt="<?php the_title(); ?>">
              <figcaption>
                <p class="name"><?php the_title(); ?></p>
                <p class="category">
                  <?php the_field('category'); ?>
                </p>
              </figcaption>
            </a>
          </figure>

          <?php wp_reset_postdata(); endforeach; endif; ?>
        </div><!-- end of row -->
    </article><!-- end of portfolio-secion -->
  </section><!-- end of section -->

  <?php endforeach; endif; ?>
  </div><!-- end of tab-content -->
</div>

<?php get_footer(); ?>
