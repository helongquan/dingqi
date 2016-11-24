<?php
vc_map( array(
	'name'                      => esc_html( __( 'TM Rounded Icon', 'tm-finance' ) ),
	'base'                      => 'thememove_roundedicon',
	'category'                  => esc_html( sprintf( __( 'by %s', 'tm-finance' ), TM_FINANCE_PARENT_THEME_NAME ) ),
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html( __( 'Icon', 'tm-finance' ) ),
			'admin_label' => true,
			'value'       => 'fa fa-adjust',
			'param_name'  => 'icon'
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Icon text', 'tm-finance' ) ),
			'admin_label' => true,
			'param_name'  => 'icon_txt'
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html( __( 'Type', 'tm-finance' ) ),
			'param_name'  => 'type',
			'admin_label' => true,
			'value'       => array(
				__( '1', 'tm-finance' ) => '1',
				__( '2', 'tm-finance' ) => '2',
			),
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
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Extra class name', 'tm-finance' ) ),
			'param_name' => 'class',
		)
	)
) );