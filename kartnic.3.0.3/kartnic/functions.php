<?php
function kartnic_theme_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header', array(
        'header-text' => true,
        // other settings
    ));
    
    add_theme_support('custom-background');
    add_theme_support('title-tag'); // Added title-tag support
    add_editor_style(); // Added editor style support

    // Add support for block styles.
    add_theme_support('wp-block-styles');

    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');

    // Add support for HTML5 markup.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    function kartnic_custom_logo_setup() {
        $defaults = array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
            'unlink-homepage-logo' => true,
        );
        add_theme_support('custom-logo', $defaults);
    }
    add_action('after_setup_theme', 'kartnic_custom_logo_setup');

    // Add support for wide alignment.
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'kartnic_theme_setup');

add_filter('auto_update_theme', '__return_true');

add_action('wp', function() {
    remove_action('kartnic_after_loop', 'kartnic_do_post_navigation');
});

add_post_type_support('page', 'excerpt');

function kartnic_search_button() {
    ?>
    <span class="search-button" tabindex="0">
        <a role="button" aria-label="<?php echo esc_attr_e('Open search', 'kartnic'); ?>" data-gpmodal-trigger="search">
            <span class="icon-search">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                    <circle cx="11" cy="11" r="8"/>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                </svg>
            </span>    
        </a>
    </span>
    <?php
}

function kartnic_enqueue_styles() {
    wp_enqueue_style('kartnic-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'kartnic_enqueue_styles');



function custom_typography_css() {
    ?>
    <style type="text/css">

.single-post h1 {
    font-size: <?php echo esc_attr('H1_font_size', '16px'); ?>;
    font-weight: <?php echo esc_attr('H1_font_weight', '400'); ?>;
    letter-spacing: <?php echo esc_attr('H1_letter_spacing', '0px'); ?>;
    line-height: <?php echo esc_attr('H1_line_height', '1.5'); ?>;
}
.single-post h2 {
    font-size: <?php echo esc_attr('H2_font_size', '16px'); ?>;
    font-weight: <?php echo esc_attr('H2_font_weight', '400'); ?>;
    letter-spacing: <?php echo esc_attr('H2_letter_spacing', '0px'); ?>;
    line-height: <?php echo esc_attr('H2_line_height', '1.5'); ?>;
}
.single-post h3 {
    font-size: <?php echo esc_attr('H3_font_size', '16px'); ?>;
    font-weight: <?php echo esc_attr('H3_font_weight', '400'); ?>;
    letter-spacing: <?php echo esc_attr('H3_letter_spacing', '0px'); ?>;
    line-height: <?php echo esc_attr('H3_line_height', '1.5'); ?>;
}
.single-post h4 {
    font-size: <?php echo esc_attr('H4_font_size', '16px'); ?>;
    font-weight: <?php echo esc_attr('H4_font_weight', '400'); ?>;
    letter-spacing: <?php echo esc_attr('H4_letter_spacing', '0px'); ?>;
    line-height: <?php echo esc_attr('H4_line_height', '1.5'); ?>;
}
.single-post h5 {
    font-size: <?php echo esc_attr('H5_font_size', '16px'); ?>;
    font-weight: <?php echo esc_attr('H5_font_weight', '400'); ?>;
    letter-spacing: <?php echo esc_attr('H5_letter_spacing', '0px'); ?>;
    line-height: <?php echo esc_attr('H5_line_height', '1.5'); ?>;
}
.single-post h6 {
    font-size: <?php echo esc_attr('H6_font_size', '16px'); ?>;
    font-weight: <?php echo esc_attr('H6_font_weight', '400'); ?>;
    letter-spacing: <?php echo esc_attr('H6_letter_spacing', '0px'); ?>;
    line-height: <?php echo esc_attr('H6_line_height', '1.5'); ?>;
}
.single-post p {
    font-size: <?php echo esc_attr('paragraph_font_size', '16px'); ?>;
    font-weight: <?php echo esc_attr('paragraph_font_weight', '400'); ?>;
    letter-spacing: <?php echo esc_attr('paragraph_letter_spacing', '0px'); ?>;
    line-height: <?php echo esc_attr('paragraph_line_height', '1.5'); ?>;
    margin-bottom: <?php echo esc_attr('paragraph_bottom_margin', '0px'); ?>;
    font-family: <?php echo esc_attr('paragraph_font_family', 'Arial, sans-serif'); ?>;
}

#site-navigation {
            background-color: <?php echo esc_attr('nav_bg_color', '#333333'); ?>;
        }
        #site-navigation a {
            color: <?php echo esc_attr('nav_text_color', '#ffffff'); ?>;
        }
        .mobile-drop-navigation {
            background-color: <?php echo esc_attr('nav_bg_color', '#333333'); ?>;
        }
        .mobile-drop-navigation a {
            color: <?php echo esc_attr('nav_text_color', '#ffffff'); ?>;
        }
        button, .submit {
            background-color: <?php echo esc_attr('button_bg_color', '#333333'); ?>;
            color: <?php echo esc_attr('button_text_color', '#ffffff'); ?>;
        }       .site-info {
            background-color: <?php echo esc_attr('footer_bg_color', '#333333'); ?>;
            color: <?php echo esc_attr('footer_text_color', '#ffffff'); ?>;
        }
        .middle-right-bottom .widget  {
            background-color: <?php echo esc_attr('sidebar_bg_color', '#333333'); ?>;
            color: <?php echo esc_attr('sidebar_text_color', '#ffffff'); ?>;
        }
        .post-navigation {
            background-color: <?php echo esc_attr('post_navigation_bg_color', '#f0f0f0'); ?>;
            .nav-previous a, .nav-next a {
                color: <?php echo esc_attr('post_navigation_text_color', '#333333'); ?>;
            }
        }
        .post-site-main article {
            background-color: <?php echo esc_attr('post_site_main_bg_color', '#ffffff'); ?> !important;
            color: <?php echo esc_attr('post_site_main_text_color', '#000000'); ?> !important;
        }
        .site-cont article, .comments-area {
    background-color: <?php echo esc_attr('site_cont_bg_color', '#ffffff'); ?> !important;
    color: <?php echo esc_attr('site_cont_text_color', '#000000'); ?> !important;
}

.nav-links {
    background-color: <?php echo esc_attr('pagination_bg_color', '#f0f0f0'); ?> !important;
    color: <?php echo esc_attr('pagination_text_color', '#333333'); ?> !important;
}


    </style>
    <?php
}
add_action('wp_head', 'custom_typography_css');
 

function kartnic_customize_css() {
    ?>
    <style type="text/css">
        .focus-element {
            color: <?php echo esc_attr(get_theme_mod('focus_color', '#0d00ff')); ?> !important;
        }
        a:active {
            color: <?php echo esc_attr(get_theme_mod('focus_color', '#0d00ff')); ?> !important;
        }
        .site-header {
            background-color: <?php echo esc_attr(get_theme_mod('header_bg_color', '#ffffff')); ?> !important;
            color: <?php echo esc_attr(get_theme_mod('header_text_color', '#000000')); ?> !important;
        }
        .site-header a {
            color: <?php echo esc_attr(get_theme_mod('header_text_color', '#000000')); ?> !important;
        }
    </style>
    <?php
}
add_action('wp_head', 'kartnic_customize_css');

function kartnic_display_author_card($author_id) {
    $author = get_userdata($author_id);
    if ($author) {
        ?>
        <div class="kartnic-author-card">
            <div class="kartnic-author-avatar">
                <?php echo get_avatar($author->ID, 96); ?>
            </div>
            <h2><?php echo esc_html($author->display_name); ?></h2>
            <?php if ( get_the_author_meta('description', $author->ID) ) : ?>
                <div class="kartnic-author-description">
                    <p><?php echo esc_html(get_the_author_meta('description', $author->ID)); ?></p>
                </div>
            <?php endif; ?>
        </div>
        <?php
    }
}

function kartnic_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Menu', 'kartnic' ),
        )
    );
}
add_action( 'init', 'kartnic_register_menus' );

function kartnic_customizer_settings($wp_customize) {
    // Add panel for General Settings
    $wp_customize->add_panel('kartnic_general_settings_panel', array(
        'title' => __('General Settings', 'kartnic'),
        'priority' => 30,
    ));

    // Add sub-section for Navigation Settings within General Settings panel
    $wp_customize->add_section('kartnic_navigation_section', array(
        'title' => __('Navigation Settings', 'kartnic'),
        'priority' => 30,
        'panel' => 'kartnic_general_settings_panel',
    ));

    // Add setting for post navigation
    $wp_customize->add_setting('kartnic_enable_post_navigation', array(
        'default' => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));

    // Add control for post navigation
    $wp_customize->add_control('kartnic_enable_post_navigation', array(
        'type' => 'checkbox',
        'section' => 'kartnic_navigation_section', // Use the Navigation Settings section
        'label' => __('Enable Post Navigation', 'kartnic'),
        'description' => __('Show or hide the next/previous post links.', 'kartnic'),
    ));

    // Add sub-section for Author Card Visibility within General Settings panel
    $wp_customize->add_section('kartnic_author_card_section', array(
        'title' => __('Author Card Settings', 'kartnic'),
        'priority' => 35, // Position it below Navigation Settings
        'panel' => 'kartnic_general_settings_panel',
    ));

    // Add setting for author card visibility
    $wp_customize->add_setting('kartnic_author_card_visibility', array(
        'default' => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));

    // Add control for author card visibility
    $wp_customize->add_control('kartnic_author_card_visibility_control', array(
        'label' => __('Show Author Card', 'kartnic'),
        'section' => 'kartnic_author_card_section', // Use the Author Card Settings section
        'settings' => 'kartnic_author_card_visibility',
        'type' => 'checkbox',
    ));

    // Add sub-section for Back to Top Button within General Settings panel
    $wp_customize->add_section('kartnic_back_to_top_section', array(
        'title' => __('Back to Top Button', 'kartnic'),
        'priority' => 40,
        'panel' => 'kartnic_general_settings_panel',
    ));

    // Add setting for back to top button
    $wp_customize->add_setting('kartnic_back_to_top', array(
        'default' => false,
        'sanitize_callback' => 'wp_validate_boolean',
    ));

    // Add control for back to top button
    $wp_customize->add_control('kartnic_back_to_top_control', array(
        'label' => __('Enable Back to Top Button', 'kartnic'),
        'section' => 'kartnic_back_to_top_section', // Use the Back to Top Button section
        'settings' => 'kartnic_back_to_top',
        'type' => 'checkbox',
    ));

    // Add setting for logo width with sanitization callback
    $wp_customize->add_setting('kartnic_logo_width', array(
        'default' => '150',
        'transport' => 'postMessage', // Use postMessage for live preview
        'sanitize_callback' => 'absint', // Add sanitization callback here
    ));

    // Add slider control for logo width
    $wp_customize->add_control('kartnic_logo_width_control', array(
        'label' => __('Logo Width (px)', 'kartnic'),
        'section' => 'title_tagline',
        'settings' => 'kartnic_logo_width',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 50, // Minimum value
            'max' => 300, // Maximum value
            'step' => 1, // Step size
        ),
    ));

    // Add setting for logo upload
    $wp_customize->add_setting('kartnic_logo', array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Add control for logo upload
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'kartnic_logo_control', array(
        'label' => __('Upload Logo', 'kartnic'),
        'section' => 'title_tagline',
        'settings' => 'kartnic_logo',
    )));

 


    
    }
    add_action('customize_register', 'kartnic_customizer_settings');
    
    function kartnic_custom_excerpt($length = 55) {
        $excerpt_length = get_theme_mod('kartnic_blog_excerpt_length', $length);
        error_log('Excerpt Length: ' . $excerpt_length);
        
        $excerpt = get_the_excerpt();
        if (empty($excerpt)) {
            $excerpt = get_the_content();
        }
        $excerpt = wp_trim_words($excerpt, $excerpt_length, '...');
        error_log('Excerpt: ' . $excerpt);
        return $excerpt;
    }    
    
    function kartnic_sidebar_position_class($classes) {
        $sidebar_position = get_theme_mod('kartnic_sidebar_position', 'right');
        $classes[] = 'sidebar-' . esc_attr($sidebar_position);
        return $classes;
    }
    add_filter('body_class', 'kartnic_sidebar_position_class');
    
    function kartnic_customize_register($wp_customize) {
        // Add a section for the footer settings
        $wp_customize->add_section('kartnic_footer_section', array(
            'title' => __('Footer Settings', 'kartnic'),
            'priority' => 30,
        ));
    
        // Add a setting for the copyright text
        $wp_customize->add_setting('kartnic_copyright_text', array(
            'default' => '© ' . date('Y') . ' ' . get_bloginfo('name'),
            'sanitize_callback' => 'sanitize_text_field',
        ));
    
        // Add a setting for the site link
        $wp_customize->add_setting('kartnic_site_link', array(
            'default' => home_url(), // Default to the site URL
            'sanitize_callback' => 'esc_url_raw',
        ));

    
        // Add a control to change the copyright text
        $wp_customize->add_control('kartnic_copyright_text_control', array(
            'label' => __('Copyright Text', 'kartnic'),
            'section' => 'kartnic_footer_section',
            'settings' => 'kartnic_copyright_text',
            'type' => 'text',
        ));
    
        // Add a control to change the site link
        $wp_customize->add_control('kartnic_site_link_control', array(
            'label' => __('Site Link', 'kartnic'),
            'section' => 'kartnic_footer_section',
            'settings' => 'kartnic_site_link',
            'type' => 'url',
        ));
    
        // Remove the header text color control
        $wp_customize->remove_control('header_textcolor');
    }
    add_action('customize_register', 'kartnic_customize_register');
    
    // Function to display the dynamic copyright text with site link and credit
    function kartnic_dynamic_copyright() {
        $site_link = get_theme_mod('kartnic_site_link', home_url()); // Changed get_site_url() to home_url()
        $site_name = get_bloginfo('name');
        $current_year = date('Y');
        $copyright_text = get_theme_mod('kartnic_copyright_text', '© ' . $current_year . ' ' . $site_name);

        if ($site_link === '#' || empty($site_link)) {
            return esc_html($copyright_text) . ' • Built with <a href="https://kartnic.com">Kartnic</a>';
        } else {
            return str_replace($site_name, '<a href="' . esc_url($site_link) . '">' . esc_html($site_name) . '</a>', esc_html($copyright_text)) . ' • Built with <a href="https://kartnic.com">Kartnic</a>';
        }
    }

    
    // Hook to display the dynamic copyright text in the footer
    add_action('wp_footer', 'kartnic_dynamic_copyright');
    
    function kartnic_enqueue_scripts() {
        // Enqueue back-to-top script
        wp_enqueue_script('back-to-top', get_template_directory_uri() . '/js/back-to-top.js', array('jquery'), null, true);
        wp_localize_script('back-to-top', 'kartnic_back_to_top_enabled', array(
            'enabled' => get_theme_mod('kartnic_back_to_top', false)
        ));
    
        // Enqueue menu script
        wp_enqueue_script('menu-script', get_template_directory_uri() . '/js/menu.js', array('jquery'), null, true);
        wp_localize_script('menu-script', 'kartnic_menu_enabled', array(
            'enabled' => get_theme_mod('kartnic_menu', false)
        ));
    
        // Enqueue search script
        wp_enqueue_script('search-script', get_template_directory_uri() . '/js/search.js', array('jquery'), null, true);
    }
    add_action('wp_enqueue_scripts', 'kartnic_enqueue_scripts');
    
    // Register custom block patterns
    function kartnic_register_block_patterns() {
        register_block_pattern(
            'kartnic/kartnic-awesome-pattern',
            array(
                'title'       => __( 'My Awesome Pattern', 'kartnic' ),
                'description' => _x( 'A description of kartnic awesome pattern', 'Block pattern description', 'kartnic' ),
                'content'     => "<!-- wp:paragraph --><p>" . __( 'Hello World', 'kartnic' ) . "</p><!-- /wp:paragraph -->",
            )
        );
    }
    add_action( 'init', 'kartnic_register_block_patterns' );
    
    // Register custom block styles
    function kartnic_register_block_styles() {
        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'fancy-paragraph',
                'label' => __( 'Fancy Paragraph', 'kartnic' ),
            )
        );
    }
    add_action( 'init', 'kartnic_register_block_styles' );
    
    // Enqueue comment-reply script
    function kartnic_enqueue_comment_reply_script() {
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'kartnic_enqueue_comment_reply_script' );
    
    // Enqueue customize preview script
    function kartnic_customize_preview_js() {
        wp_enqueue_script('kartnic-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array('customize-preview'), '1.0', true);
    }
    add_action('customize_preview_init', 'kartnic_customize_preview_js');
    
    // Register sidebars in a custom function hooked to widgets_init
    function kartnic_widgets_init() {
        register_sidebar(array(
            'name' => esc_html__('Sidebar Location', 'kartnic'),
            'id' => 'sidebar',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer 1', 'kartnic'),
            'id' => 'footer1',
            'description' => esc_html__('Add Widgets Here for the content of footer1', 'kartnic'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer 2', 'kartnic'),
            'id' => 'footer2',
            'description' => esc_html__('Add Widgets Here for the content of footer2', 'kartnic'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer 3', 'kartnic'),
            'id' => 'footer3',
            'description' => esc_html__('Add Widgets Here for the content of footer3', 'kartnic'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer 4', 'kartnic'),
            'id' => 'footer4',
            'description' => esc_html__('Add Widgets Here for the content of footer4', 'kartnic'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
    }
    add_action('widgets_init', 'kartnic_widgets_init');

    // Include the necessary files
    require_once get_template_directory() . '/inc/customizer.php';
    require_once get_template_directory() . '/inc/layout/header-settings.php';
    require_once get_template_directory() . '/inc/layout/footer-settings.php';
    require_once get_template_directory() . '/inc/layout/container-settings.php';
    require_once get_template_directory() . '/inc/layout/blog-settings.php';
    require_once get_template_directory() . '/inc/layout/sidebar-settings.php';
    require_once get_template_directory() . '/inc/layout/primary-navigation-settings.php';
    require_once get_template_directory() . '/inc/typography/typography.php';
    require_once get_template_directory() . '/inc/colors/colors.php';
    
    function exclude_featured_post_from_main_query( $query ) {
        // यह चेक करें कि यह मुख्य लूप है और एडमिन पैनल में नहीं है
        if ( !is_admin() && $query->is_main_query() ) {
            // सबसे पहले पोस्ट को फीचर्ड पोस्ट के रूप में चेक करें
            // अगर फीचर्ड पोस्ट है, तो उसे मुख्य लूप से बाहर कर दें
            $first_post_is_featured = get_theme_mod('kartnic_blog_first_post_featured', false);
            if ($first_post_is_featured) {
                // फीचर्ड पोस्ट के ID को प्राप्त करें
                $args = array(
                    'posts_per_page' => 1,
                    'paged' => 1,
                );
                $first_post_query = new WP_Query($args);
                if ($first_post_query->have_posts()) {
                    $first_post_query->the_post();
                    // फीचर्ड पोस्ट का ID प्राप्त करें
                    $featured_post_id = get_the_ID();
                    // अब इसे मुख्य लूप से बाहर कर दें
                    $query->set('post__not_in', array($featured_post_id));
                    wp_reset_postdata(); // कस्टम क्वेरी के बाद पोस्ट डेटा को रीसेट करें
                }
            }
        }
    }
    add_action('pre_get_posts', 'exclude_featured_post_from_main_query');
    
    function display_first_featured_post() {
        // Check if the first post is set to be featured
        $first_post_is_featured = get_theme_mod('kartnic_blog_first_post_featured', false);
        
         // Get the number of posts to retrieve from the customizer setting (default to 1 if not set)
        $posts_to_display = get_theme_mod('kartnic_featured_posts_count', 1); // Customize the setting as needed

        if ($first_post_is_featured) {
            // Query the first post
            $args = array(
               'posts_per_page' => $posts_to_display,   // Get only one post
                'paged' => 1,           // Start from the first page
            );
            
            $first_post_query = new WP_Query($args);
            
            if ($first_post_query->have_posts()) :
                $first_post_query->the_post();  // Set up the post data
                ?>
                <!-- Featured Post Design with Flexbox -->
                <div class="featured-post-container">
                    
                    <!-- Featured Post Image (on the left) -->
                    <div class="featured-post-image">
             
                
       <?php 
                        // Get the selected location for the featured image (above_title or below_title)
                        $featured_image_location = get_theme_mod('kartnic_featured_image_location', 'above_title'); 
                        
                        // Display the featured image based on the selected location
                        if ( get_theme_mod( 'kartnic_display_featured_images', true ) && has_post_thumbnail() ) : 
                            if ( $featured_image_location ) : ?>
                                <div class="post-image" style="text-align: <?php echo esc_attr(get_theme_mod('kartnic_featured_image_alignment', 'center')); ?>;">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(get_theme_mod('kartnic_featured_image_size', 'full')); ?>
                                    </a>
                                </div>
                            <?php endif; 
                        endif; ?>    </div>
                    <!-- Featured Post Content (Title, Excerpt) -->
                    <div class="featured-post-content">
                        <!-- Post Title -->
                        <h2 class="main-entry-title" itemprop="headline">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                        
                        <!-- Post Date and Author -->
                        <div class="entry-meta">
                                <?php if (get_theme_mod('kartnic_display_post_date', true)) : ?>
                                    <span class="posted-on"><?php echo get_the_date(); ?></span>
                                <?php endif; ?>

                                <?php if (get_theme_mod('kartnic_display_post_author', true)) : ?>
                                    <span class="byline">  by  
                                        <span class="author vcard" itemprop="author" itemtype="https://schema.org/Person" itemscope="">
                                            <a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="View all posts by <?php the_author(); ?>" rel="author" itemprop="url">
                                                <span class="author-name" itemprop="name"><?php the_author(); ?></span>
                                            </a>
                                        </span>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="entry-summary">
                        <?php
                        // Get the selected content type from the customizer
                        $content_type = get_theme_mod('kartnic_blog_content_type', 'archives'); // Default to 'archives'

                        if ($content_type == 'full_content') {
                            // Display full content if 'Full Content' is selected
                            the_content();
                        } else {
                            // Otherwise, show an excerpt
                            $excerpt_length = get_theme_mod('kartnic_blog_excerpt_length', 55); // Default excerpt length
                            $excerpt = get_the_excerpt();
                            
                            // If no excerpt exists, use the content
                            if (empty($excerpt)) {
                                $excerpt = get_the_content();
                            }

                            // Trim and display the excerpt
                            echo wp_trim_words($excerpt, $excerpt_length, '...');
                        }
                        ?>
                    </div>

                    <?php if (get_theme_mod('kartnic_display_read_more_button', true)) : ?>
                        <div class="read-btn">
                            <a href="<?php the_permalink(); ?>" tabindex="5">
                                <input type="button" value="<?php echo esc_attr(get_theme_mod('kartnic_read_more_label', __('Read more', 'kartnic'))); ?>" name=" " tabindex="0">
                            </a>
                        </div>
                    <?php endif; ?>

                    <!-- Display Categories and Tags -->
                    <?php if (get_theme_mod('kartnic_display_post_categories', true) || get_theme_mod('kartnic_display_post_tags', true)) : ?>
                        <div class="post-categories-tags" style="margin-top: 20px;">
                            <!-- Display Categories -->
                            <?php if (get_theme_mod('kartnic_display_post_categories', true)) : ?>
                                <div class="post-categories">
                                    <?php
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        foreach ( $categories as $category ) {
                                            echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="category-link">' . esc_html( $category->name ) . '</a> ';
                                        }
                                    }
                                    ?>
                                </div>
                            <?php endif; ?>

                            <!-- Display Tags -->
                            <?php if (get_theme_mod('kartnic_display_post_tags', true)) : ?>
                                <div class="post-tags">
                                    <?php
                                    $tags = get_the_tags();
                                    if ( $tags ) {
                                        foreach ( $tags as $tag ) {
                                            echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '" class="tag-link">' . esc_html( $tag->name ) . '</a> ';
                                        }
                                    }
                                    ?>
                                </div>
                            <?php endif; ?>
     
                            <?php if (get_theme_mod('kartnic_display_comment_count', true)) : ?>
                                <div class="comment-count">
                                    <?php
                                    // Get the number of comments for the post
                                    $comment_count = get_comments_number();

                                    // If no comments, show "Leave a Comment" link
                                    if ($comment_count == 0) {
                                        // Display "Leave a Comment" link
                                        echo '<a href="' . get_permalink() . '#respond" class="leave-comment-link">' . __('Leave a Comment', 'kartnic') . '</a>';
                                    } elseif ($comment_count == 1) {
                                        // Display a single comment
                                        echo __('1 Comment', 'kartnic');
                                    } else {
                                        // Display multiple comments
                                        echo $comment_count . __(' Comments', 'kartnic');
                                    }
                                    ?>
                                </div>
                            <?php endif; ?>
                      
                        </div>
                    <?php endif; ?>

                    </div>
                </div>
                <?php
                wp_reset_postdata(); // Reset post data after the custom query
            endif;
        }
    }

// Output the mobile breakpoint in theme CSS
function kartnic_customizer_mobile_menu_css() {
    $mobile_breakpoint = get_theme_mod('kartnic_mobile_menu_breakpoint', '768px');
    ?>
    <style type="text/css">
        .mobile-main-navigation {
            display: none;
        }

        .toggle-button {
                display: none;
        }
        
        @media (max-width: <?php echo esc_html($mobile_breakpoint); ?>) {
            .main-navigation {
                display: none;
            }

            .toggle-button {
                display: block;
            }

            .mobile-main-navigation {
                display: block
            }

        }
    </style>
    <?php
}

add_action('wp_head', 'kartnic_customizer_mobile_menu_css');
