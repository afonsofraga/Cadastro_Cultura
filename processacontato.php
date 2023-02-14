<?php

include_once("concectabanco.php");
$nome = $_POST['nome_'];
$email = $_POST['email'];
$text = $_POST['texto'];

$sql = "insert into contatos (nome,email,texto) values ('$nome','$email','$texto')";
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