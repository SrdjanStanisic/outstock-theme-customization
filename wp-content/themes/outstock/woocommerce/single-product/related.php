<?php
/**
 * Related Products
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop, $outstock_opt;

$posts_per_page = ($outstock_opt['related_amount']) ? $outstock_opt['related_amount'] : 8; 
$woocommerce_loop['columns'] = 1;
if ( $related_products ) : ?>

<div class="widget related_products_widget related products">

	<h3 class="widget-title"><span>
		<?php if(!empty($outstock_opt['related_title'])){ ?>
			<?php echo esc_html($outstock_opt['related_title']); ?>
		<?php }else{ ?>
			<?php esc_html_e( 'Related products', 'outstock' ); ?>
		<?php } ?>
	</span></h3>
	
	

	<?php

	
	
	echo do_shortcode('[designer_info]');
	?>

	
	
		<?php woocommerce_product_loop_start(); ?>
			<?php $count = 0; foreach ( $related_products as $related_product ) : $count++; ?>

				<?php
				 	$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content', 'product' ); 
				
					if($count > $posts_per_page) break;
				?>
					
			<?php endforeach; ?>
		<?php woocommerce_product_loop_end(); ?>
	
</div>

<?php endif;

wp_reset_postdata();
