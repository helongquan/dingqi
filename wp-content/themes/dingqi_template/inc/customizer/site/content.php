<?php
$section  = 'site_content';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'typography',
	'settings'    => 'body_font',
	'description' => esc_html( __( 'Set up font settings for body text', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => array(
		'font-style'     => array( 'bold', 'italic' ),
		'font-family'    => TM_FINANCE_SECONDARY_FONT,
		'font-size'      => '16px',
		'font-weight'    => '300',
		'line-height'    => '1.8',
		'letter-spacing' => '-.05em',
	),
	'choices'     => array(
		'font-style'     => true,
		'font-family'    => true,
		'font-size'      => true,
		'font-weight'    => true,
		'line-height'    => true,
		'letter-spacing' => true,
	),
	'output'      => array(
		array(
			'element' => 'body,p',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'color',
	'setting'     => 'body_color',
	'label'       => esc_html( __( 'Text color', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose color for body text', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#222222',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => 'body',
			'property' => 'color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => 'body',
			'function' => 'css',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'color',
	'setting'     => 'link_color',
	'label'       => esc_html( __( 'Link color', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose color for text link', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_FINANCE_SECONDARY_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => 'a',
			'property' => 'color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => 'a',
			'function' => 'css',
			'property' => 'color',
		),
	),
) );