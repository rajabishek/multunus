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

  <video tabindex="0" autoplay loop>
    <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/1.mp4" type="video/mp4" />
    <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/2.mp4" type="video/mp4" />
  </video>
</div>

<div class="services-section">
  <article id="main-content" class="content-tabs services-tabs">
    <ul class="container">
      <li class="col-sm-4 col-xs-6 tab active"><a href="#what_we_do" data-toggle="tab">What we do</a></li>
      <li class="col-sm-4 col-xs-6 tab"><a href="#mobile_web" data-toggle="tab">Web & Mobile Web</a></li>
      <li class="col-sm-4 col-xs-12 tab clear"><a href="#ios_android" data-toggle="tab">iOS & Android</a></li>
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
          <div class="what-we-do">
            <div class="col-md-4">
              <h1>The whole nine yards!</h1>
            </div>

            <div class="col-md-7" >
              <ul class="arrow-list-style">
                <li><span>Startup idea to version 1</span></li>
                <li><span>Enterprise Software Development [especially High Risk & Large Scale]</span></li>
                <li><span>Product Analsis, Feature breakdown & release planning</span></li>
                <li><span>UX and UI Design (with our awesome partner)</span></li>
                <li><span>Production Deployment and Monitoring</span></li>
                <li><span>Maintenance</span></li>
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
                  <?php the_field('portfolio_category'); ?>
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
