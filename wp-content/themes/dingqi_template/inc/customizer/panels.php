<?php
$priority = 1;
// Add panels
Kirki::add_panel( 'site', array(
	'priority'    => $priority ++,
	'title'       => esc_html( __( 'Site', 'tm-finance' ) ),
	'description' => esc_html( __( 'My Description', 'tm-finance' ) ),
	'icon'        => 'dashicons-admin-site',
) );

Kirki::add_panel( 'top', array(
	'priority'    => $priority ++,
	'title'       => esc_html( __( 'Top', 'tm-finance' ) ),
	'description' => esc_html( __( 'Top area above header with break news and social icons', 'tm-finance' ) ),
	'icon'        => 'dashicons-schedule',
) );

Kirki::add_panel( 'header', array(
	'priority'    => $priority ++,
	'title'       => esc_html( __( 'Header', 'tm-finance' ) ),
	'description' => esc_html( __( 'Top area above header with break news and social icons', 'tm-finance' ) ),
	'icon'        => 'dashicons-archive',
) );

Kirki::add_panel( 'navigation', array(
	'priority'    => $priority ++,
	'title'       => esc_html( __( 'Navigation', 'tm-finance' ) ),
	'description' => esc_html( __( 'My Description', 'tm-finance' ) ),
	'icon'        => 'dashicons-menu',
) );

Kirki::add_panel( 'footer', array(
	'priority'    => $priority ++,
	'title'       => esc_html( __( 'Footer', 'tm-finance' ) ),
	'description' => esc_html( __( 'My Description', 'tm-finance' ) ),
	'icon'        => 'dashicons-screenoptions',
) );

Kirki::add_panel( 'page', array(
	'priority'    => $priority ++,
	'title'       => esc_html( __( 'Page', 'tm-finance' ) ),
	'description' => esc_html( __( 'My Description', 'tm-finance' ) ),
	'icon'        => 'dashicons-admin-page',
) );

Kirki::add_panel( 'post', array(
	'priority'    => $priority ++,
	'title'       => esc_html( __( 'Post', 'tm-finance' ) ),
	'description' => esc_html( __( 'My Description', 'tm-finance' ) ),
	'icon'        => 'dashicons-edit',
) );

Kirki::add_panel( 'woo', array(
	'priority'    => $priority ++,
	'title'       => esc_html( __( 'Woocommerce', 'tm-finance' ) ),
	'description' => esc_html( __( 'My Description', 'tm-finance' ) ),
	'icon'        => 'dashicons-cart',
) );

Kirki::add_panel( 'custom', array(
	'priority'    => $priority ++,
	'title'       => esc_html( __( 'Custom', 'tm-finance' ) ),
	'description' => esc_html( __( 'You can add custom CSS and Javascript here', 'tm-finance' ) ),
	'icon'        => 'dashicons-admin-generic',
) );