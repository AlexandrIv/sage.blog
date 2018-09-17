
  

<?php $postscourses = App::postcourses(); ?>
<?php if($postscourses): ?>
	<?php $__currentLoopData = $postscourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postcourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-4">
			<div class="courses-desc-box">
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


