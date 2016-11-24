<?php
$section  = 'page_title';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'typography',
	'settings'    => 'page_title_font',
	'description' => esc_html( __( 'Set up font settings for page title', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => array(
		'font-style'     => array( 'bold', 'italic' ),
		'font-family'    => TM_FINANCE_PRIMARY_FONT,
		'font-size'      => '40px',
		'font-weight'    => '600',
		'line-height'    => '1',
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
			'element' => '.big-title .entry-title',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'color',
	'setting'     => 'page_title_color',
	'label'       => esc_html( __( 'Text color', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose color for body text', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#fff',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.big-title .entry-title',
			'property' => 'color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.big-title .entry-title',
			'function' => 'css',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'      => 'text',
	'setting'   => 'page_title_padding',
	'label'     => esc_html( __( 'Padding', 'tm-finance' ) ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '80px 0px 80px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.big-title',
			'property' => 'padding',
		),
	),
	'js_vars'   => array(
		array(
			'element'  => '.big-title',
			'function' => 'css',
			'property' => 'padding',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'      => 'color',
	'setting'   => 'page_title_bg_color',
	'label'     => esc_html( __( 'Background color', 'tm-finance' ) ),
	'help'      => esc_html( __( 'Setup background color for your header', 'tm-finance' ) ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.big-title',
			'property' => 'background-color',
		),
	),
	'js_vars'   => array(
		array(
			'element'  => '.big-title',
			'function' => 'css',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'     => 'color-alpha',
	'setting'  => 'page_title_overlay_bg_color',
	'label'    => esc_html( __( 'Overlay color', 'tm-finance' ) ),
	'help'     => esc_html( __( 'Setup overlay color for your header', 'tm-finance' ) ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'rgba(0,0,0,0.7)',
	'output'   => array(
		array(
			'element'  => '.big-title:after',
			'property' => 'background-color',
		),
	),
	'js_vars'  => array(
		array(
			'element'  => '.big-title:after',
			'function' => 'css',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'     => 'image',
	'setting'  => 'page_title_bg_image',
	'label'    => esc_html( __( 'Background image', 'tm-finance' ) ),
	'help'     => esc_html( __( 'Default background image for your header', 'tm-finance' ) ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'http://finance.thememove.com/data/images/page_title_bg.jpg',
	'output'   => array(
		array(
			'element'  => '.big-title',
			'property' => 'background-image',
		),
	),
	'js_vars'  => array(
		array(
			'element'  => '.big-title',
			'function' => 'css',
			'property' => 'background-image',
		),
	),
) );