<?php
//1 – Definimos Para quem vai ser enviado o email
$for = "anne@neurona.link";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$name = $_POST['name'];
// 3 - resgatar o assunto digitado no formulário e  grava na variavel
//$assunto
$subject = $_POST['subject'];
 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$message = "<strong>Nome:  </strong>".$name;
$message .= "<br>  <strong>Mesangem: </strong>"
.$_POST['message'];

//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  anne.neurona.link<contato@neurona.link>\n";
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  <contato@neurona.link>\n";
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <anne@neurona.link>\n";
//caso a msg //seja respondida vai para este email.
$headers .= "MIME-Version: 1.0\n";

mail($for, $subject, $message, $headers);  //função que faz o envio do email.
