<?php
	/*---- Array PHP de la fecha para colocar fecha en español ----*/

// Obtenemos y traducimos el nombre del día
$dia=date("l");
	if ($dia=="Monday") $dia="Lunes";
	if ($dia=="Tuesday") $dia="Martes";
	if ($dia=="Wednesday") $dia="Miércoles";
	if ($dia=="Thursday") $dia="Jueves";
	if ($dia=="Friday") $dia="Viernes";
	if ($dia=="Saturday") $dia="Sábado";
	if ($dia=="Sunday") $dia="Domingo";

// Obtenemos el número del día
$dia2=date("d");

// Obtenemos y traducimos el nombre del mes
$mes=date("F");
	if ($mes=="January") $mes="Enero";
	if ($mes=="February") $mes="Febrero";
	if ($mes=="March") $mes="Marzo";
	if ($mes=="April") $mes="Abril";
	if ($mes=="May") $mes="Mayo";
	if ($mes=="June") $mes="Junio";
	if ($mes=="July") $mes="Julio";
	if ($mes=="August") $mes="Agosto";
	if ($mes=="September") $mes="Septiembre";
	if ($mes=="October") $mes="Octubre";
	if ($mes=="November") $mes="Noviembre";
	if ($mes=="December") $mes="Diciembre";

$year = date("Y");

//Guardamos fecha en una variable
$dayform = "$dia, $dia2 de $mes de $year"; $n_date = date("d.m.Y");	

/* ---- envio mail al administrador ---- */
// Guardar los datos recibidos en variables:
	$n_name = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$n_ciudad = $_POST['city'];
	$web = $_POST['website'];
	$coment = $_POST['text'];
	$scdmail = $_POST['adicional'];
	$province = $_POST['provic'];
	$empresa = $_POST['negocio'];
	$descript = $_POST['actn'];
	$face = $_POST['fb'];
	$insta = $_POST['ins'];
	$twit = $_POST['twt'];

// Guardamos consulta en BD Consulta_Invitados
include "conect.php"; // conectamos a Servidor BD

//insertamos código para pasar info con caracteres especiales UTF-8
	@mysql_query("SET NAMES 'utf8'"); 
	$query = "INSERT INTO soyunik (date, nombre, correo, mailadicional, contacto, provincia, ciudad, negocio, actividad, sitio, facebook, instagram, twitter, comentario) VALUES ('$n_date', '$n_name', '$email', '$scdmail', '$telefono', '$province', '$n_ciudad', '$empresa', '$descript', '$web', '$face', '$insta', '$twit', '$coment')";
		mysql_query($query) or die(mysql_error());
		mysql_close($iden);
?>