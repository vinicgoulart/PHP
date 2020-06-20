<?php

    include 'connect.php';
    $nome = $_POST['name'];
    $idade = $_POST['age'];
    $senha = $_POST['pass'];

    $consulta = $connecting->prepare("INSERT INTO clientes (nome, idade, senha) VALUES ('$nome', '$idade' , '$senha')");

    $consulta->execute();

?>