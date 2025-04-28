<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kartnic
 */

get_header();
the_post();
?>
<main class="site-content container" id="content">
    <div class="content-area" id="content-area">
        <div class="middle-right">
            <div class="page-status">
                <h1><?php the_title(); ?></h1>
            </div>
            <?php the_excerpt(); ?>
            <?php the_post_thumbnail( 'large' ); ?>
            <div class="about-content">
                <?php the_content(); ?>
                <?php 
                $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                if ($imagepath) : ?>
                    <img src="<?php echo esc_url($imagepath[0]); ?>" alt="<?php the_title_attribute(); ?>" width="large"/>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php get_sidebar(); ?>	
</main>
<?php 
get_footer(); 
?>
