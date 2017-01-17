<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php
  $next_post = get_next_post();
  if(!$next_post) {
    $args = array(
      'post_type' => 'services',
      'posts_per_page'   => 1,
      'order'            => 'ASC');
    $next_posts = get_posts($args);
    $next_post = $next_posts[0];
  }

  $previous_post = get_previous_post();
  if(!$previous_post) {
    $args = array(
      'post_type' => 'portfolio',
      'posts_per_page'   => 1);
    $previous_posts = get_posts($args);
    $previous_post = $previous_posts[0];
  }
  ?>

  <section class="single-portfolio">

    <div class="title-container title-new-services">
      <div class="container">
        <div class="row">
          <div class="project-title col-md-push-2 col-md-8 col-sm-8">
            <div class="post-title"><h1><?php the_title(); ?> </h1></div>
            <div class="partial-underline">

            </div>
            <div class="category service-catergory"><span class="category-name"><?php the_field('category') ?></span></div>
          </div>
        </div>
      </div>
    </div>

    <div class="content-container">
      <div class="container">
        <div class ="row">
        <div class="col-md-push-2 col-md-8">
          <?php the_content(); ?>
        </div>
      </div>
      </div>
    </div>



  </section>
  <?php endwhile; endif; ?>

  <section class="interact-with-us">
    <div class="container">
      <div class="align-center interact-wrapper">
        <p>Our best work gets done when we can work face-to-face with you.</p>
        <div class="btn btn-white btn-lg" ><a href="https://multunus-feedback.typeform.com/to/nGvoX3" >Let's make something great togther</a></div>
      </div>
    </div>

  </section>
<?php get_footer(); ?>
