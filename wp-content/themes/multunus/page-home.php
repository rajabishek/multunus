<?php
/*
 Template Name: Home
 */
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/multunus/css/lity.min.css">
<section class="home-page">
    <div class="banner-section-container">
        <div class="overlay">
            <div class="overlay-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 main-heading">
                            <h1>Solutions by design.</h1>
                            <h5>We translate complex ideas into simple and elegant products</h5>
                            <a href="/portfolio/good-karma" class="button button-red-filled">See our work</a>
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
                <div class="col-sm-12">
                    <h1>Experience and skills you need</h1>
                    <p class="spacing">9 years on a mission to build a remarkable software consulting team from India. Not the large hordes of programmers but a specialised SWAT team experienced in building web and mobile products. 24 awesome warriors and growing slowly, one warrior at a time.</p>
                </div>
            </div>
            <div class="services">
                <div class="row">
                    <div class="col-md-6">
                        <div class="clickable-card">
                            <a href="/services#innovation-consulting">
                                <img src="/img/home-services-innovation.svg" class="illustration">
                                <h3>Innovation</h3>
                                <p class="spacing">We believe that innovation should happen all the time in all teams, not just before starting a project or by a special A-Team. Design Thinking & Lean Startup are our weapons.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="clickable-card">
                           <a href="/services#mobile-development">
                                <img src="/img/home-services-tech.svg" class="illustration">
                                <h3>Technology</h3>
                                <p class="spacing">We develop software that is engaging, user friendly & easy to use without a user manual.</p>
                                <p class="spacing">We release a new feature every week because real learning for the business is from usage by customers.</p>
                           </a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="button button-red-border" href="/services">See all our services</a>
        </div>
    </div>
    <section class="customer-stories-section wild-sand">
        <div class="container">
            <?php
            $portfolio_items = get_posts( array(
                'post_type' => 'portfolio',
                'meta_key'            => 'show_customer_story_in_home_page',
                      'meta_value'    => true,
                'posts_per_page' => -1 // Unlimited posts
            ) );
            ?>
            <h1 class="section-heading align-center">Customer Stories</h1>
            <div class="container hidden-xs hidden-sm">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs container" role="tablist">
                    <?php
                        foreach ( $portfolio_items as $index => $post ):
                          setup_postdata($post);
                          $permalink = post_permalink($post->ID);
                        ?>
                    <li role="presentation" class="col-xs-3 <?php echo($index == 0 ? 'active' : '') ?>">
                        <a href="#<?php echo $post->ID; ?>" aria-controls="home" role="tab" data-toggle="tab">
                        <img src="<?php echo the_field('logo') ?>">
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <?php
                    foreach ( $portfolio_items as $index => $post ):
                      setup_postdata($post);
                      $permalink = post_permalink($post->ID);
                      ?>
                <div role="tabpanel" class="tab-pane fade <?php echo($index == 0 ? 'in active' : '') ?>" id="<?php echo $post->ID; ?>">
                    <div class="container story-snippet-container">
                        <div class="col-md-1">
                            <figure class="author-image-container">
                                <img class="img-circle" src="<?php the_field('customer_image') ?>">
                            </figure>
                        </div>
                        <div class="col-md-9">
                            <p class="story-snippet">
                                <?php the_field('customer_quote'); ?>
                            </p>
                            <p class="author">- <?php the_field('customer_name'); ?>, <?php the_field('customer_organization'); ?></p>
                        </div>
                        <div class="col-md-2">
                            <a class="button button-red-border" href="<?php echo $permalink ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <div class="community" id="community-section">
        <div class="container">
            <div class="row">
                <h1 class="text-center">We <img src="/img/home-heart.svg" class="heart"> our community</h1>
            </div>
            <section class="open-source-section">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Open Source</h2>
                        <p class="spacing">We highly believe in open source technologies. With open source we are more productive & fight lesser number of problems every day.</p>
                        <p class="spacing">Open source projects helps us in developing a more polished product over time. Its stops us from reinventing the wheel & encourages us to build upon the work done by the community. We equally spend time contributing to projects & giving back to the community.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="https://github.com/multunus/dashboard-clj" target="_blank">
                                    <div class="repo-card">
                                        <img src="/img/home-community-dashboard.svg">
                                        <div class="repo-info">
                                            <h5 class="repo-title">CLJ Dashboard</h5>
                                            <p class="repo-description">A Clojure mini-framework for building realtime dashboards</p>
                                        </div>
                                        <div class="repo-stats">
                                            <div class="repo-stats-group">
                                                <p class="repo-stats-title">Stars</p>
                                                <p class="repo-stat">77</p>
                                            </div>
                                            <div class="repo-stats-group">
                                                <p class="repo-stats-title">Forks</p>
                                                <p class="repo-stat">3</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://github.com/multunus/Open-Playbook" target="_blank">
                                    <div class="repo-card">
                                        <img src="/img/home-community-network.svg">
                                        <div class="repo-info">
                                            <h5 class="repo-title">Open Playbook</h5>
                                            <p class="repo-description">Our open culture, tools and process playbook.</p>
                                        </div>
                                        <div class="repo-stats">
                                            <div class="repo-stats-group">
                                                <p class="repo-stats-title">Stars</p>
                                                <p class="repo-stat">33</p>
                                            </div>
                                            <div class="repo-stats-group">
                                                <p class="repo-stats-title">Forks</p>
                                                <p class="repo-stat">5</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://github.com/multunus/onemdm-server" target="_blank">
                                    <div class="repo-card">
                                        <img src="/img/home-community-database.svg">
                                        <div class="repo-info">
                                            <h5 class="repo-title">One MDM Server</h5>
                                            <p class="repo-description">Open Source Mobile Device Management (MDM) solution</p>
                                        </div>
                                        <div class="repo-stats">
                                            <div class="repo-stats-group">
                                                <p class="repo-stats-title">Stars</p>
                                                <p class="repo-stat">31</p>
                                            </div>
                                            <div class="repo-stats-group">
                                                <p class="repo-stats-title">Forks</p>
                                                <p class="repo-stat">12</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://github.com/multunus/autonomous-rc-car" target="_blank">
                                    <div class="repo-card">
                                        <img src="/img/home-community-racing.svg">
                                        <div class="repo-info">
                                            <h5 class="repo-title">Autonomous RC car</h5>
                                            <p class="repo-description">Autonomous RC car using Raspberry Pi and ANN</p>
                                        </div>
                                        <div class="repo-stats">
                                            <div class="repo-stats-group">
                                                <p class="repo-stats-title">Stars</p>
                                                <p class="repo-stat">142</p>
                                            </div>
                                            <div class="repo-stats-group">
                                                <p class="repo-stats-title">Forks</p>
                                                <p class="repo-stat">37</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <a href="/community/open-source/" class="button button-red-border">See more projects</a>
                    </div>
                </div>
            </section>
            <section class="blog-section">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Blog</h2>
                        <p class="spacing">We write a lot about technology & design. We have always found better ways to improve our craft by reading articles from the community. It has given our team an opportunity to understand different perspectives & ideas on solving a particular problem.</p>
                        <p class="spacing">The learnings vary from small insights to full blown realizations. In some cases it helps us to connect the dots & understand the bigger picture.</p>
                        <div class="row">
                            <div class="col-md-6">
                                 <ul class="resource-links">
                                    <li class="resource-link">
                                        <a href="/blog/2016/07/test-driving-react-native-applications/" target="_blank">
                                            <h4>Test driving React Native applications</h4>
                                            <p>React Native is a game changing mobile app development framework that concentrates on fast...</p>
                                        </a>
                                    </li>
                                    <li class="resource-link">
                                        <a href="/blog/2016/11/building-sql-like-dsl-clojure-part-1/" target="_blank">
                                            <h4>Building an SQL like DSL in Clojure</h4>
                                            <p>Clojure is a modern dialect of Lisp. Being a Lisp is what gives Clojure a lot of its power. Clojure...</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="resource-links">
                                    <li class="resource-link">
                                        <a href="/blog/2016/02/noobs-walkthrough-re-frame-app/" target="_blank">
                                            <h4>Re-frame Application</h4>
                                            <p>Re-frame is a very simple but expressive library for writing single-page applications (SPAs)...</p>
                                        </a>
                                    </li>
                                    <li class="resource-link">
                                        <a href="/blog/2016/12/continuous-delivery-us/" target="_blank">
                                            <h4>Autonomous RC car</h4>
                                            <p>In this project, we will be building an autonomous rc car using supervised learning of a neural...</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="/blog" class="button button-red-border">Read more articles</a>
                    </div>
                </div>
            </section>
            <section class="talks-section">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Conference talks</h2>
                        <p class="spacing">We are very active with giving talks & attending conferences. This is one of the ways in which we keep ourseleves closely engaged with the community. Apart from learning something new at conferences, meeting new people & sharing our experiences with others help us with networking.</p>
                        <p class="spacing">Supporting conferences has also helped us in gaining more exposure & awareness about the happening in the community. The inspiration that we get from every conference pushes us to work harder every day.</p>
                        <div class="talks">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="media-card">
                                        <a href="https://www.youtube.com/watch?v=E15ZV7eL5CM" target="_blank" data-lity>
                                            <figure class="media">
                                                <span style="background-image: url('/img/home-community-rootconf.jpg');"></span>
                                            </figure>
                                            <div class="meta">
                                                <p class="heading">Rootconf 2016</p>
                                                <p class="description">Merge Hells? Feature Toggle to the Rescue</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="media-card">
                                        <a href="/blog/2014/02/sponsor-tech-conference-experiments/">
                                            <figure class="media">
                                                <span style="background-image: url('/img/home-community-multunus.jpg');"></span>
                                            </figure>
                                            <div class="meta">
                                                <p class="heading">Meta Refresh 2014</p>
                                                <p class="description">Twitter Puzzle, Pair Programming & more</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="media-card">
                                        <a href="https://www.youtube.com/watch?v=2kJW0Mpg844" target="_blank" data-lity>
                                            <figure class="media">
                                                <span style="background-image: url('/img/home-community-droidcon.jpg');"></span>
                                            </figure>
                                            <div class="meta">
                                                <p class="heading">Droidcon 2015</p>
                                                <p class="description">Learnings from building Custom MDM</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- <div class="craftmanship wild-sand">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-container"></div>
                </div>
                <div class="col-md-6">
                    <div class="meta">
                        <h1 class="text-center">Craftmanship</h1>
                        <h4 class="text-center grey">We work with craftsman. Not developers.</h4>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="grey">
                                    <p>We focus on building products that are engaging & user friendly. Before even we start adding in a pixel we start thinking about what we want our customers to feel & then begin to craft around our intentions.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, ab, obcaecati. Tempore illo perspiciatis iusto animi quia. Neque ipsa incidunt mollitia sint blanditiis saepe.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
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
<?php get_footer(); ?>
<script type="text/javascript" src="/wp-content/themes/multunus/js/lity.min.js"></script>