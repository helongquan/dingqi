<?php
$panel    = 'navigation';
$priority = 1;
Kirki::add_section( 'navigation_general', array(
	'title'    => esc_html( __( 'General', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'navigation_desktop_menu', array(
	'title'    => esc_html( __( 'Desktop menu', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-desktop',
) );

require_once get_template_directory() . '/inc/customizer/navigation/general.php';
require_once get_template_directory() . '/inc/customizer/navigation/desktop-menu.php';