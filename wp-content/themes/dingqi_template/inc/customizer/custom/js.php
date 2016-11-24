<?php
$section  = 'custom_js';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'toggle',
	'settings'    => 'custom_js_enable',
	'label'       => esc_html( __( 'Enable', 'tm-finance' ) ),
	'description' => esc_html( __( 'Enabling this option will display top area', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Kirki::add_field( 'tm-finance', array(
	'type'     => 'code',
	'settings' => 'custom_js',
	'label'    => esc_html( __( 'Custom JS', 'tm-finance' ) ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '',
	'choices'  => array(
		'language' => 'javascript',
		'theme'    => 'monokai',
	),
) );