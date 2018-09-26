	<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('partials.header-slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('partials.education', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('partials.features', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('partials.courses', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('partials.teachers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('partials.programs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('partials.client', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('partials.blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('partials.letter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('partials.contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>