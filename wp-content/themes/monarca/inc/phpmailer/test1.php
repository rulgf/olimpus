<?php
require 'class.phpmailer.php';
require 'PHPMailerAutoload.php';

$mail = new PHPMailer();


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dood.mailing@gmail.com';                 // SMTP username
$mail->Password = 'ThisisDOOD';                           // SMTP password
$mail->SMTPSecure = 'ssl';
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;
//$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'dood.mailing@gmail.com';
$mail->FromName = 'DOOD';

$mail->addAddress('lilly.0608@gmail.com');               // Name is optional



$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


?>