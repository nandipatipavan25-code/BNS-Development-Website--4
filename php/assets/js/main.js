/**
 * BNS Development — Core Client JavaScript
 */
document.addEventListener('DOMContentLoaded', () => {
    // 1. Initialize Lucide Icons
    if (window.lucide) {
        lucide.createIcons();
    }

    // 2. Initialize Ultra-Smooth Momentum Scrolling (Lenis)
    if (window.Lenis) {
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: 'vertical',
            gestureOrientation: 'vertical',
            smoothWheel: true,
            wheelMultiplier: 0.9,
            touchMultiplier: 1.5,
            infinite: false,
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);
    }

    // 3. Header Glassmorphism Scroll Effect
    const siteHeader = document.getElementById('site-header');
    if (siteHeader) {
        const handleScroll = () => {
            if (window.scrollY > 20) {
                siteHeader.classList.add('py-2');
                siteHeader.classList.remove('py-3', 'sm:py-4');
            } else {
                siteHeader.classList.remove('py-2');
                siteHeader.classList.add('py-3', 'sm:py-4');
            }
        };
        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll();
    }

    // 4. Mobile Menu Drawer Toggle
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');

    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', () => {
            const isOpen = !mobileMenu.classList.contains('hidden');
            if (isOpen) {
                mobileMenu.classList.add('hidden');
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                document.body.style.overflow = '';
            } else {
                mobileMenu.classList.remove('hidden');
                hamburgerIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            }
        });
    }

    // 5. Mobile Services Submenu Toggle
    const servicesToggle = document.getElementById('mobile-services-toggle');
    const servicesSubmenu = document.getElementById('mobile-services-submenu');
    const servicesArrow = document.getElementById('mobile-services-arrow');

    if (servicesToggle && servicesSubmenu) {
        servicesToggle.addEventListener('click', () => {
            const isSubOpen = !servicesSubmenu.classList.contains('hidden');
            if (isSubOpen) {
                servicesSubmenu.classList.add('hidden');
                if (servicesArrow) servicesArrow.classList.remove('rotate-180');
            } else {
                servicesSubmenu.classList.remove('hidden');
                if (servicesArrow) servicesArrow.classList.add('rotate-180');
            }
        });
    }

    // 6. Generic Accordion Component Helper
    document.querySelectorAll('[data-accordion-toggle]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const targetId = btn.getAttribute('data-accordion-toggle');
            const targetContent = document.getElementById(targetId);
            const icon = btn.querySelector('[data-accordion-icon]');

            if (targetContent) {
                const isExpanded = !targetContent.classList.contains('hidden');
                if (isExpanded) {
                    targetContent.classList.add('hidden');
                    if (icon) icon.classList.remove('rotate-180');
                } else {
                    targetContent.classList.remove('hidden');
                    if (icon) icon.classList.add('rotate-180');
                }
            }
        });
    });

    // 7. Generic Tab Switcher Component Helper
    document.querySelectorAll('[data-tab-group]').forEach((group) => {
        const buttons = group.querySelectorAll('[data-tab-target]');
        buttons.forEach((btn) => {
            btn.addEventListener('click', () => {
                const targetId = btn.getAttribute('data-tab-target');
                buttons.forEach((b) => b.classList.remove('active', 'bg-white', 'text-black', 'shadow-sm'));
                btn.classList.add('active', 'bg-white', 'text-black', 'shadow-sm');

                const parent = group.closest('[data-tab-container]') || document;
                parent.querySelectorAll('[data-tab-pane]').forEach((pane) => {
                    if (pane.id === targetId) {
                        pane.classList.remove('hidden');
                    } else {
                        pane.classList.add('hidden');
                    }
                });
            });
        });
    });
});
