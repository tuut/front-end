<?php

$nome  = $_POST['nome'];
$email = $_POST['email'];
$emaildestinatario = 'webmalta@gmail.com';
	 
$mensagem = '<p><b>Nome:</b> '.$nome.'<p><b>Email:</b> '.$email.'</p><hr>';

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From:".$email."\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($emaildestinatario, $mensagem, $headers);
 
if($envio) {
echo false;
 } else {
echo 'Erro no envio';
 } //<script>location.href=sucesso.html</scriptPágina que será redirecionada