<?php
/**
 * Template Name: About Us
 * 
 * @package OneRock
 */

get_header();
?>

<!-- Page Header -->
<section class="page-hero about-hero">
    <div class="page-hero-container">
        <div class="page-hero-content animate fade-in">
            <h6 class="page-label">About OneRock Digital</h6>
            <h1 class="page-title reveal-text">We Build Shopify Stores That Drive Results</h1>
            <p class="page-subtitle">
                A remote-first Shopify agency helping small and medium businesses launch, optimize, and scale with strategy, precision, and purpose.
            </p>
        </div>
    </div>
</section>

<!-- Company Story -->
<section class="about-story-section">
    <div class="about-story-container">
        <div class="about-story-grid">
            <div class="about-story-content animate slide-up">
                <h2 class="about-story-title">Our Story</h2>
                <div class="about-story-text">
                    <p>
                        OneRock Digital was founded with a simple mission: to help small and medium-sized businesses succeed on Shopify without the enterprise price tag.
                    </p>
                    <p>
                        We saw too many talented entrepreneurs struggling with overpriced agencies, cookie-cutter solutions, and developers who didn't understand ecommerce. So we built something different.
                    </p>
                    <p>
                        Today, we're a remote-first team of Shopify experts, designers, and growth strategists who've helped dozens of brands launch, optimize, and scale their stores. From startups to established businesses, we bring the same level of care, precision, and results-driven thinking to every project.
                    </p>
                    <p>
                        We're not just building websites—we're building businesses.
                    </p>
                </div>
            </div>
            <div class="about-story-image animate scale-in delay-200">
                <div class="about-image-wrapper">
                    <?php 
                    $about_img = get_theme_mod('about_image', get_template_directory_uri() . '/assets/about-team.jpg');
                    ?>
                    <img src="<?php echo esc_url($about_img); ?>" alt="OneRock Digital Team" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Values -->
<section class="about-values-section">
    <div class="about-values-container">
        <div class="about-values-header animate slide-up">
            <h2 class="about-values-title">What Drives Us</h2>
            <p class="about-values-subtitle">
                Our core values guide every project, partnership, and decision we make.
            </p>
        </div>

        <div class="about-values-grid stagger-container">
            <!-- Value 1 -->
            <div class="value-card animate slide-up">
                <div class="value-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="20" r="18" stroke="currentColor" stroke-width="2"/>
                        <path d="M12 20L18 26L28 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="value-title">Results-Driven</h3>
                <p class="value-description">
                    We measure success by your growth. Every design decision, every line of code, every strategy is built to drive conversions and revenue.
                </p>
            </div>

            <!-- Value 2 -->
            <div class="value-card animate slide-up">
                <div class="value-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <rect x="8" y="8" width="24" height="24" rx="4" stroke="currentColor" stroke-width="2"/>
                        <path d="M16 20L20 24L28 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="value-title">Transparent & Honest</h3>
                <p class="value-description">
                    No hidden fees, no vague timelines, no surprises. We communicate clearly, set realistic expectations, and deliver on our promises.
                </p>
            </div>

            <!-- Value 3 -->
            <div class="value-card animate slide-up">
                <div class="value-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <path d="M20 8L24 16H32L26 22L28 30L20 25L12 30L14 22L8 16H16L20 8Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="value-title">Quality Over Quantity</h3>
                <p class="value-description">
                    We take on fewer projects to ensure every client gets our full attention, expertise, and dedication to excellence.
                </p>
            </div>

            <!-- Value 4 -->
            <div class="value-card animate slide-up">
                <div class="value-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="15" r="6" stroke="currentColor" stroke-width="2"/>
                        <path d="M10 32C10 26 14 22 20 22C26 22 30 26 30 32" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="value-title">Partnership Mindset</h3>
                <p class="value-description">
                    Your success is our success. We're not just a vendor—we're your long-term Shopify partner, invested in your growth.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="about-stats-section">
    <div class="about-stats-container">
        <div class="about-stats-grid">
            <div class="about-stat-item animate fade-in">
                <h3 class="about-stat-value shimmer-text">50+</h3>
                <p class="about-stat-label">Stores Launched</p>
            </div>
            <div class="about-stat-item animate fade-in delay-100">
                <h3 class="about-stat-value shimmer-text">$10M+</h3>
                <p class="about-stat-label">Revenue Generated</p>
            </div>
            <div class="about-stat-item animate fade-in delay-200">
                <h3 class="about-stat-value shimmer-text">15+</h3>
                <p class="about-stat-label">Countries Served</p>
            </div>
            <div class="about-stat-item animate fade-in delay-300">
                <h3 class="about-stat-value shimmer-text">98%</h3>
                <p class="about-stat-label">Client Satisfaction</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="about-why-section">
    <div class="about-why-container">
        <div class="about-why-header animate slide-up">
            <h2 class="about-why-title">Why Work With Us?</h2>
        </div>

        <div class="about-why-grid">
            <!-- Reason 1 -->
            <div class="why-item animate slide-up">
                <div class="why-number">01</div>
                <h3 class="why-title">Shopify-Focused Expertise</h3>
                <p class="why-description">
                    We live and breathe Shopify. No generic platforms, no distractions—just deep expertise in the ecosystem that powers your business.
                </p>
            </div>

            <!-- Reason 2 -->
            <div class="why-item animate slide-up delay-100">
                <div class="why-number">02</div>
                <h3 class="why-title">Affordable Excellence</h3>
                <p class="why-description">
                    Enterprise-level quality without the enterprise price tag. We believe great Shopify work should be accessible to growing businesses.
                </p>
            </div>

            <!-- Reason 3 -->
            <div class="why-item animate slide-up delay-200">
                <div class="why-number">03</div>
                <h3 class="why-title">Remote-First Flexibility</h3>
                <p class="why-description">
                    Work with us from anywhere. Our distributed team means faster turnarounds, flexible communication, and no geographic limitations.
                </p>
            </div>

            <!-- Reason 4 -->
            <div class="why-item animate slide-up delay-300">
                <div class="why-number">04</div>
                <h3 class="why-title">Long-Term Partnership</h3>
                <p class="why-description">
                    We're here for the journey. From launch to scale, we provide ongoing support, optimization, and strategic guidance as you grow.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="about-cta-section">
    <div class="about-cta-container">
        <div class="about-cta-content animate fade-in">
            <h2 class="about-cta-title">Let's Build Something Great Together</h2>
            <p class="about-cta-text">
                Ready to take your Shopify store to the next level? Book a free consultation and let's discuss your goals.
            </p>
            <div class="about-cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Get Started</a>
                <a href="<?php echo esc_url(home_url('/our-work')); ?>" class="btn btn-secondary">View Our Work</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
