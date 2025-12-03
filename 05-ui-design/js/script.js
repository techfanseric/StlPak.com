// StlPak - Interactive JavaScript
// Modern, lightweight interactions for enhanced user experience

document.addEventListener('DOMContentLoaded', function() {
  // Initialize all functionality
  initScrollAnimations();
  initSmoothScrolling();
  initHeaderEffects();
  initFormInteractions();
});

// Scroll-triggered animations
function initScrollAnimations() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animated');

        // Stagger animation for child elements
        const children = entry.target.querySelectorAll('.glass-card, .product-card, .feature-card');
        children.forEach((child, index) => {
          setTimeout(() => {
            child.classList.add('animated');
          }, index * 100);
        });
      }
    });
  }, observerOptions);

  // Observe all sections with animation class
  const animatedElements = document.querySelectorAll('.section, .glass-card, .product-card, .feature-card');
  animatedElements.forEach(el => observer.observe(el));

  // Animate hero elements on load
  setTimeout(() => {
    const heroElements = document.querySelectorAll('.hero-title, .hero-subtitle, .hero-actions');
    heroElements.forEach((el, index) => {
      setTimeout(() => {
        el.style.opacity = '1';
        el.style.transform = 'translateY(0)';
      }, index * 200);
    });
  }, 300);
}

// Smooth scrolling for anchor links
function initSmoothScrolling() {
  const links = document.querySelectorAll('a[href^="#"]');

  links.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();

      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        const headerHeight = document.querySelector('.header').offsetHeight;
        const targetPosition = targetElement.offsetTop - headerHeight - 20;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });

        // Update active navigation
        updateActiveNavigation(targetId);
      }
    });
  });
}

// Header scroll effects
function initHeaderEffects() {
  const header = document.querySelector('.header');
  let lastScroll = 0;

  window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    // Add scrolled class for background
    if (currentScroll > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }

    lastScroll = currentScroll;
  });

  // Update active navigation based on scroll position
  window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section[id]');
    const scrollPos = window.pageYOffset + 100;

    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;
      const sectionId = section.getAttribute('id');

      if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
        updateActiveNavigation(`#${sectionId}`);
      }
    });
  });
}

// Update active navigation state
function updateActiveNavigation(targetId) {
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach(link => {
    link.classList.remove('active');
    if (link.getAttribute('href') === targetId) {
      link.classList.add('active');
    }
  });
}

// Form interactions
function initFormInteractions() {
  const form = document.querySelector('.form');

  if (form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();

      // Show success message
      showNotification('Thank you for your inquiry! We will contact you within 24 hours.', 'success');

      // Reset form
      this.reset();
    });
  }

  // Enhanced form field interactions
  const formControls = document.querySelectorAll('.form-control');

  formControls.forEach(control => {
    // Focus effects
    control.addEventListener('focus', function() {
      this.parentElement.classList.add('focused');
    });

    control.addEventListener('blur', function() {
      if (!this.value) {
        this.parentElement.classList.remove('focused');
      }
    });

    // Validation feedback
    control.addEventListener('input', function() {
      if (this.checkValidity()) {
        this.classList.remove('invalid');
        this.classList.add('valid');
      } else {
        this.classList.remove('valid');
        this.classList.add('invalid');
      }
    });
  });
}

// Notification system
function showNotification(message, type = 'info') {
  // Remove any existing notifications
  const existingNotification = document.querySelector('.notification');
  if (existingNotification) {
    existingNotification.remove();
  }

  // Create notification element
  const notification = document.createElement('div');
  notification.className = `notification notification-${type}`;
  notification.textContent = message;

  // Style the notification
  notification.style.cssText = `
    position: fixed;
    top: 100px;
    right: 20px;
    background: ${type === 'success' ? 'var(--success-color)' : 'var(--primary-color)'};
    color: white;
    padding: 16px 24px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    z-index: 10000;
    max-width: 400px;
    opacity: 0;
    transform: translateX(100%);
    transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
  `;

  document.body.appendChild(notification);

  // Animate in
  setTimeout(() => {
    notification.style.opacity = '1';
    notification.style.transform = 'translateX(0)';
  }, 100);

  // Remove after 5 seconds
  setTimeout(() => {
    notification.style.opacity = '0';
    notification.style.transform = 'translateX(100%)';
    setTimeout(() => notification.remove(), 300);
  }, 5000);
}

// Enhanced interactive effects
document.addEventListener('DOMContentLoaded', function() {
  // Initialize advanced interactions
  initValuePropositionInteractions();
  initProductCardInteractions();
  initButtonInteractions();
  initPopularityAnimations();
});

// Value Proposition Section Interactions
function initValuePropositionInteractions() {
  // Animate big numbers on scroll
  const bigNumber = document.querySelector('.big-number');
  const metrics = document.querySelectorAll('.metric-item');

  if (bigNumber) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Counter animation
          let current = 0;
          const target = parseInt(entry.target.dataset.value);
          const increment = target / 50;
          const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
              current = target;
              clearInterval(timer);
            }
            entry.target.textContent = Math.floor(current);
          }, 30);

          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    observer.observe(bigNumber);
  }

  // Stagger animate metrics
  metrics.forEach((metric, index) => {
    metric.style.opacity = '0';
    metric.style.transform = 'translateY(20px)';

    setTimeout(() => {
      metric.style.transition = 'all 0.6s cubic-bezier(0.23, 1, 0.32, 1)';
      metric.style.opacity = '1';
      metric.style.transform = 'translateY(0)';
    }, 100 + (index * 150));
  });
}

// Product Card Advanced Interactions
function initProductCardInteractions() {
  const productCards = document.querySelectorAll('.product-enhanced-card');

  productCards.forEach(card => {
    const image = card.querySelector('.product-image');
    const popularityBar = card.querySelector('.popularity-fill');

    // Hover effect with parallax
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      const angleX = (y - centerY) / 30;
      const angleY = (centerX - x) / 30;

      card.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg) translateZ(20px)`;
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
    });

    // Animate popularity bars on scroll
    if (popularityBar) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const width = entry.target.style.width;
            entry.target.style.width = '0%';
            setTimeout(() => {
              entry.target.style.width = width;
            }, 200);
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });

      observer.observe(popularityBar);
    }
  });
}

// Enhanced Button Interactions
function initButtonInteractions() {
  const buttons = document.querySelectorAll('.btn');

  buttons.forEach(button => {
    // Ripple effect
    button.addEventListener('click', function(e) {
      const ripple = document.createElement('span');
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;

      ripple.style.cssText = `
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        transform: scale(0);
        animation: ripple 0.6s linear;
        width: ${size}px;
        height: ${size}px;
        left: ${x}px;
        top: ${y}px;
        pointer-events: none;
      `;

      this.appendChild(ripple);

      setTimeout(() => ripple.remove(), 600);
    });

    // Loading state for form submissions
    if (button.type === 'submit') {
      button.addEventListener('click', function() {
        const originalText = this.innerHTML;
        this.innerHTML = 'Sending...';
        this.disabled = true;

        setTimeout(() => {
          this.innerHTML = originalText;
          this.disabled = false;
        }, 2000);
      });
    }
  });
}

// Popularity Bar Animations
function initPopularityAnimations() {
  const popularityBars = document.querySelectorAll('.popularity-fill');

  popularityBars.forEach(bar => {
    // Add random animation delay for more dynamic feel
    const delay = Math.random() * 0.5;
    bar.style.transitionDelay = `${delay}s`;
  });
}

// Add ripple animation to styles
const style = document.createElement('style');
style.textContent = `
  @keyframes ripple {
    to {
      transform: scale(4);
      opacity: 0;
    }
  }

  .btn {
    position: relative;
    overflow: hidden;
  }

  .form-group.focused .form-control {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(0, 102, 255, 0.1);
  }

  .form-control.valid {
    border-color: var(--success-color);
  }

  .form-control.invalid {
    border-color: #ef4444;
  }

  .animate-on-scroll {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
  }

  .animate-on-scroll.animated {
    opacity: 1;
    transform: translateY(0);
  }
`;
document.head.appendChild(style);