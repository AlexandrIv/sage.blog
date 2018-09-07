<section>
	<div class="features-section">
		<h2><?php echo App::features_title(); ?></h2>
		<div class="container">
			<div class="row">
				<?php $posts = App::posts_to_display(); ?>
				<?php if($posts): ?>
					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="feature-block">
								<div class="img-box">
									<?php echo get_the_post_thumbnail( $post->ID );; ?>

								</div>
								<h2><?php echo $post->post_title; ?></h2>
								<p><?php echo $post->post_content; ?></p>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>