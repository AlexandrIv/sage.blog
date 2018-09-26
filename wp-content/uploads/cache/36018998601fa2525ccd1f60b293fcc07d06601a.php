<?php 
$map_blog_page = App::map_blog_page();
$api_key = App::api_key();
$contact_page_info = App::contact_page_info();
$contact_page_adress = App::contact_page_adress();  
$contact_7_shortcode = App::contact_7_shortcode(); 

?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $api_key; ?>"></script>
<div class="contact-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php echo wp_title('');; ?></h2>
				<div class="contact-page-map">
					<?php if( !empty($map_blog_page) ): ?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $map_blog_page['lat']; ?>" data-lng="<?php echo $map_blog_page['lng']; ?>"></div>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contact-page-form">
					<h3><?php echo $contact_page_info['contact_header']; ?></h3>
					<p><?php echo $contact_page_info['contact_info']; ?></p>
					<div class="contact-form">
						<?php echo do_shortcode($contact_7_shortcode); ?>

					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contact-page-info">
					<h3><?php echo $contact_page_adress['adress_header']; ?></h3>
					<p><?php echo $map_blog_page['address']; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>



