export default {
	init() {
		jQuery(document).ready(function($) {
			$(document).ready(function(){
				$(function() {
					$("#mbtn").click(function() {
						$(".hamburger").toggleClass("is-active");
						$(".header-menu").slideToggle();
						$("body").toggleClass("body-gray");
					})
				});
			});
		});

		// JavaScript to be fired on all pages, after page specific JS is fired
		var slideNow = 1;
		var slideCount = $('#slidewrapper').children().length;
		var navBtnId = 0;
		var translateWidth = 0;
		const slideInterval = Object.values(window.slide_time);
	
		$(document).ready(function() {
			var switchInterval = setInterval(nextSlide, slideInterval);

			$('#viewport').hover(function() {
				clearInterval(switchInterval);
			}, function() {
				switchInterval = setInterval(nextSlide, slideInterval);
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

		function nextSlide() {
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

	},
};
