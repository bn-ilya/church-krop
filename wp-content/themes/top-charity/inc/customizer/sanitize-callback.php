<?php

/**
 * Sanitize select field
 *
 * @param  string $input   Selected input
 * @param  string $setting Input setting
 */

function top_charity_sanitize_select( $input, $setting ) {
	// input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only.
	$input = sanitize_key( $input );

	// get the list of possible select options.
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// return input if valid or return default option.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/**
 * Sanitize switch control
 *
 * @param  string   Switch value
 * @return integer  Sanitized value
 */
function top_charity_sanitize_switch( $input ) {
	if ( true === $input ) {
		return true;
	} else {
		return false;
	}
}

function top_charity_sanitize_image( $image, $setting ) {
	/*
	* Array of valid image file types.
	*
	* The array includes image mime types that are included in wp_get_mime_types()
	*/
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon',
		'svg'          => 'image/svg+xml',
	);
	// Return an array with file extension and mime_type.
	$file = wp_check_filetype( $image, $mimes );
	// If $image has a valid mime_type, return it; otherwise, return the default.
	return ( $file['ext'] ? $image : $setting->default );
}

function top_charity_santize_allow_tag( $input ) {
	$input = wp_kses(
		$input,
		array(
			'br'   => array(),
			'b'    => array(),
			'h1'   => array(),
			'h2'   => array(),
			'h3'   => array(),
			'h4'   => array(),
			'h5'   => array(),
			'h6'   => array(),
			'span' => array(
				'style' => array(),
			),
			'a'    => array(
				'target' => array(),
				'href'   => array(),
			),
		)
	);

	return $input;
}

function top_charity_sanitize_google_fonts( $input, $setting ) {
	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
