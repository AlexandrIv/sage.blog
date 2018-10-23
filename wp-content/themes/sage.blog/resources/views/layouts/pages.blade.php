@php
  $header_page = get_field('select_header_page', get_the_ID(), 'option');
  $footer_page = get_field('select_footer_page', get_the_ID(), 'option');
@endphp

<!doctype html>
<html {{ get_language_attributes() }}>
@include('partials.head')
<body @php body_class() @endphp>
  @php do_action('get_header') @endphp
   <div class="preloader">
    <div class="laoder-frame">
      <img class="svg-loader" src="@asset('images/loader.svg')" alt="circle-loader">
    </div>
  </div>
  @if($header_page == 'page-header')
    @include('partials.header')
    @include('partials.header-slider')
  @elseif($header_page == 'blog-header')
    @include('partials.blog-header')
  @endif

  <div class="wrap" role="document">
    <div class="content">
      <main class="main">
        @yield('content')
      </main>
      @if (App\display_sidebar())
      <aside class="sidebar">
        @include('partials.sidebar')
      </aside>
      @endif
    </div>
  </div>
  @php do_action('get_footer') @endphp
  @if($footer_page == 'Blog footer')
    @include('partials.blog-footer')
  @elseif($footer_page == 'Page footer')
    @include('partials.footer')
  @endif
  @php wp_footer() @endphp
</body>
</html>
