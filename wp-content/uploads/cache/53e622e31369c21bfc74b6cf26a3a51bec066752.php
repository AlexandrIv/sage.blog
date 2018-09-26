<section>
	<div class="teacher">
		<h2>Our Teachers</h2>
			<?php $teachers = App::teachers(); ?>
		<div class="teachers-desctop">
			<div class="container">
				<div class="row">
					<?php if($teachers): ?>
						<?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-md-4">
								<div class="teacher-box">
									<?php echo get_the_post_thumbnail($teacher->ID); ?>

									<div class="teacher-name">
										<h3><?php echo $teacher->post_title; ?></h3>
										<h4><?php echo $teacher->position; ?></h4>
									</div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		
		<div class="teachers-tablet">
			<div class="teachers-block">
				<?php if($teachers): ?>
					<?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="teacher-box">
							<?php echo get_the_post_thumbnail($teacher->ID); ?>

							<div class="teacher-name">
								<h3><?php echo $teacher->post_title; ?></h3>
								<h4><?php echo $teacher->position; ?></h4>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>



