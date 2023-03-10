<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="estilos/paletadecores.css">
    <link rel="stylesheet" href="estilos/estiloformularios.css">
</head>

<body>
   <?php require 'menu.php' ?>
    <div class="box">
        <form action="index.php" method="post">
            <fieldset class="principal">
                <legend><b>Cadastro de Clientes></legend>
                <br>
                <br>
                <div class="inputBox"> 
                  <input type="cpf" name="cpf" id="cpf" class="inputUser" onchange="validaCPF();" required>
                  <label form="cpf" class="labelInput">CPF</label>
               </div>
               <br>

               <div class="direita">
                  <fieldset>
                     <legend><b>Endereço</legend>
                     <div class="inputBox"> 
                        <input type="tipovia" name="tipovia" id="tipovia" class="inputUser" required>
                        <label form="tipovia" class="labelInput">Tipo de via</label>
                     </div>
                     <br>

                     <div class="inputBox"> 
                        <input type="logradouro" name="logradouro" id="logradouro" class="inputUser" required>
                        <label form="logradouro" class="labelInput">Logradouro</label>
                        
                     </div>
                     <br>

                     <div class="inputBox"> 
                        <input type="numero" name="numero" id="numero" class="inputUser" required>
                        <label form="numero" class="labelInput">Número</label>
                     </div>
                     <br>

                     <div class="inputBox"> 
                        <input type="complemento" name="complemento" id="complemento" class="inputUser" required>
                        <label form="complemento" class="labelInput">Complemento</label>
                     </div>
                     <br>

                     <div class="inputBox"> 
                        <input type="bairro" name="bairro" id="bairro" class="inputUser" required>
                        <label form="bairro" class="labelInput">Bairro</label>
                     </div>
                     <br>

                     <div class="inputBox"> 
                        <input type="municipio" name="municipio" id="municipio" class="inputUser" required>
                        <label form="municipio" class="labelInput">Municipio</label>
                     </div>
                     <br>

                     <div class="inputBox"> 
                        <input list="uf" name="uf" id="uf" class="inputUser" required>
                        <label form="uf" class="labelInput">UF</label>
                     </div>
                     <br>
                  </fieldset> 
               </div>

               <!--<div class="esquerda">
                  <fieldset>
                     <legend><b>Documentos</legend>
                     <div class="inputBox"> 
                        <input type="tipovia" name="tipovia" id="tipovia" class="inputUser" required>
                        <label form="tipovia" class="labelInput">Tipo de via</label>
                     </div>
                     <br><br>
      
                     <div class="inputBox"> 
                        <input type="logradouro" name="logradouro" id="logradouro" class="inputUser" required>
                        <label form="logradouro" class="labelInput">Logradouro</label>
                        
                     </div>
                     <br><br>
      
                     <div class="inputBox"> 
                        <input type="numero" name="numero" id="numero" class="inputUser" required>
                        <label form="numero" class="labelInput">Número</label>
                     </div>
                     <br><br>
      
                     <div class="inputBox"> 
                        <input type="complemento" name="complemento" id="complemento" class="inputUser" required>
                        <label form="complemento" class="labelInput">Complemento</label>
                     </div>
                     <br><br>
      
                     <div class="inputBox"> 
                        <input type="bairro" name="bairro" id="bairro" class="inputUser" required>
                        <label form="bairro" class="labelInput">Bairro</label>
                     </div>
                     <br><br>
      
                     <div class="inputBox"> 
                        <input type="municipio" name="municipio" id="municipio" class="inputUser" required>
                        <label form="municipio" class="labelInput">Municipio</label>
                     </div>               
                     <br><br>
                  </fieldset>   
               </div>   -->              
            </fieldset>
    </form>
    </div>
    <?php require 'rodape.php' ?>
 </body>
</html>