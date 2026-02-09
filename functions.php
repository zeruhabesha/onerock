<?php
/**
 * OneRock Theme Functions
 * 
 * @package OneRock
 * @version 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue styles and scripts
 */
function onerock_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style('onerock-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap',
        array(),
        null
    );
    
    // JavaScript - animations
    if (file_exists(get_template_directory() . '/animations.js')) {
        wp_enqueue_script(
            'onerock-animations',
            get_template_directory_uri() . '/animations.js',
            array(),
            '1.0.0',
            true
        );
    }
    
    // Add theme toggle functionality
    wp_add_inline_script('onerock-animations', "
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.getElementById('themeToggle');
            const body = document.body;
            
            // Check for saved theme preference
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                body.classList.add('dark-mode');
            }
            
            // Toggle theme
            if (themeToggle) {
                themeToggle.addEventListener('click', function() {
                    body.classList.toggle('dark-mode');
                    const isDark = body.classList.contains('dark-mode');
                    localStorage.setItem('theme', isDark ? 'dark' : 'light');
                });
            }
        });
    ");
}
add_action('wp_enqueue_scripts', 'onerock_enqueue_assets');

/**
 * Theme setup
 */
function onerock_theme_support() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Add HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'onerock'),
        'footer'  => __('Footer Menu', 'onerock'),
    ));
    
    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    
    // Add support for wide alignment
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'onerock_theme_support');

/**
 * Register widget areas
 */
function onerock_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'onerock'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'onerock'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'onerock_widgets_init');

/**
 * Customizer settings
 */
function onerock_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Hero Section', 'onerock'),
        'priority' => 30,
    ));
    
    // Hero Label
    $wp_customize->add_setting('hero_label', array(
        'default'           => 'Shopify Experts',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_label', array(
        'label'   => __('Hero Label', 'onerock'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));
    
    // Hero Headline
    $wp_customize->add_setting('hero_headline', array(
        'default'           => 'Build Your Shopify Empire',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_headline', array(
        'label'   => __('Hero Headline', 'onerock'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));
    
    // Hero Description
    $wp_customize->add_setting('hero_description', array(
        'default'           => 'Expert Shopify development and consulting services',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_description', array(
        'label'   => __('Hero Description', 'onerock'),
        'section' => 'hero_section',
        'type'    => 'textarea',
    ));
    
    // Hero Button Text
    $wp_customize->add_setting('hero_btn_text', array(
        'default'           => 'Get Started',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_btn_text', array(
        'label'   => __('Hero Button Text', 'onerock'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));
    
    // Hero Button Link
    $wp_customize->add_setting('hero_btn_link', array(
        'default'           => '#contact',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('hero_btn_link', array(
        'label'   => __('Hero Button Link', 'onerock'),
        'section' => 'hero_section',
        'type'    => 'url',
    ));

    // Hero Image
    $wp_customize->add_setting('hero_image', array(
        'default'           => get_template_directory_uri() . '/hero-bg.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label'    => __('Hero Background Image', 'onerock'),
        'section'  => 'hero_section',
        'settings' => 'hero_image',
    )));

    // About Section
    $wp_customize->add_section('about_section', array(
        'title'    => __('About Us Section', 'onerock'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('about_image', array(
        'default'           => get_template_directory_uri() . '/assets/about-team.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', array(
        'label'    => __('About Us Story Image', 'onerock'),
        'section'  => 'about_section',
        'settings' => 'about_image',
    )));

    // Partner Logos Section
    $wp_customize->add_section('partners_section', array(
        'title'    => __('Partner Logos', 'onerock'),
        'priority' => 50,
    ));

    for ($i = 1; $i <= 6; $i++) {
        $wp_customize->add_setting('partner_logo_' . $i, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partner_logo_' . $i, array(
            'label'    => sprintf(__('Partner Logo %d', 'onerock'), $i),
            'section'  => 'partners_section',
            'settings' => 'partner_logo_' . $i,
        )));
    }
}
add_action('customize_register', 'onerock_customize_register');

/**
 * Add body classes
 */
function onerock_body_classes($classes) {
    // Add class for homepage
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    
    return $classes;
}
add_filter('body_class', 'onerock_body_classes');

/**
 * Register page templates
 */
function onerock_add_page_templates($templates) {
    $templates['page-templates/portfolio.php'] = 'Portfolio / Our Work';
    $templates['page-templates/about.php'] = 'About Us';
    $templates['page-templates/contact.php'] = 'Contact';
    $templates['page-templates/services.php'] = 'Services';
    
    return $templates;
}
add_filter('theme_page_templates', 'onerock_add_page_templates');

/**
 * Load page templates
 */
function onerock_load_page_template($template) {
    if (is_page()) {
        // Force portfolio template for specific slugs if template is not set
        if (is_page('portfolio') || is_page('our-work') || is_page('portfolio-agency')) {
            $portfolio_template = locate_template('page-templates/portfolio.php');
            if ($portfolio_template) {
                return $portfolio_template;
            }
        }

        $page_template = get_post_meta(get_the_ID(), '_wp_page_template', true);
        
        if ($page_template && $page_template != 'default') {
            $template_file = locate_template($page_template);
            
            if ($template_file) {
                return $template_file;
            }
        }
    }
    
    return $template;
}
add_filter('template_include', 'onerock_load_page_template', 99);

/**
 * Handle contact form submission
 */
function onerock_handle_contact_form() {
    // Verify nonce
    if (!isset($_POST['contact_nonce']) || !wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
        wp_die('Security check failed');
    }
    
    // Sanitize form data
    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $service = sanitize_text_field($_POST['service']);
    $budget = sanitize_text_field($_POST['budget']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Prepare email
    $to = get_option('admin_email'); // Send to site admin email
    $subject = 'New Contact Form Submission from ' . $first_name . ' ' . $last_name;
    
    $body = "New contact form submission:\n\n";
    $body .= "Name: {$first_name} {$last_name}\n";
    $body .= "Email: {$email}\n";
    $body .= "Phone: {$phone}\n";
    $body .= "Service: {$service}\n";
    $body .= "Budget: {$budget}\n\n";
    $body .= "Message:\n{$message}\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . get_bloginfo('name') . ' <' . $email . '>');
    
    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);
    
    // Redirect back to contact page with success/error message
    if ($sent) {
        wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
    }
    
    exit;
}
add_action('admin_post_nopriv_submit_contact_form', 'onerock_handle_contact_form');
add_action('admin_post_submit_contact_form', 'onerock_handle_contact_form');

/**
 * Add active class to current menu item
 */
function onerock_nav_menu_css_class($classes, $item) {
    if (in_array('current-menu-item', $classes) || in_array('current_page_item', $classes)) {
        $classes[] = 'active';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'onerock_nav_menu_css_class', 10, 2);

/**
 * Register Portfolio Custom Post Type
 */
function onerock_register_portfolio_cpt() {
    $labels = array(
        'name'               => __('Projects', 'onerock'),
        'singular_name'      => __('Project', 'onerock'),
        'menu_name'          => __('Portfolio', 'onerock'),
        'add_new'            => __('Add New Project', 'onerock'),
        'add_new_item'       => __('Add New Project', 'onerock'),
        'edit_item'          => __('Edit Project', 'onerock'),
        'new_item'           => __('New Project', 'onerock'),
        'view_item'          => __('View Project', 'onerock'),
        'search_items'       => __('Search Projects', 'onerock'),
        'not_found'          => __('No projects found', 'onerock'),
        'not_found_in_trash' => __('No projects found in Trash', 'onerock'),
    );
    
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-portfolio',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'             => array('slug' => 'project'),
        'show_in_rest'        => true, // Enable Gutenberg
    );
    
    register_post_type('portfolio', $args);
    
    // Register Taxonomy
    register_taxonomy('portfolio_category', 'portfolio', array(
        'labels' => array(
            'name' => 'Project Categories',
            'singular_name' => 'Category',
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
    ));
}
add_action('init', 'onerock_register_portfolio_cpt');

/**
 * Add Meta Boxes for Portfolio Stats
 */
function onerock_add_portfolio_meta_boxes() {
    add_meta_box(
        'onerock_portfolio_stats',
        'Project Stats & Badge',
        'onerock_portfolio_stats_callback',
        'portfolio',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'onerock_add_portfolio_meta_boxes');

function onerock_portfolio_stats_callback($post) {
    wp_nonce_field('onerock_portfolio_stats_save', 'onerock_portfolio_stats_nonce');
    
    $badge = get_post_meta($post->ID, '_portfolio_badge', true);
    $stat1_val = get_post_meta($post->ID, '_portfolio_stat1_val', true);
    $stat1_label = get_post_meta($post->ID, '_portfolio_stat1_label', true);
    $stat2_val = get_post_meta($post->ID, '_portfolio_stat2_val', true);
    $stat2_label = get_post_meta($post->ID, '_portfolio_stat2_label', true);
    
    echo '<p><label>Badge Text (e.g. Shopify Plus):</label><br><input type="text" name="portfolio_badge" value="' . esc_attr($badge) . '" style="width:100%;"></p>';
    
    echo '<div style="display:flex; gap:20px;">';
    echo '<div style="flex:1;"><p><label>Stat 1 Value (e.g. +150%):</label><br><input type="text" name="portfolio_stat1_val" value="' . esc_attr($stat1_val) . '" style="width:100%;"></p>';
    echo '<p><label>Stat 1 Label (e.g. Conversion):</label><br><input type="text" name="portfolio_stat1_label" value="' . esc_attr($stat1_label) . '" style="width:100%;"></p></div>';
    
    echo '<div style="flex:1;"><p><label>Stat 2 Value (e.g. $2M+):</label><br><input type="text" name="portfolio_stat2_val" value="' . esc_attr($stat2_val) . '" style="width:100%;"></p>';
    echo '<p><label>Stat 2 Label (e.g. Revenue):</label><br><input type="text" name="portfolio_stat2_label" value="' . esc_attr($stat2_label) . '" style="width:100%;"></p></div>';
    echo '</div>';
}

function onerock_save_portfolio_meta($post_id) {
    if (!isset($_POST['onerock_portfolio_stats_nonce']) || !wp_verify_nonce($_POST['onerock_portfolio_stats_nonce'], 'onerock_portfolio_stats_save')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    
    if (isset($_POST['portfolio_badge'])) update_post_meta($post_id, '_portfolio_badge', sanitize_text_field($_POST['portfolio_badge']));
    if (isset($_POST['portfolio_stat1_val'])) update_post_meta($post_id, '_portfolio_stat1_val', sanitize_text_field($_POST['portfolio_stat1_val']));
    if (isset($_POST['portfolio_stat1_label'])) update_post_meta($post_id, '_portfolio_stat1_label', sanitize_text_field($_POST['portfolio_stat1_label']));
    if (isset($_POST['portfolio_stat2_val'])) update_post_meta($post_id, '_portfolio_stat2_val', sanitize_text_field($_POST['portfolio_stat2_val']));
    if (isset($_POST['portfolio_stat2_label'])) update_post_meta($post_id, '_portfolio_stat2_label', sanitize_text_field($_POST['portfolio_stat2_label']));
}
add_action('save_post', 'onerock_save_portfolio_meta');
