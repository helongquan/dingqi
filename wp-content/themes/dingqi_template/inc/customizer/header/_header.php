<?php
$panel    = 'header';
$priority = 1;

Kirki::add_section( 'header_general', array(
	'title'    => esc_html( __( 'General', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'header_logo', array(
	'title'    => esc_html( __( 'Logo', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-lightbulb',
) );

Kirki::add_section( 'header_search', array(
	'title'    => esc_html( __( 'Search', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-search',
) );

Kirki::add_section( 'header_mini_cart', array(
	'title'    => esc_html( __( 'Mini cart', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-cart',
) );

require_once get_template_directory() . '/inc/customizer/header/general.php';
require_once get_template_directory() . '/inc/customizer/header/logo.php';
require_once get_template_directory() . '/inc/customizer/header/search.php';