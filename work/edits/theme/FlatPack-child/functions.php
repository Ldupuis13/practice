<?php

/* Enqueue parent CSS */
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// Add featured image support
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
add_theme_support('logo-image');

//enqueue style override for portfolio

add_action('wp_enqueue_scripts', 'mg_styles', 9999);
function mg_styles() {
	wp_register_style('mg-portfolio.css', get_stylesheet_directory_uri().'/mg-portfolio.css'  );
	wp_enqueue_style('mg-portfolio.css');
}

