<?php
  /*
   Template Name: Career Details
   */
?>

<?php get_header(); the_post(); ?>
<?php
  $mypage = get_page_by_path('careers');
  $mypageid = ( $mypage ? $mypage->ID : '0' );
?>

<div class="container current-openings-dropdown dropdown-container visible-xs">
  <div class="dropdown-label">Current Openings: </div>
  <div class="btn-group dropdown">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <?php the_title(); ?>
    </button>
    <ul class="dropdown-menu" role="menu">
      <?php
        $page_id = get_queried_object_id();
        if ($childrens = get_children('post_parent=' . $mypageid . '&post_type=page')):
          foreach ($childrens as $children):
            $post = get_post($children->ID);
            $title = $post->post_title;
            $permalink = post_permalink($children->ID);
            if ($page_id == $children->ID):
              echo '<li class="active"><a href="' . $permalink . '">' . $title . '</a></li>';
            else:
              echo '<li><a href="' . $permalink . '">' . $title . '</a></li>';
            endif;
          endforeach;
        endif; wp_reset_query();
      ?>
    </ul>
  </div>
</div><!-- end of container -->

<section id="career-details" class="career-details">
  <div class="container">
    <div class="row">
      <div class="col-md-8 career-details-content">
        <h1 class="position-title"><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
      </div>

      <div class="col-md-3 col-md-offset-1 career-details-sidebar">
        <div class="hidden-xs">
          <h4>Open Positions</h4>
          <ul class="current-openings">

          <?php
          if ($childrens = get_children('post_parent=' . $mypageid . '&post_type=page')):
            foreach ($childrens as $children):
              $post = get_post($children->ID);
              $title = $post->post_title;
              $permalink = post_permalink($children->ID);
          ?>

            <li><a href="<?php echo $permalink ?>"><?php echo $title ?></a></li>
          <?php endforeach; ?>
          <?php endif; ?>
          </ul>
        </div>

        <h4>FAQs</h4>
        <ol class="career-details-faq">
        <?php $page = get_page_by_path( 'faq'  ); ?>
        <?php $the_excerpt = $page->post_excerpt; ?>
        <?php echo $the_excerpt; ?>
        </ol>

        <?php $permalink = get_permalink( get_page_by_path( 'faq' ) ); ?>
        <a id="read-faq-more" href="<?php echo $permalink ?>">Read All FAQs</a>
      </div><!-- end of career-details-section -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>



<?php get_footer(); ?>
