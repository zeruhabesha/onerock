document.addEventListener('DOMContentLoaded', () => {
    // 1. Text Reveal Setup (Splitting headers into words)
    try {
        const revealElements = document.querySelectorAll('.reveal-text');
        revealElements.forEach(el => {
            if (!el.textContent) return;
            const text = el.textContent.trim();
            if (text.length === 0) return;
            const words = text.split(/\s+/);
            el.innerHTML = words.map(word => `<span class="word-wrap"><span class="word">${word}</span></span>`).join(' ');
        });
    } catch (err) {
        console.error('Text reveal failed:', err);
    }

    // 2. Intersection Observer for Scroll Animations
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    const animatedElements = document.querySelectorAll('.animate, .reveal-text');
    animatedElements.forEach(el => {
        if (el) {
            observer.observe(el);
            // Safety: If not visible after 2 seconds, force visible
            setTimeout(() => el.classList.add('visible'), 2000);
        }
    });

    // 3. Staggered Entrance Indexer
    const staggerContainers = document.querySelectorAll('.stagger-container');
    staggerContainers.forEach(container => {
        const items = container.querySelectorAll('.animate');
        items.forEach((item, index) => {
            item.style.setProperty('--stagger-index', index);
        });
    });

    // 4. Interactive Magnetic Glow Effect
    const glow = document.createElement('div');
    glow.className = 'interactive-glow';
    document.body.appendChild(glow);

    // Magnetic CTA Logic
    const magneticBtns = document.querySelectorAll('.magnetic-wrap');

    window.addEventListener('mousemove', (e) => {
        // Interactive Glow
        requestAnimationFrame(() => {
            glow.style.left = `${e.clientX}px`;
            glow.style.top = `${e.clientY}px`;
        });

        // Magnetic Effect with Lerner Easing
        magneticBtns.forEach(btn => {
            const rect = btn.getBoundingClientRect();
            const btnX = rect.left + rect.width / 2;
            const btnY = rect.top + rect.height / 2;

            const x = e.clientX - btnX;
            const y = e.clientY - btnY;
            const distance = Math.sqrt(x * x + y * y);

            if (distance < 120) {
                const strength = 0.35;
                btn.style.transform = `translate(${x * strength}px, ${y * strength}px)`;
                btn.classList.add('is-active');
            } else {
                btn.style.transform = `translate(0px, 0px)`;
                btn.classList.remove('is-active');
            }
        });
    });

    // 5. FAQ Toggle Logic
    const faqCards = document.querySelectorAll('.faq-card');
    faqCards.forEach(card => {
        card.addEventListener('click', () => {
            const isActive = card.classList.contains('active');
            faqCards.forEach(c => c.classList.remove('active'));
            if (!isActive) {
                card.classList.add('active');
            }
        });
    });

    // 6. Hero Background Mouse Tracking
    const hero = document.querySelector('.premium-hero');
    if (hero) {
        window.addEventListener('mousemove', (e) => {
            const { clientX, clientY } = e;
            const xPos = (clientX / window.innerWidth - 0.5) * 20;
            const yPos = (clientY / window.innerHeight - 0.5) * 20;

            requestAnimationFrame(() => {
                hero.style.setProperty('--mouse-x', `${xPos}px`);
                hero.style.setProperty('--mouse-y', `${yPos}px`);
            });
        });
    }

    // 7. Navbar & Parallax Logic
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;

        const navbar = document.querySelector('.main-nav');
        if (scrolled > 50) {
            navbar?.classList.add('scrolled');
        } else {
            navbar?.classList.remove('scrolled');
        }

        const parallaxElements = document.querySelectorAll('.mockup-card');
        parallaxElements.forEach(el => {
            const speed = 0.05;
            const yOffset = scrolled * speed;
            el.style.transform = `translateY(${yOffset}px)`;
        });
    });

    // 8. Card Tilt Effect (3D Interactive)
    const tiltCards = document.querySelectorAll('.project-card, .testimonial-card, .sub-service');
    tiltCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
        });
    });

    // 9. Button Ripple Effect
    const rippleButtons = document.querySelectorAll('.btn-primary, .btn-secondary');
    rippleButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            const ripple = document.createElement('span');
            ripple.classList.add('ripple-effect');

            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';

            this.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
        });
    });

    // 10. Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '#!') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // 11. Accordion Enhanced Animation
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    accordionHeaders.forEach(header => {
        header.addEventListener('click', function () {
            const item = this.closest('.accordion-item');
            const wasActive = item.classList.contains('active');

            document.querySelectorAll('.accordion-item').forEach(i => {
                i.classList.remove('active');
            });

            if (!wasActive) {
                item.classList.add('active');
            }
        });
    });

    // 12. Generate Animated Particles for Sections
    const sectionsWithParticles = document.querySelectorAll('.premium-hero, .services-section, .portfolio-section');
    sectionsWithParticles.forEach(section => {
        const particleContainer = document.createElement('div');
        particleContainer.className = 'animated-bg';

        for (let i = 0; i < 5; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particleContainer.appendChild(particle);
        }

        section.style.position = 'relative';
        section.insertBefore(particleContainer, section.firstChild);
    });

    // 13. Mobile Menu Toggle
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const navMenuWrapper = document.querySelector('.nav-menu-wrapper');

    if (mobileMenuToggle && navMenuWrapper) {
        mobileMenuToggle.addEventListener('click', () => {
            mobileMenuToggle.classList.toggle('active');
            navMenuWrapper.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileMenuToggle.contains(e.target) && !navMenuWrapper.contains(e.target)) {
                mobileMenuToggle.classList.remove('active');
                navMenuWrapper.classList.remove('active');
            }
        });

        // Close menu when clicking on a link
        const navLinks = navMenuWrapper.querySelectorAll('.nav-links a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenuToggle.classList.remove('active');
                navMenuWrapper.classList.remove('active');
            });
        });
    }

    // Stats Counter Animation
    function animateCounter(element) {
        const target = element.textContent.trim();
        const isPercentage = target.includes('%');
        const is247 = target === '24/7';

        if (is247) return; // Don't animate 24/7

        const numericValue = parseInt(target.replace(/[^0-9]/g, ''));
        if (isNaN(numericValue)) return;

        const duration = 2000; // 2 seconds
        const steps = 60;
        const increment = numericValue / steps;
        let current = 0;
        let step = 0;

        const timer = setInterval(() => {
            step++;
            current = Math.min(Math.floor(increment * step), numericValue);

            if (isPercentage) {
                element.textContent = current + '%';
            } else {
                element.textContent = current + '+';
            }

            if (step >= steps) {
                clearInterval(timer);
                element.textContent = target; // Set final value
            }
        }, duration / steps);
    }

    // Observe stats for counter animation
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                entry.target.classList.add('counted');
                const numberElement = entry.target.querySelector('h2');
                if (numberElement) {
                    animateCounter(numberElement);
                }
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.stat-item').forEach(stat => {
        statsObserver.observe(stat);
    });

    // Portfolio Filtering Logic
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-card');

    if (filterBtns.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');

                const filterValue = btn.getAttribute('data-filter');

                portfolioItems.forEach(item => {
                    if (filterValue === 'all') {
                        item.style.display = 'flex'; // Restore flex display
                        setTimeout(() => item.classList.add('animate', 'slide-up'), 50);
                    } else {
                        const itemCategory = item.getAttribute('data-category');
                        if (itemCategory && itemCategory.includes(filterValue)) {
                            item.style.display = 'flex';
                            setTimeout(() => item.classList.add('animate', 'slide-up'), 50);
                        } else {
                            item.style.display = 'none';
                            item.classList.remove('animate', 'slide-up');
                        }
                    }
                });
            });
        });
    }
});
