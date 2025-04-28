<?php
/**
 * Archive Page Template
 *
 * @package Kartnic
 */
get_header(); ?>

<main class="site-content-area container" id="content">

    <header class="page-header">
        <?php do_action( 'kartnic_before_archive_title' ); ?>
        <h1 class="page-title">
            <?php the_archive_title(); ?>
        </h1>
        <?php do_action( 'kartnic_after_archive_title' ); ?>
    </header>

    <div class='site-content <?php echo esc_attr(get_theme_mod('kartnic_blog_sidebar_layout', 'content_sidebar')); ?>'>

        <div class="site-cont main-area" id="cont-site">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class(); ?>>

                        <div class="insider-article">
                            <?php 
                            // Get the selected location for the featured image (above_title or below_title)
                            $featured_image_location = get_theme_mod('kartnic_featured_image_location', 'above_title'); 

                            // Display the featured image based on the selected location
                            if ( get_theme_mod( 'kartnic_display_featured_images', true ) && has_post_thumbnail() ) : 
                                if ( $featured_image_location == 'above_title' ) : ?>
                                    <div class="post-image" style="text-align: <?php echo esc_attr(get_theme_mod('kartnic_featured_image_alignment', 'center')); ?>;">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail(get_theme_mod('kartnic_featured_image_size', 'full')); ?>
                                        </a>
                                    </div>
                                <?php endif; 
                            endif; ?>

                            <header class="entry-header">
                                <h2 class="main-entry-title" itemprop="headline">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
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

                            <div class="entry-summary">
                                <?php 
                                // Show an excerpt from the post
                                $excerpt_length = get_theme_mod('kartnic_blog_excerpt_length', 55); // Default excerpt length
                                $excerpt = get_the_excerpt();

                                // If no excerpt exists, use the content
                                if (empty($excerpt)) {
                                    $excerpt = get_the_content();
                                }

                                // Trim and display the excerpt
                                echo wp_trim_words($excerpt, $excerpt_length, '...');
                                ?>
                            </div>

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
                                </div>
                            <?php endif; ?>

                        </div>

                        <?php if (get_theme_mod('kartnic_display_read_more_button', true)) : ?>
                            <div class="read-btn">
                                <a href="<?php the_permalink(); ?>" tabindex="5">
                                    <input type="button" value="<?php echo esc_attr(get_theme_mod('kartnic_read_more_label', __('Read more', 'kartnic'))); ?>" name=" " tabindex="0">
                                </a>
                            </div>
                        <?php endif; ?>

                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php esc_html_e( 'No posts found.', 'kartnic' ); ?></p>
            <?php endif; ?>
        </div>

        <!-- Sidebar -->
        <?php get_sidebar(); ?>

    </div>

    <!-- Pagination (if Infinite Scroll is disabled) -->
    <?php if ( ! get_theme_mod('kartnic_use_infinite_scroll', false) ) : ?>
        <div class="pagination">
            <?php
            the_posts_pagination( array(
                'mid_size'  => 0,
                'end_size'  => 1,
                'prev_text' => __( '← Previous', 'kartnic' ),
                'next_text' => __( 'Next →', 'kartnic' ),
            ) );
            ?>
        </div>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
