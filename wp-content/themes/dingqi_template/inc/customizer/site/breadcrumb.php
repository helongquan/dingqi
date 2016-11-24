<?php
/**
 * Site General
 * ================
 */
$section  = 'site_breadcrumb';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'toggle',
	'setting'     => 'breadcrumb_enable',
	'label'       => esc_html( __( 'Breadcrumb', 'tm-finance' ) ),
	'description' => esc_html( __( 'Enabling this option will display breadcrumb on every page', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );