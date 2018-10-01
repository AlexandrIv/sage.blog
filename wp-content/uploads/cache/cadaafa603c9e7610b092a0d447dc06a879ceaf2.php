<div class="col-md-4">
	<div class="courses-desc-box">
		<div class="top-box">
			<?php echo get_the_post_thumbnail( $post->ID );; ?>

			<h3><?php echo $post->post_title; ?></h3>
			<p><?php echo $post->short_text; ?></p>
		</div>
		<div class="bottom-box">
			<ul>
				<li>Time : <?php echo $post->time; ?></li>
				<li><?php echo $post->teacher; ?></li>
			</ul>
			<a href="#">Join Now</a>
		</div>
	</div>
</div>