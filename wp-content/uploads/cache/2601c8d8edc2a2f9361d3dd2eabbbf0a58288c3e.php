<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.archive-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>