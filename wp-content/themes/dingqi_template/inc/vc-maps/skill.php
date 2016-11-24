<?php
vc_map( array(
	'name'                      => esc_html( __( 'TM Skill', 'tm-finance' ) ),
	'base'                      => 'thememove_skill',
	'category'                  => esc_html( sprintf( __( 'by %s', 'tm-finance' ), TM_FINANCE_PARENT_THEME_NAME ) ),
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Name', 'tm-finance' ) ),
			'admin_label' => true,
			'param_name'  => 'name'
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Value', 'tm-finance' ) ),
			'admin_label' => true,
			'param_name'  => 'value',
			'description' => esc_html( __( 'Number 1-100', 'tm-finance' ) )
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => esc_html( __( 'Background color', 'tm-finance' ) ),
			'param_name' => 'bg'
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Extra class name', 'tm-finance' ) ),
			'param_name' => 'class',
		)
	)
) );