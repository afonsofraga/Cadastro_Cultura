<?php 

include_once("conectabanco.php");
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cadastro = date('Y-m-d H:i:s');

$sql = $conexao->prepare("insert into usuarios (nome,cpf,senha,email,cadastro) values (?, ?, ?, ?, ?)");
$sql->bindParam(1,'$nome');
$sql->bindParam(1,'$cpf');
$sql->bindParam(1,'$senha');
$sql->bindParam(1,'$email');
$sql->bindParam(1,'$cadastro');
$sql->execute();

?>