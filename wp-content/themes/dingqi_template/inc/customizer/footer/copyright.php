<?php
$section  = 'footer_copyright';
$priority = 1;
Kirki::add_field( 'tm-finance', array(
	'type'        => 'toggle',
	'setting'     => 'copyright_enable',
	'label'       => esc_html( __( 'Copyright', 'tm-finance' ) ),
	'description' => esc_html( __( 'Enabling this option will display copyright area', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );
Kirki::add_field( 'tm-finance', array(
	'type'        => 'color-alpha',
	'setting'     => 'copyright_color',
	'label'       => esc_html( __( 'Background color', 'tm-finance' ) ),
	'description' => esc_html( __( 'Setup background color for your copyright', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#222222',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.copyright',
			'property' => 'background-color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.copyright',
			'function' => 'css',
			'property' => 'background-color',
		),
	),
) );
Kirki::add_field( 'tm-finance', array(
	'type'        => 'text',
	'setting'     => 'copyright_padding',
	'label'       => esc_html( __( 'Padding', 'tm-finance' ) ),
	'description' => esc_html( __( 'Setup padding for your copyright', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '30px 0px 30px 0px',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.copyright',
			'property' => 'padding',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.copyright',
			'function' => 'css',
			'property' => 'padding',
		),
	),
) );
Kirki::add_field( 'tm-finance', array(
	'type'        => 'textarea',
	'setting'     => 'copyright_text',
	'label'       => esc_html( __( 'Content', 'tm-finance' ) ),
	'description' => esc_html( __( 'Entry the text for left block', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'FinancePlus made by <a target="_blank" href="http://thememove.com">Thememove.com</a>',
	'transport'   => 'postMessage',
	'js_vars'     => array(
		array(
			'element'  => '.copyright .copyright-left',
			'function' => 'html',
		),
	),
) );
Kirki::add_field( 'tm-finance', array(
	'type'        => 'textarea',
	'setting'     => 'copyright_text_right',
	'label'       => esc_html( __( 'Content', 'tm-finance' ) ),
	'description' => esc_html( __( 'Entry the text for right block', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '<a href="#">Legal</a> <a href="#">Sitemap</a> <a href="#">Privacy Policy</a>',
	'transport'   => 'postMessage',
	'js_vars'     => array(
		array(
			'element'  => '.copyright .copyright-right',
			'function' => 'html',
		),
	),
) );
Kirki::add_field( 'tm-finance', array(
	'type'        => 'color',
	'setting'     => 'copyright_text_color',
	'label'       => esc_html( __( 'Text', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose color for copyright text', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#858585',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.copyright',
			'property' => 'color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.copyright',
			'function' => 'css',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'tm-finance', array(
	'type'        => 'color',
	'setting'     => 'copyright_link_color',
	'label'       => esc_html( __( 'Link', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose color for copyright text link', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#CCCCCC',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.copyright a',
			'property' => 'color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.copyright a',
			'function' => 'css',
			'property' => 'color',
		),
	),
) );
Kirki::add_field( 'tm-finance', array(
	'type'        => 'color',
	'setting'     => 'copyright_link_color_hover',
	'label'       => esc_html( __( 'Link hover', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose color for copyright text link hover', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#858585',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.copyright a:hover',
			'property' => 'color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.copyright a:hover',
			'function' => 'css',
			'property' => 'color',
		),
	),
) );