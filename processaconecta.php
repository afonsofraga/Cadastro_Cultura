<?php 

require("conectabanco.php");
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cadastro = date('Y-m-d H:i:s');

$sql = "insert into usuarios (nome,cpf,senha,email,cadastro) values (?,?,?,?,?)";
$stmt = $conexao->prepare($sql);
$stmt->execute([$nome,$cpf,$senha,$email,$cadastro]);

?>