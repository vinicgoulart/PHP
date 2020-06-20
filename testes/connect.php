<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "uninove";

$connecting = new MySQLi("$host", "$usuario", "$senha", "$banco");

$connecting -> set_charset("utf-8");

if($connecting -> connect_error){
    echo "Erro de Conexão!";
} else {
    echo "Conexão bem sucedida";
}

?>