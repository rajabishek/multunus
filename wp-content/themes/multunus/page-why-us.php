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
            <li><a class="red-text" href="#">How</a></span> we achieve<br /> our mission?</li>
            <li><a class="red-text" href="#">What</a></span> we do on a<br /> daily basis?</li>
          </ul>
        </div>

        <div class="tab-content col-md-7 col-sm-12">
          <div class="tab-pane fade" id="why">
            <h1><span class="red-text">Why</span> we exist?</h1>
            <h4>Help Enterpreneurs succeed</h4>
            <p>
              Raw denim you probably haven't heard of them jean shorts Austin.
              Nesciunt tofu stumptown aliqua, retro synth master cleanse.
              Mustache cliche tempor, williamsburg carles vegan helvetica.
            </p>
          </div>

          <div class="tab-pane fade" id="how">
            <h1><span class="red-text">How</span> we achieve our mission?</h1>
            <h4>Better products, with deliberate discovery</h4>
            <p>
              Raw denim you probably haven't heard of them jean shorts Austin.
              Nesciunt tofu stumptown aliqua, retro synth master cleanse.
              Mustache cliche tempor, williamsburg carles vegan helvetica.
            </p>
          </div>

          <div class="tab-pane fade" id="what">
            <h1><span class="red-text">What</span> we do on a daily basis?</h1>
            <h4>Culture + Process + Technology &amp; Tools </h4>
            <p>
              Raw denim you probably haven't heard of them jean shorts Austin.
              Nesciunt tofu stumptown aliqua, retro synth master cleanse.
              Mustache cliche tempor, williamsburg carles vegan helvetica.
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
      ?>

      <?php
      $categories = wp_list_pluck($why_us_posts, 'category');
      foreach ( $categories as $key => $category ):
      ?>
      <section class="<?php echo $category ?> tab-pane fade <?php if($category === 'the_big_picture') {echo 'in active';} ?>" id="<?php echo $category ?>">
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
              <div class="col-md-12">
                <h1><?php the_title(); ?></h1>
              </div>
              <div class="col-md-6 video-summary">
                <p><?php the_content(); ?></p>
              </div>
              <div class="col-md-6 video-container">
                <iframe frameborder="0" src="http://www.youtube.com/v/z1tzfsRI_Ds" allowfullscreen=""></iframe>
                <!--iframe frameborder="0" src="<?php the_field('video_link'); ?>" allowfullscreen=""></iframe-->
                <p class="quote">"<?php the_field('video_quote'); ?>"</p>
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