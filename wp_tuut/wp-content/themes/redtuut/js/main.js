$(document).ready(function(){
    
        window.onload = menuPrincipal();
        
	//load modal-newslleter---------------------//
        $('#news').modal({
         backdrop: 'static',
         keyboard: true, 
         show: true
        }); 
	//load modal-newslleter---------------------//
        
	//blur-banner------//
	$('nav ul.nav > li').find('ul')
	  .mouseover(function() {
	    $('#topo').find('.imgbg').addClass('imgblur');
	})
	  .mouseout(function() {
	    $('#topo').find('.imgbg').removeClass('imgblur');
	});
        //blur-banner------//
        
        //formulario NEWS > enviando ---------------------------------//
        $("#news").find("form").submit(function() {
   
            var nome = $(".nome").val();
            var email = $(".email").val();
            
            //mensagem de carregamento
            $(".status").html("Enviando...");
            
            $.post('envia.php', {nome: nome, email: email}, function(resposta) {
            		
                        $(".status").slideDown();
                        
			if (resposta !== false) {
				//erro
				$(".status").html(resposta);
			} 
                        
			else {
				//sucesso
				$(".status").html("Mensagem enviada com sucesso!");
				$(".nome").val("");
				$(".email").val("");
			}
                });
            });
            //formulario NEWS > enviando ---------------------------------//
});

function menuPrincipal() {
	var largura = $(window).width();
	
	if (largura > 768) {
            $('#navbar ul.nav > li').each(function(){
                    $(this).hover(
                    function(){
                        $(this).addClass('hover');
                    },
                    function(){
                            $(this).removeClass('hover');
                    });
            });
	
	} else {
            
            $('#navbar ul.nav > li').each(function(){

                    $(this).click(function(){

                            if(!$(this).hasClass('hover')) {
                                    $(this).addClass('hover');		
                            } else {
                                    $(this).removeClass('hover');
                            }
                    });		

            });
	}
}