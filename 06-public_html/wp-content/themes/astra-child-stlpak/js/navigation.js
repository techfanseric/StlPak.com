// StlPak Website Navigation Interactive Functions

document.addEventListener('DOMContentLoaded', function() {
  // Initialize dropdown behavior based on screen size
  initializeDropdownBehavior();

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
          navMenu.classList.remove('products-expanded'); // Also remove full-screen mode
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
      // Check if it's a WP form or specific custom form that needs this handling
      // For now, only apply to forms that look like the wireframe sample forms to avoid breaking WP forms like search/comment
      if (!form.id && !form.classList.contains('search-form')) {
          // Keep default behavior for now unless specific class match
          return; 
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
    if (window.innerWidth > 991) {
      // Reset mobile menu state on desktop
      if (navMenu && navMenu.classList.contains('active')) {
        navMenu.classList.remove('active');
        navMenu.classList.remove('products-expanded'); // Remove full-screen mode
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

      // Remove products-nav classes
      const productsNav = document.querySelector('.nav-link.products-nav');
      if (productsNav) {
        productsNav.classList.remove('products-nav');
      }
    }
  });

  // Handle page load completion
  window.addEventListener('load', function() {
    // Remove loading animation
    document.body.classList.add('loaded');
  });
  
  // Keyboard navigation support
  document.addEventListener('keydown', function(event) {
    // ESC key closes mobile menu
    if (event.key === 'Escape') {
      if (navMenu && navMenu.classList.contains('active')) {
        navMenu.classList.remove('active');
        navMenu.classList.remove('products-expanded'); // Also remove full-screen mode
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

});

// Initialize dropdown behavior based on current screen size
function initializeDropdownBehavior() {
  const dropdowns = document.querySelectorAll('.dropdown');
  const isMobile = window.innerWidth <= 991;

  dropdowns.forEach(function(dropdown) {
    const menu = dropdown.querySelector('.dropdown-menu');
    if (menu) {
      if (isMobile) {
        // Mobile: click to toggle
        setupMobileDropdown(dropdown);
      } else {
        // Desktop: hover behavior
        setupDesktopDropdown(dropdown);
      }
    }
  });
}

function setupMobileDropdown(dropdown) {
  const toggle = dropdown.querySelector('.dropdown-toggle');
  const menu = dropdown.querySelector('.dropdown-menu');
  const navMenu = document.getElementById('nav-menu');
  const isProducts = dropdown.classList.contains('products-dropdown') || toggle.textContent.includes('Products');

  if (toggle && menu && navMenu) {
    toggle.addEventListener('click', function(event) {
      event.preventDefault();

      // Handle full-screen expansion for products
      if (isProducts && window.innerWidth <= 991) {
        const isExpanded = menu.classList.contains('show');

        if (!isExpanded) {
          // Expand to full-screen mode
          navMenu.classList.add('products-expanded');
          // Add class to products nav link for styling
          toggle.classList.add('products-nav');
          menu.classList.add('show');
        } else {
          // Collapse back to normal
          navMenu.classList.remove('products-expanded');
          toggle.classList.remove('products-nav');
          menu.classList.remove('show');
        }
      } else {
        // Normal toggle for other dropdowns or desktop
        menu.classList.toggle('show');
      }
    });
  }
}

function setupDesktopDropdown(dropdown) {
  const menu = dropdown.querySelector('.dropdown-menu');
  let timeoutId;

  dropdown.addEventListener('mouseenter', function() {
    clearTimeout(timeoutId);
    menu.style.opacity = '1';
    menu.style.visibility = 'visible';
    menu.style.transform = 'translateY(0)';
    menu.style.pointerEvents = 'auto';
  });

  dropdown.addEventListener('mouseleave', function() {
    timeoutId = setTimeout(function() {
      menu.style.opacity = '0';
      menu.style.visibility = 'hidden';
      menu.style.transform = 'translateY(12px)';
      menu.style.pointerEvents = 'none';
    }, 150);
  });

  menu.addEventListener('mouseenter', function() {
    clearTimeout(timeoutId);
    menu.style.opacity = '1';
    menu.style.visibility = 'visible';
    menu.style.transform = 'translateY(0)';
    menu.style.pointerEvents = 'auto';
  });

  menu.addEventListener('mouseleave', function() {
    timeoutId = setTimeout(function() {
      menu.style.opacity = '0';
      menu.style.visibility = 'hidden';
      menu.style.transform = 'translateY(12px)';
      menu.style.pointerEvents = 'none';
    }, 150);
  });
}

console.log('StlPak child theme navigation functions loaded');

// Helper for language selector
window.changeLanguage = function(lang) {
    // Simple placeholder for language switching
    console.log('Switch language to:', lang);
    alert('Language switching functionality to be implemented: ' + lang);
}
