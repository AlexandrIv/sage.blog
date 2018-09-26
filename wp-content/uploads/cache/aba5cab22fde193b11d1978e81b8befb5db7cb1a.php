<?php $contact_map = App::contact_map(); ?>
<?php $api_key = App::api_key(); ?>
<?php $email = App::email(); ?>
<?php $phone = App::phone(); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $api_key; ?>"></script>
<section>
	<div class="contact">
		<h2>Contact</h2>
		<div class="contact-block">


			<div class="contact-form">
				<?php echo do_shortcode('[contact-form-7 id="385" title="Contact form 1"]');; ?>

			</div>


			<div class="contact-block-box">
				<div class="maps">
					<?php if( !empty($contact_map) ): ?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $contact_map['lat']; ?>" data-lng="<?php echo $contact_map['lng']; ?>"></div>
					</div>
					<?php endif; ?>
				</div>
				<div class="contact-boxs">
						<div class="contact-box">
							<img src="<?= App\asset_path('images/placeholder_(1).png'); ?>" alt="">
							<p><?php echo $contact_map['address']; ?></p>
						</div>
						<div class="contact-box">
							<img src="<?= App\asset_path('images/Layer_8.png'); ?>" alt="">
							<p><?php echo $email; ?></p>
						</div>
						<div class="contact-box">
							<img src="<?= App\asset_path('images/telephone.png'); ?>" alt="">
							<p><?php echo $phone; ?></p>
						</div>
					</div>
				</div>
			</div>


		</div>
</section>