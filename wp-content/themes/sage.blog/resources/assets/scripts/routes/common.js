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


		// JavaScript to be fired on all pages, after page specific JS is fired
		var slideNow = 1;
		var slideCount = $('#slidewrapper').children().length;
		var navBtnId = 0;
		var translateWidth = 0;
		const slideInterval = Object.values(window.slide_time);

		for (var val = 1; val <= slideCount; val++) {
			$('#nav-btns').append('<li class="slide-nav-btn"></li>');
		}


		$("#nav-btns").on("click", ".slide-nav-btn", function() {
			$("#nav-btns .slide-nav-btn").removeClass("is-active");
			$(this).addClass("is-active");
		});

		$(document).ready(function() {
			var switchInterval = setInterval(SliderNextSlide, slideInterval);

			$('#viewport').hover(function() {
				clearInterval(switchInterval);
			}, function() {
				switchInterval = setInterval(SliderNextSlide, slideInterval);
			});

			$('.slide-nav-btn').click(function() {
				navBtnId = $(this).index();
				if (navBtnId + 1 != slideNow) {
					translateWidth = -$('#viewport').width() * (navBtnId);
					$('#slidewrapper').css({
						'transform': 'translate(' + translateWidth + 'px, 0)',
						'-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
						'-ms-transform': 'translate(' + translateWidth + 'px, 0)',
					});
					slideNow = navBtnId + 1;
				}
			});
		});
		$("#nav-btns").on("click", ".slide-nav-btn", function() {
			$("#nav-btns .slide-nav-btn").removeClass("is-active");
			$(this).addClass("is-active");
		});

		function SliderNextSlide() {
			if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
				$('#slidewrapper').css('transform', 'translate(0, 0)');
				slideNow = 1;
			} else {
				translateWidth = -$('#viewport').width() * (slideNow);
				$('#slidewrapper').css({
					'transform': 'translate(' + translateWidth + 'px, 0)',
					'-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
					'-ms-transform': 'translate(' + translateWidth + 'px, 0)',
				});

				slideNow++;
			}
		}

	},

	finalize() {



		var slideNowCourses = 1;
		var slideCountCourses = $('.courses-slide').length;
		var navBtnIdCourses = 0;
		var translateWidthCourses = 0;

		$(document).ready(function() {


			console.log(slideCountCourses);
			for (var i = 1; i <= slideCountCourses; i++) {
				$('.courses-nav-btns').append('<li class="courses-nav-btn"></li>');
			}




			$('.courses-nav-btn').click(function() {
				navBtnIdCourses = $(this).index();

				if (navBtnIdCourses + 1 != slideNowCourses) {
					translateWidthCourses = -$('.courses-viewport').width() * (navBtnIdCourses);
					$('.courses-slidewrapper').css({
						'transform': 'translate(' + translateWidthCourses + 'px, 0)',
						'-webkit-transform': 'translate(' + translateWidthCourses + 'px, 0)',
						'-ms-transform': 'translate(' + translateWidthCourses + 'px, 0)',
					});
					slideNowCourses = navBtnIdCourses + 1;
				}
			});
			console.log(slideNowCourses);
		// for (var j=0; j < slideNowCourses; j++) {
		// 	if (slideNowCourses==0) {
		// 		$("<li class='courses-nav-btn'></li>").addClass('active');
		// 	}
		// }
	});
		var multiccoutnCourses = 100 * slideCountCourses;
		var dividecoutnCourses = 100 / slideCountCourses;
		console.log(multiccoutnCourses);
		console.log(dividecoutnCourses);
		$('.courses-slidewrapper').css('width', multiccoutnCourses + '%');
		$('.courses-slide').css('width', dividecoutnCourses + '%');

		
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


		$('.variable-width').slick({
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			centerMode: true,
			variableWidth: true,
		});
	},
};





