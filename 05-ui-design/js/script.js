document.addEventListener("DOMContentLoaded", () => {
  // Custom Cursor
  const cursorDot = document.querySelector(".cursor-dot");
  const cursorOutline = document.querySelector(".cursor-outline");

  window.addEventListener("mousemove", (e) => {
    const posX = e.clientX;
    const posY = e.clientY;

    cursorDot.style.left = `${posX}px`;
    cursorDot.style.top = `${posY}px`;

    cursorOutline.animate(
      {
        left: `${posX}px`,
        top: `${posY}px`,
      },
      { duration: 500, fill: "forwards" }
    );
  });

  // Hover effect for cursor
  const hoverElements = document.querySelectorAll("a, button, .glass-card");
  hoverElements.forEach((el) => {
    el.addEventListener("mouseenter", () => {
      cursorOutline.style.width = "60px";
      cursorOutline.style.height = "60px";
      cursorOutline.style.backgroundColor = "rgba(255, 255, 255, 0.1)";
    });
    el.addEventListener("mouseleave", () => {
      cursorOutline.style.width = "40px";
      cursorOutline.style.height = "40px";
      cursorOutline.style.backgroundColor = "transparent";
    });
  });

  // Hero Animations
  const heroTitle = document.querySelector(".hero-title");
  const heroSubtitle = document.querySelector(".hero-subtitle");
  const heroActions = document.querySelector(".hero-actions");

  setTimeout(() => {
    heroTitle.style.opacity = "1";
    heroTitle.style.transform = "translateY(0)";
    heroTitle.style.transition = "all 1s ease";
  }, 200);

  setTimeout(() => {
    heroSubtitle.style.opacity = "1";
    heroSubtitle.style.transform = "translateY(0)";
    heroSubtitle.style.transition = "all 1s ease";
  }, 500);

  setTimeout(() => {
    heroActions.style.opacity = "1";
    heroActions.style.transform = "translateY(0)";
    heroActions.style.transition = "all 1s ease";
  }, 800);

  // Header Scroll Effect
  const header = document.querySelector(".header");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  });

  // Intersection Observer for Fade-in
  const observerOptions = {
    threshold: 0.1,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = "1";
        entry.target.style.transform = "translateY(0)";
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  const fadeElements = document.querySelectorAll(
    ".glass-card, .section-title, .section-desc, .split-image"
  );
  fadeElements.forEach((el) => {
    el.style.opacity = "0";
    el.style.transform = "translateY(30px)";
    el.style.transition = "all 0.8s ease";
    observer.observe(el);
  });
});
