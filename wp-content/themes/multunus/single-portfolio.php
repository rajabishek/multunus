<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php
  $next_post = get_next_post();
  if(!$next_post) {
    $args = array(
      'post_type' => 'portfolio',
      'posts_per_page'   => 1,
      'order'            => 'ASC');
    $next = get_posts($args);
    $next_post = $next[0];
  }

  $previous_post = get_previous_post();
  if(!$previous_post) {
    $args = array(
      'post_type' => 'portfolio',
      'posts_per_page'   => 1);
    $previous = get_posts($args);
    $previous_post = $previous[0];
  }
  ?>

  <section class="single-portfolio">

    <div class="portfolio-image-section">
      <div class="overlay"></div>
      <img class="background" src="<?php the_field('background_image'); ?>"></img>
      <div class="app-images-container container <?php the_field('display_device'); ?>">
        <img class="app-image left" src="<?php the_field('app_image_left'); ?>"></img>
        <img class="app-image center" src="<?php the_field('app_image_center'); ?>"></img>
        <img class="app-image right" src="<?php the_field('app_image_right'); ?>"></img>
      </div>
    </div>

    <div class="title-container">
      <div class="container">
        <div class="row">
          <div class="project-title col-sm-8">
            <?php
            $category = get_field('category') == 'web' ? 'Web App' : 'Mobile App' ;
            ?>
            <div class="post-title"><h1><?php the_title(); ?> </h1></div>
            <div class="category"><span><?php echo $category; ?></span></div>
          </div>
          <div class="col-sm-4 hidden-xs portfolio-nav">
            <a href="<?php echo get_permalink( $previous_post->ID ); ?>" class="links previous-project"></a>
            <a href="/portfolio" class="links portfolio-link"></a>
            <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="links next-project"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="content-container">
      <div class="container">
        <div class="row">
          <article class="post col-sm-8">
            <?php the_content(); ?>
          </article>
          <aside class="col-sm-4">
            <div class="customer-data">
              <img class="img-circle" src="<?php the_field('customer_image'); ?>">
              </img>
              <h3><?php the_field('customer_name'); ?></h3>
              <p class="customer-org"><?php the_field('customer_organization'); ?></p>
              <p>"<?php the_field('customer_quote'); ?>"</p>
              <?php if(get_field('customer_video') != "") { ?>
              <a class="button-with-icon client-video" href="<?php the_field('customer_video'); ?>">
                <span id="reel-icon"></span>
                <span class="underline">Watch Video</span>
              </a>
              <?php } ?>
            </div>
            <div class="jagged-pattern">
            </div>
          </aside>
          <div class="col-sm-12 visible-xs portfolio-nav">
            <a href="<?php echo get_permalink( $previous_post->ID ); ?>" class="col-xs-4 links previous-project"></a>
            <a href="/portfolio" class="col-xs-4 links portfolio-link"></a>
            <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="col-xs-4 links next-project"></a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <?php endwhile; endif; ?>

  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <iframe width="400" height="300" frameborder="0" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>