<?php  
	/**
	 * The template created for displaying shop categories options 
	 *
	 * @version 0.0.1
	 * @since 6.0.0
	 */
	
	// section shop-categories
	Kirki::add_section( 'shop-categories', array(
	    'title'          => esc_html__( 'Categories', 'xstore' ),
	    'panel' => 'shop-elements',
	    'icon' => 'dashicons-format-image'
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'toggle',
			'settings'    => 'cats_accordion',
			'label'       => esc_html__( 'Enable Accordion for the product categories widget', 'xstore' ),
			'description' => esc_html__( 'Turn on to enable toggle for the categories with subcategories for the Products Categories WC widget.', 'xstore' ),
			'section'     => 'shop-categories',
			'default'     => 1,
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'toggle',
			'settings'    => 'first_catItem_opened',
			'label'       => esc_html__( 'Open product categories widget by default', 'xstore' ),
			'description' => esc_html__( 'Turn on to keep first-level categories opened by default.', 'xstore' ),
			'section'     => 'shop-categories',
			'default'     => 1,
			'active_callback' => array(
				array(
					'setting'  => 'cats_accordion',
					'operator' => '==',
					'value'    => true,
				),
			)
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'select',
			'settings'    => 'cat_style',
			'label'       => esc_html__( 'Categories style', 'xstore' ),
			'description' => esc_html__( 'Choose the design for the categories if they are chosen to be displayed on the main shop page in the WooCommerce settings.', 'xstore'),
			'section'     => 'shop-categories',
			'default'     => 'default',
			'choices'     => array(
				'default'  => esc_html__( 'Default', 'xstore' ),
                'with-bg'  => esc_html__( 'Title with background', 'xstore' ),
                'zoom'     => esc_html__( 'Zoom', 'xstore' ) ,
                'diagonal' => esc_html__( 'Diagonal', 'xstore' ),
                'classic'  => esc_html__( 'Classic', 'xstore' ),
			),
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'select',
			'settings'    => 'cat_text_color',
			'label'       => esc_html__( 'Categories text color', 'xstore' ),
			'description' => esc_html__( 'Choose the title color scheme for the categories if they are chosen tobe displayed on the main shop page in the WooCommerce settings.', 'xstore'),
			'section'     => 'shop-categories',
			'default'     => 'dark',
			'choices'     => $text_color_scheme,
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'select',
			'settings'    => 'cat_valign',
			'label'       => esc_html__( 'Text vertical align', 'xstore' ),
			'description' => esc_html__( 'Choose the alignment of the title for the categories if they are chosen to be displayed on the main shop page in the WooCommerce settings.', 'xstore' ),
			'section'     => 'shop-categories',
			'default'     => 'center',
			'choices'     => array(
				'center' => esc_html__( 'Center', 'xstore' ),
                'top'    => esc_html__( 'Top', 'xstore' ),
                'bottom' => esc_html__( 'Bottom', 'xstore' ),
			),
		) );

?>