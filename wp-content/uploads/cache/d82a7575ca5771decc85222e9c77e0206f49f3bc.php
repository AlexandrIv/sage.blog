<footer class="footer">
	<div class="footer-block">
		<div class="logo">
			<img src="<?= App\asset_path('images/logo.png'); ?>" alt="">
			<h3><a href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a></h3>
		</div>
		<div class="footer-menu">
			<?php if(has_nav_menu('primary_navigation')): ?>
			<?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

			<?php endif; ?>
		</div>
	</div>
</footer>
