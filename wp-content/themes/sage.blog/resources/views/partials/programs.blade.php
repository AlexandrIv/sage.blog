@php $taxonomies = get_terms("programs"); $transition = App::transition_time(); @endphp
<section>
	<div class="programs">
		<h2>Programs</h2>
		<div class="container">
			<div class="row">
				@foreach( $taxonomies as $taxonomy )
				@php $thumbnail = get_field('image_programs', $taxonomy->taxonomy . '_' . $taxonomy->term_id); @endphp
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<a href="#">
						<div class="programs-box">
							<div class="front" style="transition: {!! $transition !!}s;">
								<div style="background-image: url({!! $thumbnail !!});" class="programs-box-img"></div>
								<div class="programs-box-bg"></div>
								<div class="programs-box-text">
									<h3>{!! $taxonomy->name !!}</h3>
									<p>{!! $taxonomy->description !!}</p>
								</div>
							</div>
							<div class="back" style="transition: {!! $transition !!}s;">
								<div style="background-image: url({!! $thumbnail !!});" class="programs-box-img"></div>
								<div class="programs-box-text">
									<h3>{!! $taxonomy->name !!}</h3>
									<p>{!! $taxonomy->description !!}</p>
								</div>
							</div>
						</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>