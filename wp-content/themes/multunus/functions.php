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
    wp_register_style('bootstrap-css', '//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_style('bootstrap-css');
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

?>
