<?php

if ( ! function_exists( 'hw_block_theme_experiments_support' ) ) :
	function hw_block_theme_experiments_support()  {

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
	add_action( 'after_setup_theme', 'hw_block_theme_experiments_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function hw_block_theme_experiments_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'hw-block-theme-experiments-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'hw_block_theme_experiments_scripts' );
