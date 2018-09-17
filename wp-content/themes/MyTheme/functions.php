<?php 
function true_loadmore_scripts() {
	wp_enqueue_script('jquery'); // скорее всего он уже будет подключен, это на всякий случай
	wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/loadmore.js', array('jquery') );
}

add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );











function true_load_posts(){

	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';

	$args = array('numberposts' => -1, );
	$posts = get_posts( $args );
	foreach( $posts as $post ){	setup_postdata($post);
		?>
		<div class="col-md-4">
			<div class="box-post">
				<h3><?php echo $post->post_title ?></h3>
				<p><?php the_content(); ?></p>
			</div>
		</div>
		<?php
	}
	var_dump($post);
	wp_reset_postdata(); // сброс
	wp_die();
}


add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');




