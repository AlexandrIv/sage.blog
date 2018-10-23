export default {
	init() {

		$(document).ready(function(){
			$(function() {
				$("#mbtn").click(function() {
					$(".hamburger").toggleClass("is-active");
					$(".header-menu").slideToggle();
					$(".body-bcg").toggleClass("body-gray");
				})
			});
		});

		$('.menu-btn').on('click', function(e){
			e.preventDefault;
			$(this).toggleClass('menu-btn-active');
			$(".menu").slideToggle();
		});

		$('.shop-menu-btn').on('click', function(e){
			e.preventDefault;
			$(this).toggleClass('shop-menu-btn-active');
			$(".mmenu-shop").slideToggle();
		});

		jQuery(document).ready(function($) {
			$(window).load(function() {
				setTimeout(function() {
					$('.preloader').fadeOut('slow', function() {});
				}, 80);

			});
		});
	},

	finalize() {
		$('.slick-slideshow').slick({
			infinite: true,
			autoplay: true,
			dots: true,
			autoplaySpeed: Object.values(window.slide_time),
			speed: 800,
			arrows: false,
		});



	// 	var slideNowCourses = 1;
	// 	var slideCountCourses = $('.courses-slide').length;
	// 	var navBtnIdCourses = 0;
	// 	var translateWidthCourses = 0;

	// 	$(document).ready(function() {


	// 		console.log(slideCountCourses);
	// 		for (var i = 1; i <= slideCountCourses; i++) {
	// 			$('.courses-nav-btns').append('<li class="courses-nav-btn"></li>');
	// 		}

	// 		$('.courses-nav-btn').click(function() {
	// 			navBtnIdCourses = $(this).index();

	// 			if (navBtnIdCourses + 1 != slideNowCourses) {
	// 				translateWidthCourses = -$('.courses-viewport').width() * (navBtnIdCourses);
	// 				$('.courses-slidewrapper').css({
	// 					'transform': 'translate(' + translateWidthCourses + 'px, 0)',
	// 					'-webkit-transform': 'translate(' + translateWidthCourses + 'px, 0)',
	// 					'-ms-transform': 'translate(' + translateWidthCourses + 'px, 0)',
	// 				});
	// 				slideNowCourses = navBtnIdCourses + 1;
	// 			}
	// 		});
	// 		console.log(slideNowCourses);
	// 	// for (var j=0; j < slideNowCourses; j++) {
	// 	// 	if (slideNowCourses==0) {
	// 	// 		$("<li class='courses-nav-btn'></li>").addClass('active');
	// 	// 	}
	// 	// }
	// });
	// 	var multiccoutnCourses = 100 * slideCountCourses;
	// 	var dividecoutnCourses = 100 / slideCountCourses;
	// 	console.log(multiccoutnCourses);
	// 	console.log(dividecoutnCourses);
	// 	$('.courses-slidewrapper').css('width', multiccoutnCourses + '%');
	// 	$('.courses-slide').css('width', dividecoutnCourses + '%');


	jQuery(function($){
		$('#true_loadmore').click(function(){
				$(this).text('Loading...'); // изменяем текст кнопки, вы также можете добавить прелоадер
				var data = {
					'action': 'loadmore',
					'postid': window.postid,
				};
				$.ajax({
					url:window.ajaxurl,
					data:data, // данные
					type:'POST', // тип запроса
					success:function(data){
						if( data ) { 
							$('#true_loadmore').before(data); // вставляем новые посты
							$('#true_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
						}
					},
				});
				return false;
			});
	});







		// $('.cours-slider').slick({
		// 	dots: true,
		// 	infinite: true,
		// 	speed: 300,
		// 	slidesToShow: 1,
		// });



		$('.courses-slider').slick({
			dots: true,
			infinite: true,
			slidesToShow: 1,
		});





		$('.teachers-block').slick({
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			centerMode: true,
			variableWidth: true,
		});



		$('.client-images').slick({
			infinite: true,
			slidesToShow: 5,
			centerMode: true,
			variableWidth: true,
			asNavFor: '.client-text',
			prevArrow: '<div class="prev"></div>',
			nextArrow: '<div class="next"></div>',
			responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					centerMode: false,
					variableWidth: false,
					dots: true,
				},
			},
			],
		});


		$('.client-text').slick({
			infinite: true,
			slidesToShow: 1,
			asNavFor: '.client-images',
			prevArrow: '<div class="prev"></div>',
			nextArrow: '<div class="next"></div>',
		});


		$('.blog-block').slick({
			centerMode: true,
			slidesToShow: 5,
			responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					centerMode: true,
					variableWidth: true,
				},
			},
			],
		});







		jQuery(function($){
			$('#subscribe').click(function(){
				var inputName = document.getElementById("email");
				if (!inputName.value.trim()) {
					$(".message").fadeIn().delay(4000).fadeOut();
					$('.message').text('Enter your email address!!!');
					document.getElementById("message").style.color="red";
				}
				else {
					window.email = document.getElementById("email").value;
					$(this).text('Registry');
					$.ajax({
						url: window.ajaxurl,
						type: 'POST',
						data: {
							action : 'subscribe',
							email : window.email,
						},
						success: function( data ){
							if(data == 'error'){
								$(".message").fadeIn().delay(4000).fadeOut();
								$('.message').text('Email already exists!!!');
								document.getElementById("message").style.color="red";
							}
							else if(data == 'succes'){
								$(".message").fadeIn().delay(4000).fadeOut();
								$('.message').text('Subscription was made!');
								document.getElementById("message").style.color="#27ae60";
							}
							$('#subscribe').text('Sign Up');
						},
					});
				}
			});
		});


		$('.blog-page-slideshow').slick({
			infinite: true,
			autoplay: true,
			dots: false,
			autoplaySpeed: 2000,
			speed: 800,
			arrows: false,
		});

		$('.reply a').on('click', function (event) {
			event.preventDefault();
			var id  = $(this).attr('href'),
			top = $(id).offset().top-200;
			$('body,html').animate({scrollTop: top}, 800);
			$("#comment").focus();

			console.log(id);
			var id_reply = $(this).attr('data');
			$('#comment_parent').attr('value', id_reply);
			return false;
		});

		$(".cart-punkt").hover(function () {
			$('.widget_shopping_cart').addClass('widget_shopping_cart-open'); 
		}, function () {
			$('.cart-punkt').data('timer', setTimeout(function () {
				$('.widget_shopping_cart').toggleClass('widget_shopping_cart-open'); 
			}, 10));
		});



		(function ($) {

			$(document).on('click', '.single_add_to_cart_button', function (e) {
				e.preventDefault();

				var $thisbutton = $(this),
				$form = $thisbutton.closest('form.cart'),
				id = $thisbutton.val(),
				product_qty = $form.find('input[name=quantity]').val() || 1,
				product_id = $form.find('input[name=product_id]').val() || id,
				variation_id = $form.find('input[name=variation_id]').val() || 0;

				var data = {
					action: 'woocommerce_ajax_add_to_cart',
					product_id: product_id,
					product_sku: '',
					quantity: product_qty,
					variation_id: variation_id,
				};

				$(document.body).trigger('adding_to_cart', [$thisbutton, data]);

				$.ajax({
					type: 'post',
					url: window.wc_add_to_cart_params.ajax_url,
					data: data,
					beforeSend: function () {
						$thisbutton.removeClass('added').addClass('loading');
					},
					complete: function () {
						$thisbutton.addClass('added').removeClass('loading');
					},
					success: function (response) {

						if (response.error & response.product_url) {
							window.location = response.product_url;
							return;
						} else {
							$(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $thisbutton]);
						}
					},
				});

				return false;
			});
		})(jQuery);





		$('.add_to_cart_button').on('click', function(){
			var that = $(this).closest('.product').find('.attachment-woocommerce_thumbnail');
			var bascket = $(".cart-contents");
			that.clone()
			.css({'width' : '10%',
				'position' : 'absolute',
				'z-index' : '1',
				top: that.offset().top,
				left:that.offset().left})
			.appendTo("body")
			.animate({opacity: 0.05,
				left: bascket.offset()['left'],
				top: bascket.offset()['top'],
				width: 20}, 1000, function() {	
					$(this).remove();
				});
		});



		$(document).pjax('.woocommerce-MyAccount-navigation-link, .ac-panel', '.woocommerce-MyAccount-content', {fragment: '.woocommerce-MyAccount-content'});
		$('.my-account').on('pjax:success', function(){
			$.pjax({
				url: window.location.href,
				container: '.woocommerce-MyAccount-navigation-link',
				fragment: '.woocommerce-MyAccount-navigation-link',
			});
		});
		$(document).pjax('.cat-item', '.content-shop-page', {fragment: '.content-shop-page'});
		$(document).pjax('.product', '.single-product', {fragment: '.single-product'});
		$(document).pjax('.product', '.single-product', {fragment: '.single-product'});





		$('.my-account .woocommerce .col-1').removeClass('col-1').addClass('col-6');
		$('.my-account .woocommerce .col-2').removeClass('col-2').addClass('col-6');

		setInterval(function () {
			var elem = $('.ui-autocomplete').css('display');
			if(elem == 'block') {
				$('.body-bcg').addClass('body-black');
				$('.shop-top-header').addClass('active');
				$('.ui-autocomplete').addClass('active');
			}
			else {
				$('.body-bcg').removeClass('body-black');
				$('.shop-top-header').removeClass('active');
				$('.ui-autocomplete').removeClass('active');
			}	
		},50);

		
		
	},
};





