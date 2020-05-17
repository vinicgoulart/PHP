<?php
/*4- Faça um script em PHP que lê as duas notas parciais obtidas por um aluno numa disciplina ao longo de um semestre, e calcule a sua média. 
A atribuição de conceitos obedece à tabela abaixo:

Média de Aproveitamento  Conceito
Entre 9.0 e 10.0            A
Entre 7.5 e 9.0             B
Entre 6.0 e 7.5             C
Entre 4.0 e 6.0             D
Entre 4.0 e zero            E
O algoritmo deve mostrar na tela as notas, a média, o conceito correspondente e a mensagem “APROVADO” se o conceito for A, B ou C ou 
“REPROVADO” se o conceito for D ou E.
*/
$n1 = 8;
$n2 = 6;
$media = ($n1 + $n2)/2;

if($media >= 9 && $media < 10){
    echo "Aprovado, fechando o bimestre com A, correspondendo à $media";
}elseif($media >= 0 && $media <= 4){
    echo "Reprovado, fechando o bimestre com E, correspondendo à $media";

}elseif($media >= 7 && $media <9){
    echo "Aprovado, fechando o bimestre com B, correspondendo à $media";

}elseif($media >= 4 && $media <= 6){
    echo "Reprovado, fechando o bimestre com D, correspondendo à $media";
}elseif($media >= 0 && $media < 4){
    echo "Aprovado, fechando o bimestre com C, correspondendo à $media";
}else{
    echo "Essa nota é inválida, tente novamente!";
}

?>