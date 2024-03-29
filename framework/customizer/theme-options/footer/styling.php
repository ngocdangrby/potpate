<?php  
	/**
	 * The template created for displaying footer styling options 
	 *
	 * @version 0.0.1
	 * @since 6.0.0
	 */
	
	// section footer-styling
	Kirki::add_section( 'footer-styling', array(
	    'title'          => esc_html__( 'Footer styling', 'xstore' ),
	    'panel' => 'footer',
	    'icon' => 'dashicons-admin-customizer'
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'select',
			'settings'    => 'footer_color',
			'label'       => esc_html__( 'Footer text color scheme', 'xstore' ),
			'description' => esc_html__( 'Choose footer text color scheme.', 'xstore' ),
			'section'     => 'footer-styling',
			'default'     => 'dark',
			'choices'     => $text_color_scheme2,
			'transport' => 'postMessage',
			'js_vars'     => array(
				array(
					'element'  => '.footer',
					'function' => 'toggleClass',
					'class' => 'text-color-dark',
					'value' => 'dark'
				),
				array(
					'element'  => '.footer',
					'function' => 'toggleClass',
					'class' => 'text-color-light',
					'value' => 'light'
				),
			),
		) );

		Kirki::add_field( 'et_kirki_options', array(
		    'type'        => 'multicolor',
		    'settings'    => 'footer-links',
		    'label'       => esc_html__( 'Footer Links', 'xstore' ),
		    'section'     => 'footer-styling',
		    'choices'     => array(
		        'regular'    => esc_html__( 'Regular', 'xstore' ),
		        'hover'   => esc_html__( 'Hover', 'xstore' ),
		        'active'  => esc_html__( 'Active', 'xstore' ),
		    ),
		    'default'     => array(
		        'regular'    => '',
		        'hover'   => '',
		        'active'  => '',
		    ),
		    'transport' => 'auto',
		    'output'    => array(
			    array(
			      'choice'    => 'regular',
			      'element'   => '.template-container .template-content .footer a, .template-container .template-content .footer .vc_wp_posts .widget_recent_entries li a',
			      'property'  => 'color',
			    ),
			    array(
			      'choice'    => 'hover',
			      'element'   => '.template-container .template-content .footer a:hover, .template-container .template-content .footer .vc_wp_posts .widget_recent_entries li a:hover',
			      'property'  => 'color',
			    ),
			    array(
			      'choice'    => 'active',
			      'element'   => '.template-container .template-content .footer a:active, .template-container .template-content .footer .vc_wp_posts .widget_recent_entries li a:active',
			      'property'  => 'color',
			    ),
			  ),
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'background',
			'settings'    => 'footer_bg_color',
			'label'       => esc_html__( 'Footer Background Color', 'xstore' ),
			'description' => esc_html__( 'Controls the the footer background color.', 'xstore' ),
			'section'     => 'footer-styling',
			'default'     => array(
				'background-color'      => '',
				'background-image'      => '',
				'background-repeat'     => '',
				'background-position'   => '',
				'background-size'       => '',
				'background-attachment' => '',
			),
			'transport'   => 'auto',
			'output'      => array(
				array(
					'context'   => array('editor', 'front'),
					'element' => 'footer.footer, [data-mode="dark"] .footer',
				),
			),
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'dimensions',
			'settings'    => 'footer_padding',
			'label'       => esc_html__( 'Footer paddings', 'xstore' ),
			'description' => esc_html__( 'Controls the paddings for the footer area. Leave empty to use default values.', 'xstore' ),
			'section'     => 'footer-styling',
			'default'     => $paddings_empty,
			'choices'     => array(
				'labels' => $padding_labels,
			),
			'transport' => 'auto',
			'output'      => array(
				array(
					'context'   => array('editor', 'front'),
					'element' => '.footer',
				),
				array(
					'choice' => 'padding-bottom',
					'context'   => array('editor', 'front'),
					'element' => 'footer.footer:after',
					'property' => 'top'
				)
			),
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'slider',
			'settings'    => 'footer_border_width',
			'label'       => esc_html__( 'Footer Border bottom width', 'xstore' ),
			'description' => esc_html__( 'Controls the the Footer border bottom width', 'xstore' ),
			'section'     => 'footer-styling',
			'default'     => 1,
			'choices'     => array(
				'min'  => 0,
				'max'  => 10,
				'step' => 1,
			),
			'transport' => 'auto',
			'output'      => array(
				array(
					'context'   => array('editor', 'front'),
					'element' => 'footer.footer:after',
					'property' => 'border-bottom-width',
					'units' => 'px'
				),
			),
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'select',
			'settings'    => 'footer_border_style',
			'label'       => esc_html__( 'Footer Border bottom style', 'xstore' ),
			'description' => esc_html__( 'Controls the the Footer border bottom style', 'xstore' ),
			'section'     => 'footer-styling',
			'default'     => 'solid',
			'choices'     => $border_styles,
			'transport' => 'auto',
			'output'      => array(
				array(
					'context'   => array('editor', 'front'),
					'element' => 'footer.footer:after',
					'property' => 'border-bottom-style'
				),
			),
		) );

		Kirki::add_field( 'et_kirki_options', array(
			'type'        => 'color',
			'settings'    => 'footer_border_color',
			'label'       => esc_html__( 'Footer Border bottom color', 'xstore' ),
			'description' => esc_html__( 'Controls the the Footer border bottom color', 'xstore' ),
			'section'     => 'footer-styling',
			'default'     => '#e1e1e1',
			'transport' => 'auto',
			'output'      => array(
				array(
					'context'   => array('editor', 'front'),
					'element' => 'footer.footer:after',
					'property' => 'border-bottom-color'
				),
			),
		) );

?>