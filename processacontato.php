<?php

require("conectabanco.php");
date_default_timezone_set('UTC');
//Variáveis
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST ['mensagem'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$sql = "insert into contatos (nome,email,mensagem,dataenvio,horaenvio) values (?,?,?,?,?)";
$salvar = $conexao->prepare($sql);
$salvar->execute([$nome,$email,$mensagem,$data_envio,$hora_envio]);

?>
