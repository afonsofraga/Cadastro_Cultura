<?php 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="estilos/paletadecores.css">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/estiloformularios.css">
<body>
   <?php require 'menu.php' ?>
       <div class="box">
        <form action="processacontato.php" method="post" id="contato">
         <a href="index.php"> <img src="imagens/menuico.png"/></a>
            <fieldset>
                <legend><b>Formulário de Contato</legend>
                <br>
                <div class="inputBox"> 
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label form="nome" class="labelInput">Nome completo</label>
                 </div>
                 <br>

                 <div class="inputBox"> 
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label form="email" class="labelInput">Email</label>
                 </div>
                 <br>

                <div class="textarea">
                     <textarea name="mensagem" id="mensagem" class="mensagem" placeholder="Digite sua mensagem aqui"></textarea> 
                </div>
                 <br><br>

                 <input type="submit" name="submit" id="submit" value="Enviar">
            </fieldset>
        </form>
    </div>
    <?php require 'rodape.php' ?>
</body>
</html>