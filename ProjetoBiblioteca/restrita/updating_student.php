<?php
    include '../connecting.php';

    $ra = $_GET['ra'];

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cel = $_POST['celular'];
    $data = $_POST['nascimento'];

    $verifying = $connect -> prepare("UPDATE aluno SET
     nome='$nome',
     email='$email',
     dataNascimento='$data',
     celular = '$cel',
     tel = '$telefone'
    
    
      WHERE ra = '$ra' ");

      $verifying ->execute();

      header('Location: index.php')




?>