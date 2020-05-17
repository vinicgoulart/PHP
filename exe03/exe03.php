<?php
//Faça uma página php que dado um número, exiba o dia correspondente da semana. (1-Domingo, 2- Segunda, etc.), se for outro valor deve 
//aparecer valor inválido.

$dia = 5;
switch($dia){
    case 1:
        echo "Hoje é domingo! Aproveite-o! Saia e vá se divertir, meu compadre";
        break;
    case 2:
        echo "Hoje é segunda, que pena! =(";
    case 3:
        echo "Hoje é terça, que pena 2.0 =(";
    case 4:
        echo "Hoje é quarta! que pena =(";
        break;
    case 5:
        echo "Hoje é quinta! Que pena =(";
        break;
    case 6:
        echo "Hoje é sexta! Aproveite-o! Saia e vá se divertir, meu compadre";
        break;
    case 7:
        echo "Hoje é sábado! Aproveite-o! Saia e vá se divertir, meu compadre";
        break;

    default:
        echo "Valor inválido! Poxa, verefique o número novamente";
} 