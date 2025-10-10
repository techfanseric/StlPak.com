// StlPak Website Navigation Interactive Functions

document.addEventListener('DOMContentLoaded', function() {
  // Mobile menu toggle
  const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
  const navMenu = document.getElementById('nav-menu');

  if (mobileMenuToggle && navMenu) {
    mobileMenuToggle.addEventListener('click', function() {
      navMenu.classList.toggle('active');

      // Toggle icon
      const icon = mobileMenuToggle.querySelector('span');
      if (icon) {
        icon.textContent = navMenu.classList.contains('active') ? 'Close' : 'Menu';
      }
    });

    // Click outside menu to close
    document.addEventListener('click', function(event) {
      if (!mobileMenuToggle.contains(event.target) && !navMenu.contains(event.target)) {
        navMenu.classList.remove('active');
        const icon = mobileMenuToggle.querySelector('span');
        if (icon) {
          icon.textContent = 'Menu';
        }
      }
    });
  }

  // Simple mobile dropdown handling
  const dropdowns = document.querySelectorAll('.dropdown');

  dropdowns.forEach(function(dropdown) {
    const toggle = dropdown.querySelector('.dropdown-toggle');
    const menu = dropdown.querySelector('.dropdown-menu');

    if (toggle && menu) {
      // Click to toggle dropdown on mobile
      toggle.addEventListener('click', function(event) {
        if (window.innerWidth <= 768) {
          event.preventDefault();
          menu.classList.toggle('show');
        }
      });
    }
  });

  // Smooth scroll to anchor
  const anchorLinks = document.querySelectorAll('a[href^="#"]');

  anchorLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
      const targetId = this.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        event.preventDefault();

        targetElement.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });

    // Close mobile menu
        if (navMenu && navMenu.classList.contains('active')) {
          navMenu.classList.remove('active');
          const icon = mobileMenuToggle.querySelector('span');
          if (icon) {
            icon.textContent = 'Menu';
          }
        }
      }
    });
  });

  // Navigation bar effects on page scroll
  let lastScrollTop = 0;
  const header = document.querySelector('.header');

  if (header) {
    window.addEventListener('scroll', function() {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  // Add shadow effect
      if (scrollTop > 10) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }

      lastScrollTop = scrollTop;
    });
  }

  // Current page highlight navigation item
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach(function(link) {
    const linkPath = new URL(link.href).pathname;

    if (linkPath === currentPath ||
        (currentPath === '/' && linkPath.endsWith('index.html')) ||
        (currentPath.includes(linkPath) && linkPath !== '/')) {
      link.classList.add('active');
    }
  });

  // Form submission handling
  const forms = document.querySelectorAll('form');

  forms.forEach(function(form) {
    form.addEventListener('submit', function(event) {
      event.preventDefault();

    // Simple form validation
      const requiredFields = form.querySelectorAll('[required]');
      let isValid = true;

      requiredFields.forEach(function(field) {
        if (!field.value.trim()) {
          isValid = false;
          field.classList.add('error');
        } else {
          field.classList.remove('error');
        }
      });

      if (isValid) {
        // Display success message
        const successMessage = document.createElement('div');
        successMessage.className = 'alert alert-success';
        successMessage.textContent = 'Submitted successfully! We will contact you soon.';

        form.parentNode.insertBefore(successMessage, form);
        form.reset();

  // Remove success message after 3 seconds
        setTimeout(function() {
          successMessage.remove();
        }, 3000);
      } else {
      // Display error message
        const errorMessage = document.createElement('div');
        errorMessage.className = 'alert alert-error';
        errorMessage.textContent = 'Please fill in all required fields.';

        const existingAlert = form.parentNode.querySelector('.alert');
        if (existingAlert) {
          existingAlert.remove();
        }

        form.parentNode.insertBefore(errorMessage, form);

    // Remove error message after 3 seconds
        setTimeout(function() {
          errorMessage.remove();
        }, 3000);
      }
    });
  });

  // Fade-in animation
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, observerOptions);

  const fadeElements = document.querySelectorAll('.fade-in');
  fadeElements.forEach(function(element) {
    observer.observe(element);
  });

  // Responsive handling
  window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
  // Reset mobile menu state on desktop
      if (navMenu && navMenu.classList.contains('active')) {
        navMenu.classList.remove('active');
        const icon = mobileMenuToggle.querySelector('span');
        if (icon) {
          icon.textContent = 'Menu';
        }
      }

  // Remove mobile .show classes when switching to desktop
      const dropdownMenus = document.querySelectorAll('.dropdown-menu.show');
      dropdownMenus.forEach(function(menu) {
        menu.classList.remove('show');
      });
    }
  });

  // Handle page load completion
  window.addEventListener('load', function() {
  // Remove loading animation
    document.body.classList.add('loaded');
  });

  // Handle external links
  const externalLinks = document.querySelectorAll('a[href^="http"]');
  externalLinks.forEach(function(link) {
    link.setAttribute('target', '_blank');
    link.setAttribute('rel', 'noopener noreferrer');
  });

  // Keyboard navigation support
  document.addEventListener('keydown', function(event) {
    // ESC key closes mobile menu
    if (event.key === 'Escape') {
      if (navMenu && navMenu.classList.contains('active')) {
        navMenu.classList.remove('active');
        const icon = mobileMenuToggle.querySelector('span');
        if (icon) {
          icon.textContent = 'Menu';
        }
      }

      // Close all dropdown menus
      const dropdownMenus = document.querySelectorAll('.dropdown-menu.show');
      dropdownMenus.forEach(function(menu) {
        menu.classList.remove('show');
      });
    }
  });

  console.log('StlPak website navigation functions loaded');
});