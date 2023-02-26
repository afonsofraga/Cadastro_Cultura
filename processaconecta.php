<?php 

include_once("conectabanco.php");
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cadastro = date('Y-m-d H:i:s');

$sql = "insert into usuarios (nome,cpf,email,senha,cadastro) values ('$nome','$cpf','$email','$senha','$cadastro')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>