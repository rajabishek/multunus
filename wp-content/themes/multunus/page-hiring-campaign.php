<?php
/**
 * Template Name: Hiring Campaign
 */
get_header();
?>

<div class="ofcourseus">
  <div class="jumbotron campaign">
    <div id="Stage" class="EDGE-17769441 fade in" style=".edgeLoad-EDGE-17769441 { visibility:hidden; }"></div>
    <div></div>
  </div>

  <div class="content-section">
    <?php
    $ofcourseus_posts = get_posts( array(
    'post_type' => 'ofcourseus',
    'posts_per_page' => -1 // Unlimited posts
    ) );

    if ( $ofcourseus_posts ):
    ?>
      <div class="container">
        <?php
        foreach ( $ofcourseus_posts as $post ):
        setup_postdata($post);
        ?>
          <div class="row post">
            <div class="title col-md-12">
              <h1><?php the_title(); ?></h1>
            </div>

            <div class="col-md-6 video-container">
              <iframe frameborder="0" src="<?php the_field('video_link'); ?>" allowfullscreen=""></iframe>
            </div>

            <div class="col-md-6 video-summary">
              <?php the_content(); ?>
            </div>
          </div>
        <?php endforeach; ?>

      </div><!-- end of container -->
    <?php endif; ?>
  </div><!-- end of content-section -->
</div><!-- end of ofcourseus -->

<?php get_footer(); ?>
