<?php
/**
 * Template Name: Home Page
 * 
 * @package OneRock
 */

get_header();
?>

<!-- Hero Section -->
<section class="premium-hero">
    <!-- Decorative Background Blobs -->
    <div class="hero-blob blob-1"></div>
    <div class="hero-blob blob-2"></div>
    <div class="hero-blob blob-3"></div>

    <div class="hero-container">
        <!-- Left Column: Content -->
        <div class="hero-content">
            <div class="hero-text-wrap">
                <div class="hero-label-wrap animate fade-in">
                    <span class="hero-label-pill">Shopify & Shopify Plus Agency</span>
                </div>
                
                <h1 class="hero-headline reveal-text">
                    <span class="accent-color">Shopify & Shopify Plus</span> Agency for <br>
                    Small & <span class="accent-color">Medium</span> Businesses
                </h1>
                
                <p class="hero-description animate slide-up delay-200">
                    OneRock Digital helps small and growing brands build beautiful Shopify stores, increase sales, and scale sustainably. From store setup, design, and development to marketing and support, we’re your all-in-one Shopify growth partner.
                </p>
                
                <div class="hero-buttons animate slide-up delay-300">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-hero-primary magnetic-wrap">
                        <span class="btn-text">Book a Free Consultation</span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-hero-outline">
                        View Our Work
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Right Column: Hero Image (Hidden by default to match clean layout if no image) -->
        <div class="hero-visual animate scale-in delay-400">
            <?php
            $hero_video_id = get_theme_mod('hero_video');
            $hero_video_url = $hero_video_id ? wp_get_attachment_url($hero_video_id) : '';
            $hero_video_poster_id = get_theme_mod('hero_video_poster');
            $hero_video_poster_url = $hero_video_poster_id ? wp_get_attachment_url($hero_video_poster_id) : '';
            $hero_image = get_theme_mod('hero_image');
            ?>

            <?php if ($hero_video_url) : ?>
                <div class="hero-video-wrapper">
                    <video class="hero-video" autoplay muted loop playsinline poster="<?php echo esc_url($hero_video_poster_url ?: $hero_image); ?>">
                        <source src="<?php echo esc_url($hero_video_url); ?>" type="video/mp4">
                        <?php esc_html_e('Your browser does not support the video tag.', 'onerock'); ?>
                    </video>
                </div>
            <?php elseif ($hero_image) : ?>
                <div class="hero-image-wrapper">
                    <img src="<?php echo esc_url($hero_image); ?>" alt="<?php bloginfo('name'); ?> - Shopify Solutions" class="hero-image">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<section class="stats-bar animate slide-up">
    <div class="stats-container">
        <div class="stat-item">
            <h2 class="shimmer-text">50+</h2>
            <p>Stores Launched</p>
        </div>
        <div class="stat-item">
            <h2 class="shimmer-text">15+</h2>
            <p>Countries Served</p>
        </div>
        <div class="stat-item">
            <h2 class="shimmer-text">24/7</h2>
            <p>Expert Support</p>
        </div>
        <div class="stat-item">
            <h2 class="shimmer-text">100%</h2>
            <p>Shopify Focused</p>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="services-container">
        <!-- Section Heading -->
        <div class="services-header animate slide-up">
            <h2 class="services-headline reveal-text">Everything Your Business Needs to Grow on Shopify & Shopify Plus</h2>
            <p class="services-intro">
                With a remote-first approach, we specialize in helping small and medium-sized businesses launch, optimize, and scale on Shopify. Whether you're just starting or refining your online presence, we provide the tools, strategy, and ongoing support to help you succeed.
            </p>
        </div>

        <!-- Accordion (Rich Style) -->
        <div class="services-accordion stagger-container animate slide-up">
            <!-- Category 1: Design & Development -->
            <div class="accordion-item glass-texture">
                <button class="accordion-header">
                    <span><span class="category-icon"></span>Design & Development</span>
                    <span class="icon">+</span>
                </button>
                <div class="accordion-content">
                    <div class="sub-service-grid">
                        <div class="sub-service">
                            <h4>Shopify & Plus Development</h4>
                            <p>Expert development with precision and performance. From custom themes to Liquid adjustments, we build it right.</p>
                        </div>
                        <div class="sub-service">
                            <h4>App Integration & Automation</h4>
                            <p>Connect your tools and automate workflows. We turn disconnected systems into a seamless Shopify ecosystem.</p>
                        </div>
                        <div class="sub-service">
                            <h4>Store Setup & Configuration</h4>
                            <p>Get launched the right way—visually stunning, conversion-ready, and aligned with your brand.</p>
                        </div>
                        <div class="sub-service">
                            <h4>UI/UX Design</h4>
                            <p>Conversion-first interfaces that guide shoppers, build trust, and feel beautiful to use.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category 2: Shopify Marketing & Growth -->
            <div class="accordion-item glass-texture">
                <button class="accordion-header">
                    <span><span class="category-icon"></span>Shopify Marketing & Growth</span>
                    <span class="icon">+</span>
                </button>
                <div class="accordion-content">
                    <div class="sub-service-grid">
                        <div class="sub-service">
                            <h4>SEO & GEO</h4>
                            <p>Drive organic traffic and improve visibility in search and AI engines like ChatGPT and Gemini.</p>
                        </div>
                        <div class="sub-service">
                            <h4>CRO (Optimization)</h4>
                            <p>Turn visitors into customers with data-driven optimization of every crucial touchpoint.</p>
                        </div>
                        <div class="sub-service">
                            <h4>Email Marketing</h4>
                            <p>Drive engagement and nurture leads with personalized communication that boosts lifetime value.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category 3: Strategy & Consulting -->
            <div class="accordion-item glass-texture">
                <button class="accordion-header">
                    <span><span class="category-icon"></span>Strategy & Consulting</span>
                    <span class="icon">+</span>
                </button>
                <div class="accordion-content">
                    <div class="sub-service-grid">
                        <div class="sub-service">
                            <h4>Digital Business Analysis</h4>
                            <p>Deep dive into your funnels, pricing, and performance to identify hidden growth opportunities.</p>
                        </div>
                        <div class="sub-service">
                            <h4>Shopify Plus Migration</h4>
                            <p>Expert support for the move to Plus, or from other platforms like Magento and WooCommerce.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category 4: VA & Support Services -->
            <div class="accordion-item glass-texture">
                <button class="accordion-header">
                    <span><span class="category-icon"></span>VA & Support Services</span>
                    <span class="icon">+</span>
                </button>
                <div class="accordion-content">
                    <div class="sub-service-grid">
                        <div class="sub-service">
                            <h4>Daily Store Ops</h4>
                            <p>Product uploads, collection management, and general storefront maintenance handled daily.</p>
                        </div>
                        <div class="sub-service">
                            <h4>Customer Support</h4>
                            <p>Providing high-quality support to your shoppers, keeping the experience smooth and positive.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Shopify Section -->
<section class="why-shopify-section">
    <div class="why-shopify-container">
        <h2 class="why-shopify-headline reveal-text">Why Shopify?</h2>
        <p class="why-shopify-text">
            With innovation at its core, Shopify powers millions of brands worldwide with tools built for growth, simplicity, and scale. At OneRock Digital, we help small and medium businesses unlock Shopify’s full potential, from beautiful stores to results-driven performance.
        </p>
        <div class="why-shopify-footer">
            <a href="#" class="btn btn-secondary">Read More</a>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="portfolio-section">
    <div class="portfolio-container">
        <!-- Header -->
        <div class="portfolio-header animate slide-up">
            <h2 class="portfolio-headline reveal-text">Your success fuels ours.</h2>
            <p class="portfolio-subtext">
                See how we’ve helped businesses launch and grow their Shopify stores with strategy, precision, and purpose, all while staying on budget.
            </p>
        </div>

        <!-- Grid -->
        <div class="portfolio-grid stagger-container">
            <?php
            $portfolio_query = new WP_Query(array(
                'post_type' => 'portfolio',
                'posts_per_page' => 3
            ));
            
            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                    $badge = get_post_meta(get_the_ID(), '_portfolio_badge', true);
            ?>
                <div class="project-card glass-card animate slide-up">
                    <div class="card-image-box">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/portfolio-1.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="card-content">
                        <?php if ($badge) : ?>
                            <span class="card-badge" style="display:inline-block; font-size:12px; color:var(--onerock-orange); margin-bottom:8px; text-transform:uppercase; letter-spacing:1px; font-weight:700;"><?php echo esc_html($badge); ?></span>
                        <?php endif; ?>
                        <h4 class="card-title">
                            <a href="<?php the_permalink(); ?>" style="color:inherit; text-decoration:none;"><?php the_title(); ?></a>
                        </h4>
                        <div class="card-text"><?php the_excerpt(); ?></div>
                    </div>
                </div>
            <?php 
                endwhile;
                wp_reset_postdata();
            else : 
            ?>
            <div class="project-card glass-card animate slide-up">
                <div class="card-image-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/portfolio-1.jpg" alt="Bloom & Thread">
                </div>
                <div class="card-content">
                    <h4 class="card-title">Bloom & Thread – Shopify Store Redesign</h4>
                    <p class="card-text">Conversion-focused redesign and performance optimization for a fast-growing fashion brand.</p>
                </div>
            </div>
            <div class="project-card glass-card animate slide-up">
                <div class="card-image-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/portfolio-2.jpg" alt="Tech Hub">
                </div>
                <div class="card-content">
                    <h4 class="card-title">Tech Hub – Headless Shopify Build</h4>
                    <p class="card-text">A high-performance custom storefront built with Shopify and Hydrogen for maximum speed.</p>
                </div>
            </div>
            <div class="project-card glass-card animate slide-up">
                <div class="card-image-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/portfolio-3.jpg" alt="Lumina Glow">
                </div>
                <div class="card-content">
                    <h4 class="card-title">Lumina Glow – Marketing Strategy</h4>
                    <p class="card-text">Comprehensive SEO and paid media campaign that doubled annual revenue for a skincare line.</p>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <!-- CTA -->
        <div class="portfolio-footer">
            <a href="#" class="btn btn-secondary">View Case Studies</a>
        </div>
    </div>
</section>

<!-- Credibility Section -->
<section class="credibility-section">
    <div class="credibility-container">
        <!-- Left Column: Story (60%) -->
        <div class="credibility-story animate slide-up">
            <h2 class="credibility-headline">Shopify & Shopify Plus Agency affordably driving results based on data and strategy</h2>
            <p class="credibility-text">
                We know what it’s like to grow from the ground up. That’s why we created OneRock Digital, to make Shopify success achievable for small and medium-sized brands without the enterprise-level complexity.
            </p>
            <p class="credibility-text">
                Our global team, powered by a core team in Addis Ababa, Ethiopia, allows us to deliver high-quality, affordable solutions without compromising performance or creativity. Our timezone advantage means your store gets 24/7 attention and support, ensuring smooth operations and fast response when it matters most.
            </p>
        </div>

        <!-- Right Column: Highlights Card (40%) -->
        <div class="credibility-highlights animate slide-up delay-100">
            <div class="highlight-card glass-card">
                <h4 class="card-title">What you get with OneRock</h4>
                <ul class="icon-list">
                    <li><span class="icon">✔</span> Affordable, scalable solutions tailored to SMBs</li>
                    <li><span class="icon">✔</span> Shopify Plus experts dedicated to long-term growth</li>
                    <li><span class="icon">✔</span> Transparent communication and clear milestones</li>
                    <li><span class="icon">✔</span> Flexible plans that grow with your business</li>
                    <li><span class="icon">✔</span> Proven results across multiple brand niches</li>
                </ul>
                <div class="card-cta">
                    <a href="#" class="btn btn-primary">Let’s Build Your Store Together</a>
                </div>
                <div class="trust-line">
                    Shopify • Shopify Plus • Klaviyo • Yotpo • Tidio • Recharge
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Marquee -->
<section class="partners-section">
    <div class="partners-container">
        <h4 class="partners-title">Our Technology & Growth Partners</h4>
        <p class="partners-subtitle">Trusted by technology and growth partners worldwide</p>
        <div class="partners-marquee-container">
            <div class="partners-marquee">
                <!-- Static Partners -->
                <div class="partner-logo"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Shopify_Logo.png" alt="Shopify"></div>
                <div class="partner-logo"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Shopify_Logo.png" alt="Shopify Plus"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/klaviyo-1.svg" alt="Klaviyo"></div>
                <div class="partner-logo"><img src="https://logowik.com/yotpo-vector-logo-11857.html" alt="Yotpo"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/judgeme.svg" alt="Judge.me"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/tidio.svg" alt="Tidio"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/recharge.svg" alt="Recharge"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/nosto-1.svg" alt="Nosto"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/rebuy.svg" alt="Rebuy"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/shopify-logo.svg" alt="SEOAnt"></div>
                <!-- Duplicated for seamless loop -->
                <div class="partner-logo"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Shopify_Logo.png" alt="Shopify"></div>
                <div class="partner-logo"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Shopify_Logo.png" alt="Shopify Plus"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/klaviyo-1.svg" alt="Klaviyo"></div>
                <div class="partner-logo"><img src="https://static.yotpo.com/wp-content/themes/yotpo/assets/images/yotpo-logo.svg" alt="Yotpo"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/judgeme.svg" alt="Judge.me"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/tidio.svg" alt="Tidio"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/recharge.svg" alt="Recharge"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/nosto-1.svg" alt="Nosto"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/rebuy.svg" alt="Rebuy"></div>
                <div class="partner-logo"><img src="https://cdn.worldvectorlogo.com/logos/shopify-logo.svg" alt="SEOAnt"></div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="testimonials-container">
        <h2 class="testimonials-headline reveal-text">What Our Clients Say</h2>

        <div class="testimonials-grid stagger-container">
            <!-- Testimonials -->
            <div class="testimonial-card glass-card">
                <p class="testimonial-quote">
                    "As a small brand, we needed someone who understood our budget and goals. OneRock built a beautiful store and helped us grow faster than we imagined."
                </p>
                <h5 class="client-name">Sarah M.</h5>
                <span class="client-role">Founder, Bloom & Thread</span>
            </div>
            <div class="testimonial-card glass-card">
                <p class="testimonial-quote">
                    "OneRock felt like part of our internal team. Communication was clear, delivery was fast, and the results exceeded our expectations."
                </p>
                <h5 class="client-name">Daniel K.</h5>
                <span class="client-role">Co-Founder, Urban Supply</span>
            </div>
            <div class="testimonial-card glass-card">
                <p class="testimonial-quote">
                    "We finally have a Shopify store that loads fast, looks professional, and actually converts. The support after launch was just as valuable."
                </p>
                <h5 class="client-name">Miriam T.</h5>
                <span class="client-role">Brand Manager, Solé Market</span>
            </div>
        </div>

        <div class="testimonials-footer">
            <a href="#" class="btn btn-primary">Start Your Project</a>
        </div>
    </div>
</section>

<!-- Technology & Growth Partners Section -->
<section class="partners-section">
    <div class="partners-container">
        <div class="partners-header animate slide-up">
            <h2 class="partners-title">Our Technology & Growth Partners</h2>
            <p class="partners-subtitle">Trusted tools and platforms we use to power your success</p>
        </div>
        
        <div class="partners-grid animate fade-in delay-200">
            <?php 
            $partner_names = ['Shopify', 'Shopify Plus', 'Klaviyo', 'Google Analytics', 'Meta', 'Yotpo'];
            for ($i = 1; $i <= 6; $i++) : 
                $logo = get_theme_mod('partner_logo_' . $i);
                $display_name = $partner_names[$i-1];
            ?>
            <div class="partner-logo">
                <?php if ($logo) : ?>
                    <img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr($display_name); ?>" loading="lazy">
                <?php else : ?>
                    <span class="logo-text" style="font-weight: 800; font-size: 1.2rem;"><?php echo esc_html($display_name); ?></span>
                <?php endif; ?>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header animate slide-up">
            <h2 class="section-title reveal-text">Expertise. Transparently Answered.</h2>
            <p class="section-subtitle">Everything you need to know about scaling with OneRock.</p>
        </div>
        
        <div class="faq-grid stagger-container">
            <div class="faq-card animate slide-up">
                <div class="faq-question">
                    <h3>How long does it take to launch a store?</h3>
                    <div class="faq-toggle">
                        <span class="plus"></span>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="answer-inner">
                        <p>For standard setups, it usually takes 2-4 weeks. Complex Shopify Plus migrations can take 8-12 weeks depending on requirements.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-card animate slide-up">
                <div class="faq-question">
                    <h3>Do you work with existing stores?</h3>
                    <div class="faq-toggle">
                        <span class="plus"></span>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="answer-inner">
                        <p>Yes! We specialize in store audits, redesigns, and performance optimization for existing Shopify and Shopify Plus brands.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-card animate slide-up">
                <div class="faq-question">
                    <h3>What is your pricing model?</h3>
                    <div class="faq-toggle">
                        <span class="plus"></span>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="answer-inner">
                        <p>We offer both fixed-price projects for defined scopes and monthly growth retainers for ongoing support and marketing.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-card animate slide-up">
                <div class="faq-question">
                    <h3>Do you provide ongoing support?</h3>
                    <div class="faq-toggle">
                        <span class="plus"></span>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="answer-inner">
                        <p>Absolutely. We offer support packages to ensure your store stays updated, secure, and continuously optimized for conversions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="final-cta-section">
    <div class="final-cta-container animate scale-in">
        <h2 class="final-cta-headline reveal-text">Ready to Grow Your Business on Shopify?</h2>

        <p class="final-cta-subtext">
            Let’s turn your Shopify store into a growth engine.<br><br>
            Our team specializes in building high-performing Shopify and Shopify Plus storefronts. From strategy and design to development, launch, and ongoing support, we help brands grow with confidence. When you’re ready to start, our experts are here to discuss your vision.
        </p>

        <div class="final-cta-buttons">
            <a href="#" class="btn btn-primary btn-large">Book a Free Consultation</a>
            <a href="#" class="btn btn-outline">View Our Services</a>
        </div>

        <div class="final-cta-trust">
            // eCommerce. Shopify. Shopify Plus. Let’s build something exceptional.
        </div>
    </div>
</section>

<?php get_footer(); ?>
