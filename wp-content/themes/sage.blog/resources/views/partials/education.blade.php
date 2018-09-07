<section>
	<div class="education-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="education-img">
						<img src="{{ App::education_image() }}" alt="">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="education-info">
						<h2>{!! App::education_title() !!}</h2>
						<p>{!! App::education_text() !!}</p>
						<ul>
							<li><img src="{{ App::image_1() }}" alt="">{!! App::text_image_1() !!}</li>
							<li><img src="{{ App::image_2() }}" alt="">{!! App::text_image_2() !!}</li>
							<li><img src="{{ App::image_3() }}" alt="">{!! App::text_image_3() !!}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>