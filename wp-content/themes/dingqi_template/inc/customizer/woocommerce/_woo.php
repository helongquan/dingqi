<?php
$panel    = 'woo';
$priority = 1;

Kirki::add_section( 'woo_general', array(
	'title'    => esc_html( __( 'General', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
) );

require_once get_template_directory() . '/inc/customizer/woocommerce/general.php';
