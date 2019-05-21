<?php
    include_once "conexao.php";

    $nome = "";
    $email = "";
    $senha = "";
    $id = 0;
    $update = false;

    if (isset($_POST['salva'])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        mysqli_query($conexao, "INSERT INTO pessoas (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
        $_SESSION['message'] = "Incluido";
        header('location: addPessoa.php');
    }

    if (isset($_GET['excluir'])) {
        $id = $_GET['excluir'];
        mysqli_query($conexao, "DELETE FROM pessoas WHERE id=$id");
        header('location: addPessoa.php');
    }


    $resultado = mysqli_query($conexao, "SELECT * FROM pessoas");

