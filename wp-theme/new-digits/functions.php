<?php
/**
 * Functies en instellingen van het New Digits thema.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function new_digits_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Hoofdmenu', 'new-digits' ),
		)
	);
}
add_action( 'after_setup_theme', 'new_digits_setup' );

function new_digits_scripts() {
	wp_enqueue_style(
		'new-digits-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'new_digits_scripts' );
