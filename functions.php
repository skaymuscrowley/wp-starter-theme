<?php

// ========================================
// Enable post thumbnails
// ========================================

// add_theme_support('post-thumbnails');

// ========================================
// Add custom image sizes
// ========================================

// add_image_size( 'custom-size', 0, 0 );

// ========================================
// Add custom logo option
// ========================================

// add_theme_support( 'custom-logo', array(
//     'height'      => 100,
//     'width'       => 400,
//     'flex-height' => true,
//     'flex-width'  => true,
//     'header-text' => array( 'site-title', 'site-description' ),
// ) );

// ========================================
// Register custom menus
// ========================================

// add_action( 'after_setup_theme', 'register_custom_nav_menus' );
// function register_custom_nav_menus() {
// 	register_nav_menus( array(
// 		'primary_nav' => 'Primary Navigation',
// 		'footer_nav' => 'Footer Navigation',
// 	) );
// }

// ========================================
// Add custom post types
// ========================================

// add_action( 'init', 'codex_book_init' );
// function codex_book_init() {
// 	$labels = array(
// 		'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),
// 		'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),
// 		'menu_name'          => _x( 'Books', 'admin menu', 'your-plugin-textdomain' ),
// 		'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),
// 		'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
// 		'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),
// 		'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),
// 		'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),
// 		'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),
// 		'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),
// 		'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),
// 		'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
// 		'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
// 		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
// 	);
// 	$args = array(
// 		'labels'             => $labels,
// 		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => array( 'slug' => 'book' ),
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => null,
// 		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
// 	);
// 	register_post_type( 'book', $args );
// }