<?php
$section  = 'footer_general';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'color-alpha',
	'setting'     => 'footer_bg_color',
	'label'       => esc_html( __( 'Background color', 'tm-finance' ) ),
	'description' => esc_html( __( 'Setup background color for your footer', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#222222',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.site-footer',
			'property' => 'background-color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.site-footer',
			'function' => 'css',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'text',
	'setting'     => 'footer_padding',
	'label'       => esc_html( __( 'Padding', 'tm-finance' ) ),
	'description' => esc_html( __( 'Setup padding for your footer', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '60px 0px 60px 0px',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.site-footer',
			'property' => 'padding',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.site-footer',
			'function' => 'css',
			'property' => 'padding',
		),
	),
) );