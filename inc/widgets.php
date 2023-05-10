<?php
// sidebar register function

function noman_widgets_register(){
    register_sidebar( array(
        'name' => __('Main Widget area', 'blogsite'),
        'id' => 'sidebar-1',
        'description' => __('Appears in the sidebar in blog page', 'blogsite'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ));
    register_sidebar( array(
        'name' => __('Footer 1', 'blogsite'),
        'id' => 'footer-1',
        'description' => __('Appears in the sidebar in blog page', 'blogsite'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ));
    register_sidebar( array(
        'name' => __('Footer 2', 'blogsite'),
        'id' => 'footer-2',
        'description' => __('Appears in the sidebar in blog page', 'blogsite'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ));
    register_sidebar( array(
        'name' => __('Footer 3', 'blogsite'),
        'id' => 'footer-3',
        'description' => __('Appears in the sidebar in blog page', 'blogsite'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ));
};

add_action('widgets_init','noman_widgets_register');