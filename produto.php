<?php
    include_once "conexao.php";

    $produto = "";
    $quantidade = "";
    $valor = "";
    $id = 0;

    if (isset($_POST['salva'])) {
        $produto = $_POST["produto"];
        $quantidade = $_POST["quantidade"];
        $valor = $_POST["valor"];

        if(isset($_POST['id']) && $_POST['id']!= null){
            mysqli_query($conexao, "UPDATE produtos SET produto='$produto', quantidade='$quantidade', valor='$valor' WHERE id=".$_POST['id']);
        } else{
            mysqli_query($conexao, "INSERT INTO produtos (produto, quantidade, valor) VALUES ('$produto', '$quantidade', '$valor')");
        }
        $_SESSION['message'] = "Incluido";
    }

    $dadoEditar = array();

    if (isset($_GET['editar'])){
        $query = mysqli_query($conexao, "SELECT * FROM produtos where id=".$_GET['editar']);
        $dadoEditar = mysqli_fetch_array($query);
    }

    $id = isset($dadoEditar['id']) ? $dadoEditar['id'] : '';
    $produto = isset($dadoEditar['produto']) ? $dadoEditar['produto'] : '';
    $quantidade = isset($dadoEditar['quantidade']) ? $dadoEditar['quantidade'] : '';
    $valor = isset($dadoEditar['valor']) ? $dadoEditar['valor'] : '';

    if (isset($_GET['excluir'])) {
        $id = $_GET['excluir'];
        mysqli_query($conexao, "DELETE FROM produtos WHERE id=$id");
        $_SESSION['message'] = "Excluido";
    }

    $resultado = mysqli_query($conexao, "SELECT * FROM produtos"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Produto</title>
    </head>
    <header>
    </header>
    <body>
        <div align="center">
            <table border="1 black">
                <tr>
                    <th><a href="index.php">Home</a></th>
                    <th><a href="pessoa.php">Pessoas</a></th>
                    <th><a href="produto.php">Produtos</a></th>
                </tr>
            </table>
        </div>
        <div align="center">
            <div id="caixa">
                <h3>Cadastro Produtos</h3>
                <form method="POST" action="produto.php">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <div>
                        <label>Produto:</label>
                        <input type="text" name="produto" value="<?php echo $produto?>" required>
                    </div>
                    <div>
                        <label>Quantidade:</label>
                        <input type="text" name="quantidade" value="<?php echo $quantidade?>" required>
                    </div>
                    <div>
                        <label>Valor:</label>
                        <input type="text" name="valor" value="<?php echo $valor?>" required>
                    </div>
                    <button class="btn" type="submit" name="salva" >Salvar</button>
                </form>
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
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Valor</th>
                        <th colspan="2">Ação</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($resultado)) { ?>
                    <tr>
                        <td><?php echo $row['produto']; ?></td>
                        <td><?php echo $row['quantidade']; ?></td>
                        <td><?php echo $row['valor']; ?></td>
                        <td>
                            <a href="produto.php?editar=<?php echo $row['id']; ?>" class="edit_btn" >Editar</a>
                        </td>
                        <td>
                            <a href="produto.php?excluir=<?php echo $row['id']; ?>" class="del_btn">Excluir</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
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

