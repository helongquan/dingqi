<?php
vc_map( array(
	'name'     => __( 'TM Project Details', 'tm-finance' ),
	'base'     => 'thememove_projectdetails',
	'category' => esc_html( sprintf( __( 'by %s', 'tm-finance' ), TM_FINANCE_PARENT_THEME_NAME ) ),
	'params'   => array(
		array(
			'type'        => 'dropdown',
			'heading'     => __( 'Share buttons', 'tm-finance' ),
			'param_name'  => 'share',
			'description' => __( 'Do you want to show share buttons bellow?', 'tm-finance' ),
			'value'       => array(
				'No'  => '0',
				'Yes' => '1'
			),
		),
		array(
			'type'        => 'textfield',
			'heading'     => __( 'Extra class name', 'tm-finance' ),
			'param_name'  => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'tm-finance' )
		),
		array(
			'type'       => 'css_editor',
			'heading'    => __( 'CSS box', 'tm-finance' ),
			'param_name' => 'css',
			'group'      => __( 'Design Options', 'tm-finance' )
		),
	)
) );