<?php 


$orden = $_POST['idOrden'];
date_default_timezone_set("America/Santiago");
$fecha = date("d-m-Y");
$hora = date(" G:i:s");

require_once "../../controllers/class.phpmailer.php";
require_once "../../controllers/class.smtp.php";

// Datos de la cuenta de correo utilizada para enviar via SMTP
$mail = new PHPMailer();
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";
$mail->FromName = ucfirst("SGTaller Duotek");
 // Email desde donde envio el correo.
 // Esta es la direccion a donde enviamos los datos del formulario
$mail->AddAddress('roberto@duotek.cl');
$mail->AddAddress('felipe@duotek.cl');
$mail->AddAddress('francisca@duotek.cl');

$mail->Subject = "Nueva Notificación Informe Técnico"; // Este es el titulo del email (Asunto).
$mail->Body = "	<div style='width: 80%; margin-left: 10px; '>
    				<br>
    				<div class='header' style='width: 60%;'>
						<img class='logo' src='http://sgtaller.duotek.cl/views/dist/img/login.png' alt='' width='150' height='30' style='margin-left: 20px; margin-top: 20px;'>    		
	    				<h3 class='titulo' style='text-align: center; color: #000;'>Notificación Informe Técnico Orden de trabajo Nº: ";$orden; 
                        echo " CompletadoX!</h3>
					</div>
					<div class='section' style='margin: 0;'>
    					<br>
    					<p style='color: black;'>Hoy ".date("d/m/Y G:i:s")." Se ha enviado notificación a las cuentas de administracion. </p>
				</div>"; // Texto del email en formato HTML

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$estadoEnvio = $mail->Send();
return
?>