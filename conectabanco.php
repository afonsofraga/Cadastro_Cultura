<?php 

$hostname = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "sitecultura";
try{
    $conexao = new PDO('mysql:host=localhost;dbname=sitecultura', $usuario,$senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $erro) {
    $conexao = null
}
?>
