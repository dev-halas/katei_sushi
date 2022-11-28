<?php

	if(!defined('THEME_DIR')) {
		define('THEME_DIR',get_theme_root().'/'.get_template().'/');
	}

	if(!defined('THEME_URL')) {
		define('THEME_URL',WP_CONTENT_URL.'/themes/'.get_template().'/');
	}
	
	require_once THEME_DIR.'libs/post-types.php';
	require_once THEME_DIR.'libs/utils.php';

	//--------------Register menus--------------//
	if(function_exists('register_nav_menus')) { 
		register_nav_menus (array(
			'main_nav' => 'Menu główne',
			'footer' => 'Menu w stopce'
		));
		
		
	}

	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Header Settings',
			'menu_title'	=> 'Header',
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Footer Settings',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'theme-general-settings',
		));
		
	}

	add_theme_support( 'post-thumbnails'); 
	function custom_excerpt_length( $length ) {
		return 25;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	remove_filter( 'the_excerpt', 'wpautop' );
	
?>