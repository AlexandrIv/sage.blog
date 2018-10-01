<section>
	<div class="features-section">
		<h2>{!! App::features_title() !!}</h2>
		<div class="container">
			<div class="row">
				@php $posts = App::posts_to_display(); @endphp
				@if($posts)
					@foreach($posts as $post)
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="feature-block">
								<div class="img-box">
									{!! get_the_post_thumbnail( $post->ID ); !!}
								</div>
								<h2>{!! $post->post_title !!}</h2>
								<p>{!! $post->post_content !!}</p>
							</div>
						</div>
					@endforeach	
				@endif
			</div>
		</div>
	</div>
</section>