<?php
vc_map( array(
	'name'                      => __( 'TM Our History', 'tm-finance' ),
	'base'                      => 'thememove_history',
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
			),
		),
		array(
			'type'       => 'param_group',
			'heading'    => __( 'History', 'tm-finance' ),
			'param_name' => 'values',
			'params'     => array(
				array(
					'type'        => 'attach_image',
					'heading'     => esc_html( __( 'Photo', 'tm-finance' ) ),
					'param_name'  => 'photo',
					'admin_label' => true,
					'description' => esc_html( __( 'History photo', 'tm-finance' ) ),
				),
				array(
					'type'        => 'textfield',
					'heading'     => __( 'Label', 'tm-finance' ),
					'param_name'  => 'label',
					'value'       => '2016',
					'description' => __( 'Enter text used as title.', 'tm-finance' ),
					'admin_label' => true,
				),
				array(
					'type'        => 'textarea',
					'heading'     => __( 'Content', 'tm-finance' ),
					'param_name'  => 'content',
					'value'       => '',
					'description' => __( 'Enter content.', 'tm-finance' ),
					'admin_label' => false,
				)
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