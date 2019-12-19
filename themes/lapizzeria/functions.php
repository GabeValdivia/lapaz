<?php

function lapizzera_styles() {
    // Adding stylesheests
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize', array(), '8.0.1');
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/fontawesome.min.css', array(), '5.12.0');
    wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');
    
    
    // Enqueue the Style
    wp_enqueue_style('normalize');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'lapizzera_styles');

// Add Menus

function lapizzera_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'lapizzeria'),
        'social-menu' => __('Social Menu', 'lapizzeria')
    ));
}
add_action('init', 'lapizzera_menus');

