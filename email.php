<?php 

if (isset($_POST['email_usuario']) && !empty($_POST['email_usuario']))

$nome = addcslashes($_POST['nome_usuario']);
$email = addcslashes($_POST['email_usuario']);
$mensagem = addcslashes($_POST['texto_usuario']);

$to = 'afonsofraga.mg@gmail.com';
$subject = "formulario de contato do Site Cultura";

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("index.htm");
?>











?>

