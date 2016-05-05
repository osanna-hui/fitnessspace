<?php

/**
 * Enqueues scripts and styles.
 *
 * @since Fitness Space 1.0
 */
function fitnessspace_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'fitnessspace-fonts', fitnessspace_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Add Normalize
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '4.0.0' );

	// Add Bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );

	// Add Swiper
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper.min.css', array(), '3.3.1' );

	// Add Font Awesome
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.6.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'fitnessspace-style', get_stylesheet_uri() );

	// ADD MY STYLESHEET
	wp_enqueue_style( 'homestyle', get_template_directory_uri() . '/css/homestyle.css', array(), null );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'fitnessspace-ie', get_template_directory_uri() . '/css/ie.css', array( 'fitnessspace-style' ), '20160412' );
	wp_style_add_data( 'fitnessspace-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'fitnessspace-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'fitnessspace-style' ), '20160412' );
	wp_style_add_data( 'fitnessspace-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'fitnessspace-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'fitnessspace-style' ), '20160412' );
	wp_style_add_data( 'fitnessspace-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'fitnessspace-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'fitnessspace-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'fitnessspace-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160412', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'fitnessspace-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160412' );
	}

	wp_enqueue_script( 'fitnessspace-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160412', true );

	wp_enqueue_script( 'jquery-2x', get_template_directory_uri() . '/js/jquery-2.2.3.min.js', array(), null );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null );

	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), null );


	wp_enqueue_script( 'raccordion', get_template_directory_uri() . '/js/jquery.raccordion.js', array(), null );

	wp_enqueue_script( 'animation-easing', get_template_directory_uri() . '/js/jquery.animation.easing.js', array(), null );

	wp_enqueue_script( 'googlemap-script', 'https://maps.googleapis.com/maps/api/js', array( ), null );

	wp_localize_script( 'fitnessspace-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'fitnessspace' ),
		'collapse' => __( 'collapse child menu', 'fitnessspace' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'fitnessspace_scripts' );

?>