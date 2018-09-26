<?php
$args = array('post_type' => 'post', 'numberposts' => 10, 'order' => 'DESC',);
$blogposts = get_posts($args);
?>
<section>
	<div class="blog">
		<h2>Blog</h2>
		<div class="blog-block">
			<?php if($blogposts): ?>
				<?php $__currentLoopData = $blogposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogpost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php setup_postdata($blogpost); ?>
				<div class="blog-box">
					<div class="blog-box-image" style="background-image: url(<?php echo get_the_post_thumbnail_url($blogpost->ID);; ?>);"></div>
					<div class="blog-text-box">
						<h3><?php echo $blogpost->post_title; ?></h3>
						<p><?php echo $blogpost->post_content; ?></p>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<div class="more-button">
			<a href="<?php echo get_page_link( 391 ); ?>" class="readmore">Read more</a>
		</div>
	</div>
</section>