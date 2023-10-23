<?php

class Creativ_Business_Address_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'creativ-business-address',
			__( 'Creativ Business: Contact Address', 'creativ-business' ),
			array(
				'description' => __( 'Displays Contact Address', 'creativ-business' ),
				),
			array(),
			array(
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Enter Widget Title', 'creativ-business' ),
				),
				'location' => array(
					'type'  => 'text',
					'label' => __( 'Enter Location', 'creativ-business' ),
				),
				'phone' => array(
					'type'  => 'text',
					'label' => __( 'Enter Phone Number', 'creativ-business' ),
				),
				'email' => array(
					'type'  => 'text',
					'label' => __( 'Enter Email', 'creativ-business' ),
				),
			)
		);

	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'creativ-business-address', __FILE__, 'Creativ_Business_Address_Widget' );
