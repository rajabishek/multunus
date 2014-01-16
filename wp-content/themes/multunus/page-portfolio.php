<?php
/**
 * Template Name: Portfolio
 */
get_header();

// Get 'portfolio' posts
$portfolio_item = get_posts( array(
    'post_type' => 'portfolio',
    'posts_per_page' => -1 // Unlimited posts
) );

if ( $portfolio_item ):
?>
<section class="container quote-header">
  <h1 class="align-left">Expertly Crafted</h1>
  <blockquote>
    <p><strong>Individuals and interactions</strong> over processes and tools..</p>
    <p><strong>Working software</strong> over comprehensive documentation..</p>
    <p><strong>Customer collaboration</strong> over contract negotiation..</p>
    <p><strong>Responding to change</strong> over following a plan..</p>
    <small><cite title="Source Title">Agile Manifesto</cite></small>
  </blockquote>

</section>

<aside class="container portfolio-filter category-filter">
  <ul class="list-inline category-list-desktop hidden-xs">
    <li class="categories-label"><span>Platforms:</span></li>
    <li class="active"><a data-category="all">All</a></li>
    <li><a data-category="Web">Web</a></li>
    <li><a data-category="Mobile Web">Mobile Web</a></li>
    <li><a data-category="iOS">iOS</a></li>
    <li><a data-category="Android">Android</a></li>
  </ul>

  <ul class="list-inline category-list-desktop hidden-xs">
    <li class="categories-label"><span>Domains:</span></li>
    <li><a data-category="all">All</a></li>
    <li><a data-category="Finance">Finance</a></li>
    <li><a data-category="Consumer">Consumer</a></li>
    <li><a data-category="Media">Media</a></li>
    <li><a data-category="Health">Health</a></li>
    <li><a data-category="Education">Education</a></li>
    <li><a data-category="Enterprise Mobility">Enterprise Mobility</a></li>
  </ul>

  <div class="visible-xs category-list-mobile dropdown-container">
    <div class="dropdown-label">Show: </div>
    <div class="btn-group dropdown">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        All
      </button>
      <ul class="dropdown-menu" role="menu">
        <li class="active"><a data-category="all">All</a></li>
        <li><a data-category="Web">Web</a></li>
        <li><a data-category="Mobile Web">Mobile Web</a></li>
        <li><a data-category="iOS">iOS</a></li>
        <li><a data-category="Android">Android</a></li>
        <li><a data-category="all">All</a></li>
        <li><a data-category="Finance">Finance</a></li>
        <li><a data-category="Consumer">Consumer</a></li>
        <li><a data-category="Media">Media</a></li>
        <li><a data-category="Health">Health</a></li>
        <li><a data-category="Education">Education</a></li>
        <li><a data-category="Enterprise Mobility">Enterprise Mobility</a></li>
      </ul>
    </div>
  </div>
</aside>

<section class="container clearfix portfolio-list">
    <div class="row">
    <?php
    foreach ( $portfolio_item as $post ):
      setup_postdata($post);
      $permalink = post_permalink($post->ID);
    ?>

    <figure class="col-sm-4 col-xs-12" data-category="<?php the_field('category'); ?>">
      <a href="<?php echo $permalink ?>">
        <img src="<?php the_field('thumbnail'); ?>" alt="<?php the_title(); ?>">
        <figcaption>
          <p class="name"><?php the_title(); ?></p>
          <p class="category">
            <?php echo the_field('category'); ?>
          </p>
        </figcaption>
      </a>
    </figure>

    <?php endforeach; ?>
  </div>
</section>
<?php get_footer(); ?>
<?php endif; ?>