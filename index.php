<?php
/**
 * The main template file
 * 
 * @package OneRock
 */

get_header();
?>

<!-- Blog Header -->
<section class="page-hero blog-hero">
    <div class="page-hero-container">
        <div class="page-hero-content animate fade-in">
            <h6 class="page-label">
                <?php 
                if (is_home() && !is_front_page()) {
                    echo 'Our Blog';
                } elseif (is_category()) {
                    echo 'Category';
                } elseif (is_tag()) {
                    echo 'Tag';
                } elseif (is_search()) {
                    echo 'Search Results';
                } else {
                    echo 'Insights';
                }
                ?>
            </h6>
            <h1 class="page-title reveal-text">
                <?php 
                if (is_home() && !is_front_page()) {
                    single_post_title();
                } elseif (is_archive()) {
                    the_archive_title();
                } elseif (is_search()) {
                    printf(__('Results for: %s', 'onerock'), '<span>' . get_search_query() . '</span>');
                } else {
                    _e('Insights for Shopify Success', 'onerock');
                }
                ?>
            </h1>
            <p class="page-subtitle">
                <?php 
                if (is_archive()) {
                    the_archive_description();
                } else {
                    _e('Practical advice, growth strategies, and the latest Shopify updates for ambitious brands.', 'onerock');
                }
                ?>
            </p>
        </div>
    </div>
</section>

<!-- Blog Feed -->
<section class="blog-feed-section">
    <div class="blog-feed-container">
        <?php if (have_posts()) : ?>
            <div class="blog-grid stagger-container">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card animate slide-up'); ?>>
                        <div class="blog-card-image-wrapper">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large', array('class' => 'blog-card-image')); ?>
                                <?php else : ?>
                                    <div class="blog-card-placeholder">
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M40 12H8C5.8 12 4 13.8 4 16V40C4 42.2 5.8 44 8 44H40C42.2 44 44 42.2 44 40V16C44 13.8 42.2 12 40 12Z"/>
                                            <path d="M4 34L14 24L22 32L30 24L44 38"/>
                                            <circle cx="16" cy="22" r="4"/>
                                            <path d="M12 4H36"/>
                                            <path d="M16 8H32"/>
                                        </svg>
                                    </div>
                                <?php endif; ?>
                            </a>
                            <div class="blog-card-category">
                                <?php 
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    echo esc_html( $categories[0]->name );   
                                }
                                ?>
                            </div>
                        </div>
                        
                        <div class="blog-card-content">
                            <div class="blog-meta">
                                <span class="blog-date"><?php echo get_the_date(); ?></span>
                                <span class="blog-read-time">5 min read</span>
                            </div>
                            <h2 class="blog-card-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="blog-card-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="blog-read-more">Read Article <span class="arrow">→</span></a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <!-- Pagination -->
            <div class="blog-pagination">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('<span class="nav-icon">←</span> Previous', 'onerock'),
                    'next_text' => __('Next <span class="nav-icon">→</span>', 'onerock'),
                ));
                ?>
            </div>
            
        <?php else : ?>
            <div class="no-posts-found">
                <h3><?php _e('Nothing Found', 'onerock'); ?></h3>
                <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'onerock'); ?></p>
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Newsletter Section -->
<section class="newsletter-section">
    <div class="newsletter-container">
        <div class="newsletter-content animate fade-in">
            <h2>Get Shopify Tips in Your Inbox</h2>
            <p>Join 2,000+ brand owners who receive our weekly Shopify growth newsletter.</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
