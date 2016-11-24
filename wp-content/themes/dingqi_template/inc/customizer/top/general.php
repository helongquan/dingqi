<?php
$section  = 'top_general';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'toggle',
	'setting'     => 'top_enable',
	'label'       => esc_html( __( 'Enable', 'tm-finance' ) ),
	'description' => esc_html( __( 'Enabling this option will display top area', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'color-alpha',
	'setting'     => 'top_bg_color',
	'label'       => esc_html( __( 'Background color', 'tm-finance' ) ),
	'description' => esc_html( __( 'Setup background color for your top', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#F2F2F5',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.site-top',
			'property' => 'background-color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.site-top',
			'function' => 'css',
			'property' => 'background-color',
		),
	),
	'required'    => array(
		array(
			'setting'  => 'top_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'text',
	'setting'     => 'top_padding',
	'label'       => esc_html( __( 'Padding', 'tm-finance' ) ),
	'description' => esc_html( __( 'Set up padding for top area', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '16px 0px 16px 0px',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.site-top',
			'property' => 'padding',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.site-top',
			'function' => 'css',
			'property' => 'padding',
		),
	),
	'required'    => array(
		array(
			'setting'  => 'top_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'text',
	'setting'     => 'top_margin',
	'label'       => esc_html( __( 'Margin', 'tm-finance' ) ),
	'description' => esc_html( __( 'Set up margin for top area', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '0px 0px 0px 0px',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.site-top',
			'property' => 'margin',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.site-top',
			'function' => 'css',
			'property' => 'margin',
		),
	),
	'required'    => array(
		array(
			'setting'  => 'top_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );