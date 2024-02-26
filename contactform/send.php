<?php
error_reporting(0);
$nombre = $_POST['name'];
$correo_electronico= $_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

/* $mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "subject " . $_POST['subject'] . " \r\n";
$mensaje .= "message " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time()); */
$mensaje = "Este mensaje fue enviado por " ;


$para = "pablohpaul@hotmail.com";
$asunto = 'Consulta desde formulario web';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'mensaje enviado correctamente';

?>