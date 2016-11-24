<?php
$section  = 'header_general';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'select',
	'setting'     => 'header_type',
	'label'       => esc_html( __( 'Header Type', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose the header type you want', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'header01',
	'choices'     => array(
		'header01' => 'Type 01',
		'header02' => 'Type 02',
		'header03' => 'Type 03',
		'header04' => 'Type 04',
		'header05' => 'Type 05',
		'header06' => 'Type 06',
	),
) );


Kirki::add_field( 'tm-finance', array(
	'type'      => 'color-alpha',
	'setting'   => 'header_bg_color',
	'label'     => esc_html( __( 'Background color', 'tm-finance' ) ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#ffffff',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-header',
			'property' => 'background-color',
		),
	),
	'js_vars'   => array(
		array(
			'element'  => '.site-header',
			'function' => 'css',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'      => 'text',
	'setting'   => 'header_padding',
	'label'     => esc_html( __( 'Padding', 'tm-finance' ) ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '30px 0px 30px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-header',
			'property' => 'padding',
		),
	),
	'js_vars'   => array(
		array(
			'element'  => '.site-header',
			'function' => 'css',
			'property' => 'padding',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'      => 'text',
	'setting'   => 'header_margin',
	'label'     => esc_html( __( 'Margin', 'tm-finance' ) ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-header',
			'property' => 'margin',
		),
	),
	'js_vars'   => array(
		array(
			'element'  => '.site-header',
			'function' => 'css',
			'property' => 'margin',
		),
	),
) );

