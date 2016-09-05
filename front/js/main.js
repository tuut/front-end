
$(document).ready(function(){

	//load modal-newslleter
	//$('#news').modal('show');

	$('#news').modal({
         backdrop: 'static',
         keyboard: true, 
         show: true
    }); 
	
	//menu li
	$('nav ul.nav > li').find('ul')
	  .mouseover(function() {
	    $('#topo').find('.imgbg').addClass('imgblur');
	  })
	  .mouseout(function() {
	    $('#topo').find('.imgbg').removeClass('imgblur');
	  });

});