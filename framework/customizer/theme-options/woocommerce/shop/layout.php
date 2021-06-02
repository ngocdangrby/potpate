<?php
/**
 * The template created for displaying shop page options
 *
 * @version 0.0.1
 * @since 6.0.0
 */

// section shop-page
Kirki::add_section( 'shop-page', array(
	'title'          => esc_html__( 'Shop page Layout', 'xstore' ),
	'panel' => 'shop',
	'icon' => 'dashicons-schedule'
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'slider',
	'settings'    => 'products_per_page',
	'label'       => esc_html__( 'Products per page', 'xstore' ),
	'description' => esc_html__( 'Add the number of products to show per page before pagination appears. Use -1 to show "All"', 'xstore' ),
	'section'     => 'shop-page',
	'default'     => 12,
	'choices'     => array(
		'min'  => '-1',
		'max'  => 100,
		'step' => 1,
	),
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'     => 'text',
	'settings' => 'et_ppp_options',
	'label'    => esc_html__( 'Per page variants separated by commas', 'xstore' ),
	'description' => esc_html__( 'Add variants and allow the customer to choose the products quantity shown per page. For ex.: 9,12,24,36,-1. Use -1 to show "All".', 'xstore' ),
	'section'  => 'shop-page',
	'default'  => '12,24,36,-1',
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'radio-image',
	'settings'    => 'grid_sidebar',
	'label'       => esc_html__( 'Sidebar position', 'xstore' ),
	'description' => esc_html__( 'Choose the position of the sidebar for the shop page and product categories.', 'xstore'),
	'section'     => 'shop-page',
	'default'     => 'left',
	'choices'     => $sidebars,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'radio-image',
	'settings'    => 'category_sidebar',
	'label'       => esc_html__( 'Sidebar position on category page', 'xstore' ),
	'description' => esc_html__( 'Choose the position of the sidebar for the product category page.', 'xstore'),
	'section'     => 'shop-page',
	'default'     => 'left',
	'choices'     => $sidebars,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'select',
	'settings'    => 'category_page_columns',
	'label'       => esc_html__( 'Products per row on category page', 'xstore' ),
	'description' => esc_html__( 'Choose the number of product per row on category pages or inherit it from the WooCommerce options for the shop page (Appearance > Customize > WooCommerce > Product catalog).', 'xstore'),
	'section'     => 'shop-page',
	'default'     => 'inherit',
	'choices'     => array(
		'inherit'    => esc_html__( 'Inherit from shop settings', 'xstore' ),
		1 => 1,
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => 6,
	),
	'active_callback' => array(
		array(
			'setting'  => 'view_mode',
			'operator' => '!=',
			'value'    => 'smart',
		),
	)
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'radio-image',
	'settings'    => 'brand_sidebar',
	'label'       => esc_html__( 'Sidebar position on brand page', 'xstore' ),
	'description' => esc_html__( 'Choose the position of the sidebar for the product brand page.', 'xstore'),
	'section'     => 'shop-page',
	'default'     => 'left',
	'choices'     => $sidebars,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'select',
	'settings'    => 'brand_page_columns',
	'label'       => esc_html__( 'Products per row on brand page', 'xstore' ),
	'description' => esc_html__( 'Choose the number of product per row on brand pages or inherit it from the WooCommerce options for the shop page (Appearance > Customize > WooCommerce > Product catalog).', 'xstore'),
	'section'     => 'shop-page',
	'default'     => 'inherit',
	'choices'     => array(
		'inherit'    => esc_html__( 'Inherit from shop settings', 'xstore' ),
		1 => 1,
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => 6,
	),
	'active_callback' => array(
		array(
			'setting'  => 'view_mode',
			'operator' => '!=',
			'value'    => 'smart',
		),
	)
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'shop_sticky_sidebar',
	'label'       => esc_html__( 'Enable sticky sidebar', 'xstore' ),
	'description' => esc_html__( 'Turn on to make the sidebar permanently visible while scrolling at the shop page.', 'xstore' ),
	'section'     => 'shop-page',
	'default'     => 0,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'select',
	'settings'    => 'sidebar_for_mobile',
	'label'       => esc_html__( 'Sidebar position for mobile', 'xstore' ),
	'description' => esc_html__('Choose the sidebar position for the mobile devices.', 'xstore'),
	'section'     => 'shop-page',
	'default'     => 'off_canvas',
	'choices'     => array(
		'top'    => esc_html__( 'Top', 'xstore' ),
		'bottom' => esc_html__( 'Bottom', 'xstore' ),
		'off_canvas' => esc_html__( 'Off-Canvas', 'xstore' )
	),
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'image',
	'settings'    => 'sidebar_for_mobile_icon',
	'label'       => esc_html__( 'Off-canvas icon', 'xstore' ),
	'description' => esc_html__( 'Upload svg icon for the sidebar toggle on mobile. Install SVG Support plugin to be able to upload SVG files.', 'xstore' ) .
	'<a href="https://wordpress.org/plugins/svg-support/" rel="nofollow" target="_blank">' . esc_html__('Install plugin', 'xstore') . '</a>',
	'section'     => 'shop-page',
	'default'     => '',
	'choices'     => array(
		'save_as' => 'array',
	),
	'active_callback' => array(
		array(
			'setting'  => 'sidebar_for_mobile',
			'operator' => '==',
			'value'    => 'off_canvas',
		),
	)
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'shop_sidebar_hide_mobile',
	'label'       => esc_html__( 'Hide sidebar for mobile devices', 'xstore' ),
	'description' => esc_html__( 'Turn on to hide sidebar on the mobile devices.', 'xstore' ),
	'section'     => 'shop-page',
	'default'     => 0,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'shop_full_width',
	'label'       => esc_html__( 'Full width', 'xstore' ),
	'description' => esc_html__( 'Turn on to stretch shop page container.', 'xstore' ),
	'section'     => 'shop-page',
	'default'     => 0,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'products_masonry',
	'label'       => esc_html__( 'Products masonry', 'xstore' ),
	'description' => esc_html__( 'Turn on placing products in optimal position based on available vertical space.', 'xstore' ),
	'section'     => 'shop-page',
	'default'     => 0,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'select',
	'settings'    => 'view_mode',
	'label'       => esc_html__( 'Products view mode', 'xstore' ),
	'description' => esc_html__('Choose the view mode for the shop page.', 'xstore'),
	'section'     => 'shop-page',
	'default'     => 'grid_list',
	'choices'     => array(
		'grid_list' => esc_html__( 'Grid/List', 'xstore' ),
		'list_grid' => esc_html__( 'List/Grid', 'xstore' ),
		'grid'      => esc_html__( 'Only Grid', 'xstore' ),
		'list'      => esc_html__( 'Only List', 'xstore' ),
		'smart' => esc_html__( 'Advanced', 'xstore' )
	),
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'select',
	'settings'    => 'view_mode_smart_active',
	'label'       => esc_html__( 'Default view for smart grid', 'xstore' ),
	'description' => esc_html__('Choose the default view for the shop page.', 'xstore'),
	'section'     => 'shop-page',
	'default'     => '4',
	'choices'     => array(
		'2' => esc_html__( '2 columns grid', 'xstore' ),
		'3' => esc_html__( '3 columns grid', 'xstore' ),
		'4'      => esc_html__( '4 columns grid', 'xstore' ),
		'5'      => esc_html__( '5 columns grid', 'xstore' ),
		'6'      => esc_html__( '6 columns grid', 'xstore' ),
		'list'      => esc_html__( 'List', 'xstore' ),
	),
	'active_callback' => array(
		array(
			'setting'  => 'view_mode',
			'operator' => '=',
			'value'    => 'smart',
		),
	)
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'select',
	'settings'    => 'categories_view_mode_smart_active',
	'label'       => esc_html__( 'Default view for smart grid (category page)', 'xstore' ),
	'description' => esc_html__('Choose the default view for the category page.', 'xstore'),
	'section'     => 'shop-page',
	'default'     => '4',
	'choices'     => array(
		'2' => esc_html__( '2 columns grid', 'xstore' ),
		'3' => esc_html__( '3 columns grid', 'xstore' ),
		'4'      => esc_html__( '4 columns grid', 'xstore' ),
		'5'      => esc_html__( '5 columns grid', 'xstore' ),
		'6'      => esc_html__( '6 columns grid', 'xstore' ),
		'list'      => esc_html__( 'List', 'xstore' ),
	),
	'active_callback' => array(
		array(
			'setting'  => 'view_mode',
			'operator' => '=',
			'value'    => 'smart',
		),
	)
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'select',
	'settings'    => 'brands_view_mode_smart_active',
	'label'       => esc_html__( 'Default view for smart grid (brands page)', 'xstore' ),
	'description' => esc_html__('Choose the default view for the brands page.', 'xstore'),
	'section'     => 'shop-page',
	'default'     => '4',
	'choices'     => array(
		'2' => esc_html__( '2 columns grid', 'xstore' ),
		'3' => esc_html__( '3 columns grid', 'xstore' ),
		'4'      => esc_html__( '4 columns grid', 'xstore' ),
		'5'      => esc_html__( '5 columns grid', 'xstore' ),
		'6'      => esc_html__( '6 columns grid', 'xstore' ),
		'list'      => esc_html__( 'List', 'xstore' ),
	),
	'active_callback' => array(
		array(
			'setting'  => 'view_mode',
			'operator' => '=',
			'value'    => 'smart',
		),
	)
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'select',
	'settings'    => 'product_bage_banner_pos',
	'label'       => esc_html__( 'Shop Page Banner position', 'xstore' ),
	'description' => esc_html__('Controls the position of the shop page banner.', 'xstore'),
	'section'     => 'shop-page',
	'default'     => 1,
	'choices'     => array(
		1 => esc_html__( 'At the top of the page', 'xstore' ),
		2 => esc_html__( 'At the bottom of the page', 'xstore' ),
		3 => esc_html__( 'Above all the shop content', 'xstore' ),
		4 => esc_html__( 'Above all the shop content (full-width)', 'xstore' ),
		0 => esc_html__( 'Disable', 'xstore' ),
	),
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'editor',
	'settings'    => 'product_bage_banner',
	'label'       => esc_html__( 'Shop Page Banner content', 'xstore' ),
	'description' => esc_html__( 'Controls the shop page banner content. Use HTML, static block or slider shortcode. Do not include JS in the field.', 'xstore' ),
	'section'     => 'shop-page',
	'default'     => '',
	'active_callback' => array(
		array(
			'setting'  => 'product_bage_banner_pos',
			'operator' => '!=',
			'value'    => 0,
		),
	)
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'top_toolbar',
	'label'       => esc_html__( 'Show products toolbar on the shop page', 'xstore' ),
	'section'     => 'shop-page',
	'default'     => 1,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'ajax_product_pagination',
	'label'       => esc_html__( 'Ajax product pagination', 'xstore' ),
	'description' => esc_html__( 'Turn on to use Ajax for product pagination.', 'xstore' ),
	'section'     => 'shop-page',
	'default'     => 0,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'ajax_added_product_notify',
	'label'       => esc_html__( 'Product added notification', 'xstore' ),
	'description' => esc_html__( 'Turn on to use Ajax notification on after product added to cart.', 'xstore' ),
	'section'     => 'shop-page',
	'default'     => 1,
) );

?>