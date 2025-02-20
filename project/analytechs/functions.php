<?php
if (!defined('ABSPATH')) exit;

// Setup theme
function analytechs_setup() {
    // Support WordPress 6.7.2
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_theme_support('custom-spacing');
    
    // Standard supports
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'analytechs'),
        'footer' => __('Menu Footer', 'analytechs'),
        'footer_legal' => __('Menu Légal', 'analytechs')
    ));
}
add_action('after_setup_theme', 'analytechs_setup');

// Enqueue scripts and styles
function analytechs_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600&display=swap', array(), null);
    
    // Enqueue Tailwind CSS
    wp_enqueue_style('analytechs-tailwind', get_template_directory_uri() . '/assets/css/tailwind.min.css', array(), wp_get_theme()->get('Version'));
    
    // Enqueue theme style
    wp_enqueue_style('analytechs-style', get_stylesheet_uri(), array('analytechs-tailwind'), wp_get_theme()->get('Version'));

    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue custom scripts
    wp_enqueue_script('analytechs-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'analytechs_scripts');

// Add custom image sizes
add_image_size('hero-image', 1920, 1080, true);
add_image_size('blog-thumbnail', 800, 600, true);
add_image_size('service-icon', 48, 48, true);

// Add custom color palette
function analytechs_setup_theme_supported_features() {
    add_theme_support('editor-color-palette', array(
        array(
            'name' => __('Primary', 'analytechs'),
            'slug' => 'primary',
            'color' => '#1E3A8A',
        ),
        array(
            'name' => __('Secondary', 'analytechs'),
            'slug' => 'secondary',
            'color' => '#3B82F6',
        ),
        array(
            'name' => __('Accent', 'analytechs'),
            'slug' => 'accent',
            'color' => '#D97706',
        ),
        array(
            'name' => __('Neutral', 'analytechs'),
            'slug' => 'neutral',
            'color' => '#374151',
        ),
    ));
}
add_action('after_setup_theme', 'analytechs_setup_theme_supported_features');

// Add active class to current menu item
function analytechs_menu_item_classes($classes, $item) {
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'text-accent';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'analytechs_menu_item_classes', 10, 2);

// Personnalisation des classes pour les menus
function analytechs_menu_link_classes($atts, $item, $args) {
    if ($args->theme_location === 'footer') {
        $atts['class'] = 'text-gray-400 hover:text-accent transition-colors';
    } elseif ($args->theme_location === 'footer_legal') {
        $atts['class'] = 'text-sm text-gray-400 hover:text-accent transition-colors';
    } elseif ($args->theme_location === 'primary') {
        $atts['class'] = 'px-4 py-2 rounded-md text-base font-extrabold tracking-wide text-gray-700 hover:text-accent transition-colors';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'analytechs_menu_link_classes', 10, 3);

// ACF Fields
if (function_exists('acf_add_local_field_group')) {
    include get_template_directory() . '/inc/acf-fields.php';
}