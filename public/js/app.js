// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('animate-fade-in');
            } else {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('animate-fade-in');
            }
        });
    }

    // Smooth Scrolling for Navigation Links
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Close mobile menu if open
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            }
        });
    });

    // Request Modal Functions
    window.openRequestModal = function() {
        const modal = document.getElementById('request-modal');
        const overlay = document.getElementById('modal-overlay');
        if (modal && overlay) {
            modal.classList.remove('hidden');
            overlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            
            // Animate modal in
            setTimeout(() => {
                modal.querySelector('.modal-content').classList.add('scale-100', 'opacity-100');
                modal.querySelector('.modal-content').classList.remove('scale-95', 'opacity-0');
            }, 10);
        }
    };

    window.closeRequestModal = function() {
        const modal = document.getElementById('request-modal');
        const overlay = document.getElementById('modal-overlay');
        const modalContent = modal?.querySelector('.modal-content');
        
        if (modal && overlay && modalContent) {
            // Animate modal out
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');
            
            setTimeout(() => {
                modal.classList.add('hidden');
                overlay.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }, 200);
        }
    };

    // Close modal when clicking overlay
    const overlay = document.getElementById('modal-overlay');
    if (overlay) {
        overlay.addEventListener('click', function(e) {
            if (e.target === this) {
                closeRequestModal();
            }
        });
    }

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const modal = document.getElementById('request-modal');
            if (modal && !modal.classList.contains('hidden')) {
                closeRequestModal();
            }
        }
    });

    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const trigger = item.querySelector('.faq-trigger');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('.faq-icon');
        
        if (trigger && content && icon) {
            trigger.addEventListener('click', function() {
                const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';
                
                // Close all other FAQ items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        const otherContent = otherItem.querySelector('.faq-content');
                        const otherIcon = otherItem.querySelector('.faq-icon');
                        if (otherContent && otherIcon) {
                            otherContent.style.maxHeight = '0px';
                            otherIcon.style.transform = 'rotate(0deg)';
                        }
                    }
                });
                
                // Toggle current item
                if (isOpen) {
                    content.style.maxHeight = '0px';
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    icon.style.transform = 'rotate(45deg)';
                }
            });
        }
    });

    // Form Submission
    const requestForm = document.getElementById('request-form');
    if (requestForm) {
        requestForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            
            // Show loading state
            submitButton.textContent = 'در حال ارسال...';
            submitButton.disabled = true;
            
            // Simulate form submission (replace with actual API call)
            setTimeout(() => {
                // Show success message
                alert('درخواست شما با موفقیت ارسال شد. به زودی با شما تماس خواهیم گرفت.');
                
                // Reset form
                this.reset();
                
                // Close modal
                closeRequestModal();
                
                // Reset button
                submitButton.textContent = originalText;
                submitButton.disabled = false;
            }, 2000);
        });
    }

    // Pricing Tab Toggle
    const pricingTabs = document.querySelectorAll('.pricing-tab');
    const pricingContent = document.querySelectorAll('.pricing-content');
    
    pricingTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Remove active class from all tabs
            pricingTabs.forEach(t => {
                t.classList.remove('bg-primary', 'text-white');
                t.classList.add('bg-muted', 'text-muted-foreground');
            });
            
            // Add active class to clicked tab
            this.classList.remove('bg-muted', 'text-muted-foreground');
            this.classList.add('bg-primary', 'text-white');
            
            // Hide all content
            pricingContent.forEach(content => {
                content.classList.add('hidden');
            });
            
            // Show target content
            const targetContent = document.getElementById(targetTab);
            if (targetContent) {
                targetContent.classList.remove('hidden');
            }
        });
    });

    // Intersection Observer for Animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    animatedElements.forEach(el => observer.observe(el));

    // Testimonials Carousel (if implementing carousel)
    let currentTestimonial = 0;
    const testimonials = document.querySelectorAll('.testimonial-item');
    const testimonialDots = document.querySelectorAll('.testimonial-dot');
    
    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.classList.toggle('hidden', i !== index);
        });
        
        testimonialDots.forEach((dot, i) => {
            if (i === index) {
                dot.classList.add('bg-primary');
                dot.classList.remove('bg-gray-300');
            } else {
                dot.classList.remove('bg-primary');
                dot.classList.add('bg-gray-300');
            }
        });
    }
    
    // Auto-rotate testimonials
    if (testimonials.length > 1) {
        setInterval(() => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        }, 5000);
    }
    
    // Manual testimonial navigation
    testimonialDots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentTestimonial = index;
            showTestimonial(currentTestimonial);
        });
    });

    // Initialize first testimonial
    if (testimonials.length > 0) {
        showTestimonial(0);
    }

    // Navbar Background on Scroll
    const navbar = document.querySelector('nav');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-background/95', 'backdrop-blur-sm', 'shadow-sm');
                navbar.classList.remove('bg-transparent');
            } else {
                navbar.classList.remove('bg-background/95', 'backdrop-blur-sm', 'shadow-sm');
                navbar.classList.add('bg-transparent');
            }
        });
    }

    // Number Counter Animation
    function animateCounters() {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const increment = target / 100;
            let current = 0;
            
            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = Math.ceil(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });
    }

    // Trigger counter animation when in view
    const countersSection = document.querySelector('.counters-section');
    if (countersSection) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        counterObserver.observe(countersSection);
    }
});