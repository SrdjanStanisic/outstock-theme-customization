<?php
/**
 * Single Product Up-Sells
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop, $outstock_opt;
$woocommerce_loop['columns'] = 1;
if ( $upsells ) : ?>

	<div class="upsells products">

		<h3 class="widget-title">
			<span>
				<?php if (!empty($outstock_opt['upsells_title'])){ ?>
					<?php echo esc_html($outstock_opt['upsells_title']); ?>
				<?php }else{ ?>
					<?php esc_html_e( 'You may also like&hellip;', 'outstock' ) ?>
				<?php } ?>
			</span>
		</h3>

		<?php woocommerce_product_loop_start(); ?>
			
			<?php foreach ( $upsells as $upsell ) : ?>

				<?php
				 	$post_object = get_post( $upsell->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content', 'product' ); ?>

			<?php endforeach; ?>
			
		<?php woocommerce_product_loop_end(); ?>

	</div>

<?php endif;

wp_reset_postdata();
