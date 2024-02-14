<?php 
/*
Conversor de Distância:

Peça ao usuário para inserir uma distância em quilômetros.
Converta essa distância para milhas.
Exiba a distância original em quilômetros e a convertida em milhas.
Fórmula de conversão: 1 quilometro = 0,621371 milhas
*/

echo "inserira uma distância em quilômetros: ";
$dist_kl = trim(fgets(STDIN));

$dist_ml = $dist_kl / 1.609;
$new_dist_ml = substr($dist_ml, 0, 5);

echo "Distancia em:\nKilometros: $dist_kl\nMilhas: $new_dist_ml";