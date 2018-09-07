<div id="block-for-slider">
	<div class="sliders">
		<div id="viewport">
			<ul id="slidewrapper">
				
				<?php $slidetime = get_field('slideshow_time', 'option'); ?>				
				
				<?php if($slideshow): ?>
					<?php $__currentLoopData = $slideshow; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $src): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="slides">
						<div class="slide" style="background-image: url('<?php echo $src['imageslide']?>')"></div>
						<div class="opacity-block" style="opacity: <?php echo e(App::slideshow_opacity()); ?>"></div>
						<div class="text-slide">
							<h2><?php echo $src['slidesetting']['slidetitle']; ?></h2>
							<p><?php echo $src['slidesetting']['slidedescription']; ?></p>
							<a style="background-color: <?php echo $src['slidesetting']['buttoncolor']; ?>" href="<?php echo $src['slidesetting']['buttonlink']; ?>"><?php echo $src['slidesetting']['buttontext']; ?></a>
						</div>
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			</ul>
			<ul id="nav-btns">
				<li class="slide-nav-btn"></li>
				<li class="slide-nav-btn"></li>
				<li class="slide-nav-btn"></li>
				<li class="slide-nav-btn"></li>
			</ul>
		</div>
	</div>
