<div class="container">
	<div class="row">
		<?php $__env->startSection('content'); ?>
		<?php while(have_posts()): ?> <?php the_post() ?>
		<?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php endwhile; ?>
		<?php $__env->stopSection(); ?>
	</div>
</div>


<?php echo $__env->make('layouts.blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>