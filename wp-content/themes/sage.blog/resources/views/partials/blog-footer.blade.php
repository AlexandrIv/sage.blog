<footer>
	<div class="blog-footer">
		<div class="container">
			<div class="row">
				<div class="blog-footer-block">
					<div class="blog-recent-footer">
						<h3>Recent posts</h3>
						@php
						$params = array(
							'posts_per_page' => 5,
							'category' => 'recent-posts'
						);
						$recent_posts_array = get_posts($args);
						@endphp
						<ul>
							@foreach( $recent_posts_array as $recent_post_single )
							<li>
								<h5><a href="{!! get_permalink( $recent_post_single ) !!}">{!! $recent_post_single->post_title !!}</a></h5>
								<p>{!! $recent_post_single->post_date !!}</p>
							</li>
							@endforeach
						</ul>
					</div>
					<div class="blog-pages-footer">
						<h3>Pages</h3>
						@if (has_nav_menu('primary_navigation'))
						{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
						@endif
					</div>
					<div class="blog-categories-footer">
						<h3>Categories</h3>
						@php
						$categories = get_categories( array(
							'type'         => 'post',
							'child_of'     => 0,
							'parent'       => '',
							'orderby'      => 'name',
							'order'        => 'ASC',
							'hide_empty'   => 0,
							'hierarchical' => 1,
							'exclude'      => '',
							'include'      => '',
							'number'       => 0,
							'taxonomy'     => 'category',
							'pad_counts'   => false,
						) );
						@endphp
						@if($categories)
							@foreach( $categories as $single_cat )
								<a href="{!! get_category_link($single_cat) !!}">{!! $single_cat->name !!}</a>
							@endforeach
						@endif
					</div>
					<div class="blog-text-widget">
						<h3>Text widget</h3>
						<p>We’re both adults. I can’t pretend I don’t know that person is you. I want there to be no confusion. I know I owe you my life. And more than that, I respect the strategy. No speeches. Short speech. You lost your partner today. </p>
					</div>
				</div>
				<div class="blog-bottom-footer-block">
					<h3>designed by <a href="#">tonjoostudio</a></h3>
				</div>
			</div>
		</div>
	</div>
</footer>