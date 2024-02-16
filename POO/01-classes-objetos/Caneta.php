<?php 
//Feito por: Cicero Jhonata
// Criando uma Classe e Objetos

class Caneta {
    var $Modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        if ($this->tampada == true){
            return 'Erro, a caneta está tampada';
        } else {
            return 'Rabisco';
        }
    }

    function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }
}


?>