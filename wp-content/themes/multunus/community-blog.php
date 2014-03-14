<article class="community-blog">
  <div class="container">

    <div class="row blog-row">
      <?php query_posts('posts_per_page=3&paged=' . $paged); ?>
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

    <?php wp_reset_query(); ?>
    <?php $blog_page_permalink = get_permalink( get_page_by_path( 'blog' ) ); ?>

    <div class="row align-right">
      <a href="<?php echo $blog_page_permalink ?>">See All</a>
      <span class="right-arrow"></span>
    </div>

  </div><!-- end of container -->
</article>
