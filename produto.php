<?php include_once "conexaoProduto.php"; ?>
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
        <form method="POST" action="conexaoProduto.php">
            <div>
                <label>Produto:</label>
                <input type="text" name="produto" required>
            </div>
            <div>
                <label>Quantidade:</label>
                <input type="text" name="quantidade" required>
            </div>
            <div>
                <label>Valor:</label>
                <input type="password" name="valor" required>
            </div>
            <button class="btn" type="submit" name="salva" >Salvar</button>
        </form>
        <div>
        </div>
        <div>
            <table border="1">
                <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th colspan="2">Ação</th>
                </tr>
                </thead>
                <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['produto']; ?></td>
                        <td><?php echo $row['quantidade']; ?></td>
                        <td><?php echo $row['valor']; ?></td>
                        <td>
                            <a href="conexaoProduto.php?edit=<?php echo $row['produto']; ?>" class="edit_btn" >Editar</a>
                        </td>
                        <td>
                            <a href="conexaoProduto.php?excluir=<?php echo $row['id']; ?>" class="del_btn">Excluir</a>
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
</style>
