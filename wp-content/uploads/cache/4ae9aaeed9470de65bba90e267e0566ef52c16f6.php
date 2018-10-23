

            
            
              <div class="content-shop-page">
                <div class="container">
                  <div class="row">
                    <div class="col-md-9">
                      <?php if( woocommerce_product_loop() ): ?> 
                      <?php echo e(do_action( 'woocommerce_before_shop_loop' )); ?>

                      <?php echo e(woocommerce_product_loop_start()); ?>

                      <?php if( wc_get_loop_prop( 'total' ) ): ?> 
                      <?php while( have_posts() ): ?> 
                      <?php echo e(the_post()); ?>

                      <?php echo e(do_action( 'woocommerce_shop_loop' )); ?>

                      <?php echo e(wc_get_template_part( 'content', 'product' )); ?>

                      <?php endwhile; ?>
                      <?php endif; ?>
                      <?php echo e(woocommerce_product_loop_end()); ?>

                      <?php echo e(do_action( 'woocommerce_after_shop_loop' )); ?>

                      <?php else: ?>
                      <?php echo e(do_action( 'woocommerce_no_products_found' )); ?>

                      <?php endif; ?>
                    </div>
                    <div class="col-md-3">
                      <div class="shop-sidebar">
                        <div class="categories">
                          <?php echo $__env->make('partials/sidebar-shop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                    