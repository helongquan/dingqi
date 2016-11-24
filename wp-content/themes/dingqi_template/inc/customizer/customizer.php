<?php
/**
 * Infinity Theme Customizer
 *
 * @package Infinity
 */

/**
 * Configuration for the Kirki Customizer
 * ======================================
 */
function tm_finance_config() {
	$args = array(
		'styles_priority' => 999,
		'width'           => '300px',
		'url_path'        => TM_FINANCE_THEME_ROOT . '/core/kirki/',
	);

	return $args;
}

add_filter( 'kirki/config', 'tm_finance_config' );

/**
 * Remove Unused Native Sections
 * =============================
 */
function tm_finance_remove_customizer_sections( $wp_customize ) {
	$wp_customize->remove_section( 'nav' );
	$wp_customize->remove_section( 'colors' );
	//$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_control( 'blogname' );
	$wp_customize->remove_control( 'blogdescription' );
	$wp_customize->remove_control( 'page_for_posts' );
	$wp_customize->remove_control( 'display_header_text' );
	//$wp_customize->remove_control( 'nav_menu_locations[primary]' );
	//$wp_customize->remove_control( 'nav_menu_locations[footer]' );

}

add_action( 'customize_register', 'tm_finance_remove_customizer_sections' );

/**
 * General setups
 * ==============
 */
Kirki::add_config( 'tm-finance', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

require_once get_template_directory() . '/inc/customizer/panels.php';
require_once get_template_directory() . '/inc/customizer/site/_site.php';
require_once get_template_directory() . '/inc/customizer/top/_top.php';
require_once get_template_directory() . '/inc/customizer/header/_header.php';
require_once get_template_directory() . '/inc/customizer/navigation/_nav.php';
require_once get_template_directory() . '/inc/customizer/footer/_footer.php';
require_once get_template_directory() . '/inc/customizer/page/_page.php';
require_once get_template_directory() . '/inc/customizer/post/_post.php';
if ( class_exists( 'WooCommerce' ) ) {
	require_once get_template_directory() . '/inc/customizer/woocommerce/_woo.php';
}
require_once get_template_directory() . '/inc/customizer/custom/_custom.php';

/**
 * Add custom css
 * ==============
 */
function tm_finance_customize_preview_css() {
	wp_enqueue_style( 'tm-finance-kirki-custom-css', TM_FINANCE_THEME_ROOT . '/core/custom.css' );
}

add_action( 'customize_controls_init', 'tm_finance_customize_preview_css' );

// Build URL for customizer
add_filter( 'kirki/values/get_value', 'tm_finance_kirki_db_get_theme_mod_value', 10, 2 );
function tm_finance_kirki_db_get_theme_mod_value( $value, $setting ) {
	static $settings;

	if ( is_page() ) {

		$presets = apply_filters( 'tm_molly_page_meta_box_presets', array() );

		if ( ! empty( $presets ) ) {
			foreach ( $presets as $preset ) {
				$page_preset_value = get_post_meta( get_the_ID(), 'tm_molly_' . $preset, true );

				if ( $page_preset_value ) {
					$_GET[ $preset ] = $page_preset_value;
				}
			}
		}

	}


	if ( is_null( $settings ) || ( empty( $settings ) && is_page() ) ) {
		$settings = array();

		if ( ! empty( $_GET ) ) {
			foreach ( $_GET as $key => $query_value ) {
				if ( ! empty( Kirki::$fields[ $key ] ) ) {
					$settings[ $key ] = $query_value;

					if ( is_array( Kirki::$fields[ $key ] ) &&
					     'preset' == Kirki::$fields[ $key ]['type'] &&
					     ! empty( Kirki::$fields[ $key ]['choices'] ) &&
					     ! empty( Kirki::$fields[ $key ]['choices'][ $query_value ] ) &&
					     ! empty( Kirki::$fields[ $key ]['choices'][ $query_value ]['settings'] )
					) {

						foreach ( Kirki::$fields[ $key ]['choices'][ $query_value ]['settings'] as $kirki_setting => $kirki_value ) {
							$settings[ $kirki_setting ] = $kirki_value;
						}
					}
				}
			}
		}
	}

	if ( isset ( $settings[ $setting ] ) ) {
		return $settings[ $setting ];
	}

	return $value;
}