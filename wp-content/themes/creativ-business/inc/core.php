<?php
/**
 * Core functions.
 *
 * @package Creativ Business
 */

/**
 * Get theme option.
 *
 * @since 1.0
 *
 * @param string $key Option key.
 * @return mixed Option value.
 */
function creativ_business_get_option( $key = '' ) {

	global $creativ_business_default_options;
	if ( empty( $key ) ) {
		return;
	}

	$default = ( isset( $creativ_business_default_options[ $key ] ) ) ? $creativ_business_default_options[ $key ] : '';
	$theme_options = get_theme_mod( 'theme_options', $creativ_business_default_options );
	$theme_options = array_merge( $creativ_business_default_options, $theme_options );
	$value = '';
	if ( isset( $theme_options[ $key ] ) ) {
		$value = $theme_options[ $key ];
	}
	return $value;

}
