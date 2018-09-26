<?php $taxonomies = get_terms("programs"); $transition = App::transition_time(); ?>
<section>
	<div class="programs">
		<h2>Programs</h2>
		<div class="container">
			<div class="row">
				<?php $__currentLoopData = $taxonomies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxonomy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php $thumbnail = get_field('image_programs', $taxonomy->taxonomy . '_' . $taxonomy->term_id); ?>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<a href="#">
						<div class="programs-box">
							<div class="front" style="transition: <?php echo $transition; ?>s;">
								<div style="background-image: url(<?php echo $thumbnail; ?>);" class="programs-box-img"></div>
								<div class="programs-box-bg"></div>
								<div class="programs-box-text">
									<h3><?php echo $taxonomy->name; ?></h3>
									<p><?php echo $taxonomy->description; ?></p>
								</div>
							</div>
							<div class="back" style="transition: <?php echo $transition; ?>s;">
								<div style="background-image: url(<?php echo $thumbnail; ?>);" class="programs-box-img"></div>
								<div class="programs-box-text">
									<h3><?php echo $taxonomy->name; ?></h3>
									<p><?php echo $taxonomy->description; ?></p>
								</div>
							</div>
						</div>
					</a>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
</section>