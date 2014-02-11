<?php
  /*
   Template Name: Blog
   */
?>

<?php get_header(); ?>

<article class="our-blog">
  <div class="container">

    <div class="row blog-top">
      <h1>Blog</h1>

      <div class="blog-categories dropdown-container">
        <div class="dropdown-label">Categories: </div>
        <div class="btn-group dropdown">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            All Posts
          </button>
          <ul class="dropdown-menu" role="menu">
            <?php $categories = get_categories();
              foreach ($categories as $category) {
                $category_id = get_cat_ID( $category->name );
                $category_link = get_category_link( $category_id );
                echo '<li><a href=' . $category_link . '>' . $category->name . '</a></li>';
              }
            ?>
          </ul>
        </div>
      </div><!-- end of  blog-categories -->

    </div><!-- end of blog-top -->

    <h2>All Posts</h2>

    <div class="row blog-row">
      <?php query_posts('posts_per_page=6&paged=' . $paged); ?>
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

    <?php numeric_pagination_nav(); ?>

    <?php wp_reset_query(); ?>

  </div><!-- end of container -->
</article>

<?php get_footer(); ?>
