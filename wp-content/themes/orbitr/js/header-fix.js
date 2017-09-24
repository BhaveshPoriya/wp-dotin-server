 ;(function($) {
	    'use strict'

	var headerFixed = function() {
			var headerFix = $('.site-header').offset().top;
			$(window).on('load scroll', function() {
				var y = $(this).scrollTop();
				if ( y >= headerFix) {
					$('.site-header').addClass('fixed');
				} else {
					$('.site-header').removeClass('fixed');
				}
				if ( y >= 107 ) {
					$('.site-header').addClass('float-header');
				} else {
					$('.site-header').removeClass('float-header');
				}
			});
	};

	// Dom Ready
	$(function() {
		headerFixed();
   	});
})(jQuery);