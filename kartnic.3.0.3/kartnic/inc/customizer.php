<?php
/**
 * Customizer settings and controls
 *
 * @package YourTheme
 */

// Register Customizer settings and controls
function yourtheme_customize_register( $wp_customize ) {

    // Add the main "Layout" panel (grouping related sections)
    $wp_customize->add_panel('kartnic_layout_panel', array(
        'title'    => __('Layout', 'kartnic'),
        'priority' => 30, // Control the panel order
    ));

    // Add a section for typography
    $wp_customize->add_section('typography_section', array(
        'title'    => __('Typography', 'kartnic'),
        'priority' => 30,
    ));

    // Add a section for colors
    $wp_customize->add_section('colors_section', array(
        'title'    => __('Colors', 'kartnic'),
        'priority' => 30,
    ));

    // --- Footer Section ---
    $wp_customize->add_section('kartnic_footer_section', array(
        'title' => __('Footer', 'kartnic'),
        'priority' => 35,
        'panel' => 'kartnic_layout_panel', // Add to the Layout panel
    ));

}
add_action( 'customize_register', 'yourtheme_customize_register' );

function kartnicc_customize_css() {
    // Get padding values from Customizer (default is 20px for all sides)
    $padding_top    = get_theme_mod( 'kartnic_content_padding_top', 20 );
    $padding_right  = get_theme_mod( 'kartnic_content_padding_right', 20 );
    $padding_bottom = get_theme_mod( 'kartnic_content_padding_bottom', 20 );
    $padding_left   = get_theme_mod( 'kartnic_content_padding_left', 20 );

    // Get the container width, separating space, and content separator from the Customizer
    $container_width   = get_theme_mod( 'kartnic_container_width', 1200 );
    $separating_space  = get_theme_mod( 'kartnic_separating_space', 10 );
    $content_layout    = get_theme_mod( 'kartnic_content_layout', 'separate_containers' );

    // If the content layout is set to 'single_container', set the separating space to 0
    if ( 'single_container' === $content_layout ) {
        $separating_space = 0;
    }

    // Get the content separator setting
    $content_separator = get_theme_mod( 'kartnic_content_separator', 2 );
    ?>
    <style type="text/css">
        :root {
            --container-width: <?php echo esc_attr( $container_width ); ?>px;
            --separating-space: <?php echo esc_attr( $separating_space ); ?>px;
            --content-separator: <?php echo esc_attr( $content_separator ); ?>em;
            --padding-top: <?php echo esc_attr( $padding_top ); ?>px;
            --padding-right: <?php echo esc_attr( $padding_right ); ?>px;
            --padding-bottom: <?php echo esc_attr( $padding_bottom ); ?>px;
            --padding-left: <?php echo esc_attr( $padding_left ); ?>px;
        }

        /* Main navigation link styles */
        .main-navigation a, #mobile-nav li a {
            font-size: <?php echo esc_attr(get_theme_mod('kartnic_primary_navigation_font_size', '16px')); ?> !important;

        }

        /* Main navigation menu item padding and height */
        .main-navigation a {
            padding-left: <?php echo esc_attr(get_theme_mod('kartnic_menu_item_padding_left', '10px')); ?>;
            height: <?php echo esc_attr(get_theme_mod('kartnic_menu_item_height', '40px')); ?>;
            align-items: center;
            display: flex;
        }

        /* Sub-menu item height */
        .main-menu .sub-menu li a {
            height: <?php echo esc_attr(get_theme_mod('kartnic_sub_menu_item_height', '10px')); ?>;
        }

        /* Sub-menu width */
        .main-navigation ul ul {
            width: <?php echo esc_attr(get_theme_mod('kartnic_sub_menu_width', '200px')); ?>;
        }

        /* Add red background color for .main-entry when using 'single_container' layout */
        <?php if ( 'single_container' === $content_layout ) : ?>
            .site-content-area, .site-content {
                background-color: white; /* Set the background color to red */
            }
        <?php endif; ?>
    </style>
    <?php
}
add_action( 'wp_head', 'kartnicc_customize_css' );

// Add dynamic grid layout styles
function kartnic_dynamic_grid_styles() {
    // Get Customizer values
    $display_columns = get_theme_mod('kartnic_display_posts_in_columns', true);
    $columns         = get_theme_mod('kartnic_columns', 3);

    // Only add the grid styles if display columns is true
    if ($display_columns) {
        ?>
        <style type="text/css">
            @media (min-width: 1200px) {
                .site-cont {
                    grid-template-columns: repeat(<?php echo esc_attr(min($columns, 6)); ?>, minmax(200px, 1fr)); /* Limit to a max of 6 columns */
                }
            }
        </style>
        <?php
    } else {
        // If the display posts in columns is disabled, use a single column layout
        ?>
        <style type="text/css">
            .site-cont {
                display: block; /* Revert to a single column (non-grid) layout */
            }
        </style>
        <?php
    }
}
add_action('wp_head', 'kartnic_dynamic_grid_styles');

// Custom function to sanitize the font size
function sanitize_font_size($value) {
    // Allow values like 'px', 'em', 'rem', '%'
    if (preg_match('/^\d+(px|em|rem|%)/', $value)) {
        return $value;
    }
    return '16px'; // Default value in case of invalid input
}
?>
