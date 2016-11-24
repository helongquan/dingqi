<?php
$section  = 'header_logo';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'image',
	'setting'     => 'logo',
	'label'       => esc_html( __( 'Normal', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose a default logo image to display', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'http://finance.thememove.com/data/images/logo_01.png',
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'image',
	'setting'     => 'logo_retina',
	'label'       => esc_html( __( 'Retina', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose a image for retina logo', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '',
) );