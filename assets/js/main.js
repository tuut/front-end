jQuery(document).ready(function($) {
	// fitVids.
	$( '.entry-content' ).fitVids();

	// Responsive wp_video_shortcode().
	$( '.wp-video-shortcode' ).parent( 'div' ).css( 'width', 'auto' );

	/**
	 * Odin Core shortcodes
	 */

	// Tabs.
	$( '.odin-tabs a' ).click(function(e) {
		e.preventDefault();
		$(this).tab( 'show' );
	});

	// Tooltip.
	$( '.odin-tooltip' ).tooltip();

    // MENU
    $('.hamburguer').click(function(){
    $(this).toggleClass('open');
    $('.dropdown-hamburguer').slideToggle();
    });

    $('.dropdown-menu').hover(function(){
    	$('.hero-bg').toggleClass('blur-bg');
    });    

});