<?php
/**
 * blog settings for the WordPress Customizer
 *
 * @package Kartnic
 */
 
function kartnic_blog_customizer( $wp_customize ) {
        
    // --- Blog Section ---
    $wp_customize->add_section('kartnic_blog_section', array(
        'title' => __('Blog', 'kartnic'),
        'priority' => 34,
        'panel' => 'kartnic_layout_panel', // Add to the Layout panel
    ));

    $wp_customize->add_setting('kartnic_blog_content_type', array(
        'default' => 'single', // Ensure 'single' is the default value
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('kartnic_blog_content_type_control', array(
        'label' => __('Content Type', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_blog_content_type',
        'type' => 'select',
        'choices' => array(
            'single' => __('Single', 'kartnic'),   // Default will be 'Single'
            'full_content' => __('Full Content', 'kartnic'),
        ),
    ));


        // Add setting for blog excerpt length
        $wp_customize->add_setting('kartnic_blog_excerpt_length', array(
            'default' => 55, // Default length
            'sanitize_callback' => 'absint',
        ));

        // Add control for blog excerpt length
        $wp_customize->add_control('kartnic_blog_excerpt_length_control', array(
            'label' => __('Excerpt Length (words)', 'kartnic'),
            'section' => 'kartnic_blog_section',
            'settings' => 'kartnic_blog_excerpt_length',
            'type' => 'number',
            'input_attrs' => array(
                'min' => 10, // Minimum value
                'max' => 200, // Maximum value
                'step' => 1, // Step size
            ),
        ));


        $wp_customize->add_setting('kartnic_read_more_label', array(
            'default' => __('Read more', 'kartnic'),
            'sanitize_callback' => 'sanitize_text_field',
        ));
        
        $wp_customize->add_control('kartnic_read_more_label_control', array(
            'label' => __('Read More Label', 'kartnic'),
            'section' => 'kartnic_blog_section',
            'settings' => 'kartnic_read_more_label',
            'type' => 'text',
        ));
        

    // Display Read More as Button
    $wp_customize->add_setting('kartnic_display_read_more_button', array(
        'default' => true, // Default value is true
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_display_read_more_button_control', array(
        'label' => __('Display Read More as Button', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_display_read_more_button',
        'type' => 'checkbox',
        'description' => __('Check this box to display the "Read More" link as a button.', 'kartnic'),
    ));

    // Display Post Date
    $wp_customize->add_setting('kartnic_display_post_date', array(
        'default' => true, // Default value is true
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_display_post_date_control', array(
        'label' => __('Display Post Date', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_display_post_date',
        'type' => 'checkbox',
        'description' => __('Check this box to display the post date.', 'kartnic'),
    ));

    // Display Post Author
    $wp_customize->add_setting('kartnic_display_post_author', array(
        'default' => true, // Default value is true
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_display_post_author_control', array(
        'label' => __('Display Post Author', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_display_post_author',
        'type' => 'checkbox',
        'description' => __('Check this box to display the post author.', 'kartnic'),
    ));

    // Display Post Categories
    $wp_customize->add_setting('kartnic_display_post_categories', array(
        'default' => true, // Default value is true
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_display_post_categories_control', array(
        'label' => __('Display Post Categories', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_display_post_categories',
        'type' => 'checkbox',
        'description' => __('Check this box to display post categories.', 'kartnic'),
    ));

    // Display Post Tags
    $wp_customize->add_setting('kartnic_display_post_tags', array(
        'default' => true, // Default value is true
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_display_post_tags_control', array(
        'label' => __('Display Post Tags', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_display_post_tags',
        'type' => 'checkbox',
        'description' => __('Check this box to display post tags.', 'kartnic'),
    ));

    // Display Comment Count
    $wp_customize->add_setting('kartnic_display_comment_count', array(
        'default' => true, // Default value is true
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_display_comment_count_control', array(
        'label' => __('Display Comment Count', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_display_comment_count',
        'type' => 'checkbox',
        'description' => __('Check this box to display the comment count.', 'kartnic'),
    ));

    // Featured Images
    $wp_customize->add_setting('kartnic_display_featured_images', array(
        'default' => true, // Default value is true
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_display_featured_images_control', array(
        'label' => __('Display Featured Images', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_display_featured_images',
        'type' => 'checkbox',
        'description' => __('Check this box to display featured images in blog posts.', 'kartnic'),
    ));

    // Featured Image Location
    $wp_customize->add_setting('kartnic_featured_image_location', array(
        'default' => 'above_title', // Default location
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_featured_image_location_control', array(
        'label' => __('Featured Image Location', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_featured_image_location',
        'type' => 'select',
        'choices' => array(
            'above_title' => __('Above Title', 'kartnic'),
            'below_title' => __('Below Title', 'kartnic'),
        ),
    ));

    // Featured Image Alignment
    $wp_customize->add_setting('kartnic_featured_image_alignment', array(
        'default' => 'center', // Default alignment
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_featured_image_alignment_control', array(
        'label' => __('Featured Image Alignment', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_featured_image_alignment',
        'type' => 'select',
        'choices' => array(
            'left' => __('Left', 'kartnic'),
            'center' => __('Center', 'kartnic'),
            'right' => __('Right', 'kartnic'),
        ),
    ));

    // Featured Image Size (Media Attachment Size)
    $wp_customize->add_setting('kartnic_featured_image_size', array(
        'default' => 'full', // Default size
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_featured_image_size_control', array(
        'label' => __('Featured Image Size', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_featured_image_size',
        'type' => 'select',
        'choices' => array(
            'full' => __('Full', 'kartnic'),
            'medium' => __('Medium', 'kartnic'),
            'large' => __('Large', 'kartnic'),
        ),
    ));


    // Display Posts in Columns
    $wp_customize->add_setting('kartnic_display_posts_in_columns', array(
        'default' => true, // Default value is true
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('kartnic_display_posts_in_columns_control', array(
        'label' => __('Display Posts in Columns', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_display_posts_in_columns',
        'type' => 'checkbox',
        'description' => __('Check this box to display posts in columns.', 'kartnic'),
    ));

    // Number of Columns
    $wp_customize->add_setting('kartnic_columns', array(
        'default' => 3, // Default number of columns
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('kartnic_columns_control', array(
        'label' => __('Number of Columns', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_columns',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 6,
        ),
    ));

    // Add setting for making the first post featured
    $wp_customize->add_setting('kartnic_blog_first_post_featured', array(
        'default' => false, // Default value (not featured)
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add control for making the first post featured
    $wp_customize->add_control('kartnic_blog_first_post_featured_control', array(
        'label' => __('Make First Post Featured', 'kartnic'),
        'section' => 'kartnic_blog_section',
        'settings' => 'kartnic_blog_first_post_featured',
        'type' => 'checkbox',
        'description' => __('Check to make the first post in the blog feed a featured post.', 'kartnic'),
    ));
        
    if ( ! function_exists( 'is_plugin_active' ) ) {
        require_once ABSPATH . 'wp-admin/includes/plugin.php';
    }

    if ( ! is_plugin_active( 'kartnic-premium/kartnic-premium.php' ) ) {
        // Add notice and button below the excerpt length control
        $wp_customize->add_setting('kartnic_premium_notice', array(
            'sanitize_callback' => 'wp_kses_post',
        ));

        $premium_url = '#'; // Define the variable

        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'kartnic_premium_notice',
            array(
                'description' => '<p>More options are available for this section in our premium version.</p><a href="' . $premium_url . '" class="button button-primary">Learn more</a>',
                'section' => 'kartnic_blog_section', // Replace with your section ID
                'settings' => 'kartnic_premium_notice',
                'type' => 'hidden', // Hidden type to display only description
            )
        ));
    }
}

add_action( 'customize_register', 'kartnic_blog_customizer' );
