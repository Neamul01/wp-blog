<?php
function noman_css_js_file_calling(){
    wp_enqueue_style( 'noman-style', get_stylesheet_uri() );
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all' );
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'custom' );

    // jquery file calling
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', true );
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'noman_css_js_file_calling' );

// Google fonts Enqueue
function noman_add_google_fonts(){
    wp_enqueue_style( 'noman_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false );
};
add_action( 'wp_enqueue_scripts', 'noman_add_google_fonts' );
