<?php
$section  = 'navigation_general';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'toggle',
	'setting'     => 'nav_sticky_enable',
	'label'       => esc_html( __( 'Sticky Menu', 'tm-finance' ) ),
	'description' => esc_html( __( 'Turn on this option if you want to enable sticky header on your site', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 0,
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'toggle',
	'setting'     => 'nav_gradient_bg',
	'label'       => esc_html( __( 'Gradient Background', 'tm-finance' ) ),
	'description' => esc_html( __( 'Use gradient background', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'text',
	'label'       => esc_html( __( 'Margin', 'tm-finance' ) ),
	'setting'     => 'nav_margin',
	'description' => esc_html( __( 'Set up margin for main menu', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '0px 0px 0px 0px',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.main-navigation',
			'property' => 'margin',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.main-navigation',
			'function' => 'css',
			'property' => 'margin',
		),
	),
) );