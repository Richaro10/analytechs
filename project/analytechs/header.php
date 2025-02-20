<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('font-opensans bg-white'); ?>>
    <?php wp_body_open(); ?>
    
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <?php if (has_custom_logo()): ?>
                        <div class="flex-shrink-0">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else: ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                            <div class="relative mr-2">
                                <svg class="h-6 w-6 text-primary absolute -left-1.5 -top-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6v6s0 3 4 3 4-3 4-3V6M4 9h8M12 6v6s0 3 4 3 4-3 4-3V6M12 9h8"/></svg>
                                <svg class="h-6 w-6 text-secondary absolute -left-0.5 top-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7h-3a2 2 0 0 1-2-2V2M10 2v3.343M14 2v3.343M4 2v3.343M14 8h.01M4 8h.01M20 8h.01M14 12h.01M4 12h.01M20 12h.01M14 16h.01M4 16h.01M20 16h.01M14 20h.01M4 20h.01M20 20h.01"/></svg>
                                <svg class="h-6 w-6 text-accent relative left-0.5 top-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
                            </div>
                            <div class="font-bold tracking-tight">
                                <span class="text-primary text-xl">Analy</span>
                                <span class="text-accent text-xl">techs</span>
                                <span class="text-xs text-gray-500 block -mt-1 tracking-wider">DATA & DEV & MANAGEMENT</span>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Menu principal - Desktop -->
                <div class="hidden md:flex items-center">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'flex space-x-8',
                        'fallback_cb' => false,
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'link_before' => '<span class="px-4 py-2 rounded-md text-base font-extrabold tracking-wide text-gray-700 hover:text-accent transition-colors">',
                        'link_after' => '</span>'
                    ));
                    ?>
                </div>

                <!-- Bouton menu mobile -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-accent">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Menu mobile -->
            <div id="mobile-menu" class="md:hidden hidden">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'py-2 space-y-1',
                    'fallback_cb' => false,
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'link_before' => '<span class="block px-4 py-2 text-base font-medium text-gray-700 hover:text-accent hover:bg-gray-50 rounded-md">',
                    'link_after' => '</span>'
                ));
                ?>
            </div>
        </div>
    </nav>