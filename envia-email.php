<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$nome = utf8_encode($_POST['nome']);
$email = utf8_encode($_POST['email']);
$celular =  utf8_encode($_POST['celular']);
$segurovida =utf8_encode($_POST['segurovida']);

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail ->isSMTP();

// Configuração do Servidor de Email

$mail ->Host = "smtp.gmail.com";
$mail ->Port = "587";
$mail ->SMTPSecure = "tls";
$mail ->SMTPAuth = "true";
$mail ->Username = "isabeelabg@gmail.com";
$mail ->Password = "sorvete30";

// Configuração de Mensagem

$mail ->setFrom($mail->Usarname, "Simulação Seguro de Vida");
$mail ->addAddress('isabeelabg@gmail.com');
$mail ->Subject = "Simulação Seguro de Vida";

$conteudo_email = "Você recebeu uma mensagem de $nome ($email) ($celular) ($segurovida)";

$mail->IsHTML(true);
$mail->Body = $conteudo_email;

if( $mail->send()) {
    echo "Enviado com sucesso"
} else {
    echo "Falha ao enviar" $mail->ErrosInfo;
}


?>
