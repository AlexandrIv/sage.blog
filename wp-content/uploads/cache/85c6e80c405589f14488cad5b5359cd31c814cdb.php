<div class="blog-page-slideshow">
	<div class="blog-slide" style="background-image: url('<?= App\asset_path('images/img1.jpg'); ?>');">
		<div class="blog-slide-bg"></div>
		<div class="blog-slide-text">
			<h3>Visual speak louder</h3>
			<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind.</p>
			<a href="#">Read more</a>
		</div>
	</div>
	<div class="blog-slide" style="background-image: url('<?= App\asset_path('images/img2.jpg'); ?>');">
		<div class="blog-slide-bg"></div>
		<div class="blog-slide-text">
			<h3>Visual speak louder</h3>
			<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind.</p>
			<a href="#">Read more</a>
		</div>
	</div>
	<div class="blog-slide" style="background-image: url('<?= App\asset_path('images/img3.jpg'); ?>');">
		<div class="blog-slide-bg"></div>
		<div class="blog-slide-text">
			<h3>Visual speak louder</h3>
			<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind.</p>
			<a href="#">Read more</a>
		</div>
	</div>
	<div class="blog-slide" style="background-image: url('<?= App\asset_path('images/img4.jpg'); ?>');">
		<div class="blog-slide-bg"></div>
		<div class="blog-slide-text">
			<h3>Visual speak louder</h3>
			<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind.</p>
			<a href="#">Read more</a>
		</div>
	</div>
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
							<li><a href="<?php echo get_the_category('ID'); ?>">Posted in <span><?php echo the_category('ID'); ?></span></a></li>
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








