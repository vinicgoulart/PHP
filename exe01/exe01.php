<?php



    $primNum = $_POST['primeironumero']; //todas as super variáveis em php são MAIÚSCULAS e tem um underline duashdas
    $segNum = $_POST['segundonumero'];
    $terNum = $_POST['terceironumero'];
 
    if ($primNum > $segNum && $segNum > $terNum){
        echo "Ordem crescente dos números: $terNum, $segNum, $primNum";
    }
    elseif ($primNum > $terNum && $terNum > $segNum){
        echo "Ordem crescente dos números: $segNum, $terNum, $primNum";
    }
    elseif ($segNum > $primNum && $primNum > $terNum){
        echo "Ordem crescente dos números: $terNum, $primNum e $segNum";
    }
    elseif($segNum > $terNum && $terNum > $primNum){
        echo "Ordem crescente dos números: $primNum, $terNum e $segNum";
    }
    elseif($terNum > $primNum && $primNum > $segNum){
        echo "Ordem crescente dos números: $terNum, $primNum e $segNum";
    }
    elseif($terNum > $segNum && $segNum > $primNum){
        echo "Ordem crescente dos números: $primNum, $segNum e $terNum";
    }
    else{
        echo "Os números são iguais!";
    }

