<?php  
	/**
	 * The template created for displaying shop color swatches options 
	 *
	 * @version 0.0.2
	 * @since 6.0.0
	 * @log 0.0.2
	 * ADDED: show_all_variations
	 */
	
	// section shop-color-swatches
	Kirki::add_section( 'shop-color-swatches', array(
	    'title'          => esc_html__( 'Variation swatches', 'xstore' ),
	    'panel' => 'shop-elements',
	    'icon' => 'dashicons-image-filter'
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'toggle',
			'settings'    => 'enable_swatch',
			'label'       => esc_html__( 'Variation swatches', 'xstore' ),
			'description' => esc_html__( 'Turn on to use style (color, image or label) for each product attribute.', 'xstore'),
			'section'     => 'shop-color-swatches',
			'default'     => 1,
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'toggle',
			'settings'    => 'show_plus_variations',
			'label'       => esc_html__( 'Show more variation on click', 'xstore' ),
			'description' => esc_html__( 'Will add "+1" button to variations', 'xstore'),
			'section'     => 'shop-color-swatches',
			'default'     => 0,
			'active_callback' => array(
				array(
					'setting'  => 'enable_swatch',
					'operator' => '==',
					'value'    => true,
				),
			)
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'slider',
			'settings'    => 'show_plus_variations_after',
			'label'       => esc_html__( 'Show more variation after', 'xstore' ),
			'section'     => 'shop-color-swatches',
			'choices'     => array(
				'min'  => 1,
				'max'  => 10,
				'step' => 1,
			),
			'default'     => 3,
			'active_callback' => array(
				array(
					'setting'  => 'enable_swatch',
					'operator' => '==',
					'value'    => true,
				),
				array(
					'setting'  => 'show_plus_variations',
					'operator' => '==',
					'value'    => true,
				),
			)
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'select',
			'settings'    => 'swatch_position_shop',
			'label'       => esc_html__( 'Swatch position', 'xstore' ),
			'description' => esc_html__( 'Choose swatches position to display on the shop page.', 'xstore' ),
			'section'     => 'shop-color-swatches',
			'default'     => 'before',
			'choices'     => array(
				'before'  => esc_html__( 'Before Product Details', 'xstore' ),
                'after'   => esc_html__( 'After Product Details', 'xstore' ),
                'disable' => esc_html__( 'Disable', 'xstore' ),
			),
			'active_callback' => array(
				array(
					'setting'  => 'enable_swatch',
					'operator' => '==',
					'value'    => true,
				),
			)
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'select',
			'settings'    => 'swatch_layout_shop',
			'label'       => esc_html__( 'Swatch style', 'xstore' ),
			'description' => esc_html__( 'Choose swatch style to display on the shop page.', 'xstore' ),
			'section'     => 'shop-color-swatches',
			'default'     => 'before',
			'choices'     => array(
				 'default' => esc_html__( 'Default', 'xstore' ),
                'popup'   => esc_html__( 'Popup', 'xstore' ),
			),
			'active_callback' => array(
				array(
					'setting'  => 'enable_swatch',
					'operator' => '==',
					'value'    => true,
				),
			)
		) );

		Kirki::add_field( 'et_kirki_options', array(
		    'type'        => 'multicolor',
		    'settings'    => 'swatch_border',
		    'label'       => esc_html__( 'Swatches border color', 'xstore' ),
		    'section'     => 'shop-color-swatches',
		    'choices'     => array(
		        'regular'    => esc_html__( 'Regular', 'xstore' ),
		        'hover'   => esc_html__( 'Hover/Active', 'xstore' ),
		    ),
		    'default'     => array(
		        'regular'    => '',
		        'hover'   => '',
		    ),
		    'active_callback' => array(
				array(
					'setting'  => 'enable_swatch',
					'operator' => '==',
					'value'    => true,
				),
			),
			'transport' => 'auto',
	    	'output'    => array(
			    array(
			      'choice'    => 'regular',
			      'context'   => array('editor', 'front'),
			      'element'   => 'ul.st-swatch-preview li, .st-swatch-preview li.selected,
			      .products-grid .content-product .st-swatch-in-loop > .et_st-default-holder .type-color,
			      .products-grid .content-product .st-swatch-in-loop > .et_st-default-holder .type-color.st-swatch-white,
			      .products-grid .content-product .st-swatch-in-loop > .et_st-default-holder .type-image,
			      .products-grid .content-product .st-swatch-in-loop > .et_st-default-holder .type-image.st-swatch-white',
			      'property'  => 'border-color',
			    ),
			    array(
			      'choice'    => 'hover',
			      'context'   => array('editor', 'front'),
			      'element'   => 'ul.st-swatch-preview li:hover, .products-grid .content-product .st-swatch-in-loop > .et_st-default-holder .type-color:hover,
			      .products-grid .content-product .st-swatch-in-loop > .et_st-default-holder .type-image:hover,
			      .st-swatch-preview li.selected, .products-grid .content-product .st-swatch-in-loop > .et_st-default-holder .type-color.selected,
			      .products-grid .content-product .st-swatch-in-loop > .et_st-default-holder .type-image.selected,
			      .products-grid .content-product .st-swatch-in-loop > .et_st-default-holder .type-color:hover, .products-grid .content-product .st-swatch-in-loop > .et_st-default-holder .type-image:hover',
			      'property'  => 'border-color',
			    ),
			)
		) );
?>