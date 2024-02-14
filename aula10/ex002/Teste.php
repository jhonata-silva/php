<?php 
include 'Forma.php';
include 'Quadrado.php';
include 'Triangulo.php';

$quadrado = new Quadrado();
$areaQuad = $quadrado->calculoArea(4, 4);
echo '$areaQuad';

$triangulo = new Triangulo();
$aresTri = $triangulo->calculoArea(4, 4);
echo '$areaTri';

?>