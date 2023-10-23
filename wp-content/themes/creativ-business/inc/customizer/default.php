<?php
/**
 * Default theme options.
 *
 * @package Creativ Business
 */

if ( ! function_exists( 'creativ_business_get_default_theme_options' ) ) :

	/**
	 * Get default theme options
	 *
	 * @since 1.0
	 *
	 * @return array Default theme options.
	 */
	function creativ_business_get_default_theme_options() {

		$defaults = array();

		// Header.
		$defaults['show_title']   = true;
		$defaults['show_tagline'] = true;

		// Layout.
		$defaults['page_layout']           = 'right-sidebar';
		$defaults['archive_layout']          = 'excerpt';

		// Pagination.
		$defaults['pagination_type'] = 'default';

		// Footer.
		$defaults['copyright_text']          = esc_html__( 'Copyright &copy; All rights reserved.', 'creativ-business' );

		// Layout.
		$defaults['color_layout'] = '#3a85eb';

		// Excerpt 
		$defaults['excerpt_length'] = '25';

		// Pass through filter.
		$defaults = apply_filters( 'creativ_business_filter_default_theme_options', $defaults );
		return $defaults;
	}

endif;
