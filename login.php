<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loguin</title>   
    
</head>
<body>
    <?php require 'menu.php'?>
    <section>
        <fieldset> 
                <legend>Login</legend>
                <br>
                <div class="inputBox">
                     <input value="" type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label form="cpf" class="labelInput">CPF</label>
                 </div>
                 <br>
                                 
                 <div class="inputBox"> 
                    <input value="" type="password" name="senha" id="senha" class="inputUser" required>
                    <label form="senha" class="labelInput">Senha</label>
                 </div>
                 <br>
                 <a href="esqueceusenha.html">Esqueceu sua senha?</a>
                 <br><br>
                 <input type="submit" name="submit" id="submit">
                 <br><br>
                 <input type="reset" name="reset" id="reset">
            </fieldset>
    </section>
    <?php require 'rodape.php' ?>
</body>
</html>