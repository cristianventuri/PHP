<?php
    include_once "conexao.php";

    $nome = "";
    $email = "";
    $senha = "";
    $id = 0;

    if (isset($_POST['salva'])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if(isset($_POST['id']) && $_POST['id']!= null){
            mysqli_query($conexao, "UPDATE pessoas SET nome='$nome', email='$email', senha='$senha' WHERE id=".$_POST['id']);
        } else{
            mysqli_query($conexao, "INSERT INTO pessoas (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
        }
        $_SESSION['message'] = "Incluido";
    }

    $dadoEditar = array();

    if (isset($_GET['editar'])){
        $query = mysqli_query($conexao, "SELECT * FROM pessoas where id=".$_GET['editar']);
        $dadoEditar = mysqli_fetch_array($query);
    }

    $id = isset($dadoEditar['id']) ? $dadoEditar['id'] : '';
    $nome = isset($dadoEditar['nome']) ? $dadoEditar['nome'] : '';
    $email = isset($dadoEditar['email']) ? $dadoEditar['email'] : '';
    $senha = isset($dadoEditar['senha']) ? $dadoEditar['senha'] : '';


    if (isset($_GET['excluir'])) {
        $id = $_GET['excluir'];
        mysqli_query($conexao, "DELETE FROM pessoas WHERE id=$id");
        $_SESSION['message'] = "Excluido";
    }

    $resultado = mysqli_query($conexao, "SELECT * FROM pessoas"); ?>

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
    <a href="pessoa.php">Pessoas</a>
    <a href="produto.php">Produtos</a>
</div>
<div align="center">
    <div id="caixa">
        <h3>Cadastro Pessoas</h3>
        <form method="POST" action="pessoa.php">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div>
                <label>Nome:</label>
                <input type="text" name="nome" value="<?php echo $nome?>" required>
            </div>
            <div>
                <label>E-mail:</label>
                <input type="text" name="email" value="<?php echo $email?>" required>
            </div>
            <div>
                <label>Senha:</label>
                <input type="password" name="senha" value="<?php echo $senha?>" required>
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
                            <a href="pessoa.php?editar=<?php echo $row['id']; ?>" class="edit_btn" >Editar</a>
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


