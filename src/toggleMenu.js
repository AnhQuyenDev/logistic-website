document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('menu-toggle');
    const navMenu = document.getElementById('nav-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    const isMobile = () => window.innerWidth < 768;

    const showMenu = () => {
        navMenu.classList.remove('hidden', 'text-base');
        navMenu.classList.add('flex', 'flex-col', 'absolute', 'top-24', 'left-0', 'w-full', 'z-30', 'p-4', 'bg-primary-darker', 'rounded-lg', 'text-sm');
        iconOpen.classList.add('hidden');
        iconClose.classList.remove('hidden');
    };

    const hideMenu = () => {
        navMenu.classList.add('hidden', 'text-base');
        navMenu.classList.remove('flex', 'flex-col', 'absolute', 'top-24', 'left-0', 'w-full', 'z-30', 'p-4', 'bg-primary-darker', 'rounded-lg', 'text-sm');
        iconOpen.classList.remove('hidden');
        iconClose.classList.add('hidden');
    };

    const resetMenu = () => {
        if (isMobile()) {
            hideMenu();
        } else {
            navMenu.classList.remove('hidden');
            navMenu.classList.remove('absolute', 'top-24', 'left-0', 'w-full', 'z-30', 'p-4', 'bg-primary-darker', 'rounded-lg', 'text-sm');
            navMenu.classList.add('flex');
            iconOpen.classList.add('hidden');
            iconClose.classList.add('hidden');
        }
    };

    toggle.addEventListener('click', () => {
        if (isMobile()) {
            if (navMenu.classList.contains('hidden')) {
                showMenu();
            } else {
                hideMenu();
            }
        }
    });

    // Resize event để cập nhật trạng thái
    window.addEventListener('resize', () => {
        resetMenu();
    });

    resetMenu();
});
