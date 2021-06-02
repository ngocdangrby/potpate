<?php  if ( ! defined('ABSPATH')) exit('No direct script access allowed');
/**
 * The template for displaying theme back to top btn
 *
 * @since   6.4.5
 * @version 1.0.0
 */
$is_customize_preview = is_customize_preview();
$to_top = etheme_get_option('to_top', 1);
$to_top_mobile = etheme_get_option('to_top_mobile', 1);
$class = 'back-top backOut';
if ( ! $to_top ) {
	$class .= ' dt-hide';
}
if ( ! $to_top_mobile ) {
	$class .= ' mob-hide';
}
if ($to_top || $to_top_mobile || $is_customize_preview): ?>
    <div id="back-top" class="<?php echo esc_attr( $class ); ?>">
        <span class="et-icon et-right-arrow-2"></span>
        <svg width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 150.621;" fill="none"></path>
        </svg>
    </div>
<?php endif;