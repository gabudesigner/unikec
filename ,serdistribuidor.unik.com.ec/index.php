<?php  
if(empty($_GET['data'])){$nwmail=""; $us="";}else{ $nwmail=$_GET['data']; $us=$_GET['user']; }?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unik | Calidad a Tu Alcance</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="stylesheet" href="font.css" type="text/css" />
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script type="text/javascript" src="https://unik.com.ec/uk_dat/js/jquery-3.1.1.min.js"></script>

<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Arimo|Fjalla+One|Lobster|Roboto');
*, body, html{margin:0;padding:0;font-family: 'Roboto', sans-serif;}
body,html{width:100%; height:100%;background: #EFEFEF;}

/* CONTACT PAGE */
article{width:100%; max-width:1200px; margin:0 auto; padding:25px 0 30px 0;}
.mst-cntxt{width:85%; margin:0 auto; font-family: Arial, Helvetica, sans-serif; font-size:20px; color:#666; background:#FFFFFF; padding:20px; border:#DDD 1px solid;}
.mst-cntxt span{font-size:20px; color:#000000;}
.mst-cntxt p{padding-top:10px; font-size:14px; line-height:2em;}

form.contacto fieldset{border:none; width:100%; padding:25px 0; text-align:center;}
input[type="text"], select, input[type="tel"]{border:none; padding:15px 0; width:90%; margin:15px 0; color:#828282;	border-bottom:#CCC 1px dashed; *max-width:800px; font-size:14px;}
input[type="text"]:focus , select:focus, input[type="tel"]:focus{border-bottom:#828282 1px solid; color:#333; outline:none;}
input[type="text"]:hover, select:hover, input[type="tel"]:hover{border-bottom:#999 1px solid; color:#333; outline:none;}

form.contacto button {font-size:16px; background: #C00; border: 0 none; color: #FFFFFF;padding:12px; cursor:pointer; letter-spacing:0.08em;
	-webkit-transition: all 0.2s linear;
	-moz-transition: all 0.2s linear; float:left; margin-left:5%;
}

form.contacto button:hover{background: #6A6A6A;}

/** FRAGMENTO ERROR + LOADGID **/
span.error{font-size:11px; background:#630; color:#FFFFFF; padding:5px;	position:absolute; float:left;	margin-top:32px; margin-left:-60px;}
.hide{display: none;} .ajaxgif{right:150px;top:5px;}
.msg{color:white;font-weight:bold;height:32px;line-height:32px;padding:0 10px;text-transform:uppercase; margin-bottom:15px; width:180px; font-size:14px; letter-spacing:0.05em; text-align:center; margin-left:5%;}
.msg_ok{background:#CC3;}   .result{background: red;}   #sld_t{width:100%; text-align:center; }
.slider{width:100%;}  #lg{width:240px; height:auto; padding:20px 0;}

div.lautxt{width:100%; height:100%; background:rgba(0,0,0,0.8); position:fixed; z-index:100;}
div.lauinf{position:relative; width:80%; max-width:700px; padding:30px 35px; margin:0 auto; top:30%; background:#D39613; font-family: "Helvetica Neue", Helvetica, Arial, "sans-serif"; line-height: 1.5em;}
.lauinf h2{text-align:center; font-size:35px; font-weight: bold; line-height: 3em;}
.lauinf div.bye{background:#287596; width:80px; font-size:20px; font-weight: bold; margin:0 auto; text-align:center;padding:15px;color:aliceblue;cursor:pointer;box-shadow:black 0px 0px 8px 0px;}

footer{background:#B80113; padding:25px 0; width:100%; color:aliceblue;font-size:11px;margin-top:60px;}
footer div{width:90%; margin:0 auto;}
footer [class^="icon-"], [class*=" icon-"]{font-size:18px;color:aliceblue;padding:0 15px;float:right;}
footer div#hid{visibility:hidden;position:absolute;bottom:-100px;}
footer div a{text-decoration:none;cursor: pointer;}

@media screen and (max-width:550px){
	footer div{visibility:hidden;position:absolute;bottom:-100px;}
	footer div#hid{visibility:visible;position:relative; bottom:0;  text-align:center; line-height: 1.8em;}
	footer [class^="icon-"], [class*=" icon-"]{float:none; font-size:25px;}
}

/*ARTICLE MASTER*/
.master{width:100%; height:150px; background:url(https://unik.com.ec/uk_dat/img/back.jpg); background-size:cover; background-repeat:no-repeat; background-position: center center; margin-bottom:60px;}
.text{width: 100%; color:white;}
#lg{width:130px; height: auto;padding:25px 55px;}
.info{font-family: 'Fjalla One', sans-serif;top:58px;font-size:25px;position:absolute;right:55px;letter-spacing:.1em;text-align: center;line-height:0.9em;}
.info span{font-size:14px;letter-spacing: .05em;}
hr{margin-top:5px;}

</style>  </head>  <body>

<div class="lautxt">  <div class="lauinf">
<strong style="font-size:20px;">Antes de continuar recuerde. </strong>Este formulario es únicamente para clientes que adquieren para la venta suministros de oficina y escolares de la marca Unik&reg;. <strong >Nos reservamos el derecho de revisar y verificar la información ingresada acorde a lo solicitado e indicado.</strong>
<br><br>
<div class="bye">Aceptar</div> </div></div>


<div class="master">  <div class="text">
<a href="https://unik.com.ec"> <img src="https://unik.com.ec/uk_dat/img/logo2_wh.svg" id="lg" border="0" alt="logo"/></a>
<div class="info">SER DISTRIBUIDOR <hr>
<span>Regístrate gratis si vendes Unik</span>
</div></div> </div>

<!-- PRINCIPAL PAGE -->
<article> <section class="mst-cntact">
<div class="mst-cntxt">
<span><strong>Forma parte hoy mismo </strong>de nuestros distribuidores autorizados.</span>
<p>Ingresa los datos de tu negocio solicitados para formar parte de nuestro listado de distribuidores exclusivos de productos escolares y suministros de oficina.</p> 
<p style="font-size:14px;color:#900;font-style:italic;"> 
<strong>(*) Son campos obligatorios.</strong><br>
Aplican a registro solo clientes que vendan suministros de oficina y artículos escolares de la marca Unik®.<br>
Nos reservamos el derecho de revisar y publicar los registros si los datos no son los requeridos o no cumplen con las condiciones indicadas.
</p>

<form method="post" class="contacto" id="contacto" name="contacto">  <fieldset>

<div class="da">
	<input type="text" class="nombre" name="nombre" placeholder="* Distribuidor, Empresa o negocio" id="tx" autocomplete="off" value="<?php echo $us ?>"/>
	<input type="text" class="email" id="tx" name="email" placeholder="*  Correo electrónico" value="<?php echo $nwmail ?>" autocomplete="off" />
	<input type="text" class="otmail" id="tx" name="otmail" placeholder="  Correo electrónico adicional"  autocomplete="off" />

    <!-- Validación de números -->
    <script type="text/javascript">//validación de números en el cuadro de texto
		function validar(e) {
			tecla = (document.all) ? e.keyCode : e.which;
		    if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
		    // if (tecla==44) return true; //Coma ( En este caso para diferenciar los decimales - en casos de valores decimales )
			if (tecla==32) return true;//espacio
			if (tecla==40) return true;// tecla (
			if (tecla==41) return true;// tecla )
			if (tecla==45) return true;// tecla -
			if (tecla==48) return true;
		    if (tecla==49) return true;
		    if (tecla==50) return true;
		    if (tecla==51) return true;
		    if (tecla==52) return true;
		    if (tecla==53) return true;
		    if (tecla==54) return true;
		    if (tecla==55) return true;
		    if (tecla==56) return true;
			if (tecla==57) return true;
			if (tecla==13) return true; //tecla enter
		    patron = /1/; //ver nota
		    te = String.fromCharCode(tecla);
		    return patron.test(te); 
		 } 
</script>

	<input type="tel" onKeyPress="return validar(event)" class="telefono" id="tx" name="telefono" placeholder="* Número de Contacto" autocomplete="off" />
	<select id="province" name="province" class="province" onblur="return daterror(event)">
	  	<option value="" selected>
			* Selecciona la provincia donde resides</option>
			<option value="Azuay">Azuay</option>
			<option value="Bolívar">Bolivar</option>
			<option value="Cañar">Cañar</option>
			<option value="Carchi">Carchi</option>
			<option value="Chimborazo">Chimborazo</option>
			<option value="Cotopaxi">Cotopaxi</option>
			<option value="El Oro">El Oro</option>
			<option value="Esmeraldas">Esmeraldas</option>
			<option value="Galápagos">Galápagos</option>
			<option value="Guayas">Guayas</option>
			<option value="Imbabura">Imbabura</option>
			<option value="Loja">Loja</option>
			<option value="Los Ríos">Los Ríos</option>
			<option value="Manabí">Manabí</option>
			<option value="Morona Santiago">Morona Santiago</option>
			<option value="Napo">Napo</option>
			<option value="Orellana">Orellana</option>
			<option value="Pastaza">Pastaza</option>
			<option value="Pichincha">Pichincha</option>
			<option value="Santa Elena">Santa Elena</option>
			<option value="Santo Domingo Tsáchilas">Santo Domingo de los Tsáchilas</option>
			<option value="Sucumbios">Sucumbíos</option>
			<option value="Tungurahua">Tungurahua</option>
			<option value="Zamora Chinchipe">Zamora Chinchipe</option>
	    </select>

	<input type="text" class="ciudad" id="tx" name="ciudad" placeholder="* Ciudad y Dirección Domiciliaria" autocomplete="off" />
	<input type="text" class="negocio" id="tx" name="negocio" placeholder="* Nombre del emprendimiento o negocio" autocomplete="off" />
	<input type="text" class="actneg" id="tx" name="actneg" placeholder="* Ingresa la actividad de tu negocio" autocomplete="off" />
	<input type="text" class="website" id="tx" name="website" placeholder="Sitio web" autocomplete="off" />
<br>
	<label style="color:red; font-weight: 600;">¿Tu negocio está en las redes sociales? Ingresa el link para añadirlo.</label><br>
	<span style="font-size:11px;color:#5B5B5B;">
	<strong>(?)</strong> Ingresa a tu perfil de Facebook, Twitter o Instragram desde tu navegador preferido, copia el url de la barra de dirección de tu navegador y pegalo en el campo indicado.</span><br>

	<input type="text" class="face" id="tx" name="face" placeholder="Dirección URL del Facebook de tu negocio (?)" autocomplete="off" />
	<input type="text" class="insta" id="tx" name="insta" placeholder="Dirección URL del Instagram de tu negocio (?)" autocomplete="off" />
	<input type="text" class="twit" id="tx" name="twit" placeholder="Dirección URL del Twitter de tu negocio (?)" autocomplete="off" />
	<textarea rows="8" id="tx" class="mensaje" name="mensaje" placeholder="Información adicional (opcional)" autocomplete="off" style="border:none; width:90%;margin:15px 0; color:#828282;border-bottom:#CCC 1px dashed; font-size:14px;padding:15px;"></textarea>

</div>
<div class="ultimo"> <img src="ajax.gif" class="ajaxgif hide" alt=""/><div class="msg" id="mmg"></div>
<button class="boton_envio" name="submit" type="submit">Registrarme</button>
</div>

</fieldset>  </form>
</div> </section> </article>
<footer>

<div>
Unik&reg; Calidad a tu Alcance&nbsp;&nbsp; | &nbsp;&nbsp;2018 &copy; Todos los Derechos Reservados.&nbsp;&nbsp; | &nbsp;&nbsp;<a href="https://unik.com.ec/nuestras-politicas.html" title="Nuestras Políticas" style="color:white;text-decoration:none;" target="_blank">Política de Privacidad</a>
<a href="https://www.unik.com.ec/" target="_blank" title="Mundo Unik">
<span class="icon-earth"></span></a>
<a href="https://www.instagram.com/unik.oficina.ec/" target="_blank" title="Unik en Instagram"><span class="icon-instagram"></span></a>
<a href="https://www.facebook.com/unik.oficina.ec" target="_blank" title="Unik en Facebook">
<span class="icon-facebook"></span></a>
</div>

<div id="hid">
Unik&reg; Calidad a tu Alcance<br>
2018 &copy; Todos los Derechos Reservados.<br>
<a href="../nuestras-politicas.html" title="Nuestras Políticas" style="color:white;text-decoration:none;" target="_blank">Política de Privacidad</a>
<br><br>
<a href="https://www.facebook.com/unik.oficina.ec" target="_blank" title="Unik en Facebook">
<span class="icon-facebook"></span></a>
<a href="https://www.instagram.com/unik.oficina.ec/" target="_blank" title="Unik en Instagram"><span class="icon-instagram"></span></a>
<a href="https://www.unik.com.ec/" target="_blank" title="Mundo Unik">
<span class="icon-earth"></span></a>
</div>

</footer>

<script type="text/javascript">   /**** FUNCTION FORM CONTACT ****/
$(document).ready(function(){$(".bye").click(function(){$(".lautxt").remove();});

	$(".boton_envio").click(function() {
		$(".error").remove();
		var nombre = $(".nombre").val(),
			email = $(".email").val(),
			scmail = $(".otmail").val(),
			validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/,
			telefono = $(".telefono").val(),
			ciudad = $(".ciudad").val(),
			web = $(".website").val(),
			mensaje = $(".mensaje").val(),
			empresa = $(".negocio").val(),
			descrip = $(".actneg").val(),
			facebook = $(".face").val(),
			instagram = $(".insta").val(),
			twitter = $(".twit").val(),
			prov		= $('#province').val();  	

		if(nombre == "") {
		    $(".nombre").focus().after("<span class='error'>Requerido</span>");
		    return false;

		}else if(email == "" || !validacion_email.test(email)){
		    $(".email").focus().after("<span class='error'>No Valido</span>");	
		    return false;

		}else if(telefono == ""){
		    $(".telefono").focus().after("<span class='error'>Requerido</span>");
			return false;

		}else if(prov === ""){ 
			$("#province").focus().after("<span class='error'>Requerido</span>");
			return false;

		}else if(ciudad == ""){
		    $(".ciudad").focus().after("<span class='error'>Requerido</span>");
			return false;

		}else if(empresa == ""){
			$(".negocio").focus().after("<span class='error'>Requerido</span>");
			return false;	

		}else if(descrip == ""){
			$(".actneg").focus().after("<span class='error'>Requerido</span>");
			return false;	

		}else{
			$('.ajaxgif').removeClass('hide');
			var datos = 'nombre=' + nombre + '&email=' + email + '&adicional=' + scmail +  '&telefono=' + telefono + '&provic=' + prov + '&city=' + ciudad +  '&negocio=' + empresa + '&actn=' + descrip + '&fb=' + facebook + '&ins=' + instagram + '&twt=' + twitter + '&website=' + web + '&text=' + mensaje;
			$.ajax({
	    		type: "POST",  url: "maildist.php",  data: datos,
	    		success: function() {
					$('.ajaxgif').hide();
					$('.msg').text('Registro exitoso!').addClass('msg_ok').animate({ 'right' : '110px' }, 300);	
	    		},
				error: function() {
					$('.ajaxgif').hide();
					$('.msg').text('Hubo un error!').addClass('result').animate({ 'right' : '110px' }, 300);					
				}
	   		});

setTimeout(function(){document.getElementById('contacto').reset(); $('.msg').removeClass('result msg_ok');},2500);
return false;
		}
	});
});
</script>

</body> </html>