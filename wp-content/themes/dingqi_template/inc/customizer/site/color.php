<?php
$section  = 'site_color';
$priority = 1;
Kirki::add_field( 'tm-finance', array(
	'type'     => 'custom',
	'setting'  => 'skin_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Main Color</div>',
) );
Kirki::add_field( 'tm-finance', array(
	'type'        => 'color',
	'setting'     => 'primary_color',
	'label'       => esc_html( __( 'Primary Color', 'tm-finance' ) ),
	'description' => esc_html( __( 'Choose primary color for website', 'tm-finance' ) ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TM_FINANCE_PRIMARY_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.primary_color, .amount, .popup-search-close:hover, .site-header .social-menu ul li:hover a:before, a:hover, a:hover h1, a:hover h2, a:hover h3, a:hover h4, a:hover h5, a:hover h6, .site-footer a:hover, .copyright a, .site-top a:hover, .wpb-js-composer .eg-tm-service-02-element-33, .wpb-js-composer .eg-tm-service-02-element-36, .tm-ourhistory ul li:before, .tm-ourhistory2 ul li:before, .esg-entry-content .eg-tm-services-03-element-33, .better-menu-widget .current-menu-item a, .better-menu-widget .current_page_item a, .tm-list ul li:before, .tm-list2 ul li:before, .tm-tab .vc_tta-tabs-container ul li.vc_active a, .widget_product_categories li.current-cat a, .hentry .entry-meta a, .widget_categories li.current-cat a, .single-post .comment .comment-reply-link, .page .comment .comment-reply-link, .single-post .comment-respond input[type="submit"], .page .comment-respond input[type="submit"], .countdown .number, .content404 .icon i, .tm-list-2 ul li:before',
			'property' => 'color',
		),
		array(
			'element'  => '.primary_bgcolor, .header02 .site-header .social-menu ul li, input[type="submit"], .site-content input[type="submit"], .products .product-item .add_to_cart_button:hover, .products .product-item .ajax_add_to_cart:hover, .ourteam-type3 .ourteam-info .ourteam-socials .icon:hover, .header01 .site-header .social-menu ul li:hover, .testimonials-style3 .owl-item:before, .testimonials-style4 .owl-item:before, .testimonials-style5 .owl-item:before, .testimonials-style6 .owl-item:before, .testimonials-style7 .owl-item:before, .projects-style1 .projects-item .projects-title a:hover, .ourteam-type2 .ourteam-info .ourteam-socials .icon:hover, #tm-services-01 li .esg-media-cover-wrapper .esg-entry-content .esg-content:first-child, .products .product-item .onsale, .single-product .product .cart .single_add_to_cart_button, .single-product .product .cart .single_add_to_cart_button:hover, .post-thumb .dates, .hentry .entry-footer .read-more:hover, .hentry .share a i:hover:before, .single-post .comment-respond input[type="submit"]:hover, .page .comment-respond input[type="submit"]:hover, .tm-getconnected .social-menu .menu li:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce table.shop_table thead, .woocommerce .cart_totals .wc-proceed-to-checkout .checkout-button',
			'property' => 'background-color',
		),
		array(
			'element'  => '.primary_bdcolor, input[type="submit"], .site-content input[type="submit"], .tm-tab .vc_tta-tabs-container ul.vc_tta-tabs-list li.vc_tta-tab.vc_active > a, .vc_tta.tm-accordion .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-panel-heading, .vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .hentry .entry-footer .read-more:hover, .single-post .comment-respond input[type="submit"], .page .comment-respond input[type="submit"], .countdown .number, .woocommerce .widget_price_filter .price_slider_amount .button:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .sidebar ul li.current-menu-item',
			'property' => 'border-color',
		)
	),
	'js_vars'     => array(
		array(
			'element'  => '.primary_color, .amount, .popup-search-close:hover, .site-header .social-menu ul li:hover a:before, a:hover, a:hover h1, a:hover h2, a:hover h3, a:hover h4, a:hover h5, a:hover h6, .site-footer a:hover, .copyright a, .site-top a:hover, .wpb-js-composer .eg-tm-service-02-element-33, .wpb-js-composer .eg-tm-service-02-element-36, .tm-ourhistory ul li:before, .tm-ourhistory2 ul li:before, .esg-entry-content .eg-tm-services-03-element-33, .better-menu-widget .current-menu-item a, .better-menu-widget .current_page_item a, .tm-list ul li:before, .tm-list2 ul li:before, .tm-tab .vc_tta-tabs-container ul li.vc_active a, .widget_product_categories li.current-cat a, .hentry .entry-meta a, .widget_categories li.current-cat a, .single-post .comment .comment-reply-link, .page .comment .comment-reply-link, .single-post .comment-respond input[type="submit"], .page .comment-respond input[type="submit"], .countdown .number, .content404 .icon i, .tm-list-2 ul li:before',
			'function' => 'css',
			'property' => 'color',
		),
		array(
			'element'  => '.primary_bgcolor, .header02 .site-header .social-menu ul li, input[type="submit"], .site-content input[type="submit"], .products .product-item .add_to_cart_button:hover, .products .product-item .ajax_add_to_cart:hover, .ourteam-type3 .ourteam-info .ourteam-socials .icon:hover, .header01 .site-header .social-menu ul li:hover, .testimonials-style3 .owl-item:before, .testimonials-style4 .owl-item:before, .testimonials-style5 .owl-item:before, .testimonials-style6 .owl-item:before, .testimonials-style7 .owl-item:before, .projects-style1 .projects-item .projects-title a:hover, .ourteam-type2 .ourteam-info .ourteam-socials .icon:hover, #tm-services-01 li .esg-media-cover-wrapper .esg-entry-content .esg-content:first-child, .products .product-item .onsale, .single-product .product .cart .single_add_to_cart_button, .single-product .product .cart .single_add_to_cart_button:hover, .post-thumb .dates, .hentry .entry-footer .read-more:hover, .hentry .share a i:hover:before, .single-post .comment-respond input[type="submit"]:hover, .page .comment-respond input[type="submit"]:hover, .tm-getconnected .social-menu .menu li:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce table.shop_table thead, .woocommerce .cart_totals .wc-proceed-to-checkout .checkout-button',
			'function' => 'css',
			'property' => 'background-color',
		),
		array(
			'element'  => '.primary_bdcolor, input[type="submit"], .site-content input[type="submit"], .tm-tab .vc_tta-tabs-container ul.vc_tta-tabs-list li.vc_tta-tab.vc_active > a, .vc_tta.tm-accordion .vc_tta-panels .vc_tta-panel.vc_active .vc_tta-panel-heading, .vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .hentry .entry-footer .read-more:hover, .single-post .comment-respond input[type="submit"], .page .comment-respond input[type="submit"], .countdown .number, .woocommerce .widget_price_filter .price_slider_amount .button:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .sidebar ul li.current-menu-item',
			'function' => 'css',
			'property' => 'border-color',
		),
	),
) );