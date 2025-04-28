<?php
/**
 * colors settings for the WordPress Customizer
 *
 * @package Kartnic
 */

function kartnic_colors_customizer( $wp_customize ) {
  
  // Add settings for header background color with sanitization callback
  $wp_customize->add_setting('header_bg_color', array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
    ));

    // Add settings for header text color with sanitization callback
    $wp_customize->add_setting('header_text_color', array(
        'default'   => '#333333',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    // Add control for focus color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'focus_color_control', array(
        'label'    => __('Focus Color', 'kartnic'),
        'section'  => 'colors',
        'settings' => 'focus_color',
    )));

    // Add control for header background color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_bg_color_control', array(
        'label'    => __('Header Background Color', 'kartnic'),
        'section'  => 'colors',
        'settings' => 'header_bg_color',
    )));

    // Add control for header text color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_text_color_control', array(
        'label'    => __('Header Text Color', 'kartnic'),
        'section'  => 'colors',
        'settings' => 'header_text_color',
    )));
    
    // Add settings for site-cont background and text color
    $wp_customize->add_setting('site_cont_bg_color', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
    $wp_customize->add_setting('site_cont_text_color', array(
        'default'   => '#000000',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    // Add settings for pagination background and text color
    $wp_customize->add_setting('pagination_bg_color', array(
        'default'   => '#f0f0f0',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_setting('pagination_text_color', array(
        'default'   => '#333333',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    // Add controls for site-cont colors
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'site_cont_bg_color', array(
        'label'    => __('Site Container Background Color', 'kartnic'),
        'section'  => 'colors',
        'settings' => 'site_cont_bg_color',
    )));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'site_cont_text_color', array(
        'label'    => __('Site Container Text Color', 'kartnic'),
        'section'  => 'colors',
        'settings' => 'site_cont_text_color',
    )));

    // Add controls for pagination colors
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pagination_bg_color', array(
        'label'    => __('Pagination Background Color', 'kartnic'),
        'section'  => 'colors',
        'settings' => 'pagination_bg_color',
    )));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pagination_text_color', array(
        'label'    => __('Pagination Text Color', 'kartnic'),
        'section'  => 'colors',
        'settings' => 'pagination_text_color',
    )));


    // Add settings for post-navigation background and text color
    $wp_customize->add_setting('post_navigation_bg_color', array(
        'default'   => '#f0f0f0',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
    $wp_customize->add_setting('post_navigation_text_color', array(
        'default'   => '#333333',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    // Add settings for post-site-main background and text color
    $wp_customize->add_setting('post_site_main_bg_color', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
    $wp_customize->add_setting('post_site_main_text_color', array(
        'default'   => '#000000',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    // Add controls for post-navigation colors
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'post_navigation_bg_color', array(
        'label'    => __('Post Navigation Background Color', 'kartnic'),
        'section'  => 'colors',
        'settings' => 'post_navigation_bg_color',
    )));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'post_navigation_text_color', array(
        'label'    => __('Post Navigation Text Color', 'kartnic'),
        'section'  => 'colors',
        'settings' => 'post_navigation_text_color',
    )));

    // Add controls for post-site-main colors
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'post_site_main_bg_color', array(
        'label'    => __('Post Site Main Background Color', 'kartnic'),
        'section'  => 'colors',
        'settings' => 'post_site_main_bg_color',
    )));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'post_site_main_text_color', array(
        'label'    => __('Post Site Main Text Color', 'kartnic'),
        'section'  => 'colors',
        'settings' => 'post_site_main_text_color',
    )));

// Sidebar Background Color
    $wp_customize->add_setting('sidebar_bg_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_bg_color_control', array(
        'label' => __('Sidebar Background Color', 'kartnic'),
        'section' => 'colors',
        'settings' => 'sidebar_bg_color',
    )));

    // Sidebar Text Color
    $wp_customize->add_setting('sidebar_text_color', array(
        'default' => '#333333',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_text_color_control', array(
        'label' => __('Sidebar Text Color', 'kartnic'),
        'section' => 'colors',
        'settings' => 'sidebar_text_color',
    )));

    // Button Background Color
    $wp_customize->add_setting('button_bg_color', array(
        'default' => '#333333',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_bg_color_control', array(
        'label' => __('Button Background Color', 'kartnic'),
        'section' => 'colors',
        'settings' => 'button_bg_color',
    )));

    // Button Text Color
    $wp_customize->add_setting('button_text_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_text_color_control', array(
        'label' => __('Button Text Color', 'kartnic'),
        'section' => 'colors',
        'settings' => 'button_text_color',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_text_color_control', array(
        'label' => __('Button Text Color', 'kartnic'),
        'section' => 'colors',
        'settings' => 'button_text_color',
    )));
    // Site Info Background Color
    $wp_customize->add_setting('footer_bg_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_bg_color_control', array(
        'label' => __('Footer Background Color', 'kartnic'),
        'section' => 'colors',
        'settings' => 'footer_bg_color',
    )));

    // Site Info Text Color
    $wp_customize->add_setting('footer_text_color', array(
        'default' => '#333333',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_text_color_control', array(
        'label' => __('Footer Text Color', 'kartnic'),
        'section' => 'colors',
        'settings' => 'site_info_text_color',
    )));

    // Navigation Background Color
    $wp_customize->add_setting('nav_bg_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_bg_color_control', array(
        'label' => __('Navigation Background Color', 'kartnic'),
        'section' => 'colors',
        'settings' => 'nav_bg_color',
    )));

    // Navigation Text Color
    $wp_customize->add_setting('nav_text_color', array(
        'default' => '#333333',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color', 
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_text_color_control', array(
        'label' => __('Navigation Text Color', 'kartnic'),
        'section' => 'colors',
        'settings' => 'nav_text_color',
    )));

}

add_action( 'customize_register', 'kartnic_colors_customizer' );
        