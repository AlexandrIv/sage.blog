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
	},
	finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
},
};
