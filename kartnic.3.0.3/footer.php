<section class='custom-footer-section <?php echo esc_attr(get_theme_mod('kartnic_footer_width', 'full') === 'contained' ? 'contained' : 'full'); ?>'>
    <div class="inside-site-info <?php echo (get_theme_mod('kartnic_inner_footer_width', 'contained') === 'full') ? 'full-width' : 'container'; ?>"> 
        <?php
        // Get the number of footer widgets set in the customizer
        $footer_widgets = get_theme_mod('kartnic_footer_widgets', 4); // Default to 4 widgets if not set
        $footer_width = get_theme_mod('kartnic_footer_width', 'full'); // Get selected footer width option
        ?>

        <?php if ($footer_widgets > 0) : ?>
            <footer class="custom-footer">
                <div class="footer-1">
                    <div class="footer-container <?php echo ($footer_width === 'full') ? 'full-width' : 'contained-width'; ?>">
                        <div class="inside-footer-widgets">
                            <?php for ($i = 1; $i <= $footer_widgets; $i++) : ?>
                                <div class="footer-widget-<?php echo $i; ?>">
                                    <?php if (is_active_sidebar('footer' . $i)) : ?>
                                        <?php dynamic_sidebar('footer' . $i); ?>
                                    <?php endif; ?>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </footer>
        <?php endif; ?>

        <div class="copyright-bar">
            <?php echo kartnic_dynamic_copyright(); ?>
        </div>
    </div>
</section>
 
<?php wp_footer(); ?>
</body>
</html>
