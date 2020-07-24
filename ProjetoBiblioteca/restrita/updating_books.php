<?php
    include '../connecting.php';

    $codlivro = $_GET['codlivro'];

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $paginas = $_POST['paginas'];
    $qtdeExemplares = $_POST['qntd'];

    $verifying = $connect -> prepare("UPDATE livros SET
     titulo='$titulo',
     autor='$autor',
     editora='$editora',
     paginas = '$paginas',
     qtdeExemplares = '$qtdeExemplares'
    
    
      WHERE codlivro = '$codlivro' ");

      $verifying ->execute();

      header('Location: index.php');




?>