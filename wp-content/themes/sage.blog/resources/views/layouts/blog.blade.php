@php
  $header = get_field('select_header_blog', 'option');
  $footer = get_field('select_footer_blog', 'option');
@endphp
<!doctype html>
<html {{ get_language_attributes() }}>
@include('partials.head')
<body @php body_class() @endphp>
  @php do_action('get_header') @endphp

  @if($header == 'blog-header')
    @include('partials.blog-header')
  @elseif($header == 'page-header')
    @include('partials.header')
    @include('partials.header-slider')
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
  @if($footer == 'blog-footer')
    @include('partials.blog-footer')
  @elseif($footer == 'page-footer')
    @include('partials.footer')
  @endif
  @php wp_footer() @endphp
</body>
</html>
