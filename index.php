<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Index</title>
    </head>
    <header>
    </header>
    <body>
        <div id="opcoes-menu">
            <a href="index.php">Home</a>
            <a href="addProduto.php">Produtos</a>
        </div>
        <div align="center">
            <div id="caixa">
                <h3>Login</h3>
                <form method="POST" action="pessoa.php">
                    <div>
                        <label>E-mail:</label>
                        <input type="text" name="email" required>
                    </div>
                    <div>
                        <label>Senha:</label>
                        <input type="password" name="senha" required>
                    </div>
                    <button class="btn" type="submit" name="salva" >Login</button>
                </form>
                <a href="addPessoa.php">
                    <button> Cadastrar </button>
                </a>
            </div>
        </div>
    </body>
</html>

<style>
    }
    .box input{
        width: 90%;
    }
    /* Caixa */
    #caixa{
        padding: 5px;
        border: 1px solid black;
        width:300px;
        padding-bottom: 30px;
        margin: 10px 10px 10px 0px;
        float left;
    }
    #caixa form input[type="text"]{
        width: 100%;
        margin-bottom: 10px;
    }
    #caixa form input[type="password"]{
        width: 100%;
        margin-bottom: 10px;
    }
    button {
        width: 40%;
        margin-top: 10px;
    }
    #caixa form input[type="submit"]{
        width: 40%;
        margin-top: 10%;
    }
</style>
