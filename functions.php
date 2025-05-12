<?php
// Wsparcie dla WooCommerce
add_action( 'after_setup_theme', function(){
    add_theme_support( 'woocommerce' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menu( 'primary', 'Menu Główne' );
});

// Ładowanie stylów i skryptów
add_action( 'wp_enqueue_scripts', function(){
    wp_enqueue_style( 'my-shop-style', get_stylesheet_uri() );
    wp_enqueue_script( 'my-shop-main', get_template_directory_uri() . '/assets/js/main.js', [], null, true );
});
