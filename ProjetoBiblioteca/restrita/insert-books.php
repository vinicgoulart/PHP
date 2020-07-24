<?php
    include '../connecting.php';

    $titulo = $_POST['titulo'];
    $Autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $paginas = $_POST['paginas'];
    $qntdExemp = $_POST['qntd'];
    $genero = $_POST['select'];

    $consulta = $connect -> prepare("INSERT INTO livros(titulo, autor, genero, editora, paginas, qtdeExemplares) VALUES ('$titulo', '$Autor', '$genero', '$editora', '$paginas', '$qntdExemp')");

    $consulta -> execute();

    header('Location: index.php');



?>