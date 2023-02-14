<?php 

include_once("concectabanco.php");
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$senha = $_POST['senha'];

$sql = "insert into usuarios (nome,cpf,email,data_nascimento,senha) values ('$nome','$cpf','$email','$data_nascimento','$senha')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

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