<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB directory)
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field object $field Field object
 *
 * @return bool                     True if metabox should show
 */
function cmb2_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}

	return true;
}

add_filter( 'cmb2_meta_boxes', 'tm_finance_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 *
 * @return array
 */
function tm_finance_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'tm_finance_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes['page_metabox'] = array(
		'id'           => 'page_metabox',
		'title'        => esc_html( __( 'Page Settings', 'tm-finance' ) ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		'fields'       => array(
			array(
				'name'    => esc_html( __( 'Page Layout', 'tm-finance' ) ),
				'desc'    => esc_html( __( 'Choose a layout you want', 'tm-finance' ) ),
				'id'      => $prefix . 'page_layout_private',
				'type'    => 'select',
				'options' => array(
					'default'         => esc_html( __( 'Default', 'tm-finance' ) ),
					'full-width'      => esc_html( __( 'Full width', 'tm-finance' ) ),
					'content-sidebar' => esc_html( __( 'Content-Sidebar', 'tm-finance' ) ),
					'sidebar-content' => esc_html( __( 'Sidebar-Content', 'tm-finance' ) ),
				),
			),
			array(
				'name' => esc_html( __( 'Disable Title', 'tm-finance' ) ),
				'desc' => esc_html( __( 'Check this box to disable the title of the page', 'tm-finance' ) ),
				'id'   => $prefix . 'disable_title',
				'type' => 'checkbox'
			),
			array(
				'name' => esc_html( __( 'Title Background', 'tm-finance' ) ),
				'desc' => esc_html( __( 'Upload an image or enter a URL for heading title', 'tm-finance' ) ),
				'id'   => $prefix . 'heading_image',
				'type' => 'file',
			),
			array(
				'name' => esc_html( __( 'Custom Class', 'tm-finance' ) ),
				'desc' => esc_html( __( 'Enter custom class for this page', 'tm-finance' ) ),
				'id'   => $prefix . 'custom_class',
				'type' => 'text'
			),
		),
	);

	return $meta_boxes;
}
