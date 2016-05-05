<?php
	//require get_template_directory() . '/inc/custom-color.php';

function fitnessspace_custom_header_and_background() {
/*	$color_scheme             = fitnessspace_get_color_scheme();
	$default_background_color = trim( $color_scheme[0], '#' );
	$default_text_color       = trim( $color_scheme[3], '#' );
	*/
	add_theme_support( 'custom-header', apply_filters( 'fitnessspace_custom_header_args', array(
		'default-text-color'     => '#ffffff',
		'width'                  => 1200,
		'height'                 => 55,
		'flex-height'            => true,
		'wp-head-callback'       => 'fitnessspace_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'fitnessspace_custom_header_and_background' );
if ( ! function_exists( 'fitnessspace_header_style' ) ) :
function fitnessspace_header_style() {
	if ( display_header_text() ) {
		return;
	}
	?>
	<style type="text/css" id="fitnessspace-header-css">
		.site-branding {
			margin: 0 auto 0 0;
		}
		.site-branding .site-title,
		.site-description {
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
	</style>
	<?php
}
endif; // fitnessspace_header_style

function fitnessspace_customize_partial_blogname() {
	bloginfo( 'name' );
}
function fitnessspace_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


?>