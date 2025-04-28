

<?php
/**
 * Primary Navigation settings for the WordPress Customizer
 *
 * @package Kartnic
 */

function kartnic_primary_navigation_customizer( $wp_customize ) {

    // --- Primary Navigation Section ---
    $wp_customize->add_section('kartnic_primary_navigation_section', array(
        'title' => __('Primary Navigation', 'kartnic'),
        'priority' => 35,
        'panel' => 'kartnic_layout_panel', // Add to the Layout panel
    ));

    // Add a setting for primary navigation font size
    $wp_customize->add_setting('kartnic_primary_navigation_font_size', array(
        'default' => '16px',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    // Add a control for primary navigation font size
    $wp_customize->add_control('kartnic_primary_navigation_font_size_control', array(
        'label' => __('Primary Navigation Font Size', 'kartnic'),
        'section' => 'kartnic_primary_navigation_section',
        'settings' => 'kartnic_primary_navigation_font_size',
        'type' => 'text',
    ));


    // Add a setting for mobile menu breakpoint
    $wp_customize->add_setting('kartnic_mobile_menu_breakpoint', array(
        'default' => '768px',  // Default value for the breakpoint
        'sanitize_callback' => 'sanitize_mobile_breakpoint',  // Custom sanitize function
    ));

    // Add a control for mobile menu breakpoint
    $wp_customize->add_control('kartnic_mobile_menu_breakpoint_control', array(
        'label' => __('Mobile Menu Breakpoint', 'kartnic'),
        'section' => 'kartnic_primary_navigation_section',
        'settings' => 'kartnic_mobile_menu_breakpoint',
        'type' => 'text',  // Text input for custom breakpoint
    ));

    // Custom function to sanitize the mobile breakpoint value
    function sanitize_mobile_breakpoint($value) {
        // Ensure the value is a valid CSS length like 'px', 'em', 'rem', or a number
        if (preg_match('/^\d+(px|em|rem|%|vh|vw)$/', $value)) {
            return $value;
        }
        return '768px';  // Default value if invalid input
    }

    // Add setting for Menu Item Padding Left
    $wp_customize->add_setting('kartnic_menu_item_padding_left', array(
        'default'           => '10px', // Default value for padding-left
        'sanitize_callback' => 'sanitize_text_field', // Sanitize the input
    ));

    // Add control to change the Padding Left value
    $wp_customize->add_control('kartnic_menu_item_padding_left_control', array(
        'label'   => __('Menu Item Padding Left', 'kartnic'),
        'section' => 'kartnic_primary_navigation_section', // Replace with your actual section ID
        'settings' => 'kartnic_menu_item_padding_left',
        'type'    => 'text', // Text field where user can input a custom value
    ));
 
    // Add setting for Menu Item Padding Left
    $wp_customize->add_setting('kartnic_menu_item_padding_left', array(
        'default'           => '10px', // Default padding-left value
        'sanitize_callback' => 'sanitize_text_field', // Sanitize the input
    ));

    // Add control to change the Padding Left value
    $wp_customize->add_control('kartnic_menu_item_padding_left_control', array(
        'label'   => __('Menu Item Padding Left', 'kartnic'),
        'section' => 'kartnic_primary_navigation_section',
        'settings' => 'kartnic_menu_item_padding_left',
        'type'    => 'text', // Text field where user can input a custom value
    ));
    
    // Add setting for Menu Item Height
    $wp_customize->add_setting('kartnic_menu_item_height', array(
        'default'           => '40px', // Default height value
        'sanitize_callback' => 'sanitize_text_field', // Sanitize the input
    ));

    // Add control to change the Menu Item Height value
    $wp_customize->add_control('kartnic_menu_item_height_control', array(
        'label'   => __('Menu Item Height', 'kartnic'),
        'section' => 'kartnic_primary_navigation_section', // The section in the Customizer
        'settings' => 'kartnic_menu_item_height',
        'type'    => 'text', // Text field where user can input a custom value
    ));

    // Add settings for Sub-Menu Item Height
    $wp_customize->add_setting('kartnic_sub_menu_item_height', array(
        'default' => '60px',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('kartnic_sub_menu_item_height_control', array(
        'label' => __('Sub-Menu Item Height', 'kartnic'),
        'section' => 'kartnic_primary_navigation_section',
        'settings' => 'kartnic_sub_menu_item_height',
        'type' => 'text',
    ));

    // Add settings for Sub-Menu Width
    $wp_customize->add_setting('kartnic_sub_menu_width', array(
        'default' => '200px',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('kartnic_sub_menu_width_control', array(
        'label' => __('Sub-Menu Width', 'kartnic'),
        'section' => 'kartnic_primary_navigation_section',
        'settings' => 'kartnic_sub_menu_width',
        'type' => 'text',
    ));
}

add_action('customize_register', 'kartnic_primary_navigation_customizer');
