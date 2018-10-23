{{-- @extends('layouts.blog')

@section('content')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-search')
  @endwhile
  {!! get_the_posts_navigation() !!}
@endsection
--}}

@php
	$type = $_GET['search-type']
@endphp

@if(isset($_GET['search-type']))
	@if($type == 'shop') 
		@include('partials.shop-search')
 	@elseif($type == 'blog') 
		@include('partials.blog-search')
	@endif
@endif