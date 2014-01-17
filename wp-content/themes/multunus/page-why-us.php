<?php
/**
 * Template Name: Why Us
 */
  get_header();
?>
<section class="why-us-page">
  <div class="why-us-image-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 hidden-xs hidden-sm on-desktop big-picture-text fade in">
          <h1>The<br />Big Picture</h1>
        </div>

        <div class="col-md-12 visible-sm visible-xs align-center on-mobile big-picture-text">
          <h1>The Big Picture</h1>
        </div>

        <div class="col-md-4 big-picture-img-container">
          <div class="image-prefetcher"></div>
          <figure>
            <a data-tab="#what" class="golden-circle what-img"></a>
            <a data-tab="#how" class="golden-circle how-img"></a>
            <a data-tab="#why" class="golden-circle why-img"></a>
          </figure>
        </div>

        <div class="col-md-4 col-sm-12 big-picture-list fade in">
          <ul>
            <li><a class="red-text" href="#">Why</a></span> we exist?</li>
            <li><a class="red-text" href="#">How</a></span> we achieve<br /> our mission</li>
            <li><a class="red-text" href="#">What</a></span> we do on a<br /> daily basis</li>
          </ul>
        </div>

        <div class="tab-content col-md-7 col-sm-12">
          <div class="tab-pane fade" id="why">
            <h1><span class="red-text">Why</span> we exist</h1>
            <h4>We help entrepreneurs [ & intrepreneurs! ] succeed</h4>
            <p>Entrepreneurs are key drivers of positive change in any economy. And helping them succeed is our mission.</p>
          </div>

          <div class="tab-pane fade" id="how">
            <h1><span class="red-text">How</span> we achieve our mission</h1>
            <h4>We build better products. Using a process of "Deliberate Discovery"</h4>
            <p>"Some unexpected bad things will happen" - Dan North.</p>
            <p>That quote is a great reminder of the need to hustle, to discover risks early on. To stay on the course of Deliberately Discovery.</p>
          </div>

          <div class="tab-pane fade" id="what">
            <h1><span class="red-text">What</span> we do on a daily basis</h1>
            <h4>Okay, this is a <em>bit</em> more complex.</h4>
            <p>We blend a great culture, a refined process and carefully chosen technologies and tools - to build better products.<br />
            <p>Watch the "Big Picture" video below to learn more. Its just about 5 min long.</p>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="content-section">
    <article class="content-tabs">
      <ul class="container">
        <li class="col-sm-3 col-xs-6 tab active"><a href="#the_big_picture" data-toggle="tab">The Big Picture</a></li>
        <li class="col-sm-3 col-xs-6 tab"><a href="#collaboration" data-toggle="tab">Collaboration</a></li>
        <li class="col-sm-3 col-xs-6 tab"><a href="#engineering" data-toggle="tab">Engineering</a></li>
        <li class="col-sm-3 col-xs-6 tab"><a href="#culture" data-toggle="tab">Culture</a></li>
      </ul>
    </article>

    <div class="tab-content post">
      <?php
      $why_us_posts = get_posts( array(
        'post_type' => 'why_us',
        'posts_per_page' => -1 // Unlimited posts
        ) );

      if ( $why_us_posts ):
      $categories = array_unique(wp_list_pluck($why_us_posts, 'category'));
      $default_category = 'the_big_picture';

      foreach ( $categories as $key => $category ):
      ?>
      <section class="<?php echo $category ?> tab-pane fade <?php if($category === $default_category) {echo 'in active';} ?>" id="<?php echo $category ?>">
        <div class="container">

          <?php
          $current_category_posts = get_posts( array(
            'post_type' => 'why_us',
            'meta_key' => 'category',
            'meta_value' => $category,
            'posts_per_page' => -1 // Unlimited posts
            ) );

          foreach ( $current_category_posts as $post ):
            setup_postdata($post);
          ?>
            <div class="row post">
              <div class="title col-md-12">
                <h1><?php the_title(); ?></h1>
              </div>

              <div class="col-md-6 video-container">
                <iframe frameborder="0" src="<?php the_field('video_link'); ?>" allowfullscreen=""></iframe>

                <?php if(get_field('video_quote') !== '') { ?>
                <p class="quote"><?php the_field('video_quote'); ?></p>
                <?php } ?>
              </div>

              <div class="col-md-6 video-summary">
                <?php the_content(); ?>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </section>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
  </section>

<?php get_footer(); ?>