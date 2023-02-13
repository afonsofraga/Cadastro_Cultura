<?php 

if (isset($_POST['email_usuario']) && !empty($_POST['email_usuario']))

$nome = addcslashes($_POST['nome_usuario']);
$email = addcslashes($_POST['email_usuario']);
$mensagem = addcslashes($_POST['texto_usuario']);

$to = 'afonsofraga.mg@gmail.com';
$subject = "formulario de contato do Site Cultura";

$body = "Nome: ". $nome "\n"
        "Email: ". $email "\n"
        "Mensagem: ". $mensagem;

$header = "From: "












?>

