<?php
/**
 * Sidebar settings for the WordPress Customizer
 *
 * @package Kartnic
 */

 
function kartnic_sidebar_customizer( $wp_customize ) {

    // --- Sidebar Section ---
    $wp_customize->add_section('kartnic_sidebar_section', array(
        'title' => __('Sidebar', 'kartnic'),
        'priority' => 36,
        'panel' => 'kartnic_layout_panel', // Add to the Layout panel
    ));

    // Add setting for sidebar position (Content / Sidebar or no sidebar)
    $wp_customize->add_setting('kartnic_sidebar_position', array(
        'default' => 'right',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add control for sidebar position
    $wp_customize->add_control('kartnic_sidebar_position_control', array(
        'label' => __('Single Post Sidebar Layout', 'kartnic'),
        'section' => 'kartnic_sidebar_section',
        'settings' => 'kartnic_sidebar_position',
        'type' => 'radio',
        'choices' => array(
            'left' => __('Left', 'kartnic'),
            'right' => __('Right', 'kartnic'),
            'no-sidebar' => __('No Sidebar', 'kartnic'),
        ),
    )); 

    // Add setting for blog sidebar layout (Content/Sidebar)
    $wp_customize->add_setting('kartnic_blog_sidebar_layout', array(
        'default' => 'no_sidebar', // Default to No Sidebar
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add control for blog sidebar layout
    $wp_customize->add_control('kartnic_blog_sidebar_layout_control', array(
        'label' => __('Blog Sidebar Layout', 'kartnic'),
        'section' => 'kartnic_sidebar_section',
        'settings' => 'kartnic_blog_sidebar_layout',
        'type' => 'radio',
        'choices' => array(
            'content_sidebar' => __('Content / Sidebar', 'kartnic'),
            'sidebar_content' => __('Sidebar / Content', 'kartnic'),
            'no_sidebar' => __('Content (no sidebar)', 'kartnic'),
        ),
    ));

    // Add setting for widget padding
    $wp_customize->add_setting('kartnic_widget_padding_top', array(
        'default' => '20',
        'sanitize_callback' => 'absint',
    ));

    // Add control for top widget padding
    $wp_customize->add_control('kartnic_widget_padding_top_control', array(
        'label' => __('Widget Padding Top (px)', 'kartnic'),
        'section' => 'kartnic_sidebar_section',
        'settings' => 'kartnic_widget_padding_top',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
            'step' => 1,
        ),
    ));

    // Add setting for right widget padding
    $wp_customize->add_setting('kartnic_widget_padding_right', array(
        'default' => '20',
        'sanitize_callback' => 'absint',
    ));

    // Add control for right widget padding
    $wp_customize->add_control('kartnic_widget_padding_right_control', array(
        'label' => __('Widget Padding Right (px)', 'kartnic'),
        'section' => 'kartnic_sidebar_section',
        'settings' => 'kartnic_widget_padding_right',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
            'step' => 1,
        ),
    ));

    // Add setting for bottom widget padding
    $wp_customize->add_setting('kartnic_widget_padding_bottom', array(
        'default' => '20',
        'sanitize_callback' => 'absint',
    ));

    // Add control for bottom widget padding
    $wp_customize->add_control('kartnic_widget_padding_bottom_control', array(
        'label' => __('Widget Padding Bottom (px)', 'kartnic'),
        'section' => 'kartnic_sidebar_section',
        'settings' => 'kartnic_widget_padding_bottom',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
            'step' => 1,
        ),
    ));

    // Add setting for left widget padding
    $wp_customize->add_setting('kartnic_widget_padding_left', array(
        'default' => '20',
        'sanitize_callback' => 'absint',
    ));

    // Add control for left widget padding
    $wp_customize->add_control('kartnic_widget_padding_left_control', array(
        'label' => __('Widget Padding Left (px)', 'kartnic'),
        'section' => 'kartnic_sidebar_section',
        'settings' => 'kartnic_widget_padding_left',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
            'step' => 1,
        ),
    ));

    // Add setting for the right sidebar width
    $wp_customize->add_setting('kartnic_right_sidebar_width', array(
        'default'           => '40', // Default 40% width
        'sanitize_callback' => 'absint', // Ensure the value is an integer
    ));

    // Add control for right sidebar width
    $wp_customize->add_control('kartnic_right_sidebar_width_control', array(
        'label'       => __('Sidebar Width (%)', 'kartnic'),
        'section'     => 'kartnic_sidebar_section', // Define the section to group controls
        'settings'    => 'kartnic_right_sidebar_width', // Bind the control to the setting
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 10, // Minimum width is 10%
            'max'  => 100, // Maximum width is 60%
            'step' => 1,   // Step of 1 for fine control
        ),
        'description' => __('Set the width of the right sidebar as a percentage of the page width.', 'kartnic'),
    ));

}
add_action( 'customize_register', 'kartnic_sidebar_customizer' );
    