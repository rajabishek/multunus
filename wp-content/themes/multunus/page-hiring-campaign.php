<?php
/**
 * Template Name: Hiring Campaign
 */
get_header();
?>

<div class="hiring-campaign">
  <div class="jumbotron campaign">
    <div id="Stage" class="EDGE-17769441 fade in" style=".edgeLoad-EDGE-17769441 { visibility:hidden; }"></div>
    <div class="something fade">
      <h1>We Do Things Differently.</h1>
      <h3><a data-toggle="scroll" rel=".content-section">Watch how</a></h3>
    </div>
  </div>

  <div class="content-section">
    <?php
    $hiring_campaign_posts = get_posts( array(
    'post_type' => 'hiring_campaign',
    'posts_per_page' => -1 // Unlimited posts
    ) );

    if ( $hiring_campaign_posts ):
    ?>
      <div class="container">
        <?php
        foreach ( $hiring_campaign_posts as $post ):
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
</div><!-- end of hiring-campaign -->

<?php get_footer(); ?>
