export default {
	init() {

		$(document).ready(function(){
			$(function() {
				$("#mbtn").click(function() {
					$(".hamburger").toggleClass("is-active");
					$(".header-menu").slideToggle();
					$("body").toggleClass("body-gray");
				})
			});
		});

		$('.menu-btn').on('click', function(e){
			e.preventDefault;
			$(this).toggleClass('menu-btn-active');
			$(".menu").slideToggle();
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




		$(document).ready(function(){
			$("#respond").on("click","a", function (event) {
				event.preventDefault();
				var id  = $(this).attr('href'),
				top = $(id).offset().top;
				$('body,html').animate({scrollTop: top-200}, 2000);
				document.getElementById("comment").focus();
				$("<div id='third'>Третий</div>").appendTo("#reply-title");
			});
		});



	},
};





