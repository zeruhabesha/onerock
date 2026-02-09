<?php
/**
 * Template Name: Contact
 * 
 * @package OneRock
 */

get_header();
?>

<!-- Page Header -->
<section class="page-hero contact-hero">
    <div class="page-hero-container">
        <div class="page-hero-content animate fade-in">
            <h6 class="page-label">Get In Touch</h6>
            <h1 class="page-title reveal-text">Let's Talk About Your Shopify Store</h1>
            <p class="page-subtitle">
                Ready to launch, optimize, or scale your Shopify business? Book a free consultation and let's discuss how we can help you grow.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-main-section">
    <div class="contact-main-container">
        <div class="contact-grid">
            
            <!-- Contact Form -->
            <div class="contact-form-wrapper animate slide-up">
                <h2 class="contact-form-title">Send Us a Message</h2>
                <p class="contact-form-subtitle">Fill out the form below and we'll get back to you within 24 hours.</p>
                
                <form class="contact-form" id="contactForm" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="submit_contact_form">
                    <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input type="text" id="firstName" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input type="text" id="lastName" name="last_name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number (Optional)</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="service">Service Interested In *</label>
                        <select id="service" name="service" required>
                            <option value="">Select a service...</option>
                            <option value="design-development">Design & Development</option>
                            <option value="marketing-growth">Marketing & Growth</option>
                            <option value="strategy-consulting">Strategy & Consulting</option>
                            <option value="va-support">VA & Support Services</option>
                            <option value="migration">Platform Migration</option>
                            <option value="other">Other / Not Sure</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="budget">Project Budget</label>
                        <select id="budget" name="budget">
                            <option value="">Select budget range...</option>
                            <option value="under-5k">Under $5,000</option>
                            <option value="5k-10k">$5,000 - $10,000</option>
                            <option value="10k-25k">$10,000 - $25,000</option>
                            <option value="25k-50k">$25,000 - $50,000</option>
                            <option value="50k-plus">$50,000+</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Tell Us About Your Project *</label>
                        <textarea id="message" name="message" rows="6" required placeholder="Share your goals, challenges, and what you're looking to achieve..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="contact-info-wrapper animate slide-up delay-200">
                <div class="contact-info-card section-card">
                    <h3 class="contact-info-title">Contact Information</h3>
                    
                    <div class="contact-info-items">
                        <!-- Email -->
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="2"/>
                                    <path d="M3 7L12 13L21 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="contact-info-content">
                                <h4>Email</h4>
                                <a href="mailto:hello@onerockdigital.com">hello@onerockdigital.com</a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M3 5C3 3.89543 3.89543 3 5 3H8.27924C8.70967 3 9.09181 3.27543 9.22792 3.68377L10.7257 8.17721C10.8831 8.64932 10.6694 9.16531 10.2243 9.38787L7.96701 10.5165C9.06925 12.9612 11.0388 14.9308 13.4835 16.033L14.6121 13.7757C14.8347 13.3306 15.3507 13.1169 15.8228 13.2743L20.3162 14.7721C20.7246 14.9082 21 15.2903 21 15.7208V19C21 20.1046 20.1046 21 19 21H18C9.71573 21 3 14.2843 3 6V5Z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="contact-info-content">
                                <h4>Phone</h4>
                                <a href="tel:+1234567890">+1 (234) 567-890</a>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 2C8.13401 2 5 5.13401 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13401 15.866 2 12 2Z" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="12" cy="9" r="2.5" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="contact-info-content">
                                <h4>Location</h4>
                                <p>Remote-First Agency<br>Serving Clients Worldwide</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="contact-social">
                        <h4>Follow Us</h4>
                        <div class="contact-social-links">
                            <a href="#" class="social-link" aria-label="LinkedIn">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M4.5 3C3.67 3 3 3.67 3 4.5V15.5C3 16.33 3.67 17 4.5 17H15.5C16.33 17 17 16.33 17 15.5V4.5C17 3.67 16.33 3 15.5 3H4.5ZM6.5 5.5C7.05 5.5 7.5 5.95 7.5 6.5C7.5 7.05 7.05 7.5 6.5 7.5C5.95 7.5 5.5 7.05 5.5 6.5C5.5 5.95 5.95 5.5 6.5 5.5ZM5.5 8.5H7.5V14.5H5.5V8.5ZM9.5 8.5H11.5V9.3C11.8 8.8 12.5 8.4 13.3 8.4C14.9 8.4 15.5 9.5 15.5 11V14.5H13.5V11.5C13.5 10.7 13.3 10.2 12.7 10.2C12 10.2 11.5 10.7 11.5 11.5V14.5H9.5V8.5Z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-link" aria-label="Twitter">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6.29 18.25C13.84 18.25 17.96 12.09 17.96 6.71C17.96 6.53 17.96 6.35 17.95 6.17C18.73 5.61 19.41 4.91 19.96 4.11C19.24 4.43 18.47 4.64 17.67 4.73C18.5 4.24 19.13 3.47 19.43 2.55C18.66 3 17.81 3.33 16.91 3.51C16.18 2.75 15.15 2.28 14.02 2.28C11.85 2.28 10.09 4.04 10.09 6.21C10.09 6.52 10.13 6.82 10.2 7.11C6.88 6.94 3.93 5.39 1.96 2.99C1.63 3.57 1.44 4.24 1.44 4.95C1.44 6.29 2.13 7.47 3.16 8.16C2.53 8.14 1.93 7.97 1.4 7.69C1.4 7.7 1.4 7.72 1.4 7.74C1.4 9.66 2.75 11.26 4.55 11.63C4.23 11.72 3.89 11.76 3.54 11.76C3.3 11.76 3.07 11.74 2.84 11.69C3.31 13.27 4.77 14.42 6.5 14.45C5.16 15.51 3.47 16.15 1.63 16.15C1.31 16.15 1 16.13 0.69 16.1C2.44 17.23 4.53 17.88 6.79 17.88"/>
                                </svg>
                            </a>
                            <a href="#" class="social-link" aria-label="Instagram">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 6.87C8.28 6.87 6.87 8.28 6.87 10C6.87 11.72 8.28 13.13 10 13.13C11.72 13.13 13.13 11.72 13.13 10C13.13 8.28 11.72 6.87 10 6.87ZM10 11.87C9.01 11.87 8.13 10.99 8.13 10C8.13 9.01 9.01 8.13 10 8.13C10.99 8.13 11.87 9.01 11.87 10C11.87 10.99 10.99 11.87 10 11.87ZM14.12 6.72C14.12 7.13 13.78 7.47 13.37 7.47C12.96 7.47 12.62 7.13 12.62 6.72C12.62 6.31 12.96 5.97 13.37 5.97C13.78 5.97 14.12 6.31 14.12 6.72ZM16.94 7.48C16.89 6.54 16.68 5.7 15.99 5.01C15.3 4.32 14.46 4.11 13.52 4.06C12.55 4 7.45 4 6.48 4.06C5.54 4.11 4.7 4.32 4.01 5.01C3.32 5.7 3.11 6.54 3.06 7.48C3 8.45 3 13.55 3.06 14.52C3.11 15.46 3.32 16.3 4.01 16.99C4.7 17.68 5.54 17.89 6.48 17.94C7.45 18 12.55 18 13.52 17.94C14.46 17.89 15.3 17.68 15.99 16.99C16.68 16.3 16.89 15.46 16.94 14.52C17 13.55 17 8.45 16.94 7.48ZM15.43 15.55C15.24 16.05 14.86 16.43 14.36 16.62C13.58 16.99 11.67 16.91 10 16.91C8.33 16.91 6.42 16.99 5.64 16.62C5.14 16.43 4.76 16.05 4.57 15.55C4.2 14.77 4.28 12.86 4.28 11.19C4.28 9.52 4.2 7.61 4.57 6.83C4.76 6.33 5.14 5.95 5.64 5.76C6.42 5.39 8.33 5.47 10 5.47C11.67 5.47 13.58 5.39 14.36 5.76C14.86 5.95 15.24 6.33 15.43 6.83C15.8 7.61 15.72 9.52 15.72 11.19C15.72 12.86 15.8 14.77 15.43 15.55Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="contact-hours-card section-card">
                    <h3>Business Hours</h3>
                    <div class="hours-list">
                        <div class="hours-item">
                            <span>Monday - Friday</span>
                            <span>9:00 AM - 6:00 PM EST</span>
                        </div>
                        <div class="hours-item">
                            <span>Saturday</span>
                            <span>10:00 AM - 4:00 PM EST</span>
                        </div>
                        <div class="hours-item">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </div>
                    </div>
                    <p class="hours-note">
                        <strong>Note:</strong> We typically respond to all inquiries within 24 hours during business days.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="contact-faq-section">
    <div class="contact-faq-container">
        <div class="contact-faq-header animate slide-up">
            <h2 class="contact-faq-title">Frequently Asked Questions</h2>
            <p class="contact-faq-subtitle">Quick answers to common questions about working with us.</p>
        </div>

        <div class="contact-faq-grid">
            <div class="faq-item animate slide-up">
                <h3>How long does a typical project take?</h3>
                <p>Most Shopify store builds take 4-8 weeks depending on complexity. Smaller projects like theme customizations can be completed in 1-2 weeks.</p>
            </div>

            <div class="faq-item animate slide-up delay-100">
                <h3>What's your pricing structure?</h3>
                <p>We offer both project-based and retainer pricing. Project costs typically range from $5,000 to $50,000+ depending on scope. Contact us for a custom quote.</p>
            </div>

            <div class="faq-item animate slide-up delay-200">
                <h3>Do you offer ongoing support?</h3>
                <p>Yes! We offer monthly retainer packages for ongoing maintenance, optimization, and support. Many clients stay with us long-term as their Shopify partner.</p>
            </div>

            <div class="faq-item animate slide-up delay-300">
                <h3>Can you help migrate from another platform?</h3>
                <p>Absolutely. We specialize in migrations from WooCommerce, Magento, BigCommerce, and other platforms to Shopify with zero downtime.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
