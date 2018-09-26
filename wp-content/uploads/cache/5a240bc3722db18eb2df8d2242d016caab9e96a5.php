<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<div class="logo">
						<a href="<?php echo e(home_url('/')); ?>"><img src="<?= App\asset_path('images/logo.png'); ?>" alt=""></a>
						<h4><a href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a></h4>
					</div>
					<div class="mobile-btn">
						<a id="mbtn" class="hamburger hamburger--collapse">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</a>
					</div>
					<nav class="header-menu">
						<?php if(has_nav_menu('primary_navigation')): ?>
						<?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

						<?php endif; ?>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

