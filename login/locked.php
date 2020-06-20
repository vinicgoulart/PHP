<?php
    session_start();

    if ((!isset($_SESSION['id']) == true)&&(!isset($_SESSION['nome']) == true) &&(!isset($_SESSION['senha']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('location: index.html');

    }
    include 'connect.php';

    $consulta = "SELECT * FROM clientes";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site restrito</title>
</head>
<body>
    <p><a href="logout.php">SAIR</a></p>
    
</body>
</html>