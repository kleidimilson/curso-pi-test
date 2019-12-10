<?php
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
date_default_timezone_set( 'America/Sao_Paulo' );
require('PHPMailer/class.phpmailer.php');


// --------- Variáveis do Formulário ----- //
$email    = $_POST['email'];
$nome     = utf8_decode($_POST['nome']);
$assunto    = $_POST['assunto'];
$mensagem    = $_POST['mensagem'];

// --------- Variáveis que podem vir de um banco de dados por exemplo ----- //


// ******** Agora vai enviar o e-mail pro usuário contendo o anexo
// ******** e também mostrar na tela para caso o e-mail não chegar

$subject = $assunto;
$messageBody = $mensagem;

$meuemail = 'kleidimilson3@gmail.com';
$mail = new PHPMailer();
$mail->SetFrom($email, "Certificado");
$mail->Subject  = $subject;
$mail->MsgHTML(utf8_decode($messageBody));
$mail->AddAddress($meuemail); 

$mail->Send();

header('Location: contato.php');
?>
