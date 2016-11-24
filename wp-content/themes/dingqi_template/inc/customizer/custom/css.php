<?php
$section  = 'custom_css';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'toggle',
	'settings'    => 'custom_css_enable',
	'label'       => esc_html( __( 'Enable', 'tm-finance' ) ),
	'description' => esc_html( __( 'Enabling this option will display top area', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Kirki::add_field( 'tm-finance', array(
	'type'      => 'code',
	'settings'  => 'custom_css',
	'label'     => esc_html( __( 'Custom CSS', 'tm-finance' ) ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '',
	'choices'   => array(
		'language' => 'css',
		'theme'    => 'monokai',
	),
	'transport' => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '#tm-finance-main-inline-css',
			'function' => 'html',
		),
	),
) );