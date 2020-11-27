<?php
$for = "anne@neurona.link";
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = "<strong>Nome:  </strong>".$name;
$message .= "<br>  <strong>Mesangem: </strong>"
.$_POST['message'];

$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  anne.neurona.link\n";
$headers .= "X-Sender:  <contato@neurona.link>\n";
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <".$email.">\n";
$headers .= "Reply-To:".$email."\r\n";
$headers .= "MIME-Version: 1.0\n";

if (mail($for, $subject, $message, $headers)){
    echo "<script>window.location='../contact.html';alert('$name, sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>";
}
else{ 
    echo "<script>window.location='../contact.html';alert('$name, sua mensagem não foi enviada. Teste novamente.');</script>";; 
}
