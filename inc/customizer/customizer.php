<?php

	require (get_template_directory() . '/inc/customizer/setting-header.php');

function fitnessspace_customize_register( $wp_customize ) {



//******************** ADD PANELS ********************//

	$wp_customize->add_panel( 'front_panel', array(
		'priority' => 1,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Front Page', 'fitnessspace' ),
	) );



//******************** ADD SECTIONS ********************//

	$wp_customize->add_section('slider_section', array(
		'title'         => __('Landing Section', 'fitnessspace'),
		'description'   => __('This is where you can choose to have an image slider or a video. You can have up to four images in the image slider.'),
		'priority'      => 10,	
		'panel'         => 'front_panel',
	));



//******************** ADD SETTINGS AND CONTROLS ********************//

	//require (get_template_directory() . '/inc/setting-color.php');
	require (get_template_directory() . '/inc/customizer/setting-frontpage.php');


}
add_action( 'customize_register', 'fitnessspace_customize_register' );


//==========================ENQEUE CSS & JS FILES===============================

function fitnessspace_live_preview(){
	wp_enqueue_script(  'fitnessspace-live', get_template_directory_uri().'/js/customize-preview.js',array( 'jquery','customize-preview' ),true);
}
add_action( 'customize_preview_init', 'fitnessspace_live_preview' );

function fitnessspace_customizer_enqueue(){
	wp_enqueue_style( 'fitnessspace-customizer-css', get_template_directory_uri().'/inc/customizer/customizer.css');

	wp_enqueue_script(  'fitnessspace-customizer-js', get_template_directory_uri().'/inc/customizer/customizer.js');

}
add_action( 'customize_controls_enqueue_scripts', 'fitnessspace_customizer_enqueue' );

?>