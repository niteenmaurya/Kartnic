<?php
/**
 * typography settings for the WordPress Customizer
 *
 * @package Kartnic
 */

function kartnic_typography_customizer( $wp_customize ) {

    // Add settings and controls for H1 to H6 font sizes, weights, letter spacing, line height, and font family
    $headings = array('H1', 'H2', 'H3', 'H4', 'H5', 'H6');
    foreach ($headings as $heading) {
    // Font size setting and control
    $wp_customize->add_setting("{$heading}_font_size", array(
        'default' => '16px',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control("{$heading}_font_size_control", array(
        'label' => sprintf( __( '%s Font Size', 'kartnic' ), $heading ),
        'section' => 'typography_section',
        'settings' => "{$heading}_font_size",
        'type' => 'text',
    ));

    // Font weight setting and control
    $wp_customize->add_setting("{$heading}_font_weight", array(
        'default' => '400',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control("{$heading}_font_weight_control", array(
        'label' => sprintf( __( '%s Font Weight', 'kartnic' ), $heading ),
        'section' => 'typography_section',
        'settings' => "{$heading}_font_weight",
        'type' => 'select',
        'choices' => array(
            '100' => '100',
            '200' => '200',
            '300' => '300',
            '400' => '400',
            '500' => '500',
            '600' => '600',
            '700' => '700',
            '800' => '800',
            '900' => '900',
        ),
    ));

    // Letter spacing setting and control
    $wp_customize->add_setting("{$heading}_letter_spacing", array(
        'default' => '0px',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control("{$heading}_letter_spacing_control", array(
        'label' => sprintf( __( '%s Letter Spacing', 'kartnic' ), $heading ),
        'section' => 'typography_section',
        'settings' => "{$heading}_letter_spacing",
        'type' => 'text',
    ));

    // Line height setting and control
    $wp_customize->add_setting("{$heading}_line_height", array(
        'default' => '1.5',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control("{$heading}_line_height_control", array(
        'label' => sprintf( __( '%s Line Height', 'kartnic' ), $heading ),
        'section' => 'typography_section',
        'settings' => "{$heading}_line_height",
        'type' => 'text',
    ));

    // Font family setting and control
    $wp_customize->add_setting("{$heading}_font_family", array(
        'default' => 'Arial, sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control("{$heading}_font_family_control", array(
        'label' => sprintf( __( '%s Font Family', 'kartnic' ), $heading ),
        'section' => 'typography_section',
        'settings' => "{$heading}_font_family",
        'type' => 'text',
    ));
}
    
    // Add settings and controls for paragraph font size, weight, letter spacing, line height, bottom margin, and font family
    $wp_customize->add_setting('paragraph_font_size', array(
        'default' => '16px',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('paragraph_font_size_control', array(
        'label' => __('Paragraph Font Size', 'kartnic'),
        'section' => 'typography_section',
        'settings' => 'paragraph_font_size',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('paragraph_font_weight', array(
        'default' => '400',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('paragraph_font_weight_control', array(
        'label' => __('Paragraph Font Weight', 'kartnic'),
        'section' => 'typography_section',
        'settings' => 'paragraph_font_weight',
        'type' => 'select',
        'choices' => array(
            '100' => '100',
            '200' => '200',
            '300' => '300',
            '400' => '400',
            '500' => '500',
            '600' => '600',
            '700' => '700',
            '800' => '800',
            '900' => '900',
        ),
    ));
    
    $wp_customize->add_setting('paragraph_letter_spacing', array(
        'default' => '0px',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('paragraph_letter_spacing_control', array(
        'label' => __('Paragraph Letter Spacing', 'kartnic'),
        'section' => 'typography_section',
        'settings' => 'paragraph_letter_spacing',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('paragraph_line_height', array(
        'default' => '1.5',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('paragraph_line_height_control', array(
        'label' => __('Paragraph Line Height', 'kartnic'),
        'section' => 'typography_section',
        'settings' => 'paragraph_line_height',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('paragraph_bottom_margin', array(
        'default' => '0px',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('paragraph_bottom_margin_control', array(
        'label' => __('Paragraph Bottom Margin', 'kartnic'),
        'section' => 'typography_section',
        'settings' => 'paragraph_bottom_margin',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('paragraph_font_family', array(
        'default' => 'Arial, sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('paragraph_font_family_control', array(
        'label' => __('Paragraph Font Family', 'kartnic'),
        'section' => 'typography_section',
        'settings' => 'paragraph_font_family',
        'type' => 'text',
    ));
    
}

add_action( 'customize_register', 'kartnic_typography_customizer' );
