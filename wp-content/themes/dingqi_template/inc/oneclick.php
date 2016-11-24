<?php
add_filter( 'thememove_import_theme', 'tm_finance_import_theme' );

function tm_finance_import_theme() {
	return TM_FINANCE_PARENT_THEME_NAME;
}

add_filter( 'thememove_import_demos', 'tm_finance_import_demos' );

function tm_finance_import_demos() {
	return array(
		'thememove01' => array(
			'screenshot' => TM_FINANCE_THEME_ROOT . '/screenshot.png',
			'name'       => TM_FINANCE_PARENT_THEME_NAME
		)
	);
}

add_filter( 'thememove_import_types', 'tm_finance_import_types' );

function tm_finance_import_types() {
	return array(
		'all'            => 'All',
		'content'        => 'Content',
		'widgets'        => 'Widgets',
		'page_options'   => 'Page Options',
		'menus'          => 'Menus',
		'essential_grid' => 'Essential Grid',
		'rev_slider'     => 'Revolution Slider'
	);
}