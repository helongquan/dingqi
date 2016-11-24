<?php
$section  = 'navigation_desktop_menu';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'     => 'typography',
	'settings' => 'main_menu_font',
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => array(
		'font-style'     => array( 'bold', 'italic' ),
		'font-family'    => TM_FINANCE_PRIMARY_FONT,
		'font-size'      => '16px',
		'font-weight'    => '700',
		'line-height'    => '1.5',
		'letter-spacing' => '0em',
	),
	'choices'  => array(
		'font-style'     => true,
		'font-family'    => true,
		'font-size'      => true,
		'font-weight'    => true,
		'line-height'    => true,
		'letter-spacing' => true,
	),
	'output'   => array(
		array(
			'element' => '.main-navigation',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'color',
	'setting'     => 'main_menu_color',
	'label'       => esc_html( __( 'Item color', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose color for level 1 menu item', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.main-navigation .menu > ul > li > a, .main-navigation .menu > li > a, .main-navigation .search-btn, .mobile-icon',
			'property' => 'color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.main-navigation .menu > ul > li > a, .main-navigation .menu > li > a, .main-navigation .search-btn, .mobile-icon',
			'function' => 'css',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'color',
	'setting'     => 'main_menu_hover_color',
	'description' => esc_html( __( 'Color for level 1 menu item on hover', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.main-navigation .menu > li.current-menu-item > a,.main-navigation .menu > ul > li > a:hover, .main-navigation .menu > li > a:hover, .main-navigation .search-btn:hover, .mobile-icon:hover',
			'property' => 'color',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.main-navigation .menu > li.current-menu-item > a,.main-navigation .menu > ul > li > a:hover, .main-navigation .menu > li > a:hover, .main-navigation .search-btn:hover, .mobile-icon:hover',
			'function' => 'css',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'text',
	'label'       => esc_html( __( 'Item padding', 'tm-finance' ) ),
	'setting'     => 'main_menu_padding',
	'description' => esc_html( __( 'Set up padding for menu item', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '22px 0px 22px 0px',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.main-navigation .menu > ul > li, .main-navigation .menu > li',
			'property' => 'padding',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.main-navigation .menu > ul > li, .main-navigation .menu > li',
			'function' => 'css',
			'property' => 'padding',
		),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'text',
	'label'       => esc_html( __( 'Item margin', 'tm-finance' ) ),
	'setting'     => 'main_menu_margin',
	'description' => esc_html( __( 'Set up margin for menu item', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '0px 30px 0px 0px',
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.main-navigation .menu > ul > li, .main-navigation .menu > li',
			'property' => 'margin',
		),
	),
	'js_vars'     => array(
		array(
			'element'  => '.main-navigation .menu > ul > li, .main-navigation .menu > li',
			'function' => 'css',
			'property' => 'margin',
		),
	),
) );