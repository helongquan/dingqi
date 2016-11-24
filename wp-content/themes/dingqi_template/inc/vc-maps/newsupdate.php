<?php
vc_map( array(
	'name'                      => __( 'TM News Update', 'tm-finance' ),
	'base'                      => 'thememove_newsupdate',
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
			'type'        => 'dropdown',
			'heading'     => esc_html( __( 'Number of posts', 'tm-finance' ) ),
			'param_name'  => 'num',
			'admin_label' => true,
			'value'       => array(
				__( '1', 'tm-finance' )  => '1',
				__( '2', 'tm-finance' )  => '2',
				__( '3', 'tm-finance' )  => '3',
				__( '4', 'tm-finance' )  => '4',
				__( '5', 'tm-finance' )  => '5',
				__( '6', 'tm-finance' )  => '6',
				__( '7', 'tm-finance' )  => '7',
				__( '8', 'tm-finance' )  => '8',
				__( '9', 'tm-finance' )  => '9',
				__( '10', 'tm-finance' ) => '10',
			),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Number of characters', 'tm-finance' ) ),
			'param_name'  => 'char',
			'admin_label' => true,
			'value'       => '80'
		),
		array(
			'type'        => 'textfield',
			'heading'     => __( 'Extra class name', 'tm-finance' ),
			'param_name'  => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'tm-finance' )
		)
	)
) );