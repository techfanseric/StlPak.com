/**
 * 导航脚本
 */
(function() {
    'use strict';

    // 响应式导航切换
    var menuToggle = document.querySelector('.menu-toggle');
    var siteNavigation = document.querySelector('.main-navigation');

    if (menuToggle && siteNavigation) {
        menuToggle.addEventListener('click', function() {
            siteNavigation.classList.toggle('toggled');
            menuToggle.classList.toggle('toggled');

            // 无障碍支持
            if (menuToggle.getAttribute('aria-expanded') === 'true') {
                menuToggle.setAttribute('aria-expanded', 'false');
            } else {
                menuToggle.setAttribute('aria-expanded', 'true');
            }
        });
    }

    // 键盘导航支持
    var menuLinks = siteNavigation.querySelectorAll('a');
    menuLinks.forEach(function(link) {
        link.addEventListener('focus', function() {
            link.parentElement.classList.add('focus');
        });

        link.addEventListener('blur', function() {
            link.parentElement.classList.remove('focus');
        });
    });

    // ESC键关闭移动菜单
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && siteNavigation.classList.contains('toggled')) {
            siteNavigation.classList.remove('toggled');
            menuToggle.classList.remove('toggled');
            menuToggle.setAttribute('aria-expanded', 'false');
        }
    });

})();