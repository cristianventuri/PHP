<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_query($link, "CREATE DATABASE uniasselvi;" );

include "conexao.php";

mysqli_query($data,
"CREATE TABLE pessoas (
      id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
      nome varchar(100) NOT NULL,
      email varchar(100) NOT NULL,
      senha varchar(100) NOT NULL) ;"
);
mysqli_query($data,
"CREATE TABLE produtos (
      id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
      produto varchar(100) NOT NULL,
      valor varchar(100) NOT NULL,
      quantidade varchar(100) NOT NULL
    ) ;
");

header('location: index.php');
