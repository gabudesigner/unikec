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
  $us_da = $_POST['tipo'];
  $n_name = $_POST['nombre'];
  $email = $_POST['email'];  	$dat_mmail = $_POST['email'];
  $telefono = $_POST['telefono'];
  $n_ciudad = $_POST['city'];
  $negocio = $_POST['empresa'];
  $mensaje = $_POST['mensaje'];

// Guardamos consulta en BD Consulta_Invitados
include "conect.php"; // conectamos a Servidor BD

//insertamos código para pasar info con caracteres especiales UTF-8
	@mysql_query("SET NAMES 'utf8'"); 
	$query = "INSERT INTO reg_contact (date, user, nombre, correo, contacto, ciudad, negocio, mensaje) VALUES ('$n_date', '$us_da', '$n_name', '$email', '$telefono', '$n_ciudad', '$negocio', '$mensaje')";
		mysql_query($query) or die(mysql_error());
		mysql_close($iden);
?>

<?

require("class.phpmailer.php");
require("class.smtp.php");
	
		$emailnaAddr = "Información Unik.com.ec";
  $emailAddr = "info@unik.com.ec"; 
  //$headers = "FROM: $email\r\n" . "Reply-To: $email\r\n" . "MIME-Version: 1.0\n" . "Content-type: text/html; charset=utf-8";
  $subj = "Registro de datos como $us_da";
  $body = '  <html>
      <table width="100%" border="0" > <tr>  <td align="center" valign="top"><br>

      <table width="542" style=" border: 1px solid #333; font-family: Verdana, Geneva, sans-serif; font-size: 12px; color: #666; padding: 10px; ">
      <tr>  <td colspan="3" style="font-family:Verdana,Geneva,sans-serif;	font-size: 12px; font-weight: bold; color: #360; text-align: center; padding: 8px; border-bottom-width: 1.5px; border-bottom-style: solid; border-bottom-color: #333;">Registro de datos  - <span style="text-align:center; font-family: Verdana, Geneva, sans-serif; font-style:italic;font-size: 11px; color:#333; font-weight:lighter;">'.$us_da.'</span>

      </td></tr><tr><td>
      <center>
      
      <table width="541" border="1" align="center"> <tr>
      <td width="95" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #006;text-align:right; font-weight: bold;">Visitante:&nbsp;&nbsp;</td>
      <td width="430" style="font-family: Verdana, Geneva, sans-serif;font-size: 12px;color:#333;font-style: oblique;font-weight: lighter;">'.$n_name.'</td>
    
      </tr>  <tr>
      <td width="95" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #006;text-align:right; font-weight: bold;">Email:&nbsp;&nbsp;</td>
      <td width="430" style="font-family: Verdana, Geneva, sans-serif;font-size: 12px;color:#333;font-style: oblique;font-weight: lighter;">'.$email.'</span></td>

      </tr> <tr>
      <td width="95" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #006;text-align:right; font-weight: bold;">Contacto:&nbsp;&nbsp;</td>
      <td width="430" style="font-family: Verdana, Geneva, sans-serif;font-size: 12px;color:#333;font-style: oblique;font-weight: lighter;">'.$telefono.'</td>

      </tr>  <tr>
      <td width="95" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #006;text-align:right; font-weight: bold;">Ciudad</td>
      <td width="430" style="font-family: Verdana, Geneva, sans-serif;font-size: 12px;color:#333;font-style: oblique;font-weight: lighter;">'.$n_ciudad.'</td>

      </tr>  <tr>
      <td width="95" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #006;text-align:right; font-weight: bold;">Negocio</td>
      <td width="430" style="font-family: Verdana, Geneva, sans-serif;font-size: 12px;color:#333;font-style: oblique;font-weight: lighter;">'.$negocio.'</td>

      </tr>  <tr>
      <td width="95" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #006;text-align:right; font-weight: bold;">Mensaje:&nbsp;&nbsp;</td>
      <td width="430" height="100" valign="top" style="font-family: Verdana, Geneva, sans-serif;font-size: 12px;color:#333;font-style: oblique;font-weight: lighter;">'.$mensaje.'</td>

      </tr>  </table>  </center>
      </td>  </tr>  </table><br>
      </td>  </tr>  </table>  
      </html>';   
						//mail($destino,$asunto,$mensaje,$headers);  
						
						// Send mail
$mail = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP

// SMTP Configuration
$mail->SMTPAuth = true;                  // enable SMTP authentication
$mail->Host = "mail.unik.com.ec"; // SMTP server
$mail->Username = "info@unik.com.ec";
$mail->Password = "*2017unik";            
$mail->Port = 26; // optional if you don't want to use the default 

$mail->From = $dat_mmail;
$mail->FromName = $n_name;
$mail->Subject = $subj;
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->CharSet = 'UTF-8';
$mail->MsgHTML($body);

// Add as many as you want
$mail->AddAddress($emailAddr, $emailnaAddr);

// If you want to attach a file, relative path to it
//$mail->AddAttachment("images/phpmailer.gif");             // attachment

$response= NULL;
if(!$mail->Send()) {
    $response = "Mailer Error: " . $mail->ErrorInfo;
} else {
	    $response = "Message sent!";
}
?>