<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script>document.documentElement.className += ' js';</script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Navigation -->
<nav class="main-nav" id="mainNav">
    <div class="nav-container">
        <?php if (has_custom_logo()) : ?>
            <div class="nav-logo">
                <?php the_custom_logo(); ?>
            </div>
        <?php else : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
                <?php bloginfo('name'); ?>
            </a>
        <?php endif; ?>
        
        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>
        
        <div class="nav-menu-wrapper">
            <ul class="nav-links">
                <li<?php echo (is_front_page()) ? ' class="active"' : ''; ?>><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li<?php echo (is_page('portfolio') || is_singular('portfolio')) ? ' class="active"' : ''; ?>><a href="<?php echo esc_url(home_url('/portfolio')); ?>">Our Work</a></li>
                <li<?php echo (is_page('services')) ? ' class="active"' : ''; ?>><a href="<?php echo esc_url(home_url('/services')); ?>">Services</a></li>
                <li<?php echo (is_page('about') || is_page('about-us') || is_page('about-3') || is_page('about-4')) ? ' class="active"' : ''; ?>><a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a></li>
                <li<?php echo (is_home() || (is_archive() && !is_post_type_archive('portfolio')) || (is_single() && !is_singular('portfolio'))) ? ' class="active"' : ''; ?>><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                <li<?php echo (is_page('contact') || is_page('contact-4')) ? ' class="active"' : ''; ?>><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
            </ul>
            
            <div class="nav-actions">
                <button class="theme-toggle-btn" id="themeToggle" aria-label="Toggle dark mode">
                    <span class="mode-icon light-icon">☀️</span>
                    <span class="mode-icon dark-icon">🌙</span>
                </button>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary btn-small nav-cta">Get Started</a>
            </div>
        </div>
    </div>
</nav>
