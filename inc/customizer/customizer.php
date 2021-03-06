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

	$wp_customize->add_panel( 'contact_panel', array(
		'priority' => 2,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Contact Information', 'fitnessspace' ),
	    'description' => __( 'Information within this panel will be displayed in the Home Page Contact Section', 'fitnessspace' ),
	) );


//******************** ADD SECTIONS ********************//

	$wp_customize->add_section('slider_section', array(
		'title'         => __('Slider & Video Section', 'fitnessspace'),
		'description'   => __('This is where you can choose to have an image slider or a video. You can have up to four images in the image slider.'),
		'priority'      => 10,	
		'panel'         => 'front_panel',
	));

	$wp_customize->add_section('about_section', array(
		'title'         => __('About Section', 'fitnessspace'),
		'description'   => __('A short description about your company.'),
		'priority'      => 11,	
		'panel'         => 'front_panel',
	));

	$wp_customize->add_section('classes_section', array(
		'title'         => __('Classes Section', 'fitnessspace'),
		'description'   => __('This is where you can showcase some of your classes. (You can display up to a maximum of four classes).'),
		'priority'      => 12,	
		'panel'         => 'front_panel',
	));

	$wp_customize->add_section('features_section', array(
		'title'         => __('Features Section', 'fitnessspace'),
		'description'   => __('This is where you can showcase some of your features.'),
		'priority'      => 13,	
		'panel'         => 'front_panel',
	));

	$wp_customize->add_section('trainers_section', array(
		'title'         => __('Trainers Section', 'fitnessspace'),
		'description'   => __('This is where you can showcase your best trainers.'),
		'priority'      => 14,	
		'panel'         => 'front_panel',
	));

	$wp_customize->add_section('pricing_section', array(
		'title'         => __('Pricing Section', 'fitnessspace'),
		'description'   => __('This is where you can display your primary pricing package.'),
		'priority'      => 15,	
		'panel'         => 'front_panel',
	));

	$wp_customize->add_section('blog_section', array(
		'title'         => __('Blog Section', 'fitnessspace'),
		'description'   => __('This is where you can display you blog feeds.'),
		'priority'      => 16,	
		'panel'         => 'front_panel',
	));

	$wp_customize->add_section('cta_section', array(
		'title'         => __('Call To Action Section', 'fitnessspace'),
		'description'   => __('This is where you can display your main Call To Action.'),
		'priority'      => 17,	
		'panel'         => 'front_panel',
	));

	$wp_customize->add_section('testimonials_section', array(
		'title'         => __('Testimonials Section', 'fitnessspace'),
		'description'   => __('This is where you can display some testimonials.'),
		'priority'      => 18,	
		'panel'         => 'front_panel',
	));

/*	$wp_customize->add_section('contact_section', array(
		'title'         => __('Contact Section', 'fitnessspace'),
		'description'   => __('This is where you can edit your contact information.'),
		'priority'      => 19,	
		'panel'         => 'front_panel',
	));*/

	$wp_customize->add_section('location_section', array(
		'title'         => __('Location', 'fitnessspace'),
		'priority'      => 20,	
		'panel'         => 'contact_panel',
		'description' => __( 'Information within this panel will be displayed in the Home Page Contact Section', 'fitnessspace' ),
	));

	$wp_customize->add_section('hours_section', array(
		'title'         => __('Hours', 'fitnessspace'),
		'priority'      => 21,	
		'panel'         => 'contact_panel',
	 	'description' => __( 'Information within this panel will be displayed in the Home Page Contact Section', 'fitnessspace' ),
	));

	$wp_customize->add_section('methods_section', array(
		'title'         => __('Contact Methods', 'fitnessspace'),
		'priority'      => 22,	
		'panel'         => 'contact_panel',
		'description' => __( 'Information within this panel will be displayed in the Home Page Contact Section', 'fitnessspace' ),
	));

	$wp_customize->add_section('forms_section', array(
		'title'         => __('Newsletter and Contact Forms', 'fitnessspace'),
		'priority'      => 23,	
		'panel'         => 'contact_panel',
		'description' => __( 'Information within this panel will be displayed in the Home Page Contact Section', 'fitnessspace' ),
	));


//******************** ADD SETTINGS AND CONTROLS ********************//

	//require (get_template_directory() . '/inc/setting-color.php');
	require (get_template_directory() . '/inc/customizer/setting-frontpage.php');

	require (get_template_directory() . '/inc/customizer/setting-contact.php');

}
add_action( 'customize_register', 'fitnessspace_customize_register' );


//******************** ENQEUE CSS & JS FILES ********************//


function fitnessspace_customizer_enqueue(){
	wp_enqueue_style( 'fitnessspace-customizer-css', get_template_directory_uri().'/inc/customizer/customizer.css');

	wp_enqueue_script(  'fitnessspace-customizer-js', get_template_directory_uri().'/inc/customizer/customizer.js');

}
add_action( 'customize_controls_enqueue_scripts', 'fitnessspace_customizer_enqueue' );

function fitnessspace_live_preview(){
	wp_enqueue_script(  'fitnessspace-live', get_template_directory_uri().'/js/customize-preview.js',array( 'jquery','customize-preview' ),true);
}
add_action( 'customize_preview_init', 'fitnessspace_live_preview' );

?>