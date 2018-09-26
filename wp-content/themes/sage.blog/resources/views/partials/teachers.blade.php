<section>
	<div class="teacher">
		<h2>Our Teachers</h2>
			@php $teachers = App::teachers(); @endphp
		<div class="teachers-desctop">
			<div class="container">
				<div class="row">
					@if($teachers)
						@foreach($teachers as $teacher)
							<div class="col-md-4">
								<div class="teacher-box">
									{!! get_the_post_thumbnail($teacher->ID) !!}
									<div class="teacher-name">
										<h3>{!! $teacher->post_title !!}</h3>
										<h4>{!! $teacher->position !!}</h4>
									</div>
								</div>
							</div>
						@endforeach
					@endif
				</div>
			</div>
		</div>
		
		<div class="teachers-tablet">
			<div class="teachers-block">
				@if($teachers)
					@foreach($teachers as $teacher)
						<div class="teacher-box">
							{!! get_the_post_thumbnail($teacher->ID) !!}
							<div class="teacher-name">
								<h3>{!! $teacher->post_title !!}</h3>
								<h4>{!! $teacher->position !!}</h4>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</section>



