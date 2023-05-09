<?php
// theme title
add_theme_support( 'title-tag' );

// theme thumbnail
add_theme_support( 'post-thumbnails', array('page', 'post') );
add_image_size( 'post-thumbnails', 970, 350, true );

// exerpt more
function noman_excerpt_more($more){
    return '</br> <a class="read_more" href="'.get_permalink( $post->ID ) . '"/>' . 'Read More...' . '</a>';
}
add_filter( 'excerpt_more', 'noman_excerpt_more' );

function noman_excerpt_length($length){
    return 20;
}
add_filter( 'excerpt_length', 'noman_excerpt_length', 999 );