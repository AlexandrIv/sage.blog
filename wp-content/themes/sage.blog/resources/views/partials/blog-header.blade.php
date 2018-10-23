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
					<a class="menu-btn">
						<span></span>
					</a>
					<div class="menu">
						@if (has_nav_menu('primary_navigation'))
						{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
						@endif
						<div class="search">
							@include('partials.search-form')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
