<?php

// theme support

function corethemedevelopment_theme_support(){
  add_theme_support('title-tag');

  add_theme_support('custom-logo');
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  add_theme_support('widgets');





}

add_action('after_setup_theme', 'corethemedevelopment_theme_support');


// css and js file link

function theme_css_and_js_file(){
	// css file link
wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.css', array(), '4.0', false );

wp_enqueue_style( 'linericon', get_template_directory_uri(). '/assets/vendors/linericon/style.css', array(), '1.0', false );

wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/assets/css/font-awesome.min.css', array(), '4.0', false );

wp_enqueue_style( 'owl-carousel', get_template_directory_uri(). '/assets/vendors/owl-carousel/owl.carousel.min.css', array(), '1.0', false );

wp_enqueue_style( 'magnific-popup', get_template_directory_uri(). '/assets/css/magnific-popup.css', array(), '1.0', false );

wp_enqueue_style( 'nice-select', get_template_directory_uri(). '/assets/vendors/nice-select/css/nice-select.css', array(), '1.0', false );

wp_enqueue_style( 'theme-default', get_template_directory_uri(). '/assets/css/style.css', array(), '1.0', false );


// js file link


wp_enqueue_script( 'jquery', get_template_directory_uri(). '/assets/js/jquery-3.2.1.min.js', '3.0', true );
wp_enqueue_script( 'popper', get_template_directory_uri(). '/assets/js/popper.js', '1.0', true );
wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/assets/js/bootstrap.min.js', '4.0', true );
wp_enqueue_script( 'stellar', get_template_directory_uri(). '/assets/js/stellar.js', '1.0', true );
wp_enqueue_script( 'simpleLightbox', get_template_directory_uri(). '/assets/vendors/lightbox/simpleLightbox.min.js', '1.0', true );
wp_enqueue_script( 'nice-select', get_template_directory_uri(). '/assets/vendors/nice-select/js/jquery.nice-select.min.js', '1.0', true );
wp_enqueue_script( 'imagesloaded', get_template_directory_uri(). '/assets/vendors/isotope/imagesloaded.pkgd.min.js', '1.0', true );
wp_enqueue_script( 'isotope', get_template_directory_uri(). '/assets/jvendors/isotope/isotope-min.js', '1.0', true );
wp_enqueue_script( 'carousel', get_template_directory_uri(). '/assets/vendors/owl-carousel/owl.carousel.min.js', '1.0', true );
wp_enqueue_script( 'ajaxchimp', get_template_directory_uri(). '/assets/js/jquery.ajaxchimp.min.js', '1.0', true );
wp_enqueue_script( 'mail-script', get_template_directory_uri(). '/assets/js/mail-script.js', '1.0', true );
wp_enqueue_script( 'theme-defauilt', get_template_directory_uri(). '/assets/js/theme.js', '1.0', true );


}
add_action('wp_enqueue_scripts','theme_css_and_js_file');




// register nav menu

function corethemedevelopment_menus() {
  register_nav_menus(
    array(
      'header' => __( 'Header Menu' ),
      'footer' => __( 'Footer Menu' )            
     )
   ); 
 }
 add_action( 'init', 'corethemedevelopment_menus' );

 // right side bar


function tfournewtheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( ' Sidebar', 'tfournewtheme' ),
		'id'            => 'sidebar',
		'before_widget' => '<aside id="%1$s" class="single_sidebar_widget popular_post_widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer', 'tfournewtheme' ),
		'id'            => 'footer',
		'before_widget' => '<ul><li id="%1$s" class="single_sidebar_widget popular_post_widget">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
 add_action( 'widgets_init', 'tfournewtheme_widgets_init' );
// redux

 require_once('inc/redux-core/framework.php');
 require_once('inc/sample/sample-config.php');


