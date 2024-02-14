<?php 
include 'Cachorro.php';
include 'Gato.php';

$gato = new Gato();

$gato->fazerSom();
$gato->seAlimentar();

$cachorro = new Cachorro();

echo "{$cachorro->fazerSom()}";
echo "{$cachorro->seAlimentar()}";


?>