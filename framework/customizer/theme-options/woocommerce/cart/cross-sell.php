<?php
/**
 * The template created for displaying cart options
 *
 * @version 1.0.0
 * @since 7.2.3
 *
 */

// section single-product-page-layout
Kirki::add_section( 'cart-cross-sell', array(
	'title'          => esc_html__( 'Cross-sell products', 'xstore' ),
	'panel' => 'cart-page',
	'icon' => 'dashicons-tag'
) );

// cart_products_cross_sell_type
Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'radio-image',
	'settings'    => 'cart_products_cross_sell_type_et-desktop',
	'label'       => esc_html__('Type', 'xstore'),
	'section'     => 'cart-cross-sell',
	'default'     => 'slider',
	'multiple'    => 1,
	'choices'     => array(
		'grid' => ETHEME_CODE_CUSTOMIZER_IMAGES . '/woocommerce/global/grid.svg',
		'slider' => ETHEME_CODE_CUSTOMIZER_IMAGES . '/woocommerce/global/slider.svg',
//		'widget' => ETHEME_CODE_CUSTOMIZER_IMAGES . '/woocommerce/global/widget.svg',
	)
) );

// cart_products_cross_sell_per_view
Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'slider',
	'settings'    => 'cart_products_cross_sell_per_view_et-desktop',
	'label'       => esc_html__( 'Cross-sell products per view', 'xstore' ),
	'section'     => 'cart-cross-sell',
	'default'     => 4,
	'choices'     => array(
		'min'  => '1',
		'max'  => '6',
		'step' => '1',
	),
) );

// cart_products_cross_sell_limit
Kirki::add_field( 'et_kirki_options', array(
	'type'        => 'slider',
	'settings'    => 'cart_products_cross_sell_limit_et-desktop',
	'label'       => esc_html__( 'Cross-sell products limit', 'xstore' ),
	'section'     => 'cart-cross-sell',
	'default'     => 7,
	'choices'     => array(
		'min'  => '1',
		'max'  => '30',
		'step' => '1',
	),
) );