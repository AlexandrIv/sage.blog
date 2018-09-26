<footer class="footer">
	<div class="footer-block">
		<div class="logo">
			<img src="@asset('images/logo.png')" alt="">
			<h3><a href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a></h3>
		</div>
		<div class="footer-menu">
			@if (has_nav_menu('primary_navigation'))
			{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
			@endif
		</div>
	</div>
</footer>
