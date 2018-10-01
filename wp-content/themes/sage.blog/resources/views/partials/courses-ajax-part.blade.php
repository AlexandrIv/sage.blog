<div class="col-md-4">
	<div class="courses-desc-box">
		<div class="top-box">
			{!! get_the_post_thumbnail( $post->ID ); !!}
			<h3>{!! $post->post_title !!}</h3>
			<p>{!! $post->short_text !!}</p>
		</div>
		<div class="bottom-box">
			<ul>
				<li>Time : {!! $post->time !!}</li>
				<li>{!! $post->teacher !!}</li>
			</ul>
			<a href="#">Join Now</a>
		</div>
	</div>
</div>