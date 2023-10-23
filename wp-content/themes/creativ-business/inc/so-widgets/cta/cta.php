<?php

class Creativ_Business_Cta_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'creativ-business-cta',
			__( 'Creativ Business: Call to action', 'creativ-business' ),
			array(
				'description' => __( 'Displays Call to Action', 'creativ-business' ),
				),
			array(),
			array(
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Enter Heading', 'creativ-business' ),
				),
				'description' => array(
					'type'  => 'textarea',
					'label' => __( 'Enter Description', 'creativ-business' ),
				),
				'buttonOne_title' => array(
					'type'  => 'text',
					'label' => __( 'Enter Button 1 Name', 'creativ-business' ),
				),
				'buttonOne_url' => array(
					'type'  => 'link',
					'label' => __( 'Enter Button 1 Url', 'creativ-business' ),
				),
				'buttonTwo_title' => array(
					'type'  => 'text',
					'label' => __( 'Enter Button 2 Name', 'creativ-business' ),
				),
				'buttonTwo_url' => array(
					'type'  => 'link',
					'label' => __( 'Enter Button 2 Url', 'creativ-business' ),
				),
			)
		);

	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'creativ-business-cta', __FILE__, 'Creativ_Business_Cta_Widget' );
