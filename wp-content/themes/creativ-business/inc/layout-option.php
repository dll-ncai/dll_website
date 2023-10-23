<?php
/**
 * Functions related to customizer and options.
 *
 * @package Creativ Business
 */

if ( ! function_exists( 'creativ_business_get_page_layout_options' ) ) :

	/**
	 * Returns Page or Post layout and pagination options.
	 *
	 * @since 1.0
	 *
	 * @return array Options array.
	 */
	function creativ_business_get_page_layout_options() {

		$choices = array(
			'left-sidebar'  => esc_html__( 'Primary Sidebar - Content', 'creativ-business' ),
			'right-sidebar' => esc_html__( 'Content - Primary Sidebar', 'creativ-business' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'creativ-business' ),
		);
		$output = apply_filters( 'creativ_business_filter_layout_options', $choices );
		return $output;

	}

endif;

if ( ! function_exists( 'creativ_business_get_pagination_type_options' ) ) :

	/**
	 * Returns pagination type options.
	 *
	 * @since 1.0
	 *
	 * @return array Options array.
	 */
	function creativ_business_get_pagination_type_options() {

		$choices = array(
			'default' => esc_html__( 'Older/Newer Post', 'creativ-business' ),
			'numeric' => esc_html__( 'Numeric Pagination', 'creativ-business' ),
		);
		return $choices;

	}

endif;

