<?php
$panel    = 'page';
$priority = 1;
Kirki::add_section( 'page_general', array(
	'title'    => esc_html( __( 'General', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'page_title', array(
	'title'    => esc_html( __( 'Title', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-clipboard',
) );

require_once get_template_directory() . '/inc/customizer/page/general.php';
require_once get_template_directory() . '/inc/customizer/page/title.php';