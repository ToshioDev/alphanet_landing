<?php
/**
 * Astra Child Theme functions and definitions
 */

/**
 * Enqueue parent and child theme styles
 */
function astra_child_enqueue_styles() {
    // Enqueue parent theme style
    wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue child theme custom CSS
    wp_enqueue_style(
        'astra-child-custom-style',
        get_stylesheet_directory_uri() . '/assets/css/custom.css',
        array('astra-parent-style'),
        filemtime(get_stylesheet_directory() . '/assets/css/custom.css') // cache busting dinámico
    );

    // Enqueue dashicons for front-end icons
    wp_enqueue_style('dashicons');

    // Enqueue custom JavaScript for the navigation toggle
    wp_enqueue_script(
        'astra-child-script',
        get_stylesheet_directory_uri() . '/assets/js/custom.js',
        array('jquery'),
        filemtime(get_stylesheet_directory() . '/assets/js/custom.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');

/**
 * Register primary navigation menu
 */
function astra_child_register_menus() {
    register_nav_menu('primary', __('Menú Principal', 'astra-child'));
}
add_action('after_setup_theme', 'astra_child_register_menus');
