<?php

/**
 * STYLES AND SCRIPTS
 */
function rt_theme_styles(){
    wp_enqueue_style('theme_css', get_template_directory_uri() . '/assets/css/index.css' );
    wp_enqueue_style('theme_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    
    wp_enqueue_script('theme_js_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',
    array('jquery'), true );
    wp_enqueue_script('theme_js', get_template_directory_uri() . '/assets/js/mian.js' );
}

/**
 * ADD MENUS
 */
function rt_after_setup(){
    //supporte para versoes antigas
    add_theme_support('menus');

    register_nav_menu('primary', __('Primary Menu','Thema Tanamao Nordeste'));

}