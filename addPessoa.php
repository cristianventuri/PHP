<?php include_once "pessoa.php"; ?>
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
                <h3>Cadastro Pessoas</h3>
                <form method="POST" action="addPessoa.php">
                    <div>
                        <label>Nome:</label>
                        <input type="text" name="nome" required>
                    </div>
                    <div>
                        <label>E-mail:</label>
                        <input type="text" name="email" required>
                    </div>
                    <div>
                        <label>Senha:</label>
                        <input type="password" name="senha" required>
                    </div>
                    <button class="btn" type="submit" name="salva" >Salvar</button>
                </form>
            <div>
        </div>
        <div>
            <p>
                <?php
                if(isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                ?>
            </p>
            <table border="1">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th colspan="2">Ação</th>
                </tr>
                </thead>
                <?php while ($row = mysqli_fetch_array($resultado)) { ?>
                    <tr>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['senha']; ?></td>
                        <td>
                            <a href="index.php?edit=<?php echo $row['nome']; ?>" class="edit_btn" >Editar</a>
                        </td>
                        <td>
                            <a href="pessoa.php?excluir=<?php echo $row['id']; ?>" class="del_btn">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>

<style>
    table{
        margin-top: 20px;
        width 100%;
    }
    #caixa{
        width:400px;
    }
    #caixa form input[type="text"]{
        width: 100%;
        margin-bottom: 10px;
    }
    #caixa form input[type="password"]{
        width: 100%;
        margin-bottom: 10px;
    }
    #caixa form input[type="submit"]{
        width: 40%;
        margin-top: 10%;
    }
    p{
        margin-top: 20px;
        color: green;
    }
</style>
