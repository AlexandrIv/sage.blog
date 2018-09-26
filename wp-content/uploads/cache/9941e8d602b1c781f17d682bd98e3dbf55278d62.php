<?php $clients = App::clients(); ?>
<section>
	<div class="clients">
		<h2>What client say</h2>
		<div class="container">
			<div class="row">
				<div class="client-carusel">
					<div class="client-images">
						<?php if($clients): ?>
						<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="image-box">
							<img src="<?php echo $client['image']; ?>" alt="">
							<div class="img-client-bg"></div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
					</div>

					<div class="client-text">
						<?php if($clients): ?>
							<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="text-box">
									<p><?php echo $client['coment']; ?></p>
									<h3><?php echo $client['name']; ?></h3>
									<h4><?php echo $client['position']; ?></h4>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>