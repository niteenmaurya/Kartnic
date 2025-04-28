<?php
/**
 * footer settings for the WordPress Customizer
 *
 * @package Kartnic
 */

function kartnic_footer_customizer( $wp_customize ) {

    // Footer Width
    $wp_customize->add_setting('kartnic_footer_width', array(
        'default' => 'full', // Default to Full width
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_footer_width_control', array(
        'label' => __('Footer Width', 'kartnic'),
        'section' => 'kartnic_footer_section',
        'settings' => 'kartnic_footer_width',
        'type' => 'radio',
        'choices' => array(
            'full' => __('Full', 'kartnic'),
            'contained' => __('Contained', 'kartnic'),
        ),
    ));

    // Inner Footer Width
    $wp_customize->add_setting('kartnic_inner_footer_width', array(
        'default' => 'contained', // Default to Contained
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_inner_footer_width_control', array(
        'label' => __('Inner Footer Width', 'kartnic'),
        'section' => 'kartnic_footer_section',
        'settings' => 'kartnic_inner_footer_width',
        'type' => 'radio',
        'choices' => array(
            'full' => __('Full', 'kartnic'),
            'contained' => __('Contained', 'kartnic'),
        ),
    ));

    // Footer Widgets
    $wp_customize->add_setting('kartnic_footer_widgets', array(
        'default' => '4', // Default to 4 widgets
        'sanitize_callback' => 'absint', // Ensure it's an integer
    ));
    $wp_customize->add_control('kartnic_footer_widgets_control', array(
        'label' => __('Footer Widgets', 'kartnic'),
        'section' => 'kartnic_footer_section',
        'settings' => 'kartnic_footer_widgets',
        'type' => 'number', // This gives us the up/down arrows for the number
        'input_attrs' => array(
            'min' => 1, // Minimum widgets
            'max' => 6, // Maximum widgets
            'step' => 1, // Increment by 1 widget
        ),
    ));
        
}

add_action( 'customize_register', 'kartnic_footer_customizer' );
