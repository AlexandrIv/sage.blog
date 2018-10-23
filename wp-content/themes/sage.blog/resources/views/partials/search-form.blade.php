<form role="search" method="get" action="{!! home_url( '/' ) !!}">
	<input id="searchform" type="text" class="search-input" placeholder="search" value="<?php echo get_search_query() ?>" name="s" id="s">
	<input type="hidden" name="search-type" value="blog" />
	<input type="submit" id="searchsubmit" class="search-button" value="">
</form>



