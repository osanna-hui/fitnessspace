<?php

//*********************** SLIDER TYPE SECTION ***********************//

//Slider Type
$wp_customize->add_setting( 'fitnessspace[slider_type_id]', array(
		'type' => 'option',
        'default' => 'ImageSlider',
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


//*********************** IMAGE SLIDER & VIDEO ***********************//


// Slider Logo
$wp_customize->add_setting( 'fitnessspace[slider_image_id][url00]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_id00',array(
					'label'       => __( 'Slider Logo', 'fitnessspace' ),
					'section'     => 'slider_section',
					'settings'    => 'fitnessspace[slider_image_id][url00]'
						)
					)
			);


// Title Text
$wp_customize->add_setting( 'fitnessspace[slider_text][title_text]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'slider_title_text',array(
					'label'       => __( 'Slider Title Text', 'fitnessspace' ),
					'section'     => 'slider_section',
					'settings'    => 'fitnessspace[slider_text][title_text]',
					//'type'        => 'textarea',
						
					)
			);


// Button Text
$wp_customize->add_setting( 'fitnessspace[slider_text][button_text]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'slider_button_text',array(
					'label'       => __( 'Slider Button Text', 'fitnessspace' ),
					'section'     => 'slider_section',
					'settings'    => 'fitnessspace[slider_text][button_text]',
					//'type'        => 'textarea',
						
					)
			);


// Slider Image 01
$wp_customize->add_setting( 'fitnessspace[slider_image_id][url01]',array( 
	'type' => 'option',
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
	//'default' => ''.get_template_directory_uri().'/img/unsplash_slider04.jpeg',
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


// Video
$wp_customize->add_setting( 'fitnessspace[video_id][url]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'video_id',array(
					'label'       => __( 'Video (.mp4)', 'fitnessspace' ),
					'section'     => 'slider_section',
					'settings'    => 'fitnessspace[video_id][url]'
						)
					)
			);



//*********************** ABOUT SECTION ***********************//


// About Title Text
$wp_customize->add_setting( 'fitnessspace[about_title_text]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'about_title_text',array(
					'label'       => __( 'About Title Text', 'fitnessspace' ),
					'section'     => 'about_section',
					'settings'    => 'fitnessspace[about_title_text]',
						
					)
			);


// About Description Text
$wp_customize->add_setting( 'fitnessspace[about_desc_text]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'about_desc_text',array(
					'label'       => __( 'About Description Text', 'fitnessspace' ),
					'section'     => 'about_section',
					'settings'    => 'fitnessspace[about_desc_text]',						
					)
			);


//*********************** CLASSES SECTION ***********************//


// Class 01 Text
$wp_customize->add_setting( 'fitnessspace[classes_text_id][title01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'class_01_text',array(
					'label'       => __( 'Class 01 Title', 'fitnessspace' ),
					'section'     => 'classes_section',
					'settings'    => 'fitnessspace[classes_text_id][title01]',
						
					)
			);

// Class 01 URL
$wp_customize->add_setting( 'fitnessspace[classes_text_id][link01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'class_01_link',array(
					'label'       => __( 'Class 01 Link', 'fitnessspace' ),
					'section'     => 'classes_section',
					'settings'    => 'fitnessspace[classes_text_id][link01]',
						
					)
			);

// Class 01 Image
$wp_customize->add_setting( 'fitnessspace[classes_image_id][url01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'class_01_image',array(
					'label'       => __( 'Class 01 Image', 'fitnessspace' ),
					'section'     => 'classes_section',
					'settings'    => 'fitnessspace[classes_image_id][url01]'
						)
					)
			);


// Class 02 Text
$wp_customize->add_setting( 'fitnessspace[classes_text_id][title02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'class_02_text',array(
					'label'       => __( 'Class 02 Title', 'fitnessspace' ),
					'section'     => 'classes_section',
					'settings'    => 'fitnessspace[classes_text_id][title02]',
						
					)
			);

// Class 02 URL
$wp_customize->add_setting( 'fitnessspace[classes_text_id][link02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'class_02_link',array(
					'label'       => __( 'Class 02 Link', 'fitnessspace' ),
					'section'     => 'classes_section',
					'settings'    => 'fitnessspace[classes_text_id][link02]',
						
					)
			);

// Class 02 Image
$wp_customize->add_setting( 'fitnessspace[classes_image_id][url02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'class_02_image',array(
					'label'       => __( 'Class 02 Image', 'fitnessspace' ),
					'section'     => 'classes_section',
					'settings'    => 'fitnessspace[classes_image_id][url02]'
						)
					)
			);



// Class 03 Text
$wp_customize->add_setting( 'fitnessspace[classes_text_id][title03]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'class_03_text',array(
					'label'       => __( 'Class 03 Title', 'fitnessspace' ),
					'section'     => 'classes_section',
					'settings'    => 'fitnessspace[classes_text_id][title03]',
						
					)
			);

// Class 03 URL
$wp_customize->add_setting( 'fitnessspace[classes_text_id][link03]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'class_03_link',array(
					'label'       => __( 'Class 03 Link', 'fitnessspace' ),
					'section'     => 'classes_section',
					'settings'    => 'fitnessspace[classes_text_id][link03]',
						
					)
			);

// Class 03 Image
$wp_customize->add_setting( 'fitnessspace[classes_image_id][url03]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'class_03_image',array(
					'label'       => __( 'Class 03 Image', 'fitnessspace' ),
					'section'     => 'classes_section',
					'settings'    => 'fitnessspace[classes_image_id][url03]'
						)
					)
			);


// Class 04 Text
$wp_customize->add_setting( 'fitnessspace[classes_text_id][title04]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'class_04_text',array(
					'label'       => __( 'Class 04 Title', 'fitnessspace' ),
					'section'     => 'classes_section',
					'settings'    => 'fitnessspace[classes_text_id][title04]',
						
					)
			);

// Class 04 URL
$wp_customize->add_setting( 'fitnessspace[classes_text_id][link04]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'class_04_link',array(
					'label'       => __( 'Class 04 Link', 'fitnessspace' ),
					'section'     => 'classes_section',
					'settings'    => 'fitnessspace[classes_text_id][link04]',
						
					)
			);

// Class 04 Image
$wp_customize->add_setting( 'fitnessspace[classes_image_id][url04]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'class_04_image',array(
					'label'       => __( 'Class 04 Image', 'fitnessspace' ),
					'section'     => 'classes_section',
					'settings'    => 'fitnessspace[classes_image_id][url04]'
						)
					)
			);



//*********************** FEATURES SECTION ***********************//


// Feature 01 Text
$wp_customize->add_setting( 'fitnessspace[features_text_id][title01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'feature_01_title',array(
					'label'       => __( 'Feature 01 Title', 'fitnessspace' ),
					'section'     => 'features_section',
					'settings'    => 'fitnessspace[features_text_id][title01]',
						
					)
			);

// Feature 01 Description
$wp_customize->add_setting( 'fitnessspace[features_text_id][desc01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'feature_01_desc',array(
					'label'       => __( 'Feature 01 Description', 'fitnessspace' ),
					'section'     => 'features_section',
					'type'        => 'textarea',
					'settings'    => 'fitnessspace[features_text_id][desc01]',
						
					)
			);

// Feature 01 Icon
$wp_customize->add_setting( 'fitnessspace[features_text_id][icon01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'feature_01_icon',array(
					'label'       => __( 'Feature 01 Icon (ex. fa-pencil)', 'fitnessspace' ),
					'section'     => 'features_section',
					'settings'    => 'fitnessspace[features_text_id][icon01]',
						
					)
			);


// Feature 02 Text
$wp_customize->add_setting( 'fitnessspace[features_text_id][title02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'feature_02_text',array(
					'label'       => __( 'Feature 02 Title', 'fitnessspace' ),
					'section'     => 'features_section',
					'settings'    => 'fitnessspace[features_text_id][title02]',
						
					)
			);


// Feature 02 Description
$wp_customize->add_setting( 'fitnessspace[features_text_id][desc02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'feature_02_desc',array(
					'label'       => __( 'Feature 02 Description', 'fitnessspace' ),
					'section'     => 'features_section',
					'type'        => 'textarea',
					'settings'    => 'fitnessspace[features_text_id][desc02]',
						
					)
			);

// Feature 02 Icon
$wp_customize->add_setting( 'fitnessspace[features_text_id][icon02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'feature_02_icon',array(
					'label'       => __( 'Feature 02 Icon (ex. fa-pencil)', 'fitnessspace' ),
					'section'     => 'features_section',
					'settings'    => 'fitnessspace[features_text_id][icon02]',
						
					)
			);


// Feature 03 Text
$wp_customize->add_setting( 'fitnessspace[features_text_id][title03]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'feature_03_text',array(
					'label'       => __( 'Feature 03 Title', 'fitnessspace' ),
					'section'     => 'features_section',
					'settings'    => 'fitnessspace[features_text_id][title03]',
						
					)
			);


// Feature 03 Description
$wp_customize->add_setting( 'fitnessspace[features_text_id][desc03]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'feature_03_desc',array(
					'label'       => __( 'Feature 03 Description', 'fitnessspace' ),
					'section'     => 'features_section',
					'type'        => 'textarea',
					'settings'    => 'fitnessspace[features_text_id][desc03]',
						
					)
			);

// Feature 03 Icon
$wp_customize->add_setting( 'fitnessspace[features_text_id][icon03]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'feature_03_icon',array(
					'label'       => __( 'Feature 03 Icon (ex. fa-pencil)', 'fitnessspace' ),
					'section'     => 'features_section',
					'settings'    => 'fitnessspace[features_text_id][icon03]',
						
					)
			);

// Feature Button Text 01
$wp_customize->add_setting( 'fitnessspace[features_text_id][button01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'feature_button_01',array(
					'label'       => __( 'Feature Button 01 Text', 'fitnessspace' ),
					'section'     => 'features_section',
					'settings'    => 'fitnessspace[features_text_id][button01]',
						
					)
			);

// Feature Button Link 01
$wp_customize->add_setting( 'fitnessspace[features_text_id][link01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'feature_button_01_link',array(
					'label'       => __( 'Feature Button 01 Link', 'fitnessspace' ),
					'section'     => 'features_section',
					'settings'    => 'fitnessspace[features_text_id][link01]',
						
					)
			);

// Feature Button Text 02
$wp_customize->add_setting( 'fitnessspace[features_text_id][button02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'feature_button_02',array(
					'label'       => __( 'Feature Button 02 Text', 'fitnessspace' ),
					'section'     => 'features_section',
					'settings'    => 'fitnessspace[features_text_id][button02]',
						
					)
			);

// Feature Button Link 02
$wp_customize->add_setting( 'fitnessspace[features_text_id][link02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'feature_button_02_link',array(
					'label'       => __( 'Feature Button 02 Link', 'fitnessspace' ),
					'section'     => 'features_section',
					'settings'    => 'fitnessspace[features_text_id][link02]',
						
					)
			);



//*********************** TRAINERS SECTION ***********************//

// Trainer 01 Name
$wp_customize->add_setting( 'fitnessspace[trainers_text_id][name01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'trainer_01_name',array(
					'label'       => __( 'Trainer 01: Name', 'fitnessspace' ),
					'section'     => 'trainers_section',
					'settings'    => 'fitnessspace[trainers_text_id][name01]',
						
					)
			);

// Trainer 01 Position
$wp_customize->add_setting( 'fitnessspace[trainers_text_id][pos01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'trainer_01_pos',array(
					'label'       => __( 'Trainer 01: Position', 'fitnessspace' ),
					'section'     => 'trainers_section',
					'settings'    => 'fitnessspace[trainers_text_id][pos01]',
						
					)
			);

// Trainer 01 Link
$wp_customize->add_setting( 'fitnessspace[trainers_text_id][link01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'trainers_01_link',array(
					'label'       => __( 'Trainer 01: Link', 'fitnessspace' ),
					'section'     => 'trainers_section',
					'settings'    => 'fitnessspace[trainers_text_id][link01]',
						
					)
			);

// Trainer 01 Image
$wp_customize->add_setting( 'fitnessspace[trainers_image_id][url01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'trainer_01_image',array(
					'label'       => __( 'Trainer 01: Image (800px X 640px)', 'fitnessspace' ),
					'section'     => 'trainers_section',
					'settings'    => 'fitnessspace[trainers_image_id][url01]'
						)
					)
			);

// Trainer 02 Name
$wp_customize->add_setting( 'fitnessspace[trainers_text_id][name02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'trainer_02_name',array(
					'label'       => __( 'Trainer 02: Name', 'fitnessspace' ),
					'section'     => 'trainers_section',
					'settings'    => 'fitnessspace[trainers_text_id][name02]',
						
					)
			);

// Trainer 02 Position
$wp_customize->add_setting( 'fitnessspace[trainers_text_id][pos02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'trainer_02_pos',array(
					'label'       => __( 'Trainer 02: Position', 'fitnessspace' ),
					'section'     => 'trainers_section',
					'settings'    => 'fitnessspace[trainers_text_id][pos02]',
						
					)
			);

// Trainer 02 Link
$wp_customize->add_setting( 'fitnessspace[trainers_text_id][link02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'trainers_02_link',array(
					'label'       => __( 'Trainer 02: Link', 'fitnessspace' ),
					'section'     => 'trainers_section',
					'settings'    => 'fitnessspace[trainers_text_id][link02]',
						
					)
			);

// Trainer 02 Image
$wp_customize->add_setting( 'fitnessspace[trainers_image_id][url02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'trainer_02_image',array(
					'label'       => __( 'Trainer 02: Image (800px X 640px)', 'fitnessspace' ),
					'section'     => 'trainers_section',
					'settings'    => 'fitnessspace[trainers_image_id][url02]'
						)
					)
			);

// Trainer 03 Name
$wp_customize->add_setting( 'fitnessspace[trainers_text_id][name03]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'trainer_03_name',array(
					'label'       => __( 'Trainer 03: Name', 'fitnessspace' ),
					'section'     => 'trainers_section',
					'settings'    => 'fitnessspace[trainers_text_id][name03]',
						
					)
			);

// Trainer 03 Position
$wp_customize->add_setting( 'fitnessspace[trainers_text_id][pos03]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'trainer_03_pos',array(
					'label'       => __( 'Trainer 03: Position', 'fitnessspace' ),
					'section'     => 'trainers_section',
					'settings'    => 'fitnessspace[trainers_text_id][pos03]',
						
					)
			);

// Trainer 03 Link
$wp_customize->add_setting( 'fitnessspace[trainers_text_id][link03]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'trainers_03_link',array(
					'label'       => __( 'Trainer 03: Link', 'fitnessspace' ),
					'section'     => 'trainers_section',
					'settings'    => 'fitnessspace[trainers_text_id][link03]',
						
					)
			);

// Trainer 03 Image
$wp_customize->add_setting( 'fitnessspace[trainers_image_id][url03]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'trainer_03_image',array(
					'label'       => __( 'Trainer 03: Image (800px X 640px)', 'fitnessspace' ),
					'section'     => 'trainers_section',
					'settings'    => 'fitnessspace[trainers_image_id][url03]'
						)
					)
			);



//*********************** PRICING SECTION ***********************//


// Pricing Background Image 
$wp_customize->add_setting( 'fitnessspace[pricing_image_id][url01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pricing_image_id_01',array(
					'label'       => __( 'Pricing Section Background Image', 'fitnessspace' ),
					'section'     => 'pricing_section',
					'settings'    => 'fitnessspace[pricing_image_id][url01]'
						)
					)
			);


// Pricing Text Line 01
$wp_customize->add_setting( 'fitnessspace[pricing_text_id][text01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'pricing_text_01',array(
					'label'       => __( 'Pricing Package Text', 'fitnessspace' ),
					'section'     => 'pricing_section',
					'settings'    => 'fitnessspace[pricing_text_id][text01]',
					
						
					)
			);


// Pricing Text Line 02
$wp_customize->add_setting( 'fitnessspace[pricing_text_id][text02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'pricing_text_02',array(
					'label'       => __( 'Pricing Amount Text', 'fitnessspace' ),
					'section'     => 'pricing_section',
					'settings'    => 'fitnessspace[pricing_text_id][text02]',
					
						
					)
			);


// Pricing Text Line 03
$wp_customize->add_setting( 'fitnessspace[pricing_text_id][text03]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'pricing_text_03',array(
					'label'       => __( 'Pricing Duration Text', 'fitnessspace' ),
					'section'     => 'pricing_section',
					'settings'    => 'fitnessspace[pricing_text_id][text03]',
					
						
					)
			);

// Pricing Link 01
$wp_customize->add_setting( 'fitnessspace[pricing_text_id][link01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'pricing_link_01',array(
					'label'       => __( 'Pricing Link for Top Pricing Section', 'fitnessspace' ),
					'section'     => 'pricing_section',
					'settings'    => 'fitnessspace[pricing_text_id][link01]',
					
						
					)
			);

// Pricing Text Line 04
$wp_customize->add_setting( 'fitnessspace[pricing_text_id][text04]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'pricing_text_04',array(
					'label'       => __( 'Pricing Alternative Text', 'fitnessspace' ),
					'section'     => 'pricing_section',
					'settings'    => 'fitnessspace[pricing_text_id][text04]',
					
						
					)
			);

// Pricing Link 02
$wp_customize->add_setting( 'fitnessspace[pricing_text_id][link02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'pricing_link_02',array(
					'label'       => __( 'Pricing Link for Bottom Pricing Section', 'fitnessspace' ),
					'section'     => 'pricing_section',
					'settings'    => 'fitnessspace[pricing_text_id][link02]',
					
						
					)
			);



//*********************** BLOG SECTION ***********************//

//Slider Type
$wp_customize->add_setting( 'fitnessspace[blog_cat_id]', array(
		'type' => 'option',
        'default' => 'all_posts',
) );
 
			$wp_customize->add_control('blog_cat_select', array(
					'type' => 'select',
					'label' => __('Blog Category','fitnessspace'),
					'description' => __('Choose the Blog Category you wish to display on the home page.','fitnessspace'),
					'section' => 'blog_section',
					'choices' => array(
						'all_posts'=> __('All Blog Posts', 'fitnessspace'),
						'no_posts'=>__('None', 'fitnessspace'),
						
					),
					'settings'    => 'fitnessspace[blog_cat_id]'
			) );

// Blog Button Text
$wp_customize->add_setting( 'fitnessspace[blog_text_id][text01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'blog_button_text',array(
					'label'       => __( 'Blog Button Text', 'fitnessspace' ),
					'section'     => 'blog_section',
					'settings'    => 'fitnessspace[blog_text_id][text01]',
					
						
					)
			);

// Blog Button Link
$wp_customize->add_setting( 'fitnessspace[blog_text_id][link01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'blog_button_link',array(
					'label'       => __( 'Blog Button Link', 'fitnessspace' ),
					'section'     => 'blog_section',
					'settings'    => 'fitnessspace[blog_text_id][link01]',
					
						
					)
			);


//*********************** CALL TO ACTION SECTION ***********************//

// Call to Action Background Image 
$wp_customize->add_setting( 'fitnessspace[cta_image_id][url01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cta_image_id_01',array(
					'label'       => __( 'Call To Action Section Background Image', 'fitnessspace' ),
					'section'     => 'cta_section',
					'settings'    => 'fitnessspace[cta_image_id][url01]'
						)
					)
			);


// Call To Action Title Text
$wp_customize->add_setting( 'fitnessspace[cta_text_id][text01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'cta_text_01',array(
					'label'       => __( 'Call To Action Text', 'fitnessspace' ),
					'section'     => 'cta_section',
					'settings'    => 'fitnessspace[cta_text_id][text01]',
					)
			);

// Call To Action Button Text
$wp_customize->add_setting( 'fitnessspace[cta_button_id][text01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'cta_button_text',array(
					'label'       => __( 'Call To Action Button Text', 'fitnessspace' ),
					'section'     => 'cta_section',
					'settings'    => 'fitnessspace[cta_button_id][text01]',
					)
			);

// Call To Action Button Link
$wp_customize->add_setting( 'fitnessspace[cta_button_id][link01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'cta_button_link',array(
					'label'       => __( 'Call To Action Button Link', 'fitnessspace' ),
					'section'     => 'cta_section',
					'settings'    => 'fitnessspace[cta_button_id][link01]',
					)
			);



//*********************** TESTIMONIALS SECTION ***********************//

// Testimonials 01 Name
$wp_customize->add_setting( 'fitnessspace[testimonials_text_id][name01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'testimonial_01_name',array(
					'label'       => __( 'Testimonials 01: Author Name', 'fitnessspace' ),
					'section'     => 'testimonials_section',
					'settings'    => 'fitnessspace[testimonials_text_id][name01]',
						
					)
			);

// Testimonials 01 Text
$wp_customize->add_setting( 'fitnessspace[testimonials_text_id][text01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'testimonial_01_text',array(
					'label'       => __( 'Testimonial 01: Testimonial Text', 'fitnessspace' ),
					'type'        => 'textarea',
					'section'     => 'testimonials_section',
					'settings'    => 'fitnessspace[testimonials_text_id][text01]',
						
					)
			);


// Testimonials 02 Name
$wp_customize->add_setting( 'fitnessspace[testimonials_text_id][name02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'testimonial_02_name',array(
					'label'       => __( 'Testimonials 02: Author Name', 'fitnessspace' ),
					'section'     => 'testimonials_section',
					'settings'    => 'fitnessspace[testimonials_text_id][name02]',
						
					)
			);

// Testimonials 02 Text
$wp_customize->add_setting( 'fitnessspace[testimonials_text_id][text02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'testimonial_02_text',array(
					'label'       => __( 'Testimonial 02: Testimonial Text', 'fitnessspace' ),
					'type'        => 'textarea',
					'section'     => 'testimonials_section',
					'settings'    => 'fitnessspace[testimonials_text_id][text02]',
						
					)
			);


// Testimonials 03 Name
$wp_customize->add_setting( 'fitnessspace[testimonials_text_id][name03]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'testimonial_03_name',array(
					'label'       => __( 'Testimonials 03: Author Name', 'fitnessspace' ),
					'section'     => 'testimonials_section',
					'settings'    => 'fitnessspace[testimonials_text_id][name03]',
						
					)
			);

// Testimonials 03 Text
$wp_customize->add_setting( 'fitnessspace[testimonials_text_id][text03]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'testimonial_03_text',array(
					'label'       => __( 'Testimonial 03: Testimonial Text', 'fitnessspace' ),
					'type'        => 'textarea',
					'section'     => 'testimonials_section',
					'settings'    => 'fitnessspace[testimonials_text_id][text03]',
						
					)
			);


// Testimonials 04 Name
$wp_customize->add_setting( 'fitnessspace[testimonials_text_id][name04]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'testimonial_04_name',array(
					'label'       => __( 'Testimonials 04: Author Name', 'fitnessspace' ),
					'section'     => 'testimonials_section',
					'settings'    => 'fitnessspace[testimonials_text_id][name04]',
						
					)
			);

// Testimonials 04 Text
$wp_customize->add_setting( 'fitnessspace[testimonials_text_id][text04]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'testimonial_04_text',array(
					'label'       => __( 'Testimonial 04: Testimonial Text', 'fitnessspace' ),
					'type'        => 'textarea',
					'section'     => 'testimonials_section',
					'settings'    => 'fitnessspace[testimonials_text_id][text04]',
						
					)
			);





?>