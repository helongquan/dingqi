<?php
$section  = 'site_other';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'toggle',
	'setting'     => 'box_mode',
	'label'       => esc_html( __( 'Box mode', 'tm-finance' ) ),
	'description' => esc_html( __( 'Enabling this option then your site will switch to box mode', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 0,
) );

Kirki::add_field( 'tm-finance', array(
	'type'        => 'toggle',
	'setting'     => 'back_to_top',
	'label'       => esc_html( __( 'Back to top', 'tm-finance' ) ),
	'description' => esc_html( __( 'Enabling this option will display back to top button', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );
