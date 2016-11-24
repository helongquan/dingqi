<?php
$section  = 'site_heading';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'typography',
	'settings'    => 'heading_font',
	'description' => esc_html( __( 'Set up font settings for heading tag', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => array(
		'font-style'     => array( 'bold', 'italic' ),
		'font-family'    => TM_FINANCE_PRIMARY_FONT,
		'font-weight'    => '400',
		'line-height'    => '1.5',
		'letter-spacing' => '-.05em',
	),
	'choices'     => array(
		'font-style'     => true,
		'font-family'    => true,
		'font-size'      => false,
		'font-weight'    => true,
		'line-height'    => true,
		'letter-spacing' => true,
	),
	'output'      => array(
		array(
			'element' => 'h1,h2,h3,h4,h5,h6',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'slider',
	'setting'     => 'h1_font_size',
	'label'       => esc_html( __( 'Font size', 'tm-finance' ) ),
	'description' => esc_html( __( 'H1', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 28,
	'choices'     => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport'   => 'postMessage',
	'js_vars'     => array(
		array(
			'element'  => 'h1',
			'function' => 'css',
			'property' => 'font-size',
		),
	),
	'output'      => array(
		array(
			'element'  => 'h1',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'slider',
	'setting'     => 'h2_font_size',
	'description' => esc_html( __( 'H2', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 24,
	'choices'     => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport'   => 'postMessage',
	'js_vars'     => array(
		array(
			'element'  => 'h2',
			'function' => 'css',
			'property' => 'font-size',
		),
	),
	'output'      => array(
		array(
			'element'  => 'h2',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'slider',
	'setting'     => 'h3_font_size',
	'description' => esc_html( __( 'H3', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 20,
	'choices'     => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport'   => 'postMessage',
	'js_vars'     => array(
		array(
			'element'  => 'h3',
			'function' => 'css',
			'property' => 'font-size',
		),
	),
	'output'      => array(
		array(
			'element'  => 'h3',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'slider',
	'setting'     => 'h4_font_size',
	'description' => esc_html( __( 'H4', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 16,
	'choices'     => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport'   => 'postMessage',
	'js_vars'     => array(
		array(
			'element'  => 'h4',
			'function' => 'css',
			'property' => 'font-size',
		),
	),
	'output'      => array(
		array(
			'element'  => 'h4',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'slider',
	'setting'     => 'h5_font_size',
	'description' => esc_html( __( 'H5', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 14,
	'choices'     => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport'   => 'postMessage',
	'js_vars'     => array(
		array(
			'element'  => 'h5',
			'function' => 'css',
			'property' => 'font-size',
		),
	),
	'output'      => array(
		array(
			'element'  => 'h5',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'slider',
	'setting'     => 'h6_font_size',
	'description' => esc_html( __( 'H6', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 12,
	'choices'     => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport'   => 'postMessage',
	'js_vars'     => array(
		array(
			'element'  => 'h6',
			'function' => 'css',
			'property' => 'font-size',
		),
	),
	'output'      => array(
		array(
			'element'  => 'h6',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'      => 'color',
	'setting'   => 'heading_color',
	'label'     => esc_html( __( 'Color', 'tm-finance' ) ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#222222',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => 'h1,h2,h3,h4,h5,h6',
			'property' => 'color',
		),
	),
	'js_vars'   => array(
		array(
			'element'  => 'h1,h2,h3,h4,h5,h6',
			'function' => 'css',
			'property' => 'color',
		),
	),
) );