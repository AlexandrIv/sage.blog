<div class="blog-page-slideshow">
	<?php
	$args = array(
		'post_type' => 'post',
		'numberposts'	=> 3,
	);
	$posts = get_posts($args)
	?>
	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="blog-slide" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');">
			<div class="blog-slide-bg"></div>
			<div class="blog-slide-text">
				<h3><?php echo $post->post_title; ?></h3>
				<p><?php echo wp_trim_words($post->post_content, 10); ?></p>
				<a href="<?php echo get_permalink($post); ?>">Read more</a>
			</div>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="blog-post-block">
				<?php while(have_posts()): ?> <?php the_post() ?>
				<article>
					<a href="<?php echo e(get_permalink()); ?>"><?php echo get_the_post_thumbnail();; ?></a>
					<div class="article-text">
						<h3><a href="<?php echo e(get_permalink()); ?>"><?php echo e(get_the_title()); ?></a></h3>
						<ul>
							<li><a><?php echo e(get_the_date()); ?></a></li>
							<li><a href="<?php echo e(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo e(get_the_author()); ?></a></li>
							<li><a href="#"><?php echo e(comments_number()); ?></a></li>
							<li>Posted in <span><?php echo the_category('ID'); ?></span></li>
						</ul>
						<p><?php echo the_excerpt(); ?></p>
						<div class="read-more">
							<a href="<?php echo e(get_permalink()); ?>">Read More</a>
						</div>
					</div>
				</article>
				<?php endwhile; ?>
			</div>
			<div class="pagination">
				<?php
				$args = array(
					'prev_text' => __('<'),
					'next_text' => __('>'),
				)
				?>
				<?php echo the_posts_pagination($args);; ?>

			</div>
		</div>
		<div class="col-md-3">
			<div class="blog-page-sidebar">
				<?php echo $__env->make('partials/sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</div>
		<div class="col-md-12">
			
		</div>
	</div>
</div>








