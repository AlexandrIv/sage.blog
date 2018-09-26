{{-- <article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
--}}

<div class="content-single">
  <div class="container">
   <div class="row">
    <div class="col-md-9">
      <div class="breadcrumbs" typeof="BreadcrumbList">
        @if(function_exists('bcn_display'))
        {!! bcn_display(); !!}
        @endif
      </div>
      <div class="post-single-page">
        <article>
          <h2>{{ get_the_title() }}</h2>
          <div class="meta">
            <ul>
              <li>{{ get_the_date() }}</li>
              <li><a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}">{{ get_the_author() }}</a></li>
              <li>{{ comments_number() }}</li>
              <li><a href="{!! get_the_category('ID') !!}">Posted in <span>{!! the_category('ID') !!}</span></a></li>
            </ul>
          </div>
          <div class="thumbnail">
            {!! get_the_post_thumbnail(); !!}
          </div>
          <div class="content">
            {{ the_content() }}
          </div>
        </article>
        <div class="tag">
          {!! wp_tag_cloud() !!}
        </div>
        <div class="share">
          <a href="#">Facebook</a>
          <a href="#">Twitter</a>
        </div>
        <div class="comment-block">
          @php comments_template('/partials/comments.blade.php') @endphp
        </div>

        
       <div class="prev-next-button">
          <div class="prev-btn">
            {{ $next = previous_post_link('<i class="fas fa-angle-left"></i> %link') }}
          </div>
          <div class="next-btn">
            {{ $next = next_post_link('%link <i class="fas fa-angle-right"></i>') }}
          </div>
        </div>



      </div>
    </div>
    <div class="col-md-3">
      <div class="sidebar-single">
        @include('partials/sidebar-single')
      </div>
    </div>
  </div>
</div>
</div>




{{-- 

<div class="comments-block-box">
   @php
    wp_list_comments('type=comment&callback=mytheme_comment');
   @endphp
</div>

--}}
