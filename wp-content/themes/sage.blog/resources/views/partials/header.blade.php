<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="header">
          <div class="logo">
            <a href="{{ home_url('/') }}"><img src="@asset('images/logo.png')" alt=""></a>
            <h4><a href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a></h4>
          </div>
          <div class="mobile-btn">
            <a id="mbtn" class="hamburger hamburger--collapse">
             <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </a>
        </div>
        <nav class="header-menu">
          @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
      </div>
    </div>
  </div>
</div>
</header>
