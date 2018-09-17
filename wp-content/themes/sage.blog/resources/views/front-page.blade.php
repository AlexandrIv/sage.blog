@extends('layouts.app')

	@section('content')
	@include('partials.page-header')
	@include('partials.header-slider')
	@include('partials.education')
	@include('partials.features')
	@include('partials.courses')
	@include('partials.teachers')
	@include('partials.programs')

{!! get_the_posts_navigation() !!}
@endsection
