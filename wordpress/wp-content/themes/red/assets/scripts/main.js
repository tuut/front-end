'use strict';

(function($) 
{
	var w = window
	, d = document
	, PAGE_PARAMS
	, Events
	, Util;

	Events = 
	{
		'common': 
		{
			init: function()
			{
				var _mouseEntered = false;

				var newsModal = $('[data-remodal-id="newsletter-modal"]').remodal({});

				var $heroImage = $('.hero__image');
				var $headerMenu = $('.header__menu');
				
				//var $headerLinks = $headerMenu.find('li a');
				var $headerLinks = $headerMenu.find('li.menu-item-has-children a');

				$headerLinks
				.on('mouseenter', function()
				{
					$heroImage.addClass('hero__image--blurred');
					_mouseEntered = true;
				})
				.on('mouseout', function()
				{
					_mouseEntered = false;
					setTimeout(function timer()
					{
						if(!_mouseEntered)
							$heroImage.removeClass('hero__image--blurred');
						else
							setTimeout(timer, 500);
					}, 500);
				});

				// Opens the newsletter modal
				newsModal.open();
			},
			end: function(){}
		}
	};

	Util = 
	{
		fire: function(func, funcname, args) 
		{
			var fire, namespace = Events;
			funcname = funcname || 'init';
			fire = (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function');

			if (fire)
				namespace[func][funcname](args);
		},
		loadEvents: function() 
		{
			Util.fire('common');
			PAGE_PARAMS = d.body.className.replace(/-/g, '_').split(/\s+/);
			for(var i = 0; i < PAGE_PARAMS.length; i++)
			{
				Util.fire(PAGE_PARAMS[i]);
				Util.fire(PAGE_PARAMS[i], 'end');
			}
			Util.fire('common', 'end');
		}
	};
	
	if(d.readyState === "interactive" || d.readyState === "compvare")
		Util.loadEvents();
	else
		d.addEventListener( "DOMContentLoaded", function loadListener()
		{
			d.removeEventListener( "DOMContentLoaded", loadListener, false );
			Util.loadEvents();
		}, false );

})(window.jQuery || window.Zepto || window.Cash || undefined);
