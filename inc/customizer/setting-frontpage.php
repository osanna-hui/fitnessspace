<?php

//----------------------SLIDER TYPE SECTION----------------------------------

//SLIDER TYPE
$wp_customize->add_setting( 'fitnessspace[slider_type_id]', array(
		'type' => 'option',
        'default' => 'static',
) );
 
			$wp_customize->add_control('slider_type_id', array(
					'type' => 'select',
					'label' => __('Slider Type *','fitnessspace'),
					'description' => __('Choose the Slider type and configure your images from Slider Settings below.','fitnessspace'),
					'section' => 'slider_section',
					'choices' => array(
						'static'=> __('Static Image', 'fitnessspace'),
						'ImageSlider'=>__('Image Slider', 'fitnessspace'),
						'video'=>__('Video', 'fitnessspace')
					),
					'settings'    => 'fitnessspace[slider_type_id]'
			) );


//----------------------STATIC SLIDER SECTION----------------------------------


// Slider Image 01
$wp_customize->add_setting( 'fitnessspace[slider_image_id][url01]',array( 
	'type' => 'option',
	'default' => ''.get_template_directory_uri().'/img/unsplash_slider04.jpeg',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_id01',array(
					'label'       => __( 'Slider Image 01', 'fitnessspace' ),
					'section'     => 'slider_section',
					'settings'    => 'fitnessspace[slider_image_id][url01]'
						)
					)
			);


// Slider Image 02
$wp_customize->add_setting( 'fitnessspace[slider_image_id][url02]',array( 
	'type' => 'option',
	'default' => ''.get_template_directory_uri().'/img/unsplash_slider02.jpeg',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_id02',array(
					'label'       => __( 'Slider Image 02', 'fitnessspace' ),
					'section'     => 'slider_section',
					'settings'    => 'fitnessspace[slider_image_id][url02]'
						)
					)
			);


// Slider Image 03
$wp_customize->add_setting( 'fitnessspace[slider_image_id][url03]',array( 
	'type' => 'option',
	'default' => ''.get_template_directory_uri().'/img/unsplash_slider03.jpeg',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_id03',array(
					'label'       => __( 'Slider Image 03', 'fitnessspace' ),
					'section'     => 'slider_section',
					'settings'    => 'fitnessspace[slider_image_id][url03]'
						)
					)
			);



// Slider Image 04
$wp_customize->add_setting( 'fitnessspace[slider_image_id][url04]',array( 
	'type' => 'option',
	'default' => ''.get_template_directory_uri().'/img/unsplash_slider04.jpeg',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_id04',array(
					'label'       => __( 'Slider Image 04', 'fitnessspace' ),
					'section'     => 'slider_section',
					'settings'    => 'fitnessspace[slider_image_id][url04]'
						)
					)
			);


//---------------SLIDER CALLBACK-------------------//
function fitnessspace_slider_static( $control ) {
    $layout_setting = $control->manager->get_setting('fitnessspace[slider_type_id]')->value();
     
    if ( $layout_setting == 'static' ) return true;
     
    return false;
}

?>