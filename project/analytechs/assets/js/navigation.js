jQuery(document).ready(function($) {
    const mobileMenuButton = $('#mobile-menu-button');
    const mobileMenu = $('#mobile-menu');

    if (mobileMenuButton.length && mobileMenu.length) {
        mobileMenuButton.on('click', function() {
            mobileMenu.toggleClass('hidden');
            
            // Change menu icon
            const menuIcon = $(this).find('svg');
            if (menuIcon.length) {
                if (mobileMenu.hasClass('hidden')) {
                    menuIcon.html('<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>');
                } else {
                    menuIcon.html('<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>');
                }
            }
        });
    }

    // Close menu when clicking outside
    $(document).on('click', function(event) {
        if (!mobileMenu.is(event.target) && !mobileMenuButton.is(event.target) && mobileMenu.has(event.target).length === 0) {
            mobileMenu.addClass('hidden');
            const menuIcon = mobileMenuButton.find('svg');
            if (menuIcon.length) {
                menuIcon.html('<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>');
            }
        }
    });
});