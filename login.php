<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loguin</title>
</head>

<body>
    <?php require_once 'menu.php'?>
    <div class="login">
        <form action="validacao_login.php" method="post">
            <fieldset>
                <legend>Login</legend>
                <br>
                <div class="inputBox">
                    <input value="" type="email" name="email" id="email" class="inputUser" value="<?php echo $_SESSION['email'];?>" required>
                    <label form="email" class="labelInput">E-mail</label>
                </div>
                <br>
                                    
                <div class="inputBox">
                    <input value="" type="password" name="senha" id="senha" class="inputUser" required>
                    <label form="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <a href="esqueceusenha.php">Esqueceu sua senha?</a>
                <br><br>
                <div class="botoes">
                    <input type="submit" name="submit" id="submit">
                    <br><br>
                    <input type="reset" name="reset" id="reset">
                </div>
            </fieldset>
            </form>
        </section>
    </div>
    <?php require_once 'rodape.php' ?>
</body>
</html>