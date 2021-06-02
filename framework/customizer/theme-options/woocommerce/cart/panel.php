<?php  
	/**
	 * The template created for displaying cart page panel
	 *
	 * @version 0.0.1
	 * @since 7.2.3
	 */
	
	// panel cart-page
	Kirki::add_panel( 'cart-page', array(
	    'title'       => esc_html__( 'Cart Page', 'xstore' ),
	    'icon'		  => 'dashicons-cart',
	    'panel' => 'woocommerce'
		) );
?>