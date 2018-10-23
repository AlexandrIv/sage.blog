<header>
	<div class="shop-header">
		<div class="shop-top-header">
			<div class="container">
				<div class="row">
					<div class="shop-top-header-block">
						<div class="contact">
							<ul>
								<li><span><img src="@asset('images/Phone_handle.png')" alt=""></span>Support Line : +62 274 555666</li>
								<li><span><img src="@asset('images/Envelope.png')" alt=""></span>Email : Support@tonjoo.com</li>
							</ul>
						</div>
						<div class="search">
							{{ get_product_search_form() }}
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="shop-center-header">
			<div class="container">
				<div class="row">
					<div class="shop-center-header-block">
						<h2><a href="#">Mino Store</a></h2>
						<p>Just another Wordpress sites</p>
					</div>
				</div>
			</div>
		</div>
		<div class="shop-bottom-header">
			<div class="container">
				<div class="row">
					<div class="shop-bottom-header-block">

						<div class="menu-shop">
							<a class="shop-menu-btn">
								<span></span>
							</a>
							<div class="menu-left">
								{{-- <ul>
									<li class="active"><a href="#">Home</a></li>
									<li><a href="#">Categories</a></li>
									<li><a href="#">Store</a></li>
									<li><a href="#">Others</a></li>
								</ul> --}}
								@if (has_nav_menu('shop_menu'))
								{!! wp_nav_menu(['theme_location' => 'shop_menu', 'menu_class' => 'nav']) !!}
								@endif
							</div>
							<div class="menu-right">
								<ul>
									<li class="ac-panel">
										{{-- @if( !is_account_page() )
										<a href="{!! get_permalink( get_option('woocommerce_myaccount_page_id') ) !!}"><img src="@asset('images/Man.png')" alt="">My Account</a>
										@elseif( is_account_page() && is_user_logged_in() )
										<a href="{!! get_permalink( get_option('woocommerce_myaccount_page_id') ) !!}"><img src="@asset('images/Man.png')" alt=""><span>{!! wp_get_current_user()->user_login !!}</span></a>
										@elseif( !is_user_logged_in() )
										<a href="{!! get_permalink( get_option('woocommerce_myaccount_page_id') ) !!}"><img src="@asset('images/Man.png')" alt="">Login</a>
										@elseif( is_cart_page() )
										<a href="{!! get_permalink( get_option('woocommerce_myaccount_page_id') ) !!}"><img src="@asset('images/Man.png')" alt=""><span>{!! wp_get_current_user()->user_login !!}</span></a>
										@endif --}}
										@php
											$user_name = wp_get_current_user()->user_login
										@endphp

										@if( is_shop() && !is_user_logged_in() )
										

										@elseif( is_shop() && is_user_logged_in() )
										<a href="{!! get_permalink( get_option('woocommerce_myaccount_page_id') ) !!}"><img src="@asset('images/Man.png')" alt=""><span>{!! $user_name !!}</span></a>

										@elseif( is_account_page() && is_user_logged_in() || is_product() && is_user_logged_in() || is_product_category() && is_user_logged_in() || is_cart() && is_user_logged_in() )
											<a href="{!! get_permalink( get_option('woocommerce_myaccount_page_id') ) !!}"><img src="@asset('images/Man.png')" alt=""><span>{!! $user_name !!}</span></a>
										@elseif( is_account_page() && !is_user_logged_in() || is_product() && !is_user_logged_in() || is_product_category() && !is_user_logged_in() || is_cart() && !is_user_logged_in() )
											<a href="{!! get_permalink( get_option('woocommerce_myaccount_page_id') ) !!}"><img src="@asset('images/Man.png')" alt="">Login</a>
										@endif

									</li>
									<li class="menu-item cart-punkt">
										<a class="cart-contents" href="/cart/" title="cart"></a>
										{!! the_widget( 'WC_Widget_Cart', 'title=' ); !!}
									</li>
								</ul>
							</div>
						</div>
						<div class="mmenu-shop">
							@if (has_nav_menu('shop_menu'))
							{!! wp_nav_menu(['theme_location' => 'shop_menu', 'menu_class' => 'nav']) !!}
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
