<?php
$section  = 'page_general';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'radio',
	'setting'     => 'page_layout',
	'label'       => esc_html( __( 'Page layout', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose the site layout you want', 'tm-finance' ) ),
	'help'        => esc_html( __( 'Choose the site layout you want', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'full-width',
	'choices'     => array(
		'full-width'      => __( 'Full width', 'tm-finance' ),
		'content-sidebar' => __( 'Content - Sidebar', 'tm-finance' ),
		'sidebar-content' => __( 'Sidebar Content', 'tm-finance' ),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'radio',
	'setting'     => 'archive_layout',
	'label'       => esc_html( __( 'Archive layout', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose the archive layout you want', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'content-sidebar',
	'choices'     => array(
		'full-width'      => __( 'Full width', 'tm-finance' ),
		'content-sidebar' => __( 'Content - Sidebar', 'tm-finance' ),
		'sidebar-content' => __( 'Sidebar Content', 'tm-finance' ),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'radio',
	'setting'     => 'search_layout',
	'label'       => esc_html( __( 'Search layout', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose the search layout you want', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'content-sidebar',
	'choices'     => array(
		'full-width'      => __( 'Full width', 'tm-finance' ),
		'content-sidebar' => __( 'Content - Sidebar', 'tm-finance' ),
		'sidebar-content' => __( 'Sidebar Content', 'tm-finance' ),
	),
) );