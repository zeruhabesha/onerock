<!-- Footer -->
<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-grid">
            <!-- Column 1: About -->
            <div class="footer-col">
                <div class="footer-logo"><?php bloginfo('name'); ?></div>
                <p class="footer-about">
                    <?php 
                    $description = get_bloginfo('description');
                    echo $description ? esc_html($description) : 'Expert Shopify development and consulting services.';
                    ?>
                </p>
            </div>
            
            <!-- Column 2: Quick Links -->
            <div class="footer-col">
                <h4 class="footer-heading">Quick Links</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'footer-links',
                    'fallback_cb'    => false,
                ));
                ?>
            </div>
            
            <!-- Column 3: Services -->
            <div class="footer-col">
                <h4 class="footer-heading">Services</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>">Shopify Development</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>">Theme Customization</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>">App Integration</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>">Consulting</a></li>
                </ul>
            </div>
            
            <!-- Column 4: Contact -->
            <div class="footer-col">
                <h4 class="footer-heading">Get in Touch</h4>
                <p class="footer-contact-text">
                    Ready to grow your Shopify business? Let's talk.
                </p>
                <div class="footer-social">
                    <a href="#" aria-label="Twitter">Twitter</a>
                    <a href="#" aria-label="LinkedIn">LinkedIn</a>
                    <a href="#" aria-label="GitHub">GitHub</a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
