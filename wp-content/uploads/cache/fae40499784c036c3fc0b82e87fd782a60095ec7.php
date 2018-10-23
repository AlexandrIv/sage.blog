<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

?>
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

	<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<!-- <div class="col2-set" id="customer_details">
			<div class="col-12">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-12">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div> -->
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non minus voluptatibus ullam, maxime molestiae, iure, error adipisci earum optio doloribus quaerat ipsam ratione nemo ducimus deleniti perferendis beatae incidunt consequatur voluptates sunt! Quae tempora ipsa et. Beatae ratione architecto assumenda vel. Quos neque consequatur pariatur veritatis suscipit, tempora expedita sequi nam, ipsum corporis iste eaque aperiam ex omnis dolore quas consequuntur laboriosam. Blanditiis molestias architecto atque praesentium itaque corporis, nesciunt cum unde hic libero magnam ducimus id voluptate adipisci reprehenderit tenetur dignissimos numquam et quo laborum! Inventore sed amet, at recusandae tempora excepturi, placeat, aperiam nostrum dignissimos natus ipsa corporis.</p>
				</div>
				<div class="col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non minus voluptatibus ullam, maxime molestiae, iure, error adipisci earum optio doloribus quaerat ipsam ratione nemo ducimus deleniti perferendis beatae incidunt consequatur voluptates sunt! Quae tempora ipsa et. Beatae ratione architecto assumenda vel. Quos neque consequatur pariatur veritatis suscipit, tempora expedita sequi nam, ipsum corporis iste eaque aperiam ex omnis dolore quas consequuntur laboriosam. Blanditiis molestias architecto atque praesentium itaque corporis, nesciunt cum unde hic libero magnam ducimus id voluptate adipisci reprehenderit tenetur dignissimos numquam et quo laborum! Inventore sed amet, at recusandae tempora excepturi, placeat, aperiam nostrum dignissimos natus ipsa corporis.</p>
				</div>
			</div>
		</div>
		
		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

		<?php endif; ?>

		<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>

		<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

		<div id="order_review" class="woocommerce-checkout-review-order">
			<?php do_action( 'woocommerce_checkout_order_review' ); ?>
		</div>

		<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

	</form>
