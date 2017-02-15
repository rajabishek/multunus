<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
    $next_post = get_next_post();
    if(!$next_post) {
      $args = array(
        'post_type' => 'portfolio',
        'posts_per_page'   => 1,
        'order'            => 'ASC');
      $next_posts = get_posts($args);
      $next_post = $next_posts[0];
    }
    
    $previous_post = get_previous_post();
    if(!$previous_post) {
      $args = array(
        'post_type' => 'portfolio',
        'posts_per_page'   => 1);
      $previous_posts = get_posts($args);
      $previous_post = $previous_posts[0];
    }
    ?>
<section class="single-portfolio"> 
    <div class="banner-section-container">
        <div class="overlay">
            <div class="overlay-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 main-heading">
                            <h1><?php the_title(); ?></h1>
                            <h5 class="hidden-xs hidden-sm">User Research | Information Architecture | Wireframing | Prototyping | Product development</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="banner-img-container" style="background: url('<?php the_field('background_image'); ?>') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-attachment: scroll;
        background-position: center !important;
        background-repeat: no-repeat no-repeat;">
        </div>
    </div>
    <?php if(!empty(get_post_meta($post->ID, 'challenge', true)) && !empty(get_post_meta($post->ID, 'outcome', true))): ?>
        <section class="story-overview">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
                        <div class="highlight">
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="challenge">
                                        <h3>The challenge</h3>
                                        <p class="overview-content"><?php the_field('challenge'); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="outcome">
                                        <h3>The outcome</h3>
                                        <p class="overview-content"><?php the_field('outcome'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="story-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6">
                    <div class="customer-data">
                        <img src="<?php the_field('customer_image'); ?>"></img>
                        <div class="customer-info">
                            <h4><?php the_field('customer_name'); ?></h4>
                            <p class="customer-org"><?php the_field('customer_organization'); ?></p>
                        </div>
                        <div class="customer-review">
                            <?php if(get_field('customer_quote') != "") { ?>
                            <div class="quote-text">
                                <i class="fa fa-quote-left"> </i><span id="text"><?php the_field('customer_quote'); ?></span>
                            </div>
                            <?php } ?>
                            <?php if(get_field('customer_video') != "") { ?>
                            <a class="button-with-icon client-video" href="<?php the_field('customer_video'); ?>">
                            <span id="reel-icon"></span>
                            <span class="underline">Watch Video</span>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-offset-1 col-md-10">
                    <div class="story">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="other-portfolios">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
                    <h3>MORE STORIES YOU MIGHT LIKE</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="media-card">
                                <a href="<?php get_permalink($previous_post->ID); ?>" target="_blank" data-lity>
                                    <figure class="media">
                                        <span style="background-image: url('<?php the_field('background_image',$previous_post->ID); ?>');"></span>
                                    </figure>
                                    <div class="meta">
                                        <p class="heading"><?php the_field('company',$previous_post->ID); ?></p>
                                        <p class="description"><?php echo $previous_post->post_title; ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media-card">
                                <a href="<?php get_permalink($next_post->ID); ?>" target="_blank" data-lity>
                                    <figure class="media">
                                        <span style="background-image: url('<?php the_field('background_image',$next_post->ID); ?>');"></span>
                                    </figure>
                                    <div class="meta">
                                        <p class="heading"><?php the_field('company',$next_post->ID); ?></p>
                                        <p class="description"><?php echo $next_post->post_title; ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="lets-talk">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="text-center">Its time to craft brilliance together ? Let's chat.</h2>
                    <div class="text-center">
                        <a class="typeform-share link button button-white-filled" href="https://multunus-feedback.typeform.com/to/nGvoX3" data-mode="2" target="_blank">Get in touch with us today</a>
                        <script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm_share',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; endif; ?>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <iframe width="400" height="300" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>