<?php

    add_theme_support('post-thumbnails');
    add_action('init','theme_init_posttypes');

    function theme_init_posttypes() {
        
        $menu_args = array( 'labels' => array(
            'name' => 'Menu',
            'singular_name' => 'Menu',
            'all_items' => 'Wszystkie Menu',
            'add_new' => 'Dodaj Menu',
            'add_new_item' => 'Dodaj Menu',
            'edit_item' => 'Edytuj',
            'new_item' => 'Nowa',
            'view_item' => 'Zobacz',
            'search_items' => 'Szukaj',
            'not_found' => 'Nie znaleziono żadnych', 
            'not_found_in_trash' => 'Nie znaleziono żadnych w koszu', 
            'parent_item_colon' => ''
        ),
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true,
        'rewrite' => true, 
        'capability_type' => 'post', 
        'hierarchical' => false, 
        'menu_position' => 5, 
        'supports' => array(
            'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats' ),
            'has_archive' => true );
        
        register_post_type('menu', $menu_args);
    }
?>