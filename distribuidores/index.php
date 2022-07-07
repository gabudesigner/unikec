<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unik® | Distribuidores</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="robots" content="noindex,nofollow,noarchive" />
<link rel="stylesheet" href="font.css" type="text/css" />

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '205998589988821');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=205998589988821&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->

<style>
@import url('https://fonts.googleapis.com/css?family=Arimo:400,700|Fjalla+One|Lobster|Roboto:300,400,500,500i,700,700i');

/*
font-family: 'Roboto', sans-serif;
font-family: 'Arimo', sans-serif;
font-family: 'Fjalla One', sans-serif;
font-family: 'Lobster', cursive;
*/

*, body, html{margin:0;padding:0;font-family: 'Roboto', sans-serif;}
body,html{width:100%; height:100%;background:#F4F4F4;}
.master{width:100%; height:150px; background:url(Back20.jpg); background-size:cover; background-repeat:no-repeat; background-position: center center;}
.text{width: 100%; color:white;}
#lg{width:130px; height: auto;padding:25px 55px;}
.info{font-family: 'Fjalla One', sans-serif;top:58px;font-size:25px;position:absolute;right:55px;letter-spacing:.1em;text-align: center;line-height:0.9em;}
.info span{font-size:18px;letter-spacing: .05em;}
hr{margin-top:5px;}
.data_dst{width:85%; margin:0 auto; padding:30px 0;font-family: 'Arimo', sans-serif;}
.data_dst h1{font-weight:400;color:#4E4D4D;font-size:40px;text-align:center;padding:50px 0;}
.data_dst h2{color:#C78F02;text-align: right;}
.sector, .sector a{font-size:14px;}
.sector [class^="icon-"], [class*=" icon-"]{font-size:15px;line-height:1.9em;margin-left:20px;padding-right:10px;}
.sector{color:#0E6F87;padding:30px 0; margin-left:15px;}
.sector a, .sector a:hover, .sector a:active{color:#0E6F87; text-decoration: none;cursor:pointer;font-weight:500;}

footer{background:#B80113; padding:25px 0; width:100%; color:aliceblue;font-size:11px;margin-top:60px;}
footer div{width:90%; margin:0 auto;}
footer [class^="icon-"], [class*=" icon-"]{font-size:18px;color:aliceblue;padding:0 15px;float:right;}
footer div#hid{visibility:hidden;position:absolute;bottom:-100px;}
footer div a{text-decoration:none;cursor: pointer;}

@media screen and (max-width:550px){  #lg{padding:25px 15px;} .info{right:15px;letter-spacing: .08em;}
		footer div{visibility:hidden;position:absolute;bottom:-100px;}
		footer div#hid{visibility:visible;position:relative; bottom:0;  text-align:center; line-height: 1.8em;}
		footer [class^="icon-"], [class*=" icon-"]{float:none; font-size:25px;}
}

table.sector{padding:0;margin:0 auto;width:90%;max-width:950px;overflow:hidden;}
table.sector td{display:inline-block;padding-top:55px;padding-bottom:0; padding-left:25px; padding-right:25px; width:380px;}

@media screen and (max-width:780px){  table.sector{width:90%;} table.sector td{display: block; padding:45px 0; border-bottom:gray 1px dashed; width:350px;} }

</style>  </head>  <body>

<script> /*seguimiento fb: cliente potencial*/ fbq('track', 'Lead'); </script>

<article class="master">
<div class="text"> <a href="https://unik.com.ec"> <img src="https://unik.com.ec/uk_dat/img/logo2_wh.svg" id="lg" border="0" alt="logo"/></a>
<div class="info">DISTRIBUIDORES<hr> <span>¿Dónde Comprar?</span>
</div></div>
</article>

<article class="data_dst">

<h1>DISTRIBUIDORES AUTORIZADOS</h1>  <h2>SECTOR COSTA</h2>

<?php
$link = mysqli_connect("localhost","olmedoal_userbd","olmedo2012bd");
if (!$link) { die('Could not connect: ' . mysqli_connect_error()); }

mysqli_select_db($link, "olmedoal_unik");
mysqli_set_charset($link, 'utf8');

	$result = mysqli_query($link, "SELECT * FROM UnikDist where sector= 'costa'  ORDER BY id");
	while($row = mysqli_fetch_array($result)){
		 	$name[] = $row['nombre'];
			$mail[] = $row['correo'];
			$adicional[] = $row['mailadicional']; 
			$movil[] = $row['contacto'];
		  	$sector[] = $row['provincia']; 
			$lugar[] = $row['ciudad'];
		  	$website[] = $row['web'];
			$scl_fb[] = $row['facebook'];
			$scl_ins[] = $row['instagram'];
			$scl_twt[] = $row['twitter'];
			$arregloId[] = $row['id'];}
?>
<hr>  <table class="sector" cellpadding="0" cellspacing="0" border="0">  <tr>

<?php
if(count($arregloId) === 0){  echo "<tr><td align='center'><br /><br />";
	echo "No hay datos para mostrar! Estamos actualizando los registros. Favor intentar más tarde."; 	echo "</td>";  echo "</tr>";

}else{  for($x=0; $x<count($arregloId); $x++){

echo '
	<td valign="top">
	<strong style="font-size:25px;">'.$name[$x].'</strong><br>
	<span class="icon-location"></span>
	<strong>'.$sector[$x].'</strong><br>';

if($lugar[$x] !== NULL){echo '<span class="icon-pushpin"></span>'.$lugar[$x].'<br>';}

echo '
	<span class="icon-email"></span>
	<a href="mailto:'.$mail[$x].'">'.$mail[$x].'</a><br>';

if($adicional[$x] !== NULL){
	echo '<span class="icon-email"></span>
	<a href="mailto:'.$adicional[$x].'">'.$adicional[$x].'</a><br>';}

echo '<span class="icon-phone"></span>'.$movil[$x].'<br>';

if($website[$x] !== NULL){	
	echo '<span class="icon-link"></span>
	<a href="http://'.$website[$x].'" target="_blank">'.$website[$x].'</a><br>';}

if($scl_fb[$x] !== NULL){echo '<a href="http://'.$scl_fb[$x].'" target="_blank"><span class="icon-facebook"></span></a>';}
if($scl_ins[$x] !== NULL){echo '<a href="http://'.$scl_ins[$x].'" target="_blank"><span class="icon-instagram"></span></a>';}
if($scl_twt[$x] !== NULL){echo '<a href="http://'.$scl_twt[$x].'" target="_blank"><span class="icon-twitter"></span></a>';}

echo '</td>'; } }
?>

</tr></table>  <div style="height:60px;"></div>

<!-- SECTOR SIERRA DEL PAÍS --->
<h2>SECTOR SIERRA</h2>

<?php
	$result = mysqli_query($link, "SELECT * FROM UnikDist where sector= 'sierra'  ORDER BY id");
	while($row = mysqli_fetch_array($result)){
			$name_s[] = $row['nombre'];
			$mail_s[] = $row['correo'];
			$adicional_s[] = $row['mailadicional']; 
			$movil_s[] = $row['contacto'];
			$sector_s[] = $row['provincia']; 
			$lugar_s[] = $row['ciudad'];
			$website_s[] = $row['web'];
			$scl_fb_s[] = $row['facebook'];
			$scl_ins_s[] = $row['instagram'];
			$scl_twt_s[] = $row['twitter'];
			$arregloId_s[] = $row['id'];}
	mysqli_close($link); 
?>

<hr>  <table class="sector" cellpadding="0" cellspacing="0" border="0">  <tr>

<?php
if(count($arregloId_s) === 0){  echo "<tr><td align='center'><br /><br />";
	echo "No hay datos para mostrar! Estamos actualizando los registros. Favor intentar más tarde."; 	echo "</td>";  echo "</tr>";

}else{
	for($x=0; $x<count($arregloId_s); $x++){
	echo '
		<td valign="top">
		<strong style="font-size:25px;">'.$name_s[$x].
		'</strong><br>
		<span class="icon-location"></span>
		<strong>'.$sector_s[$x].'</strong><br>';

if($lugar_s[$x] !== NULL){echo '<span class="icon-pushpin"></span>'.$lugar_s[$x].'<br>';}

echo '<span class="icon-email"></span> <a href="mailto:'.$mail_s[$x].'">'.$mail_s[$x].'</a><br>';

if($adicional_s[$x] !== NULL){
	echo '<span class="icon-email"></span>
	<a href="mailto:'.$adicional_s[$x].'">'.$adicional_s[$x].'</a><br>';}

echo '<span class="icon-phone"></span>'.$movil_s[$x].'<br>';

if($website_s[$x] !== NULL){
	echo '<span class="icon-link"></span>
	<a href="http://'.$website_s[$x].'" target="_blank">'.$website_s[$x].'</a><br>';}

if($scl_fb_s[$x] !== NULL){ echo '<a href="http://'.$scl_fb_s[$x].'" target="_blank"><span class="icon-facebook"></span></a>';}
if($scl_ins_s[$x] !== NULL){echo '<a href="http://'.$scl_ins_s[$x].'" target="_blank"><span class="icon-instagram"></span></a>';}
if($scl_twt_s[$x] !== NULL){echo '<a href="http://'.$scl_twt_s[$x].'" target="_blank"><span class="icon-twitter"></span></a>';}

echo '</td>'; } }
?>

</tr></table> </article>

<footer>
	<div>Unik&reg; Calidad a tu Alcance&nbsp;&nbsp; | &nbsp;&nbsp;2018 &copy; Todos los Derechos Reservados.
	<a href="https://www.unik.com.ec/" target="_blank" title="Mundo Unik">
	<span class="icon-earth"></span></a>
	<a href="https://www.instagram.com/unik.oficina.ec/" target="_blank" title="Unik en Instagram"><span class="icon-instagram"></span></a>
	<a href="https://www.facebook.com/unik.oficina.ec" target="_blank" title="Unik en Facebook">
	<span class="icon-facebook"></span></a>
	</div>

	<div id="hid">Unik&reg; Calidad a tu Alcance<br>2018 &copy; Todos los Derechos Reservados.
	<br><br>
	<a href="https://www.facebook.com/unik.oficina.ec" target="_blank" title="Unik en Facebook">
	<span class="icon-facebook"></span></a>
	<a href="https://www.instagram.com/unik.oficina.ec/" target="_blank" title="Unik en Instagram"><span class="icon-instagram"></span></a>
	<a href="https://www.unik.com.ec/" target="_blank" title="Mundo Unik">
	<span class="icon-earth"></span></a>
	</div>
</footer>

</body> </html>