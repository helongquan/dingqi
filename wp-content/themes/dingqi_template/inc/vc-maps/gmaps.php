<?php
vc_map( array(
	'name'     => esc_html( __( 'TM Google Maps', 'tm-finance' ) ),
	'base'     => 'thememove_gmaps',
	'category' => esc_html( sprintf( __( 'by %s', 'tm-finance' ), TM_FINANCE_PARENT_THEME_NAME ) ),
	'params'   => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Address or Coordinate', 'tm-finance' ) ),
			'admin_label' => true,
			'param_name'  => 'address',
			'value'       => '40.7590615,-73.969231',
			'description' => esc_html( __( 'Enter address or coordinate.', 'tm-finance' ) ),
		),
		array(
			'type'        => 'attach_image',
			'heading'     => esc_html( __( 'Marker icon', 'tm-finance' ) ),
			'param_name'  => 'marker_icon',
			'description' => esc_html( __( 'Choose a image for marker address', 'tm-finance' ) ),
		),
		array(
			'type'        => 'textarea_html',
			'heading'     => esc_html( __( 'Marker Information', 'tm-finance' ) ),
			'param_name'  => 'content',
			'description' => esc_html( __( 'Content for info window', 'tm-finance' ) ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Height', 'tm-finance' ) ),
			'param_name'  => 'map_height',
			'value'       => '480',
			'description' => esc_html( __( 'Enter map height (in pixels or percentage)', 'tm-finance' ) ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Width', 'tm-finance' ) ),
			'param_name'  => 'map_width',
			'value'       => '100%',
			'description' => esc_html( __( 'Enter map width (in pixels or percentage)', 'tm-finance' ) ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Zoom level', 'tm-finance' ) ),
			'param_name'  => 'zoom',
			'value'       => '16',
			'description' => esc_html( __( 'Map zoom level', 'tm-finance' ) ),
		),
		array(
			'type'       => 'checkbox',
			'heading'    => esc_html( __( 'Enable Map zoom', 'tm-finance' ) ),
			'param_name' => 'zoom_enable',
			'value'      => array(
				__( 'Enable', 'tm-finance' ) => 'enable'
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html( __( 'Map type', 'tm-finance' ) ),
			'admin_label' => true,
			'param_name'  => 'map_type',
			'description' => esc_html( __( 'Choose a map type', 'tm-finance' ) ),
			'value'       => array(
				__( 'Roadmap', 'tm-finance' )   => 'roadmap',
				__( 'Satellite', 'tm-finance' ) => 'satellite',
				__( 'Hybrid', 'tm-finance' )    => 'hybrid',
				__( 'Terrain', 'tm-finance' )   => 'terrain',
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html( __( 'Map style', 'tm-finance' ) ),
			'admin_label' => true,
			'param_name'  => 'map_style',
			'description' => esc_html( __( 'Choose a map style. This approach changes the style of the Roadmap types (base imagery in terrain and satellite views is not affected, but roads, labels, etc. respect styling rules', 'tm-finance' ) ),
			'value'       => array(
				__( 'Default', 'tm-finance' )          => 'default',
				__( 'Grayscale', 'tm-finance' )        => 'style1',
				__( 'Subtle Grayscale', 'tm-finance' ) => 'style2',
				__( 'Apple Maps-esque', 'tm-finance' ) => 'style3',
				__( 'Pale Dawn', 'tm-finance' )        => 'style4',
				__( 'Muted Blue', 'tm-finance' )       => 'style5',
				__( 'Paper', 'tm-finance' )            => 'style6',
				__( 'Light Dream', 'tm-finance' )      => 'style7',
				__( 'Retro', 'tm-finance' )            => 'style8',
				__( 'Avocado World', 'tm-finance' )    => 'style9',
				__( 'Facebook', 'tm-finance' )         => 'style10',
				__( 'Custom', 'tm-finance' )           => 'custom'
			)
		),
		array(
			'type'       => 'textarea_raw_html',
			'heading'    => esc_html( __( 'Map style snippet', 'tm-finance' ) ),
			'param_name' => 'map_style_snippet',
			'dependency' => array(
				'element' => 'map_style',
				'value'   => 'custom',
			)
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html( __( 'Extra class name', 'tm-finance' ) ),
			'param_name'  => 'el_class',
			'description' => esc_html( __( 'If you want to use multiple Google Maps in one page, please add a class name for them.', 'tm-finance' ) ),
		),
	)
) );