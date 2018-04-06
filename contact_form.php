<?php
$toEmail = "lvelasco@sanus.pe";
$subject = "Mensaje de Vasectomía Perú;";
$mailHeaders = 'From: '.$_POST["email"]."\r\n".
'Reply-To: '.$_POST["email"]."\r\n" .
'X-Mailer: PHP/' . phpversion();

$mensaje = "Informacion del Contacto\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres		:".$_POST["nombres"]."\n";
$mensaje .= "Email			:".$_POST["email"]."\n";
$mensaje .= "Telefono		:".$_POST["telefono"]."\n";
$mensaje .= "Mensaje		:".$_POST["mensaje"]."\n";

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='card-panel light-green lighten-4'>Email Enviado Exitosamente.</div>";
} else {
	print "<div class='card-panel red lighten-1'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>