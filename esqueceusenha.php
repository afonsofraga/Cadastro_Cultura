<?php 
include_once("conectabancodedados.php");

if(isset($_post[''])){
    $novasenha * substr(md5(time()),0 ,6);
}
echo substr(md5(time()),0 ,6);

?>
<!DOCTYPE html>
<html lang="pt-br>
<head>
<meta charset= "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loguin</title>
    <link rel="stylesheet" href="estilos/paletadecores.css">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/estiloformularios.css">
</head>

<body>

    <?php require 'menu.php' ?>               
    <div class="box">
        <form action="">
            
            <fieldset>
                <legend>Esqueceu sua senha</legend>
                <br>
                <div class="inputBox"> 
                    <input value="" type="text" name="email" id="email" class="inputUser" required>
                    <label form="email" class="labelInput">E-mail</label>
                 </div>
                 <br><br>
                 <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    <?php require 'rodape.php' ?>
</body>
</html>