<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . '/assets/css/main.css', array( 'astra-theme-css' ) );        
        // wp_enqueue_script('main-university-js', get_theme_file_uri('/script.js'), '1.0', true);
        wp_enqueue_script('webpack', get_theme_file_uri('/assets/scripts.js'), array('main-university-js'), null, true);
    };
endif;

// register head menu
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

register_nav_menus(
	array(
		'head_menu' => 'Header menu', // id области => Название области
	)
);
// register a mobile menu
function wdm_register_mobile_menu() {
    add_theme_support( 'nav-menus' );
    register_nav_menus( array('mobile-menu' => __( 'Mobile Menu', 'wdm' )) );
}
add_action( 'init', 'wdm_register_mobile_menu' );

// register custom post type
function custom_post_types() {
    // Event Post Type
    register_post_type('services', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'rewrite' => array('slug' => 'services'),
      'has_archive' => true,
      'taxonomies'  => array( 'category' ),
      'public' => true,
      'labels' => array(
        'name' => 'Services',
        'add_new_item' => 'Add New Service',
        'edit_item' => 'Edit Service',
        'all_items' => 'All Services',
        'singular_name' => 'Service'
      ),
      'menu_icon' => 'dashicons-analytics'
    ));
  }
  
  add_action('init', 'custom_post_types');

  // register shortcode
function current_year_shortcode_function() {
        $year = date('Y');
        return $year;
}
add_shortcode('year', 'current_year_shortcode_function');


/// aos animation
add_action( 'wp_enqueue_scripts', 'add_aos_animation' );
 function add_aos_animation() {
     wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
     wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);
     wp_enqueue_script('theme-js', get_theme_file_uri() . '/src/js/script.js', array( 'AOS' ), null, true);
 }

