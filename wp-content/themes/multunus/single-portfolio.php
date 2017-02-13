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
                        <div class="col-sm-12 main-heading">
                            <h1><?php the_title(); ?></h1>
                            <h5>User Research | Information Architecture | Wireframing | Prototyping | Product development</h5>
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
    <section class="story-overview">
        <div class="container-fluid">
            <div class="row">
                <div class="highlight">
                    <div class="col-md-offset-2 col-md-4">
                        <div class="challenge">
                            <h3>The challenge</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum debitis, explicabo qui iusto, quaerat voluptates magni aperiam, voluptatem aut quos maiores? Sunt ex culpa perspiciatis! Quaerat molestias, earum saepe pariatur.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="outcome">
                            <h3>The outcome</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusantium laborum dolores fugit aut aspernatur sequi labore quos minima, quaerat fugiat. Doloremque aperiam qui eos repellendus officiis iste blanditiis nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8">
                    <div class="border"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="story-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-offset-1 col-xs-10 col-sm-offset-4 col-sm-4">
                    <div class="customer-data">
                        <img src="<?php the_field('customer_image'); ?>"></img>
                        <div class="customer-info">
                            <h4><?php the_field('customer_name'); ?></h4>
                            <p class="customer-org"><?php the_field('customer_organization'); ?></p>
                        </div>
                        <div class="customer-review">
                            <?php if(get_field('customer_quote') != "") { ?>
                            <p><?php the_field('customer_quote'); ?></p>
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
                <div class="col-sm-offset-1 col-sm-10">
                    <div class="story">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
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