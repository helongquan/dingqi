<?php
vc_map( array(
	'name'                      => esc_html( __( 'TM Our Team', 'tm-finance' ) ),
	'base'                      => 'thememove_ourteam',
	'category'                  => esc_html( sprintf( __( 'by %s', 'tm-finance' ), TM_FINANCE_PARENT_THEME_NAME ) ),
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html( __( 'Type', 'tm-finance' ) ),
			'param_name'  => 'type',
			'admin_label' => true,
			'value'       => array(
				__( '1', 'tm-finance' ) => '1',
				__( '2', 'tm-finance' ) => '2',
				__( '3', 'tm-finance' ) => '3',
			),
		),
		array(
			'type'        => 'attach_image',
			'heading'     => esc_html( __( 'Photo', 'tm-finance' ) ),
			'param_name'  => 'photo',
			'admin_label' => true,
			'description' => esc_html( __( 'Member photo', 'tm-finance' ) )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Name', 'tm-finance' ) ),
			'admin_label' => true,
			'param_name'  => 'name'
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Byline', 'tm-finance' ) ),
			'param_name'  => 'byline',
			'description' => esc_html( __( 'Example: Creative Manager', 'tm-finance' ) )
		),
		array(
			'type'       => 'textarea',
			'heading'    => esc_html( __( 'Description', 'tm-finance' ) ),
			'param_name' => 'desc',
			'dependency' => array(
				'element' => 'type',
				'value'   => '2'
			)
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Facebook url', 'tm-finance' ) ),
			'param_name' => 'facebook',
			'dependency' => array(
				'element' => 'type',
				'value'   => array( '2', '3' )
			)
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Twitter url', 'tm-finance' ) ),
			'param_name' => 'twitter',
			'dependency' => array(
				'element' => 'type',
				'value'   => array( '2', '3' )
			)
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Instagram url', 'tm-finance' ) ),
			'param_name' => 'instagram',
			'dependency' => array(
				'element' => 'type',
				'value'   => array( '2', '3' )
			)
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Youtube url', 'tm-finance' ) ),
			'param_name' => 'youtube',
			'dependency' => array(
				'element' => 'type',
				'value'   => array( '2', '3' )
			)
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Google+ url', 'tm-finance' ) ),
			'param_name' => 'googleplus',
			'dependency' => array(
				'element' => 'type',
				'value'   => array( '2', '3' )
			)
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Profile url', 'tm-finance' ) ),
			'param_name' => 'profile'
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Extra class name', 'tm-finance' ) ),
			'param_name' => 'class',
		)
	)
) );