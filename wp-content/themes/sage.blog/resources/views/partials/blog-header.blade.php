<header>
	<div class="blog-header">
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="top-header-block">
						<a href="#">About Me</a>
						<ul>
							<li><img src="@asset('images/icons.png')" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="row">
					<div class="logo">
						<h3><a href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a></h3>
						<h4>{!! get_bloginfo('description') !!}</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="blog-menu-header">
		<div class="container">
			<div class="row">
				<div class="blog-menu-header-block">
					<div class="menu">
						@if (has_nav_menu('primary_navigation'))
							{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
						@endif
					</div>
					<div class="search">
						<form role="search" method="get" action="{!! home_url( '/' ) !!}">
							<input id="searchform" type="text" class="search-input" placeholder="search" value="<?php echo get_search_query() ?>" name="s" id="s">
							<input type="submit" id="searchsubmit" class="search-button" value="">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>