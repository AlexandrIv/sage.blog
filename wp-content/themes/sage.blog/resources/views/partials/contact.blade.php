@php $contact_map = App::contact_map(); @endphp
@php $api_key = App::api_key(); @endphp
@php $email = App::email(); @endphp
@php $phone = App::phone(); @endphp
<script src="https://maps.googleapis.com/maps/api/js?key={!! $api_key !!}"></script>
<section>
	<div class="contact">
		<h2>Contact</h2>
		<div class="contact-block">


			<div class="contact-form">
				{!! do_shortcode('[contact-form-7 id="385" title="Contact form 1"]'); !!}
			</div>


			<div class="contact-block-box">
				<div class="maps">
					@if( !empty($contact_map) )
					<div class="acf-map">
						<div class="marker" data-lat="{!! $contact_map['lat'] !!}" data-lng="{!! $contact_map['lng'] !!}"></div>
					</div>
					@endif
				</div>
				<div class="contact-boxs">
						<div class="contact-box">
							<img src="@asset('images/placeholder_(1).png')" alt="">
							<p>{!! $contact_map['address'] !!}</p>
						</div>
						<div class="contact-box">
							<img src="@asset('images/Layer_8.png')" alt="">
							<p>{!! $email !!}</p>
						</div>
						<div class="contact-box">
							<img src="@asset('images/telephone.png')" alt="">
							<p>{!! $phone !!}</p>
						</div>
					</div>
				</div>
			</div>


		</div>
</section>