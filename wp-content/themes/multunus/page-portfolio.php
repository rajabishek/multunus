<?php
/**
 * Template Name: Portfolio
 */
get_header();

// Get 'portfolio' posts
$portfolio_item = get_posts( array(
    'post_type' => 'portfolio',
    'posts_per_page' => -1 // Unlimited posts
));

if ($portfolio_item): ?>
    <div class="container">
        <div class="main-heading">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 hero-message">
                    <h1 class="text-center">We've been busy</h1>
                    <h4 class="text-center grey">We've built web apps for the desktop & mobile. And native apps on iOS and Android. For one person startups and large enterprises.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="cards">
                <?php  foreach ($portfolio_item as $post):
                       setup_postdata($post);
                       $permalink = post_permalink($post->ID); ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <a href="href="<?php echo $permalink ?>" target="_blank">
                                <figure class="media">
                                    <span style="background-image: url(<?php the_field('thumbnail'); ?>);"></span>
                                </figure>
                                <div class="meta">
                                    <h5>Company name</h5>
                                    <p><?php the_title(); ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="lets-talk">
        <h2 class="text-center">Its time to craft brilliance together ? Let's chat.</h2>
        <div class="text-center">
            <a class="button button-white-filled" href="/contact">Get in touch with us today</a>
        </div>
    </div>
    <?php get_footer(); ?>
<?php endif; ?>


