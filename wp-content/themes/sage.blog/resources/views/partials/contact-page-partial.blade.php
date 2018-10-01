@php 
$map_blog_page = App::map_blog_page();
$api_key = App::api_key();
$contact_page_info = App::contact_page_info();
$contact_page_adress = App::contact_page_adress();  
$contact_7_shortcode = App::contact_7_shortcode(); 

@endphp
<script src="https://maps.googleapis.com/maps/api/js?key={!! $api_key !!}"></script>
<div class="contact-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>{!! wp_title(''); !!}</h2>
				<div class="contact-page-map">
					@if( !empty($map_blog_page) )
					<div class="acf-map">
						<div class="marker" data-lat="{!! $map_blog_page['lat'] !!}" data-lng="{!! $map_blog_page['lng'] !!}"></div>
					</div>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="contact-page-form">
					<h3>{!! $contact_page_info['contact_header'] !!}</h3>
					<p>{!! $contact_page_info['contact_info'] !!}</p>
					<div class="contact-form">
						{!! do_shortcode($contact_7_shortcode) !!}
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contact-page-info">
					<h3>{!! $contact_page_adress['adress_header'] !!}</h3>
					<p>{!! $map_blog_page['address'] !!}</p>
				</div>
			</div>
		</div>
	</div>
</div>



