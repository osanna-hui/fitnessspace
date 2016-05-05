<?php	

$color_scheme = fitnessspace_get_color_scheme();
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector' => '.site-title a',
			'container_inclusive' => false,
			'render_callback' => 'fitnessspace_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector' => '.site-description',
			'container_inclusive' => false,
			'render_callback' => 'fitnessspace_customize_partial_blogdescription',
		) );
	}
	// Add color scheme setting and control.
	$wp_customize->add_setting( 'color_scheme', array(
		'default'           => 'default',
		'sanitize_callback' => 'fitnessspace_sanitize_color_scheme',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( 'color_scheme', array(
		'label'    => __( 'Base Color Scheme', 'fitnessspace' ),
		'section'  => 'colors',
		'type'     => 'select',
		'choices'  => fitnessspace_get_color_scheme_choices(),
		'priority' => 1,
	) );
	// Add page background color setting and control.
	$wp_customize->add_setting( 'page_background_color', array(
		'default'           => $color_scheme[1],
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'page_background_color', array(
		'label'       => __( 'Page Background Color', 'fitnessspace' ),
		'section'     => 'colors',
	) ) );
	// Remove the core header textcolor control, as it shares the main text color.
	$wp_customize->remove_control( 'header_textcolor' );
	// Add link color setting and control.
	$wp_customize->add_setting( 'link_color', array(
		'default'           => $color_scheme[2],
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label'       => __( 'Link Color', 'fitnessspace' ),
		'section'     => 'colors',
	) ) );
	// Add main text color setting and control.
	$wp_customize->add_setting( 'main_text_color', array(
		'default'           => $color_scheme[3],
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_text_color', array(
		'label'       => __( 'Main Text Color', 'fitnessspace' ),
		'section'     => 'colors',
	) ) );
	// Add secondary text color setting and control.
	$wp_customize->add_setting( 'secondary_text_color', array(
		'default'           => $color_scheme[4],
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_text_color', array(
		'label'       => __( 'Secondary Text Color', 'fitnessspace' ),
		'section'     => 'colors',
	) ) );
	// Add hover effect color setting and control.
	$wp_customize->add_setting( 'hover_filter_color', array(
		'default'           => $color_scheme[5],
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover_filter_color', array(
		'label'       => __( 'Hover Filter Color', 'fitnessspace' ),
		'section'     => 'colors',
	) ) );

		//require get_template_directory() . '/inc/custom-color.php';

?>