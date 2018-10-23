{{--
  Template Name: Cart-page
  --}}

  @extends('layouts.shop')
  @section('content')
  <div class="cart-block">
    <div class="container">
     <div class="row">
      <div class="col-md-12">
       {{ do_action('woocommerce_before_main_content') }}
       @while(have_posts()) @php the_post() @endphp
       {{ the_content() }}
       @endwhile
       {{ do_action('woocommerce_after_main_content') }}
     </div>
   </div>
 </div>
</div>
@endsection