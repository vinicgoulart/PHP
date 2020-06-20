<?php
    session_start();

    include 'connect.php';
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $consulta = "SELECT * FROM clientes WHERE nome == '$name' AND senha == '$pass'";
    $resultado = $connecting -> query($consulta); //consultando '-'

    $registros = $resultado->num_rows;
    $resultado_usuario = MySQLi_fetch_assoc($resultado); //usado para criar sessões no php;

    if($registros == 1){
      $_SESSION['id'] = $resultado_usuario['id'];
      $_SESSION['name'] = $resultado_usuario['nome'];
      $_SESSION['pass'] = $resultado_usuario['senha'];
      header('Location: locked.php');

    }else {
      header('Location: index.html');
    
    }

?>