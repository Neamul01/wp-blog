<?php
// theme title
add_theme_support( 'title-tag' );

// theme thumbnail
add_theme_support( 'post-thumbnails', array('page', 'post') );
add_image_size( 'post-thumbnails', 970, 350, true );