<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MyTheme</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css">
</head>
<body>

	<div class="container">
		<div class="row">

				
			
			<?php 
			// $args = array( 'numberposts' => 3, );
			// $lastposts = get_posts($args);
			// foreach($lastposts as $post){setup_postdata($post);
			// 	get_template_part('content');
			// }
			if( have_posts() ):
				while ( have_posts() ) : the_post();
					get_template_part('content')
				endwhile;
			

			global $wp_query;
			if (  $wp_query->max_num_pages > 1 ) : ?>
				<script>
					var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
					var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
					var current_page = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
					var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
				</script>
			<?php endif;
			?>
				<div class="load">
					<div id="true_loadmore">Загрузить</div>
				</div>
			<?php
			else :
				get_template_part('content', 'none');
			endif;
			?>




			

		

		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/loadmore.js"></script>
</body>
</html>