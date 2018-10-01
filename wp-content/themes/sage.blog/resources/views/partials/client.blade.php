@php $clients = App::clients(); @endphp
<section>
	<div class="clients">
		<h2>What client say</h2>
		<div class="container">
			<div class="row">
				<div class="client-carusel">
					<div class="client-images">
						@if($clients)
						@foreach($clients as $client)
						<div class="image-box">
							<img src="{!! $client['image'] !!}" alt="">
							<div class="img-client-bg"></div>
						</div>
						@endforeach
						@endif
					</div>

					<div class="client-text">
						@if($clients)
							@foreach($clients as $client)
								<div class="text-box">
									<p>{!! $client['coment'] !!}</p>
									<h3>{!! $client['name'] !!}</h3>
									<h4>{!! $client['position'] !!}</h4>
								</div>
							@endforeach
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</section>