<?php
    echo "Hello World";
    echo "Olá Mundo!!";

    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Index</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <header>
    </header>
    <body>
        <div class="centralizar">
            <div id="caixa-cadastro" class="float-left">
                <h3>Novo Usuário</h3>
                <form method="POST" action="index.php">
                    <label>Usuário:</label>
                    <input type="text" name="nome" value="<?= isset($_REQUEST['nome']) ? $_REQUEST['nome'] : '' ?>" required><br>

                    <label>E-mail:</label><br>
                    <input type="email" name="email" value="<?= isset($_REQUEST['email']) ? $_REQUEST['email'] : '' ?>" required><br>

                    <div class="clearfix">
                        <div class="box">
                            <label>Senha:</label>
                            <input type="password" name="senha" required>
                        </div>
                        <div class="box">
                            <label>Confirmação:</label>
                            <input type="password" name="confirmacao_senha" required>
                        </div>
                    </div>
                    <span class="mensagemValidacao"><?= ($mensagemValidacaoCadastro) ?></span>
                    <input type="submit" name="btnSubmit" class="botao" value="Gravar"><br>
                </form>
            </div>
            <div id="caixa-login" class="float-left">
                <h3>Entrar</h3>
                <form method="POST" action="index.php">
                    <label>E-mail:</label>
                    <input type="text" name="email" required><br>

                    <label>Senha:</label><br>
                    <input type="password" name="senha" required>
                    <input type="submit" name="btnSubmit" class="botao" value="Entrar">
                    <span class="mensagemValidacao"><?= ($mensagemValidacao) ?></span>
                </form>
            </div>
        </div>
    </body>
</html>

<style>
    .mensagemValidacao{
        color: red;
        font-weight: bold;
    }
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
    .box {
        float: left;
        width: 50%;
    }
    .box input{
        width: 90%;
    }
    *{
        box-sizing: border-box;
    }

    /* Caixa Login */
    #caixa-login{
        padding: 5px;
        border: 1px solid black;
        width:300px;
        padding-bottom: 30px;
        margin: 10px 10px 10px 20px;
        float left;
    }
    #caixa-login form input[type="text"]{
        width: 100%;
        margin-bottom: 10px;
    }
    #caixa-login form input[type="password"]{
        width: 50%;
        float: left;
    }
    #caixa-login form input[type="submit"]{
        width: 40%;
        float: left;
        margin-left: 10%;
    }
    /* Caixa Cadastro */
    #caixa-cadastro{
        padding: 5px;
        border: 1px solid black;
        width:300px;
        margin: 10px 10px 10px 0px;
        padding-bottom: 30px;
        float left;

    }
    #caixa-cadastro input[name="password"]{
        width: 80%;
    }
    #caixa-cadastro form input[type="text"],
    #caixa-cadastro form input[type="email"]{
        width: 100%;
    }
    #caixa-cadastro form input[type="submit"]{
        float: right;
        clear: both;
        margin-top: 10px;
    }

</style>
