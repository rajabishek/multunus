<?php 
/*
 * Template Name: Service
 */
?>

<?php get_header(); the_post(); ?>

<div class="video-section-container">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">A  thought project in 8 weeks</h1>
      <div class="hidden-xs">
        <div rel="#main-content" class="btn-red">Get Started<span></span></div>
      </div>
    </div>
  </div>

  <video tabindex="0" autoplay loop>
    <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/1.mp4" type="video/mp4" />
    <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/2.mp4" type="video/mp4" />
  </video>
</div>

<article id="main-content" class="align-center services-container">
  <ul class="list-inline">
    <li class="active"><a href="#web-apps" data-toggle="tab">Web Apps</a></li>
    <li><a href="#mobile-apps" data-toggle="tab">Mobile Apps</a></li>
  </ul>
</article>

<div class="tab-content services-section">
  <article class="tab-pane fade in active" id="web-apps">
    <div class="container">
      <div class="row technology-section">
        <?php
        // Get 'services' posts
        $service_posts = get_posts( array(
          'post_type' => 'services',
          'posts_per_page' => -1, // Unlimited posts
          'meta_key' => 'service_category',
          'meta_value' => 'web',
          'orderby' => 'title' // Order alphabetically by name
        ) );

        if ( $service_posts ):
          foreach ( $service_posts as $post  ): 
            setup_postdata($post);
        ?>

          <div class="col-md-4 tech-image">
            <?php if ( has_post_thumbnail()  ) { the_post_thumbnail();  } ?>
          </div>

          <div class="col-md-8 tech-text post">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
          </div>

        <?php wp_reset_postdata(); endforeach; endif; ?>
      </div><!-- end of row -->
    </div><!-- end of container -->

    <hr></hr>

    <div class="container portfolio-container">
      <div>
        <h1 class="align-center">Work Samples</h1>
        <?php $permalink = get_permalink( get_page_by_path( 'portfolio' ) ); ?>
        <h3><a class="see-all-portfolio" href="<?php echo $permalink ?>">See All</a><span class="right-arrow"></span></h3>
      </div>
      <div class="row portfolio-list">
        <?php 
          $portfolio_item = get_posts( array(
            'post_type' => 'portfolio',
            'posts_per_page' => -1, // Unlimited posts
            'meta_key' => 'portfolio_category',
            'meta_value' => 'web',
            'orderby' => 'title' // Order alphabetically by name
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
                  <?php echo get_field('portfolio_category') == "web" ? "Web Application" : "Mobile Application"; ?>
                </p>
              </figcaption>
            </a>
          </figure>

        <?php wp_reset_postdata(); endforeach; endif; ?>
      </div><!-- end of row -->
    </div><!-- end of container -->
  </article>

  <article class="tab-pane fade" id="mobile-apps">
    <div class="container">
      <div class="row technology-section">
        <?php
        // Get 'services' posts
        $service_posts = get_posts( array(
          'post_type' => 'services',
          'posts_per_page' => -1, // Unlimited posts
          'meta_key' => 'service_category',
          'meta_value' => 'mobile',
          'orderby' => 'title', // Order alphabetically by name
        ) );

        if ( $service_posts ):
          $count = 0;
          foreach ( $service_posts as $post  ): 
            setup_postdata($post);
            $count++; 
        ?>

          <div class="col-md-4 tech-image">
            <?php if ( has_post_thumbnail()  ) { the_post_thumbnail();  } ?>
          </div>

          <div class="col-md-8 tech-text post">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
          </div>

        <?php wp_reset_postdata(); endforeach; endif; ?>
      </div><!-- end of row -->
    </div><!-- end of container -->

    <hr></hr>

    <div class="container portfolio-container">
      <div>
        <h1 class="align-center">Work Samples</h1>
        <?php $permalink = get_permalink( get_page_by_path( 'portfolio' ) ); ?>
        <h3><a class="see-all-portfolio" href="<?php echo $permalink ?>">See All</a><span class="right-arrow"></span></h3>
      </div>
      <div class="row portfolio-list">
        <?php 
          $portfolio_item = get_posts( array(
            'post_type' => 'portfolio',
            'posts_per_page' => -1, // Unlimited posts
            'meta_key' => 'portfolio_category',
            'meta_value' => 'mobile',
            'orderby' => 'title' // Order alphabetically by name
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
                  <?php echo get_field('poftfolio_category') == "web" ? "Web Application" : "Mobile Application"; ?>
                </p>
              </figcaption>
            </a>
          </figure>

        <?php wp_reset_postdata(); endforeach; endif; ?>
      </div><!-- end of row -->
    </div><!-- end of container -->
  </article>
</div><!-- end tab-content -->

<?php get_footer(); ?>
