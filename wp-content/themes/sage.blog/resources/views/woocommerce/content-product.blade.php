@php
defined( 'ABSPATH' ) || exit;
global $product;
@endphp
@if( empty( $product ) || ! $product->is_visible() )
@php
return
@endphp
@endif

<li {{wc_product_class()}}>
	{{ do_action( 'woocommerce_before_shop_loop_item' ) }}
	{{ do_action( 'woocommerce_before_shop_loop_item_title' ) }}
	{{ do_action( 'woocommerce_shop_loop_item_title' ) }}
	{{ do_action( 'woocommerce_after_shop_loop_item_title' ) }}
	{{ do_action( 'woocommerce_after_shop_loop_item' ) }}
</li>
