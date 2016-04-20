<?php

function fitnessspace_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', 'fitnessspace_upgrade_notice' );
}
add_action( 'after_switch_theme', 'fitnessspace_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Fitness Space on WordPress versions prior to 4.4.
 *
 * @since Fitness Space 1.0
 *
 * @global string $wp_version WordPress version.
 */
function fitnessspace_upgrade_notice() {
	$message = sprintf( __( 'Fitness Space requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'fitnessspace' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.4.
 *
 * @since Fitness Space 1.0
 *
 * @global string $wp_version WordPress version.
 */
function fitnessspace_customize() {
	wp_die( sprintf( __( 'Fitness Space requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'fitnessspace' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'fitnessspace_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.4.
 *
 * @since Fitness Space 1.0
 *
 * @global string $wp_version WordPress version.
 */
function fitnessspace_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Fitness Space requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'fitnessspace' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'fitnessspace_preview' );
