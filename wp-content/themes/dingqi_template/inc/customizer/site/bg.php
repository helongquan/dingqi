<?php
$section  = 'site_bg';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'      => 'color',
	'setting'   => 'site_bg_color',
	'label'     => esc_html( __( 'Background color', 'tm-finance' ) ),
	'help'      => esc_html( __( 'Setup background color for your header', 'tm-finance' ) ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#999999',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.boxed',
			'property' => 'background-color',
		)
	),
	'js_vars'   => array(
		array(
			'element'  => '.boxed',
			'function' => 'css',
			'property' => 'background-color',
		),
	),
) );