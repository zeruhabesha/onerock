<?php
/**
 * Template Name: Portfolio / Our Work
 * 
 * @package OneRock
 */

get_header();
?>

<!-- Page Header -->
<section class="page-hero portfolio-hero">
    <div class="page-hero-container">
        <div class="page-hero-content animate fade-in">
            <h6 class="page-label">Our Work</h6>
            <h1 class="page-title reveal-text">Shopify Stores Built for Growth</h1>
            <p class="page-subtitle">
                We've helped dozens of brands launch, optimize, and scale their Shopify stores. 
                From startups to established businesses, see how we turn vision into results.
            </p>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="portfolio-showcase-section">
    <div class="portfolio-showcase-container">
        
        <!-- Filter Tabs (Optional) -->
        <div class="portfolio-filters animate slide-up">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="ecommerce">Ecommerce</button>
            <button class="filter-btn" data-filter="redesign">Redesigns</button>
            <button class="filter-btn" data-filter="migration">Migrations</button>
        </div>

        <!-- Portfolio Grid -->
        <div class="portfolio-grid stagger-container">
            <?php
            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => -1,
            );
            $portfolio_query = new WP_Query($args);
            
            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                    // Get Categories for Filter
                    $terms = get_the_terms(get_the_ID(), 'portfolio_category');
                    $filter_classes = '';
                    $tags_html = '';
                    if ($terms && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                            $filter_classes .= ' ' . $term->slug;
                            $tags_html .= '<span class="tag">' . esc_html($term->name) . '</span>';
                        }
                    }
                    
                    // Get Meta Data
                    $badge = get_post_meta(get_the_ID(), '_portfolio_badge', true);
                    $stat1_val = get_post_meta(get_the_ID(), '_portfolio_stat1_val', true);
                    $stat1_label = get_post_meta(get_the_ID(), '_portfolio_stat1_label', true);
                    $stat2_val = get_post_meta(get_the_ID(), '_portfolio_stat2_val', true);
                    $stat2_label = get_post_meta(get_the_ID(), '_portfolio_stat2_label', true);
            ?>
            
            <!-- Project Item -->
            <article class="portfolio-card animate slide-up <?php echo esc_attr($filter_classes); ?>" data-category="<?php echo esc_attr(trim($filter_classes)); ?>">
                <div class="portfolio-card-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/portfolio-1.jpg" alt="<?php the_title(); ?>" loading="lazy">
                    <?php endif; ?>
                    <div class="portfolio-card-overlay">
                        <a href="<?php the_permalink(); ?>" class="portfolio-view-btn">View Case Study →</a>
                    </div>
                </div>
                <div class="portfolio-card-content">
                    <div class="portfolio-card-tags">
                        <?php if ($badge) echo '<span class="tag" style="background:var(--onerock-orange); color:#fff; border:none;">' . esc_html($badge) . '</span>'; ?>
                        <?php echo $tags_html; ?>
                    </div>
                    <h3 class="portfolio-card-title"><?php the_title(); ?></h3>
                    <p class="portfolio-card-description">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                    
                    <?php if ($stat1_val || $stat2_val) : ?>
                    <div class="portfolio-card-stats">
                        <?php if ($stat1_val) : ?>
                        <div class="stat">
                            <span class="stat-value"><?php echo esc_html($stat1_val); ?></span>
                            <span class="stat-label"><?php echo esc_html($stat1_label); ?></span>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($stat2_val) : ?>
                        <div class="stat">
                            <span class="stat-value"><?php echo esc_html($stat2_val); ?></span>
                            <span class="stat-label"><?php echo esc_html($stat2_label); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </article>

            <?php 
                endwhile;
                wp_reset_postdata();
            else : 
            ?>
            
            <!-- STATIC FALLBACK (If no projects exist) -->
            <!-- Project 1 -->
            <article class="portfolio-card animate slide-up" data-category="ecommerce">
                <div class="portfolio-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/portfolio-1.jpg" alt="Project 1" loading="lazy">
                    <div class="portfolio-card-overlay">
                        <a href="#" class="portfolio-view-btn">View Case Study →</a>
                    </div>
                </div>
                <div class="portfolio-card-content">
                    <div class="portfolio-card-tags">
                        <span class="tag">Shopify Plus</span>
                        <span class="tag">Redesign</span>
                    </div>
                    <h3 class="portfolio-card-title">Premium Fashion Brand</h3>
                    <p class="portfolio-card-description">
                        Complete store redesign with custom theme development, resulting in 150% increase in conversions.
                    </p>
                    <div class="portfolio-card-stats">
                        <div class="stat">
                            <span class="stat-value">+150%</span>
                            <span class="stat-label">Conversion Rate</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">$2M+</span>
                            <span class="stat-label">Annual Revenue</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Project 2 -->
            <article class="portfolio-card animate slide-up" data-category="migration">
                <div class="portfolio-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/portfolio-2.jpg" alt="Project 2" loading="lazy">
                    <div class="portfolio-card-overlay">
                        <a href="#" class="portfolio-view-btn">View Case Study →</a>
                    </div>
                </div>
                <div class="portfolio-card-content">
                    <div class="portfolio-card-tags">
                        <span class="tag">Migration</span>
                        <span class="tag">WooCommerce</span>
                    </div>
                    <h3 class="portfolio-card-title">Health & Wellness Store</h3>
                    <p class="portfolio-card-description">
                        Seamless migration from WooCommerce to Shopify Plus with zero downtime and improved performance.
                    </p>
                    <div class="portfolio-card-stats">
                        <div class="stat">
                            <span class="stat-value">50%</span>
                            <span class="stat-label">Faster Load Time</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">Zero</span>
                            <span class="stat-label">Downtime</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Project 3 -->
            <article class="portfolio-card animate slide-up" data-category="ecommerce">
                <div class="portfolio-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/portfolio-3.jpg" alt="Project 3" loading="lazy">
                    <div class="portfolio-card-overlay">
                        <a href="#" class="portfolio-view-btn">View Case Study →</a>
                    </div>
                </div>
                <div class="portfolio-card-content">
                    <div class="portfolio-card-tags">
                        <span class="tag">Shopify</span>
                        <span class="tag">Launch</span>
                    </div>
                    <h3 class="portfolio-card-title">Artisan Coffee Brand</h3>
                    <p class="portfolio-card-description">
                        Brand new Shopify store launch with subscription integration and custom product builder.
                    </p>
                    <div class="portfolio-card-stats">
                        <div class="stat">
                            <span class="stat-value">$500K</span>
                            <span class="stat-label">First Year Revenue</span>
                        </div>
                        <div class="stat">
                            <span class="stat-value">30%</span>
                            <span class="stat-label">Subscription Rate</span>
                        </div>
                    </div>
                </div>
            </article>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="portfolio-cta-section">
    <div class="portfolio-cta-container">
        <div class="portfolio-cta-content animate fade-in">
            <h2 class="portfolio-cta-title">Ready to Start Your Project?</h2>
            <p class="portfolio-cta-text">
                Let's build something amazing together. Book a free consultation to discuss your Shopify goals.
            </p>
            <div class="portfolio-cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Get Started</a>
                <a href="#" class="btn btn-secondary">View Services</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
