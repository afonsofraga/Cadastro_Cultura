<?php 
   include_once("validarcpf.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="estilos/paletadecores.css">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/estiloformularios.css">
</head>

<body>
   <?php require 'menu.php' ?>
       <div class="box">
        <form action="processaconecta.php" method="post">
            <fieldset>
               <legend><b>Cadastro de Usuários</legend>
               <br>
               <div class="inputBox"> 
                  <input type="text" name="nome" id="nome" class="inputUser" required>
                  <label form="nome" class="labelInput">Nome completo</label>
               </div>
               <br>
               <div class="inputBox"> 
                  <input type="cpf" name="cpf" id="cpf" class="inputUser" required onfocusout="validacpf()"><br/>
                     <label form="cpf" class="labelInput">CPF</label>
               </div>
               <br>
               <div class="inputBox"> 
                  <input type="text" name="email" id="email" class="inputUser" required>
                  <label form="email" class="labelInput">Email</label>
                 </div>
                 <br>
               <div class="inputBox"> 
                  <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label form="senha" class="labelInput">Senha</label>
               </div>
               <br>
               <div class="botao">
                  <input type="submit" name="submit" id="submit">
               </div>
            </fieldset>
        </form>
    </div>
    <?php require 'rodape.php' ?>
</body>
</html>