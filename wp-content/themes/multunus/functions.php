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
    // Theme Script
    wp_register_script( 'theme-script', get_template_directory_uri() . '/js/application.js', array( 'jquery' ), null, true );
    wp_enqueue_script('theme-script');
    // Bootstrap
    wp_register_script('bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js');
  }

  // Add proxima-nova font from typekit
  add_filter( 'wp_head', 'add_typekit_font' );
  function add_typekit_font() {
    echo '<script type="text/javascript" src="//use.typekit.net/pfx5bei.js"></script>';
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
    'name' => 'Sidebar Widgets',
    'id'   => 'sidebar-widgets',
    'description'   => 'These are widgets for the sidebar.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));
 }

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

// Register `job` post type
function job_post_type() {
  // Labels
  $labels = array(
    'name' => _x("Job", "post type general name"),
    'singular_name' => _x("Job", "post type singular name"),
    'menu_name' => 'Job Openings',
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
  register_post_type('job' , array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'rewrite' => false,
    'supports' => array('title', 'editor', 'thumbnail')
  ) );
}
add_action( 'init', 'job_post_type', 0 );

// Add Featured Image
add_theme_support('post-thumbnails');

// Custom pagination
function numeric_pagination_nav() {
  if( is_singular() )
    return;

  global $wp_query;
  $max_pages = 5;

  // Stop execution if there's only 1 page
  if( $wp_query->max_num_pages <= 1 )
    return;

  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
  $max   = intval( $wp_query->max_num_pages );

  // Add current page to the array
  if ( $paged >= 1 )
    $links[] = $paged;

  if ( ( $paged + 2 ) <= $max ) {
    $links[] = $paged + 2;
    $links[] = $paged + 1;
  }

  echo '<div class="pagination"><ul class="list-inline pull-right">' . "\n";

  // Always show link to the first page
  printf( '<li><a href="%s">First</a></li>' . "\n", esc_url( get_pagenum_link( 1 ) ), '1' );

  // Previous Post Link
  if ( get_previous_posts_link() )
    printf( '<li>%s</li>' . "\n", get_previous_posts_link('<<') );

  // Link to current page, plus next $max_pages in forward direction
  for ( $i = $paged; $i <= $max; $i++ ) {
    if ( $i >= $paged + $max_pages ) break;

    $class = $paged == $i ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $i ) ), $i );
  }

  // Next Post Link
  if ( get_next_posts_link() )
    printf( '<li>%s</li>' . "\n", get_next_posts_link('>>') );

  // Always show link to the last page
  printf( '<li><a href="%s">Last</a></li>' . "\n", esc_url( get_pagenum_link( $max ) ), $max );

  echo '</ul></div>' . "\n";

}

?>
