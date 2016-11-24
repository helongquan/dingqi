<?php
$panel    = 'footer';
$priority = 1;

Kirki::add_section( 'footer_general', array(
	'title'    => esc_html( __( 'General', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'footer_content', array(
	'title'    => esc_html( __( 'Content', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-format-aside',
) );

Kirki::add_section( 'footer_copyright', array(
	'title'    => esc_html( __( 'Copyright', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-shield',
) );

require_once get_template_directory() . '/inc/customizer/footer/general.php';
require_once get_template_directory() . '/inc/customizer/footer/content.php';
require_once get_template_directory() . '/inc/customizer/footer/copyright.php';