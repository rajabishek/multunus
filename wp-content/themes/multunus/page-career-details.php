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

<div class="video-section-container career-page">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">Build your dream. At work.</h1>
      <div rel="#career-details" class="btn-red">Join Us<span></span></div>
    </div>
  </div>

  <video tabindex="0" autoplay loop>
    <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/1.mp4" type="video/mp4" />
    <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/2.mp4" type="video/mp4" />
  </video>
</div>

<div class="container current-openings-dropdown dropdown-container visible-xs">
  <div class="dropdown-label">Current Openings: </div>
  <div class="btn-group dropdown">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      Programmer 
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

        <aside class="career-contact">
          <h5>Interested</h5>
          <p class="hidden-xs">Send a little something about yourself to <a href="mailto:jobs@multunus.com">jobs@multunus.com</a></p>
          <p class="visible-xs">Send a little  about yourself to <br /><a href="mailto:jobs@multunus.com">jobs@multunus.com</a></p>
        </aside>
      </div>

      <div class="col-md-3 col-md-offset-1 career-details-sidebar">
        <div class="hidden-xs">
          <h4>Current Openings</h4>
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

        <h4>How We Hire</h4>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>

        <h4>FAQ</h4>
        <ol class="career-details-faq">
          <li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li>
          <p>onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
            aliqua. Ut enim ad minim veniam,
          <li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li>
          <p>onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
            aliqua. Ut enim ad minim veniam,
        </ol>

        <?php $permalink = get_permalink( get_page_by_path( 'faq' ) ); ?> 
        <a id="read-faq-more" href="<?php echo $permalink ?>">Read All FAQ</a>
      </div><!-- end of career-details-section -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>



<?php get_footer(); ?>
