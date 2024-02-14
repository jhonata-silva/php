<?php 
include 'Forma.php';

class Triangulo extends Forma{
    public function calculoArea($altura, $base)
    {
        return ($altura * $base) / 2;
    }
}

?>