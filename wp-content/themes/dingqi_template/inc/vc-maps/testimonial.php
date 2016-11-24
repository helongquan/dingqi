<?php
vc_map( array(
	'name'                      => esc_html( __( 'TM Testimonials', 'tm-finance' ) ),
	'base'                      => 'thememove_testimonial',
	'category'                  => esc_html( sprintf( __( 'by %s', 'tm-finance' ), TM_FINANCE_PARENT_THEME_NAME ) ),
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html( __( 'Style', 'tm-finance' ) ),
			'param_name'  => 'style',
			'admin_label' => true,
			'value'       => array(
				__( 'Style 01', 'tm-finance' ) => '1',
				__( 'Style 02', 'tm-finance' ) => '2',
				__( 'Style 03', 'tm-finance' ) => '3',
				__( 'Style 04', 'tm-finance' ) => '4',
				__( 'Style 05', 'tm-finance' ) => '5',
				__( 'Style 06', 'tm-finance' ) => '6',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html( __( 'Enable Carousel', 'tm-finance' ) ),
			'param_name' => 'enable_carousel',
			'value'      => array(
				__( 'No', 'tm-finance' )  => 'false',
				__( 'Yes', 'tm-finance' ) => 'true',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html( __( 'Show Bullets', 'tm-finance' ) ),
			'param_name' => 'display_bullets',
			'value'      => array(
				__( 'No', 'tm-finance' )  => 'false',
				__( 'Yes', 'tm-finance' ) => 'true',
			),
			'dependency' => Array( 'element' => 'enable_carousel', 'value' => array( 'true' ) )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html( __( 'Enable Autoplay', 'tm-finance' ) ),
			'param_name' => 'enable_autoplay',
			'value'      => array(
				__( 'No', 'tm-finance' )  => 'false',
				__( 'Yes', 'tm-finance' ) => 'true',
			),
			'dependency' => Array( 'element' => 'enable_carousel', 'value' => array( 'true' ) )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Slides to display', 'tm-finance' ) ),
			'param_name'  => 'slides_to_display',
			'value'       => '',
			'description' => esc_html( __( 'Number of Slides to display (default: 2)', 'tm-finance' ) ),
			'dependency'  => Array( 'element' => 'enable_carousel', 'value' => array( 'true' ) )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Number', 'tm-finance' ) ),
			'param_name'  => 'limit',
			'value'       => '6',
			'description' => esc_html( __( 'Number of Testimonials', 'tm-finance' ) ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html( __( 'Order by', 'tm-finance' ) ),
			'param_name'  => 'orderby',
			'value'       => array(
				__( 'None', 'tm-finance' )       => 'none',
				__( 'ID', 'tm-finance' )         => 'ID',
				__( 'Title', 'tm-finance' )      => 'title',
				__( 'Date', 'tm-finance' )       => 'date',
				__( 'Menu Order', 'tm-finance' ) => 'menu_order',
			),
			'description' => esc_html( __( 'How to order the items', 'tm-finance' ) ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html( __( 'Order', 'tm-finance' ) ),
			'param_name'  => 'order',
			'value'       => array(
				__( 'DESC', 'tm-finance' ) => 'DESC',
				__( 'ASC', 'tm-finance' )  => 'ASC',
			),
			'description' => esc_html( __( 'How to order the items', 'tm-finance' ) ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html( __( 'Show Author Info', 'tm-finance' ) ),
			'param_name'  => 'display_author',
			'value'       => array(
				__( 'No', 'tm-finance' )  => 'false',
				__( 'Yes', 'tm-finance' ) => 'true',
			),
			'description' => esc_html( __( 'Choose yes to show author name and byline', 'tm-finance' ) ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html( __( 'Show URL', 'tm-finance' ) ),
			'param_name'  => 'display_url',
			'value'       => array(
				__( 'No', 'tm-finance' )  => 'false',
				__( 'Yes', 'tm-finance' ) => 'true',
			),
			'description' => esc_html( __( 'Choose yes to show author url', 'tm-finance' ) ),
			'dependency'  => Array( 'element' => 'display_author', 'value' => array( 'true' ) )
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html( __( 'Show Author Image', 'tm-finance' ) ),
			'param_name'  => 'display_avatar',
			'value'       => array(
				__( 'No', 'tm-finance' )  => false,
				__( 'Yes', 'tm-finance' ) => true,
			),
			'description' => esc_html( __( 'Choose yes to show author avatar', 'tm-finance' ) ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Avatar Size', 'tm-finance' ) ),
			'param_name'  => 'size',
			'value'       => '',
			'description' => esc_html( __( 'Size of Avatar', 'tm-finance' ) ),
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Extra class name', 'tm-finance' ) ),
			'param_name' => 'el_class',
		)
	)
) );