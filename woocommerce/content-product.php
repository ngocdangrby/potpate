<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

$hover = etheme_get_option('product_img_hover', 'slider');
$view = etheme_get_option('product_view', 'disable');
$view_color = etheme_get_option('product_view_color', 'white');
$size = apply_filters( 'single_product_small_thumbnail_size', 'shop_catalog' );
$custom_template = get_query_var('et_custom_product_template');
$sale_counter = etheme_get_custom_field('sale_counter');
$show_stock = false;
$just_catalog = etheme_get_option('just_catalog', 0);
$show_excerpt = etheme_get_option('product_page_excerpt', 0);
$excerpt_length = etheme_get_option('product_page_excerpt_length', 120);
$product_settings = etheme_get_option('product_page_switchers', array('product_page_productname', 'product_page_cats', 'product_page_price','product_page_addtocart', 'product_page_productrating', 'hide_buttons_mobile'));
$product_settings = !is_array( $product_settings ) ? array() : $product_settings;
$product_type = is_object($product) ? $product->get_type() : '';
$atts = array();

$view_mode = get_query_var('et_view-mode', 'grid');
$show_counter = false;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( get_query_var('et_cat-cols') ) {
	$woocommerce_loop['columns'] = apply_filters('loop_shop_columns', get_query_var('et_cat-cols'));
}
elseif (empty( $woocommerce_loop['columns'] )) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

if ( get_query_var('view_mode_smart', false) && !apply_filters( 'wc_loop_is_shortcode', wc_get_loop_prop( 'is_shortcode' ) ) ) {
	if ( isset( $_GET['et_columns-count'] ) ) {
		$woocommerce_loop['columns'] = $_GET['et_columns-count'];
	}
	else {
		$view_mode_smart_active = get_query_var('view_mode_smart_active', 4);
		$woocommerce_loop['columns'] = $view_mode_smart_active != 'list' ? $view_mode_smart_active : 4;
		$view_mode = $view_mode_smart_active == 'list' ? 'list' : $view_mode;
	}
}

if ( ! empty( $woocommerce_loop['show_counter'] ) )
	$show_counter = $woocommerce_loop['show_counter'];

if ( ! empty( $woocommerce_loop['hover'] ) )
	$hover = $woocommerce_loop['hover'];

if ( ! empty( $woocommerce_loop['product_view'] ) )
	$view = $woocommerce_loop['product_view'];

if ( ! empty( $woocommerce_loop['product_view_color'] ) )
	$view_color = $woocommerce_loop['product_view_color'];

if ( ! empty( $woocommerce_loop['size'] ) )
	$size = $woocommerce_loop['size'];

if ( isset( $woocommerce_loop['show_excerpt'] ) )
	$show_excerpt = $woocommerce_loop['show_excerpt'];

if ( isset( $woocommerce_loop['excerpt_length'] ) )
	$excerpt_length = $woocommerce_loop['excerpt_length'];

if ( ! empty( $woocommerce_loop['custom_template'] ) )
	$custom_template = $woocommerce_loop['custom_template'];

if ( in_array($sale_counter, array('list', 'single_list')) && $view_mode == 'list' )
	$show_counter = true;

if ( ! empty( $woocommerce_loop['show_stock'] ) )
	$show_stock = true;

// Use single product option
$single = etheme_get_custom_field('single_thumbnail_hover');
if ( $single && $single != 'inherit' ) $hover = $single;

$product_view = etheme_get_custom_field('product_view_hover');
if ( $product_view && $product_view != 'inherit' ) $view = $product_view;

$product_view_color = etheme_get_custom_field('product_view_color');
if ( $product_view_color && $product_view_color != 'inherit' ) $view_color = $product_view_color;

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 === ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 === $woocommerce_loop['columns'] ) {
	$classes[] = 'first';
	$classes[] = 'grid-sizer';
}
if ( 0 === $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
	$classes[] = 'last';
}

if(!class_exists('YITH_WCWL')) {
	$classes[] = 'wishlist-disabled';
}

$classes[] = etheme_get_product_class( $woocommerce_loop['columns'] );

if ( ! empty( $woocommerce_loop['isotope'] ) && $woocommerce_loop['isotope'] || etheme_get_option( 'products_masonry', 0 ) && ( is_shop() || is_product_category() ) ) {
	$classes[] = 'et-isotope-item';
}

if ( !in_array($view, array('mask3', 'mask', 'mask2', 'info', 'default') ) ) {
	$view_color = 'dark';
}

// if ( in_array($view, array('mask3', 'mask2', 'info') ) ) {
//     $hover = 'disabled';
// }

if ( ! empty( $woocommerce_loop['loading_class']) ) {
	$classes[] = $woocommerce_loop['loading_class'];
}

if ( $view != 'custom' || !$custom_template ) {
	$classes[] = 'product-hover-' . $hover;
	$classes[] = 'product-view-' . $view;
	$classes[] = 'view-color-' . $view_color;
	if ( $hover == 'slider' ) $classes[] = 'arrows-hovered';
}

if ( in_array('product_page_addtocart', $product_settings) ) {
	$classes[] = 'et_cart-on';
}
else {
	$classes[] = 'et_cart-off';
}
if ( ! in_array('hide_buttons_mobile', $product_settings) ) $classes[] = 'hide-hover-on-mobile';

$full_title = $product_title = unicode_chars(get_the_title());
$title_limit = etheme_get_option('product_title_limit', 0);

if ( $title_limit && strlen($product_title) > $title_limit) {
	$split = preg_split('/(?<!^)(?!$)/u', $product_title);
	$product_title = ($title_limit != '' && $title_limit > 0 && (count($split) >= $title_limit)) ? '' : $product_title;
	if ( $product_title == '' ) {
		for ($i=0; $i < $title_limit; $i++) {
			$product_title .= $split[$i];
		}
		$product_title .= '...';
	}
}

$excerpt = get_the_excerpt();
if ( $view_mode == 'grid' && $show_excerpt ) {
	if ( $excerpt_length > 0 && strlen($excerpt) > 0 && ( strlen($excerpt) > $excerpt_length)) {
		$excerpt         = substr($excerpt,0,$excerpt_length) . '...';
	}
}

$with_quantity = false;
if (
	etheme_get_option('product_page_smart_addtocart', 0)
	&& in_array('product_page_addtocart', $product_settings)
	&& in_array( $view, array('default', 'mask3', 'mask', 'mask2') )
	&& in_array($product_type, array('simple', 'variable'))
	&& $product->is_in_stock()
){
	$with_quantity = true;
}


if ( $just_catalog ) {
	etheme_before_fix_just_catalog_link();
}

if ( !in_array('product_page_productrating', $product_settings ) ) {
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
}

add_filter( 'single_product_archive_thumbnail_size', function($old_size) use ($size){
	return $size;
} );

$hover = ($hover == 'swap' && get_query_var('is_mobile', false)) ? 'none' : $hover;

?>
    <div <?php wc_product_class( $classes, $product ); ?>>
        <div class="content-product <?php if ($view == 'custom' && $custom_template != '') echo 'custom-template clearfix et-product-template-'.$custom_template; ?>">
			<?php // etheme_loader(); ?>
			
			<?php if ( $view == 'custom' && $custom_template != '' ) {
				
				$args = array( 'include' => $custom_template,'post_type' => 'vc_grid_item', 'posts_per_page' => 1);
				$myposts = get_posts( $args );
				
				if ( is_array($myposts) && isset($myposts[0]) ) {
					$block = $myposts[0];
					
					$templates = new ET_product_templates();
					
					$content = $block->post_content;
					$templates->setTemplateById($custom_template);
					// $templates->setTemplateById($content, $custom_template);
					$shortcodes = $templates->shortcodes();
					$templates->mapShortcodes();
					WPBMap::addAllMappedShortcodes();
					
					$attr = ' width="' . $templates->gridAttribute( 'element_width', 12 ) . '"'
					        . ' is_end="' . ( 'true' === $templates->isEnd() ? 'true' : '' ) . '"';
					$content = preg_replace( '/(\[(\[?)vc_gitem\b)/', '$1' . $attr, $content );
					echo ( 1 === ( $woocommerce_loop['loop'] - 1 ) ) ? $templates->addShortcodesCustomCss($custom_template) : '';
					
					echo $templates->renderItem( get_post( (int) $product->get_ID() ), $content); // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				}
				else {
					echo '<div class="woocommerce-info">' . sprintf( esc_html__('To use this element you have to create custom product template via %1$1s. For more details %2$2s.', 'xstore'), '<a href="https://kb.wpbakery.com/docs/learning-more/grid-builder/" rel="nofollow" target="_blank">' . esc_html__('WPBakery page builder', 'xstore') . '</a>', '<a href="https://youtu.be/ER2njPVmsnk" rel="nofollow" target="_blank">' . esc_html__('Watch the tutorial', 'xstore') . '</a>' ) . '</div>';
				}
			}
			else {?>
				
				<?php
				
				/**
				 * woocommerce_before_shop_loop_item hook.
				 *
				 * @hooked woocommerce_template_loop_product_link_open - 10
				 */
				if ( $view_mode == 'grid' && $view != 'booking' ) {
					remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
					do_action( 'woocommerce_before_shop_loop_item' );
					add_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
				}
				
				?>

                <div class="product-image-wrapper hover-effect-<?php echo esc_attr( $hover ); ?>">
					
					<?php if ( $view == 'default' ) echo etheme_wishlist_btn(); ?>
					
					<?php if ( $view != 'booking' ) etheme_product_availability(); ?>
					<?php if ( $hover == 'slider' ) echo '<div class="images-slider-wrapper">'; ?>
                    <a class="product-content-image" href="<?php the_permalink(); ?>" data-images="<?php echo etheme_get_image_list( $size ); ?>">
						<?php  if ( $view_mode == 'list' || $view == 'booking' ) {
							do_action( 'woocommerce_before_shop_loop_item' );
						} ?>
						<?php if ( $view == 'booking' ) etheme_product_availability(); ?>
						<?php if( $hover == 'swap' ) etheme_get_second_image( $size ); ?>
						<?php // echo woocommerce_get_product_thumbnail( $size ); ?>
						<?php
						/**
						 * woocommerce_before_shop_loop_item_title hook.
						 *
						 * @hooked woocommerce_show_product_loop_sale_flash - 10
						 * @hooked woocommerce_template_loop_product_thumbnail - 10
						 */
						do_action( 'woocommerce_before_shop_loop_item_title' );
						?>
                    </a>
					<?php if ( $hover == 'slider' ) echo '</div>'; ?>
					
					<?php if ( $view == 'booking' && $view_mode != 'list' && in_array('product_page_productname', $product_settings) ): ?>
                        <p class="product-title">
                            <a href="<?php the_permalink(); ?>"><?php echo wp_specialchars_decode($product_title); ?></a>
                        </p>
					<?php endif ?>
					
					<?php if ($view == 'info'): ?>
                        <div class="product-mask">
							
							<?php if (in_array('product_page_productname', $product_settings)): ?>
                                <p class="product-title">
                                    <a href="<?php the_permalink(); ?>"><?php echo wp_specialchars_decode($product_title); ?></a>
                                </p>
							<?php endif ?>
							
							<?php
							/**
							 * woocommerce_after_shop_loop_item_title hook
							 *
							 * @hooked woocommerce_template_loop_rating - 5
							 * @hooked woocommerce_template_loop_price - 10
							 */
							if (in_array('product_page_price', $product_settings)) {
								do_action( 'woocommerce_after_shop_loop_item_title' );
							}
							?>
                        </div>
					<?php endif ?>
					
					<?php if ( $view == 'booking' && $view_mode != 'list' ): ?>
						<?php if ( in_array('product_page_price', $product_settings) ) do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
                        <div class="product-excerpt">
							<?php echo do_shortcode($excerpt); ?>
                        </div>
                        <div class="product-excerpt">
							<?php do_action( 'woocommerce_product_additional_information', $product ); ?>
                        </div>
						<?php
						if (in_array('product_page_addtocart', $product_settings) && $view != 'booking' ) {
							do_action( 'woocommerce_after_shop_loop_item' );
						}
						?>
					<?php endif ?>
					
					<?php if ( in_array($view, array('mask', 'mask2', 'mask3', 'default', 'info') ) ): ?>
                        <footer class="footer-product">
							<?php if ( $view == 'mask3' ): ?>
								<?php echo etheme_wishlist_btn(); ?>
							<?php else: ?>
								<?php if (etheme_get_option('quick_view', 1)): ?>
                                    <span class="show-quickly" data-prodid="<?php echo esc_attr($product->get_ID());?>"><?php esc_html_e('Quick View', 'xstore') ?></span>
								<?php endif; ?>
							<?php endif; ?>
							
							<?php if ($view != 'default') {
								//if (in_array('product_page_addtocart', $product_settings)) {
								remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
								add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
								do_action( 'woocommerce_after_shop_loop_item' );
								//}
							}?>
							<?php if ( $view == 'mask3' ): ?>
								<?php if (etheme_get_option('quick_view', 1)): ?>
                                    <span class="show-quickly" data-prodid="<?php echo esc_attr($product->get_ID());?>"><?php esc_html_e('Quick View', 'xstore') ?></span>
								<?php endif ?>
							<?php elseif ($view != 'default'): ?>
								<?php echo etheme_wishlist_btn(); ?>
							<?php endif; ?>
                        </footer>
					<?php endif ?>
                </div>
				
				
				
				<?php if ( ( $view != 'info' && $view != 'booking' || $view_mode == 'list' ) ): ?>
					<?php
					if ( $with_quantity ) {
						remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
						add_filter('woocommerce_product_add_to_cart_text', '__return_false');
						remove_action( 'woocommerce_before_quantity_input_field', 'et_quantity_minus_icon' );
						remove_action( 'woocommerce_after_quantity_input_field', 'et_quantity_plus_icon' );
						add_action( 'woocommerce_before_quantity_input_field', 'et_quantity_minus_icon' );
						add_action( 'woocommerce_after_quantity_input_field', 'et_quantity_plus_icon' );
					} ?>
                    <div class="<?php if ( $view != 'light' ) : ?>text-center <?php endif; ?>product-details">
						
						
						<?php do_action( 'et_before_shop_loop_title' ); ?>
						
						<?php if ( $view == 'light' ) : ?>
                            <div class="light-right-side">
								<?php if (etheme_get_option('quick_view', 1)): ?>
                                    <span class="show-quickly" data-prodid="<?php echo esc_attr($product->get_ID());?>"><?php esc_html_e('Quick View', 'xstore') ?></span>
								<?php endif; ?>
								
								<?php echo etheme_wishlist_btn(); ?>
                            </div><!-- .light-right-side -->
						<?php endif; ?>
						
						<?php if ( $view == 'light' ) echo '<div class="light-left-side">'; ?>
						
						<?php if (in_array('product_page_cats', $product_settings)): ?>
							<?php etheme_product_cats(); ?>
						<?php endif ?>
						
						<?php if (in_array('product_page_productname', $product_settings)): ?>
                            <p class="product-title">
                                <a href="<?php the_permalink(); ?>"><?php echo wp_specialchars_decode($product_title); ?></a>
                            </p>
						<?php endif ?>
						
						<?php if ( $view_mode == 'grid' && $show_excerpt ): ?>
                            <div class="product-excerpt">
								<?php echo do_shortcode($excerpt); ?>
                            </div>
						<?php endif ?>
						
						<?php etheme_dokan_seller(); ?>
						
						<?php if ( etheme_get_option( 'enable_brands', 1 ) && etheme_get_option( 'product_page_brands', 1 ) ) : ?>
							<?php etheme_product_brands(); ?>
						<?php endif ?>
						
						<?php if (in_array('product_page_product_sku', $product_settings) &&
						          wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) )): ?>
                            <span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'xstore' ); ?>
                        <span class="sku"><?php echo esc_html( ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'xstore' ) ); ?></span>
                    </span>
						<?php endif ?>
						
						<?php
						/**
						 * woocommerce_after_shop_loop_item_title hook
						 *
						 * @hooked woocommerce_template_loop_rating - 5
						 * @hooked woocommerce_template_loop_price - 10
						 */
						
						if ( in_array('product_page_price', $product_settings) ) :
							if ( $view != 'light' ) : ?>
								<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
								<?php do_action( 'et_after_shop_loop_title' ); ?>
							<?php else :
								if ( in_array('product_page_productrating', $product_settings ) ) {
									woocommerce_template_loop_rating();
								}
								do_action( 'et_after_shop_loop_title' ); ?>
								<?php if ( $view_mode != 'list'  ): ?>
                                <div class="switcher-wrapper">
                                    <div class="price-switcher">
                                        <div class="price-switch">
											<?php
											remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
											do_action( 'woocommerce_after_shop_loop_item_title' );
											add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
											?>
                                        </div>
                                        <div class="button-switch">
											<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                        </div>
                                    </div>
                                </div>
							<?php endif; ?>
							<?php endif; ?>
						<?php endif; ?>
						
						<?php if ( $view_mode == 'list' ): ?>
                            <div class="product-excerpt">
								<?php echo do_shortcode($excerpt); ?>
                            </div>
						<?php endif ?>
						
						<?php if ( $view == 'light' && $view_mode == 'list' ) : ?>
                            <div class="switcher-wrapper">
                                <div class="price-switcher">
                                    <div class="price-switch">
										<?php woocommerce_template_loop_price(); ?>
                                    </div>
                                    <div class="button-switch">
										<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                    </div>
                                </div>
                            </div>
						<?php endif; ?>
						
						
						<?php
						if ( $show_stock && 'yes' === get_option( 'woocommerce_manage_stock' ) ) {
							$id = $product->get_ID(); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
							$product = wc_get_product($id);
							echo et_product_stock_line($product);
						}
						?>
						
						<?php if( $show_counter ) etheme_product_countdown(); ?>
						
						<?php
						
						if ( in_array('product_page_addtocart', $product_settings) ) {
							if ( ! in_array( $view, array( 'mask', 'mask3', 'light' ) ) ) {
								do_action( 'woocommerce_after_shop_loop_item' );
							}
							if ( $with_quantity && ! ($product_type == 'variable' && etheme_get_option( 'swatch_layout_shop', 'before' ) == 'popup') ) {
								echo '<div class="quantity-wrapper">';
								woocommerce_quantity_input( array(), $product, true );
								woocommerce_template_loop_add_to_cart();
								echo '</div>';
							}
						}
						?>
						
						<?php if ( $view == 'light' ) echo '</div><!-- .light-left-side -->'; ?>

                    </div>
					<?php
					if ( $with_quantity ) {
						add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
						remove_filter('woocommerce_product_add_to_cart_text', '__return_false');
					} ?>
				<?php endif ?>
			<?php } // end if not custom template ?>
        </div><!-- .content-product -->
    </div>

<?php if ( $just_catalog ) {
	etheme_after_fix_just_catalog_link();
}

if ( !in_array('product_page_productrating', $product_settings ) ) {
	add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
}
?>