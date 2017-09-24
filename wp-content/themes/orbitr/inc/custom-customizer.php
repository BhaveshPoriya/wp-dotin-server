<?php

/**
 * Sanitization for textarea field
 */
function orbitr_sanitize_textarea( $input ) {
    global $allowedposttags;
    $output = wp_kses( $input, $allowedposttags );
    return $output;
}

/**
 * Returns a sanitized filepath if it has a valid extension.
 */
function orbitr_sanitize_upload( $upload ) {
    $return = '';
    $fype = wp_check_filetype( $upload );
    if ( $fype["ext"] ) {
        $return = esc_url_raw( $upload );
    }
    return $return;
}

/**
 * validate int.
 */
function orbitr_sanitize_int( $input ) {
$return = absint($input);
    return $return;
}

/**
 * validate checkbox option.
 */
function orbitr_sanitize_checkbox( $input ) {
	return ( isset( $input ) && true == $input ? true : false );
}
/**
 *  Sanitize Radio Buttons
 */
if ( ! function_exists( 'orbitr_sanitize_radio_buttons' ) ) {
	function orbitr_sanitize_radio_buttons( $input, $setting ) {
		global $wp_customize;

		$control = $wp_customize->get_control( $setting->id );

		if ( array_key_exists( $input, $control->choices ) ) {
			return $input;
		} else {
			return $setting->default;
		}
	}
}
?>