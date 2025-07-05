<?php
function yourtheme_setup() {
    // Enable title tag
    add_theme_support('title-tag');
    
    // Enable featured images
    add_theme_support('post-thumbnails');
    
    // Register menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'yourtheme'),
        'footer' => __('Footer Menu', 'yourtheme')
    ));
    
    // Add HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'yourtheme_setup');

// Enqueue styles and scripts
function yourtheme_scripts() {
    // Main stylesheet
    wp_enqueue_style('yourtheme-style', get_stylesheet_uri());
    
    // Custom CSS
    wp_enqueue_style('yourtheme-main', get_template_directory_uri() . '/assets/css/main.css');
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    
    // Main JavaScript
    wp_enqueue_script('yourtheme-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'yourtheme_scripts');

// Register widget areas
function yourtheme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'yourtheme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'yourtheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'yourtheme_widgets_init');

// Custom template tags
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions
require get_template_directory() . '/inc/customizer.php';
