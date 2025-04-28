<?php
/**
 * The template for displaying all single posts
 *
 * @package Kartnic
 */
get_header();
the_post();
?>
<div class="site-content container" id="content" tabindex="0">
    <div class="content-area" id="primary">
        <main class="post-site-main">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="inside-article">
                    <header class="entry-header">
                        <?php
                        if ( has_post_thumbnail() ) {
                            $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                            if ($imagepath) {
                                $image_url = $imagepath[0];
                            } else {
                                $image_url = false;
                            }
                        } else {
                            $image_url = false;
                        }
                        ?>
                        <?php if ($image_url): ?>
                            <div class="post-image">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
                            </div>
                        <?php endif; ?>
                        <h1 class="entry-title"><?php the_title(); ?></h1>
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
                    </header>
                    <div class="entry-content" itemprop="text">
                        <?php the_content(); ?>
                        <?php
                        $args = array(
                            'before'           => '<p>' . __( 'Pages:', 'kartnic' ) . '</p>',
                            'after'            => '</p>',
                            'link_before'      => '',
                            'link_after'       => '',
                            'next_or_number'   => 'number',
                            'separator'        => ' ',
                            'nextpagelink'     => __( 'Next page', 'kartnic' ),
                            'previouspagelink' => __( 'Previous page', 'kartnic' ),
                            'pagelink'         => '%',
                            'echo'             => 1
                        );
                        wp_link_pages( $args );
                        ?>
                    </div>

                    <div class="post-meta">
                        <?php the_category(); ?>
                        <?php the_tags(); ?>  
                    </div>
                    
                </div>
            </article>
        </main>

		<?php if ( get_theme_mod('kartnic_author_card_visibility', true) ) : ?>
    	<?php
        	$author_id = 1; 
        	kartnic_display_author_card($author_id);
    	?>
		<?php endif; ?>
        
        <?php if ( get_theme_mod('kartnic_enable_post_navigation', true) ) : ?>
        <?php
        // Check if there is a previous or next post
        $prev_post = get_previous_post();
        $next_post = get_next_post();
        if ($prev_post || $next_post) :
        ?>
        <nav class="post-navigation">
            <div class="nav-previous">
                <?php
                if ($prev_post) {
                    $prev_post_number = get_post_number($prev_post->ID);
                    previous_post_link('%link', '< Previous Post (' . $prev_post_number . ')');
                }
                ?>
            </div>
            <div class="nav-next">
                <?php
                if ($next_post) {
                    $next_post_number = get_post_number($next_post->ID);
                    next_post_link('%link', 'Next Post (' . $next_post_number . ') >');
                }
                ?>
            </div>
        </nav>
        <?php endif; ?>
        <?php endif; ?>

        <!-- comments template here -->
        <?php
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>

        <?php
        function get_post_number($post_id) {
            global $wpdb;
            $query = "SELECT COUNT(*) FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' AND ID <= $post_id";
            return $wpdb->get_var($query);
        }
        ?>
    </div>
    <?php get_sidebar(); ?>    
</div>
<?php 
get_footer(); 
?>