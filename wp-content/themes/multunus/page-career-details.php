<?php
  /*
   Template Name: Career Details
   */
?>

<?php get_header(); the_post(); ?>

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

<section id="career-details" class="career-details">
  <div class="container">
    <div class="row">
      <div class="col-md-8 career-details-content">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>

        <aside class="career-contact">
          <h5>Interested</h5>
          <p>Send a little something about yourself to <a href="mailto:jobs@multunus.com">jobs@multunus.com</a></p>
        </aside>
      </div>

      <div class="col-md-3 col-md-offset-1 career-details-sidebar">
        <h4>Current Openings</h4>
        <ul class="current-openings">
        <li>Programmer</li>

        <?php
        if ($childrens = get_children('post_parent=40&post_type=page')):
          foreach ($childrens as $children):
            $post = get_post($children->ID);
            $title = $post->post_title;
            $permalink = post_permalink($children->ID);
        ?>

          <li><a href="<?php echo $permalink ?>"><?php echo $title ?></a></li>
        <?php endforeach; ?>
        <?php endif; ?>
        </ul>

        <h4>How We Hire</h4>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>

        <h4>FAQ</h4>
        <ol class="career-faq">
          <li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li>
          <p>onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
            aliqua. Ut enim ad minim veniam,
          <li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</li>
          <p>onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
            aliqua. Ut enim ad minim veniam,
        </ol>

        <a id="read-faq-more" href="#">Read All FAQ</a>
      </div><!-- end of career-details-section -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</section>



<?php get_footer(); ?>
