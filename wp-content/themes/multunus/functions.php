<?php

// Define Constants
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT.'/images');

// Only on front-end pages, NOT in admin area
if (!is_admin()) {

  // add ie conditional html5 shim to header
  add_action('wp_head', 'add_ie_html5_shim', 10);
  function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<![endif]-->';
  }

  // Load CSS
  add_action('wp_enqueue_scripts', 'twbs_load_styles', 11);
  function twbs_load_styles() {
    // Bootstrap
    // wp_register_style('bootstrap-css', '//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css', array(), null, 'all');
    // wp_enqueue_style('bootstrap-css');
    // Theme Styles
    wp_register_style('theme-styles', get_stylesheet_uri(), array(), null, 'all');
    wp_enqueue_style('theme-styles');
  }

  // Load Javascript
  add_action('wp_enqueue_scripts', 'twbs_load_scripts', 12);
  function twbs_load_scripts() {
    // jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js', array(), null, false);
    wp_enqueue_script('jquery');
    // Bootstrap
    wp_register_script('bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js');
    // Theme Script
    wp_register_script( 'theme-script', get_template_directory_uri() . '/js/application.js', array( 'jquery' ), null, true );
    wp_enqueue_script('theme-script');
  }

  add_action('wp_enqueue_scripts', 'jq_validate_script', 13);
  function jq_validate_script() {
    if (is_page('contact')) {
      // Load jquery-validate on contact us page
      wp_register_script('jquery-validate', '//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js', array('jquery'), null, true);
      wp_enqueue_script('jquery-validate');
    }
  }

  add_action('wp_enqueue_scripts', 'process_page_script', 14);
  function process_page_script() {
    if (is_page('process')) {
      wp_register_script( 'process', get_template_directory_uri() . '/js/process.js', array( 'jquery' ), null, true );
      wp_enqueue_script('process');
    }
  }

  add_action('wp_enqueue_scripts', 'portfolio_script', 15);
  function portfolio_script() {
    if (is_page('portfolio')) {
      wp_register_script( 'portfolio', get_template_directory_uri() . '/js/portfolio.js', array( 'jquery' ), null, true );
      wp_enqueue_script('portfolio');
    }
  }

  add_action('wp_enqueue_scripts', 'team_page_script', 16);
  function team_page_script() {
    if (is_page('team')) {
      wp_register_script( 'team', get_template_directory_uri() . '/js/team.js', array( 'jquery' ), null, true );
      wp_enqueue_script('team');
    }
  }

  add_action('wp_enqueue_scripts', 'hiring_campaign_page_script', 17);
  function hiring_campaign_page_script() {
    if (is_page('ofcourseus')) {
      // wp_register_script( 'tag_cloud', get_template_directory_uri() . '/js/tagcloud_edgePreload.js', array( 'jquery' ), null, true );
      // wp_enqueue_script('tag_cloud');
      // wp_register_script( 'hiring_campaign', get_template_directory_uri() . '/js/hiring_campaign.js', array( 'jquery' ), null, true );
      // wp_enqueue_script('hiring_campaign');
    }
  }

  // Add proxima-nova font from typekit
  add_filter( 'wp_footer', 'add_typekit_font' );
  function add_typekit_font() {
    echo '<script type="text/javascript" src="//use.typekit.net/asc4nej.js"></script>';
    echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>';
  }

  // Add viewport meta tag to head
  add_filter('wp_head', 'viewport_meta');
  function viewport_meta() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>';
  }

} // end if !is_admin

// Clean up the <head>
function removeHeadLinks() {
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
}

add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');
add_action( 'after_setup_theme', 'wpt_nav_setup' );

if ( ! function_exists( 'wpt_setup' ) ):
  function wpt_nav_setup() {
    register_nav_menu( 'primary', __( 'Primary navigation', 'multunus' ) );
  }
endif;

// Declare sidebar widget zone
if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'Twitter Widget',
    'id'   => 'twitter-widget',
    'description'   => 'Display Latest Tweet.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));
 }

 // Register `portfolio` post type
 function portfolio_post_type() {
   // Labels
   $labels = array(
     'name' => _x("Portfolio", "post type general name"),
     'singular_name' => _x("Portfolio", "post type singular name"),
     'menu_name' => 'Portfolio',
     'add_new' => _x("Add New", "portfolio item"),
     'add_new_item' => __("Add New Project"),
     'edit_item' => __("Edit Project"),
     'new_item' => __("New Project"),
     'view_item' => __("View Project"),
     'search_items' => __("Search Projects"),
     'not_found' =>  __("No Projects Found"),
     'not_found_in_trash' => __("No Projects Found in Trash"),
     'parent_item_colon' => ''
   );

   // Register post type
   register_post_type('portfolio' , array(
     'labels' => $labels,
     'public' => true,
     'has_archive' => false,
     'rewrite' => false,
     'supports' => array('title', 'editor', 'thumbnail')
   ) );
 }
 add_action( 'init', 'portfolio_post_type', 0 );

// Register `team` post type
function team_post_type() {
  // Labels
  $labels = array(
    'name' => _x("Team", "post type general name"),
    'singular_name' => _x("Team", "post type singular name"),
    'menu_name' => 'Team Profiles',
    'add_new' => _x("Add New", "team item"),
    'add_new_item' => __("Add New Profile"),
    'edit_item' => __("Edit Profile"),
    'new_item' => __("New Profile"),
    'view_item' => __("View Profile"),
    'search_items' => __("Search Profiles"),
    'not_found' =>  __("No Profiles Found"),
    'not_found_in_trash' => __("No Profiles Found in Trash"),
    'parent_item_colon' => ''
  );

  // Register post type
  register_post_type('team' , array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'rewrite' => false,
    'supports' => array('title', 'editor', 'thumbnail')
  ) );
}
add_action( 'init', 'team_post_type', 0 );

// Register `services` post type
function services_post_type() {
  // Labels
  $labels = array(
    'name' => _x("Services", "post type general name"),
    'singular_name' => _x("Service", "post type singular name"),
    'menu_name' => 'Services',
    'add_new' => _x("Add New", "service item"),
    'add_new_item' => __("Add New Service"),
    'edit_item' => __("Edit Service"),
    'new_item' => __("New Service"),
    'view_item' => __("View Service"),
    'search_items' => __("Search Services"),
    'not_found' =>  __("No Services Found"),
    'not_found_in_trash' => __("No Services Found in Trash"),
    'parent_item_colon' => ''
  );

  // Register post type
  register_post_type('services' , array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'rewrite' => false,
    'supports' => array('title', 'editor', 'thumbnail')
  ) );
}
add_action( 'init', 'services_post_type', 0 );

// Register `why_us` post type
function why_us_post_type() {
  // Labels
  $labels = array(
    'name' => _x("Why Us Posts", "post type general name"),
    'singular_name' => _x("Why Us Post", "post type singular name"),
    'menu_name' => 'Why Us Posts',
    'add_new' => _x("Add New", "post item"),
    'add_new_item' => __("Add New Post"),
    'edit_item' => __("Edit Post"),
    'new_item' => __("New Post"),
    'view_item' => __("View Post"),
    'search_items' => __("Search Posts"),
    'not_found' =>  __("No Posts Found"),
    'not_found_in_trash' => __("No Posts Found in Trash"),
    'parent_item_colon' => ''
  );

  // Register post type
  register_post_type('why_us' , array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'rewrite' => false,
    'supports' => array('title', 'editor', 'thumbnail')
  ) );
}
add_action( 'init', 'why_us_post_type', 0 );

// Register `hiring campaign` post type
function hiring_campaign_post_type() {
  // Labels
  $labels = array(
    'name' => _x("Hiring Campaign", "post type general name"),
    'singular_name' => _x("Hiring Campaign", "post type singular name"),
    'menu_name' => 'Hiring Campaign',
    'add_new' => _x("Add New", "post item"),
    'add_new_item' => __("Add New Post"),
    'edit_item' => __("Edit Post"),
    'new_item' => __("New Post"),
    'view_item' => __("View Post"),
    'search_items' => __("Search Posts"),
    'not_found' =>  __("No Posts Found"),
    'not_found_in_trash' => __("No Posts Found in Trash"),
    'parent_item_colon' => ''
  );

  // Register post type
  register_post_type('hiring_campaign' , array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'rewrite' => false,
    'supports' => array('title', 'editor', 'thumbnail')
  ) );
}
add_action( 'init', 'hiring_campaign_post_type', 0 );


// Add Featured Image
if (function_exists( 'add_theme_support' ) ) {
  add_theme_support('post-thumbnails');
}

// Add excerpt to pages
add_action('init', 'add_excerpts_to_pages');
function add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt'  );
}

// Custom pagination
function numeric_pagination_nav() {
  if( is_singular() )
    return;

  global $wp_query;

  // Stop execution if there's only 1 page
  if( $wp_query->max_num_pages <= 1 )
    return;

  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
  $max   = intval( $wp_query->max_num_pages );

  echo '<div class="pagination"><ul class="list-inline pull-right">' . "\n";

  // Always show link to the first page
  printf( '<li><a href="%s">First</a></li>' . "\n", esc_url( get_pagenum_link( 1 ) ), '1' );

  // Previous Post Link
  if ( get_previous_posts_link() )
    printf( '<li>%s</li>' . "\n", get_previous_posts_link('<<') );

  // Link to previous two pages starting from page 3
  if ( $paged >= 3 ) {
    $link = $paged - 2;
  }
  else {
    $link = $paged;
  }

  // Link to current page, previous two pages, plus next $max_pages in forward direction
  for ( $link; $link <= $max; $link++ ) {
    if ( $link > $paged + 2 ) break; // show only next two pages

    $class = $paged == $link ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
  }

  // Next Post Link
  if ( get_next_posts_link() )
    printf( '<li>%s</li>' . "\n", get_next_posts_link('>>') );

  // Always show link to the last page
  printf( '<li><a href="%s">Last</a></li>' . "\n", esc_url( get_pagenum_link( $max ) ), $max );

  echo '</ul></div>' . "\n";

}

?>
