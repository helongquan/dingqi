<?php
$section  = 'top_content';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'text',
	'setting'     => 'top_left_text',
	'label'       => esc_html( __( 'Left Text', 'tm-finance' ) ),
	'description' => esc_html( __( 'Entry the text for left block', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'Welcome to finance Financial Services.',
	'transport'   => 'postMessage',
	'js_vars'     => array(
		array(
			'element'  => '.site-top-left',
			'function' => 'html',
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
	'type'        => 'typography',
	'settings'    => 'top_font',
	'description' => esc_html( __( 'Set up font settings for top area text', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => array(
		'font-style'     => array( 'bold', 'italic' ),
		'font-family'    => TM_FINANCE_PRIMARY_FONT,
		'font-size'      => '14px',
		'font-weight'    => '400',
		'line-height'    => '1.5',
		'letter-spacing' => '0em',
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
			'element' => '.site-top',
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
	'type'        => 'color',
	'setting'     => 'top_text_color',
	'label'       => esc_html( __( 'Text color', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose color for text', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#666666',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.site-top',
			'property' => 'color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.site-top',
			'function' => 'css',
			'property' => 'color',
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
	'type'        => 'color',
	'setting'     => 'top_link_color',
	'label'       => esc_html( __( 'Link color', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose color for text link', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#666666',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.site-top a',
			'property' => 'color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.site-top a',
			'function' => 'css',
			'property' => 'color',
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