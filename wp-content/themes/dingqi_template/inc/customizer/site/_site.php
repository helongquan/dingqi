<?php
$panel    = 'site';
$priority = 1;

Kirki::add_section( 'site_color', array(
	'title'    => esc_html( __( 'Color', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-appearance',
) );

Kirki::add_section( 'site_skin', array(
	'title'    => esc_html( __( 'Preset', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-art',
) );

Kirki::add_section( 'site_content', array(
	'title'    => esc_html( __( 'Content', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-format-aside',
) );

Kirki::add_section( 'site_heading', array(
	'title'    => esc_html( __( 'Heading', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-customizer',
) );

Kirki::add_section( 'site_breadcrumb', array(
	'title'    => esc_html( __( 'Breadcrumb', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-filter',
) );

Kirki::add_section( 'site_other', array(
	'title'    => esc_html( __( 'Other', 'tm-finance' ) ),
	'icon'     => 'schedule',
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'site_bg', array(
	'title'    => esc_html( __( 'Background', 'tm-finance' ) ),
	'panel'    => $panel,
	'priority' => $priority ++,
	'icon'     => 'dashicons-format-image',
) );

require_once get_template_directory() . '/inc/customizer/site/color.php';
require_once get_template_directory() . '/inc/customizer/site/skin.php';
require_once get_template_directory() . '/inc/customizer/site/content.php';
require_once get_template_directory() . '/inc/customizer/site/heading.php';
if ( function_exists( 'tm_bread_crumb' ) ) {
	require_once get_template_directory() . '/inc/customizer/site/breadcrumb.php';
}
require_once get_template_directory() . '/inc/customizer/site/other.php';
require_once get_template_directory() . '/inc/customizer/site/bg.php';
