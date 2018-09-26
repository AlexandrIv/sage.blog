{{-- @extends('layouts.app')

@section('content')
  @include('partials.header')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
--}}

@extends('layouts.blog')
@section('content')
  @include('partials.blog-page')
@endsection
























{{-- 
@section('content')
     @if (!have_posts())
     <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
    @endwhile

    {!! get_the_posts_navigation() !!}
    @endsection --}}