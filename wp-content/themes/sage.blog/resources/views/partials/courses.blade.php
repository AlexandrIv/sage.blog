<section>
	<div class="courses">
		<h2>Courses</h2>
		<div class="desctop-block">
			<div class="container">
				<div class="row">
					@php
						$arr = array();
						$value = App::postcourses();
					@endphp
					@foreach($value as $post)
						@php array_push($arr, $post->ID); @endphp
							@include('partials.courses-ajax-part')
					@endforeach
					<script>
						window.ajaxurl = '{!! admin_url('admin-ajax.php'); !!}';
					</script>
					<a id="true_loadmore" class="all">View All</a>
				</div>
			</div>
		</div>



		<div class="tablet-block">
			<div class="container">
				<div class="row">
					<div class="courses-slides">
						<div class="courses-viewport">
							<div class="courses-slidewrapper">
								@if($value)
									@foreach ($value as $postcourse)
										<div class="courses-slide">
											<div class="top-box">
												{!! get_the_post_thumbnail( $postcourse->ID ); !!}
												<h3>{!! $postcourse->post_title !!}</h3>
												<p>{!! $postcourse->short_text !!}</p>
											</div>
											<div class="bottom-box">
												<ul>
													<li>Time : {!! $postcourse->time !!}</li>
													<li>{!! $postcourse->teacher !!}</li>
												</ul>
												<a href="#">Join Now</a>
											</div>
										</div>
									@endforeach
								@endif
							</div>
							<ul class="courses-nav-btns"></ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

