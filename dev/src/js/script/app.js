window.jQuery = window.$ = jQuery;

"use strict";

var App;

App = function () {

	/* animações da home */
	var handleScrollReveal = function() {
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
	
	/* abrir modal automaticamente */
	var handleOpenModal = function() {
		$('#modal-news').modal({
		    fadeDuration: 250,
		    escapeClose: false,
		    clickClose: false
		  });
	}

	/* validar dados postados */
	var handleValidationForm = function() {
		
		if(!jQuery.validator)
			return;
		
		var error 		= $('.alert-error');
		var success 	= $('.alert-success');
		var form 		= $('form#modal-form');
		
		form.validate({
			
			errorElement	: 'div',
			errorClass		: 'help-inline',
			ignore			: '.ignore',
			
			focusInvalid	: false,
			onkeyup			: false,
			
			rules: {
				nome: {required: true},
				email: {required: true, email: true }
			},
			
			messages: {
				nome: "(campo obrigatório)",
				email: {
					required: "(campo obrigatório)",
					email: "(e-mail inválido)"
				}
			},
			
			unhighlight: function (element) {
				$(element).closest('.form-group').find('div.help-inline').fadeOut();
			},

			submitHandler: function (form) {
				error.fadeOut();
				handleSubmitForm(form);
				return true;
			}
		
		});
		
	}

	/* enviar os dados */
	var handleSubmitForm = function(form) {
		
		var success 	= $('.alert-success');
		var error 		= $('.alert-error');
		var postData 	= { 'action': 'lead_save' };

		$.ajax({

			url: 		global_vars.ajax_url,
			method: 	'POST',
			data: 		postData,
			dataType: 	'json',
			jsonp: 		'$callback',
			cache: 		false,
		
			beforeSend: function() { 
			
				App.blockUI(false, $('#modal-news'));
			
			},

			success: function(data) {
				
				if(data.code == 100) {
					
					$('#modal-news .modal-body').fadeOut(250, function() {
						$(this).html('<h1 style="padding: 40px 0;"><center>Obrigado!<br /><span class="smile" data-eye=";">;)</span></center></h1>')
						.fadeIn(250, function() {
							
							setInterval(function() {
								face = $('.smile');
								eye = $(face).attr('data-eye');
								if(eye == ';') face.attr('data-eye', ':').text(':)');
								else face.attr('data-eye', ';').text(';)');
							}, 1000);
						})
					});

				}
				
			},

			complete: function () {
			
				App.unblockUI($('#modal-news')); 
			
			}
		});
		
		return false;
			
	}

	var handleMenu = function () {

		$('.sub-menu').on('mouseenter', function() {
			$('#background-layer').addClass('background-effect');
		}).on('mouseleave', function() {
			$('#background-layer').removeClass('background-effect');
		});

		$('.menu-toggle').on('click', function(e) {
			$(this).toggleClass('opened')
			$('.menu-top').slideToggle(250);
		});
	}

	return {

		init: function () {

			handleScrollReveal();
			handleMenu();
			handleValidationForm();

			setTimeout(handleOpenModal, 6500);

		},

		blockUI: function (unblock, element) {
			if(!element) var element = $('body');
            if(!message) var message = '<div class="blockLoader"><i class="spinner"><i></div>';
			
			element.block({
            	message: message,
                css: { width: 'auto', border: 'none', backgroundColor: 'none' },
                overlayCSS: { backgroundColor: '#FFF', opacity: 0.85, cursor: 'wait' }
            });
			
			if(unblock) {
				$(document).on('click', '.blockOverlay', function(e) {
					console.log('click');
					e.preventDefault();
					App.unblockUI();
				});
			}
		},
		
       unblockUI: function (element) {
			if(!element) var element = $('body');
			 element.unblock();
		},

	}

}(), $(App.init);