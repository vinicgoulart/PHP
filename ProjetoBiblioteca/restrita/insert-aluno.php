<?php
    include '../connecting.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $celular = $_POST['celular'];
    $nasc = $_POST['nascimento'];
    $_turma = strtoupper($_POST['select']);

    $consulta = $connect -> prepare("INSERT INTO aluno(nome, turma, tel, email, celular, dataNascimento) VALUES ('$nome', '$turma', '$tel', '$email', '$celular', '$nasc')");

    $consulta -> execute();

    header('Location: index.php');



?>