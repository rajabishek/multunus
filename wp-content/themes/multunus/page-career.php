<?php
  /*
   Template Name: Careers
   */
?>

<?php get_header(); ?>

<div class="video-section-container career-page">
  <div class="overlay">
    <div class="overlay-content">
      <h1 id="quote">Build your dream. At work.</h1>
      <div data-toggle="scroll" rel="#test-drive" class="btn-red">Take A Test Drive<span></span></div>
    </div>
  </div>

  <video tabindex="0" autoplay loop>
    <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/1.mp4" type="video/mp4" />
    <source src="http://multunus_website.s3.amazonaws.com/wp-content/uploads/2013/12/2.mp4" type="video/mp4" />
  </video>
</div>

<article class="founder-quote">
  <div class="container">
    <div class="col-md-4 quote-video">
      <a id="founder-video" href="http://www.youtube.com/v/-K0U9ppL7N0&autoplay=1">
        <img src="/img/founder.jpg" />
        <span></span>
      </a>

      <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <iframe width="400" height="300" frameborder="0" allowfullscreen=""></iframe>
          </div>
        </div>
      </div><!-- end of myModal -->

    </div><!-- end of quote-video -->

    <div class="col-md-8 quote-text">
      <p>At Multunus, we do a lot of things differently. But it starts from the way we hire. We look for people who're likely to make this place more friendly, more transparent,
        more fun, more disciplined, more mindful, more bold, more customer focused.</p>
      <p id="founder"><span id="name">Vaidy</span>, <em>Founder & CEO</em></p>
    </div>

  </div><!-- end of container -->
</article>

<article class="career-values">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <h1>5 reasons to work here:</h1>
      </div>

      <div class="col-md-7 why-work-here" >
        <ul>
          <li><span>You'll love our hacknights.</span></li>
          <li><span>Get high by shipping working software every 2 days.</span></li>
          <li><span>Create more than just software. Help entrepreneurs succeed.</span></li>
          <li><span>Work with honest and nice people. Who care about both work <em>and</em> life.</span></li>
          <li><span>Dive into the new and exciting world of Lean Startups.</span></li>
        </ul>
      </div>

    </div><!-- end of row -->
  </div><!-- end of container -->
</article>

<section id="test-drive" class="career-images">
  <div class="container">
    <div class="row">
    <article class="col-md-3 col-xs-12">
      <img src="http://placekitten.com/344/394" />
    </article>

    <article class="col-md-4 col-md-push-2 col-xs-12 work-with-us">
      <h1 id="still-thinking-heading">Take a test drive.</h1>
      <p id="still-thinking-text">We hire differently. Check out the challenges we have in store for you. You'll
      get a taste of how it feels to work with us.</p>
    </article>

    <article class="col-md-2 col-md-pull-4 col-xs-12">
      <img src="http://placekitten.com/344/394" />
    </article>

    <article class="col-md-3 col-xs-12">
      <img src="http://placekitten.com/344/394" />
    </article>
    </div>
</div>
</section><!-- end of career-food -->

<article id="open-positions" class="career-openings">
  <div class="container">
    <h1>Open Positions</h1>
      <aside class="row career-position-container">

    <?php
    if ($childrens = get_children('post_parent=40&post_type=page')):

        // Logic to center align open positions
        $num_childrens = count($childrens);

        switch($num_childrens) {
          case 1:
            $offset_num = 4;
            break;
          case 2:
              $offset_num = 2;
              break;
          case 3:
              $offset_num = 1;
              break;
        }

      $i = 0;
      foreach ($childrens as $children):
        $post = get_post($children->ID);
        $title = $post->post_title;
        $excerpt = $post->post_excerpt;
        $permalink = post_permalink($children->ID);

        if ($i == 0) {
          echo '<div class="col-md-4 col-md-offset-' . $offset_num . '">';
        }
        else {
          echo '<div class="col-md-4">';
        }
        $i++;
    ?>

      <div class="career-position">
         <a href="<?php echo $permalink ?>">
         <span><?php echo $title ?></span>
         <p><?php echo $excerpt ?></p>
         </a>
       </div>
     </div>

    <?php endforeach; ?>
    <?php endif; ?>
      </aside>
  </div>
</article>

<?php get_footer(); ?>
