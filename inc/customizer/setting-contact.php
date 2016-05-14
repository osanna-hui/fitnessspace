<?php
//*********************** CONTACT SECTION ***********************//

// Location - Address
$wp_customize->add_setting( 'fitnessspace[contact_text_id][address]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'contact_address',array(
					'label'       => __( 'Address', 'fitnessspace' ),
					'section'     => 'location_section',
					'type'        => 'textarea',
					'settings'    => 'fitnessspace[contact_text_id][address]',
						
					)
			);

// Location - City
$wp_customize->add_setting( 'fitnessspace[contact_text_id][city]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'contact_city',array(
					'label'       => __( 'City', 'fitnessspace' ),
					'section'     => 'location_section',
					'settings'    => 'fitnessspace[contact_text_id][city]',
						
					)
			);

// Location - Province/State
$wp_customize->add_setting( 'fitnessspace[contact_text_id][prov]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'contact_province_state',array(
					'label'       => __( 'Province / State', 'fitnessspace' ),
					'section'     => 'location_section',
					'settings'    => 'fitnessspace[contact_text_id][prov]',
						
					)
			);

// Hours - Line 01
$wp_customize->add_setting( 'fitnessspace[contact_text_id][hours01]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'contact_hours01',array(
					'label'       => __( 'Hours (Weekdays)', 'fitnessspace' ),
					'section'     => 'hours_section',
					'type'        => 'textarea',
					'settings'    => 'fitnessspace[contact_text_id][hours01]',
						
					)
			);

// Hours - Line 02
$wp_customize->add_setting( 'fitnessspace[contact_text_id][hours02]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);

			$wp_customize->add_control( 'contact_hours02',array(
					'label'       => __( 'Hours (Weekends)', 'fitnessspace' ),
					'section'     => 'hours_section',
					'type'        => 'textarea',
					'settings'    => 'fitnessspace[contact_text_id][hours02]',
						
					)
			);

// Contact Methods - Email
$wp_customize->add_setting( 'fitnessspace[contact_text_id][email]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);
			$wp_customize->add_control( 'contact_email',array(
					'label'       => __( 'Email', 'fitnessspace' ),
					'section'     => 'methods_section',
					'settings'    => 'fitnessspace[contact_text_id][email]',
						
					)
			);

// Contact Methods - Phone
$wp_customize->add_setting( 'fitnessspace[contact_text_id][phone]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);
			$wp_customize->add_control( 'contact_phone',array(
					'label'       => __( 'Phone', 'fitnessspace' ),
					'section'     => 'methods_section',
					'settings'    => 'fitnessspace[contact_text_id][phone]',
						
					)
			);

// Newsletter Signup
$wp_customize->add_setting( 'fitnessspace[newsletter][select]',array( 
	'type' => 'option',
	'default' => 'Yes',
	)
);
			$wp_customize->add_control( 'newsletter_select',array(
					'type'        => 'select',
					'label'       => __( 'Do you want to display a newsletter signup form?', 'fitnessspace' ),
					'section'     => 'forms_section',
					'choices' => array(
						'Yes'=> __('Yes', 'fitnessspace'),
						'No'=>__('No', 'fitnessspace'),
						),
					'settings'    => 'fitnessspace[newsletter][select]',
						
					)
			);

// Newsletter Shortcode
$wp_customize->add_setting( 'fitnessspace[newsletter][shortcode]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);
			$wp_customize->add_control( 'newsletter_shortcode',array(
					'label'       => __( 'Newsletter shortcode', 'fitnessspace' ),
					'type'        => 'textarea',
					'section'     => 'forms_section',
					'settings'    => 'fitnessspace[newsletter][shortcode]',
						
					)
			);

// Contact Form Signup
$wp_customize->add_setting( 'fitnessspace[contactform][select]',array( 
	'type' => 'option',
	'default' => 'Yes',
	)
);
			$wp_customize->add_control( 'contactform_select',array(
					'type'        => 'select',
					'label'       => __( 'Do you want to display a contact form signup form?', 'fitnessspace' ),
					'section'     => 'forms_section',
					'choices' => array(
						'Yes'=> __('Yes', 'fitnessspace'),
						'No'=>__('No', 'fitnessspace'),
						),
					'settings'    => 'fitnessspace[contactform][select]',
						
					)
			);

// Contact Form Shortcode
$wp_customize->add_setting( 'fitnessspace[contactform][shortcode]',array( 
	'type' => 'option',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
	)
);
			$wp_customize->add_control( 'contactform_shortcode',array(
					'label'       => __( 'Contact Form shortcode', 'fitnessspace' ),
					'type'        => 'textarea',
					'section'     => 'forms_section',
					'settings'    => 'fitnessspace[contactform][shortcode]',
						
					)
			);

?>