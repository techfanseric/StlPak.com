console.log('Script file loaded - Top level');
document.addEventListener('DOMContentLoaded', () => {
  console.log('DOMContentLoaded fired');
  // Mobile Menu Toggle
  const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
  const navMenu = document.getElementById('nav-menu');
  
  if (mobileMenuToggle && navMenu) {
    mobileMenuToggle.addEventListener('click', () => {
      navMenu.classList.toggle('active');
      mobileMenuToggle.classList.toggle('active');
    });
  }

  // Header Scroll Effect
  const header = document.querySelector('.header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  // Carousel Logic
  const track = document.querySelector('.carousel-track');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');
  
  if (track && prevBtn && nextBtn) {
    const cardWidth = 380 + 24; // Width + Gap
    let currentPosition = 0;
    
    // Clone items for infinite effect (optional, simple version first)
    // For now, just simple sliding
    
    const maxScroll = track.scrollWidth - track.parentElement.clientWidth;

    nextBtn.addEventListener('click', () => {
      currentPosition += cardWidth;
      if (currentPosition > maxScroll) currentPosition = maxScroll;
      track.style.transform = `translateX(-${currentPosition}px)`;
      updateButtons();
    });

    prevBtn.addEventListener('click', () => {
      currentPosition -= cardWidth;
      if (currentPosition < 0) currentPosition = 0;
      track.style.transform = `translateX(-${currentPosition}px)`;
      updateButtons();
    });

    function updateButtons() {
      prevBtn.disabled = currentPosition <= 0;
      nextBtn.disabled = currentPosition >= maxScroll;
    }
    
    // Initial check
    updateButtons();
    
    // Update on resize
    window.addEventListener('resize', () => {
      updateButtons();
    });
  }

  // Canvas Particle Network Animation
  const canvasContainer = document.getElementById('canvas-container');
  if (canvasContainer) {
    const canvas = document.createElement('canvas');
    canvasContainer.appendChild(canvas);
    const ctx = canvas.getContext('2d');
    
    let width, height;
    let particles = [];
    
    function resize() {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
    }
    
    class Particle {
      constructor() {
        this.x = Math.random() * width;
        this.y = Math.random() * height;
        this.vx = (Math.random() - 0.5) * 0.5;
        this.vy = (Math.random() - 0.5) * 0.5;
        this.size = Math.random() * 2 + 1;
      }
      
      update() {
        this.x += this.vx;
        this.y += this.vy;
        
        if (this.x < 0 || this.x > width) this.vx *= -1;
        if (this.y < 0 || this.y > height) this.vy *= -1;
      }
      
      draw() {
        ctx.fillStyle = 'rgba(15, 23, 42, 0.1)'; // Dark slate, low opacity
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fill();
      }
    }
    
    function initParticles() {
      particles = [];
      const particleCount = Math.min(window.innerWidth / 10, 100); // Responsive count
      for (let i = 0; i < particleCount; i++) {
        particles.push(new Particle());
      }
    }
    
    function animate() {
      ctx.clearRect(0, 0, width, height);
      
      particles.forEach((p, index) => {
        p.update();
        p.draw();
        
        // Draw connections
        for (let j = index + 1; j < particles.length; j++) {
          const p2 = particles[j];
          const dx = p.x - p2.x;
          const dy = p.y - p2.y;
          const distance = Math.sqrt(dx * dx + dy * dy);
          
          if (distance < 150) {
            ctx.strokeStyle = `rgba(15, 23, 42, ${0.05 * (1 - distance / 150)})`;
            ctx.lineWidth = 1;
            ctx.beginPath();
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(p2.x, p2.y);
            ctx.stroke();
          }
        }
      });
      
      requestAnimationFrame(animate);
    }
    
    window.addEventListener('resize', () => {
      resize();
      initParticles();
    });
    
    resize();
    initParticles();
    animate();
  }
});