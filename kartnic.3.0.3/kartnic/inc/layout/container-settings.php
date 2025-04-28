<?php
/**
 * container settings for the WordPress Customizer
 *
 * @package Kartnic
 */
 
function kartnic_container_customizer( $wp_customize ) {

    // --- Container Section ---
    $wp_customize->add_section('kartnic_container_section', array(
        'title' => __('Container', 'kartnic'),
        'priority' => 33,
        'panel' => 'kartnic_layout_panel', // Add to the Layout panel
    ));

    // Container Width (with up/down arrows)
    $wp_customize->add_setting('kartnic_container_width', array(
        'default' => '1200', // Default value
        'sanitize_callback' => 'absint', // Sanitizing as integer
    ));
    $wp_customize->add_control('kartnic_container_width_control', array(
        'label' => __('Container Width (px)', 'kartnic'),
        'section' => 'kartnic_container_section',
        'settings' => 'kartnic_container_width',
        'type' => 'number',  // Change the type to "number" to support arrows
        'input_attrs' => array(
            'min' => 700, // Minimum width in px
            'max' => 2000, // Maximum width in px
            'step' => 1, // Step value for up/down arrows
        ),
        'description' => __('Set the container width in pixels. Use the up/down arrows to adjust the value.', 'kartnic'),
    ));

    // Separating Space
    $wp_customize->add_setting('kartnic_separating_space', array(
        'default' => '10', // Default value
        'sanitize_callback' => 'absint', // Ensure the value is an integer
    ));
    $wp_customize->add_control('kartnic_separating_space_control', array(
        'label' => __('Separating Space (px)', 'kartnic'),
        'section' => 'kartnic_container_section',
        'settings' => 'kartnic_separating_space',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
        ),
        'description' => __('Adjust the separating space between content elements.', 'kartnic'),
    ));

    // Content Separator
    $wp_customize->add_setting('kartnic_content_separator', array(
        'default' => '2', // Default value in em
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_content_separator_control', array(
        'label' => __('Content Separator (em)', 'kartnic'),
        'section' => 'kartnic_container_section',
        'settings' => 'kartnic_content_separator',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 10,
            'step' => 0.1,
        ),
        'description' => __('Set the space between the featured image, title, content, and entry meta.', 'kartnic'),
    ));

    // Content Layout
    $wp_customize->add_setting('kartnic_content_layout', array(
        'default' => 'separate_containers',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_content_layout_control', array(
        'label' => __('Content Layout', 'kartnic'),
        'section' => 'kartnic_container_section',
        'settings' => 'kartnic_content_layout',
        'type' => 'select',
        'choices' => array(
            'separate_containers' => __('Separate Containers', 'kartnic'),
            'single_container' => __('Single Container', 'kartnic'),
        ),
    ));

    // Content Padding
    // Top Padding
    $wp_customize->add_setting('kartnic_content_padding_top', array(
        'default' => '20', // Default value in px
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('kartnic_content_padding_top_control', array(
        'label' => __('Content Padding Top (px)', 'kartnic'),
        'section' => 'kartnic_container_section',
        'settings' => 'kartnic_content_padding_top',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
        ),
    ));

    // Right Padding
    $wp_customize->add_setting('kartnic_content_padding_right', array(
        'default' => '20', // Default value in px
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('kartnic_content_padding_right_control', array(
        'label' => __('Content Padding Right (px)', 'kartnic'),
        'section' => 'kartnic_container_section',
        'settings' => 'kartnic_content_padding_right',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
        ),
    ));

    // Bottom Padding
    $wp_customize->add_setting('kartnic_content_padding_bottom', array(
        'default' => '20', // Default value in px
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('kartnic_content_padding_bottom_control', array(
        'label' => __('Content Padding Bottom (px)', 'kartnic'),
        'section' => 'kartnic_container_section',
        'settings' => 'kartnic_content_padding_bottom',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
        ),
    ));

    // Left Padding
    $wp_customize->add_setting('kartnic_content_padding_left', array(
        'default' => '20', // Default value in px
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('kartnic_content_padding_left_control', array(
        'label' => __('Content Padding Left (px)', 'kartnic'),
        'section' => 'kartnic_container_section',
        'settings' => 'kartnic_content_padding_left',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
        ),
    ));

}

add_action( 'customize_register', 'kartnic_container_customizer' );









