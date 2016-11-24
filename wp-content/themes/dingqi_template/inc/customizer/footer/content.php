<?php
$section  = 'footer_content';
$priority = 1;
Kirki::add_field( 'tm-finance', array(
	'type'        => 'typography',
	'settings'    => 'footer_font',
	'description' => esc_html( __( 'Set up font settings for footer text', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => array(
		'font-style'     => array( 'bold', 'italic' ),
		'font-family'    => TM_FINANCE_SECONDARY_FONT,
		'font-size'      => '16px',
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
			'element' => '.site-footer, .site-footer p',
		),
	),
) );
Kirki::add_field( 'tm-finance', array(
	'type'        => 'color',
	'setting'     => 'footer_text_color',
	'label'       => esc_html( __( 'Text', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose color for footer text', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#858585',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.site-footer',
			'property' => 'color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.site-footer',
			'function' => 'css',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'tm-finance', array(
	'type'        => 'color',
	'setting'     => 'footer_link_color',
	'label'       => esc_html( __( 'Link', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose color for footer text link', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#CCCCCC',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.site-footer a',
			'property' => 'color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.site-footer a',
			'function' => 'css',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'tm-finance', array(
	'type'        => 'color',
	'setting'     => 'footer_link_color_hover',
	'label'       => esc_html( __( 'Link hover', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose color for footer text link hover', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#858585',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.site-footer a:hover',
			'property' => 'color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.site-footer a:hover',
			'function' => 'css',
			'property' => 'color',
		),
	),
) );