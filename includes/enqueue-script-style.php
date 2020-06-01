<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'wp_enqueue_scripts', 'woobase_scripts' );
function woobase_scripts() {
	wp_enqueue_style( 'woobase-style', get_stylesheet_uri() );
	

}

add_action( 'wp_enqueue_scripts', 'woobase_styles' );
function woobase_styles() {
	
	wp_enqueue_script( 'woobase-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'woobase-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
