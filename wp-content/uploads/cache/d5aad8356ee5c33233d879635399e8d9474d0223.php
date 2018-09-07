<section>
	<div class="education-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="education-img">
						<img src="<?php echo e(App::education_image()); ?>" alt="">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="education-info">
						<h2><?php echo App::education_title(); ?></h2>
						<p><?php echo App::education_text(); ?></p>
						<ul>
							<li><img src="<?php echo e(App::image_1()); ?>" alt=""><?php echo App::text_image_1(); ?></li>
							<li><img src="<?php echo e(App::image_2()); ?>" alt=""><?php echo App::text_image_2(); ?></li>
							<li><img src="<?php echo e(App::image_3()); ?>" alt=""><?php echo App::text_image_3(); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>