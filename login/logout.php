<?php
    session_start();
    unset(
        $_SESSION['id'];
        $_SESSION['nome'];
        $_SESSION['senha'];

    )
    
    header('Location: index.html')

?>