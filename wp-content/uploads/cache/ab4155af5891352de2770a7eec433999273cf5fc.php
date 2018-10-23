	<?php $__env->startSection('content'); ?>
		<?php while(have_posts()): ?> <?php the_post() ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="checkout">
							<?php echo e(the_content()); ?>

						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.shop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>