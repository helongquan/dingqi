<?php
vc_map( array(
	'name'                      => esc_html( __( 'TM Projects', 'tm-finance' ) ),
	'base'                      => 'thememove_projects',
	'category'                  => esc_html( sprintf( __( 'by %s', 'tm-finance' ), TM_FINANCE_PARENT_THEME_NAME ) ),
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
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
			'value'       => '8',
			'description' => esc_html( __( 'Number of Projects', 'tm-finance' ) ),
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
			'type'       => 'textfield',
			'heading'    => esc_html( __( 'Extra class name', 'tm-finance' ) ),
			'param_name' => 'el_class',
		)
	)
) );