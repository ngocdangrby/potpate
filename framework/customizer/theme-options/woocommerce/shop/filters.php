<?php
/**
 * The template created for displaying shop page filters options
 *
 * @version 1.0.0
 * @since 7.1.0
 */

// section shop-page-filters
Kirki::add_section( 'shop-page-filters', array(
	'title' => esc_html__( 'Shop page Filters', 'xstore' ),
	'panel' => 'shop',
	'icon' => 'dashicons-filter'
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'filter_opened',
	'label'       => esc_html__( 'Open filter by default', 'xstore' ),
	'description' => esc_html__( 'Turn on if you use filters widget area to display "Filters" button in the shop toolbar and want to keep this area opened at start.', 'xstore' ),
	'section'     => 'shop-page-filters',
	'default'     => 0,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'slider',
	'settings'    => 'filters_columns',
	'label'       => esc_html__( 'Widgets columns for filters area', 'xstore' ),
	'description' => esc_html__( 'Controls the number of columns for the filters widget area content.', 'xstore' ),
	'section'     => 'shop-page-filters',
	'default'     => 3,
	'choices'     => array(
		'min'  => 2,
		'max'  => 5,
		'step' => 1,
	),
) );


Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'sidebar_widgets_scroll',
	'label'       => esc_html__( 'Sidebar widgets with scrollable content', 'xstore' ),
	'description' => esc_html__( 'Turn on to limit height of the sidebar widgets', 'xstore' ),
	'section'     => 'shop-page-filters',
	'default'     => 0,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'slider',
	'settings'    => 'sidebar_widgets_height',
	'label'       => esc_html__( 'Sidebar widgets height', 'xstore' ),
	'description' => esc_html__( 'Add the max-height of the sidebar widgets before scroll appears. In pixels.', 'xstore' ),
	'section'     => 'shop-page-filters',
	'default'     => 250,
	'choices'     => array(
		'min'  => 50,
		'max'  => 800,
		'step' => 1,
	),
	'active_callback' => array(
		array(
			'setting'  => 'sidebar_widgets_scroll',
			'operator' => '==',
			'value'    => true,
		),
	),
	'output' => array(
		array(
			'context'   => array('editor', 'front'),
			'element' => '.archive.woocommerce-page.s_widgets-with-scroll .sidebar .sidebar-widget:not(.sidebar-slider):not(.etheme_widget_satick_block) > ul, .archive.woocommerce-page.s_widgets-with-scroll .shop-filters .sidebar-widget:not(.sidebar-slider):not(.etheme_widget_satick_block) > ul, .archive.woocommerce-page.s_widgets-with-scroll .sidebar .sidebar-widget:not(.sidebar-slider):not(.etheme_widget_satick_block) > div, .archive.woocommerce-page.s_widgets-with-scroll .shop-filters .sidebar-widget:not(.sidebar-slider):not(.etheme_widget_satick_block) > div',
			'property' => 'max-height',
			'units' => 'px'
		)
	)
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'sidebar_widgets_open_close',
	'label'       => esc_html__( 'Sidebar widgets toggle', 'xstore' ),
	'description' => esc_html__( 'Turn on to enable toggle for the sidebar widget title to open/close widget content.', 'xstore' ),
	'section'     => 'shop-page-filters',
	'default'     => 0,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'select',
	'settings'    => 'sidebar_widgets_open_close_type',
	'label'       => esc_html__( 'Sidebar widgets content', 'xstore' ),
	'description' => esc_html__('Type of widget content.', 'xstore'),
	'section'     => 'shop-page-filters',
	'default'     => 'open',
	'choices'     => array(
		'open' => esc_html__( 'Open always', 'xstore' ),
		'closed' => esc_html__( 'Collapsed always', 'xstore' ),
		'closed_mobile' => esc_html__( 'Collapsed on mobile', 'xstore' ),
	),
	'active_callback' => array(
		array(
			'setting'  => 'sidebar_widgets_open_close',
			'operator' => '==',
			'value'    => true,
		),
	),
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'show_plus_filters',
	'label'       => esc_html__( 'Show more filters on click', 'xstore' ),
	'description' => esc_html__( 'Will add "+1" button to filters', 'xstore'),
	'section'     => 'shop-page-filters',
	'default'     => 0,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'slider',
	'settings'    => 'show_plus_filter_after',
	'label'       => esc_html__( 'Show more filters after X items', 'xstore' ),
	'section'     => 'shop-page-filters',
	'choices'     => array(
		'min'  => 1,
		'max'  => 10,
		'step' => 1,
	),
	'default'     => 3,
	'active_callback' => array(
		array(
			'setting'  => 'show_plus_filters',
			'operator' => '==',
			'value'    => true,
		),
	)
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'ajax_product_filter',
	'label'       => esc_html__( 'Ajax product filters', 'xstore' ),
	'description' => esc_html__( 'Turn on to use Ajax for product filters.', 'xstore' ),
	'section'     => 'shop-page-filters',
	'default'     => 0,
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'ajax_categories',
	'label'       => esc_html__( 'Ajax for product categories widget', 'xstore' ),
	'section'     => 'shop-page-filters',
	'default'     => 1,
	'active_callback' => array(
		array(
			'setting'  => 'ajax_product_filter',
			'operator' => '=',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'toggle',
	'settings'    => 'ajax_product_filter_scroll_top',
	'label'       => esc_html__( 'Scroll to Top after ajax product filters', 'xstore' ),
	'description' => esc_html__( 'Turn on to scroll window to top after ajax for product filters.', 'xstore' ),
	'section'     => 'shop-page-filters',
	'default'     => 1,
	'active_callback' => array(
		array(
			'setting'  => 'ajax_product_filter',
			'operator' => '=',
			'value'    => 1,
		),
	)
) );