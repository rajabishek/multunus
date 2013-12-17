<?php
/**
 * Template Name: Team
 */
get_header();

the_post();

// Get 'team' posts
$team_posts = get_posts( array(
    'post_type' => 'team',
    'posts_per_page' => -1, // Unlimited posts
    'orderby' => 'title', // Order alphabetically by name
    'order' => 'ASC'
) );

if ( $team_posts ):
?>
<section class="container team-header">
  <h1 class="align-left">Here's To The Crazy Ones</h1>
  <blockquote>
    <p>Here's To The Crazy Ones. The misfits. The rebels. The trouble-makers. The ones who see things differently. And while some may see them as the crazy ones, we see genius. Because the people who are crazy enough to think they can change the world - are the ones who DO!</p>
    <small><cite title="Source Title">Apple [1997]</cite></small>
  </blockquote>

</section>

<aside class="container team-sort">
  <ul class="list-inline category-list-desktop hidden-xs">
    <li class="categories-label"><span>Show:</span></li>
    <li class="active"><a data-category="all">All</a></li>
    <li><a data-category="management">Pointy Haired</a></li>
    <li><a data-category="technology">Technology</a></li>
    <li><a data-category="product">Product</a></li>
    <li><a data-category="people-culture">People & Culture</a></li>
  </ul>

  <div class="visible-xs category-list-mobile">
    <div class="categories-label">Show: </div>
    <div class="btn-group dropdown">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        All
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a data-category="all">All</a></li>
        <li><a data-category="management">Pointy Haired</a></li>
        <li><a data-category="technology">Technology</a></li>
        <li><a data-category="product">Product</a></li>
        <li><a data-category="people-culture">People & Culture</a></li>
      </ul>
    </div>
  </div>
</aside>

<section class="container clearfix team-images">
    <aside class="row profile hidden">
      <div class="translucent-layer">
      </div>
      <div class="container">
        <div class="row">
          <div class="image-container col-sm-6 col-xs-12">
              <img src="" alt="">
          </div>
          <div class="description col-sm-6 col-xs-12">
              <h2></h2>
              <h4></h4>
              <p class="bio"></p>
              <ul class="list-inline social-links">
                <li>
                  <a target="_blank" class="social github" href="" title="Github">
                    <img src="/img/github-icon-footer.png" alt=""/>
                  </a>
                </li>

                <li>
                  <a target="_blank" class="social twitter" href="" title="Twitter">
                    <img src="/img/twitter-icon-footer.png" alt=""/>
                  </a>
                </li>

                <!--li>
                  <a target="_blank" class="social facebook" href="" title="Facebook">
                    <img src="/img/facebook-icon-footer.png" alt=""/>
                  </a>
                </li>

                <li>
                  <a target="_blank" class="social google-plus" href="" title="G+">
                    <img src="/img/google-plus-icon-footer.png" alt=""/>
                  </a>
                </li-->
              </ul>
            </div>
        </div>
      </div>
    </aside>

    <?php
    foreach ( $team_posts as $post ):
      setup_postdata($post);
    ?>

    <figure class="col-sm-2 col-xs-4"
      data-name="<?php the_title(); ?>"
      data-category="<?php the_field('team_category'); ?>"
      data-image-big="<?php the_field('team_display_picture_big'); ?>"
      data-position="<?php the_field('team_position'); ?>"
      data-github="<?php the_field('team_github'); ?>"
      data-twitter="<?php the_field('team_twitter'); ?>"
      data-linkedin="<?php the_field('team_linkedin'); ?>"
      data-bio="<?php the_content(); ?>">
        <img src="<?php the_field('team_display_picture_small'); ?>" alt="<?php the_title(); ?>, <?php the_field('team_position'); ?>">
        <figcaption><?php the_title(); ?></figcaption>
    </figure>

    <?php endforeach; ?>
</section>
<?php get_footer(); ?>
<?php endif; ?>