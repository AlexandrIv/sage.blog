<div id="block-for-slider">
	<div class="sliders">
		<div id="viewport">
			<ul id="slidewrapper">
				{{-- @php $slideopacity = get_field('slideopacity', 'option'); @endphp --}}
				@php $slidetime = get_field('slideshow_time', 'option'); @endphp				
				
				@if($slideshow)
					@foreach ($slideshow as $src)
					<li class="slides">
						<div class="slide" style="background-image: url('@php echo $src['imageslide']@endphp')"></div>
						<div class="opacity-block" style="opacity: {{ App::slideshow_opacity() }}"></div>
						<div class="text-slide">
							<h2>{!! $src['slidesetting']['slidetitle'] !!}</h2>
							<p>{!! $src['slidesetting']['slidedescription'] !!}</p>
							<a style="background-color: {!! $src['slidesetting']['buttoncolor'] !!}" href="{!! $src['slidesetting']['buttonlink'] !!}">{!! $src['slidesetting']['buttontext'] !!}</a>
						</div>
					</li>
					@endforeach
				@endif
			</ul>
			<ul id="nav-btns"></ul>
		</div>
	</div>
