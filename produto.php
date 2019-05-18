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
            <a href="produto.php">Produtos</a>
        </div>
        <div align="center">
            <div id="caixa">
                <h3>Cadastro Produtos</h3>
                <form method="POST" action="index.php">
                    <label>Produto:</label>
                    <input type="text" name="produto" value="" required>

                    <label>Quantidade:</label>
                    <input type="text" name="qtd" required>

                    <label>Valor:</label>
                    <input type="text" name="vlr" required>
                    <input type="submit" name="btnSubmit" value="Cadastrar">
                </form>
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
    #caixa form input[type="submit"]{
        width: 40%;
        margin-top: 10%;
    }
</style>
