{{-- <div class="content-shop-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        {{ woocommerce_breadcrumb() }}
      </div>
      <div class="col-md-9">
        <div class="product">
          <div class="row"> --}}

            {{--  {!! do_shortcode( '[recent_products per_page=12" columns="3" orderby="date" order="desc]' ) !!} --}}
            {{-- @php
              global $post; // не обязательно
              $args = array('post_type' => 'product'); // 5 записей из рубрики 9
              $myposts = get_posts( $args );  
              @endphp
              @foreach( $myposts as $post )@php setup_postdata($post) @endphp
              <div class="col-md-4">

                <div class="product-box">
                  <div class="product-img">
                    {!! get_the_post_thumbnail() !!}
                  </div>
                  

                  <a class="product-title" href="{!! the_permalink() !!}"><h3>{!! $post->post_title !!}</h3></a>
                  <div class="product-info">
                    <ul>
                      <li><a href="#"><img src="@asset('images/heart-blue.png')" alt=""></a></li>
                      <li><a href="#"><img src="@asset('images/heart-blue.png')" alt=""></a></li>

                      <li><a href="#"><img src="@asset('images/heart-gray.png')" alt=""></a></li>
                      <li><a href="#"><img src="@asset('images/heart-gray.png')" alt=""></a></li>
                      <li><a href="#"><img src="@asset('images/heart-gray.png')" alt=""></a></li>
                    </ul>
                    <div class="price">{{ woocommerce_template_loop_price() }}</div>
                  </div>
                  <div class="add-cart-btn">
                    {{ woocommerce_template_loop_add_to_cart( $crate_products->post, $product ) }}
                  </div>

                </div>

              </div>
              @endforeach
              @php wp_reset_postdata() @endphp --}}
              <div class="content-shop-page">
                <div class="container">
                  <div class="row">
                    <div class="col-md-9">
                      @if ( woocommerce_product_loop() ) 
                      {{ do_action( 'woocommerce_before_shop_loop' ) }}
                      {{ woocommerce_product_loop_start() }}
                      @if ( wc_get_loop_prop( 'total' ) ) 
                      @while ( have_posts() ) 
                      {{ the_post() }}
                      {{ do_action( 'woocommerce_shop_loop' ) }}
                      {{ wc_get_template_part( 'content', 'product' ) }}
                      @endwhile
                      @endif
                      {{ woocommerce_product_loop_end() }}
                      {{ do_action( 'woocommerce_after_shop_loop' ) }}
                      @else
                      {{ do_action( 'woocommerce_no_products_found' ) }}
                      @endif
                    </div>
                    <div class="col-md-3">
                      <div class="shop-sidebar">
                        <div class="categories">
                          @include('partials/sidebar-shop')
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                    {{-- <div class="col-md-3">
                      <div class="shop-sidebar">
                        <div class="categories">
                          @include('partials/sidebar-shop')
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}