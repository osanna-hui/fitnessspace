<?php

//-----------------------------------------SANITIZATION-----------------------
function fitnessspace_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function fitnessspace_sanitize_multicheck( $values ) {

    $multi_values = !is_array( $values ) ? explode( ',', $values ) : $values;

    return !empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
}

function fitnessspace_sanitize_number( $value ) {
	return ( is_numeric( $value ) ) ? $value : intval( $value );
}

function fitnessspace_sanitize_choices( $input, $setting ) {
    $input = sanitize_key( $input );
	/*replace the fitnessspace[] from settings id becasue the control id != setting id*/
	$controlid = str_replace('fitnessspace[','', $setting->id);
	$controlid = str_replace(']','', $controlid);
	$control = $setting->manager->get_control( $controlid );

    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function fitnessspace_kses_html( $value ) {
	return wp_kses($value, wp_kses_allowed_html('entities')); 
}