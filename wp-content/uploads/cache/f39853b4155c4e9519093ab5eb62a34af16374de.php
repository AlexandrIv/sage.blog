<div class="slick-slideshow">
	<?php $slidetime = get_field('slideshow_time', 'option'); ?>
	<?php if($slideshow): ?>
		<?php $__currentLoopData = $slideshow; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $src): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="slides" style="background-image: url('<?php echo $src['imageslide']?>')">
				<div class="opacity-block" style="opacity: <?php echo e(App::slideshow_opacity()); ?>"></div>
				<div class="text-slide">
					<h2><?php echo $src['slidesetting']['slidetitle']; ?></h2>
					<p><?php echo $src['slidesetting']['slidedescription']; ?></p>
					<a style="background-color: <?php echo $src['slidesetting']['buttoncolor']; ?>" href="<?php echo $src['slidesetting']['buttonlink']; ?>"><?php echo $src['slidesetting']['buttontext']; ?></a>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>
</div>