<?php
$panel    = 'custom';
$priority = 1;

Kirki::add_section( 'custom_css', array(
	'title'    => esc_html( __( 'Custom CSS', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );

Kirki::add_section( 'custom_js', array(
	'title'    => esc_html( __( 'Custom JS', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );

require_once get_template_directory() . '/inc/customizer/custom/css.php';
require_once get_template_directory() . '/inc/customizer/custom/js.php';