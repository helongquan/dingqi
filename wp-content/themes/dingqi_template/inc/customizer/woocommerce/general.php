<?php
$section  = 'woo_general';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'radio',
	'setting'     => 'woo_layout_category',
	'label'       => esc_html( __( 'Category layout', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose the category product page layout you want', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'sidebar-content',
	'choices'     => array(
		'full-width'      => __( 'Full width', 'tm-finance' ),
		'content-sidebar' => __( 'Content - Sidebar', 'tm-finance' ),
		'sidebar-content' => __( 'Sidebar Content', 'tm-finance' ),
	),
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'radio',
	'setting'     => 'woo_layout_single_product',
	'label'       => esc_html( __( 'Single layout', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose the product page layout you want', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'sidebar-content',
	'choices'     => array(
		'full-width'      => __( 'Full width', 'tm-finance' ),
		'content-sidebar' => __( 'Content - Sidebar', 'tm-finance' ),
		'sidebar-content' => __( 'Sidebar Content', 'tm-finance' ),
	),
) );