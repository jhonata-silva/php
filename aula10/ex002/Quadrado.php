<?php 
include 'Forma.php';

class Quadrado extends Forma{
    public function calculoArea($altura, $base)
    {
        return $altura * $base;
    }
}

?>