<?php
/**
 * Header settings for the WordPress Customizer
 *
 * @package Kartnic
 */

function kartnic_header_customizer( $wp_customize ) {

    // --- Header Section ---
    $wp_customize->add_section('kartnic_header_section', array(
        'title' => __('Header', 'kartnic'),
        'priority' => 31,
        'panel' => 'kartnic_layout_panel', // Add to the Layout panel
    ));

    // Header Presets
    $wp_customize->add_setting('kartnic_header_presets', array(
        'default' => 'navigation_right', // Default option is now "Navigation Right"
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('kartnic_header_presets_control', array(
        'label' => __('Header Presets', 'kartnic'),
        'section' => 'kartnic_header_section',
        'settings' => 'kartnic_header_presets',
        'type' => 'select',
        'choices' => array(
            'navigation_right' => __('Navigation Right', 'kartnic'), // New option added
            'navigation_left' => __('Navigation Left', 'kartnic'),
        ),
    ));

    // Header Width
    $wp_customize->add_setting('kartnic_header_width', array(
        'default' => 'full',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_header_width_control', array(
        'label' => __('Header Width', 'kartnic'),
        'section' => 'kartnic_header_section',
        'settings' => 'kartnic_header_width',
        'type' => 'select',
        'choices' => array(
            'full' => __('Full', 'kartnic'),
            'contained' => __('Contained', 'kartnic'),
        ),
    ));

    // Inner Header Width
    $wp_customize->add_setting('kartnic_inner_header_width', array(
        'default' => 'contained',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_inner_header_width_control', array(
        'label' => __('Inner Header Width', 'kartnic'),
        'section' => 'kartnic_header_section',
        'settings' => 'kartnic_inner_header_width',
        'type' => 'select',
        'choices' => array(
            'contained' => __('Contained', 'kartnic'),
            'full' => __('Full', 'kartnic'),
        ),
    ));

    // Header Alignment
    $wp_customize->add_setting('kartnic_header_alignment', array(
        'default' => 'left',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_header_alignment_control', array(
        'label' => __('Header Alignment', 'kartnic'),
        'section' => 'kartnic_header_section',
        'settings' => 'kartnic_header_alignment',
        'type' => 'select',
        'choices' => array(
            'left' => __('Left', 'kartnic'),
            'center' => __('Center', 'kartnic'),
            'right' => __('Right', 'kartnic'),
        ),
    ));
    
}

add_action( 'customize_register', 'kartnic_header_customizer' );


// Add customizer style for header alignment.
function kartnic_header_alignment_css() {
    $alignment = get_theme_mod('kartnic_header_alignment', 'center');
    $alignment_css = '';

    // Generate alignment CSS
    if ($alignment == 'left') {
        $alignment_css = 'text-align: left;';
    } elseif ($alignment == 'right') {
        $alignment_css = 'text-align: right;';
    } else {
        $alignment_css = 'text-align: center;';
    }

    // Output the CSS
    echo '<style>
            #masthead {
                ' . esc_html($alignment_css) . '
            }
          </style>';
}
add_action('wp_head', 'kartnic_header_alignment_css');
