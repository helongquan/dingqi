<?php
$section  = 'post_general';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'radio',
	'setting'     => 'post_layout',
	'label'       => esc_html( __( 'Post layout', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose the site layout you want', 'tm-finance' ) ),
	'help'        => esc_html( __( 'Choose the site layout you want', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'content-sidebar',
	'choices'     => array(
		'full-width'      => __( 'Full width', 'tm-finance' ),
		'content-sidebar' => __( 'Content - Sidebar', 'tm-finance' ),
		'sidebar-content' => __( 'Sidebar Content', 'tm-finance' ),
	),
) );