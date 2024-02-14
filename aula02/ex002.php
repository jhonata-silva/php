<?php 
/*
Calculadora de Área de Triângulo:

Peça ao usuário para inserir a base e a altura de um triângulo.
Calcule a área do triângulo.
Exiba a base, altura e a área do triângulo.
Fórmula da área: 
Area = (base × altura) /  2
*/

echo "Qual a Base do triangulo em metros? ";
$base = trim(fgets(STDIN));

echo "Qual a Altura do triangulo em metros? ";
$altura = trim(fgets(STDIN));

$area = ($base * $altura) / 2;

echo "A área do triangulo é igual a $area m²";