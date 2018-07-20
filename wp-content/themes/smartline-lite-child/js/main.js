(function($) {
		"use strict";
		$(document).ready(function() {

			$(window).scroll(function () {

				console.log($(window).scrollTop())
				if ($(window).scrollTop() > 300) {
					$('#footer').fadeIn();
				}
				else
				{
					$('#footer').fadeOut();
				}
			});
		});

		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
		});
		$('.scrollup').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 1000);
			return false;
		});


      $(document).ready(function() {
        $('#header-social-icons').find('ul li a').attr('target', '_blank');
        });

	})(jQuery);