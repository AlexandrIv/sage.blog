@php
$args = array('post_type' => 'post', 'numberposts' => 10, 'order' => 'DESC',);
$blogposts = get_posts($args);
@endphp
<section>
	<div class="blog">
		<h2>Blog</h2>
		<div class="blog-block">
			@if($blogposts)
				@foreach($blogposts as $blogpost)
				@php setup_postdata($blogpost); @endphp
				<div class="blog-box">
					<div class="blog-box-image" style="background-image: url({!! get_the_post_thumbnail_url($blogpost->ID); !!});"></div>
					<div class="blog-text-box">
						<h3>{!! $blogpost->post_title !!}</h3>
						<p>{!! get_the_excerpt($blogpost) !!}</p>
					</div>
				</div>
				@endforeach
			@endif
			@php wp_reset_postdata(); @endphp
		</div>
		<div class="more-button">
			<a href="{!! get_page_link( 391 ) !!}" class="readmore">Read more</a>
		</div>
	</div>
</section>