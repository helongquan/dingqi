<?php
$section  = 'header_search';
$priority = 1;

Kirki::add_field( 'tm-finance', array(
	'type'        => 'toggle',
	'setting'     => 'search_enable',
	'label'       => esc_html( __( 'Search', 'tm-finance' ) ),
	'description' => esc_html( __( 'Turn on this option if you want to enable search box in header', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );