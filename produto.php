<?php
    include_once "conexao.php";

    $produto = "";
    $quantidade = "";
    $valor = "";
    $id = 0;
    $update = false;

    if (isset($_POST['salva'])) {
        $produto = $_POST["produto"];
        $quantidade = $_POST["quantidade"];
        $valor = $_POST["valor"];

        mysqli_query($conexao, "INSERT INTO produtos (produto, quantidade, valor) VALUES ('$produto', '$quantidade', '$valor')");
        $_SESSION['message'] = "Incluido";
        header('location: addProduto.php');
    }

    if (isset($_GET['excluir'])) {
        $id = $_GET['excluir'];
        mysqli_query($conexao, "DELETE FROM produtos WHERE id=$id");
        header('location: addProduto.php');
    }


    $resultado = mysqli_query($conexao, "SELECT * FROM produtos");

