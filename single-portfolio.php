<?php
/**
 * Template Name: Single Portfolio
 * Template Post Type: portfolio
 */
get_header();

$badge = get_post_meta(get_the_ID(), '_portfolio_badge', true);
$stat1_val = get_post_meta(get_the_ID(), '_portfolio_stat1_val', true);
$stat1_label = get_post_meta(get_the_ID(), '_portfolio_stat1_label', true);
$stat2_val = get_post_meta(get_the_ID(), '_portfolio_stat2_val', true);
$stat2_label = get_post_meta(get_the_ID(), '_portfolio_stat2_label', true);
?>

<div class="page-hero">
    <div class="hero-content animate fade-in">
        <?php if ($badge) : ?>
            <span class="hero-subtitle"><?php echo esc_html($badge); ?></span>
        <?php endif; ?>
        <h1 class="hero-title"><?php the_title(); ?></h1>
    </div>
</div>

<div class="portfolio-single-container" style="max-width: 1200px; margin: 0 auto; padding: 60px 20px;">
    <?php while (have_posts()) : the_post(); ?>
        
        <!-- Featured Image -->
        <?php if (has_post_thumbnail()) : ?>
        <div class="portfolio-featured-image animate slide-up" style="margin-bottom: 60px; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.2);">
            <?php the_post_thumbnail('full', array('style' => 'width: 100%; height: auto; display: block;')); ?>
        </div>
        <?php endif; ?>

        <div class="portfolio-content-grid" style="display: grid; grid-template-columns: 2fr 1fr; gap: 60px;">
            
            <!-- Main Content -->
            <div class="portfolio-main-content animate slide-up delay-100">
                <style>
                    .portfolio-main-content h2 { font-size: 2rem; margin-bottom: 1.5rem; color: #fff; }
                    .portfolio-main-content p { font-size: 1.1rem; line-height: 1.8; color: var(--text-secondary); margin-bottom: 1.5rem; }
                    .portfolio-main-content ul { padding-left: 20px; margin-bottom: 1.5rem; color: var(--text-secondary); }
                    .portfolio-main-content li { margin-bottom: 0.5rem; }
                </style>
                <?php the_content(); ?>
            </div>

            <!-- Sidebar Stats -->
            <div class="portfolio-sidebar animate slide-up delay-200">
                <div class="portfolio-sidebar-card" style="background: var(--surface-soft); padding: 30px; border-radius: 16px; border: 1px solid var(--border-color); position: sticky; top: 100px;">
                    <h3 style="font-size: 1.5rem; margin-bottom: 20px; border-bottom: 1px solid var(--border-color); padding-bottom: 15px;">Project Impact</h3>
                    
                    <?php if ($stat1_val) : ?>
                    <div class="sidebar-stat" style="margin-bottom: 20px;">
                        <div style="font-size: 2.5rem; font-weight: 800; color: var(--onerock-orange);"><?php echo esc_html($stat1_val); ?></div>
                        <div style="font-size: 1rem; color: var(--text-secondary);"><?php echo esc_html($stat1_label); ?></div>
                    </div>
                    <?php endif; ?>

                    <?php if ($stat2_val) : ?>
                    <div class="sidebar-stat" style="margin-bottom: 30px;">
                        <div style="font-size: 2.5rem; font-weight: 800; color: var(--onerock-orange);"><?php echo esc_html($stat2_val); ?></div>
                        <div style="font-size: 1rem; color: var(--text-secondary);"><?php echo esc_html($stat2_label); ?></div>
                    </div>
                    <?php endif; ?>

                    <div class="sidebar-meta" style="margin-top: 30px; padding-top: 20px; border-top: 1px solid var(--border-color);">
                        <p style="color: var(--text-secondary); margin-bottom: 5px;"><strong>Date:</strong> <?php echo get_the_date('F Y'); ?></p>
                        
                        <?php 
                        $terms = get_the_terms(get_the_ID(), 'portfolio_category');
                        if ($terms && !is_wp_error($terms)) : 
                            $cat_names = wp_list_pluck($terms, 'name');
                        ?>
                        <p style="color: var(--text-secondary);"><strong>Services:</strong> <?php echo implode(', ', $cat_names); ?></p>
                        <?php endif; ?>
                    </div>
                    
                    <a href="<?php echo esc_url(get_post_type_archive_link('portfolio') ?: home_url('/portfolio')); ?>" class="btn-secondary" style="margin-top: 30px; width: 100%; text-align: center; display: block;">&larr; Back to Portfolio</a>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
</div>

<!-- Responsive Styles -->
<style>
    @media (max-width: 900px) {
        .portfolio-content-grid { grid-template-columns: 1fr; }
        .portfolio-sidebar-card { position: static; margin-bottom: 40px; }
        .portfolio-featured-image { margin-bottom: 40px; }
    }
</style>

<?php get_footer(); ?>
