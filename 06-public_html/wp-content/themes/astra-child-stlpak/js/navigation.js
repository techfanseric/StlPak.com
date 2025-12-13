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

  // Desktop dropdown with hover delay
  const dropdowns = document.querySelectorAll('.dropdown');
  let dropdownTimeouts = {};

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

      // Desktop hover behavior with delay
      if (window.innerWidth > 768) {
        let timeoutId;

        dropdown.addEventListener('mouseenter', function() {
          clearTimeout(timeoutId);
          // Clear any existing timeout for this dropdown
          if (dropdownTimeouts[dropdown]) {
            clearTimeout(dropdownTimeouts[dropdown]);
            delete dropdownTimeouts[dropdown];
          }
          // Show menu
          menu.style.opacity = '1';
          menu.style.visibility = 'visible';
          menu.style.transform = 'translateY(0)';
          menu.style.pointerEvents = 'auto';
        });

        dropdown.addEventListener('mouseleave', function() {
          // Set a small delay before closing
          timeoutId = setTimeout(function() {
            menu.style.opacity = '0';
            menu.style.visibility = 'hidden';
            menu.style.transform = 'translateY(12px)';
            menu.style.pointerEvents = 'none';
          }, 150); // 150ms delay
          dropdownTimeouts[dropdown] = timeoutId;
        });

        // Also listen for mouseenter on the menu itself
        menu.addEventListener('mouseenter', function() {
          clearTimeout(timeoutId);
          if (dropdownTimeouts[dropdown]) {
            clearTimeout(dropdownTimeouts[dropdown]);
            delete dropdownTimeouts[dropdown];
          }
          // Keep menu visible
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
          dropdownTimeouts[dropdown] = timeoutId;
        });
      }
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

  
  console.log('StlPak child theme navigation functions loaded');
});

// Helper for language selector
window.changeLanguage = function(lang) {
    // Simple placeholder for language switching
    console.log('Switch language to:', lang);
    alert('Language switching functionality to be implemented: ' + lang);
}
