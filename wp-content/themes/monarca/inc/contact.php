<?php

$NOMBRE = $_POST['name'];
$EMAIL = $_POST['email'];
$TELEFONO = $_POST['phone'];
$MENSAJE = $_POST['message'];

if(!isset($NOMBRE) || trim($NOMBRE) == '' || !isset($EMAIL) || trim($EMAIL) == '' || !isset($TELEFONO) || trim($TELEFONO) == '' || !isset($MENSAJE) || trim($MENSAJE) == '' )
{
	http_response_code(400);

   echo 'Olvidaste llenar algunos campos.';
}

else {
	require 'phpmailer/class.phpmailer.php';
	require 'phpmailer/PHPMailerAutoload.php';

	$mail = new PHPMailer();
	$mail->isSMTP();    
	$mail->CharSet = 'UTF-8';                                  // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'dood.mailing@gmail.com';                 // SMTP username
	$mail->Password = 'ThisisDOOD';                           // SMTP password
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;
	$mail->From = $EMAIL;
	$mail->FromName = $NOMBRE;
	$mail->SetFrom( $EMAIL , $NOMBRE);
	$mail->AddReplyTo( $EMAIL , $NOMBRE);

	$mail->addAddress('ventas@aluminiomonarca.mx');               // Name is optional 
	//$mail->addAddress('amandujano@dood.mx');               // Name is optional 

	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'MONARCA: Solicitud de contacto';
	$mail->Body    = 'Contacto a través de sitio web <b>Monarca</b> <br><br> Nombre: ' . $NOMBRE . '<br> Teléfono: ' . $TELEFONO . '<br> Email: ' . $EMAIL . '<br> Mensaje: ' . $MENSAJE;
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo '¡Gracias! hemos recibido tu mensaje.';
	}
}


?>