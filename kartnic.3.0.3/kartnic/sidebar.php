 
<?php
/**
 * Sidebar Template
 *
 * @package Kartnic
 */
?>

<div class="middle-right-bottom">
    <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar' ); ?>
    <?php else : ?>
        <p><?php esc_html_e( 'No widgets found.', 'kartnic' ); ?></p>
    <?php endif; ?>
</div>
