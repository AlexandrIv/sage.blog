<?php
defined( 'ABSPATH' ) || exit;
global $product;
?>
<?php if( empty( $product ) || ! $product->is_visible() ): ?>
<?php
return
?>
<?php endif; ?>

<li <?php echo e(wc_product_class()); ?>>
	<?php echo e(do_action( 'woocommerce_before_shop_loop_item' )); ?>

	<?php echo e(do_action( 'woocommerce_before_shop_loop_item_title' )); ?>

	<?php echo e(do_action( 'woocommerce_shop_loop_item_title' )); ?>

	<?php echo e(do_action( 'woocommerce_after_shop_loop_item_title' )); ?>

	<?php echo e(do_action( 'woocommerce_after_shop_loop_item' )); ?>

</li>
