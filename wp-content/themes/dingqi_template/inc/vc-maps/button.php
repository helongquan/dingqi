<?php
vc_map( array(
	'name'                      => esc_html( __( 'TM Button', 'tm-finance' ) ),
	'base'                      => 'thememove_button',
	'category'                  => esc_html( sprintf( __( 'by %s', 'tm-finance' ), TM_FINANCE_PARENT_THEME_NAME ) ),
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html( __( 'Type', 'tm-finance' ) ),
			'param_name' => 'type',
			'value'      => array(
				__( '1', 'tm-finance' ) => '1',
				__( '2', 'tm-finance' ) => '2',
				__( '3', 'tm-finance' ) => '3'
			),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Text', 'tm-finance' ) ),
			'admin_label' => true,
			'param_name'  => 'text'
		),
		array(
			"type"       => "dropdown",
			"heading"    => esc_html( __( 'Align', 'tm-finance' ) ),
			"param_name" => "align",
			"value"      => array(
				"Left"   => 'left',
				"Center" => 'center',
				"Right"  => 'right'
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html( __( 'Show arrow', 'tm-finance' ) ),
			'param_name' => 'arrow',
			'value'      => array(
				__( 'Yes', 'tm-finance' ) => '1',
				__( 'No', 'tm-finance' )  => '0'
			),
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Link', 'tm-finance' ) ),
			'param_name' => 'link',
			'value'      => '#'
		),
		array(
			"type"       => "dropdown",
			"heading"    => esc_html( __( 'Target', 'tm-finance' ) ),
			"param_name" => "target",
			"value"      => array(
				"Self"   => '_self',
				"Blank"  => '_blank',
				"Parent" => '_parent',
				"Top"    => '_top',
			),
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Extra class name', 'tm-finance' ) ),
			'param_name' => 'class',
		)
	)
) );