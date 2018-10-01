<section>
	<div class="courses">
		<h2>Courses</h2>
		<div class="desctop-block">
			<div class="container">
				<div class="row">
					<?php
					$arr = array();
					$value = App::postcourses();
						?>
						<?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php array_push($arr, $post->ID); ?>
							<?php echo $__env->make('partials.courses-ajax-part', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<script>
						window.ajaxurl = '<?php echo admin_url('admin-ajax.php');; ?>';
					</script>
					<a id="true_loadmore" class="all">View All</a>
				</div>
			</div>
		</div>
		<div class="tablet-block">
			<div class="courses-slider">
				<?php if($value): ?>
					<?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postcourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="courses-slide-box">
							<div class="courses-slide">
								<div class="top-box">
									<?php echo get_the_post_thumbnail( $postcourse->ID );; ?>

									<h3><?php echo $postcourse->post_title; ?></h3>
									<p><?php echo $postcourse->short_text; ?></p>
								</div>
								<div class="bottom-box">
									<ul>
										<li>Time : <?php echo $postcourse->time; ?></li>
										<li><?php echo $postcourse->teacher; ?></li>
									</ul>
									<a href="#">Join Now</a>
								</div>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			</div>
		</div>

