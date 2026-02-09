<?php
/**
 * The template for displaying all pages
 * 
 * @package OneRock
 */

get_header();
?>

<!-- Generic Page Header -->
<header class="page-hero">
    <div class="page-hero-container">
        <div class="page-hero-content animate fade-in">
            <h1 class="page-title reveal-text shimmer-text"><?php the_title(); ?></h1>
        </div>
    </div>
</header>

<!-- Page Content -->
<main class="page-content">
    <div class="container">
        <?php
        while (have_posts()) :
            the_post();
            $raw_content = get_the_content();
            $rendered_content = apply_filters('the_content', $raw_content);
            $shortcode_stripped = trim(wp_strip_all_tags(strip_shortcodes($raw_content)));

            if ('' === $shortcode_stripped && '' !== trim($raw_content)) :
                ?>
                <div class="page-content-empty">
                    <h2><?php esc_html_e('This page is being refreshed', 'onerock'); ?></h2>
                    <p><?php esc_html_e('The content is temporarily unavailable while we update the layout. Please check back shortly or reach out and we will help right away.', 'onerock'); ?></p>
                    <a class="btn btn-primary" href="<?php echo esc_url(home_url('/contact')); ?>">
                        <?php esc_html_e('Contact Us', 'onerock'); ?>
                    </a>
                </div>
                <?php
            else :
                echo $rendered_content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            endif;
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>
