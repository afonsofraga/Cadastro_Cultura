<?php

require("conectabanco.php");
date_default_timezone_set('UTC');
//Variáveis
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST ['mensagem'];
$data_envio = date('d/m/Y');
//erro na hora arrumar
$hora_envio = date('H:i:s');

$sql = "insert into contatos (nome,email,mensagem,dataenvio,horaenvio) values ('$nome','$email','$mensagem','$data_envio','$hora_envio')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

// enviar email 

  // emails para quem será enviado o formulário
  $emailenviar = "afonsofraga.mg@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";

  // Compo E-mail
  $arquivo = "adfonso henrique fraga de souza ";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';

  //$headers .= "Bcc: $EmailPadrao\r\n"

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }




mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>