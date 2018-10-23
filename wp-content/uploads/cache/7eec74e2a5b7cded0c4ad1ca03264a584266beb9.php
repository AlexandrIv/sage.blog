  
  <?php $__env->startSection('content'); ?>
  <div class="cart-block">
    <div class="container">
     <div class="row">
      <div class="col-md-12">
       <?php echo e(do_action('woocommerce_before_main_content')); ?>

       <?php while(have_posts()): ?> <?php the_post() ?>
       <?php echo e(the_content()); ?>

       <?php endwhile; ?>
       <?php echo e(do_action('woocommerce_after_main_content')); ?>

     </div>
   </div>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.shop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>