{{-- <article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
--}}

{{-- <div class="content-single">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
     <div class="post-single-page">
      <article>
        <h2>{{ get_the_title() }}</h2>
        <div class="thumbnail">
          {!! get_the_post_thumbnail(); !!}
        </div>
        <div class="content">
          {{ the_content() }}
        </div>
      </article>
      <div class="comment-block">
        @php comments_template('/partials/comments.blade.php') @endphp
      </div>
    </div>
  </div>
</div>
</div>
</div> --}}



@php
defined( 'ABSPATH' ) || exit;
do_action( 'woocommerce_before_single_product' );
if ( post_password_required() ) {
  echo get_the_password_form(); // WPCS: XSS ok.
  return;
}
@endphp
<div class="single-product">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="product-{{ the_ID() }}" {{ wc_product_class() }}>
         {{ do_action( 'woocommerce_before_single_product_summary' ) }}
         {{ do_action('woocommerce_template_single_title') }}
          <div class="summary entry-summary">
            {{ do_action( 'woocommerce_single_product_summary' ) }}
          </div>  
          {{ do_action( 'woocommerce_after_single_product_summary' ) }}
        </div>
      </div>
    </div>
  </div>
</div>
@php
do_action( 'woocommerce_after_single_product' );
@endphp

{{-- 

<div class="comments-block-box">
   @php
    wp_list_comments('type=comment&callback=mytheme_comment');
   @endphp
</div>

--}}
