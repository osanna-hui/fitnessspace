<?php

if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'fitnessspace_setup' ) ) :

function fitnessspace_setup() {

	load_theme_textdomain( 'fitnessspace', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo', array(
		'height'      => 140,
		'width'       => 240,
		'flex-height' => true,
	) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'fitnessspace' ),
		'landing' => __( 'Landing Menu', 'fitnessspace' ),
		'social'  => __( 'Social Links Menu', 'fitnessspace' ),
		'footer'  => __( 'Footer Links Menu', 'fitnessspace' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', fitnessspace_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // fitnessspace_setup
add_action( 'after_setup_theme', 'fitnessspace_setup' );

/**
 * Enqueue styles and scripts.
 */
require get_template_directory() . '/inc/lib/enqueue.php';

/**
 * Fitness Space Core Functions.
 */
require get_template_directory() . '/inc/lib/core-functions.php';

/**
 * Fitness Space Metaboxes.
 */
//require get_template_directory() . '/inc/metaboxes.php';

/**
 * Defaults additions.
 */
require get_template_directory() . '/inc/lib/defaults.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

?>
