





<?php
defined( 'ABSPATH' ) || exit;
do_action( 'woocommerce_before_single_product' );
if ( post_password_required() ) {
  echo get_the_password_form(); // WPCS: XSS ok.
  return;
}
?>
<div class="single-product">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="product-<?php echo e(the_ID()); ?>" <?php echo e(wc_product_class()); ?>>
         <?php echo e(do_action( 'woocommerce_before_single_product_summary' )); ?>

         <?php echo e(do_action('woocommerce_template_single_title')); ?>

          <div class="summary entry-summary">
            <?php echo e(do_action( 'woocommerce_single_product_summary' )); ?>

          </div>  
          <?php echo e(do_action( 'woocommerce_after_single_product_summary' )); ?>

        </div>
      </div>
    </div>
  </div>
</div>
<?php
do_action( 'woocommerce_after_single_product' );
?>


