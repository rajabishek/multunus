<?php
/**
 * Template Name: Services
 */
get_header();

// Get 'Service' posts
$service_item = get_posts( array(
    'post_type' => 'services',
    'posts_per_page' => -1 // Unlimited posts
) );

$category_list = array();
foreach ( $service_item as $post ) {
  setup_postdata($post);
  array_push($category_list,get_field('category'));
}
$category_list = array_unique($category_list);
if ( $service_item ):
?>

<div class="video-section-container contact-page">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">Idea to reality in 8 weeks</h1>
        <div class="hidden-xs">
          <div data-toggle="scroll" rel="#main-content" class="btn-red">Get Started<span></span></div>
        </div>
    </div>
  </div>
  <video autoplay="autoplay" loop="loop" poster="/img/services-page-poster.jpeg" data-video-name="services">
    </video>
</div>

<section id="main-content" class="container clearfix portfolio-list">

  <?php
  foreach ( $category_list as $category ):
  ?>
      <section class="category-section" data-category="<?php echo $category; ?>">
        <h4><?php echo $category; ?></h4>

      <div class="row">
      <?php
      foreach ( $service_item as $post ):
        setup_postdata($post);
        $permalink = post_permalink($post->ID);
      ?>
      <?php if (strcmp($category,get_field('category')) ): ?>
        <figure class="col-sm-6 col-xs-12" data-category="<?php the_field('category'); ?>">
          <a href="<?php echo $permalink ?>">
            <figcaption>
              <p class="name"><?php the_title(); ?></p>
              <p class="category"> <?php echo the_field('description'); ?></p>

            </figcaption>
          </a>
        </figure>
      <? endif; ?>

      <?php endforeach; ?>
    </div>
    </section>

  <?php endforeach; ?>
</section>
<?php get_footer(); ?>
<?php endif; ?>
