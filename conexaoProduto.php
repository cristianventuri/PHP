<?php
    session_start();
    $data = mysqli_connect('localhost', 'root', '', 'uniasselvi');

    $produto = "";
    $quantidade = "";
    $valor = "";
    $id = 0;
    $update = false;

    if (isset($_POST['salva'])) {
        $produto = $_POST["produto"];
        $quantidade = $_POST["quantidade"];
        $valor = $_POST["valor"];

        mysqli_query($data, "INSERT INTO produtos (produto, quantidade, valor) VALUES ('$produto', '$quantidade', '$valor')");
        $_SESSION['message'] = "Incluido";
        header('location: produto.php');
    }

    if (isset($_GET['excluir'])) {
        $id = $_GET['excluir'];
        mysqli_query($data, "DELETE FROM produtos WHERE id=$id");
        header('location: produto.php');
    }


    $results = mysqli_query($data, "SELECT * FROM produtos");

