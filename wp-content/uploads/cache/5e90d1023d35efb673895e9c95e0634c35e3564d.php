<header>
	<div class="blog-header">
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="top-header-block">
						<a href="#">About Me</a>
						<ul>
							<li><img src="<?= App\asset_path('images/icons.png'); ?>" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="row">
					<div class="logo">
						<h3><a href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a></h3>
						<h4><?php echo get_bloginfo('description'); ?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="blog-menu-header">
		<div class="container">
			<div class="row">
				<div class="blog-menu-header-block">
					<a class="menu-btn">
						<span></span>
					</a>
					<div class="menu">
						<?php if(has_nav_menu('primary_navigation')): ?>
						<?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

						<?php endif; ?>
						<div class="search">
							<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
								<input id="searchform" type="text" class="search-input" placeholder="search" value="<?php echo get_search_query() ?>" name="s" id="s">
								<input type="submit" id="searchsubmit" class="search-button" value="">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
