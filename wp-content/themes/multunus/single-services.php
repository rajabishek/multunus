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
                <div class="project-title col-md-push-1 col-md-10 col-sm-10">
                    <div class="post-title">
                        <h1><?php the_title(); ?> </h1>
                    </div>
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
                <div class="col-md-push-1 col-md-10">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; endif; ?>
<div class="lets-talk">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="text-center">Its time to craft brilliance together ? Let's chat.</h2>
            <div class="text-center">
                <a class="button button-white-filled" href="/contact">Get in touch with us today</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>