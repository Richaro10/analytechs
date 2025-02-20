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
        'footer' => __('Menu Footer', 'analytechs')
    ));
}
add_action('after_setup_theme', 'analytechs_setup');

// Enqueue scripts and styles
function analytechs_scripts() {
    wp_enqueue_style('analytechs-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_script('analytechs-script', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get('Version'), true);
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'analytechs_scripts');

// ACF Fields
if (function_exists('acf_add_local_field_group')) {
    include get_template_directory() . '/inc/acf-fields.php';
}

// Add theme support for block styles
function analytechs_block_styles() {
    wp_enqueue_style('analytechs-blocks', get_template_directory_uri() . '/assets/css/blocks.css', array(), wp_get_theme()->get('Version'));
}
add_action('enqueue_block_assets', 'analytechs_block_styles');

// Add custom image sizes
add_image_size('hero-image', 1920, 1080, true);
add_image_size('blog-thumbnail', 800, 600, true);

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
    ));
}
add_action('after_setup_theme', 'analytechs_setup_theme_supported_features');