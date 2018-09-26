<div class="slick-slideshow">
	@php $slidetime = get_field('slideshow_time', 'option'); @endphp
	@if($slideshow)
		@foreach ($slideshow as $src)
			<div class="slides" style="background-image: url('@php echo $src['imageslide']@endphp')">
				<div class="opacity-block" style="opacity: {{ App::slideshow_opacity() }}"></div>
				<div class="text-slide">
					<h2>{!! $src['slidesetting']['slidetitle'] !!}</h2>
					<p>{!! $src['slidesetting']['slidedescription'] !!}</p>
					<a style="background-color: {!! $src['slidesetting']['buttoncolor'] !!}" href="{!! $src['slidesetting']['buttonlink'] !!}">{!! $src['slidesetting']['buttontext'] !!}</a>
				</div>
			</div>
		@endforeach
	@endif
</div>