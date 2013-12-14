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
) );

if ( $team_posts ):
?>
<section class="container team-header">
  <h1 class="align-left">Meet our multi-disciplinary team</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
    mollit anim id est laborum.
  </p>
</section>
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