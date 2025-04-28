<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'kartnic'); ?></a>

    <header id="masthead" class="site-header <?php echo (get_theme_mod('kartnic_header_width', 'full') === 'contained') ? 'container' : ''; ?>">
        <div class="inside-header <?php echo (get_theme_mod('kartnic_inner_header_width',  'full') === 'contained') ? 'container' : ''; ?>">
        
        <?php 
        // Check if the header preset is 'navigation_left'
        $header_preset = get_theme_mod('kartnic_header_presets', 'navigation_right');
        
        if ($header_preset === 'navigation_left') : 
            // First, show the navigation (left-aligned)
        ?>

            <nav id="mobile-site-navigation" class="mobile-main-navigation">
                <div class="menu-bar-items">
             
                    <button class="mobile-menu-toggle" aria-controls="primary-menu" aria-expanded="false" tabindex="0">
                        <a>
                            <span class="icon mobile-icon-menu-bars">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                                    <line x1="3" y1="12" x2="21" y2="12"/>
                                    <line x1="3" y1="6" x2="21" y2="6"/>
                                    <line x1="3" y1="18" x2="21" y2="18"/>
                                </svg>
                            </span>
                            <span class="screen-reader-text"><?php esc_html_e('open', 'kartnic'); ?></span>
                            <span class="icon mobile-icon-close-bars" style="display: none;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"/>
                                    <line x1="6" y1="6" x2="18" y2="18"/>
                                </svg>
                            </span>
                            <span class="screen-reader-text"><?php esc_html_e('open', 'kartnic'); ?></span>
                        </a>
                    </button>       <?php kartnic_search_button(); ?>
                </div>
            </nav>

            <nav id="site-navigation" class="main-navigation">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary-menu',
                            'menu_id'        => 'nav',
                            'container'      => false,
                            'menu_class'     => 'main-menu',
                            'depth'          => 2,
                            'items_wrap'     => '<ul id="%1$s" class="%2$s" tabindex="0">%3$s</ul>',
                        )
                    );
                ?>
                <?php kartnic_search_button(); ?>
            </nav><!-- #site-navigation -->
            
            <!-- Then show the site branding (logo, title, description) -->
            <div class="site-branding-container">
                <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <?php if ($logo_url = get_theme_mod('kartnic_logo')) : ?>
                        <a href="<?php echo esc_url(home_url()); ?>" tabindex="0">
                            <img src="<?php echo esc_url($logo_url); ?>" class="site-logo">
                        </a>
                    <?php endif; ?>
                <?php endif; ?>

                <div class="site-branding">
                    <?php 
                    $site_name = get_bloginfo('name');
                    $site_description = get_bloginfo('description');

                    if (display_header_text() == true) {
                        if (!empty($site_name) && !empty($site_description)) {
                            echo '<p class="main-title" tabindex="0"><a href="' . esc_url(home_url('/')) . '">' . esc_html($site_name) . '</a></p>';
                            echo '<p class="site-description" tabindex="0"><a href="' . esc_url(home_url('/')) . '">' . esc_html($site_description) . '</a></p>';
                        } elseif (!empty($site_name)) {
                            echo '<p class="main-title" tabindex="0"><a href="' . esc_url(home_url('/')) . '">' . esc_html($site_name) . '</a></p>';
                        } elseif (!empty($site_description)) {
                            echo '<p class="site-description" tabindex="0"><a href="' . esc_url(home_url('/')) . '">' . esc_html($site_description) . '</a></p>';
                        }
                    }
                    ?>
                </div>
            </div>
        <?php else : ?>

            <!-- Default: First show the branding, then the navigation (right-aligned) -->
            <div class="site-branding-container">
                <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <?php if ($logo_url = get_theme_mod('kartnic_logo')) : ?>
                        <a href="<?php echo esc_url(home_url()); ?>" tabindex="0">
                            <img src="<?php echo esc_url($logo_url); ?>" class="site-logo">
                        </a>
                    <?php endif; ?>
                <?php endif; ?>

                <div class="site-branding">
                    <?php 
                    $site_name = get_bloginfo('name');
                    $site_description = get_bloginfo('description');

                    if (display_header_text() == true) {
                        if (!empty($site_name) && !empty($site_description)) {
                            echo '<p class="main-title" tabindex="0"><a href="' . esc_url(home_url('/')) . '">' . esc_html($site_name) . '</a></p>';
                            echo '<p class="site-description" tabindex="0"><a href="' . esc_url(home_url('/')) . '">' . esc_html($site_description) . '</a></p>';
                        } elseif (!empty($site_name)) {
                            echo '<p class="main-title" tabindex="0"><a href="' . esc_url(home_url('/')) . '">' . esc_html($site_name) . '</a></p>';
                        } elseif (!empty($site_description)) {
                            echo '<p class="site-description" tabindex="0"><a href="' . esc_url(home_url('/')) . '">' . esc_html($site_description) . '</a></p>';
                        }
                    }
                    ?>
                </div>
            </div>

            <nav id="mobile-site-navigation" class="mobile-main-navigation">
                <div class="menu-bar-items">
                    <?php kartnic_search_button(); ?>
                    <button class="mobile-menu-toggle" aria-controls="primary-menu" aria-expanded="false" tabindex="0">
                        <a>
                            <span class="icon mobile-icon-menu-bars">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                                    <line x1="3" y1="12" x2="21" y2="12"/>
                                    <line x1="3" y1="6" x2="21" y2="6"/>
                                    <line x1="3" y1="18" x2="21" y2="18"/>
                                </svg>
                            </span>
                            <span class="screen-reader-text"><?php esc_html_e('open', 'kartnic'); ?></span>
                            <span class="icon mobile-icon-close-bars" style="display: none;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"/>
                                    <line x1="6" y1="6" x2="18" y2="18"/>
                                </svg>
                            </span>
                            <span class="screen-reader-text"><?php esc_html_e('open', 'kartnic'); ?></span>
                        </a>
                    </button>
                </div>
            </nav>

            <nav id="site-navigation" class="main-navigation">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary-menu',
                            'menu_id'        => 'nav',
                            'container'      => false,
                            'menu_class'     => 'main-menu',
                            'depth'          => 2,
                            'items_wrap'     => '<ul id="%1$s" class="%2$s" tabindex="0">%3$s</ul>',
                        )
                    );
                ?>
                <?php kartnic_search_button(); ?>
            </nav><!-- #site-navigation -->

        <?php endif; ?>
        </div>
        <?php get_search_form(); ?>
    </header>

    <nav class="mobile-drop-navigation mobile-sub-menu-right toggled" id="site-navigation">
        <div class="mobile-inside-navigation">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary-menu',
                    'menu_id'        => 'mobile-nav',
                )
            );
            ?>    
        </div>             
    </nav>

</div> <!-- Closing the #page div -->
</body>
</html>