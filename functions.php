<?php

// Add and remove scripts and styles

function remove_unwanted_scripts_and_styles_at_wp_enqueue_scripts() {
	
	// Remove scripts
	// Replace the “portion” part of any handle with the name of your Underscores parent theme
	wp_dequeue_script('portion-navigation');
	wp_deregister_script('portion-navigation');

	// Remove styles
	wp_dequeue_style('portion-style');
	wp_deregister_style('portion-style');
	wp_dequeue_style( 'wp-block-library' );
	wp_deregister_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_deregister_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-block-style' );
	wp_deregister_style( 'wc-block-style' );
	wp_dequeue_style( 'global-styles' );
	wp_deregister_style( 'global-styles' );

	// Add child theme stylesheet
	wp_enqueue_style( 'underscores-child-style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts','remove_unwanted_scripts_and_styles_at_wp_enqueue_scripts',100);


// Remove wpemoji script and styles

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


// Remove WP-inserted svgs at start of body

remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );


?>