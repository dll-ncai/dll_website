<?php

class Creativ_Business_Team_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'creativ-business-team',
			__( 'Creativ Business: Team', 'creativ-business' ),
			array(
				'description' => __( 'Displays List of Team Members', 'creativ-business' ),
			),
			array(),
			array(
				'section_title' => array(
					'type'  => 'text',
					'label' => __( 'Enter Team Section Title', 'creativ-business' ),
				),
				'posts' => array(
					'type'  => 'posts',
					'label' => __( 'Posts', 'creativ-business' ),
				),
				'settings' => array(
					'type'   => 'section',
					'label'  => __( 'Settings', 'creativ-business' ),
					'hide' => true,
					'fields' => array(
						'more_text' => array(
							'type'    => 'text',
							'label'   => __( 'Read More Text', 'creativ-business' ),
							'default' => __( 'Read more', 'creativ-business' ),
						),
		    			'disable_excerpt' => array(
							'type'  => 'checkbox',
							'label' => __( 'Disable Post Excerpt', 'creativ-business' ),
		    			),
		    			'disable_more_text' => array(
							'type'  => 'checkbox',
							'label' => __( 'Disable Read More Text', 'creativ-business' ),
		    			),
	    			),
				),
			)
		);

	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'creativ-business-team', __FILE__, 'Creativ_Business_Team_Widget' );
