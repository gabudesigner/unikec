// JavaScript Document

$(function(){ /*** Función para scroll automático. ***/   
	$('.lkbt a').on('click',function(e){ //prevenir en comportamiento predeterminado del enlace
		e.preventDefault(); //obtenemos el id del elemento en el que debemos posicionarnos
		var strAncla=$(this).attr('href'); //utilizamos body y html, ya que dependiendo del navegador uno u otro no funciona
		$('body,html').stop(true,true).animate({ //realizamos la animacion hacia el ancla
			scrollTop: $(strAncla).offset().top},1000);	});
});

/*** STYLE TO SCROLL ANIMATION ***/	
$(window).scroll(function(){ if ($(this).scrollTop() < 400) { $('.navimen').css({top:-100});} else {$('.navimen').css({top:0});}  });
		
		
/**** FUNCTION FORM CONTACT ****/
$(document).ready(function(){

	$(".da input").prop( "disabled", true ).css({'background':'#CCC'}); //desactiva inputs de form - activar true for false
	$("textarea").prop( "disabled", true ).css({'background':'#CCC'});
	
	$('.info').click(function(){
		$(".da input").prop( "disabled", false ).css({'background':'#F3F3F3'});
		$( "textarea").prop( "disabled", false ).css({'background':'#F3F3F3'}); });
	
	$(".boton_envio").click(function() {
		$(".error").remove();
		var nombre = $(".nombre").val();
			email = $(".email").val();
			validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
			telefono = $(".telefono").val();
			mensaje = $(".mensaje").val();
			negocio = $(".empresa").val();
			ciudad = $(".ciudad").val();
			checkedValue = $('.info:checked').val();
		
if (!document.getElementById('dist').checked&& !document.getElementById('cons').checked){
			alert('Selecciona una opción para activar el formulario');
			return false;
		}else if(nombre == "") {
		    $(".nombre").focus().after("<span class='error'>Requerido</span>");
		    return false;
		}else if(email == "" || !validacion_email.test(email)){
		    $(".email").focus().after("<span class='error'>No Valido</span>");	
		    return false;
		}else if(telefono == ""){
		    $(".telefono").focus().after("<span class='error'>Requerido</span>");
			return false;
		}else if(ciudad == ""){
		    $(".ciudad").focus().after("<span class='error'>Requerido</span>");
			return false;
		}else if(negocio == ""){
		    $(".empresa").focus().after("<span class='error'>Requerido</span>");
		    return false;
		}else{
			$('.ajaxgif').removeClass('hide');
			var datos = 'tipo=' + checkedValue + '&nombre='+ nombre + '&email=' + email + '&telefono=' + telefono +
						'&city=' + ciudad + '&empresa=' + negocio + '&mensaje=' + mensaje;
			$.ajax({
	    		type: "POST",
	    		url: "mailer.php",
	    		data: datos,
	    		success: function() {
					$('.ajaxgif').hide();
$('.msg').text('Mensaje enviado!').addClass('result').animate({ 'right' : '110px' }, 300);	
//alert("Mensaje Enviado Correctamente..!!!");
	    		},
				error: function() {
					$('.ajaxgif').hide();
//alert("Se ha presentado un error, favor reintentar..!!!");
$('.msg').text('Hubo un error!').addClass('result').animate({ 'right' : '110px' }, 300);					
				}
	   		});

setTimeout("document.getElementById('contacto').reset()",2500);

/*			
setTimeout("document.getElementById('contacto').reset()",8000); //borra campos 15sg
setTimeout("document.getElementById('mmg').addClass('msg').animate({'right':'-155px'},300)",150);
	/*setTimeout("self.close();",4000) //cierra la ventana*/
		return false;
		}
		
	});
	
});