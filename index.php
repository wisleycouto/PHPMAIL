<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
$mail = new PHPMailer(true);
 
try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'wisley.alves@gmail.com';
	$mail->Password = 'xxxx';
	$mail->Port = 587;
 
	$mail->setFrom('wisley.alves@gmail.com');
	$mail->addAddress('wisley.alves@gmail.com');
	
 
	$mail->isHTML(true);
	$mail->Subject = 'Teste de email via gmail Preza Lab Wisley Couto';
	$mail->Body = 'Chegou o email teste do <strong>Preza Lab Wisley Couto</strong>';
	$mail->AltBody = 'Chegou o email teste do Preza Lab Wisley Couto';
 
	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}
