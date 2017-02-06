<?php
/**
 * Template Name: Services
 */
get_header();

// Get 'Service' posts
$service_item = get_posts( array(
    'post_type' => 'services',
    'posts_per_page' => -1 // Unlimited posts
) );

$category_list = array();
foreach ( $service_item as $post ) {
    setup_postdata($post);
    $category_list[get_field('category')] = get_field('description');
}
$category_list = array_unique($category_list);

if ($service_item ): ?>
    <div class="container">
        <div class="main-heading">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 hero-message">
                    <h1 class="text-center">We build products that engaging & user friendly</h1>
                    <h4 class="text-center grey">We create user centric products for forward thinking startups and companies.</h3>
                </div>
            </div>
        </div>
    </div>
    <?php foreach ($category_list as $category => $description): ?>
        <div class="<?php echo str_replace(" ", "-", strtolower($category)); ?>" id="<?php echo str_replace(" ", "-", strtolower($category)); ?>">
            <div class="container">
                <div class="services">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><?php echo ucwords($category); ?></h2>
                            <p><?php echo $description; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ( $service_item as $post ):
                              setup_postdata($post);
                              $permalink = post_permalink($post->ID);
                        ?>
                            <?php if (strcmp($category,get_field('category')) == 0 ): ?>
                                <div class="col-md-6">
                                    <div class="clickable-card">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php echo the_field('description'); ?></p>
                                        <a class="button button-red-border" href="<?php echo $permalink ?>">Learn More</a>
                                    </div>
                                </div>
                            <? endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="lets-talk">
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
    <!-- <div class="web-development">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Web development</h2>
                    <p>Fish is one of the most wholesome foods that man can eat. In fact, people have been eating fish throughout human history. These days, many cooks yearn to add fish to their repertoire, but the whole process of cleaning and filleting fresh fish is a little scary to them.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="clickable-card">
                        <h3>Ruby on rails</h3>
                        <p>Gravity is an irresistible force. While it is certainly nice that it keeps us rooted to the planet, it also has a habit of pulling things lower than we might like over time.</p>
                        <a class="button button-red-border">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Others</h3>
                    <p>Making your own computer from scratch is not only fun to do but cheaper as well. You can get to choose the parts you want to use on your PC.</p>
                    <ul>
                        <li class="light">Javascript</li>
                        <li class="light">React</li>
                        <li class="light">Clojure</li>
                        <li class="light">Java</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-development">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Mobile development</h2>
                    <p>Fish is one of the most wholesome foods that man can eat. In fact, people have been eating fish throughout human history. These days, many cooks yearn to add fish to their repertoire, but the whole process of cleaning and filleting fresh fish is a little scary to them.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="clickable-card">
                        <h3>iOS</h3>
                        <p>Gravity is an irresistible force. While it is certainly nice that it keeps us rooted to the planet, it also has a habit of pulling things lower than we might like over time.</p>
                        <a class="button button-black-border">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="clickable-card">
                        <h3>Android</h3>
                        <p>Gravity is an irresistible force. While it is certainly nice that it keeps us rooted to the planet, it also has a habit of pulling things lower than we might like over time.</p>
                        <a class="button button-black-border">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="clickable-card">
                        <h3>React Native</h3>
                        <p>Gravity is an irresistible force. While it is certainly nice that it keeps us rooted to the planet, it also has a habit of pulling things lower than we might like over time.</p>
                        <a class="button button-black-border">Learn More</a>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="innovation-consulting">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Innovation Consulting</h2>
                    <p>Fish is one of the most wholesome foods that man can eat. In fact, people have been eating fish throughout human history. These days, many cooks yearn to add fish to their repertoire, but the whole process of cleaning and filleting fresh fish is a little scary to them.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="clickable-card">
                        <h3>Business modeling</h3>
                        <p>Gravity is an irresistible force. While it is certainly nice that it keeps us rooted to the planet, it also has a habit of pulling things lower than we might like over time.</p>
                        <a class="button button-red-border">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="clickable-card">
                        <h3>Proof of concept</h3>
                        <p>Gravity is an irresistible force. While it is certainly nice that it keeps us rooted to the planet, it also has a habit of pulling things lower than we might like over time.</p>
                        <a class="button button-red-border">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="clickable-card">
                        <h3>Design Sprint</h3>
                        <p>Gravity is an irresistible force. While it is certainly nice that it keeps us rooted to the planet, it also has a habit of pulling things lower than we might like over time.</p>
                        <a class="button button-red-border">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="clickable-card">
                        <h3>Design Sprint Workshop</h3>
                        <p>Gravity is an irresistible force. While it is certainly nice that it keeps us rooted to the planet, it also has a habit of pulling things lower than we might like over time.</p>
                        <a class="button button-red-border">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="clickable-card">
                        <h3>Interactive mockup</h3>
                        <p>Gravity is an irresistible force. While it is certainly nice that it keeps us rooted to the planet, it also has a habit of pulling things lower than we might like over time.</p>
                        <a class="button button-red-border">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="clickable-card">
                        <h3>MVP Development</h3>
                        <p>Gravity is an irresistible force. While it is certainly nice that it keeps us rooted to the planet, it also has a habit of pulling things lower than we might like over time.</p>
                        <a class="button button-red-border">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <?php get_footer(); ?>
<?php endif; ?>


