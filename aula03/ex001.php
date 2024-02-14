<?php
/*
Calculadora Colorida:

Solicite ao usuário dois números.
Solicite ao usuário uma operação (por exemplo: +, -, *, /).
Realize a operação escolhida e exiba o resultado.
Se o resultado for positivo, exiba em verde. Se for negativo, em vermelho. Se for zero, em azul.
*/

echo "Escreva um primeiro Numero: ";
$n1 = trim(fgets(STDIN));

echo "Escreva um Segundo Numero: ";
$n2 = trim(fgets(STDIN));

echo "\n\n1 = adição\n2 = subtração\n3 = multiplcação\n4 = divisão\n5 = exponenciação\n\n";

echo "Escolha uma das operações acima: ";
$operacao = trim(fgets(STDIN));

if ($operacao == 1) {
    $retorno = $n1 + $n2;
    echo "$n1 + $n2 = $retorno";
} else if ($operacao == 2) {
    $retorno = $n1 - $n2;
    echo "$n1 - $n2 = $retorno";
} else if ($operacao == 3) {
    $retorno = $n1 * $n2;
    echo "$n1 x $n2 = $retorno";
} else if ($operacao == 4) {
    $retorno = $n1 / $n2;
    echo "$n1 / $n2 = $retorno";
} else if ($operacao == 5) {
    $retorno = $n1 ** $n2;
    echo "$n1 elevado a $n2 = $retorno";
}