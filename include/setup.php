<?php

/**
 * STYLES AND SCRIPTS
 */
function rt_theme_styles(){
    wp_enqueue_style('theme_css', get_template_directory_uri() . '/assets/css/index.css' );
    wp_enqueue_style('theme_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style('theme_icons', get_template_directory_uri() . '/assets/css/styles.css' );
    
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
    //registrando o menu
    register_nav_menu('primary', __('Primary Menu','Thema Tanamao Nordeste'));

    add_theme_support('post-thumbnails');
    add_theme_support("post-formats", array('gallery','video','audio'));
    add_theme_support( 'post-formats', array( 'aside', 'gallery','link','image','quote','status','video','audio','chat' ) );

    //add os img
    add_theme_support('post-thumbnails');
    rt_custon_post("post-formats", array('gallery','video','audio'));

}

function rt_custon_post(){

    $produtos = array(
        'name' => 'Todos os Produtos',
        'add_new' => 'Adicionar Novo Produto',
        'add_new_item' => 'Adicionar Novo Produto',
        'sigular_name' => 'Produto',
        'edit_item' => 'Editar Produto',
        'new_item' => 'Novo Produto',
        'view_product' => 'Ver Produtos',
        'search_itens' => 'Procurar Produtos',
        'not_found' => 'Nenhum Produto Encontrado',
        'not_found_thash' => 'Nenhum Produto na Lixeira',
        'parent_iten_colon' => '',
        'menu_name' => 'Todos os Produtos'
    );

    $slide = array(
        'name' => 'Todos os Banner',
        'add_new' => 'Adicionar Novo Banner',
        'add_new_item' => 'Adicionar Novo Banner',
        'sigular_name' => 'Banner',
        'edit_item' => 'Editar Banner',
        'new_item' => 'Novo Banner',
        'view_banner' => 'Ver Banner',
        'search_itens' => 'Procurar Banner',
        'not_found' => 'Nenhum Banner Encontrado',
        'not_found_thash' => 'Nenhum Banner na Lixeira',
        'parent_iten_colon' => '',
        'menu_name' => 'Todos os Banners'
    );

    $bannerSlider = array(
        'labels' => $slide,
        'public' => true,
        'hierarchial' => false,
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions', 'excerpt')
    );

    $newProduct = array(
        'labels' => $produtos,
        'public' => true,
        'hierarchial' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions', 'excerpt')
    );

    register_post_type('Banner', $bannerSlider);
    register_post_type('Produto', $newProduct);
    flush_rewrite_rules();

}