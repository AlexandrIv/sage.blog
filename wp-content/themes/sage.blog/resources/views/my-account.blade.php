{{-- 
	Template Name: My-account
--}}

@extends('layouts.shop')
	@section('content')
		@while(have_posts()) @php the_post() @endphp
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="my-account">
							{{ the_content() }}
						</div>
					</div>
				</div>
			</div>
		@endwhile
	@endsection
