<div class="content-category">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="breadcrumbs-category">
					{!! the_breadcrumb() !!}
				</div>
				<h1>Category:</h1>
				@php $thisCat = get_category( get_query_var('cat') ); @endphp
				<h2>{!! $thisCat->name !!}:</h2>
				<div class="blog-post-block">
					@while (have_posts()) @php the_post() @endphp
					<article>
						<a href="{{ get_permalink() }}">{!! get_the_post_thumbnail(); !!}</a>
						<div class="article-text">
							<h3><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
							<ul>
								<li><a>{{ get_the_date() }}</a></li>
								<li><a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}">{{ get_the_author() }}</a></li>
								<li><a href="#">{{ comments_number() }}</a></li>
								<li>Posted in <span>{!! the_category('ID') !!}</span></li>
							</ul>
							<p>{!! the_excerpt() !!}</p>
							<div class="read-more">
								<a href="{{ get_permalink() }}">Read More</a>
							</div>
						</div>
					</article>
					@endwhile
				</div>
				<div class="pagination">
					@php
					$args = array(
						'prev_text' => __('<'),
						'next_text' => __('>'),
					)
					@endphp
					{!! the_posts_pagination($args); !!}
				</div>
			</div>
			<div class="col-md-3">
				<div class="blog-page-sidebar">
					@include('partials/sidebar-archive')
				</div>
			</div>
			<div class="col-md-12">

			</div>
		</div>
	</div>
</div>






