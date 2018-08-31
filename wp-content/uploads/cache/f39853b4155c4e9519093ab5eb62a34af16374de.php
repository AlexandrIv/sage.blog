<div id="block-for-slider">
	<div id="viewport">
		<ul id="slidewrapper">
			<li class="slide" style="background-image: url('');">
				<div class="opacity-block"></div>
				<div class="text-slide">
					<h2><?php echo get_field('title_slide', 'option'); ?></h2>
					<p><?php	echo get_field('description_slide', 'option');	?></p>
					<a style="background-color: <?php echo get_field('button_color', 'option'); ?>;" href="#"><?php echo get_field('button_text', 'option'); ?></a>
				</div>
			</li>
			<li class="slide" style="background-image: url('https://hsto.org/files/ef1/3d7/97e/ef13d797e4c642c7a1d4b2b91f7ad7b3.jpg');">
				<div class="opacity-block"></div>
				<div class="text-slide">
					<h2>Knowledge is power</h2>
					<p>Any succesfull career starts with good education</p>
					<a href="#">Learn more</a>
				</div>
			</li>
			<li class="slide" style="background-image: url('https://hsto.org/files/ec5/592/f1e/ec5592f1e814401eb38305682a8e88d4.jpg');">
				<div class="opacity-block"></div>
				<div class="text-slide">
					<h2>Knowledge is power</h2>
					<p>Any succesfull career starts with good education</p>
					<a href="#">Learn more</a>
				</div>
			</li>
			<li class="slide" style="background-image: url('https://hsto.org/files/eda/61a/3c5/eda61a3c53db408d820643998d9acd81.jpg');">
				<div class="opacity-block"></div>
				<div class="text-slide">
					<h2>Knowledge is power</h2>
					<p>Any succesfull career starts with good education</p>
					<a href="#">Learn more</a>
				</div>
			</li>
			
		</ul>
		<ul id="nav-btns">
			<li class="slide-nav-btn"></li>
			<li class="slide-nav-btn"></li>
			<li class="slide-nav-btn"></li>
			<li class="slide-nav-btn"></li>
		</ul>
	</div>
</div>
<?php
	var_dump( get_field('title_slide', 'option');)
?>
