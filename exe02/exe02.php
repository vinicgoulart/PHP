<?php



$salario = 800;
$aumento1 = $salario * 0.20;
$aumento2 = $salario * 0.15;
$aumento3 = $salario * 0.10;
$aumento4 = $salario * 0.05;


if($salario <= 280){
    echo "Salário computado em $salario\n";
    echo"por tanto, o vosso salário será aumentado em 20%\n";
    echo "o aumento do seu salário é de $aumento1\n";
    echo "Portanto, seu novo salário é de:" .($salario + $aumento1);
}
if($salario > 280 && $salario <= 700){
    echo "Salário computado em $salario\n";
    echo"por tanto, o vosso salário será aumentado em 15%\n";
    echo "o aumento do seu salário é de $aumento2\n";
    echo "Portanto, seu novo salário é de:" .($salario + $aumento2);
}
if($salario > 700 && $salario <= 1500){
    echo "Salário computado em $salario\n";
    echo"por tanto, o vosso salário será aumentado em 10%\n";
    echo "o aumento do seu salário é de $aumento3\n";
    echo "Portanto, seu novo salário é de:" .($salario + $aumento3);
}
if($salario > 1500){
    echo "Salário computado em $salario\n";
    echo"por tanto, o vosso salário será aumentado em 5%\n";
    echo "o aumento do seu salário é de $aumento4\n";
    echo "Portanto, seu novo salário é de:" .($salario + $aumento4);
}
if($salario < 280){
    echo "Salário computado em $salario\n";
    echo"por tanto, o vosso salário será aumentado em 20%\n";
    echo "o aumento do seu salário é de $aumento1\n";
    echo "Portanto, seu novo salário é de:" .($salario + $aumento1);
}


?>;