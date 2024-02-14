<?php 

/*Conversor de Temperatura:

Peça ao usuário para inserir uma temperatura em Celsius.
Converta essa temperatura para Fahrenheit.
Exiba a temperatura original em Celsius e a convertida em Fahrenheit.
Fórmula de conversão: 

F = C × 9/5 + 32 
*/

echo "Qual a temperatura em C°(Celsius)? ";
$celsius = trim(fgets(STDIN));

$convert = $celsius * (9/5) + 32;

echo "$celsius C° equivale à $convert F° (Faherenheit)";


