<?php
vc_map( array(
	'name'                      => esc_html( __( 'TM Countdown', 'tm-finance' ) ),
	'base'                      => 'thememove_countdown',
	'category'                  => esc_html( sprintf( __( 'by %s', 'tm-finance' ), TM_FINANCE_PARENT_THEME_NAME ) ),
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Date time', 'tm-finance' ) ),
			'param_name'  => 'time',
			'value'       => '2016/10/20 10:00:00',
			'admin_label' => true,
			'description' => esc_html( __( 'Full date time, example "2016/10/20 10:00:00"', 'tm-finance' ) )
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( '"Days" text', 'tm-finance' ) ),
			'param_name' => 'days',
			'value'      => 'Days'
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( '"Hours" text', 'tm-finance' ) ),
			'param_name' => 'hours',
			'value'      => 'Hours'
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( '"Minutes" text', 'tm-finance' ) ),
			'param_name' => 'minutes',
			'value'      => 'Minutes'
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( '"Seconds" text', 'tm-finance' ) ),
			'param_name' => 'seconds',
			'value'      => 'Seconds'
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Extra class name', 'tm-finance' ) ),
			'param_name' => 'el_class',
		)
	)
) );