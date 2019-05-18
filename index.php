<?php
    echo "Hello World";

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
        <div align="center">
            <div id="caixa-cadastro">
                <h3>Novo Usuário</h3>
                <form method="POST" action="index.php">
                    <label>Usuário:</label>
                    <input type="text" name="nome" value="" required>

                    <label>E-mail:</label><br>
                    <input type="email" name="email" value="" required>

                    <div>
                        <div class="box">
                            <label>Senha:</label>
                            <input type="password" name="senha" required>
                        </div>
                    </div>
                    <input type="submit" name="btnSubmit" class="botao" value="Gravar">
                </form>
            </div>
            <div id="caixa-login">
                <h3>Entrar</h3>
                <form method="POST" action="index.php">
                    <label>E-mail:</label>
                    <input type="text" name="email" required>

                    <label>Senha:</label>
                    <input type="password" name="senha" required>
                    <input type="submit" name="btnSubmit" class="botao" value="Entrar">
                </form>
            </div>
        </div>
    </body>
</html>

<style>
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
        margin: 10px 10px 10px 0px;
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
        margin-top: 18px;
    }

</style>
