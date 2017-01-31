<?php
    /*
     Template Name: Careers
     */
    ?>
<?php get_header(); ?>
<div class="video-section-container career-page">
    <div class="overlay">
        <div class="overlay-content">
            <h1 id="quote">Freedom.</h1>
            <!-- <h2 style="color:white"> -->
            <!-- <span>Autonomous Culture | Open Source | Large Scale Architectures</span> -->
            <!-- </h2> -->
            <div data-toggle="scroll" rel="#more-info" class="button button-red-filled">Start with a 4 day workweek<span></span></div>
        </div>
    </div>
    <video autoplay="autoplay" loop="loop" preload="auto" poster="/img/careers-page-poster.jpeg" data-video-name="careers">
    </video>
</div>
<article id="more-info" class="career-values">
    <div class="container">
        <div class="row">
            <div class="row design-container">
                <div class="col-md-6 design-caption">
                    <span class="design-heading">
                        <h3>Choose a 4 day workweek</h3>
                    </span>
                    <div class="design-description">
                        <p>
                            Choose your favorite project. Work on it every Monday. <a href="http://www.multunus.com/blog/2016/01/20-investment-time-background-story/" target="_blank">Read more about our 20% investment time.</a>
                        </p>
                    </div>
                </div>
                <div class="design-list-container col-md-6" >
                    <span class="design-heading">
                        <h3>Choose our future
                        </h3>
                    </span>
                    <div class="design-description">
                        <p>
                            Yep. <a href="http://www.multunus.com/blog/2016/01/relinquishing-control-to-our-council-a-radical-experiment/" target="_blank">Get elected into our council</a> and make CEO level decisions. Like..what our revenues should be. No kidding.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 design-caption">
                    <span class="design-heading">
                        <h3>Choose your salary
                        </h3>
                    </span>
                    <div class="design-description">
                        <p>
                            Its 2017. It’s time to break the rules. Have fun using <a href="http://www.multunus.com/blog/2015/09/our-autonomous-salary-system-the-background-story-part-1/" target="_blank">our autonomous salary system.</a>
                        </p>
                    </div>
                </div>
                <div class="design-list-container col-md-6" >
                    <span class="design-heading">
                        <h3>Choose your future</h3>
                    </span>
                    <div class="design-description">
                        <p>
                            Want to code all your life? <a href="http://www.multunus.com/blog/2016/01/training-fish-climb-tree/" target="_blank">No problem</a>. Want to try out product management or think you’re a designer at heart? <a href="http://www.multunus.com/blog/2016/01/training-fish-climb-tree/" target="_blank"> Go for it</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
</article>

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