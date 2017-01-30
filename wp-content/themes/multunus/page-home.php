<?php
    /*
     Template Name: Home
     */
    ?>
<?php get_header(); ?>
<link rel='stylesheet prefetch' href='http://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css'>
<section class="home-page">
    <div class="banner-section-container">
        <div class="overlay">
            <div class="overlay-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 main-heading">
                            <h1>Solutions by design.</h1>
                            <h4>We translate complex ideas into simple and elegant products</h4>
                            <button class="button button-red-filled">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="banner-img-container">
        </div>
    </div>   
    <div class="services-section">
        <div class="container">
            <div class="row">
                <h1>Experience and skills you need</h1>
                <p>We've produced top quality applications with hundreds of clients for more than 12 years. From one person startups to Fortune 500 enterprises, universities, and non-profits. This is our purpose, and here's what we can do for you.</p>
            </div>
            <div class="services">
                <div class="row">
                    <div class="col-md-6">
                        <div class="clickable-card">
                            <h2>Design</h2>
                            <p>Business goals should motivate design. The product must constantly evolve based on analytics, user feedback, and shifting short-term objectives.</p>
                            <p>We help enterprises & startup clients to set a strong branding and design framework early on.</p>
                            <a href="/services" class="button button-red-border">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="clickable-card">
                            <h2>Technology</h2>
                            <p>With our roots in enterprise systems and agile delivery, we’ve been at the forefront of some of the industry’s biggest changes.</p>
                            <p>We’re here to bring the technology that’s at our core, to yours.</p>
                            <a href="/services" class="button button-red-border">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="customer-stories wild-sand">
        <div class="container">
            <?php
                $portfolio_items = get_posts( array(
                    'post_type' => 'portfolio',
                    'meta_key'    => 'show_customer_story_in_home_page',
                   'meta_value' => true,
                    'posts_per_page' => -1 // Unlimited posts
                ) );
            ?>
            <h1 class="text-center">Customer stories</h1>
            <div class="row">
                <div class="col-sm-12">
                    <div class="testimonials">
                        <?php
                            foreach ( $portfolio_items as $index => $post ):
                            setup_postdata($post);
                            $permalink = post_permalink($post->ID);
                        ?>
                            <div class="testimonial">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="testimonial-image" src="<?php the_field('thumbnail'); ?>">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="story">
                                                <h3 class="title"><?php the_title(); ?></h3>
                                                <p class="snippet"><?php the_field('story_snippet'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="review-info">
                                            <div class="col-md-1">
                                                <img class="profile-image" src="<?php the_field('customer_image') ?>">
                                            </div>
                                            <div class="col-md-9">
                                                <p class="review"><?php the_field('customer_quote'); ?></p>
                                                <p class="person-name">-- <?php the_field('customer_name'); ?>, <?php the_field('customer_organization'); ?></p>
                                            </div>
                                            <div class="col-md-2">
                                                <a class="read-more button button-red-border" href="<?php echo $permalink ?>">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <button class="carousel-prev-button"></button>
                        <button class="carousel-next-button"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="community">
        <div class="container">
            <div class="row">
                <h1 class="text-center">We <img src="/img/home-heart.svg" class="heart"> our community</h1>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="clickable-card">
                        <h2>Open Source</h2>
                        <p>We highly believe in open source technologies. We get benefited from open-source code every single day.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus dicta, soluta animi molestiae minus soluta temporibus unde porro nobis accusamus.</p>
                        <a class="button button-red-border">Learn More</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <a href="https://github.com/multunus/onemdm-server" target="_blank">
                        <div class="repo-card">
                            <div class="repo-info">
                                <h5 class="repo-title">One MDM Server</h5>
                                <p class="repo-description">Open Source Mobile Device Management (MDM) solution</p>
                            </div>
                            <div class="repo-stats">
                                <div class="repo-stats-group">
                                    <h5 class="repo-stats-title">Stars</h5>
                                    <h6 class="repo-stat">31</h6>
                                </div>
                                <div class="repo-stats-group">
                                    <h5 class="repo-stats-title">Forks</h5>
                                    <h6 class="repo-stat">12</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="https://github.com/multunus/dashboard-clj" target="_blank">
                        <div class="repo-card">
                            <div class="repo-info">
                                <h5 class="repo-title">CLJ Dashboard</h5>
                                <p class="repo-description">A Clojure mini-framework for building realtime dashboards</p>
                            </div>
                            <div class="repo-stats">
                                <div class="repo-stats-group">
                                    <h5 class="repo-stats-title">Stars</h5>
                                    <h6 class="repo-stat">77</h6>
                                </div>
                                <div class="repo-stats-group">
                                    <h5 class="repo-stats-title">Forks</h5>
                                    <h6 class="repo-stat">3</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="clickable-card">
                        <h2>Blog</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sapiente tempora amet asperiores exercitationem alias in voluptates provident nihil nulla.</p>
                        <a class="button button-red-border">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Must Reads</h2>
                    <ul class="resource-links">
                        <li class="resource-link"><a href="/blog/2016/12/abstractions-ruby-clojure/" target="_blank"><h5>Abstractions in ruby & clojure</h5></a></li>
                        <li class="resource-link"><a href="/blog/2017/01/refactoring-rails-view-objects/" target="_blank"><h5>Refactoring: Rails Presenter pattern</h5></a></li>
                        <li class="resource-link"><a href="/blog/2017/01/parallel-tests-rails/" target="_blank"><h5>Parallel Test Execution in Rails</h5></a></li>
                        <li class="resource-link"><a href="/blog/2016/12/continuous-delivery-us/" target="_blank"><h5>Continuous Delivery – Is it for everyone?</h5></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="clickable-card">
                        <h2>Talks</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste atque ipsam nisi, consequatur velit commodi eius delectus iusto beatae doloremque quam itaque aperiam dolore suscipit temporibus unde porro nobis accusamus.</p>
                        <a class="button button-red-border">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Watch us speak</h2>
                    <ul class="resource-links">
                        <li class="resource-link"><a href="https://www.youtube.com/watch?v=cuRyW0FfBiM" target="_blank"><h5>Culture of Continue Delivery</h5></a></li>
                        <li class="resource-link"><a href="https://www.youtube.com/watch?v=RvlmVKf-NDs" target="_blank"><h5>Garden City Ruby 2014</h5></a></li?
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="craftmanship wild-sand">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="media">
                        <img src="/img/craftmanship.jpg" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="meta">
                        <h1 class="text-center">This is the title.</h1>
                        <h4 class="text-center grey">This is the subtile. A catchy one.</h4>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="grey">
                                    <p>This would talk about the mission and goal of the company. Why we do what we do and what we believe in.</p>
                                    <p>This would talk about what we want our customer to feel and how we are different from any other company out there. What makes us better and why someone should choose working with us.</p>
                                    <p>This is an extra section whether we can add any other content that promotes the brand. This can probably tell others how we have grown and what steps we have taken so far to achieve our goals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container big-picture">
        <h1 class="text-center">The big picture</h1>
        <div class="row">
            <div class="col-md-7 media">
                <img src="/img/big-picture.svg" />
            </div>
            <div class="col-md-5">
                <div class="meta">
                    <h2>We take an inside out approach.</h2>
                    <p class="grey">What makes us different. Take a <a href="/process">deep dive</a> to find out.</p>
                </div>
            </div>
        </div>
    </div> -->
    <div class="lets-talk">
        <h2 class="text-center">Its time to craft brilliance together ? Let's chat.</h2>
        <div class="text-center">
            <a class="button button-white-filled" href="/contact">Get in touch with us today</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.3.14/slick.min.js'></script>