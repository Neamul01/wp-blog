<?php
function noman_customizer_register($wp_customize){

    // theme area function
    $wp_customize-> add_section('noman_header_area', array(
        'title' => __('Header Area', 'blogsite'),
        'description' => ('If you need to change header area then here it is.')
    ));

    $wp_customize->add_setting('noman_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.jpg'
    ));

    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'noman_logo', array(
        'label' => 'Logo Upload',
        'description' => 'Upload your logo here.',
        'setting' => 'noman_logo',
        'section' => 'noman_header_area',
    )));


    // menu position options
    $wp_customize -> add_section('noman_menu_option', array(
        'title' => __('Menu Position', 'blogsite'),
        'description' => ('Change menu postition as you need from here')
    ));

    $wp_customize -> add_setting('noman_menu_position', array(
        'default' => 'right_menu'
    ));

    $wp_customize -> add_control('noman_menu_position',array(
        'label' => 'Positioning Menu',
        'description' => 'Set position of your logo as you want',
        'setting' => 'noman_menu_position',
        'section' => 'noman_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu'
        )
    ));
    // footer options
    $wp_customize -> add_section('noman_footer_option', array(
       'title' => __('Footer Position', 'blogsite'),
       'description' => ('Change footer postition as you need from here')
    ));
    
    $wp_customize -> add_setting('noman_compyright_section', array(
       'default' => '&copy; Copyright 2023 | Noman'
    ));
    
    $wp_customize -> add_control('noman_compyright_section',array(
       'label' => 'copyright text',
       'description' => 'Set position of your copyright text as you want',
       'setting' => 'noman_compyright_section',
       'section' => 'noman_footer_option',
    ));

    // theme colors
    $wp_customize -> add_section('noman_theme_color', array(
        'title' => __('Theme Color', 'blogsite'),
        'description' => __('Change theme color as you need from here', 'blogsite')
    ));

    $wp_customize -> add_setting('noman_bg_color', array(
        'default' => '#fff',
    ));
    $wp_customize -> add_control(new WP_Customize_color_control($wp_customize, 'noman_bg_color',array(
        'label'=> __('Background Color', 'blogsite'),
        'section' => 'noman_theme_color',
        'settings' => 'noman_bg_color'
    )));

    $wp_customize -> add_setting('noman_primary_color', array(
        'default' => '#fff',
    ));
    $wp_customize -> add_control(new WP_Customize_color_control($wp_customize, 'noman_primary_color',array(
        'label'=> __('Primary Color', 'blogsite'),
        'section' => 'noman_theme_color',
        'settings' => 'noman_primary_color'
    )));
};

add_action('customize_register', 'noman_customizer_register');

function noman_theme_color_customize(){
    ?>
    <style>
        body{
            background: <?php echo get_theme_mod('noman_bg_color'); ?>
        }
        :root {
            --primary: <?php echo get_theme_mod('noman_primary_color'); ?>;
            }
    </style>
    <?php
};

add_action( 'wp_head', 'noman_theme_color_customize' );
