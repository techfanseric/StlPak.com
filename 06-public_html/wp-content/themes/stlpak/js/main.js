/**
 * 主题主要JavaScript功能 - 现代化版本
 * 支持vanilla JS和jQuery兼容性
 */
(function($) {
    'use strict';

    // DOM ready function
    function onDOMReady(callback) {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', callback);
        } else {
            callback();
        }
    }

    onDOMReady(function() {
        initModernFeatures();
        initLegacyFeatures();
    });

    /**
     * 现代化功能（vanilla JS）
     */
    function initModernFeatures() {
        initHeaderScroll();
        initMobileMenu();
        initSmoothScroll();
        initAnimations();
    }

    /**
     * Header scroll effect
     */
    function initHeaderScroll() {
        const header = document.getElementById('site-header');
        if (!header) return;

        let lastScrollY = window.scrollY;
        let ticking = false;

        function updateHeader() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                window.requestAnimationFrame(updateHeader);
                ticking = true;
            }
        }

        window.addEventListener('scroll', requestTick);
    }

    /**
     * Mobile menu toggle
     */
    function initMobileMenu() {
        const mobileToggle = document.getElementById('mobile-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = mobileToggle?.querySelector('.menu-icon');
        const closeIcon = mobileToggle?.querySelector('.close-icon');

        if (!mobileToggle || !mobileMenu) return;

        function toggleMobileMenu() {
            const isOpen = mobileMenu.classList.contains('active');

            if (isOpen) {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
                if (menuIcon && closeIcon) {
                    menuIcon.style.display = 'block';
                    closeIcon.style.display = 'none';
                }
            } else {
                mobileMenu.classList.add('active');
                document.body.style.overflow = 'hidden';
                if (menuIcon && closeIcon) {
                    menuIcon.style.display = 'none';
                    closeIcon.style.display = 'block';
                }
            }
        }

        mobileToggle.addEventListener('click', toggleMobileMenu);

        // Close mobile menu when clicking on links
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                setTimeout(() => {
                    toggleMobileMenu();
                }, 300);
            });
        });

        // Close mobile menu when pressing Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                toggleMobileMenu();
            }
        });
    }

    /**
     * Smooth scroll for anchor links
     */
    function initSmoothScroll() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');

        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');

                // Skip if it's just "#"
                if (href === '#') return;

                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();

                    const header = document.getElementById('site-header');
                    const headerHeight = header ? header.offsetHeight : 0;
                    const targetPosition = target.offsetTop - headerHeight - 20;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Scroll animations using Intersection Observer
     */
    function initAnimations() {
        if (!('IntersectionObserver' in window)) return;

        const animatedElements = document.querySelectorAll('.value-item, .product-card, .case-card, .resource-card');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '50px'
        });

        animatedElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    }

    /**
     * 传统jQuery功能（向后兼容）
     */
    function initLegacyFeatures() {
        if (typeof $ === 'undefined') return;

        $(document).ready(function() {

            // 返回顶部按钮
            var backToTop = $('<button id="back-to-top" class="back-to-top">↑</button>');
            $('body').append(backToTop);

            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    backToTop.addClass('show');
                } else {
                    backToTop.removeClass('show');
                }
            });

            backToTop.on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 600);
            });

            // 搜索表单展开（如果有搜索图标）
            $('.search-toggle').on('click', function(e) {
                e.preventDefault();
                $('.search-form').toggleClass('active');
                $('.search-field').focus();
            });

            // 图片懒加载支持
            if ('IntersectionObserver' in window) {
                var imageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var image = entry.target;
                            image.src = image.dataset.src;
                            image.classList.remove('lazy');
                            imageObserver.unobserve(image);
                        }
                    });
                });

                document.querySelectorAll('img[data-src]').forEach(function(img) {
                    imageObserver.observe(img);
                });
            }

            // 响应式表格
            $('table').wrap('<div class="table-responsive"></div>');

            // 外部链接在新窗口打开
            $('a[href^="http"]:not([href*="' + window.location.hostname + '"])').attr('target', '_blank').attr('rel', 'noopener noreferrer');

            // 图片灯箱效果（如果有图库）
            $('.gallery-item a').on('click', function(e) {
                e.preventDefault();
                var imageSrc = $(this).attr('href');
                var lightbox = $('<div class="lightbox"><img src="' + imageSrc + '" alt=""><button class="lightbox-close">&times;</button></div>');
                $('body').append(lightbox);

                lightbox.on('click', function() {
                    $(this).remove();
                });

                $('.lightbox-close').on('click', function() {
                    $('.lightbox').remove();
                });
            });

        });
    }

})(jQuery);