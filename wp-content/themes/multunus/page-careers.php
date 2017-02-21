<?php
    /*
     Template Name: Careers
     */
    ?>
<?php get_header(); ?>
<div class="video-section-container career-page">
    <div class="overlay">
        <div class="overlay-content">
            <h1 id="quote">Join Our Team.</h1>
            <div data-toggle="scroll" rel="#open-positions" class="button button-red-filled">Find a role<span></span></div>
        </div>
    </div>
    <video autoplay="autoplay" loop="loop" preload="auto" poster="/img/careers-page-poster.jpeg" data-video-name="careers">
    </video>
</div>
<article id="open-positions" class="career-openings">
    <div class="container">
        <h1>Open Positions</h1>
        <aside class="row career-positions-container">
            <?php
                $args = array(
                  'post_type' => 'page',
                  'post_parent' => get_queried_object_id(),
                  'post_status' => 'publish'
                );
                $open_positions = get_children($args);
                if ($open_positions):
                  foreach ($open_positions as $children):
                    $post = get_post($children->ID);
                    $title = $post->post_title;
                    $excerpt = $post->post_excerpt;
                    $permalink = post_permalink($children->ID);
                ?>
            <div class="col-md-4 col-sm-6 col-xs-12 position-box-container">
                <div class="career-position">
                    <h3 class="position-name"><?php echo $title ?></h3>
                    <p><?php echo $excerpt ?></p>
                    <a href="<?php echo $permalink ?>" class="button button-red-border">Apply Now</a>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </aside>
    </div>
</article>
<?php get_footer(); ?>