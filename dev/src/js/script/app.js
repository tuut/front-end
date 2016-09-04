window.jQuery = window.$ = jQuery;
"use strict";
var App;
App = function () {

	function handleScrollReveal() {
		window.sr = ScrollReveal({ reset: false, mobile: false });
		sr.reveal('#header .brand', { delay: 1750, scale: 1.2, distance: '0px', easing: 'ease' });
		sr.reveal('#header', { delay: 1550, scale: 1, origin: 'top', distance: '20px', easing: 'ease', afterReveal: function () { $('#header').attr('style', ''); } });
		sr.reveal('.background-clipper', { delay: 0, scale: 1.1, duration: 1500, opacity: 0, distance: '0px', easing: 'ease' });
		sr.reveal('#header .social-header > li:nth-child(1)', { delay: 1800, scale: 1.2, distance: '0px', easing: 'ease' });
		sr.reveal('#header .social-header > li:nth-child(2)', { delay: 1900, scale: 1.2, distance: '0px', easing: 'ease' });
		sr.reveal('#header .social-header > li:nth-child(3)', { delay: 2000, scale: 1.2, distance: '0px', easing: 'ease' });
		sr.reveal('#header .social-header > li:nth-child(4)', { delay: 2100, scale: 1.2, distance: '0px', easing: 'ease' });
		sr.reveal('#banner .caption > .title', { delay: 2500, scale: 1.5, origin: 'right', distance: '250px', easing: 'ease' });
		sr.reveal('#banner .caption > .subtitle', { delay: 2700, scale: 1.5, origin: 'left', distance: '250px', easing: 'ease' });
		sr.reveal('#banner .red-numbers', { delay: 3000, scale: 1.1, origin: 'bottom', distance: '20px', easing: 'ease' });
		sr.reveal('#banner .red-number:nth-child(1)', { delay: 3400, scale: 1.1, origin: 'left', distance: '0px', easing: 'ease' });
		sr.reveal('#banner .red-number:nth-child(2)', { delay: 3500, scale: 1.1, origin: 'left', distance: '0px', easing: 'ease' });
		sr.reveal('#banner .red-number:nth-child(3)', { delay: 3600, scale: 1.1, origin: 'left', distance: '0px', easing: 'ease' });
		sr.reveal('#banner .red-number:nth-child(4)', { delay: 3700, scale: 1.1, origin: 'left', distance: '0px', easing: 'ease' });
		sr.reveal('.news-header', { delay: 250, scale: 1, opacity: 0.9, distance: '10px', origin: 'bottom', 'duration': 500, easing: 'ease' });
		sr.reveal('.post:nth-child(1)', { delay: 250, scale: 1.1, origin: 'left', 'distance': '10px', easing: 'ease' });
		sr.reveal('.post:nth-child(2)', { delay: 350, scale: 1.1, origin: 'right', 'distance': '10px', easing: 'ease' });
		sr.reveal('.post:nth-child(3)', { delay: 450, scale: 1.1, origin: 'right', 'distance': '10px', easing: 'ease' });
		sr.reveal('.footer', { delay: 250, scale: 1, origin: 'top', easing: 'ease' });	
	}
	
	function handleOpenModal() {
	
		$('#modal-news').modal({
		    fadeDuration: 250,
		    escapeClose: false,
		  });
	}

	return {

		init: function () {

			handleScrollReveal();

			// abrir a modal
			setTimeout(handleOpenModal, 8000);

			$('.sub-menu').on('mouseenter', function() {
				$('#background-layer').addClass('background-effect');
			}).on('mouseleave', function() {
				$('#background-layer').removeClass('background-effect');
			});

			$('.menu-toggle').on('click', function(e) {
				$(this).toggleClass('opened')
				$('.menu-top').slideToggle(250);
			});

		},

		blockUI: function (block) {
			var el = $('body');
			
			var block = 'loading';
			if(block) {
            	var block = $('block');
        	}
			el.block({
            	message: 'm',
                css: { border: 'none', backgroundColor: 'none' },
                overlayCSS: { backgroundColor: '#584951', opacity: 0.85 }
            });
		},
		
       unblockUI: function (element) {
            var el = $('body');
			el.unblock();
        }

	}

}(), $(App.init);