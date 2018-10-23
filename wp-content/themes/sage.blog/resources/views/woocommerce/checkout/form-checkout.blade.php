@php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */
@endphp
@if( ! defined( 'ABSPATH' ) )
exit;
@endif

<div class="container">
	<div class="row">
		<div class="col-md-12">
			@php
			wc_print_notices();
			do_action( 'woocommerce_before_checkout_form', $checkout )
			@endphp
			@if( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() )
			{!! apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) !!}
			return
			@endif
			<form name="checkout" method="post" class="checkout woocommerce-checkout" action="{!! esc_url( wc_get_checkout_url() ) !!} " enctype="multipart/form-data">
				@if ( $checkout->get_checkout_fields() )
				{{ do_action( 'woocommerce_checkout_before_customer_details' ) }}
				<div class="row">
					<div class="col-md-6">
						{{ do_action( 'woocommerce_checkout_billing' ) }}
						{{ do_action( 'woocommerce_checkout_shipping' ) }}
					</div>
					<div class="col-md-6">
						<h3 id="order_review_heading">{{ _e( 'Your order', 'woocommerce' ) }} </h3>
						{{ do_action( 'woocommerce_checkout_before_order_review' ) }} 
						<div id="order_review" class="woocommerce-checkout-review-order">
							{{ do_action( 'woocommerce_checkout_order_review' ) }}
						</div>
						{{ do_action( 'woocommerce_checkout_after_order_review' ) }}
					</div>
				</div>
				{{ do_action( 'woocommerce_checkout_after_customer_details' ) }}
				@endif
			</form>
			{{ do_action( 'woocommerce_after_checkout_form', $checkout ) }}
		</div>
	</div>
</div>

