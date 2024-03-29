<?php
  /*
   Template Name: Open Source
   */
?>

<?php get_header(); ?>

<section class="container quote-header">
  <h1 class="align-left">Open Source</h1>
  <p>
    Without Open Source software, our business would perhaps have been non-existent.
    We rely on the hard work and generosity of many many individuals and
    companies - who have made their software open source. We’ve just started
    on our own journey of giving back to the community. But please do come back
    and visit this page every couple of months. You should see some new stuff here.
  </p>
</section>

<article>
  <div class="container">
    <div class="row blog-row">
      <?php query_posts('post_type="open_source"&posts_per_page=6&paged=' . $paged); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="col-md-4">
          <div class="one-post">

            <div class="post-img">
              <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            </div>

            <div class="post-text">
              <h4><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
                <?php
                  if ( has_post_thumbnail() ) {
                    echo '<p>' . wp_trim_words(get_the_excerpt(), 12, '...') . '</p>';
                  } elseif ( has_excerpt() ) {
                    echo '<p>' . wp_trim_words(get_the_excerpt(), 40, '...') . '</p>';
                  } else {
                    echo '<p>' . wp_trim_words(get_the_content(), 40, '...') . '</p>';
                  }
                ?>
            </div>

            <div class="post-meta">
              <span id="post-date"><?php the_time('d M, Y'); ?></span>
              <span id="post-category">
                <?php
                  $categories = get_the_category();
                  $separator = ', ';
                  $output = '';

                  if($categories){
                    foreach($categories as $category) {
                      $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
                    }
                    echo trim($output, $separator);
                  }
                ?>
              </span>
            </div>

          </div><!-- end of one-post -->
        </div><!-- end of col-md-4 -->
      <?php endwhile; endif; ?><!-- end The Loop -->
    </div><!-- end of row  -->

    <?php numeric_pagination_nav(); ?>

    <?php wp_reset_query(); ?>

  </div><!-- end of container -->
</article>

<?php get_footer(); ?>
